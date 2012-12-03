<?php
/******************************
 * EQdkp ItemSpecials Plugin
 * (c) 2006 by WalleniuM [Simon Wallmann]
 * http://www.wallenium.de   
 * ------------------
 * functions.php
 * Changed: November 10, 2006
 * 
 ******************************/

// the data import
$class_names['german'] = array(
        'Warrior'		=> 'Krieger',
        'Paladin'		=> 'Paladin',	
        'Hunter'		=> 'J�ger',
        'Warlock'		=> 'Hexenmeister',
        'Priest'		=> 'Priester',
        'Mage'			=> 'Magier',
        'Rogue'			=> 'Schurke',
        'Druid'			=> 'Druide',
        'Shaman'		=> 'Schamane'
        );

$class_names['french'] = array(
        'Warrior'		=> 'Guerrier',
        'Paladin'		=> 'Paladin',	
        'Hunter'		=> 'Chasseur',
        'Warlock'		=> 'D�moniste',
        'Priest'		=> 'Pr�tre',
        'Mage'			=> 'Mage',
        'Rogue'			=> 'Voleur',
        'Druid'			=> 'Druide',
        'Shaman'		=> 'Chaman'
        );
        
$class_names['chinese'] = array(
        'Warrior'		=> 'սʿ',
        'Paladin'		=> 'ʥ��ʿ',	
        'Hunter'		=> '����',
        'Warlock'		=> '��ʿ',
        'Priest'		=> '��ʦ',
        'Mage'			=> '��ʦ',
        'Rogue'			=> '����',
        'Druid'			=> '��³��',
        'Shaman'		=> '����'
        );

// Script Execution Time
function ISgetmicrotime(){
  list($usec, $sec) = explode(" ",microtime());
  return ((float)$usec + (float)$sec);
}

// Convert the Classnames to what you want...
function convert_Classname($classname, $language, $trans){
	global $class_names;
	if ($trans == 'from' && $language != 'english'){
			switch ($classname) {
			# English Class Names are OK. But if they're any other language....
			case "Druid"		    : break;
			case "Warlock"	    : break;
			case "Hunter"		    : break;
			case "Warrior"	    : break;
			case "Mage"			    : break;
			case "Paladin"	    : break;
			case "Priest"		    : break;
			case "Shaman"		    : break;
			case "Rogue"		    : break;
		# ...convert them into English!
			case $class_names[$language]['Druid']		    : $classname = "Druid";		break;
			case $class_names[$language]['Warlock']			: $classname = "Warlock";	break;
			case $class_names[$language]['Hunter']		  : $classname = "Hunter";	break;
			case $class_names[$language]['Warrior']		  : $classname = "Warrior";	break;
			case $class_names[$language]['Mage']		    : $classname = "Mage";		break;
			case $class_names[$language]['Paladin']		  : $classname = "Paladin";	break;
			case $class_names[$language]['Priest']		  : $classname = "Priest";	break;
			case $class_names[$language]['Rogue']		  	: $classname = "Rogue";		break;
			case $class_names[$language]['Shaman']		  : $classname = "Shaman";	break;
			case "Default"		   						  					: $classname = "Unknown";	break;
			}
		return $classname;
  }elseif ($trans == 'to' && $language != 'english'){
  	switch ($classname) {
			case $class_names[$language]['Druid']		    : break;
			case $class_names[$language]['Warlock']	 		: break;
			case $class_names[$language]['Hunter']		  : break;
			case $class_names[$language]['Warrior']		  : break;
			case $class_names[$language]['Mage']		    : break;
			case $class_names[$language]['Paladin']		  : break;
			case $class_names[$language]['Priest']		  : break;
			case $class_names[$language]['Rogue']		   	: break;
			case $class_names[$language]['Shaman']	   	: break;
			case "Default"		   : break;
			case "Druid"		     : $classname = $class_names[$language]['Druid'];		break;
			case "Warlock"	     : $classname = $class_names[$language]['Warlock'];	break;
			case "Hunter"		     : $classname = $class_names[$language]['Hunter'];	break;
			case "Warrior"		   : $classname = $class_names[$language]['Warrior'];	break;
			case "Mage"		       : $classname = $class_names[$language]['Mage'];		break;
			case "Paladin"		   : $classname = $class_names[$language]['Paladin'];	break;
			case "Priest"		     : $classname = $class_names[$language]['Priest'];	break;
			case "Rogue"		     : $classname = $class_names[$language]['Rogue'];		break;
			case "Shaman"		     : $classname = $class_names[$language]['Shaman'];	break;
			case "Default"		   : $classname = $class_names[$language]['Unknown'];	break;
			}
		return $classname;
  }else{
  	return $classname;
	}
}

