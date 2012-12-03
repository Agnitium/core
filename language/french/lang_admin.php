<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * lang_admin.php
 * Began: Fri January 3 2003
 *
 * $Id$
 *
 ******************************/

if ( !defined('EQDKP_INC') )
{
     die('Do not access this file directly.');
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

$lang['ENCODING'] = 'iso-8859-1';
$lang['XML_LANG'] = 'fr';

// Titles
$lang['addadj_title']         = 'Ajouter un ajustement de groupe';
$lang['addevent_title']       = 'Ajouter un �v�nement';
$lang['addiadj_title']        = 'Ajouter un ajustement individuel';
$lang['additem_title']        = 'Ajouter l\'achat d\'un objet';
$lang['addmember_title']      = 'Ajouter un membre';
$lang['addnews_title']        = 'Ajouter une nouvelle';
$lang['addraid_title']        = 'Ajouter un raid';
$lang['addturnin_title']      = "Ajouter une restitution - Etape %1\$d";
$lang['admin_index_title']    = 'Administration EQdkp';
$lang['config_title']         = 'Scipt de configuration';
$lang['manage_members_title'] = 'G�rer les membres de guilde';
$lang['manage_users_title']   = 'Comptes utilisateurs et permissions';
$lang['parselog_title']       = 'Parcourir un fichier log';
$lang['plugins_title']        = 'G�rer les plugins';
$lang['styles_title']         = 'G�rer les mod�les';
$lang['viewlogs_title']       = 'Affichage des logs';

// Page Foot Counts
$lang['listusers_footcount']             = "... %1\$d utilisateurs trouv�s / %2\$d par page";
$lang['manage_members_footcount']        = "... %1\$d membres trouv�s";
$lang['online_footcount']                = "... %1\$d utilisateurs connect�s";
$lang['viewlogs_footcount']              = "... %1\$d logs trouv�s / %2\$d par page";

// Submit Buttons
$lang['add_adjustment'] = 'Ajouter un ajustement';
$lang['add_account'] = 'Ajouter un compte';
$lang['add_event'] = 'Ajouter un �v�nement';
$lang['add_item'] = 'Ajouter un objet';
$lang['add_member'] = 'Ajouter un membre';
$lang['add_news'] = 'Ajouter une nouvelle';
$lang['add_raid'] = 'Ajouter un raid';
$lang['add_style'] = 'Ajouter un mod�le';
$lang['add_turnin'] = 'Ajouter une restitution';
$lang['delete_adjustment'] = 'Supprimer un ajustement';
$lang['delete_event'] = 'Supprimer un �v�nement';
$lang['delete_item'] = 'Supprimer un objet';
$lang['delete_member'] = 'Supprimer un membre';
$lang['delete_news'] = 'Supprimer une nouvelle';
$lang['delete_raid'] = 'Supprimer un raid';
$lang['delete_selected_members'] = 'Supprimer les membres s�lectionn�s';
$lang['delete_style'] = 'Supprimer un mod�le';
$lang['mass_delete'] = 'Suppression multiples';
$lang['mass_update'] = 'Mise � jour multiples';
$lang['parse_log'] = 'Parcourir le log';
$lang['search_existing'] = 'Rechercher';
$lang['select'] = 'Selectionner';
$lang['transfer_history'] = 'Transf�rer l\'historique';
$lang['update_adjustment'] = 'Mettre � jour l\'ajustement';
$lang['update_event'] = 'Mettre � jour l\'�v�nement';
$lang['update_item'] = 'Mettre � jour l\'objet';
$lang['update_member'] = 'Mettre � jour le membre';
$lang['update_news'] = 'Mettre � jour la nouvelles';
$lang['update_raid'] = 'Mettre � jour le raid';
$lang['update_style'] = 'Mettre � jour le mod�le';

// Misc
$lang['account_enabled'] = 'Compte activ�';
$lang['adjustment_value'] = 'Valeur d\'ajustement';
$lang['adjustment_value_note'] = 'peut �tre n�gative';
$lang['code'] = 'Code';
$lang['contact'] = 'Contact';
$lang['create'] = 'Cr�er';
$lang['found_members'] = "A parcouru %1\$d lignes, � trouv� %2\$d membres";
$lang['headline'] = 'Titre';
$lang['hide'] = 'Cacher ?';
$lang['install'] = 'Installer';
$lang['item_search'] = 'Rechercher un objet';
$lang['list_prefix'] = 'Prefix de liste';
$lang['list_suffix'] = 'Suffix de liste';
$lang['logs'] = 'Logs';
$lang['log_find_all'] = 'Chercher tout (anonymes compris)';
$lang['manage_members'] = 'G�rer les membres';
$lang['manage_plugins'] = 'G�rer les plugins';
$lang['manage_users'] = 'G�rer les utilisateurs';
$lang['mass_update_note'] = 'Si vous souhaitez affecter les modifications � tous les membres s�lectionn�s, utilisez ces commandes pour changer leurs propri�t�s et cliquez sur "Mise � jour multiples".
                             Pour effacer les comptes s�lectionn�s, cliquez uniquement sur "Suppression multiples".';
$lang['members'] = 'Membres';
$lang['member_rank'] = 'Rand du membre';
$lang['message_body'] = 'Corps du texte';
$lang['message_show_loot_raid'] = 'Afficher les loots du raid :';
$lang['results'] = "%1\$d Resultatss (\"%2\$s\")";
$lang['search'] = 'Rechercher';
$lang['search_members'] = 'Rechercher un membre';
$lang['should_be'] = 'Devrait �tre';
$lang['styles'] = 'Mod�les';
$lang['title'] = 'Titre';
$lang['uninstall'] = 'D�sinstaller';
$lang['enable']		= 'Activer';
$lang['update_date_to'] = "Mettre la date �<br />%1\$s?";
$lang['version'] = 'Version';
$lang['x_members_s'] = "%1\$d membre";
$lang['x_members_p'] = "%1\$d membres";

// Permission Messages
$lang['noauth_a_event_add']    = 'Vous n\'avez pas la permission d\'ajouter des �v�nements.';
$lang['noauth_a_event_upd']    = 'Vous n\'avez pas la permission de mettre � jour des �v�nements.';
$lang['noauth_a_event_del']    = 'Vous n\'avez pas la permission d\'effacer des �v�nements.';
$lang['noauth_a_groupadj_add'] = 'Vous n\'avez pas la permission d\'ajouter des ajustements de groupe.';
$lang['noauth_a_groupadj_upd'] = 'Vous n\'avez pas la permission de mettre � jour des ajustements de groupe.';
$lang['noauth_a_groupadj_del'] = 'Vous n\'avez pas la permission d\'effacer des ajustements de groupe.';
$lang['noauth_a_indivadj_add'] = 'Vous n\'avez pas la permission d\'ajouter des ajustements individuels.';
$lang['noauth_a_indivadj_upd'] = 'Vous n\'avez pas la permission de mettre � jour des ajustements individuels.';
$lang['noauth_a_indivadj_del'] = 'Vous n\'avez pas la permission d\'effacer des ajustements individuels.';
$lang['noauth_a_item_add']     = 'Vous n\'avez pas la permission d\'ajouter des objets.';
$lang['noauth_a_item_upd']     = 'Vous n\'avez pas la permission de mettre � jour des objets.';
$lang['noauth_a_item_del']     = 'Vous n\'avez pas la permission d\'effacer des objets.';
$lang['noauth_a_news_add']     = 'Vous n\'avez pas la permission d\'ajouter des nouvelles.';
$lang['noauth_a_news_upd']     = 'Vous n\'avez pas la permission de mettre � jour des nouvelles.';
$lang['noauth_a_news_del']     = 'Vous n\'avez pas la permission d\'effacer des nouvelles.';
$lang['noauth_a_raid_add']     = 'Vous n\'avez pas la permission d\'ajouter des raids.';
$lang['noauth_a_raid_upd']     = 'Vous n\'avez pas la permission de mettre � jour des raids.';
$lang['noauth_a_raid_del']     = 'Vous n\'avez pas la permission d\'effacer des raids.';
$lang['noauth_a_turnin_add']   = 'Vous n\'avez pas la permission d\'ajouter des restitutions.';
$lang['noauth_a_config_man']   = 'Vous n\'avez pas la permission de g�rer la configuration d\'EQdkp.';
$lang['noauth_a_members_man']  = 'Vous n\'avez pas la permission de g�rer les membres de guilde.';
$lang['noauth_a_plugins_man']  = 'Vous n\'avez pas la permission de g�rer les plugins.';
$lang['noauth_a_styles_man']   = 'Vous n\'avez pas la permission de g�rer les mod�les.';
$lang['noauth_a_users_man']    = 'Vous n\'avez pas la permission g�rer les param�tres de compte utilisateur.';
$lang['noauth_a_logs_view']    = 'Vous n\'avez pas la permission d\'afficher les logs.';

// Submission Success Messages
$lang['admin_add_adj_success']               = "Un ajustement � %1\$s de %2\$.2f a �t� ajout�.";
$lang['admin_add_admin_success']             = "Un e-mail a �t� envoy� � %1\$s avec ses informations administratives.";
$lang['admin_add_event_success']             = "Une valeur par d�faut de %1\$s pour un raid le %2\$s a �t� ajout�e.";
$lang['admin_add_iadj_success']              = "Un ajustement individuel � %1\$s de %2\$.2f pour %3\$s a �t� ajout�.";
$lang['admin_add_item_success']              = "Un achat d\'objet de  %1\$s, acquis par %2\$s pour %3\$.2f a �t� ajout�.";
$lang['admin_add_member_success']            = "%1\$s a �t� ajout� comme membre.";
$lang['admin_add_news_success']              = 'La nouvelle a �t� ajout�e.';
$lang['admin_add_raid_success']              = "Le %1\$d/%2\$d/%3\$d raid du %4\$s a �t� ajout�.";
$lang['admin_add_style_success']             = 'Le nouveau mod�le a �t� ajout� correctement.';
$lang['admin_add_turnin_success']            = "%1\$s a �t� transf�r� de %2\$s � %3\$s.";
$lang['admin_delete_adj_success']            = "L\'ajustement � %1\$s de %2\$.2f a �t� supprim�.";
$lang['admin_delete_admins_success']         = "Les administrateurs s�lectionn�s ont �t� supprim�s.";
$lang['admin_delete_event_success']          = "La valeur par d�faut de %1\$s pour le raid du %2\$s a �t� supprim�e.";
$lang['admin_delete_iadj_success']           = "L\'ajustement individuel � %1\$s de %2\$.2f pour %3\$s a �t� supprim�.";
$lang['admin_delete_item_success']           = "L\achat d\'objet de %1\$s, acquis par %2\$s pour %3\$.2f a �t� supprim�.";
$lang['admin_delete_members_success']        = "%1\$s, avec tout son historiques a �t� supprim�.";
$lang['admin_delete_news_success']           = 'La nouvelle a �t� supprim�e.';
$lang['admin_delete_raid_success']           = 'Le raid et tous ses objets associ�s ont �t� supprim�s.';
$lang['admin_delete_style_success']          = 'Le mod�le a �t� supprim� correctement.';
$lang['admin_delete_user_success']           = "Le compte avec le nom  %1\$s a �t� supprim�.";
$lang['admin_set_perms_success']             = "Toutes les permissions d\'administration ont �t� mises � jour.";
$lang['admin_transfer_history_success']      = "Tout l'historiqe de %1\$s a �t� transf�r� � %2\$s et %1\$s a �t� supprim�.";
$lang['admin_update_account_success']        = "Vos param�tres de compte ont �t� mis � jour.";
$lang['admin_update_adj_success']            = "L\ajustement � %1\$s de %2\$.2f a �t� mis � jour.";
$lang['admin_update_event_success']          = "La valeur par d�faut de %1\$s pour le raid du %2\$s a �t� mise � jour.";
$lang['admin_update_iadj_success']           = "L\'adjustment � %1\$s de %2\$.2f pour %3\$s a �t� mis � jour.";
$lang['admin_update_item_success']           = "L\'achat d\objet de %1\$s, acquis par %2\$s pour %3\$.2f a �t� mis � jour.";
$lang['admin_update_member_success']         = "Les param�tres du membre %1\$s ont �t� mis � jour.";
$lang['admin_update_news_success']           = 'La nouvelle a �t� mise � jour.';
$lang['admin_update_raid_success']           = "Le %1\$d/%2\$d/%3\$d raid du %4\$s a �t� mis � jour.";
$lang['admin_update_style_success']          = 'Le mod�le a �t� mis � jour correctement.';

$lang['admin_raid_success_hideinactive']     = 'Mise � jour des membres actifs/inactifs en cours ...';

// Delete Confirmation Texts
$lang['confirm_delete_adj']     = 'Etes-vous certain de vouloir supprimer cet ajustement de groupe ?';
$lang['confirm_delete_admins']  = 'Etes-vous certain de vouloir supprimer les administrateurs s�lectionn�s ?';
$lang['confirm_delete_event']   = 'Etes-vous certain de vouloir supprimer cet �v�nement ?';
$lang['confirm_delete_iadj']    = 'Etes-vous certain de vouloir supprimer cet ajustement individuel ?';
$lang['confirm_delete_item']    = 'Etes-vous certain de vouloir supprimer cet objet ?';
$lang['confirm_delete_members'] = 'Etes-vous certain de vouloir supprimer les membres suivants ?';
$lang['confirm_delete_news']    = 'Etes-vous certain de vouloir supprimer cette nouvelle ?';
$lang['confirm_delete_raid']    = 'Etes-vous certain de vouloir supprimer ce raid ?';
$lang['confirm_delete_style']   = 'Etes-vous certain de vouloir supprimer ce mod�le ?';
$lang['confirm_delete_users']   = 'Etes-vous certain de vouloir supprimer les comptes d\'utilisateurs suivants ?';

// Log Actions
$lang['action_event_added']      = 'Ev�nement ajout�';
$lang['action_event_deleted']    = 'Ev�nement supprim�';
$lang['action_event_updated']    = 'Ev�nement mis � jour';
$lang['action_groupadj_added']   = 'Ajustement de groupe ajout�';
$lang['action_groupadj_deleted'] = 'Ajustement de groupe supprim�';
$lang['action_groupadj_updated'] = 'Ajustement de groupe mis � jour';
$lang['action_history_transfer'] = 'Transfert d\'historique d\'un membre';
$lang['action_indivadj_added']   = 'Ajustement individuel ajout�';
$lang['action_indivadj_deleted'] = 'Ajustement individuel supprim�';
$lang['action_indivadj_updated'] = 'Ajustement individuel mis � jour';
$lang['action_item_added']       = 'Objet ajout�';
$lang['action_item_deleted']     = 'Objet supprim�';
$lang['action_item_updated']     = 'Objet mis � jour';
$lang['action_member_added']     = 'Membre ajout�';
$lang['action_member_deleted']   = 'Membre supprim�';
$lang['action_member_updated']   = 'Membre mis � jour';
$lang['action_news_added']       = 'Nouvelle ajout�e';
$lang['action_news_deleted']     = 'Nouvelle supprim�e';
$lang['action_news_updated']     = 'Nouvelles mise � jour';
$lang['action_raid_added']       = 'Raid ajout�';
$lang['action_raid_deleted']     = 'Raid supprim�';
$lang['action_raid_updated']     = 'Raid mis � jour';
$lang['action_turnin_added']     = 'Restitution ajout�e';

// Before/After
$lang['adjustment_after']  = 'Ajustement apr�s';
$lang['adjustment_before'] = 'Ajustement avant';
$lang['attendees_after']   = 'Participants apr�s';
$lang['attendees_before']  = 'Participants avant';
$lang['buyers_after']      = 'Acheteurs apr�s';
$lang['buyers_before']     = 'Acheteurs avant';
$lang['class_after']       = 'Classe apr�s';
$lang['class_before']      = 'Classe avant';
$lang['earned_after']      = 'Gagn� apr�s';
$lang['earned_before']     = 'Gagn� avant';
$lang['event_after']       = 'Ev�nement apr�s';
$lang['event_before']      = 'Ev�nement avant';
$lang['headline_after']    = 'Titre apr�s';
$lang['headline_before']   = 'Titre avant';
$lang['level_after']       = 'Niveau apr�s';
$lang['level_before']      = 'Niveau avant';
$lang['members_after']     = 'Membres apr�s';
$lang['members_before']    = 'Membres avant';
$lang['message_after']     = 'Message apr�s';
$lang['message_before']    = 'Message avant';
$lang['name_after']        = 'Nom apr�s';
$lang['name_before']       = 'Nom avant';
$lang['note_after']        = 'Note apr�s';
$lang['note_before']       = 'Note avant';
$lang['race_after']        = 'Race apr�s';
$lang['race_before']       = 'Race avant';
$lang['raid_id_after']     = 'ID de raid apr�s';
$lang['raid_id_before']    = 'ID de aaid avant';
$lang['reason_after']      = 'Raison apr�s';
$lang['reason_before']     = 'Raison avant';
$lang['spent_after']       = 'D�pens� apr�s';
$lang['spent_before']      = 'D�pens� avant';
$lang['value_after']       = 'Valeur apr�s';
$lang['value_before']      = 'Valeur avant';

// Configuration
$lang['general_settings'] = 'Options g�n�rales';
$lang['guildtag'] = 'Nom de la guilde';
$lang['guildtag_note'] = 'Utilis� dans le titre de presque toutes les pages';
$lang['parsetags'] = 'Tags de guilde � parcourir';
$lang['parsetags_note'] = 'Ceux list�s seront disponibles en option au moment de l\'analyse des logs de raid.';
$lang['domain_name'] = 'Nom de domaine';
$lang['server_port'] = 'Port du serveur';
$lang['server_port_note'] = 'Le port de votre serveur web. G�n�ralement 80.';
$lang['script_path'] = 'Chemin (dossier) du script';
$lang['script_path_note'] = 'Chemin ou se trouve EQdkp, en relation avec le nom de domaine';
$lang['site_name'] = 'Nom du site';
$lang['site_description'] = 'Description du site';
$lang['point_name'] = 'Nom du point';
$lang['point_name_note'] = 'Ex: DKP, RP, etc.';
$lang['enable_account_activation'] = 'Activer l\'activation de compte';
$lang['none'] = 'Aucun';
$lang['admin'] = 'Admin';
$lang['default_language'] = 'Langue par d�faut';
$lang['default_locale'] = 'Local par d�faut (option du personnage seulement; ceci n\'affecte pas la langue)';
$lang['default_game'] = 'Jeu par d�faut';
$lang['default_game_warn'] = 'Changer le jeu par d�faut peut annuler les autres changements de cette session.';
$lang['default_style'] = 'Mod�le par d�faut';
$lang['default_page'] = 'Page d\'index par d�faut';
$lang['hide_inactive'] = 'Cacher les membres inactifs';
$lang['hide_inactive_note'] = 'Cacher les membres qui n\'ont pas particip�s � un raid depuis [inactive period] jours ?';
$lang['inactive_period'] = 'P�riode d\'inactivit�';
$lang['inactive_period_note'] = 'Nombre de jour qu\'un membre peut rater et rester consid�r� comme actif';
$lang['inactive_point_adj'] = 'Ajustement de points d\'inactivit�';
$lang['inactive_point_adj_note'] = 'Points d\'ajustement d\'un membre lorsqu\'il devient inactif.';
$lang['active_point_adj'] = 'Activer les points d\'ajustement';
$lang['active_point_adj_note'] = 'Points d\'ajustement d\'un membre lorsqu\'il devient actif.';
$lang['enable_gzip'] = 'Activer la compression Gzip';
$lang['show_item_stats'] = 'Montrer les statistiques des objets';
$lang['show_item_stats_note'] = 'Essaye de r�cup�rer les statistiques d\'un objet depuis internet. Ceci peut influencer la rapidit� de certaines pages.';
$lang['default_permissions'] = 'Permissions par d�faut';
$lang['default_permissions_note'] = 'Ce sont les permissions des utilisateurs qui ne sont pas connect�s ainsi que des nouveaux utilisateurs quand ils s\'inscrivent. Les permissions en <b>gras</b> sont les permissions d\'administration,
                                     il est fortement recommand� de ne mettre aucune de ces permissions par d�faut. Les permissions en <i>italique</i> sont exclusivement utilis�es par les plugins. Vous pourrez changer les permissions individuellement en cliquant sur "G�rer les utilisateurs".';
$lang['plugins'] = 'Plugins';
$lang['no_plugins'] = 'Le dossier des plugins (./plugins/) est vide.';
$lang['cookie_settings'] = 'Options du cookie';
$lang['cookie_domain'] = 'Domaine du cookie';
$lang['cookie_name'] = 'Nom du cookie';
$lang['cookie_path'] = 'Chemin du cookie';
$lang['session_length'] = 'Temps de la session (secondes)';
$lang['email_settings'] = 'Options d\'email';
$lang['admin_email'] = 'Adresse email de l\'administrateur';

// Admin Index
$lang['anonymous'] = 'Anonyme';
$lang['database_size'] = 'Taille de la base de donn�es';
$lang['eqdkp_started'] = 'EQdkp d�marr�';
$lang['ip_address'] = 'Adresse IP';
$lang['items_per_day'] = 'Objets par jour';
$lang['last_update'] = 'Derni�re mise � jour';
$lang['location'] = 'Localisation';
$lang['new_version_notice'] = "EQdkp version %1\$s est <a href=\"http://sourceforge.net/project/showfiles.php?group_id=69529\" target=\"_blank\">disponible au t�l�chargement</a>.";
$lang['number_of_items'] = 'Nombre d\'objets';
$lang['number_of_logs'] = 'Nombre de logs';
$lang['number_of_members'] = 'Nombre de membres (actifs/inactifs)';
$lang['number_of_raids'] = 'Nombre de raids';
$lang['raids_per_day'] = 'Raids par Jour';
$lang['statistics'] = 'Statistiques';
$lang['totals'] = 'Totaux';
$lang['version_update'] = 'Mise � jour de la version';
$lang['who_online'] = 'Qui est en ligne';

// Style Management
$lang['style_settings'] = 'Options de mod�le';
$lang['style_name'] = 'Nom du mod�le';
$lang['template'] = 'Gabarit';
$lang['element'] = 'El�ment';
$lang['background_color'] = 'Couleur de fond';
$lang['fontface1'] = 'Police 1';
$lang['fontface1_note'] = 'Police par d�faut';
$lang['fontface2'] = 'Police 2';
$lang['fontface2_note'] = 'Police des champs "input"';
$lang['fontface3'] = 'Police 3';
$lang['fontface3_note'] = 'Pas utilis� actuellement';
$lang['fontsize1'] = 'Taille de la police 1';
$lang['fontsize1_note'] = 'Petit';
$lang['fontsize2'] = 'Taille de la police 2';
$lang['fontsize2_note'] = 'Moyen';
$lang['fontsize3'] = 'Taille de la police 3';
$lang['fontsize3_note'] = 'Grand';
$lang['fontcolor1'] = 'Couleur de la police 1';
$lang['fontcolor1_note'] = 'Couleur par d�faut';
$lang['fontcolor2'] = 'Couleur de la police 2';
$lang['fontcolor2_note'] = 'Couleur utilis�e hors des tableaux (menus, titres, copyright)';
$lang['fontcolor3'] = 'Couleur de la police 3';
$lang['fontcolor3_note'] = 'Couleur de la police des champs "entr�e"';
$lang['fontcolor_neg'] = 'Couleur de la police des n�gatifs';
$lang['fontcolor_neg_note'] = 'Couleur pour les n�gatifs/mauvais nombres';
$lang['fontcolor_pos'] = 'Couleur de la police des positifs';
$lang['fontcolor_pos_note'] = 'Couleur pour les positifs/bons nombres';
$lang['body_link'] = 'Couleur des liens';
$lang['body_link_style'] = 'Style des liens';
$lang['body_hlink'] = 'Couleur des liens quand on passe dessus';
$lang['body_hlink_style'] = 'Style des liens quand on passe dessus';
$lang['header_link'] = 'Liens d\'en-t�te';
$lang['header_link_style'] = 'Style des liens d\'en-t�te';
$lang['header_hlink'] = 'Liens d\'en-t�te quand on passe dessus';
$lang['header_hlink_style'] = 'Style des liens d\'en-t�te quand on passe dessus';
$lang['tr_color1'] = 'Couleur de la table, Ligne 1';
$lang['tr_color2'] = 'Couleur de la table, Ligne 2';
$lang['th_color1'] = 'Couleur du haut de la table';
$lang['table_border_width'] = 'Epaisseur de la bordure des tableaux';
$lang['table_border_color'] = 'Couleur de la bordure des tableaux';
$lang['table_border_style'] = 'Style de la bordure des tableaux';
$lang['input_color'] = 'Couleur de fond des champs "entr�e"';
$lang['input_border_width'] = 'Largeur de la bordure des champs "entr�e"';
$lang['input_border_color'] = 'Couleur de la bordure des champs "entr�e"';
$lang['input_border_style'] = 'Style de la bordure des champs "entr�e"';
$lang['style_configuration'] = 'Configuration du mod�le';
$lang['style_date_note'] = 'Pour les champs date/temps, la syntaxe utilis�e est identique � la fonction <a href="http://www.php.net/manual/en/function.date.php" target="_blank">date()</a> du PHP.';
$lang['attendees_columns'] = 'Colonnes des participants';
$lang['attendees_columns_note'] = 'Nombre de colonnes utilis�es pour les participants quand on regarde un raid';
$lang['date_notime_long'] = 'Date sans l\'heure (long)';
$lang['date_notime_short'] = 'Date sans l\'heure (court)';
$lang['date_time'] = 'Date avec l\'heure';
$lang['logo_path'] = 'Fichier du logo.';
$lang['logo_path_note'] = 'S�lectionnez une image � partir de /templates/template/images/ ou inserez l\'URL compl�te d\'une image sur internet. Ins�rez l\'ent�te http:// !)';
$lang['logo_path_config'] = 'S�lectionnez un fichier � partir de votre disque dur et t�l�charger le nouveau logo.';

// Errors
$lang['error_invalid_adjustment'] = 'Un ajustement valide n\'a pas �t� fourni.';
$lang['error_invalid_plugin']     = 'Un plugin valide n\' pas �t� fourni.';
$lang['error_invalid_style']      = 'Un style valide n\'a pas �t� fourni.';

// Verbose log entry lines
$lang['new_actions']           = 'Actions d\'administration r�centes';
$lang['vlog_event_added']      = "%1\$s a ajout� l\'�v�nement '%2\$s' pour une valeur de %3\$.2f points.";
$lang['vlog_event_updated']    = "%1\$s a mis � jour l\'�v�nement '%2\$s'.";
$lang['vlog_event_deleted']    = "%1\$s a supprim� l\'�v�nement '%2\$s'.";
$lang['vlog_groupadj_added']   = "%1\$s a ajout� un ajustement de groupe de %2\$.2f points.";
$lang['vlog_groupadj_updated'] = "%1\$s a mis � jour un ajustement de groupe de %2\$.2f points.";
$lang['vlog_groupadj_deleted'] = "%1\$s a supprim� un ajustement de groupe de %2\$.2f points.";
$lang['vlog_history_transfer'] = "%1\$s a transf�r� l\'historique de %2\$s vers %3\$s.";
$lang['vlog_indivadj_added']   = "%1\$s a ajout� un ajustement individuel de %2\$.2f � %3\$d membres.";
$lang['vlog_indivadj_updated'] = "%1\$s a mis � jour un ajustement individuel de %2\$.2f � %3\$s.";
$lang['vlog_indivadj_deleted'] = "%1\$s a supprim� un ajustement individuel de %2\$.2f � %3\$s.";
$lang['vlog_item_added']       = "%1\$s a ajout� un objet '%2\$s' � la charge de %3\$d membres pour %4\$.2f points.";
$lang['vlog_item_updated']     = "%1\$s a mis � jour un objet '%2\$s' � la charge de %3\$d membres.";
$lang['vlog_item_deleted']     = "%1\$s suppression de l\'objet '%2\$s' � la charge de %3\$d membres.";
$lang['vlog_member_added']     = "%1\$s a ajout� le membre %2\$s.";
$lang['vlog_member_updated']   = "%1\$s a mis � jour le membre %2\$s.";
$lang['vlog_member_deleted']   = "%1\$s a supprim� le membre %2\$s.";
$lang['vlog_news_added']       = "%1\$s a ajout� la nouvelle '%2\$s'.";
$lang['vlog_news_updated']     = "%1\$s a mis � jour la nouvelle '%2\$s'.";
$lang['vlog_news_deleted']     = "%1\$s a supprim� la nouvelle '%2\$s'.";
$lang['vlog_raid_added']       = "%1\$s a ajout� un raid sur '%2\$s'.";
$lang['vlog_raid_updated']     = "%1\$s a mis � jour un raid sur '%2\$s'.";
$lang['vlog_raid_deleted']     = "%1\$s a supprim� un raid sur '%2\$s'.";
$lang['vlog_turnin_added']     = "%1\$s a ajout� une restitution de %2\$s � %3\$s pour '%4\$s'.";

// Location messages
$lang['adding_groupadj'] = 'Ajout d\'un ajustement de groupe';
$lang['adding_indivadj'] = 'Ajout d\'un ajustement individuel';
$lang['adding_item'] = 'Ajout d\'un objet';
$lang['adding_news'] = 'Ajout d\'une nouvelle';
$lang['adding_raid'] = 'Ajout d\'un raid';
$lang['adding_turnin'] = 'Ajout d\'une restitution';
$lang['editing_groupadj'] = 'Edition d\'un ajustement de groupe';
$lang['editing_indivadj'] = 'Edition d\'un ajustement individuel';
$lang['editing_item'] = 'Edition d\'un objet';
$lang['editing_news'] = 'Edition d\'une nouvelle';
$lang['editing_raid'] = 'Edition d\'un raid';
$lang['listing_events'] = 'Liste les �v�nements';
$lang['listing_groupadj'] = 'Liste des ajustements de groupes';
$lang['listing_indivadj'] = 'Liste des ajustements individuels';
$lang['listing_itemhist'] = 'Liste de l\'historique des objets';
$lang['listing_itemvals'] = 'Liste des valeurs des objets';
$lang['listing_members'] = 'Liste des membres';
$lang['listing_raids'] = 'Liste des raids';
$lang['managing_config'] = 'G�re la configuration d\'EQdkp';
$lang['managing_members'] = 'G�re les membres';
$lang['managing_plugins'] = 'G�re les plugins';
$lang['managing_styles'] = 'G�re les styles';
$lang['managing_users'] = 'G�re les utilisateurs';
$lang['parsing_log'] = 'Parcours le log';
$lang['viewing_admin_index'] = 'Regarde l\'index de l\'admin';
$lang['viewing_event'] = 'Regarde les �v�nements';
$lang['viewing_item'] = 'Regarde les objets';
$lang['viewing_logs'] = 'Regarde les logs';
$lang['viewing_member'] = 'Regarde les membres';
$lang['viewing_mysql_info'] = 'Regarde les informations MySQL';
$lang['viewing_news'] = 'Regarde les nouvelles';
$lang['viewing_raid'] = 'Regarde les raid';
$lang['viewing_stats'] = 'Regarde les statistiques';
$lang['viewing_summary'] = 'Regarde les r�sum�s';

// Help lines
$lang['b_help'] = 'Texte en gras : [b]texte[/b] (alt+b)';
$lang['i_help'] = 'Texte en italique : [i]texte[/i] (alt+i)';
$lang['u_help'] = 'Texte soulign� : [u]texte[/u] (alt+u)';
$lang['q_help'] = 'Citation : [quote]texte[/quote] (alt+q)';
$lang['c_help'] = 'Texte centr� : [center]texte[/center] (alt+c)';
$lang['p_help'] = 'Ins�rer une image : [img]http://image_url[/img] (alt+p)';
$lang['w_help'] = 'Ins�rer une URL : [url]http://url[/url] ou [url=http://url]URL texte[/url]  (alt+w)';
$lang['it_help'] = 'ins�rer un objet : [item]Judgement Breastplate[/item] (shift+alt+t)';
$lang['ii_help'] = 'Ins�rer l\ic�ne d\'un objet : [itemicon]Judgement Breastplate[/itemicon] (shift+alt+o)';

// Manage Members Menu (yes, MMM)
$lang['add_member'] = 'Ajouter un nouveau membre';
$lang['list_edit_del_member'] = 'Lister, �diter ou supprimer un membre';
$lang['edit_ranks'] = 'Modifier les rangs de membre';
$lang['transfer_history'] = 'Transf�rer l\'historique d\'un membre';

// MySQL info
$lang['mysql'] = 'MySQL';
$lang['mysql_info'] = 'Informations';
$lang['eqdkp_tables'] = 'Tables EQdkp';
$lang['table_name'] = 'Nom de la table';
$lang['rows'] = 'Rang�es';
$lang['table_size'] = 'Taille de la table';
$lang['index_size'] = 'Taille de l\'index';
$lang['num_tables'] = "%d tables";

//Backup
$lang['backup']            = 'Sauvegarde';
$lang['backup_database']   = 'Sauvegarder la base';
$lang['backup_title']      = 'Cr�er une sauvegarde de la base';
$lang['backup_type']       = 'Format de la sauvegarde';
$lang['create_table']      = 'Ajouter l\'option \'CREATE TABLE\' ?';
$lang['skip_nonessential'] = 'Ignorer les �l�ments mineurs ?<br />Les lignes de la table eqdkp_sessions ne seront pas ins�r�es.';
$lang['gzip_content']      = 'Compression GZIP ?<br />Le fichier g�n�r� sera plus petit.';
$lang['backup_no_table_prefix']    = '<strong>ATTENTION:</strong> Votre installation d\'EQdkp n\'a pas de prefixe pour ses tables. Toutes les tables de plugins ne seront pas sauvegard�es.';

// plus
$lang['in_database']  = 'Sauvegard� dans la base';

//Log Users Actions
$lang['action_user_added']     = 'Utilisateur ajout�';
$lang['action_user_deleted']   = 'Utilisateur supprim�';
$lang['action_user_updated']   = 'Utilisateur mis � jour';

$lang['vlog_user_added']     = "%1\$s a ajout� l\'utilisateur %2\$s.";
$lang['vlog_user_updated']   = "%1\$s a mis � jour l\'utilisateur %2\$s.";
$lang['vlog_user_deleted']   = "%1\$s a supprim� l\'utilisateur %2\$s.";

//MultiDKP
$lang['action_multidkp_added']     = "Groupe MultiDKP ajout�";
$lang['action_multidkp_deleted']   = "Groupe MultiDKP supprim�";
$lang['action_multidkp_updated']   = "Groupe MultiDKP mis � jour";
$lang['action_multidkp_header']    = "MultiDKP";

$lang['vlog_multidkp_added']     = "%1\$s a ajout� le groupe MultiDKP %2\$s.";
$lang['vlog_multidkp_updated']   = "%1\$s a mis � jour le groupe MultiDKP %2\$s.";
$lang['vlog_multidkp_deleted']   = "%1\$s a supprim� le groupe MultiDKP %2\$s.";

$lang['default_style_overwrite']   = "Remplace tous les r�glages de mod�le des utilisateurs (tous les utilisateurs utilisent le mod�le par d�faut)";
$lang['class_colors']              = "Couleurs des classes";

#Plugins
$lang['description'] = 'Description';
$lang['manual'] = 'Manuel';
$lang['homepage'] = 'Site internet';
$lang['readme'] = 'Lisez-moi';
$lang['link'] = 'Lien';
$lang['infos'] = 'Infos';

// Plugin Install / Uninstall
$lang['plugin_inst_success']  = 'Succ�s';
$lang['plugin_inst_error']  = 'Erreur';
$lang['plugin_inst_message']  = "Le plugin <i>%1\$s</i> a �t� correctement %2\$s.";
$lang['plugin_inst_installed'] = 'install�';
$lang['plugin_inst_uninstalled'] = 'd�sinstall�';
$lang['plugin_inst_errormsg1'] = "Des erreurs ont �t� d�tect�s durant le processus d\'%1\$s : %2\$s";
$lang['plugin_inst_errormsg2']  = "%1\$s peut ne pas avoir �t� correctement %2\$s.";

$lang['background_image'] = 'Image d\'arri�re plan ( 1000x1000px) [optional]';
$lang['css_file'] = 'Fichier CSS - ignore la plupart des r�glages de couleur sur ce site. [optional]';

$lang['plugin_inst_sql_note'] = 'Une erreur SQL n\'implique pas forc�ment une mauvais installation du plugin. Esssayez le plugin et si des erreurs se produisent, d�sinstallez et installez de nouveau.';

// Plugin Update Warn Class
$lang['puc_perform_intro']          = 'Les plugins suivants n�cessitent une mise � jour de leurs bases. Cliquez sur le lien "r�soudre" afin d\'effectuer les modifications pour chaque plugin.<br/>Les tables suivantes sont p�rim�es :';
$lang['puc_pluginneedupdate']       = "<b>%1\$s</b>: (Requires database updates from %2\$s to %3\$s)";
$lang['puc_solve_dbissues']         = 'r�soudre';
$lang['puc_unknown']                = '[unknown]';

//---- Main ----
$lang['pluskernel']          			= 'PLUS Config';
$lang['pk_adminmenu']         			= 'PLUS Config';
$lang['pk_settings']					= 'Parametre';
$lang['pk_date_settings']				= 'd.m.y';

//---- Javascript stuff ----
$lang['pk_plus_about']					= 'A Propos de EQDKP PLUS';
$lang['updates']						= 'Mises � jour disponibles';
$lang['loading']						= 'Chargement...';
$lang['pk_config_header']				= 'EQDKP PLUS Parametre';
$lang['pk_close_jswin1']      			= 'Fermer le';
$lang['pk_close_jswin2']     			= 'La fen�tre avant de l ouvrir � nouveau!';
$lang['pk_help_header']				= 'Aide';
$lang['pk_plus_comments']  			= 'Commentaire';

//---- Updater Stuff ----
$lang['pk_alt_attention']				= 'Attention';
$lang['pk_alt_ok']						= 'Tout est OK!';
$lang['pk_updates_avail']				= 'Mises � jour disponibles';
$lang['pk_updates_navail']				= 'Mises � jour non disponibles';
$lang['pk_no_updates']					= 'Your Versions are all up to date. There are no newer Versions available.';
$lang['pk_act_version']				= 'Nouvelle Version';
$lang['pk_inst_version']				= 'Installation';
$lang['pk_changelog']					= 'Texte de Changement';
$lang['pk_download']					= 'T�l�chargement';
$lang['pk_upd_information']			= 'Information';
$lang['pk_enabled']					= 'Autoris�';
$lang['pk_disabled']					= 'non autoris�';
$lang['pk_auto_updates1']				= 'L avertissement de mise � jour est automatique';
$lang['pk_auto_updates2']				= 'Si vous d�sactivez ce param�tre, s il vous pla�t v�rifiez r�guli�rement les mises � jour pour emp�cher hacks et rester � jour ';
$lang['pk_module_name']				= 'Nom de Module';
$lang['pk_plugin_level']				= 'Level';
$lang['pk_release_date']				= 'Version';
$lang['pk_alt_error']					= 'Erreur';
$lang['pk_no_conn_header']				= 'Errueur de Connection';
$lang['pk_no_server_conn']				= 'Une erreur s est produite lors de la tentative de contact avec le serveur de mise � jour, soit
															votre h�te ne permet pas les connexions sortantes ou l erreur a �t� caus�e
															par un probl�me de r�seau. S il vous pla�t visitez le forum eqdkp pour
															que vous utilisez la derni�re version.';
$lang['pk_reset_warning']				= 'Attention remise a z�ro';

//---- Update Levels ----
$lang['pk_level_other']				= 'Autre';
$updatelevel = array (
	'Bugfix'							=> 'Bugfix',
	'Feature Release'					=> 'Texte de mise a jour',
	'Security Update'					=> 'Mise � jour de s�curit�',
	'New version'						=> 'Nouvelle version',
	'Release Candidate'					=> 'Release Candidate',
	'Public Beta'						=> 'Public Beta',
	'Closed Beta'						=> 'Fermer la Beta',
	'Alpha'								=> 'Alpha',
);

//---- Settings ----
$lang['pk_save']						= 'Sauvegarde';
$lang['pk_save_title']					= 'Parametre de sauvegarde';
$lang['pk_succ_saved']					= 'Les parametrre ont �t� correctement sauvegard�es';
 // Tabs
$lang['pk_tab_global']					= 'Global';
$lang['pk_tab_multidkp']				= 'MultiDKP';
$lang['pk_tab_links']					= 'Liens';
$lang['pk_tab_bosscount']				= 'BossCounter';
$lang['pk_tab_listmemb']				= 'Liste de membres';
$lang['pk_tab_itemstats']				= 'Itemstats';
// Global
$lang['pk_set_QuickDKP']				= 'Afficher QuickDKP';
$lang['pk_set_Bossloot']				= 'Afficher bossloot ?';
$lang['pk_set_ClassColor']				= 'Colorier le noms des classes';
$lang['pk_set_Updatecheck']			= 'Activer la v�rification des mises � jour';
$lang['pk_window_time1']				= 'Afficher la fen�tre toutes les';
$lang['pk_window_time2']				= 'Minutes';
// MultiDKP
$lang['pk_set_multidkp']				= 'Activer MultiDKP';
// Listmembers
$lang['pk_set_leaderboard']			= 'Afficher le classement';
$lang['pk_set_lb_solo']				= 'Afficher le classement par compte';
$lang['pk_set_rank']					= 'Afficher les Rangs';
$lang['pk_set_rank_icon']				= 'Afficher l icone des rangs';
$lang['pk_set_level']					= 'Afficher le Level';
$lang['pk_set_lastloot']				= 'Afficher le Dernier Loot';
$lang['pk_set_lastraid']				= 'Afficher le Dernier Raid';
$lang['pk_set_attendance30']			= 'Afficher l instance des raids des 30 dernier jours';
$lang['pk_set_attendance60']			= 'Afficher l instance des raids des 60 dernier jours';
$lang['pk_set_attendance90']			= 'Afficher l instance des raids des 90 dernier jours';
$lang['pk_set_attendanceAll']			= 'Voir la participation de tout les raids';
// Links
$lang['pk_set_links']					= 'Autoriser les liens';
$lang['pk_set_linkurl']				= 'Liens URL';
$lang['pk_set_linkname']				= 'Liens des Noms';
$lang['pk_set_newwindow']				= 'Ouvrir dans une nouvelle fenetre ?';
// BossCounter
$lang['pk_set_bosscounter']			= 'Afficher le Bosscounter';
//Itemstats
$lang['pk_set_itemstats']				= 'Afficher Itemstats';
$lang['pk_is_language']				= 'Itemstats language';
$lang['pk_german']						= 'German';
$lang['pk_english']					= 'Englais';
$lang['pk_french']						= 'Francais';
$lang['pk_set_icon_ext']				= '';
$lang['pk_set_icon_loc']				= '';
$lang['pk_set_en_de']					= 'Traduire les items de anglais vers allemand';
$lang['pk_set_de_en']					= 'Traduire les items de allemand vers anglais';

################
# new sort
###############

//MultiDKP
//

$lang['pk_set_multi_Tooltip']					= 'Afficher le tooltip de DKP';
$lang['pk_set_multi_smartTooltip']			 	= 'tooltip intelligent';

//Help
$lang['pk_help_colorclassnames']				= "Si activ�, les joueurs seront pr�sent�s � la couleurs de WOW leur cat�gorie et leur ic�ne de classe .";
$lang['pk_help_quickdkp']						= "Voir l'utilisateur connect� sur tous les points qui sont les membres qui lui sont assign�es dans le menu ci-dessus";
$lang['pk_help_boosloot']						= "Si activ�, vous pouvez cliquer sur les noms des boss de raid dans la note et le bosscounter de disposer d'un aper�u d�taill� des �l�ments d�pos�s. Si inactive, il sera li� � Blasc.de (activer seulement si vous entrez dans un raid pour chaque boss)";
$lang['pk_help_autowarning']             		= "Mets en garde l'administrateur quand il se connecte, si des mises � jour sont disponibles.";
$lang['pk_help_warningtime']             		= "Combien de fois la mise en garde doit appara�tre?";
$lang['pk_help_multidkp']						= "MultiDKP permet la gestion et la pr�sentation de comptes s�par�s. Active la gestion et l'aper�u des comptes MultiDKP.";
$lang['pk_help_dkptooltip']					= "Si activ�, une info-bulle contenant des informations d�taill�es sur le calcul des points sera montr�, lorsque la souris glisse sur les diff�rents points.";
$lang['pk_help_smarttooltip']					= "Raccourcissement de l'ensemble des bulles d'aide (si vous avez activer plus de trois �v�nements par compte)";
$lang['pk_help_links']                  		= "Dans ce menu, vous �tes en mesure de d�finir les diff�rents liens, qui seront affich� dans le menu principal.";
$lang['pk_help_bosscounter']             		= "Si activ�, un tableau sera affich� sous le menu principal avec le bosskills. L'administration est g�r�e par le plugin Bossprogress";
$lang['pk_help_lm_leaderboard']				= "Si activ�, un classement sera affich� au-dessus de la table des scores. Un leaderboard est un tableau, o� le DKP de chaque classe est affich�e tri�e dans l'ordre d�croissant.";
$lang['pk_help_lm_rank']                 		= "Une colonne suppl�mentaire est affich�e, qui affiche le rang du membre.";
$lang['pk_help_lm_rankicon']             		= "Au lieu de classer les noms, une ic�ne est affich�e. Quels articles sont disponibles, vous pouvez v�rifier dans le dossier \ images \ rang";
$lang['pk_help_lm_level']						= "Une colonne suppl�mentaire est affich�e, qui affiche le niveau du membre. ";
$lang['pk_help_lm_lastloot']             		= "Un suppl�ment de colonnes est affich�e, indiquant la date � laquelle un membre a re�u son dernier point.";
$lang['pk_help_lm_lastraid']             		= "Une colonne suppl�mentaire est affich�e, indiquant la date du dernier raid auquels un membre a particip� .";
$lang['pk_help_lm_atten30']					= "Une colonne suppl�mentaire est affich�e, montrant un raid auquels les membre ont particip�s au cours des 30 derniers jours (en pourcentage).";
$lang['pk_help_lm_atten60']					= "Une colonne suppl�mentaire est affich�e, montrant un raid auquels les membre ont particip�s au cours des 30 derniers jours (en pourcentage).";
$lang['pk_help_lm_atten90']					= "Une colonne suppl�mentaire est affich�e, montrant un raid auquels les membre ont particip�s au cours des 30 derniers jours (en pourcentage). ";
$lang['pk_help_lm_attenall']             		= "Une colonne suppl�mentaire est affich�e, montrant un raid auquels toutles membre ont particip�s";
$lang['pk_help_itemstats_on']				 	= "Itemstats demande d'information sur les �l�ments inscrits dans EQDKP dans les bases de donn�es WOW (Blasc, Allahkazm, Thottbot). Ils seront affich�s dans la couleur des articles de qualit� y compris l'aide appel� WOW. Lorsque c'est activer, les �l�ments seront affich�s avec un mouseover tooltip, semblable � WOW.";
$lang['pk_help_itemstats_search']				= "Quelle base de donn�es devrait utiliser Itemstats en premier lieu � rechercher l'information? Blasc ou Allakhazam?";
$lang['pk_help_itemstats_icon_ext']			= "Extension de fichier des images a affich�es. Habituellement. Png ou. Jpg.";
$lang['pk_help_itemstats_icon_url']    		= "S'il vous pla�t entrez l'URL o� les images d'Itemstats sont situ�s. Allemand: http://www.buffed.de/images/wow/32/ en 32x32 ou 64x64 pixels.Anglais dans http://www.buffed.de/images/wow/64/ � Allakzam: http://www.buffed.de/images/wow/32 /> permuter";
$lang['pk_help_itemstats_translate_deeng']		= "Si active, l'information des bulles d'aide vous sera demand� en allemand, m�me lorsque la question est entr� en anglais.";
$lang['pk_help_itemstats_translate_engde']		= "Si active, l'information des bulles d'aide vous sera demand�, en anglais, m�me si la question est entr� en allemand.";

$lang['pk_set_leaderboard_2row']		  = 'Classement a 2 lignes';
$lang['pk_help_leaderboard_2row']        = 'Si active, le classement sera affich� sur deux lignes avec 4 ou 5 classes chacune.';

$lang['pk_set_leaderboard_limit']        = 'Limite de l affichage';
$lang['pk_help_leaderboard_limit']		  = 'Si un nombre num�rique est en cours de saisie, le classement sera limit� � l entr�e de nombre de membres. Le chiffre 0 ne repr�sente aucune restriction.';

$lang['pk_set_leaderboard_zero']         = 'Cacher les membres zero DKP';
$lang['pk_help_leaderboard_zero']        = 'Si activ�, les joueurs avec z�ro DKP ne seront pas afficher dans le classement';


$lang['pk_set_newsloot_limit']			  = 'Limite des nouveaux loot';
$lang['pk_help_newsloot_limit']          = 'Combien d articles doivent �tre affich�s dans les m�dias? Cela restreint l affichage d articles, qui sera affich� dans les m�dias. Le chiffre 0 repr�sente aucune restriction.';

$lang['pk_set_itemstats_debug']          = 'Debug Mod';
$lang['pk_help_itemstats_debug']					= '	
Si activ�, Itemstats va enregistrer toutes les transactions de / itemstats / includes_de / debug.txt. Ce fichier doit �tre en �criture, CHMOD 777 !!!';

$lang['pk_set_showclasscolumn']          = 'Afficher les colones de classe';
$lang['pk_help_showclasscolumn']		  = 'Si activ�, une colonne suppl�mentaire est affich� indiquant la classe du joueur.' ;

$lang['pk_set_show_skill']				  = 'Afficher la colonne de comp�tences';
$lang['pk_help_show_skill']              = 'Si activ�, une colonne suppl�mentaire est affich�e montrant les comp�tences du joueur.';

$lang['pk_set_show_arkan_resi']          = 'Afficher la colone de r�sistance arcanes';
$lang['pk_help_show_arkan_resi']		  = 'Si activ�, une colonne suppl�mentaire est affich�e montrant la r�sistance arcane du joueur.';

$lang['pk_set_show_fire_resi']			  = 'Afficher la colone de r�sistance feu';
$lang['pk_help_show_fire_resi']          = 'Si activ�, une colonne suppl�mentaire est affich�e montrant la r�sistance feu du joueur.';

$lang['pk_set_show_nature_resi']		  = 'Afficher la colone de r�sistance nature';
$lang['pk_help_show_nature_resi']        = 'Si activ�, une colonne suppl�mentaire est affich�e montrant la r�sistance nature du joueur.';

$lang['pk_set_show_ice_resi']            = 'Afficher la colone de r�sistance givre';
$lang['pk_help_show_ice_resi']			  = 'Si activ�, une colonne suppl�mentaire est affich�e montrant la r�sistance Givre du joueur.';

$lang['pk_set_show_shadow_resi']		  = 'Afficher la colone de r�sistance ombre';
$lang['pk_help_show_shadow_resi']        = 'Si activ�, une colonne suppl�mentaire est affich�e montrant la r�sistance ombre du joueur.';

$lang['pk_set_show_profils']			  = 'Afficher la colonne du lien du profil.';
$lang['pk_help_show_profils']            = 'Si activ�, une colonne suppl�mentaire est affich�e montrant les liens pour le profil.';

$lang['pk_set_servername']               = 'Nom du serveur';
$lang['pk_help_servername']              = 'Mettre le nom du serveur';

$lang['pk_set_server_region']			  = 'R�gion';
$lang['pk_help_server_region']			  = 'US or EU serveur.';


$lang['pk_help_default_multi']           = 'Choisissez la valeur par d�faut pour le classement d�croissantDKP';
$lang['pk_set_default_multi']            = 'D�finir par d�faut pour les classements';

$lang['pk_set_round_activate']           = 'Round DKP.';
$lang['pk_help_round_activate']          = 'Si activ�, les point de DKP affich�s sont arrondis. 125,00 = 125DKP';

$lang['pk_set_round_precision']          = 'Placer une d�cimal par round.';
$lang['pk_help_round_precision']         = 'R�gler la d�cimale � arrondir les DKP. 0 = par d�faut';

$lang['pk_is_set_prio']                  = 'Priorit�e de Itemdatabase';
$lang['pk_is_help_prio']                 = 'R�gler l ordre des bases de donn�es.';

$lang['pk_is_set_alla_lang']	            = 'Language du noms des items sur Allakhazam.';
$lang['pk_is_help_alla_lang']	          = 'Dans quelle langue les items requis doivent �tre?';

$lang['pk_is_set_lang']		              = 'Language Standard des Item ID\'s.';
$lang['pk_is_help_lang']		              = 'Language Standard des Item ID. Example : [item]17182[/item] Choisissez le language.';

$lang['pk_is_set_autosearch']            = 'Recherche imm�diate';
$lang['pk_is_help_autosearch']           = 'Activer:Si l �l�ment n est pas dans le cache, la recherche de la question des informations automatiquement. Non activ�: Point d information sur la r�cup�ration n est que de cliquer sur le point des informations.';

$lang['pk_is_set_integration_mode']      = 'Integration Modus';
$lang['pk_is_help_integration_mode']     = 'Normal: la num�risation du texte et la mise en bulle dans le code html. Texte: num�risation de texte et mettre en <script> tags.';

$lang['pk_is_set_tooltip_js']            = 'Voir le Tooltips';
$lang['pk_is_help_tooltip_js']           = 'Overlib: The normal Tooltip. Light: Light version, faster loading times.';

$lang['pk_is_set_patch_cache']           = 'Cache Path';
$lang['pk_is_help_patch_cache']          = 'Chemin d acc�s au cache item de l utilisateur , � partir de / itemstats /. Default =. / xml_cache /';

$lang['pk_is_set_patch_sockets']         = 'Chemin du repertoire des photos ';
$lang['pk_is_help_patch_sockets']        = 'Chemin vers les fichiers image des articles.';

$lang['pk_set_dkp_info']			  = 'Ne pas afficher les info DKP sur le menu principal.';
$lang['pk_help_dkp_info']			  = 'Si activer DKP infos ne seras pas afficher dans le menu principal';

$lang['pk_set_debug']			= 'Activer Eqdkp Debug Modus';
$lang['pk_set_debug_type']		= 'Mode';
$lang['pk_set_debug_type0']	= 'Debug non autoriser (Debug=0)';
$lang['pk_set_debug_type1']	= 'D�boguage simple (Debug=1)';
$lang['pk_set_debug_type2']	= 'D�bogage avec Requ�tes SQL(Debug=2)';
$lang['pk_set_debug_type3']	= 'D�bogage �tendus (Debug=3)';
$lang['pk_help_debug']			= 'Si activ�, Eqdkp Plus sera ex�cut� en mode de d�bogage, en montrant plus d informations et de messages d erreur. D�sactiv� si plugins avorter avec des messages d erreur SQL! 1 = temps de rendu, requete count, 2 = SQL sorties, 3 = Am�lioration des messages d erreur.';

#RSS News
$lang['pk_set_Show_rss']			= 'D�sactiver RSS News';
$lang['pk_help_Show_rss']			= 'Si activ�, les nouvelles RSS Eqdkp Plus du jeux ne seront pas affich�es ';

$lang['pk_set_Show_rss_style']		= 'Game-news positioning';
$lang['pk_help_Show_rss_style']	= 'RSS-Game News positioning. En Haut horizontalement, dans le menu vertical ou les deux?';

$lang['pk_set_Show_rss_lang']		= 'RSS-News language par d�faut';
$lang['pk_help_Show_rss_lang']		= 'Recevez les nouvelles RSS en quelle langue? (atm allemand seulement). English news disponibles depuis de 2009.';

$lang['pk_set_Show_rss_lang_de']	= 'Allemand';
$lang['pk_set_Show_rss_lang_eng']	= 'Anglais';

$lang['pk_set_Show_rss_style_both'] = 'Les deux' ;
$lang['pk_set_Show_rss_style_v']	 = 'Menu verticale' ;
$lang['pk_set_Show_rss_style_h']	 = 'Haut horizontale' ;

$lang['pk_set_Show_rss_count']		= 'Nouveau compteurs (0 or "" for all)';
$lang['pk_help_Show_rss_count']	= 'Combien de nouvelles doivent �tre affich�es?';

$lang['pk_set_itemhistory_dia']	= 'Ne pas affich� le diagrames'; # Ja negierte Abfrage
$lang['pk_help_itemhistory_dia']	= 'Si activer, Eqdkp Plus ne montreras pas le diagrames.';

#Bridge
$lang['pk_set_bridge_help']				= 'Sur cet onglet, vous pouvez r�gler les param�tres de laisser un syst�me de gestion de contenu (CMS) d interagir avec Eqdkp Plus.
												Si vous choisissez l un des syst�mes dans le champ du menu d�roulant, inscription des membres de votre Forum / CMS sera en mesure de vous connecter en Eqdkp plus avec les m�mes r�f�rences dans Forum / CMS.
												L acc�s n est autoris� que pour un seul groupe, ce qui signifie que vous devez cr�er un nouveau groupe dans votre CMS / Forum, qui appartiennent tous les membres, qui aura acc�s Eqdkp.';

$lang['pk_set_bridge_activate']			= 'Activate liens au CMS';
$lang['pk_help_bridge_activate']			= 'Lorsque pont est activ�, les utilisateurs du forum ou CMS sera en mesure de connecter en Eqdkp plus avec les m�mes pouvoirs tel que il est utilis� dans le CMS / Forum';

$lang['pk_set_bridge_dectivate_eq_reg']	= 'D�sactiver la registration a Eqdkp Plus';
$lang['pk_help_bridge_dectivate_eq_reg']	= 'Lorsqu il est activ� de nouveaux utilisateurs ne sont pas en mesure de s inscrire au Eqdkp Plus. L enregistrement de nouveaux utilisateurs doivent �tre fait au CMS / Forum.';

$lang['pk_set_bridge_cms']					= 'Supporte CMS';
$lang['pk_help_bridge_cms']				= 'Which CMS shall be bridged ';

$lang['pk_set_bridge_acess']				= 'Est-ce que le CMS / Forum sur une autre base de donn�es que Eqdkp?';
$lang['pk_help_bridge_acess']				= 'Si vous utilisez le CMS / Forum sur l autre activer cette base de donn�es et remplir les champs ci-dessous';

$lang['pk_set_bridge_host']				= 'Hostname';
$lang['pk_help_bridge_host']				= 'The Hostname or IP sur lequel le serveur de base de donn�es �coute iss';

$lang['pk_set_bridge_username']			= 'Database User';
$lang['pk_help_bridge_username']			= 'Username utilise� pour se connecter a la Database';

$lang['pk_set_bridge_password']			= 'Database Userpassword';
$lang['pk_help_bridge_password']			= 'Mot de passe de l utilisateur pour se connecter a la database';

$lang['pk_set_bridge_database']			= 'Database Name';
$lang['pk_help_bridge_database']			= 'Nom de la database ou se trouve le CMS';

$lang['pk_set_bridge_prefix']				= 'Tableprefix De l installation du CMS';
$lang['pk_help_bridge_prefix']				= 'Give your Prefix of your CMS . e.g.. phpbb_ or wcf1_';

$lang['pk_set_bridge_group']				= 'Group ID of the CMS Group';
$lang['pk_help_bridge_group']				= 'Entrez ici l ID du groupe, dans le CMS, qui est autoris� � acc�der � Eqdkp.';

$lang['pk_set_bridge_inline']				= 'Forum Integration EQDKP - BETA !';
$lang['pk_help_bridge_inline']				= 'Lorsque vous entrez une URL ici, un lien sera affich� dans le menu, qui montre le site � l int�rieur de la Eqdkp. Cela se fait avec une dynamique iframe. Le Eqdkp Plus n est pas responsable de la appereance et le comportement du site inclus dans l iframe';

$lang['pk_set_bridge_inline_url']			= 'URL du Forum';
$lang['pk_help_bridge_inline_url']			= 'URL du Forum';

$lang['pk_set_link_type_header']			= 'Afficher le style';
$lang['pk_set_link_type_help']				= '';
$lang['pk_set_link_type_iframe_help']		= 'Comment le lien doit �tre ouvert. Embedded dynamique ne fonctionne que avec les sites install�s sur le m�me serveur';
$lang['pk_set_link_type_self']				= 'Normal';
$lang['pk_set_link_type_link']				= 'Nouvelle fenetre';
$lang['pk_set_link_type_iframe']			= 'Embedded';

#recruitment
$lang['pk_set_recruitment_tab']			= 'Recrutement';
$lang['pk_set_recruitment_header']			= 'Recrutement - Vous pouvez voir les nouveaux membres ?';
$lang['pk_set_recruitment']				= 'Activer le recrutement';
$lang['pk_help_recruitment']				= 'Si activer, une bo�te avec le besoin de classes sont afficher au sommet de la page.';
$lang['pk_recruitment_count']				= 'Nombre';
$lang['pk_set_recruitment_contact_type']	= 'Liens URL';
$lang['pk_help_recruitment_contact_type']	= 'Si aucune URL est donn�e, il y auras un lien vers le contact email';
$lang['ps_recruitment_spec']				= 'Spec';

#comments
$lang['pk_set_comments_disable']			= 'D�sactiver les commentaires';
$lang['pk_hel_pcomments_disable']			= 'D�sactiver les commentaires sur toutes les pages';

#Contact
$lang['pk_contact']						= 'Contact infos';
$lang['pk_contact_name']					= 'Noms';
$lang['pk_contact_email']					= 'Email';
$lang['pk_contact_website']				= 'SiteWeb';
$lang['pk_contact_irc']					= 'IRC Channel';
$lang['pk_contact_admin_messenger']		= 'Nom Messenger  (Skype, ICQ)';
$lang['pk_contact_custominfos']			= 'Infos suppl�mentaire';
$lang['pk_contact_owner']					= 'Autres Infos:';

#Next_raids
$lang['pk_set_nextraids_deactive']			= 'Ne pas afficher les raids suivants';
$lang['pk_help_nextraids_deactive']		= 'Si active, les prochains raids ne seront pas dans le Menu';

$lang['pk_set_nextraids_limit']			= 'Limite d affichages des prochains raids';
$lang['pk_help_nextraids_limit']			= '';

$lang['pk_set_lastitems_deactive']			= 'Ne pas afficher les dernier items.';
$lang['pk_help_lastitems_deactive']		= 'Si activer les prochains items seront afficher dans le menu';

$lang['pk_set_lastitems_limit']			= 'Limite d affichage du dernier �l�ment';
$lang['pk_help_lastitems_limit']			= 'Limite d affichage du dernier �l�ment';

$lang['pk_is_help']						= ' Important: Changement de Itemstats mani�risme avec EQdkp-Plus 0.6.2.4 <br>
												Si vos articles ne doivent pas �tre affich�s correctement plus apr�s une mise � jour, �tablir de nouvelles de la "priorit� du point de base de donn�es" (nous vous recommandons Armory & WoWHead)
												Et de r�cup�rer des points � nouveau.
												<br> la "Mise � jour Itemstat Link" au-dessous de ce message. <br>
												Le meilleur r�sultat sera obtenu avec le param�tre "& WoWHead Armory", puisque seuls les Blizzards Armory delievers des informations suppl�mentaires comme droprate,
												Mob et donjon par point diminu�.
												Afin de rafra�chir la m�moire cache point suivre le lien, puis choisissez "Vider le cache" et "Mise � jour Itemtable" apr�s cela. <br>
												Imortant: Si vous avez chang� la base de donn�es web, vous devez vider le cache, si vous n \ est un �l�ment existant des bulles d aide ne seront pas affich�es correctement. <br>';

$lang['pk_set_normal_leaderbaord']			= 'Voir le classement avec Slider';
$lang['pk_help_normal_leaderbaord']		= 'Si activer, Voir le classement avec Slider.';

$lang['pk_set_thirdColumn']				= 'Ne pas montrer la troisi�me colonne';
$lang['pk_help_thirdColumn']				= 'Ne pas montrer la troisi�me colonne';

#GetDKP
$lang['pk_getdkp_th']						= 'GetDKP configuration';

$lang['pk_set_getdkp_rp']					= 'Activer raidplan';
$lang['pk_help_getdkp_rp']					= 'Activer raidplan';

$lang['pk_set_getdkp_link']				= 'Afficher le liens getdkp dans le menu principal';
$lang['pk_help_getdkp_link']				= 'Afficher le liens getdkp dans le menu principal';

$lang['pk_set_getdkp_active']				= 'D�sactiver getdkp.php';
$lang['pk_help_getdkp_active']				= 'D�sactiver getdkp.php';

$lang['pk_set_getdkp_items']				= 'Annuler itemIDs';
$lang['pk_help_getdkp_items']				= 'Annuler itemIDs';

$lang['pk_set_recruit_embedded']			= 'Ouvrir le lien embedded';
$lang['pk_help_recruit_embedded']			= 'Si activer, le lien seras ouvert embedded i an iframe';


$lang['pk_set_dis_3dmember']				= 'D�sactiver 3D Modelviewer pour les Membres';
$lang['pk_help_dis_3dmember']				= 'D�sactiver 3D Modelviewer pour les Membres';

$lang['pk_set_dis_3ditem']					= 'D�sactiver 3D Modelviewer pour les items';
$lang['pk_help_dis_3item']					= 'D�sactiver 3D Modelviewer pour les items';

$lang['pk_set_disregister']				= 'D�sactiver la registration des utilisateurs ';
$lang['pk_help_disregister']				= 'D�sactiver la registration des utilisateurs';

# Portal Manager
$lang['portalplugin_name']         = 'Modul';
$lang['portalplugin_version']      = 'Verson';
$lang['portalplugin_contact']      = 'Contact';
$lang['portalplugin_order']        = 'Sorting';
$lang['portalplugin_orientation']  = 'Orientation';
$lang['portalplugin_enabled']      = 'Activer';
$lang['portalplugin_save']         = 'Sauver les changements';
$lang['portalplugin_management']   = 'G�rer les modules des portails';
$lang['portalplugin_right']        = 'Droite';
$lang['portalplugin_middle']       = 'Milieu';
$lang['portalplugin_left1']        = 'En haut a gauche du menu.';
$lang['portalplugin_left2']        = 'En bas a gauche du menu';
$lang['portalplugin_settings']     = 'Configuration';
$lang['portalplugin_winname']      = 'Configuration du module du portail';
$lang['portalplugin_edit']         = 'Editer';
$lang['portalplugin_save']         = 'Sauver';
$lang['portalplugin_rights']       = 'Visibilit�e';
$lang['portal_rights0']            = 'Tous';
$lang['portal_rights1']            = 'Invit�s';
$lang['portal_rights2']            = 'Enregistr�';
$lang['portal_collapsable']        = 'Collapsable';

$lang['pk_set_link_type_D_iframe']			= 'Embedded dynamic high';

$lang['pk_set_modelviewer_default']	= 'Default du Modelviewer';


 /* IMAGE RESIZE */
 // Lytebox settings
 $lang['pk_air_img_resize_options'] = 'Lytebox Configuration';
 $lang['pk_air_img_resize_enable'] = 'Autoriser le redimensionnement de l image';
 $lang['pk_air_max_post_img_resize_width'] = 'Largeur Maximum de l image';
 $lang['pk_air_show_warning'] = 'Activer Attention, si l image a �t� refaite';
 $lang['pk_air_lytebox_theme'] = 'Lytebox\'s theme';
 $lang['pk_air_lytebox_theme_explain'] = 'Th�mes: gris (par d�faut), rouge, vert, bleu, or';
 $lang['pk_air_lytebox_auto_resize'] = 'Activer le rezize automatique';
 $lang['pk_air_lytebox_auto_resize_explain'] = 'Contr�les ou non si les images doivent �tre redimensionn�es si elle sont plus grande que la dimensionsla fen�tre du navigateur ';
 $lang['pk_air_lytebox_animation'] = 'Autoriser animation';
 $lang['pk_air_lytebox_animation_explain'] = 'Contr�les ou non "animate" Lytebox, c est-�-dire la transition entre les images, de redimensionner, fade in / out des effets, etc';
 $lang['pk_air_lytebox_grey'] = 'Gris';
 $lang['pk_air_lytebox_red'] = 'Rouge';
 $lang['pk_air_lytebox_blue'] = 'Bleue';
 $lang['pk_air_lytebox_green'] = 'Vert';
 $lang['pk_air_lytebox_gold'] = 'Or';

 $lang['pk_set_hide_shop'] = 'Cacher les liens d achats';
 $lang['pk_help_hide_shop'] = 'Cacher les liens d achats';

$lang['pk_set_rss_chekurl'] = 'v�rifier RSS URL bevor mise � jour';
 $lang['pk_help_rss_chekurl'] = 'Contr�les de savoir si ou non les RSS-Web sont contr�l�s avant mise � jour.';

$lang['pk_set_noDKP'] = 'Cacher les fonctions DKP';
$lang['pk_help_noDKP'] = 'Si activer,toutes les autres fonctions DKP sont d�sactiv�es et aucun avis de DKP-points seront indiqu�s. Ne s appliquent pas � des raids et la liste. ';

$lang['pk_set_noRoster'] = 'Cacher Roster';
$lang['pk_help_noRoster'] = 'Si activer l acces a la page seras bloquer et le menu du roster ne seras pas afficher';

$lang['pk_set_noDKP'] = 'Voir le roster au lieu de l apercu DKP-point ';
$lang['pk_help_noDKP'] = 'Si activer le roster membre seras afficher a la place des points de DKP';

$lang['pk_set_noRaids'] = 'Cacher les fonctions du raid';
$lang['pk_help_noRaids'] = 'Si activer les raids seront cacher,ne s applique pas aux events';

$lang['pk_set_noEvents'] = 'Cacher les Events';
$lang['pk_help_noEvents'] = 'Si activer, toute les fonctions "Events" seront d�sactiver. IMPORTANT: Les "Events" sont n�cessaires pour la raidplaner!';

$lang['pk_set_noItemPrices'] = 'Cacher le Prix des Items';
$lang['pk_help_noItemPrices'] = 'Si activer, Le liens du prix des items seront d�sactiver et cacher.';

$lang['pk_set_noItemHistoy'] = 'Cacher l historique des items';
$lang['pk_help_noItemHistoy'] = 'Si activer, Les pages de liens d historique des items seront d�sactiver et bloquer.';

$lang['pk_set_noStats'] = 'Masquer les r�sum� et statistique.';
$lang['pk_help_noStats'] = 'Si activer, Le liens de pages de statisqtique et de resum� seront cacher et bloqu�.';

$lang['pk_set_cms_register_url'] = 'CMS/Forums enregistrement URL';
$lang['pk_help_cms_register_url'] = 'Le pont de l actif d enregistrement eqDKP lien avec impatience cette URL aux fins de l enregistrement';

$lang['pk_set_link_type_menu']			= 'Menu';
$lang['pk_set_link_type_menuH']		= 'Table des Menu';

$lang['page_manager'] = 'Manage pages';

//maintenance mode
$lang['pk_maintenance_mode'] = 'Activate maintenance mode.';
$lang['pk_help_maintenance'] = 'Activating the maintenance mode will cause all non admin users to be redirected to a maintenance page and allows the admin to do maintenance on the eqdkp plus system.';

?>
