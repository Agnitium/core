<?php
/******************************
 * EQdkp ItemSpecials Plugin
 * (c) 2006 by WalleniuM [Simon Wallmann]
 * http://www.wallenium.de   
 * ------------------
 * special.php
 * Changed: November 17, 2006
 * 
 ******************************/
 
if ( !defined('EQDKP_INC') )
{
    die('Do not access this file directly.');
}

$classname = array(
        'Warrior',
        'Shaman',
        'Paladin',
        'Hunter',
        'Warlock',
        'Priest',
        'Mage',
        'Rogue',
        'Druid');

$trinket_items = array(
        'Paladin'      => 'Rollen des Blendenden Lichts',
        'Shaman'       => 'Kristall der Naturverbundenheit',
			  'Warrior'      => 'Lebensspendender Edelstein',
			  'Rogue'        => 'Gifttotem',
			  'Hunter'       => 'Edelstein der arkanen Kraft',
			  'Warlock'      => 'Das schwarze Buch',
			  'Druid'        => 'Rune der Metamorphose',
			  'Mage'         => 'Edelstein des Gedankensprungs',
			  'Priest'       => 'Aegis der Bewahrung'
);

$aqbook_items = array(
        'Paladin'      => array('Buchband: Segen der Macht VII','Buchband: Segen der Weisheit VI','Buchband: Heiliges Licht IX'),
        'Shaman'       => array('Schrifttafel des Totems der luftgleichen Anmut III','Schrifttafel der Welle der Heilung X','Schrifttafel des Totems der Erdst�rke V'),
			  'Warrior'      => array('Handbuch des Schlachtrufs VII','Handbuch des heldenhaften Sto�es IX','Handbuch der Rache VI'),
			  'Rogue'        => array('Leitfaden des Meuchelns IX','Leitfaden des t�dlichen Gifts V','Leitfaden der Finte V'),
			  'Hunter'       => array('Lehrbuch: Aspekt des Falken VII','Lehrbuch: Mehrfachschuss V','Lehrbuch: Schlangenbiss IX'),
			  'Warlock'      => array('Zauberfoliant der Verderbnis VII','Zauberfoliant des Feuerbrandes VIII','Zauberfoliant des Schattenblitzes X'),
			  'Druid'        => array('Buch der Heilenden Ber�hrung XI','Buch der Verj�ngung XI','Buch des Sternenfeuers VII'),
			  'Mage'         => array('Foliant des Frostblitzes XI','Foliant des Feuerballs XII','Foliant der Arkanen Geschosse VIII'),
			  'Priest'       => array('Kodex der gro�en Heilung V','Kodex des Gebets der Heilung V','Kodex der Erneuerung X')
);

$mount_items = array(
        'Blue'         => 'Blauer Qirajiresonanzkristall',
        'Yellow'       => 'Gelber Qirajiresonanzkristall',
			  'Green'        => 'Gr�ner Qirajiresonanzkristall',
			  'Red'          => 'Roter Qirajiresonanzkristall',
			  'Black'        => 'Schwarzer Qirajiresonanzkristall'
);

$atiesh_items = array(
        'Bruchst�ck von Atiesh',
        'Grundstab von Atiesh',
			  'Stabkopf von Atiesh',
			  'Stabfu� von Atiesh',
			  'Atiesh, Hohestab des W�chters'
);
?>