function convert_class_Array($classname, $array_count, $language)
	{
		global $class_names;
	for($y=0; $y<$array_count; $y++) {
	 if(isset($classname[$y])) {
		switch ($classname[$y]) {
			# german class names are OK. but...

			case $class_names[$language]['Druid']		    : break;
			case $class_names[$language]['Warlock']	 		: break;
			case $class_names[$language]['Hunter']		  : break;
			case $class_names[$language]['Warrior']		  : break;
			case $class_names[$language]['Mage']		    : break;
			case $class_names[$language]['Paladin']		  : break;
			case $class_names[$language]['Priest']		  : break;
			case $class_names[$language]['Rogue']		   	: break;
			case $class_names[$language]['Shaman']	   	: break;

			# ...convert english ones to german!

			case "Druid"		     : $classname[$y] = $class_names[$language]['Druid'];		break;
			case "Warlock"	     : $classname[$y] = $class_names[$language]['Warlock'];	break;
			case "Hunter"		     : $classname[$y] = $class_names[$language]['Hunter'];	break;
			case "Warrior"		   : $classname[$y] = $class_names[$language]['Warrior'];	break;
			case "Mage"		       : $classname[$y] = $class_names[$language]['Mage'];		break;
			case "Paladin"		   : $classname[$y] = $class_names[$language]['Paladin'];	break;
			case "Priest"		     : $classname[$y] = $class_names[$language]['Priest'];	break;
			case "Rogue"		     : $classname[$y] = $class_names[$language]['Rogue'];		break;
			case "Shaman"		     : $classname[$y] = $class_names[$language]['Shaman'];	break;
			case "Default"		   : $classname[$y] = $class_names[$language]['Unknown'];	break;
			}
		}
	}
		return $classname;
}

function array_values_recursive($array)
{
   $arrayValues = array();

   foreach ($array as $value)
   {
       if (is_scalar($value) OR is_resource($value))
       {
             $arrayValues[] = $value;
       }
       elseif (is_array($value))
       {
             $arrayValues = array_merge($arrayValues, array_values_recursive($value));
       }
   }

   return $arrayValues;
}

// Delete the item addition
function delete_customitem($item_name)
{
	global $db, $user;
        if ( (isset($item_name)) && (is_array($item_name)) )
        {
            foreach ( $item_name as $value )
            {
                $sql = "DELETE FROM ".IS_CUSTOM_TABLE."
                    WHERE custom_name='".$value."';";
                $db->query($sql);
            }
        }
}

