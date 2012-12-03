<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * lang_admin.php
 * Began: Fri January 3 2003
 *
 * $Id: lang_admin.php 1775 2008-03-23 01:46:36Z osr-corgan $
 *
 ******************************/

if ( !defined('EQDKP_INC') )
{
     die('� ��� ���� ���� ��� ������ �������� ����������.');
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

// Titles
$lang['addadj_title']         = '��������/�������� ��������� ���������';
$lang['addevent_title']       = '��������/�������� �������';
$lang['addiadj_title']        = '��������/�������� �������������� ���������';
$lang['additem_title']        = '��������/�������� �������';
$lang['addmember_title']      = '����������/��������� ��������� �������';
$lang['addnews_title']        = '��������/�������� �������';
$lang['addraid_title']        = '��������/�������� ����';
$lang['addturnin_title']      = "�������� ��������� - ��� %1\$d";
$lang['admin_index_title']    = '����������������� EQDKP';
$lang['config_title']         = '���������� EQdkp';
$lang['manage_members_title'] = '���������� ����������� �������';
$lang['manage_users_title']   = '���������� �������������� � ������� �������';
$lang['parselog_title']       = '�������������� ������ ��� �����';
$lang['plugins_title']        = '���������� ���������';
$lang['styles_title']         = '���������� �������';
$lang['viewlogs_title']       = '�������� ����';

// Page Foot Counts
$lang['listusers_footcount']             = "... ������� %1\$d ������������ (��) / %2\$d �� ������ ��������";
$lang['manage_members_footcount']        = "... ������� %1\$d �������� (��)";
$lang['online_footcount']                = "... %1\$d ���������� � online";
$lang['viewlogs_footcount']              = "... ������� %1\$d ���� (��) / %2\$d �� ������ ��������";

// Submit Buttons
$lang['add_adjustment'] = '�������� ���������';
$lang['add_account'] = '�������� ������� ������';
$lang['add_event'] = '�������� �������';
$lang['add_item'] = '�������� �������';
$lang['add_member'] = '�������� ���������';
$lang['add_news'] = '�������� �������';
$lang['add_raid'] = '�������� ����';
$lang['add_style'] = '�������� �����';
$lang['add_turnin'] = '��������� �������� ���������';
$lang['delete_adjustment'] = '������� ���������';
$lang['delete_event'] = '������� �������';
$lang['delete_item'] = '������� �������';
$lang['delete_member'] = '������� ���������';
$lang['delete_news'] = '������� �������';
$lang['delete_raid'] = '������� ����';
$lang['delete_selected_members'] = '������� ���������� (��) ��������� (��)';
$lang['delete_style'] = '������� �����';
$lang['mass_delete'] = '�������� ��������';
$lang['mass_update'] = '����� �������';
$lang['parse_log'] = '�������������� ������ ����';
$lang['search_existing'] = '����� ����� �������������';
$lang['select'] = '�������';
$lang['transfer_history'] = '��������� ������ �������';
$lang['update_adjustment'] = '�������� ���������';
$lang['update_event'] = '�������� �������';
$lang['update_item'] = '�������� �������';
$lang['update_member'] = '�������� ���������';
$lang['update_news'] = '�������� �������';
$lang['update_raid'] = '�������� ����';
$lang['update_style'] = '�������� �����';

// Misc
$lang['account_enabled'] = '������� ������ �������������';
$lang['adjustment_value'] = '���������� ���������';
$lang['adjustment_value_note'] = '����� ���� �������������';
$lang['code'] = '���';
$lang['contact'] = '�������';
$lang['create'] = '�������';
$lang['found_members'] = "������ %1\$d �����, ������� d %2\$d �������������";
$lang['headline'] = '���������';
$lang['hide'] = '������?';
$lang['install'] = '����������';
$lang['item_search'] = '����� ��������';
$lang['list_prefix'] = '������ ���������';
$lang['list_suffix'] = '������ ���������';
$lang['logs'] = '����';
$lang['log_find_all'] = '����� ���(������� ��������� ����������)';
$lang['manage_members'] = '���������� �����������';
$lang['manage_plugins'] = '���������� ���������';
$lang['manage_users'] = '���������� ��������������';
$lang['mass_update_note'] = '����� ������� �� ��������� ��� ���� ����� �������������������� ������������� (���� �� ������ �� ��������) ������� "���������� ���� �������".
                             ����� ������� ��������� ��������� �������������, ������� "�������� ��������"';
$lang['members'] = '���������:';
$lang['member_rank'] = '���� ���������';
$lang['message_body'] = '����� ���������';
$lang['message_show_loot_raid'] = '�������� ������ �����(��):';
$lang['results'] = "%1\$d ���������� (\"%2\$s\")";
$lang['search'] = '�����';
$lang['search_members'] = '����� ����������';
$lang['should_be'] = '������ ����';
$lang['styles'] = '�����';
$lang['title'] = '���������';
$lang['uninstall'] = '�������';
$lang['enable']		= '��������';
$lang['update_date_to'] = "�������� ���� ��<br />%1\$s?";
$lang['version'] = '������';
$lang['x_members_s'] = "%1\$d ��������";
$lang['x_members_p'] = "%1\$d ����������";

// Permission Messages
$lang['noauth_a_event_add']    = '� ��� ��� ���� ��� ���������� �������';
$lang['noauth_a_event_upd']    = '� ��� ��� ���� ��� ���������� �������';
$lang['noauth_a_event_del']    = '� ��� ��� ���� ��� �������� �������';
$lang['noauth_a_groupadj_add'] = '� ��� ��� ���� ��� ���������� ��������� ���������';
$lang['noauth_a_groupadj_upd'] = '� ��� ��� ���� ��� ���������� ��������� ���������';
$lang['noauth_a_groupadj_del'] = '� ��� ��� ���� ��� �������� ��������� ���������';
$lang['noauth_a_indivadj_add'] = '� ��� ��� ���� ��� ���������� �������������� ���������';
$lang['noauth_a_indivadj_upd'] = '� ��� ��� ���� ��� ���������� �������������� ���������';
$lang['noauth_a_indivadj_del'] = '� ��� ��� ���� ��� �������� �������������� ���������';
$lang['noauth_a_item_add']     = '� ��� ��� ���� ��� ���������� ���������';
$lang['noauth_a_item_upd']     = '� ��� ��� ���� ��� ���������� ���������';
$lang['noauth_a_item_del']     = '� ��� ��� ���� ��� �������� ���������';
$lang['noauth_a_news_add']     = '� ��� ��� ���� ��� ���������� ��������';
$lang['noauth_a_news_upd']     = '� ��� ��� ���� ��� ���������� ��������';
$lang['noauth_a_news_del']     = '� ��� ��� ���� ��� �������� ��������';
$lang['noauth_a_raid_add']     = '� ��� ��� ���� ��� ���������� ������';
$lang['noauth_a_raid_upd']     = '� ��� ��� ���� ��� ���������� ������';
$lang['noauth_a_raid_del']     = '� ��� ��� ���� ��� �������� ������';
$lang['noauth_a_turnin_add']   = '� ��� ��� ���� ��� ���������� �������';
$lang['noauth_a_config_man']   = '� ��� ��� ���� ��� ���������� ����������� EQdkp';
$lang['noauth_a_members_man']  = '� ��� ��� ���� ��� ���������� ����������� �������';
$lang['noauth_a_plugins_man']  = '� ��� ��� ���� ��� ���������� ��������� EQdkp';
$lang['noauth_a_styles_man']   = '� ��� ��� ���� ��� ���������� ������� EQdkp';
$lang['noauth_a_users_man']    = '� ��� ��� ���� ��� ���������� ����������� ������� ������ ������������';
$lang['noauth_a_logs_view']    = '� ��� ��� ���� ��� ��������� ����� EQdkp';

// Submission Success Messages
$lang['admin_add_adj_success']               = "��������� %1\$s ���� ������� � %2\$.2f ���� ������ �������";
$lang['admin_add_admin_success']             = "�� ����� ����������� ����� %1\$s ���� ���������� ������ � ���������������� �����������";
$lang['admin_add_event_success']             = "�������� ���������� � %1\$s ��� �����, ������������ �� %2\$s, ���� ��������� � ���� ������ �������";
$lang['admin_add_iadj_success']              = "�������������� %1\$s ��������� ��������� %2\$.2f ��� %3\$s ���� ��������� � ���� ������ �������";
$lang['admin_add_item_success']              = "�������� �������� ��� %1\$s, ���������� %2\$s �� %3\$.2f ���� ��������� � ���� ������ �������";
$lang['admin_add_member_success']            = "%1\$s ��� �������� ��� �������� �������";
$lang['admin_add_news_success']              = '������� ���� ��������� � ���� ������ �������';
$lang['admin_add_raid_success']              = "���� %1\$d/%2\$d/%3\$d ����������� �� ������� %4\$s ��� �������� � ���� ������ �������";
$lang['admin_add_style_success']             = '����� ����� ��� ������� ��������';
$lang['admin_add_turnin_success']            = "������� '%1\$s' ��� ������� �� ��������� %2\$s � ��������� %3\$s.";
$lang['admin_delete_adj_success']            = "��������� %1\$s ��� %2\$.2f ���� ������� �� ���� ������ �������";
$lang['admin_delete_admins_success']         = "��������� �������������� ���� �������";
$lang['admin_delete_event_success']          = "��������� �������� %1\$s ��� �����, ������������ �� ������� %2\$s , ���� ������� �� ���� ������ �������";
$lang['admin_delete_iadj_success']           = "�������������� %1\$s ��������� �������� %2\$.2f ��� %3\$s ���� ������� �� ���� ������ �������";
$lang['admin_delete_item_success']           = "�������� �������� ��� %1\$s, ���������� %2\$s �� %3\$.2f ���� ������� �� ���� ������ �������";
$lang['admin_delete_members_success']        = "%1\$s, ������� ��� ������� ������������, ���(�) ������(�) �� ���� ������ �������";
$lang['admin_delete_news_success']           = '������� ���� ������� �� ���� ������ �������';
$lang['admin_delete_raid_success']           = '����, ������� ��� ��������, ��������� � ���, ��� ������ �� ���� ������ �������';
$lang['admin_delete_style_success']          = '����� ������ �������';
$lang['admin_delete_user_success']           = "������� ������ � ������ ������������ %1\$s ���� �������";
$lang['admin_set_perms_success']             = "��� ���������������� ���������� ���� ���������";
$lang['admin_transfer_history_success']      = "��� ������������ %1\$s ��� ������� ���� ���������� � %2\$s � ������������ %1\$s ��� ������ �� ���� ������ �������";
$lang['admin_update_account_success']        = "���� ��������� ������� ������ ���� ��������� � ���� ������";
$lang['admin_update_adj_success']            = "��������� %1\$s ��� %2\$.2f ���� ��������� � ���� ������ �������";
$lang['admin_update_event_success']          = "������� %2\$s �� ��������� � %1\$s ���� ��������� � ���� ������ �������";
$lang['admin_update_iadj_success']           = "�������������� %1\$s ��������� �������� %2\$.2f ��� %3\$s ���� ��������� � ���� ������ �������";
$lang['admin_update_item_success']           = "�������� �������� ��� %1\$s, ���������� %2\$s �� %3\$.2f ���� ��������� � ���� ������ �������";
$lang['admin_update_member_success']         = "�������� %1\$s ���(�) ��������(�)";
$lang['admin_update_news_success']           = '������� ���� ��������� � ���� ������ �������';
$lang['admin_update_raid_success']           = "���� %1\$d/%2\$d/%3\$d ����������� �� ������� %4\$s ��� �������� � ���� ������ �������";
$lang['admin_update_style_success']          = '����� ��� ������� ��������';

$lang['admin_raid_success_hideinactive']     = '���������� ������� ����������/������������ �������������';

// Delete Confirmation Texts
$lang['confirm_delete_adj']     = '�� �������, ��� ������ ������� ��� ��������� ���������?';
$lang['confirm_delete_admins']  = '�� �������, ��� ������ ������� ���������� ��������������?';
$lang['confirm_delete_event']   = '�� �������, ��� ������ ������� ��� �������?';
$lang['confirm_delete_iadj']    = '�� �������, ��� ������ ������� ��� �������������� ���������?';
$lang['confirm_delete_item']    = '�� �������, ��� ������ ������� ���� �������?';
$lang['confirm_delete_members'] = '�� �������, ��� ������ ������� ���������� ���������?';
$lang['confirm_delete_news']    = '�� �������, ��� ������ ������� ��������� �������?';
$lang['confirm_delete_raid']    = '�� �������, ��� ������ ������� ���� ����?';
$lang['confirm_delete_style']   = '�� �������, ��� ������ ������� ���� �����?';
$lang['confirm_delete_users']   = '�� �������, ��� ������ ������� ��������� ������� ������ ������������?';

// Log Actions
$lang['action_event_added']      = '������� ���������';
$lang['action_event_deleted']    = '������� �������';
$lang['action_event_updated']    = '������� ���������';
$lang['action_groupadj_added']   = '��������� ��������� ���������';
$lang['action_groupadj_deleted'] = '��������� ��������� �������';
$lang['action_groupadj_updated'] = '��������� ��������� ���������';
$lang['action_history_transfer'] = '������ �������� ������� ������������';
$lang['action_indivadj_added']   = '�������������� ��������� ���������';
$lang['action_indivadj_deleted'] = '�������������� ��������� �������';
$lang['action_indivadj_updated'] = '�������������� ��������� ���������';
$lang['action_item_added']       = '������� ��������';
$lang['action_item_deleted']     = '������� ������';
$lang['action_item_updated']     = '������� ��������';
$lang['action_member_added']     = '�������� ��������';
$lang['action_member_deleted']   = '�������� ������';
$lang['action_member_updated']   = '�������� ��������';
$lang['action_news_added']       = '������� ���������';
$lang['action_news_deleted']     = '������� �������';
$lang['action_news_updated']     = '������� ���������';
$lang['action_raid_added']       = '���� ��������';
$lang['action_raid_deleted']     = '���� ������';
$lang['action_raid_updated']     = '���� ��������';
$lang['action_turnin_added']     = '��������� �������� ��������';

// Before/After
$lang['adjustment_after']  = '��������� �����';
$lang['adjustment_before'] = '��������� ��';
$lang['attendees_after']   = '�������� �����';
$lang['attendees_before']  = '�������� ��';
$lang['buyers_after']      = '���������� �����';
$lang['buyers_before']     = '���������� ��';
$lang['class_after']       = '����� �����';
$lang['class_before']      = '����� ��';
$lang['earned_after']      = '���������� �����';
$lang['earned_before']     = '���������� ��';
$lang['event_after']       = '������� �����';
$lang['event_before']      = '������� ��';
$lang['headline_after']    = '��������� �����';
$lang['headline_before']   = '��������� ��';
$lang['level_after']       = '������� �����';
$lang['level_before']      = '������� ��';
$lang['members_after']     = '��������� �����';
$lang['members_before']    = '��������� ��';
$lang['message_after']     = '��������� �����';
$lang['message_before']    = '��������� ��';
$lang['name_after']        = '��� �����';
$lang['name_before']       = '��� ��';
$lang['note_after']        = '���������� �����';
$lang['note_before']       = '���������� ��';
$lang['race_after']        = '���� �����';
$lang['race_before']       = '���� ��';
$lang['raid_id_after']     = '�������� ID �����';
$lang['raid_id_before']    = '�������� ID ��';
$lang['reason_after']      = '������� �����';
$lang['reason_before']     = '������� ��';
$lang['spent_after']       = '��������� �����';
$lang['spent_before']      = '��������� ��';
$lang['value_after']       = '��������� �����';
$lang['value_before']      = '��������� ��';

// Configuration
$lang['general_settings'] = '����� ���������';
$lang['guildtag'] = '�������� �������';
$lang['guildtag_note'] = '������������ � ��������� ����������� �������';
$lang['parsetags'] = '�������� ������� ��� ������� �����';
$lang['parsetags_note'] = '��������� � ������ �������� ����� �������������� ��� ������� ����� ������';
$lang['domain_name'] = '�������� ������';
$lang['server_port'] = '���� �������';
$lang['server_port_note'] = '���� ������ ���-�������. ������ ��� 80';
$lang['script_path'] = '���� � �������';
$lang['script_path_note'] = '���� � ������������ EQdkp, ������������ ����� ������';
$lang['site_name'] = '�������� �����';
$lang['site_description'] = '�������� �����';
$lang['point_name'] = '�������� �������';
$lang['point_name_note'] = '������: DKP, RP, ��� � �.�.';
$lang['enable_account_activation'] = '�������� ��������� ������� �������';
$lang['none'] = '���';
$lang['admin'] = '�������������';
$lang['default_language'] = '���� �� ���������';
$lang['default_locale'] = '������ �� ���������';
$lang['default_game'] = '���� �� ���������';
$lang['default_game_warn'] = '��������� �������� ��������� ����� �������� ��������� ��������� � ������� ������';
$lang['default_style'] = '����� �� ���������';
$lang['default_page'] = '��������� �������� �� ���������';
$lang['hide_inactive'] = '������ ���������� ����������';
$lang['hide_inactive_note'] = '������ ����������, �� ������������� � ������ �������������� ������ ����?';
$lang['inactive_period'] = '������ ������������';
$lang['inactive_period_note'] = '���������� ����, � ������� ������� �������� �� ������� ����� ����� ���, ��� ���� ����������';
$lang['inactive_point_adj'] = 'DKP ����������';
$lang['inactive_point_adj_note'] = '�������� DKP ��� ���������� ����������';
$lang['active_point_adj'] = 'DKP ��������';
$lang['active_point_adj_note'] = '�������� DKP ��� �������� ����������';
$lang['enable_gzip'] = '�������� ������ Gzip';
$lang['show_item_stats'] = '�������� �������������� ���������';
$lang['show_item_stats_note'] = '�������� ����� �������������� ��������� � ���������. ����� ������ �� �������� �������� ��������� �������';
$lang['default_permissions'] = '����� �� ���������';
$lang['default_permissions_note'] = '����� ������� �� ��������� ��� ���� ����� ������������������ ������������� . ������, ���������� <b>������ �������</b>, �������� ������� �����������������,
                                     ������������ ������������� �� ���������� ������ ����� �� ���������. ������, ���������� <i>��������</i>, ������������ ������ ��� ��������. � ���������� �� ������ ���������� ����� ����������� ��� ������� ������������';
$lang['plugins'] = '�������';
$lang['no_plugins'] = '����� � ��������� (./plugins/) �����';
$lang['cookie_settings'] = '��������� Cookie';
$lang['cookie_domain'] = '����� Cookie';
$lang['cookie_name'] = '�������� Cookie';
$lang['cookie_path'] = '���� Cookie';
$lang['session_length'] = '����������������� ������ (� ��������)';
$lang['email_settings'] = '��������� E-Mail';
$lang['admin_email'] = '����� E-Mail ��������������';
$lang['backup_options'] = '����� ��������� �����';

// Admin Index
$lang['anonymous'] = '������';
$lang['database_size'] = '������ ���� ������';
$lang['eqdkp_started'] = '���� ������� EQdkp';
$lang['ip_address'] = 'IP-�����';
$lang['items_per_day'] = '��������� � ����';
$lang['last_update'] = '��������� ����������';
$lang['location'] = '���������������';
$lang['new_version_notice'] = "������ EQdkp %1\$s <a href=\"http://sourceforge.net/project/showfiles.php?group_id=69529\" target=\"_blank\">�������� ��� ����������</a>";
$lang['number_of_items'] = '���������� ���������';
$lang['number_of_logs'] = '���������� ������� � ����';
$lang['number_of_members'] = '���������� ���������� (�������� / ����������)';
$lang['number_of_raids'] = '���������� ������';
$lang['raids_per_day'] = '������ � ����';
$lang['statistics'] = '����������';
$lang['totals'] = '������';
$lang['version_update'] = '���������� ������';
$lang['who_online'] = '��� �������';

// Style Management
$lang['style_settings'] = '��������� �����';
$lang['style_name'] = '�������� �����';
$lang['template'] = '������';
$lang['element'] = '�������';
$lang['background_color'] = '���� ����';
$lang['fontface1'] = '��� ������ 1';
$lang['fontface1_note'] = '��� ������ �� ���������';
$lang['fontface2'] = '��� ������ 2';
$lang['fontface2_note'] = '��� ������ ��� ����� �����';
$lang['fontface3'] = '��� ������ 2';
$lang['fontface3_note'] = '� ������ ������ �� ������������';
$lang['fontsize1'] = '������ ������ 1';
$lang['fontsize1_note'] = '���������';
$lang['fontsize2'] = '������ ������ 2';
$lang['fontsize2_note'] = '�������';
$lang['fontsize3'] = '������ ������ 3';
$lang['fontsize3_note'] = '�������';
$lang['fontcolor1'] = '���� ������ 1';
$lang['fontcolor1_note'] = '���� �� ���������';
$lang['fontcolor2'] = '���� ������ 2';
$lang['fontcolor2_note'] = '����, ������������ �� ��������� ������� (����, ���������, ��������)';
$lang['fontcolor3'] = '���� ������ 2';
$lang['fontcolor3_note'] = '���� ������ ��� ����� �����';
$lang['fontcolor_neg'] = '������������� ���� ������';
$lang['fontcolor_neg_note'] = '���� ��� �������������/������ �����';
$lang['fontcolor_pos'] = '������������� ���� ������';
$lang['fontcolor_pos_note'] = '���� ��� �������������/������� �����';
$lang['body_link'] = 'Link ����';
$lang['body_link_style'] = 'Link �����';
$lang['body_hlink'] = 'Hover Link ����';
$lang['body_hlink_style'] = 'Hover Link �����';
$lang['header_link'] = '���� ������';
$lang['header_link_style'] = '����� ������';
$lang['header_hlink'] = '���� ������ ��� ���������';
$lang['header_hlink_style'] = '����� ������ ��� ���������';
$lang['tr_color1'] = '���� ���� ������� 1';
$lang['tr_color2'] = '���� ���� ������� 2';
$lang['th_color1'] = '���� ��������� �������';
$lang['table_border_width'] = '������ ����� �������';
$lang['table_border_color'] = '���� ����� �������';
$lang['table_border_style'] = '����� ����� �������';
$lang['input_color'] = '���� ���� ����� ��� �����';
$lang['input_border_width'] = '������ ����� ����� ��� �����';
$lang['input_border_color'] = '���� ����� ����� ��� �����';
$lang['input_border_style'] = '����� ����� ����� ��� �����';
$lang['style_configuration'] = '������������ ������';
$lang['style_date_note'] = '��� ����� ����/�������, ��������� ��������� ������������ � PHP <a href="http://www.php.net/manual/en/function.date.php" target="_blank">date()</a> �������';
$lang['attendees_columns'] = '������� ����������';
$lang['attendees_columns_note'] = '���������� �������� ������������ ��� ���������� ��� ��������� �����';
$lang['date_notime_long'] = '���� ��� ������� (�������)';
$lang['date_notime_short'] = '���� ��� ������� (��������)';
$lang['date_time'] = '���� �� ��������';
$lang['logo_path'] = '��� ����� ��������';

// Errors
$lang['error_invalid_adjustment'] = '���������� ��������� �� ���� �������������';
$lang['error_invalid_plugin']     = '���������� ������ �� ��� ������������';
$lang['error_invalid_style']      = '���������� ����� �� ��� ������������';

// Verbose log entry lines
$lang['new_actions']           = '��������� �������� �������������';
$lang['vlog_event_added']      = "%1\$s ������� ������� '%2\$s' ������� ��������� � %3\$.2f �����";
$lang['vlog_event_updated']    = "%1\$s ������� ������� '%2\$s'";
$lang['vlog_event_deleted']    = "%1\$s ������ ������� '%2\$s'";
$lang['vlog_groupadj_added']   = "%1\$s ������� ��������� ��������� � %2\$.2f �����";
$lang['vlog_groupadj_updated'] = "%1\$s ������� ��������� ��������� � %2\$.2f �����";
$lang['vlog_groupadj_deleted'] = "%1\$s ������ ��������� ��������� � %2\$.2f �����";
$lang['vlog_history_transfer'] = "%1\$s ������� ������� %2\$s � %3\$s.";
$lang['vlog_indivadj_added']   = "%1\$s ������� �������������� ��������� %2\$.2f ��� %3\$d ����������";
$lang['vlog_indivadj_updated'] = "%1\$s ������� �������������� ��������� %2\$.2f ��� %3\$s.";
$lang['vlog_indivadj_deleted'] = "%1\$s ������ �������������� ��������� %2\$.2f ��� %3\$s.";
$lang['vlog_item_added']       = "%1\$s ������� ������� '%2\$s' ���������� %3\$d ���������� �� %4\$.2f �����";
$lang['vlog_item_updated']     = "%1\$s ������� ������� '%2\$s' ���������� %3\$d ����������";
$lang['vlog_item_deleted']     = "%1\$s ������ ������� '%2\$s' ���������� %3\$d ����������";
$lang['vlog_member_added']     = "%1\$s ������� ��������� %2\$s.";
$lang['vlog_member_updated']   = "%1\$s ������� ��������� %2\$s.";
$lang['vlog_member_deleted']   = "%1\$s ������ ��������� %2\$s.";
$lang['vlog_news_added']       = "%1\$s ������� ������� '%2\$s'.";
$lang['vlog_news_updated']     = "%1\$s ������� ������� '%2\$s'.";
$lang['vlog_news_deleted']     = "%1\$s ������ ������� '%2\$s'.";
$lang['vlog_raid_added']       = "%1\$s ������� ���� �� '%2\$s'.";
$lang['vlog_raid_updated']     = "%1\$s ������� ���� �� '%2\$s'.";
$lang['vlog_raid_deleted']     = "%1\$s ������ ���� �� '%2\$s'.";
$lang['vlog_turnin_added']     = "%1\$s �������� �������� �������� '%4\$s' �� ��������� %2\$s � ��������� %3\$s";

// Location messages
$lang['adding_groupadj'] = '����������� ��������� ���������';
$lang['adding_indivadj'] = '����������� �������������� ���������';
$lang['adding_item'] = '����������� �������';
$lang['adding_news'] = '����������� �������';
$lang['adding_raid'] = '����������� ����';
$lang['adding_turnin'] = '���������� �������';
$lang['editing_groupadj'] = '������������� ��������� ���������';
$lang['editing_indivadj'] = '������������� �������������� ���������';
$lang['editing_item'] = '������������� �������';
$lang['editing_news'] = '������������� �������';
$lang['editing_raid'] = '������������� ����';
$lang['listing_events'] = '������ �������';
$lang['listing_groupadj'] = '������ ��������� ���������';
$lang['listing_indivadj'] = '������ �������������� ���������';
$lang['listing_itemhist'] = '������� ���������';
$lang['listing_itemvals'] = '��������� ���������';
$lang['listing_members'] = '������ ����������';
$lang['listing_raids'] = '������ ������';
$lang['managing_config'] = '���������� ������������� EQdkp';
$lang['managing_members'] = '���������� ����������� �������';
$lang['managing_plugins'] = '���������� ���������';
$lang['managing_styles'] = '���������� �������';
$lang['managing_users'] = '���������� �������� �������� �������������';
$lang['parsing_log'] = '�������������� ������ ����';
$lang['viewing_admin_index'] = '�������� ������� �����������';
$lang['viewing_event'] = '�������� �������';
$lang['viewing_item'] = '�������� ���������';
$lang['viewing_logs'] = '�������� �����';
$lang['viewing_member'] = '�������� ���������';
$lang['viewing_mysql_info'] = '�������� ���������� MySQL';
$lang['viewing_news'] = '�������� ��������';
$lang['viewing_raid'] = '�������� ������';
$lang['viewing_stats'] = '�������� ����������';
$lang['viewing_summary'] = '�������� ������';

// Help lines
$lang['b_help'] = '������ �����: [b]�����[/b] (alt+b)';
$lang['i_help'] = '����� ��������: [i]�����[/i] (alt+i)';
$lang['u_help'] = '������������ �����: [u]�����[/u] (alt+u)';
$lang['q_help'] = '����� ������: [quote]�����[/quote] (alt+q)';
$lang['c_help'] = '����� �� ������: [center]�����[/center] (alt+c)';
$lang['p_help'] = '�������� �����������: [img]http://url_�����������[/img] (alt+p)';
$lang['w_help'] = '�������� ������: [url]http://������[/url] ��� [url=http://������]����� ������[/url]  (alt+w)';
$lang['it_help'] = 'Insert Item: e.g. [item]Judgement Breastplate[/item] (shift+alt+t)';
$lang['ii_help'] = 'Insert ItemIcon: e.g. [itemicon]Judgement Breastplate[/itemicon] (shift+alt+o)';

// Manage Members Menu (yes, MMM)
$lang['add_member'] = '�������� ������ ���������';
$lang['list_edit_del_member'] = '������� ������, �������������, ������� ����������';
$lang['edit_ranks'] = '������������� �����';
$lang['transfer_history'] = '��������� ������� ������������';

// MySQL info
$lang['mysql'] = 'MySQL';
$lang['mysql_info'] = '���������� MySQL';
$lang['eqdkp_tables'] = '������� EQdkp';
$lang['table_name'] = '�������� �������';
$lang['rows'] = '������';
$lang['table_size'] = '������ �������';
$lang['index_size'] = '������ �������';
$lang['num_tables'] = "%d �������";

//Backup
$lang['backup'] = '��������� �����������';
$lang['backup_title'] = '�������� ��������� ����� ���� ������';
$lang['create_table'] = '�������� �������� \'CREATE TABLE\'?';
$lang['skip_nonessential'] = '������������ �������������� ����������?<br />�� ����� ��������� ����������� ����� ������� ������ eqdkp_sessions';
$lang['gzip_content'] = '������������ � GZIP?<br />���� ������� GZIP, ������� ������� �� ������ ����� �� � ������';
$lang['backup_database'] = '�������� ����� ���� ������';

// plus
$lang['in_database']  = '��������� � ���� ������';

//Log Users Actions
$lang['action_user_added']     = '������������ ��������';
$lang['action_user_deleted']   = '������������ ������';
$lang['action_user_updated']   = '������������ ��������';
$lang['vlog_user_added']     = "%1\$s ������� ������������ %2\$s.";
$lang['vlog_user_updated']   = "%1\$s ������� ������������ %2\$s.";
$lang['vlog_user_deleted']   = "%1\$s ������ ������������ %2\$s.";

//MultiDKP
$lang['action_multidkp_added']     = "MultiDKP Pool ��������";
$lang['action_multidkp_deleted']   = "MultiDKP Pool ������";
$lang['action_multidkp_updated']   = "MultiDKP Pool ��������";
$lang['action_multidkp_header']    = "MultiDKP";

$lang['vlog_multidkp_added']     = "%1\$s ������� MultiDKP Pool %2\$s";
$lang['vlog_multidkp_updated']   = "%1\$s ������� MultiDKP Pool %2\$s.";
$lang['vlog_multidkp_deleted']   = "%1\$s ������ MultiDKP Pool %2\$s.";

$lang['default_style_overwrite']   = "������ ����� ������������������ ������������ ���������� ����� �� ���������";

$lang['plugin_inst_sql_note'] = 'An SQL error during install does not necessary implies a broken plugin installation. Try using the plugin, if errors occur please de- and reinstall the plugin.';
//---- Main ----
$lang['pluskernel']          	= 'PLUS ������������';
$lang['pk_adminmenu']         	= 'PLUS ������������';
$lang['pk_settings']						= '���������';
$lang['pk_date_settings']			= '����.�����.���';

//---- Javascript stuff ----
$lang['pk_plus_about']					= '� EQDKP PLUS';
$lang['updates']								= '�������� ����������';
$lang['loading']								= '��������...';
$lang['pk_config_header']			= 'EQDKP PLUS ���������';
$lang['pk_close_jswin1']      	= '��������';
$lang['pk_close_jswin2']     	= '������ ���� ����� ��������� �����!';
$lang['pk_help_header']				= '������';

//---- Updater Stuff ----
$lang['pk_alt_attention']			= 'Attention';
$lang['pk_alt_ok']							= 'Everything OK!';
$lang['pk_updates_avail']			= '�������� ����������';
$lang['pk_updates_navail']			= '��� ��������� ����������';
$lang['pk_no_updates']					= '���� ������ �������� ����� �����. ����������� ����� ��������� ������.';
$lang['pk_act_version']				= '����� ������';
$lang['pk_inst_version']				= '�����������';
$lang['pk_changelog']					= 'Changelog';
$lang['pk_download']						= '�������';
$lang['pk_upd_information']		= '����������';
$lang['pk_enabled']						= '������������';
$lang['pk_disabled']						= '��������������';
$lang['pk_auto_updates1']			= 'The automatic update warning is';
$lang['pk_auto_updates2']			= 'If you disabled this setting, please recheck regulary for updates to prevent hacks and stay up to date..';
$lang['pk_module_name']				= '��� ������';
$lang['pk_plugin_level']				= '�������';
$lang['pk_release_date']				= 'Release';
$lang['pk_alt_error']					= '������';
$lang['pk_no_conn_header']			= '������ ����������';
$lang['pk_no_server_conn']			= '��������� ������ ��� ������� ���������� � �������� ����������, ��� ���� �� ��������� ���������� �����������
 ��� ������ ���� ������� ��������� � ���������� ����. ����������, ��������  eqdkp-plugin-forum , ����� ���������, ��� � ��� ��������� ������.';


$lang['pk_reset_warning']			= 'Reset Warning';

//---- Update Levels ----
$lang['pk_level_other']				= '������';
$updatelevel = array (
	'Bugfix'										=> 'Bugfix',
	'Feature Release'						=> '������� Release',
	'Security Update'						=> '���������� ������������',
	'New version'								=> '����� ������',
	'Release Candidate'					=> 'Release ��������',
	'Public Beta'								=> '��������� Beta',
	'Closed Beta'								=> '�������� Beta',
	'Alpha'											=> 'Alpha',
);

//---- About ----
$lang['pk_version']						= '������';
$lang['pk_prodcutname']				= '�������';
$lang['pk_modification']				= '���';
$lang['pk_tname']							= '������';
$lang['pk_developer']					= '�����������';
$lang['pk_plugin']							= '������';
$lang['pk_weblink']						= '���-������';
$lang['pk_phpstring']					= 'PHP ������';
$lang['pk_phpvalue']						= '��������';
$lang['pk_donation']						= '�������������';
$lang['pk_job']								= '������';
$lang['pk_sitename']						= '����';
$lang['pk_dona_name']					= '���';
$lang['pk_betateam1']					= '������� ����-�������� (��������)';
$lang['pk_betateam2']					= '��������������� �������';
$lang['pk_created by']					= '�������';
$lang['web_url']								= '���-��������';
$lang['personal_url']					= '�������';
$lang['pk_credits']						= '������������';
$lang['pk_sponsors']						= '��������';
$lang['pk_plugins']						= '�������';
$lang['pk_modifications']			= '����';
$lang['pk_themes']							= '�����';
$lang['pk_additions']					= '���������� ����';
$lang['pk_tab_stuff']					= 'EQDKP �������';
$lang['pk_tab_help']						= '������';
$lang['pk_tab_tech']						= '����������';

//---- Settings ----
$lang['pk_save']								= '���������';
$lang['pk_save_title']					= '';
$lang['pk_succ_saved']					= '��������� ���� ������� ���������';
 // Tabs
$lang['pk_tab_global']					= '���������';
$lang['pk_tab_multidkp']				= 'multiDKP';
$lang['pk_tab_links']					= '������';
$lang['pk_tab_bosscount']			= 'BossCounter';
$lang['pk_tab_listmemb']				= '������ ����������';
$lang['pk_tab_itemstats']			= '���������� ���������';
// Global
$lang['pk_set_QuickDKP']				= '�������� �������� DKP';
$lang['pk_set_Bossloot']				= '�������� ������ � ������ ?';
$lang['pk_set_ClassColor']			= 'Colored ClassClassnames';
$lang['pk_set_Updatecheck']		= '�������� ����-����������';
$lang['pk_window_time1']				= '����� ������� ����';
$lang['pk_window_time2']				= '������';
// MultiDKP
$lang['pk_set_multidkp']				= '�������� MultiDKP';
// Listmembers
$lang['pk_set_leaderboard']		= '���������� Leaderboard';
$lang['pk_set_lb_solo']				= '���������� Leaderboard per account';
$lang['pk_set_rank']						= '���������� ����';
$lang['pk_set_rank_icon']			= '���������� ������ �����';
$lang['pk_set_level']					= '���������� �������';
$lang['pk_set_lastloot']				= '���������� ��������� ������';
$lang['pk_set_lastraid']				= '���������� ��������� ����';
$lang['pk_set_attendance30']		= '���������� ���� Attendance 30 ����';
$lang['pk_set_attendance60']		= '���������� ���� Attendance 60 ����';
$lang['pk_set_attendance90']		= '���������� ���� Attendance 90 ����';
$lang['pk_set_attendanceAll']	= '���������� ���� Attendance Lifetime';
// Links
$lang['pk_set_links']					= '������������ Links';
$lang['pk_set_linkurl']				= 'Link URL';
$lang['pk_set_linkname']				= 'Link ��������';
$lang['pk_set_newwindow']			= '��������� � ����� ����?';
// BossCounter
$lang['pk_set_bosscounter']		= '�������� Bosscounter';
//Itemstats
$lang['pk_set_itemstats']			= '�������� ���������� ���������';
$lang['pk_is_language']				= '���� ���������� ���������';
$lang['pk_german']							=	'��������';
$lang['pk_english']						= '����������';
$lang['pk_french']							= '�����������';
$lang['pk_set_icon_ext']				= '';
$lang['pk_set_icon_loc']				= '';
$lang['pk_set_en_de']					= '������� ��������� � ����������� �� ��������';
$lang['pk_set_de_en']					= '������� ��������� � ��������� �� ����������';

################
# new sort
###############

//MultiDKP
//

$lang['pk_set_multi_Tooltip']						= '���������� DKP �����';
$lang['pk_set_multi_smartTooltip']			  = '�������� �����';

//Help
$lang['pk_help_colorclassnames']				  = "If activated, the players will be shown with the WoW colors of their class and their class icon.";
$lang['pk_help_quickdkp']								= "Shows the logged-in user the points off all members that are assigned to him above the menu.";
$lang['pk_help_boosloot']								= "���� ������������, you can click the boss names in the ���� notes and the bosscounter to have a detailed overview of the dropped items. If inactive, it will be linked to Blasc.de (Only activate if you enter a ���� for each single boss)";
$lang['pk_help_autowarning']             = "Warns the administrator when he logs in, if updates are available.";
$lang['pk_help_warningtime']             = "How often should the warning appear?";
$lang['pk_help_multidkp']								= "MultiDKP allows the management and overview of seperate accounts. Activates the management and overview of the MultiDKP accounts.";
$lang['pk_help_dkptooltip']							= "If activated, a tooltip with detailed information about the calculation of the points will be shown, when the mouse hovers over the different points.";
$lang['pk_help_smarttooltip']						= "Shortened overview of the tooltips (activate if you got more than three events per account)";
$lang['pk_help_links']                   = "In this menu you are able to define different links, which will be displayed in the main menu.";
$lang['pk_help_bosscounter']             = "If activated, a table will be displayed below the main menu with the bosskills. The administration is being managed by the plugin Bossprogress";
$lang['pk_help_lm_leaderboard']					= "If activated, a leaderboard will be displayed above the scoretable. A leaderboard is a table, where the dkp of each class is displayed sorted in decending order.";
$lang['pk_help_lm_rank']                 = "An extra column is being displayed, which displays the rank of the member.";
$lang['pk_help_lm_rankicon']             = "Instead of the rank name, an icon is being displayed. Which items are available you can check in the folder \images\rank";
$lang['pk_help_lm_level']								= "An additional column is being displayed, which displays the level of the member. ";
$lang['pk_help_lm_lastloot']             = "An extra colums is being displayed, showing the date a member received his latest item.";
$lang['pk_help_lm_lastraid']             = "An extra column is being displayed, showing the date of the latest ���� a member has been participated in.";
$lang['pk_help_lm_atten30']							= "An extra column is being displayed, showing a members participation in ���� during the last 30 days (in percent).";
$lang['pk_help_lm_atten60']							= "An extra column is being displayed, showing a members participation in ���� during the last 60 days (in percent). ";
$lang['pk_help_lm_atten90']							= "An extra column is being displayed, showing a members participation in ���� during the last 90 days (in percent). ";
$lang['pk_help_lm_attenall']             = "An extra column is being displayed, showing a members overall ���� participation (in percent).";
$lang['pk_help_itemstats_on']						= "Itemstats is requesting information about items entered in EQDKP in the WOW databases (Blasc, Allahkazm, Thottbot). These will be displayed in the color of the items quality including the known WOW tooltip. When active, items will be shown with a mouseover tooltip, similar to WOW.";
$lang['pk_help_itemstats_search']				= "Which database should Itemstats use first to lookup information? Blasc or Allakhazam?";
$lang['pk_help_itemstats_icon_ext']			= "Filename extension of the pictures to be shown. Usually .png or .jpg.";
$lang['pk_help_itemstats_icon_url']      = "Please enter the URL where you Itemstats pictures are being located. German: http://www.buffed.de/images/wow/32/ in 32x32 or http://www.buffed.de/images/wow/64/ in 64x64 pixels.English at Allakzam: http://www.buffed.de/images/wow/32/";
$lang['pk_help_itemstats_translate_deeng']		= "If active, information of the tooltips will be requested in german, even when the item is being entered in english.";
$lang['pk_help_itemstats_translate_engde']		= "If active, information of the tooltips will be requested in English, even if the item is being entered in german.";

$lang['pk_set_leaderboard_2row']					= 'Leaderboard in 2 lines';
$lang['pk_help_leaderboard_2row']        = 'If active, the Leaderboard will be displayed in two lines with 4 or 5 classes each.';

$lang['pk_set_leaderboard_limit']        = 'limitation of the display';
$lang['pk_help_leaderboard_limit']				= 'If a numeric number is being entered, the Leaderboard will be restricted to the entered number of members. The number 0 represents no restrictions.';

$lang['pk_set_leaderboard_zero']         = 'Hide Player with zeor DKP';
$lang['pk_help_leaderboard_zero']        = 'If activated, Players with zero DKp doesnt show in the leaderboard.';


$lang['pk_set_newsloot_limit']						= 'newsloot limit';
$lang['pk_help_newsloot_limit']          = 'How many items should be displayed in the news? This restricts the display of items, which will be displeyed in the news. The number 0 represents no restrictions.';

$lang['pk_set_itemstats_debug']          = 'debug Modus';
$lang['pk_help_itemstats_debug']					= 'If activated, Itemstats will log all transactions to /itemstats/includes_de/debug.txt. This file has to be writable, CHMOD 777 !!!';

$lang['pk_set_showclasscolumn']          = 'show classes column';
$lang['pk_help_showclasscolumn']					= 'If activated, an extra column is being displayed showing the class of the player.' ;

$lang['pk_set_show_skill']								= 'show skill column';
$lang['pk_help_show_skill']              = 'If activated, an extra column is being displayed showing the skill of the player.';

$lang['pk_set_show_arkan_resi']          = 'show arcan resistance column';
$lang['pk_help_show_arkan_resi']					= 'If activated, an extra column is being displayed showing the arcane resistance of the player.';

$lang['pk_set_show_fire_resi']						= 'show fire resistance column';
$lang['pk_help_show_fire_resi']          = 'If activated, an extra column is being displayed showing the fire resistance of the player.';

$lang['pk_set_show_nature_resi']					= 'show nature resistance column';
$lang['pk_help_show_nature_resi']        = 'If activated, an extra column is being displayed showing the nature resistance of the player.';

$lang['pk_set_show_ice_resi']            = 'show ice resistance column';
$lang['pk_help_show_ice_resi']						= 'If activated, an extra column is being displayed showing the frost resistance of the player.';

$lang['pk_set_show_shadow_resi']					= 'show shadow resistance column';
$lang['pk_help_show_shadow_resi']        = 'If activated, an extra column is being displayed showing the shadow resistance of the player.';

$lang['pk_set_show_profils']							= 'show profile link column';
$lang['pk_help_show_profils']            = 'If activated, an extra column is being displayed showing the links to the profile.';

$lang['pk_set_servername']               = '�������� �������';
$lang['pk_help_servername']              = '������� ���� �������� ������� �����.';

$lang['pk_set_server_region']			  = '������';
$lang['pk_help_server_region']			  = '������������ ��� ����������� ������.';


$lang['pk_help_default_multi']           = 'Choose the default DKP Acc for the leaderboard.';
$lang['pk_set_default_multi']            = '���������� default for leaderboard';

$lang['pk_set_round_activate']           = '����� DKP.';
$lang['pk_help_round_activate']          = 'If activated, DKP Point displayed rounded. 125.00 = 125DKP.';

$lang['pk_set_round_precision']          = 'Decimal place to round.';
$lang['pk_help_round_precision']         = 'Set the Decimal place to round the DKP Defualt=0';

$lang['pk_is_set_prio']                  = 'Priority of Itemdatabase';
$lang['pk_is_help_prio']                 = 'Set the query order of item databases.';

$lang['pk_is_set_alla_lang']	            = 'Language of Itemnames on Allakhazam.';
$lang['pk_is_help_alla_lang']	          = 'Which language should the requested items be?';

$lang['pk_is_set_lang']		              = 'Standard language of Item ID\'s.';
$lang['pk_is_help_lang']		              = 'Standard language of Item IDs. Example : [item]17182[/item] will choose this language';

$lang['pk_is_set_autosearch']            = 'Immediate Search';
$lang['pk_is_help_autosearch']           = 'Activated: If the item is not in the cache, search for the item information automatically. Not activated: Item information is only fetch on click on the item information.';

$lang['pk_is_set_integration_mode']      = 'Integration Modus';
$lang['pk_is_help_integration_mode']     = 'Normal: scanning text and setting tooltip in html code. Script: scanning text and set <script> tags.';

$lang['pk_is_set_tooltip_js']            = 'Look of Tooltips';
$lang['pk_is_help_tooltip_js']           = 'Overlib: The normal Tooltip. Light: Light version, faster loading times.';

$lang['pk_is_set_patch_cache']           = 'Cache Path';
$lang['pk_is_help_patch_cache']          = 'Path to the user item cache, starting from /itemstats/. Default=./xml_cache/';

$lang['pk_is_set_patch_sockets']         = 'Path of Socketpictures';
$lang['pk_is_help_patch_sockets']        = 'Path to the picture files of the socket items.';

$lang['pk_set_dkp_info']			  = '�� ���������� DKP ���������� � ������� ����.';
$lang['pk_help_dkp_info']			  = 'If activated "DKP Info" will be hidden from the main menu.';

$lang['pk_set_debug']			= '�������� Eqdkp Debug Modus';
$lang['pk_set_debug_type']		= '���';
$lang['pk_set_debug_type0']	= 'Debug off (Debug=0)';
$lang['pk_set_debug_type1']	= 'Debug on simple (Debug=1)';
$lang['pk_set_debug_type2']	= 'Debug on with SQL Queries (Debug=2)';
$lang['pk_set_debug_type3']	= 'Debug on extended (Debug=3)';
$lang['pk_help_debug']			= '���� ������������, Eqdkp Plus will be running in debug mode, showing additional informations and error messages. Deaktivate if plugins abort with SQL error messages! 1=Rendering time, Query count, 2=SQL outputs, 3=Enhanced error messages.';

#RSS News
$lang['pk_set_Show_rss']			= '�������������� RSS �������';
$lang['pk_help_Show_rss']			= 'If activated, Eqdkp Plus will be show Game RSS News.';

$lang['pk_set_Show_rss_style']		= 'game-news positioning';
$lang['pk_help_Show_rss_style']	= 'RSS-Game News positioning. Top horizontal, in the menu vertical or both?';

$lang['pk_set_Show_rss_lang']		= 'RSS-������� ���� �� ���������';
$lang['pk_help_Show_rss_lang']		= 'Get the RSS-News in wich language? (atm only german). English news available beginning 2008.';

$lang['pk_set_Show_rss_lang_de']	= '��������';
$lang['pk_set_Show_rss_lang_eng']	= '����������';


$lang['pk_set_Show_rss_style_both'] = '���' ;
$lang['pk_set_Show_rss_style_v']	 = '������������ ����' ;
$lang['pk_set_Show_rss_style_h']	 = '�� �����������' ;

$lang['pk_set_Show_rss_count']		= '������� ��� (0 or "" for all)';
$lang['pk_help_Show_rss_count']	= 'Wieviele News sollen angezeigt werden?';

$lang['pk_set_itemhistory_dia']	= 'Dont show diagrams'; # Ja negierte Abfrage
$lang['pk_help_itemhistory_dia']	= 'If activated, Eqdkp Plus show sseveral diagramm.';


#Bridge
$lang['pk_set_bridge_help']				= 'On This Tab you can tune up the settings to let an Content Management System (CMS) interact with Eqdkp Plus.
											   If you choose one of the Systems in the Drop Down Field , Registered Members of your Forum/CMS will be able to log in into Eqdkp Plus with the same credentials used in Forum/CMS.
											   The Access is only allowed for one Group, that Means that you must create a new group in your CMS/Forum which all Members belong who will be accessing Eqdkp.';

$lang['pk_set_bridge_activate']			= '������������ ���������� � CMS';
$lang['pk_help_bridge_activate']			= 'When bridging is activated, Users of the Forum or CMS will be able to Log On in Eqdkp Plus with the same credentials as used in CMS/Forum';

$lang['pk_set_bridge_dectivate_eq_reg']	= '�������������� ����������� � Eqdkp Plus';
$lang['pk_help_bridge_dectivate_eq_reg']	= '����� �������������� ����� ��������� �� ����� ���������������� � Eqdkp Plus. ����������� ����� ������������� ������ ���� ������� � CMS/�����';

$lang['pk_set_bridge_cms']					= '��������� CMS';
$lang['pk_help_bridge_cms']				= 'Which CMS shall be bridged ';

$lang['pk_set_bridge_acess']				= 'Is the CMS/Forum on another Database than Eqdkp ?';
$lang['pk_help_bridge_acess']				= '���� �� ����������� CMS/Forum on another Database activate this and fill the Fields below';

$lang['pk_set_bridge_host']				= '����';
$lang['pk_help_bridge_host']				= '�������� ����� ��� IP-������ �� ������� ����������� ���� ������';

$lang['pk_set_bridge_username']			= '��� ������������ ���� ������';
$lang['pk_help_bridge_username']			= '��� ������������, ������������ ��� ����������� � ���� ������';

$lang['pk_set_bridge_password']			= '������ ���� ������';
$lang['pk_help_bridge_password']			= '������ ������������ ��� ����������';

$lang['pk_set_bridge_database']			= '�������� ���� ������';
$lang['pk_help_bridge_database']			= '�������� ���� ������, ��� CMS ������ ���������';

$lang['pk_set_bridge_prefix']				= 'Tableprefix of your CMS Installation';
$lang['pk_help_bridge_prefix']				= 'Give your Prefix of your CMS . e.g.. phpbb_ or wcf1_';

$lang['pk_set_bridge_group']				= 'ID ������ ��� CMS ������';
$lang['pk_help_bridge_group']				= '������� ����� ID ��� ������ � CMS, ������� ������������� ������ � Eqdkp.';


$lang['pk_set_bridge_inline']				= '���������� ������ ������ � EQDKP - �������� BETA !';
$lang['pk_help_bridge_inline']				= '���� �� ������� ����� URL, ����� �������������� ������ ����� ����� � ����, ������� ����� ��������� �� ��������� �������� � �������� Eqdkp. ��� ���������� � ���������� Iframe. Das EQDKP Plus ist aber nicht verantworltich f�r das Aussehen bzw. das Verhalten der eingebundenen Seite innerhalb eines Iframs!';

$lang['pk_set_bridge_inline_url']			= 'URL �� ��� �����';
$lang['pk_help_bridge_inline_url']			= 'URL �� ��� �����, � �������� ������������� EQDKP';

$lang['pk_set_link_type_header']			= '��� �������� ������ �����������';
$lang['pk_set_link_type_help']				= 'Link im selben Browserfenster, in einem neuen Brwoserfenster oder innerhalb des Eqdkps in einem Iframe �ffnen?';
$lang['pk_set_link_type_iframe_help']		= '��������� �������� ����� �������� � �������� Eqdkp. ��� ���������� � ���������� Iframe. Das EQDKP Plus ist aber nicht verantworltich f�r das Aussehen bzw. das Verhalten der eingebundenen Seite innerhalb eines Iframs!';
$lang['pk_set_link_type_self']				= '�����';
$lang['pk_set_link_type_link']				= '����� ����';
$lang['pk_set_link_type_iframe']			= '��������';

#recruitment
$lang['pk_set_recruitment_tab']			= '����������';
$lang['pk_set_recruitment_header']			= '���������� - Are you looking for new Members ?';
$lang['pk_set_recruitment']				= '�������������� ����������';
$lang['pk_help_recruitment']				= '���� �������, �� ���� � ���������� �������� � ������������� ����� ������� �� �����, �� ���� � ���������.';
$lang['pk_recruitment_count']				= '����';

$lang['pk_set_recruitment_contact_type']	= 'Linkurl';
$lang['pk_help_recruitment_contact_type']	= 'If no URL is given, it will link to the contact email.';
$lang['ps_recruitment_spec']				= '�������������';

$lang['pk_set_comments_disable']			= '�������������� �����������';
$lang['pk_hel_pcomments_disable']			= '�������������� ����������� �� ���� ���������';

#Contact
$lang['pk_contact']						= '���������� ����������';
$lang['pk_contact_name']					= '���';
$lang['pk_contact_email']					= 'Email';
$lang['pk_contact_website']				= '���-��������';
$lang['pk_contact_irc']					= 'IRC �����';
$lang['pk_contact_admin_messenger']		= '�������� ������� ������ (Skype, ICQ)';
$lang['pk_contact_custominfos']			= '�������������� ����������';
$lang['pk_contact_owner']					= '���������� � ���������:';

#Next_raids
$lang['pk_set_nextraids_deactive']			= '�� ���������� ��������� �����';
$lang['pk_help_nextraids_deactive']		= '���� �������, ��������� ����� �� ����� �������� � ����';

$lang['pk_set_nextraids_limit']			= '����� ������ ��������� ������';
$lang['pk_help_nextraids_limit']			= '';

$lang['pk_set_lastitems_deactive']			= '�� ���������� ��������� ��������';
$lang['pk_help_lastitems_deactive']		= '���� �������, ��������� �������� �� ����� �������� � ����';

$lang['pk_set_lastitems_limit']			= '����� ������ ��������� ���������';
$lang['pk_help_lastitems_limit']			= '';

$lang['pk_is_help']						= '<b>��������: ��������� � ������ ���������� ��������� � Eqdkp Plus 0.5!</b><br><br>
											  Wenn ihr von Eqdp Plus 0.4 auf 0.5 aktualisiert oder die Such-Priorit�t ge�ndert habt, m�sst ihr euren Itemcache refreshen!!<br>
											  Empfohlene Priorit�t ist 1.Armory 2. WoWHead. oder 1. Buffed und 2. Allakhazam<br>
											  Eine Mischung aus Armory/WoWHead und Buffed/Allakhazam ist nicht m�glich, da die Tooltips und Icons nicht kompatibel sind!<br>
											  Zum aktualisieren des Itemcache dem Link folgen, danach die Buttons "Clear Cache" und danach "Update Itemtable" ausw�hlen.<br><br>';

$lang['pk_set_normal_leaderbaord']			= '���������� Leaderboard �� ���������';
$lang['pk_help_normal_leaderbaord']		= '���� �������,Leaderboard ���������� �������.';

$lang['pk_set_lastraids']					= '�� ���������� ��������� �����';
$lang['pk_help_lastraid']					= '���� �������, ��������� ���� �� ������� � ����';

$lang['pk_set_lastraids_limit']			= '��������� ����� ������';
$lang['pk_help_lastraid_limit']			= '��������� ����� ������';

$lang['pk_set_lastraids_showloot']			= '���������� �������� ����� ��������� ������';
$lang['pk_help_lastraid_showloot']			= '���������� �������� ����� ��������� ������';

$lang['pk_lastraids_lootLimit']		= '����� ���������';
$lang['pk_help_lastraid_lootLimit']		= '����� ���������';


$lang['pk_set_ts_active']					= 'activate TS Viewer';
$lang['pk_help_ts_active']					= 'activate TS Viewer';

$lang['pk_set_ts_title']					= 'TS-������ ���������';
$lang['pk_help_ts_title']					= 'TS-������ ���������';

$lang['pk_set_ts_serverAddress']			= 'TS-������ IP';
$lang['pk_help_ts_serverAddress']			= 'TS-������ IP';

$lang['pk_set_ts_serverQueryPort']			= '���� �������';
$lang['pk_help_ts_serverQueryPort']		= '���� �������';

$lang['pk_set_ts_serverUDPPort']			= 'UDP ����';
$lang['pk_help_ts_serverUDPPort']			= 'UDP ����';

$lang['pk_set_ts_serverPasswort']			= '������ �������';
$lang['pk_help_ts_serverPasswort']			= '������ �������';


$lang['pk_set_ts_channelflags']			= '���������� ����� ������ (R,M,S,P � �.�.)';
$lang['pk_help_ts_channelflags']			= '���������� ����� ������ (R,M,S,P � �.�.)';

$lang['pk_set_ts_userstatus']				= '���������� ������ ��������� (U,R,SA � �.�.)';
$lang['pk_help_ts_userstatus']				= '���������� ������ ��������� (U,R,SA � �.�.)';

$lang['pk_set_ts_showchannel']				= '���������� ������? (0 = ������ ��������)';
$lang['pk_help_ts_showchannel']			= '���������� ������? (0 = ������ ��������)';

$lang['pk_set_ts_showEmptychannel']		= '���������� ������ ������?';
$lang['pk_help_ts_showEmptychannel']		= '���������� ������ ������?';

$lang['pk_set_ts_overlib_mouseover']		= 'Show mouseover informations? ';
$lang['pk_help_ts_overlib_mouseover']		= 'Show mouseover informations? (german only atm, translation comes later)';

$lang['pk_set_ts_joinable']				= 'Show link to join the server?';
$lang['pk_help_ts_joinable']				= 'Show link to join the server';

$lang['pk_set_ts_joinableMember']			= 'Show the join link only registeres users?';
$lang['pk_help_ts_joinableMember']			= 'Link zum joinen nur eingelogten Usern anzeigen?';

$lang['pk_set_ts_ranking']					= '���������� ����������� �����';
$lang['pk_help_ts_ranking']				= '���������� ����������� �����';

$lang['pk_set_ts_ranking_url']				= '����������� ����� URL like <a href=http://www.wowjutsu.com/>WoWJutsu</a> or <a href=http://www.bosskillers.com/>Bosskillers</a> ';
$lang['pk_help_ts_ranking_url']			= '����������� ����� URL like <a href=http://www.wowjutsu.com/>WoWJutsu</a> or <a href=http://www.bosskillers.com/>Bosskillers</a> ';

$lang['pk_set_ts_ranking_link']			= '����������� ����� Link';
$lang['pk_help_ts_ranking_link']			= '����������� ����� Link';

$lang['pk_set_thirdColumn']				= '�� ����������� �������� �������';
$lang['pk_help_thirdColumn']				= '�� ����������� �������� �������';

#GetDKP
$lang['pk_getdkp_th']						= 'GetDKP ���������';

$lang['pk_set_getdkp_rp']					= '������������ raidplan';
$lang['pk_help_getdkp_rp']					= '������������� raidplan';

$lang['pk_set_getdkp_link']				= '�������� getdkp ������ � ������� ����';
$lang['pk_help_getdkp_link']				= '����� getdkp ������ � ������� ����';

$lang['pk_set_getdkp_active']				= '�������������� getdkp.php';
$lang['pk_help_getdkp_active']				= '��������������� getdkp.php';

$lang['pk_set_getdkp_items']				= '��������� itemIDs';
$lang['pk_help_getdkp_items']				= '���������� itemIDs';

$lang['pk_set_recruit_embedded']			= 'open Link embedded';
$lang['pk_help_recruit_embedded']			= '���� ������������, the link opens embedded i an iframe';

$lang['page_manager'] = 'Manage pages';

//maintenance mode
$lang['pk_maintenance_mode'] = 'Activate maintenance mode.';
$lang['pk_help_maintenance'] = 'Activating the maintenance mode will cause all non admin users to be redirected to a maintenance page and allows the admin to do maintenance on the eqdkp plus system.';
?>
