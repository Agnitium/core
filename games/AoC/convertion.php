<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * DAoC.php
 * Began: Fri May 13 2005
 *
 * $Id: index.php 2206 2008-06-16 17:13:40Z osr-corgan $
 *
 ******************************/

if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}

// Convert the Classnames to english
$classconvert_array = array(
  'german'  => array(
        "Assassin"          => "Assassin",
        "Barbar"            => "Barbarian",
        "Waldl�ufer"        => "Ranger",
        
        "Eroberer"          => "Conqueror",
        "W�chter"           => "Guardian",
        "Dunkler Templer"   => "Dark Templar",
        
        "D�monologe"        => "Demonologist",
        "Herold des Xotli"  => "Herald of Xotli",
        "Nekromant"         => "Necromancer",
        
        "Mitrapriester"     => "Priest of Mitra",
        "B�renschamane"     => "Bear Shaman",
        "Vollstrecker Sets" => "Tempest of Set",
  )
);

?>