function AddKeyToNaxxramas($blubb=false){
global $eqdkp_root_path, $user, $SID, $table_prefix, $db;
  if ($blubb == true){
      $del_sql = "DELETE FROM " . item_cache_table . " WHERE item_name = 'Zugang zu Naxxramas'";
      $db->query($del_sql);
      $sql = "INSERT INTO `".item_cache_table."` VALUES ('Zugang zu Naxxramas', '', 'orangename', 'INV_Misc_Key_04', '<table cellpadding=\'0\' border=\'0\' class=\'borderless\'><tr><td valign=\'top\'>\r\n<img class=\'itemicon\' src=\'{ITEM_ICON_LINK}\'></td><td><div class=\'wowitemt\' style=\'display:block\'><div>\r\n<span class=\'orangename\'>Zugang zu Naxxramas</span><br /></div>\r\n<div class=\'tooldiv\'><span class=\'itemdesc\'>&quot;Diesem Spieler ist der Zutritt zu Naxxramas gestattet.&quot;</span><br />\r\n</div></div></td></tr></table>');";
      $db->query($sql);      
      $del_sql = "DELETE FROM " . item_cache_table . " WHERE item_name = 'Cl� pour Naxxramas'";
      $db->query($del_sql);      
			$sql = "INSERT INTO `".item_cache_table."` VALUES ('Acc�s � Naxxramas', '', 'orangename', 'INV_Misc_Key_04', '<table cellpadding=\'0\' border=\'0\' class=\'borderless\'><tr><td valign=\'top\'>\r\n<img class=\'itemicon\' src=\'{ITEM_ICON_LINK}\'></td><td><div class=\'wowitemt\' style=\'display:block\'><div>\r\n<span class=\'orangename\'>Acc�s � Naxxramas</span><br /></div>\r\n<div class=\'tooldiv\'><span class=\'itemdesc\'>&quot;Ce joueur est autoris� � entrer dans Naxxramas.&quot;</span><br />\r\n</div></div></td></tr></table>');";
      $db->query($sql);
      $del_sql = "DELETE FROM " . item_cache_table . " WHERE item_name = 'Entry to Naxxramas'";
      $db->query($del_sql);      
      $sql = "INSERT INTO `".item_cache_table."` VALUES ('Entry to Naxxramas', '', 'orangename', 'INV_Misc_Key_04', '<table cellpadding=\'0\' border=\'0\' class=\'borderless\'><tr><td valign=\'top\'>\r\n<img class=\'itemicon\' src=\'{ITEM_ICON_LINK}\'></td><td><div class=\'wowitemt\' style=\'display:block\'><div>\r\n<span class=\'orangename\'>Entry to Naxxramas</span><br /></div>\r\n<div class=\'tooldiv\'><span class=\'itemdesc\'>&quot;This player is allowed to enter Naxxramas.&quot;</span><br />\r\n</div></div></td></tr></table>');";
      $db->query($sql);
    }
}

function GetClassLanguage()
{
global $db;
// get the first Classname (Warrior) and test if its english:
  $sql = "SELECT class_name FROM " . CLASS_TABLE . " WHERE class_name = 'Krieger' or class_name = 'Warrior' or class_name = 'Guerrier'";
  $lalala = $db->query($sql);
  $row = $db->fetch_record($lalala);
    if ($row[0] == "Warrior"){
        $classLanguage = 'english';
    } elseif ($row[0] == "Krieger"){
        $classLanguage = 'german';
    } elseif ($row[0] == "Guerrier"){
        $classLanguage = 'french';
    } elseif ($row[0] == "սʿ"){
        $classLanguage = 'chinese';
    } else {
        $classLanguage = 'english';
    }
  return $classLanguage;
}

function getClassFromName($name)
{
                global $db;
                $sql = "SELECT c.class_name
                        FROM " . CLASS_TABLE . " c, " . MEMBERS_TABLE . " m
                        WHERE m.member_name = '" . $name . "'
                        AND m.member_class_id = c.class_id;";
                if ( !($result= $db->query($sql)) )
                {
                        message_die('Could not obtain class information' . mysql_error(), '', __FILE__, __LINE__, $sql);
                }
                $row = $db->fetch_record($result);
                $db->free_result($result);
                return $row['class_name'];
}

