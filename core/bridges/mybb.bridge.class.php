<?php
 /*
 * Project:		eqdkpPLUS Libraries: myHTML
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2008
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		libraries:myHTML
 * @version		$Rev$
 *
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

class mybb_bridge extends bridge_generic {
	public static function __shortcuts() {
		$shortcuts = array('config', 'user', 'env', 'time');
		return array_merge(parent::$shortcuts, $shortcuts);
	}

	public static $name = 'MyBB';

	public $data = array(
		//Data
		'groups' => array( //Where I find the Usergroup
			'table'	=> 'usergroups', //without prefix
			'id'	=> 'gid',
			'name'	=> 'title',
			'QUERY'	=> '',
		),
		'user_group' => array( //Zuordnung User zu Gruppe,
			'QUERY'	=> '',
			'FUNCTION'	=> 'mybb_get_user_groups',
		),
		'user'	=> array( //User
			'table'	=> 'users',
			'id'	=> 'uid',
			'name'	=> 'username',
			'where'	=> 'username',
			'password' => 'password',
			'email'	=> 'email',
			'salt'	=> 'salt',
			'QUERY'	=> '',
		),
	);

	public $functions = array(
		'login'	=> array(
			'callbefore'	=> '',
			'function' 		=> '',
			'callafter'		=> 'mybb_callafter',
		),
		'logout' 	=> 'mybb_logout',
		'autologin' => '',
		'sync'		=> 'mybb_sync',
	);

	public $settings = array(
		'cmsbridge_disable_sso'	=> array(
			'type'	=> 'radio',
		),
		'cmsbridge_disable_sync' => array(
			'type'	=> 'radio',
		),
	);

	public $sync_fields = array(
		'icq',
		'birthday',
		'msn',
		'user_email',
		'username',
	);

	//Needed function
	public function check_password($password, $hash, $strSalt = '', $boolUseHash){

		if($this->salt_password(md5($password), $strSalt) == $hash){
			return true;
		}

		return false;
	}

	public function mybb_get_user_groups($intUserID){
		$objQuery = $this->db->prepare("SELECT usergroup, additionalgroups FROM ".$this->prefix."users WHERE uid=?")->execute($intUserID);
		$arrReturn = array();
		if ($objQuery){
			$result = $objQuery->fetchAssoc();
			$arrReturn[] = (int)$result['usergroup'];
	
			$arrAditionalGroups = explode(',', $result['additionalgroups']);
			if (is_array($arrAditionalGroups)){
				foreach ($arrAditionalGroups as $group){
					$arrReturn[] = (int)$group;
				}
			}
		}		

		return $arrReturn;
	}

	private function salt_password($password, $salt) {
		return md5(md5($salt).$password);
	}

	public function mybb_callafter($strUsername, $strPassword, $boolAutoLogin, $arrUserdata, $boolLoginResult, $boolUseHash){
		//Is user active?
		if ($boolLoginResult){
			if ($arrUserdata['usergroup'] == '5') {
				return false;
			}
			//Single Sign On
			if ($this->config->get('cmsbridge_disable_sso') != '1'){
				$this->mybb_sso($arrUserdata, $boolAutoLogin);
			}
		}
		return true;
	}

	public function mybb_sync($arrUserdata){
		if ($this->config->get('cmsbridge_disable_sync') == '1'){
			return false;
		}
		$sync_array = array(
			'icq' 			=> $arrUserdata['icq'],
			'birthday'		=> $this->_handle_birthday($arrUserdata['birthday']),
			'msn'			=> $arrUserdata['msn'],
		);
		return $sync_array;
	}

	private function _handle_birthday($date){
		list($d, $m, $y) = explode('-', $date);
		if ($y != '' && $y != 0 && $m != '' && $m != 0 && $d != '' && $d != 0){
			return $this->time->mktime(0,0,0,$m,$d,$y);
		}
		return 0;
	}

	public function mybb_sso($arrUserdata, $boolAutoLogin = false){
		$user_id = $arrUserdata['id'];
		$strSessionID = md5(generateRandomBytes(55));
		$this->db->prepare("DELETE FROM ".$this->prefix."sessions WHERE uid=?")->execute($user_id);

		$query = $this->db->query("SELECT name,value FROM ".$this->prefix."settings");
		if ($query){
			$result = $query->fetchAllAssoc();
			if (is_array($result)){
				foreach ($result as $row){
					$arrConfig[$row['name']] = $row['value'];
				}
			}
		} else return false;		

		//PW is true, logg the user into our Forum
		$arrSet = array(
			'sid'		=> $strSessionID,
			'uid'		=> (int) $user_id,
			'ip'		=> $this->get_ip(),
			'time'		=> (int) $this->time->time,
			'location'	=> '',
			'useragent'	=> (string) trim(substr($this->env->useragent, 0, 149)),
			'anonymous'	=> 0,
			'nopermission'	=> 0,
			'location1'	=> 0,
			'location2'	=> 0,
		);
		
		$this->db->prepare("INSERT INTO ".$this->prefix."sessions :p")->set($arrSet)->execute();
		
		$logincredentials = $user_id.'_'.$arrUserdata['loginkey'];
		
		if($arrConfig['cookiedomain'] == '') {
			$arrDomains = explode('.', $this->env->server_name);
			$arrDomainsReversed = array_reverse($arrDomains);
			if (count($arrDomainsReversed) > 1){
				$arrConfig['cookie_domain'] = '.'.$arrDomainsReversed[1].'.'.$arrDomainsReversed[0];
			} else {
				$arrConfig['cookie_domain'] = $this->env->server_name;
			}
		}
		// Set cookie
		$expire = $this->time->time + 31536000;
		//SID Cookie
		setcookie($arrConfig['cookieprefix'].'sid', $strSessionID, $expire, $arrConfig['cookiepath'], $arrConfig['cookiedomain']);
		//User-Cookie
		setcookie($arrConfig['cookieprefix'].'uid', $user_id, $expire, $arrConfig['cookiepath'], $arrConfig['cookiedomain']);
		setcookie($arrConfig['cookieprefix'].'mybbuser', $logincredentials, $expire, $arrConfig['cookiepath'], $arrConfig['cookiedomain']);

		return true;
	}

	function get_ip()
	{
		if(isset($_SERVER['REMOTE_ADDR']))
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			if(preg_match_all("#[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}#s", $_SERVER['HTTP_X_FORWARDED_FOR'], $addresses))
			{
				foreach($addresses[0] as $key => $val)
				{
					if(!preg_match("#^(10|172\.16|192\.168)\.#", $val))
					{
						$ip = $val;
						break;
					}
				}
			}
		}

		if(!isset($ip))
		{
			if(isset($_SERVER['HTTP_CLIENT_IP']))
			{
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			}
			else
			{
				$ip = '';
			}
		}

		$ip = preg_replace("#([^.0-9 ]*)#", "", $ip);
		return $ip;
	}

	public function mybb_logout(){
		$query = $this->db->query("SELECT name,value FROM ".$this->prefix."settings");
		if ($query){
			$result = $query->fetchAllAssoc();
			if (is_array($result)){
				foreach ($result as $row){
					$arrConfig[$row['name']] = $row['value'];
				}
			}
		} else return false;

		$arrUserdata = $this->get_userdata($this->user->data['username']);
		if (isset($arrUserdata['id'])){
			$this->db->prepare("DELETE FROM ".$this->prefix."sessions WHERE uid=?")->execute($arrUserdata['id']);
		}
		setcookie($arrConfig['cookieprefix'].'sid', '', $expire, $arrConfig['cookiepath'], $arrConfig['cookiedomain']);
		//User-Cookie
		setcookie($arrConfig['cookieprefix'].'uid', '', $expire, $arrConfig['cookiepath'], $arrConfig['cookiedomain']);
		setcookie($arrConfig['cookieprefix'].'mybbuser', '', $expire, $arrConfig['cookiepath'], $arrConfig['cookiedomain']);
	}

}
?>