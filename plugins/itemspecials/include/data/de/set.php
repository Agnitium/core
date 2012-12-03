<?php
/******************************
 * EQdkp ItemSpecials Plugin
 * (c) 2006 by WalleniuM [Simon Wallmann]
 * http://www.wallenium.de   
 * ------------------
 * setitems.php
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

// Arrays with the Set Content
$setitems_Tier1 = array(
        'Warrior' => array(
                'Helm der Macht',
                'Schulterst�cke der Macht',
                'Brustplatte der Macht',
                'Beinplatten der Macht',
                'Sabatons der Macht',
                'Stulpen der Macht',
                'Armschienen der Macht',
                'G�rtel der Macht',

        ),
        'Paladin' => array(
                'Helm der Gerechtigkeit',
                'Schiftung der Gerechtigkeit',
                'Brustschutz der Gerechtigkeit',
                'Beinplatten der Gerechtigkeit',
                'Stiefel der Gerechtigkeit',
                'Stulpen der Gerechtigkeit',
                'Armschienen der Gerechtigkeit',
                'G�rtel der Gerechtigkeit',

        ),
         'Shaman' => array(
                'Helm der Erdenwut',
                'Schulterklappen der Erdenwut',
                'Gewand der Erdenwut',
                'Beinsch�tzer der Erdenwut',
                'Stiefel der Erdenwut',
                'Stulpen der Erdenwut',
                'Armschienen der Erdenwut',
                'G�rtel der Erdenwut',
 
        ),
        'Hunter' => array(
                'Helm des Riesenj�gers',
                'Schulterklappen des Riesenj�gers',
                'Brustplatte des Riesenj�gers',
                'Gamaschen des Riesenj�gers',
                'Stiefel des Riesenj�gers',
                'Handschuhe des Riesenj�gers',
                'Armschienen des Riesenj�gers',
                'G�rtel des Riesenj�gers',

        ),
        'Warlock' => array(
                'Teufelsherzh�rner',
                'Teufelsherzschulterpolster',
                'Teufelsherzroben',
                'Teufelsherzhose',
                'Teufelsherzschuhe',
                'Teufelsherzhandschuhe',
                'Teufelsherzarmschienen',
                'Teufelsherzg�rtel',

        ),
        'Priest' => array(
                'Reif der Prophezeiung',
                'Mantel der Prophezeiung',
                'Roben der Prophezeiung',
                'Hose der Prophezeiung',
                'Stiefel der Prophezeiung',
                'Handschuhe der Prophezeiung',
                'Unterarmschienen der Prophezeiung',
                'Gurt der Prophezeiung',

        ),
        'Mage' => array(
                'Krone des Arkanisten',
                'Mantel des Arkanisten',
                'Roben des Arkanisten',
                'Gamaschen des Arkanisten',
                'Stiefel des Arkanisten',
                'Handschuhe des Arkanisten',
                'Bindungen des Arkanisten',
                'G�rtel des Arkanisten',

                
        ),
        'Rogue' => array(
                'Kopfschutz des Nachtmeuchlers',
                'Schulterklappen des Nachtmeuchlers',
                'Brustharnisch des Nachtmeuchlers',
                'Hose des Nachtmeuchlers',
                'Stiefel des Nachtmeuchlers',
                'Handschuhe des Nachtmeuchlers',
                'Armreifen des Nachtmeuchlers',
                'G�rtel des Nachtmeuchlers',
 
        ),
        'Druid' => array(
                'Helm des Cenarius',
                'Schiftung des Cenarius',
                'Gewand des Cenarius',
                'Gamaschen des Cenarius',
                'Stiefel des Cenarius',
                'Handschuhe des Cenarius',
                'Armschienen des Cenarius',
                'G�rtel des Cenarius',

        )
);
$setitems_Tier2 = array(
        'Warrior' => array(
                'Helm des Zorns',
                'Schulterst�cke des Zorns',
                'Brustplatte des Zorns',
                'Beinplatten des Zorns',  
                'Sabatons des Zorns',
                'Stulpen des Zorns',
                'Armreifen des Zorns',
                'G�rtelbund des Zorns',
        ),
        'Paladin' => array(
                'Krone des Richturteils',
                'Schiftung des Richturteils',
                'Brustplatte des Richturteils',
                'Beinplatten des Richturteils',
                'Sabatons des Richturteils',
                'Stulpen des Richturteils',
                'Bindungen des Richturteils',
                'G�rtel des Richturteils',  
        ),
        'Shaman' => array(
                'Helm der zehn St�rme',
                'Schulterklappen der zehn St�rme',
                'Brustplatte der zehn St�rme',
                'Beinplatten der zehn St�rme',
                'Schienbeinsch�tzer der zehn St�rme',
                'Stulpen der zehn St�rme',
                'Armschienen der zehn St�rme',
                'G�rtel der zehn St�rme',  
        ),
        'Hunter' => array(
                'Helm des Drachenj�gers',
                'Schiftung des Drachenj�gers',
                'Brustplatte des Drachenj�gers',
                'Beinsch�tzer des Drachenj�gers',
                'Schienbeinsch�tzer des Drachenj�gers',
                'Stulpen des Drachenj�gers',
                'Armschienen des Drachenj�gers',
                'G�rtel des Drachenj�gers',
        ),
        'Warlock' => array(
                'Sch�delkappe der Nemesis',
                'Schiftung der Nemesis',
                'Roben der Nemesis',
                'Gamaschen der Nemesis',
                'Stiefel der Nemesis',
                'Handschuhe der Nemesis',
                'Armschienen der Nemesis',
                'G�rtel der Nemesis',
        ),
        'Priest' => array(
                'Heiligenschein der Erhabenheit',
                'Schulterst�cke der Erhabenheit',
                'Roben der Erhabenheit',
                'Gamaschen der Erhabenheit',
                'Stiefel der Erhabenheit',
                'Handsch�tzer der Erhabenheit',
                'Bindungen der Erhabenheit',
                'G�rtel der Erhabenheit',
        ),
        'Mage' => array(
                'Krone des Netherwinds',
                'Mantel des Netherwinds',
                'Roben des Netherwinds',
                'Hose des Netherwinds',
                'Stiefel des Netherwinds',
                'Handschuhe des Netherwinds',
                'Bindungen des Netherwinds',
                'G�rtel des Netherwinds',
                
        ),
        'Rogue' => array(
                'Blutfangkapuze',
                'Blutfangschiftung',
                'Blutfangbrustharnisch',
                'Blutfanghose',
                'Blutfangstiefel',
                'Blutfanghandschuhe',
                'Blutfangarmschienen',
                'Blutfangg�rtel',
        ),
        'Druid' => array(
                'Sturmgrimms Bedeckung',
                'Sturmgrimms Schulterst�cke',
                'Sturmgrimms Brustschutz',
                'Sturmgrimms Beinsch�tzer',
                'Sturmgrimms Stiefel',
                'Sturmgrimms Handsch�tzer',
                'Sturmgrimms Armschienen',
                'Sturmgrimms G�rtel',
        )
);

$setitems_TierAQ = array(
        'Warrior' => array(
                "Vek\'nilashs Reif"           => 'Krone des Eroberers',
                'Befehlsbindungen der Qiraji' => 'Schiftung des Eroberers',
                'Knochenpanzer des alten Gottes'=> 'Brustplatte des Eroberers',
		            'Ouros intakte Haut'          => 'Beinsch�tzer des Eroberers',
                'Schienbeinsch�tzer des Eroberers' => 'Schienbeinsch�tzer des Eroberers',
),
        'Paladin' => array(
                'Vek\'lors Diadem'            => 'Krone des R�chers',
                'Dominanzbindungen der Qiraji'=> 'Schulterst�cke des R�chers',
                'Knochenpanzer des alten Gottes'=> 'Brustplatte des R�chers',
                'Haut des gro�en Sandwurms'   => 'Beinsch�tzer des R�chers',
                'Schienbeinsch�tzer des R�chers'=> 'Schienbeinsch�tzer des R�chers',
        ),

        'Shaman' => array(
                'Vek\'lors Diadem'            => 'Diadem des Sturmrufers',
                'Dominanzbindungen der Qiraji'=> 'Schulterst�cke des Sturmrufers',
                'Knochenpanzer des alten Gottes'=> 'Halsberge des Sturmrufers',
                'Haut des gro�en Sandwurms'   => 'Gamaschen des Sturmrufers',      
                'Fu�sch�tzer des Sturmrufers'=> 'Fu�sch�tzer des Sturmrufers',
        ),
        'Hunter' => array(
                'Vek\'lors Diadem'            => 'Diadem des Hetzers',
                'Befehlsbindungen der Qiraji' => 'Schulterst�cke des Hetzers',
                'Knochenpanzer des alten Gottes'=> 'Halsberge des Hetzers',
                'Haut des gro�en Sandwurms'   => 'Gamaschen des Hetzers',
                'Fu�sch�tzer des Hetzers' 		=> 'Fu�sch�tzer des Hetzers',
        ),
        'Warlock' => array(
                'Vek\'nilashs Reif'           => 'Reif des Verdammnisrufers',
                'Dominanzbindungen der Qiraji'=> 'Mantel des Verdammnisrufers',
                'H�lle des alten Gottes'      => 'Roben des Verdammnisrufers',
                'Haut des gro�en Sandwurms'   => 'Beinkleider des Verdammnisrufers',
                'Fu�lappen des Verdammnisrufers'=> 'Fu�lappen des Verdammnisrufers',
        ),
        'Priest' => array(
                'Vek\'nilashs Reif'           => 'Tiara des Orakels',
                'Befehlsbindungen der Qiraji' => 'Mantel des Orakels',
                'H�lle des alten Gottes'      => 'Tunika des Orakels',
                'Ouros intakte Haut'          => 'Beinkleider des Orakels',
                'Fu�lappen des Orakels' 			=> 'Fu�lappen des Orakels',

        ),
        'Mage' => array(
                'Vek\'nilashs Reif'           => 'Reif des Mysteriums',
                'Dominanzbindungen der Qiraji'=> 'Schulterpolster des Mysteriums',
                'H�lle des alten Gottes'      => 'Roben des Mysteriums',
                'Ouros intakte Haut'          => 'Gamaschen des Mysteriums',
                'Stiefel des Mysteriums'			=> 'Stiefel des Mysteriums',                                
        ),
        'Rogue' => array(
                'Vek\'lors Diadem'            => 'Helm des Todesboten',
                'Befehlsbindungen der Qiraji' => 'Schiftung des Todesboten',
                'Knochenpanzer des alten Gottes'=> 'Weste des Todesboten',
                'Ouros intakte Haut'          => 'Gamaschen des Todesboten',
                'Stiefel des Todesboten' 			=> 'Stiefel des Todesboten',
        ),
        'Druid' => array(
                'Vek\'lors Diadem'            => 'Helm der Genesis',
                'Dominanzbindungen der Qiraji'=> 'Schulterpolster der Genesis',
                'H�lle des alten Gottes'      => 'Weste der Genesis',
                'Haut des gro�en Sandwurms'   => 'Beinkleider der Genesis',
                'Stiefel der Genesis'					=> 'Stiefel der Genesis',
        )
);

$setitems_Tier3 = array(
        'Warrior' => array(
                'Entweihter Helm'             => 'Helm des Schreckenspanzers',
                'Entweihte Schulterst�cke'    => 'Schulterst�cke des Schreckenspanzers',
                'Entweihte Brustplatte'       => 'Brustplatte des Schreckenspanzers',
                'Entweihte Beinplatten'       => 'Beinplatten des Schreckenspanzers',
                'Entweihte Sabatons'          => 'Sabatons des Schreckenspanzers',
                'Entweihte Stulpen'           => 'Stulpen des Schreckenspanzers',
                'Entweihte Armschienen'       => 'Armschienen des Schreckenspanzers',
                'Entweihter Taillenschutz'    => 'Taillenschutz des Schreckenspanzers',
                'Ring des Schreckenspanzers'  => 'Ring des Schreckenspanzers',
        ),
        'Paladin' => array(
                'Entweihtes Kopfst�ck'        => 'Kopfst�ck der Erl�sung',
                'Entweihte Schiftung'         => 'Schiftung der Erl�sung',
                'Entweihte Tunika'            => 'Tunika der Erl�sung',
                'Entweihte Beinsch�tzer'      => 'Beinsch�tzer der Erl�sung',
                'Entweihte Stiefel'           => 'Stiefel der Erl�sung',
                'Entweihte Handsch�tzer'      => 'Handsch�tzer der Erl�sung',
                'Entweihter Handgelenksschutz'=> 'Handgelenksschutz der Erl�sung',
                'Entweihter Gurt'             => 'Gurt der Erl�sung',
                'Ring der Erl�sung'           => 'Ring der Erl�sung',
        ),
        'Shaman' => array(
                'Entweihtes Kopfst�ck'        => 'Kopfst�ck des Erdspalters',
                'Entweihte Schiftung'         => 'Schiftung des Erdspalters',
                'Entweihte Tunika'            => 'Tunika des Erdspalters',
                'Entweihte Beinsch�tzer'      => 'Beinsch�tzer des Erdspalters',
                'Entweihte Stiefel'           => 'Stiefel des Erdspalters',
                'Entweihte Handsch�tzer'      => 'Handsch�tzer des Erdspalters',
                'Entweihter Handgelenksschutz'=> 'Handgelenksschutz des Erdspalters',
                'Entweihter Gurt'             => 'Gurt des Erdspalters',
                'Ring des Erdspalters'        => 'Ring des Erdspalters',
        ),
        'Hunter' => array(
                'Entweihtes Kopfst�ck'        => 'Kopfst�ck des Gruftpirschers',
                'Entweihte Schiftung'         => 'Schiftung des Gruftpirschers',
                'Entweihte Tunika'            => 'Tunika des Gruftpirschers',
                'Entweihte Beinsch�tzer'      => 'Beinsch�tzer des Gruftpirschers',
                'Entweihte Stiefel'           => 'Stiefel des Gruftpirschers',
                'Entweihte Handsch�tzer'      => 'Handsch�tzer des Gruftpirschers',
                'Entweihter Handgelenksschutz'=> 'Handgelenksschutz des Gruftpirschers',
                'Entweihter Gurt'             => 'Gurt des Gruftpirschers',
                'Ring des Gruftpirschers'     => 'Ring des Gruftpirschers',
        ),
        'Warlock' => array(
                'Entweihter Reif'             => 'Reif des verseuchten Herzens',
                'Entweihte Schulterpolster'   => 'Schulterpolster des verseuchten Herzens',
                'Entweihte Robe'              => 'Robe des verseuchten Herzens',
                'Entweihte Gamaschen'         => 'Gamaschen des verseuchten Herzens',
                'Entweihte Sandalen'          => 'Sandalen des verseuchten Herzens',
                'Entweihte Handschuhe'        => 'Handschuhe des verseuchten Herzens',
                'Entweihte Bindungen'         => 'Bindungen des verseuchten Herzens',
                'Entweihter G�rtel'           => 'G�rtel des verseuchten Herzens',
                'Ring des verseuchten Herzens'=> 'Ring des verseuchten Herzens',

        ),
        'Priest' => array(
                'Entweihter Reif'             => 'Reif des Glaubens',
                'Entweihte Schulterpolster'   => 'Schulterpolster des Glaubens',
                'Entweihte Robe'              => 'Robe des Glaubens',
                'Entweihte Gamaschen'         => 'Gamaschen des Glaubens',
                'Entweihte Sandalen'          => 'Sandalen des Glaubens',
                'Entweihte Handschuhe'        => 'Handschuhe des Glaubens',
                'Entweihte Bindungen'         => 'Bindungen des Glaubens',
                'Entweihter G�rtel'           => 'G�rtel des Glaubens',
                'Ring des Glaubens'           => 'Ring des Glaubens',

        ),
        'Mage' => array(
                'Entweihter Reif'             => 'Frostfeuerreif',
                'Entweihte Schulterpolster'   => 'Frostfeuerschulterpolster',
                'Entweihte Robe'              => 'Frostfeuerrobe',
                'Entweihte Gamaschen'         => 'Frostfeuergamaschen',
                'Entweihte Sandalen'          => 'Frostfeuersandalen',
                'Entweihte Handschuhe'        => 'Frostfeuerhandschuhe',
                'Entweihte Bindungen'         => 'Frostfeuerbindungen',
                'Entweihter G�rtel'           => 'Frostfeuerg�rtel',
                'Frostfeuerring'              => 'Frostfeuerring',
                
        ),
        'Rogue' => array(
                'Entweihter Helm'             => 'Helm der Knochensense',
                'Entweihte Schulterst�cke'    => 'Schulterst�cke der Knochensense',
                'Entweihte Brustplatte'       => 'Brustplatte der Knochensense',
                'Entweihte Beinplatten'       => 'Beinplatten der Knochensense',
                'Entweihte Sabatons'          => 'Sabatons der Knochensense',
                'Entweihte Stulpen'           => 'Stulpen der Knochensense',
                'Entweihte Armschienen'       => 'Armschienen der Knochensense',
                'Entweihter Taillenschutz'    => 'Taillenschutz der Knochensense',
                'Ring der Knochensense'       => 'Ring der Knochensense',
        ),
        'Druid' => array(
                'Entweihtes Kopfst�ck'        => 'Kopfst�ck des Traumwandlers',
                'Entweihte Schiftung'         => 'Schiftung des Traumwandlers',
                'Entweihte Tunika'            => 'Tunika des Traumwandlers',
                'Entweihte Beinsch�tzer'      => 'Beinsch�tzer des Traumwandlers',
                'Entweihte Stiefel'           => 'Stiefel des Traumwandlers',
                'Entweihte Handsch�tzer'      => 'Handsch�tzer des Traumwandlers',
                'Entweihter Handgelenksschutz'=> 'Handgelenksschutz des Traumwandlers',
                'Entweihter Gurt'             => 'Gurt des Traumwandlers',
                'Ring des Traumwandlers'      => 'Ring des Traumwandlers',
        )
);

$tier_names = array(
        'Warrior' => array(
                'Tier1' => 'Schlachtr�stung der Macht',
                'Tier2' => 'Schlachtr�stung des Zorns',
                'TierAQ' => 'Schlachtr�stung des Eroberers',
                'Tier3' => 'Schlachtr�stung des Schreckenspanzers',
        ),
        'Paladin' => array(
                'Tier1' => 'R�stung der Gerechtigkeit',
                'Tier2' => 'R�stung des Richturteils',
                'TierAQ' => 'Schlachtr�stung des R�chers',
                'Tier3' => 'R�stung der Erl�sung',
        ),
        'Hunter' => array(
                'Tier1' => 'R�stung des Riesenj�gers',
                'Tier2' => 'R�stung des Drachenj�gers',
                'TierAQ' => 'Gewand des Hetzers',
                'Tier3' => 'R�stung des Gruftpirschers',
        ),
        'Warlock' => array(
                'Tier1' => 'Teufelsherzroben',
                'Tier2' => 'Roben der Nemesis',
                'TierAQ' => 'Roben des Verdammnisrufers',
                'Tier3' => 'Roben des verseuchten Herzens',
        ),
        'Priest' => array(
                'Tier1' => 'Gew�nder der Prophezeiung',
                'Tier2' => 'Gew�nder der Erhabenheit',
                'TierAQ' => 'Gew�nder des Orakels',
                'Tier3' => 'Gew�nder des Glaubens',
        ),
        'Mage' => array(
                'Tier1' => 'Ornat des Arkanisten',
                'Tier2' => 'Ornat des Netherwinds',
                'TierAQ' => 'Gew�nder des Mysteriums',
                'Tier3' => 'Frostfeuerornat',
        ),
        'Rogue' => array(
                'Tier1' => 'Der Nachtmeuchler',
                'Tier2' => 'Blutfangr�stung',
                'TierAQ' => 'Umarmung des Todesboten',
                'Tier3' => 'R�stung der Knochensense',
        ),
        'Shaman' => array(
                'Tier1' => 'Die Wut der Erde',
                'Tier2' => 'Die Zehn St�rme',
                'TierAQ' => 'Gewand des Sturmrufers',
                'Tier3' => 'Der Erdspalter',
        ),
        'Druid' => array(
                'Tier1' => 'Gew�nder des Cenarius',
                'Tier2' => 'Gew�nder des Stormrage',
                'TierAQ' => 'Beinkleider der Genesis',
                'Tier3' => 'Gewandung des Traumwandlers',
        )
);
?>