function getStats($name, $class="", $follow=true)
{
  global $db, $pm, $denied_raid_notes, $kacknoob, $denied_raid_names, $twinks, $Sitemtable, $classLanguage;

  $itemcounter = 1;
  $raidcounter = 0;

                if(empty($class))
                        $class = getClassFromName($name);

                $sql = "SELECT item_name
                        FROM " . $Sitemtable . "
                        WHERE item_buyer = '" . $name . "' AND item_value <> 0.00";

                if ( !($items_result= $db->query($sql)) )
                {
                        message_die('Could not obtain item information', '', __FILE__, __LINE__, $sql);
                }
                while ($itemrow = $db->fetch_record($items_result) )
                {
                        if(@in_array($itemrow['item_name'], $kacknoob[convert_Classname($class, $classLanguage, 'from')]) )
                        {
                                $itemcounter++;
                        }
                }
                $db->free_result($items_result);
                $sql = "SELECT count(r.raid_id) as anzahl, raid_name, raid_note
                        FROM " . RAIDS_TABLE . " r, " . RAID_ATTENDEES_TABLE . " ra
                        WHERE r.raid_id = ra.raid_id AND ra.member_name = '" . $name . "'";
                        $sql .= (count($denied_raid_names) > 0 ? " AND ( raid_name NOT LIKE '" . implode("' AND raid_name NOT LIKE '", $denied_raid_names) ."') " : '' );
                        $sql .= "GROUP BY raid_name, raid_note;";

                if ( !($raids_result= $db->query($sql)) )
                {
                        message_die('Could not obtain raid  member information', '', __FILE__, __LINE__, $sql);
                }
                while ($raidrow = $db->fetch_record($raids_result) )
                {
                        if(!@in_array($raidrow['raid_note'], $denied_raid_notes[$raidrow['raid_name']]))
                                $raidcounter += $raidrow['anzahl'];
                }
                $db->free_result($raids_result);

                /* Twinks Raids und Items dem Mainchar zuordnen
                if ($follow == true)
                {
                        $twinks_of_char= array_keys($twinks, $name);
                        if (count($twinks_of_char) > 0)
                        {
                                foreach($twinks_of_char as $twink)
                                {
                                        $retval = getStats($twink,"",false);
                                        $raidcounter += $retval[0];
                                        $itemcounter += $retval[1] - 1;
                                }
                        }
                        if(isset($twinks[$name]))
                        {
                                $retval = getStats($twinks[$name],"",false);
                                $raidcounter += $retval[0];
                                $itemcounter += $retval[1] - 1;
                        }

                }*/
  return array($raidcounter, $itemcounter);
}

function member_display(&$row)
{
    global $eqdkp, $query_by_armor, $query_by_class, $filter, $filters, $show_all, $id;

    // Replace space with underscore (for array indices)
    // Damn you Shadow Knights!
    $d_filter = ucwords(str_replace('_', ' ', $filter));
    $d_filter = str_replace(' ', '_', $d_filter);
    $member_display = null;

    // We're filtering based on class
    if ( $filter != 'none'  ) {
       if ( $query_by_class == 1  )
       {
           // Check for valid level ranges
           //if ( $row['member_level'] > $row['min_level'] && $row['member_level'] <= $row['max_level'] ) {
              $member_display = ( ($row['member_class'] == $id ) ) ? true : false;
          // }

       } elseif ( $query_by_armor == 1 ) {
           $rows = strtolower($row['armor_type']);
           // Check for valid level ranges
           if ( $row['member_level'] > $row['min_level'] && $row['member_level'] <= $row['max_level'] ) {
             $member_display = ( $rows == $id  ) ? true : false;
           }
       }
      } else {
           // Are we showing all?
           if ( $show_all )
           {
               $member_display = true;
           }
           else
           {
               // Are we hiding inactive members?
               if ( $eqdkp->config['hide_inactive'] == '0' )
               {
                   //Are we hiding their rank?
                   $member_display = ( $row['rank_hide'] == '0' ) ? true : false;
               }
               else
               {
                   // Are they active?
                   if ( $row['member_status'] == '0' )
                   {
                       $member_display = false;
                   }
                   else
                   {
                       $member_display = ( $row['rank_hide'] == '0' ) ? true : false;
                   } // Member inactive
               } // Not showing inactive members
           } // Not showing all
       } // Not filtering by class
    return $member_display;
}

