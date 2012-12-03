<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * DAoC.php
 * Began: Fri May 13 2005
 *
 * $Id: index.php 1864 2008-04-07 22:04:26Z wallenium $
 *
 ******************************/

if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}

class Manage_Game
{
  var $gamename = 'AoC';
  var $maxlevel = false;

function do_it($db,$table_prefix,$install,$lang)
{
	if($lang == 'de')
	{
		$classes = array(
		array('Unknown','Unknown',0,80),
		
		// Schurke
		array('Assassin','Schurke',0,80),
		array('Barbar','Schurke',0,80),
		array('Waldl�ufer','Schurke',0,80),
		
		// Soldat
		array('Eroberer','Soldat',0,80),
		array('Dunkler Templer','Soldat',0,80),
		array('W�chter','Soldat',0,80),
		
		// Magier
		array('D�monologe','Magier',0,80),
		array('Herold des Xotli','Magier',0,80),
		array('Nekromant','Magier',0,80),
		
		// Priester
		array('B�renschamane','Priester',0,80),
		array('Mitrapriester','Priester',0,80),
		array('Vollstrecker Sets','Priester',0,80)
		);
		
		$races = array(
		'Unknown',
		'Aquilonier',
		'Cimmerier',
		'Stygier'
		);
		
		$factions = array(
		'Gut',
		'B�se'
		);
	}else
	{
		$classes = array(
		array('Unknown','Unknown',0,80),
		
		// Rogue
		array('Assassin','Rogue',0,80),
		array('Barbarian','Rogue',0,80),
		array('Ranger','Rogue',0,80),
		
		// Soldier
		array('Conqueror','Soldier',0,80),
		array('Dark Templar','Soldier',0,80),
		array('Guardian','Soldier',0,80),
		
		// Mage
		array('Demonologist','Mage',0,80),
		array('Herald of Xotli','Mage',0,80),
		array('Necromancer','Mage',0,80),
		
		// Priest
		array('Bear Shaman','Priest',0,80),
		array('Priest of Mitra','Priest',0,80),
		array('Tempest of Set','Priest',0,80)
		);
		
		$races = array(
		'Unknown',
		'Aquilonian',
		'Cimmerian',
		'Stygian'
		);
		
		$factions = array(
		'Good',
		'Evil'
		);
	}
    
    // The Class colors
    $classColorsCSS = array(
    );
    
    //lets do some tweak on the templates dependent on the game
    $aq =  array();
    array_push($aq, "UPDATE ". $table_prefix ."style_config SET logo_path='logo_plus.gif' WHERE logo_path='bc_header3.gif' ;");
    array_push($aq, "UPDATE ". $table_prefix ."style_config SET logo_path='/logo/logo_plus.gif' WHERE logo_path='/logo/logo_wow.gif' ;");
    array_push($aq, "UPDATE ". $table_prefix ."style_config SET logo_path='logo_plus.gif' WHERE logo_path='logo_wow.gif' ;" );

    //Do this SQL Query NOT if the Eqdkp is installed -> only @ the first install
    if($install)
    {
    	array_push($aq, "UPDATE ". $table_prefix ."config SET config_value = 32 WHERE config_name='default_style' ;");
    	array_push($aq, "UPDATE ". $table_prefix ."users SET user_style = '32' ;");
    }

    //Itemstats
    array_push($aq, "UPDATE ". $table_prefix ."plus_config SET config_value = '0' WHERE config_name = 'pk_itemstats' ;");
    array_push($aq, "UPDATE ". $table_prefix ."plus_config SET config_value = '0' WHERE config_name = 'pk_is_autosearch' ;");


    // this is the fix stuff.. instert the new information
    // into the database. moved it to a new class, its easier to
    // handle
    $gmanager = new GameManagerPlus($table_prefix, $db);
    $gmanager->ChangeGame($this->gamename, $classes, $races, $factions, $classColorsCSS, $this->maxlevel,$aq,$lang);

     if (!$install)
     {
  	   $redir = "admin/settings.php";
  	   redirect($redir);
  	 }
   }
}

?>
