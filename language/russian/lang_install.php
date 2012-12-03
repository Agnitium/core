<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * file.php
 * Began: Day January 1 2003
 *
 * $Id: lang_install.php 1701 2008-03-16 15:04:04Z osr-corgan $
 *
 ******************************/

// Do not remove. Security Option!
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$lang = array(
'inst_header'               => '��������� EQdkp',

// ===========================================================
//	Per Language default settings
// ===========================================================
'game_language'             => 'ru',
'default_lang'              => 'russian',
'default_locale'            => 'ru_RU',

// ===========================================================
//	Prepare Installation
// ===========================================================
'installation'              => '���������',
'note'                      => '�������',
'notes'                     => '�������',
'error'                     => '������',
'errors'                    => '������',
'lerror'                    => '������',
'notice'                    => '���������',
'install_error'             => '������ ���������',
'inst_step'                 => '���',
'error_nostructure'         => '�� �������� SQL ���������/����',
'error_template'            => "�� �������� '%s' includes/class_template.php - ��������� ��� ���� ����������!",

// ===========================================================
//	Stepnames
// ===========================================================
'stepname_1'                => '����������',
'stepname_2'                => '���� ������',
'stepname_3'                => '�������� DB',
'stepname_4'                => '���������� � �������',
'stepname_5'                => '������� ������(Account)',
'stepname_6'                => '���������� (Finish)',

// ===========================================================
//	Step 1: PHP / Mysql Environment
// ===========================================================
'language_selector'         => '����������, �������� ����',
'install_language'          => '���� ���������',
'already_installed'         => 'EQdkp ��� ����������� - ������� <b>install/</b> ����� � ����� ����������.',
'conf_not_write'            => 'The <b>config.php</b> file does not exist and could not be created in EQdkp\'s root folder.<br />
                                You must create an empty config.php file on your server before proceeding.',
'conf_written'              => 'The <b>config.php</b> file has been created in EQdkp\'s root folder<br />
                                Deleting this file will interfere with the operation of your EQdkp installation.',
'conf_chmod'                => 'The file <b>config.php</b> is not set to be readable/writeable and could not be changed automatically.
                                <br />Please change the permissions to 0666 manually by executing <b>chmod 0666 config.php</b> on your server.',
'conf_writable'             => '<b>config.php</b> has been set to be readable/writeable in order to let this installer write your configuration
                                file automatically.',
'templcache_notcreated'     => 'The templates cache directory could not be created, please create one manuallly in the templates directory.
                                <br />You can do this by changing to the EQdkp root directory and typing <b>mkdir -p templates/cache/</b>',
'templatecache_created'     => 'A templates cache directory was created in your templates directory, removing this directory could interfere
                                with the operation of your EQdkp installation.',
'templatecache_chmod'       => 'The templates cache directory exists, but is not set to be writeable and could not be changed automatically.
                                <br />Please change the permissions to 0777 manually by executing <b>chmod 0777 templates/cache</b> on your server.',
'templatecache_ok'          => 'The templates cache directory has been set to be writeable in order to let the Templating engine create cached
                                versions of the compiled templates and speed up the displaying of EQdkp pages.',

'connection_failed'         => '���������� � eqdkp-plus.com �� �������.',
'curl_notavailable'         => 'cURL �� ��������. ��������, ���������� ��������� �� ����� �������� ���������.',
'fopen_notavailable'        => 'fopen �� ��������. ��������, ���������� ��������� �� ����� �������� ���������.',

'minimal_requ_notfilled'    => '��������, ��� ������ �� ������������� ����������� ����������� EQdkp',
'minimal_requ_filled'       => 'EQdkp �������������� ���� ������� � ��������, ��� ��� ������������� ����������� �����������.',

'inst_unknown'              => '����������',
'eqdkp_name'                => 'EQdkp PLUS',
'inst_eqdkpv'               => 'EQDKP Plus ������',
'inst_latest'               => '��������� ����������',

'inst_php'                  => 'PHP',
'inst_view'                 => '�������� php ����������()',
'inst_version'              => '������',
'inst_required'             => '���������',
'inst_available'            => '��������',
'inst_using'                => '������������',
'inst_yes'                  => '��',
'inst_no'                   => '���',

'inst_mysqlmodule'          => 'MySQL ������',
'inst_zlibmodule'           => 'zLib ������',
'inst_curlmodule'           => 'cURL ������',
'inst_fopen'                => 'fopen',

'inst_php_modules'          => 'PHP ������',
'inst_Supported'            => '��������������',

'inst_step1'                => '���������: ��� 1',
'inst_button1'              => '������ ���������',

// ===========================================================
//	Step 2: Database
// ===========================================================
'inst_database_conf'        => '������������ ���� ������',
'inst_dbtype'               => '��� ���� ������',
'inst_dbhost'               => '���� ���� ������',
'inst_dbname'               => '�������� ���� ������',
'inst_dbuser'               => '����� ���� ������',
'inst_dbpass'               => '������ ���� ������',
'inst_table_prefix'         => '������� ��� ������ EQdkp',
'inst_button2'              => '���������� ���� ������',

// ===========================================================
//	Step 3: Database cofirmation
// ===========================================================
'inst_error_nodbname'       => '���� ������ �� �������� ��������!',
'inst_error_prefix_inval'   => '������������ �������',
'inst_error_prefix_toolong' => '������� ������� �������!',
'inserror_dbconnect'        => '������ ��� ���������� � ����� ������',
'insterror_no_mysql'        => '���� ������ �� MySQL!',
'db_warning'                => '���������',
'db_information'            => '����������',
'inst_sqlheaderbox'         => 'SQL ����������',
'inst_mysqlinfo'            => "MySQL ������ <b>and</b> ������ ������� 4.0.4 ��� ���� � InnoDB ������� �������������� EQdkp.<br>
                                <b><br>�� ��������� ������ ������� <ul>%s</ul> � ������ ������� <ul>%s.</ul></b><br>
                                MySQL ������ ���� 4.0.4 �� ����� �������� � ��������������. ������ ���� 4.0.4<br>
                                will experience data corruption, and we will not provide support for these installations.<br><br>",
'inst_button3'              => '�������',
'inst_sql_error'            => '������! ��������� ��������� ��������� SQL �����������: <br><br><ul>%s</ul> <br>',
'insinfo_dbready'           => '���������� � ����� ������ ���� ��������� � ������� ������ �� ���� ����������. �� ������ ���������� ������� ���������.',

// Errors
'INST_ERR'                  => 'Installation error',
'INST_ERR_PREFIX'           => 'The Database Prefix already exists. Please go back and use another one or your data will be flushed!',
'INST_ERR_DB_CONNECT'       => 'Could not connect to the database, see error message below.',
'INST_ERR_DB_NO_ERROR'      => 'No error message given.',
'INST_ERR_DB_NO_MYSQLI'     => 'The version of MySQL installed on this machine is incompatible with the �MySQL with MySQLi Extension� option you have selected. Please try the �MySQL� option instead.',
'INST_ERR_DB_NO_NAME'       => 'No database name specified.',
'INST_ERR_PREFIX_INVALID'   => 'The table prefix you have specified is invalid for your database. Please try another, removing characters such as hyphen, apostrophe or forward- or back-slashes.',
'INST_ERR_PREFIX_TOO_LONG'  => 'The table prefix you have specified is too long. The maximum length is %d characters.',

// ===========================================================
//	Step 4: Server
// ===========================================================
'inst_language_config'      => '������������ �����',
'inst_default_lang'         => '���� �� ���������',
'inst_default_locale'       => '����������� �� ���������',

'inst_game_config'          => '������� ������������',
'inst_default_game'         => '����������� ����',

'inst_server_config'        => '������������ �������',
'inst_server_name'          => '��� ������',
'inst_server_port'          => '���� �������',
'inst_server_path'          => '���� �������',

'inst_button4'              => '����������',

// ===========================================================
//	Step 5: Accounts
// ===========================================================
'inst_administrator_config' => '������������ ������� ������ ��������������',
'inst_username'             => '����� ��������������',
'inst_user_password'        => '������ ��������������',
'inst_user_pw_confirm'      => '����������� ������ ��������������',
'inst_user_email'           => '����� Email ��������������',

'inst_button5'              => '��������� ������� �������',

'inst_writerr_confile'      => 'The <b>config.php</b> file couldn\'t be opened for writing.  Paste the following in to config.php and save the
                                file to continue:',
'inst_confwritten'          => 'Your configuration file has been written with the initial values, but installation will not be complete until
                                you create an administrator account in the next step.',
'inst_checkifdbexists'      => 'Before proceeding, please verify that the database name you provided is already created and that the user you provided has permission to create tables in that database',
'inst_wrong_dbtype'         => "Unable to find the database abstraction layer for <b>%s</b>, check to make sure %s exists.",
'inst_failedconhost'        => "Failed to connect to database <b>%s</b> as <b>%s@%s</b>
                                <br /><br /><a href='index.php'>Restart Installation</a>",
'inst_failedversioninfo'    => "Failed to get version information for database <b>%s</b> as <b>%s@%s</b>
                                <br /><br /><a href='index.php'>Restart Installation</a>",

// ===========================================================
//	Step 5: Finish
// ===========================================================
'login'                     => '������� ������',
'username'                  => '��� ������������',
'password'                  => '������',
'remember_password'         => '��������� ���� (cookie)',

'login_button'              => '�����',

'inst_passwordnotmatch'     => '���� ������ �� ���������, ����� ������� ������ ���� �������� <b>admin</b>.  �� ������ ������� ���, ����� �� ���� � ������� � ���������� ����� ������� ������.',
'inst_admin_created'        => '���� ������� ������ �������������� ���� ������� �������, log in above to be taken to the EQdkp configuration page.',
);
?>