function SetISdbLanguage($language){
    global $eqdkp_root_path, $user, $SID, $table_prefix, $db;
    
  // Build the Data Array:
  if ($language && $language == 'german'){
    $dataarray = array(
    'Herz von Hakkar'   => 'Herz von Hakkar',
    'Onyxias Kopf'   => 'Onyxias Kopf',
    'Rucksack aus Onyxias Haut'   => 'Rucksack aus Onyxias Haut',
    'Kopf von Nefarian'   => 'Kopf von Nefarian',
    'Kopf des Brutw�chters Dreschbringer'   => 'Kopf des Brutw�chters Dreschbringer',
    'Kopf von Ossirian dem Narbenlosen'   => 'Kopf von Ossirian dem Narbenlosen',
    'Sehne eines ausgewachsenen schwarzen Drachen'   => 'Sehne eines ausgewachsenen schwarzen Drachen',
    'Sehne eines ausgewachsenen blauen Drachen'   => 'Sehne eines ausgewachsenen blauen Drachen',
    'Uraltes versteinertes Blatt'   => 'Uraltes versteinertes Blatt',
    'Das Auge der Offenbarung'  => 'Das Auge der Offenbarung',
    'Das Auge der Schatten'  => 'Das Auge der Schatten',
    'Onyxiaschuppenumhang'  => 'Onyxiaschuppenumhang',
    'Auge von CThun'  => "Auge von C\'Thun",
    'Zugang zu Naxxramas'  => 'Zugang zu Naxxramas',
    'Pantherbalgsack'  => 'Pantherbalgsack'
    );
   }elseif ($language && $language == 'french'){
    $dataarray = array(
    'Coeur dHakkar'   => "Coeur d\'Hakkar",
    'Tete dOnyxia'   => "T�te d\'Onyxia",
    'Sac en ecailles DOnyxia'   => "Sac en �cailles D\'Onyxia",
    'Tete de Nefarian'   => 'T�te de Nefarian',
    'Tete du seigneur des couvees Lashlayer'   => 'T�te du seigneur des couv�es Lashlayer',
    'Tete d Ossirian lIntouche'   => "T�te d\'Ossirian l\'Intouch�",
    'Tendon de dragon noir adulte'   => 'Tendon de dragon noir adulte',
    'Tendon de dragon bleu adulte'   => 'Tendon de dragon bleu adulte',
    'Feuille d Ancien cousue de tendons'   => "Feuille d\'Ancien cousue de tendons",
    'Oeil de la Divinite'  => 'Oeil de la Divinit�',
    'Oeil de lOmbre'  => "Oeil de l\'Ombre",
    'Cape en ecailles d Onyxia'  => "Cape en �cailles d\'Onyxia",
    'Oeil de CThun'  => "Oeil de C\'Thun",
    'Acces a Naxxramas'  => 'Acc�s � Naxxramas',
    'Sac en peau de panthere'  => 'Sac en peau de panth�re'
    );
  }elseif ($language && $language == 'chinese'){
    $dataarray = array(
    'Heart of Hakkar'   => '����֮��',
    'Head of Onyxia'   => '���ݿ�ϣ�ǵ�ͷ­',
    'Onyxia Hide Backpack'   => '���ݿ�ϣ��Ƥ��',
    'Head of Nefarian'   => '�η�������ͷ­',
    'Head of the Broodlord Lashlayer'   => '��ʲ�׶���ͷ­',
    'Head of Ossirian the Unscarred'   => '�ް��߰�˹�ﰲ��ͷ­',
    'Mature Black Dragon Sinew'   => '�ް��߰�˹�ﰲ��ͷ­',
    'Mature Blue Dragon Sinew'   => '���������ļ���',
    'Ancient Petrified Leaf'   => 'Զ��ʯҶ',
    'The Eye of Divinity'  => '��ʥ֮��',
    'The Eye of Shadow'  => '��Ӱ֮��',
    'Onyxia Scale Cloak'  => '���ݿ�ϣ����Ƭ����',
    'Eye of CThun'  => "���ն�֮��",
    'Entry to Naxxramas'  => 'Entry to Naxxramas',
    'Panther Hide Sack'  => '��Ƥ����'
    ); 
  } else {
    $dataarray = array(
    'Heart of Hakkar'   => 'Heart of Hakkar',
    'Head of Onyxia'   => 'Head of Onyxia',
    'Onyxia Hide Backpack'   => 'Onyxia Hide Backpack',
    'Head of Nefarian'   => 'Head of Nefarian',
    'Head of the Broodlord Lashlayer'   => 'Head of the Broodlord Lashlayer',
    'Head of Ossirian the Unscarred'   => 'Head of Ossirian the Unscarred',
    'Mature Black Dragon Sinew'   => 'Mature Black Dragon Sinew',
    'Mature Blue Dragon Sinew'   => 'Mature Blue Dragon Sinew',
    'Ancient Petrified Leaf'   => 'Ancient Petrified Leaf',
    'The Eye of Divinity'  => 'The Eye of Divinity',
    'The Eye of Shadow'  => 'The Eye of Shadow',
    'Onyxia Scale Cloak'  => 'Onyxia Scale Cloak',
    'Eye of CThun'  => "Eye of C\'Thun",
    'Entry to Naxxramas'  => 'Entry to Naxxramas',
    'Panther Hide Sack'  => 'Panther Hide Sack'
    );
  }
  // truncate the old data
  $sql = "TRUNCATE TABLE " . $table_prefix . "itemspecials_custom";
  if ($db->query($sql)){
    foreach ($dataarray as $key => $value) {
        $sql = "INSERT INTO " . $table_prefix . "itemspecials_custom VALUES ('itempool', '".$key."', '".$value."', 0);";
		    $db->query($sql);
    }
  }
}

