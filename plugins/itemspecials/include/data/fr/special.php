<?php
/******************************
 * EQdkp ItemSpecials Plugin
 * (c) 2006 by WalleniuM [Simon Wallmann]
 * http://www.wallenium.de   
 * ------------------
 * setitems.data.php
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
				'Paladin' 		=> 'Parchemin de lumi�re aveuglante',
				'Shaman' 			=> 'Cristal d\'alignement sur la nature',
				'Warrior' 		=> 'Gemme donneuse de vie',
				'Rogue' 			=> 'Totem venimeux',
				'Hunter' 			=> 'Gemme impr�gn�e d\'arcanes',
				'Warlock' 		=> 'Le Livre noir',
				'Druid' 			=> 'Rune de transformation',
				'Mage' 				=> 'Gemme de vivacit� d\'esprit',
				'Priest' 			=> 'Egide de pr�servation'
);

$aqbook_items = array(
			'Paladin' 			=> array('Libram : B�n�diction de puissance VII','Libram : B�n�diction de sagesse VI','Libram : Lumi�re sacr�e IX'),
			'Shaman' 				=> array('Tablette de Totem de gr�ce a�rienne III','Tablette de Vague de soins X','Tablette de Totem de force de la terre V'),
			'Warrior' 			=> array('Manuel de Cri de guerre VII','Manuel de Frappe h�ro�que IX','Manuel de Vengeance VI'),
			'Rogue' 				=> array('Recueil : Attaque sournoise IX','Recueil : Poison mortel V','Recueil : Feinte V'),
			'Hunter' 				=> array('Guide : Aspect du faucon VII','Guide : Fl�ches multiples V','Guide : Morsure du serpent IX'),
			'Warlock' 			=> array('Grimoire de Corruption VII','Grimoire d\'immolation VIII','Grimoire de Trait de l\'ombre X'),
			'Druid' 				=> array('Livre de R�cup�ration XI','Livre de Toucher gu�risseur XI','Livre de Feu stellaire VII'),
			'Mage' 					=> array('Tome d\'Eclair de givre XI','Tome de Boule de feu XII','Tome de Projectile des arcanes VIII'),
			'Priest' 				=> array('Codex de Soins sup�rieurs V','Codex de Pri�re de soins V','Codex de R�novation X')
);

$mount_items = array(
				'Blue' 				=> 'Cristal de r�sonance Qiraji Bleu',
				'Yellow'			=> 'Cristal de r�sonance Qiraji jaune',
				'Green' 			=> 'Cristal de r�sonance Qiraji vert',
				'Red' 				=> 'Cristal de r�sonance Qiraji rouge',
				'Black' 			=> 'Cristal de r�sonance Qiraji noir'
);

$atiesh_items = array(
        'Eclat d\'Atiesh',
        'Esprit d\'Atiesh',
			  'Toque d\'Atiesh',
			  'Base d\'Atiesh',
			  'Atiesh, Grand b�ton du gardien'
);
?>