function ResetIStoDefault(){
    $defaultarray = array(
    'is_exec_time'            => '1',
		'locale'                  => 'de',
		'race'                    => 'Al',
		'nonset_set'              => '0',
		'nonsettable'             => 'eqdkp_items',
		'settable'                => 'eqdkp2_items',
		'imgwidth'                => '26px',
		'imgheight'               => '26px',
		'hide_inactives'          => '0',
		'hidden_groups'           => '1',
		'colouredcls'             => '1',
		'itemstats'               => '1',
		'is_replace'              => '<font color=red>x</font>',
		'header_images'           => '1',
		'download_cache'          => '0',
    'si_only_crosses'         => '0',
    'si_rank'                 => '0',
		'si_points'               => '0',
		'si_class'                => '1',
		'si_cls_icon'             => '1',
    'si_bwltrinket'           => '0',
	  'si_aqmount'              => '0',
	  'si_aqbook'               => '0',
	  'si_atiesh'								=> '0',
		'set_rank'                => '0',
		'set_points'              => '0',
		'set_total'               => '0',
		'set_class'               => '0',
		'set_cls_icon'            => '0',
		'set_onePage'             => '1',
		'set_show_t1'             => '1',
		'set_show_t2'             => '1',
		'set_show_t3'             => '1',
		'set_show_tAQ'            => '0',
		'set_show_index'          => '1',
		'set_drpdwn_cls'          => '1',
		'sr_rank'                 => '1',
		'sr_points'               => '1',
		'sr_class'                => '1',
		'sr_cls_icon'             => '1',
		);
		UpdateConfig($defaultarray);
}
?>