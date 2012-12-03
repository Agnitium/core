<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * lang_main.php
 * begin: Wed December 18 2002
 *
 * $Id: lang_main.php 4184 2009-03-11 01:29:03Z osr-corgan $
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
$lang['XML_LANG'] = 'es';

// Linknames
$lang['rp_link_name']   = "Calendario";

// Titles
$lang['admin_title_prefix']   = "%1\$s %2\$s Admin";
$lang['listadj_title']        = 'Listado de ajustes de grupo';
$lang['listevents_title']     = 'Valores de eventos';
$lang['listiadj_title']       = 'Listado de ajuste individual';
$lang['listitems_title']      = 'Valores de objeto';
$lang['listnews_title']       = 'Entrada de noticias';
$lang['listmembers_title']    = 'Posiciones de biembro';
$lang['listpurchased_title']  = 'Historial de Objeto';
$lang['listraids_title']      = 'Listado de bandas';
$lang['login_title']          = 'Incio de sesi�n';
$lang['message_title']        = 'Web: Mensaje';
$lang['register_title']       = 'Registro';
$lang['settings_title']       = 'Configuraci�n de cuenta';
$lang['stats_title']          = "%1\$s estad�sticas";
$lang['summary_title']        = 'Resumen de noticias';
$lang['title_prefix']         = "%1\$s %2\$s";
$lang['viewevent_title']      = "Ver historial de banda registrada para %1\$s";
$lang['viewitem_title']       = "Ver historial de compra para %1\$s";
$lang['viewmember_title']     = "Historial para %1\$s";
$lang['viewraid_title']       = 'Resumen de banda';

// Main Menu
$lang['menu_admin_panel'] = 'Panel de administraci�n';
$lang['menu_events'] = 'Eventos';
$lang['menu_itemhist'] = 'Historial de objetos';
$lang['menu_itemval'] = 'Valor de objetos';
$lang['menu_news'] = 'Inicio';
$lang['menu_raids'] = 'Bandas';
$lang['menu_register'] = 'Registro';
$lang['menu_settings'] = 'Configuraci�n';
$lang['menu_members'] = 'Personajes';
$lang['menu_standings'] = 'DKPs';
$lang['menu_stats'] = 'Estad�sticas';
$lang['menu_summary'] = 'Resumen';

// Column Headers
$lang['account'] = 'Cuenta';
$lang['action'] = 'Acci�n';
$lang['active'] = 'Activo';
$lang['add'] = 'A�adir';
$lang['added_by'] = 'A�adido por';
$lang['adjustment'] = 'Ajuste';
$lang['administration'] = 'Administraci�n';
$lang['administrative_options'] = 'Opciones administrativas';
$lang['admin_index'] = 'Indice admin';
$lang['attendance_by_event'] = 'Asistencia por evento';
$lang['attended'] = 'Asisti�';
$lang['attendees'] = 'Asistentes';
$lang['average'] = 'Promedio';
$lang['buyer'] = 'Comprador';
$lang['buyers'] = 'Compradores';
$lang['class'] = 'Clase';
$lang['armor'] = 'Armadura';
$lang['type'] = 'Armadura';
$lang['class_distribution'] = 'Estadisticas por clases';
$lang['class_summary'] = "Resumen de clase: %1\$s en %2\$s";
$lang['configuration'] = 'Configuraci�n';
$lang['config_plus']	= 'Configuraciones PLUS';
$lang['plus_vcheck']	= 'Buscar actualizaci�nes';
$lang['current'] = 'DKP actuales';
$lang['date'] = 'Fecha';
$lang['delete'] = 'Borrar';
$lang['delete_confirmation'] = 'Borrar confirmaci�n';
$lang['dkp_value'] = "%1\$s valor";
$lang['drops'] = 'Drops';
$lang['earned'] = 'Ganado';
$lang['enter_dates'] = 'Introduzca fechas';
$lang['eqdkp_index'] = 'Indice Web';
$lang['eqdkp_upgrade'] = 'Actualizaci�n de la Web';
$lang['event'] = 'Evento';
$lang['events'] = 'Eventos';
$lang['filter'] = 'Filtro';
$lang['first'] = 'Primero';
$lang['rank'] = 'Rango';
$lang['general_admin'] = 'Administraci�n general';
$lang['get_new_password'] = 'Obtenga una nueva contrase�a';
$lang['group_adj'] = 'Ajust. Grupo';
$lang['group_adjustments'] = 'Ajustes de grupo';
$lang['individual_adjustments'] = 'Ajustes individuales';
$lang['individual_adjustment_history'] = 'Historial de ajustes individuales';
$lang['indiv_adj'] = 'Ajust. Indiv.';
$lang['ip_address'] = 'Direccion IP';
$lang['item'] = 'Objeto';
$lang['items'] = 'Objetos';
$lang['item_purchase_history'] = 'Historial de compra de objetos';
$lang['last'] = '�ltimo';
$lang['lastloot'] = '�ltimo bot�n';
$lang['lastraid'] = '�ltima banda';
$lang['last_visit'] = '�ltima visita';
$lang['level'] = 'Nivel';
$lang['log_date_time'] = 'Fecha/Hora de este log';
$lang['loot_factor'] = 'Factor de bot�n';
$lang['loots'] = 'Bot�n';
$lang['manage'] = 'Administrar';
$lang['member'] = 'Miembro';
$lang['members'] = 'Miembros';
$lang['members_present_at'] = "Miembros presentes en %1\$s en %2\$s";
$lang['miscellaneous'] = 'Miscel�neo';
$lang['name'] = 'Nombre';
$lang['news'] = 'Noticias';
$lang['note'] = 'Nota';
$lang['online'] = 'En Linea';
$lang['options'] = 'Opciones';
$lang['paste_log'] = 'Pegue un registro abajo';
$lang['percent'] = 'Por ciento';
$lang['permissions'] = 'Permisos';
$lang['per_day'] = 'Por dia';
$lang['per_raid'] = 'Por banda';
$lang['pct_earned_lost_to'] = '% Ganado perdido a';
$lang['preferences'] = 'Preferencias';
$lang['purchase_history_for'] = "Historial de compras para %1\$s";
$lang['quote'] = 'Citar';
$lang['race'] = 'Raza';
$lang['raid'] = 'Banda';
$lang['raids'] = 'Bandas';
$lang['raid_id'] = 'ID de bandas';
$lang['raid_attendance_history'] = 'Historial de asistencia en bandas';
$lang['raids_lifetime'] = "Mucho m�s tiempo (%1\$s - %2\$s)";
$lang['raids_x_days'] = "Ultimos %1\$d dias";
$lang['rank_distribution'] = 'Distribuci�n de rangos';
$lang['recorded_raid_history'] = "Historial de bandas registradas para %1\$s";
$lang['reason'] = 'Raz�n';
$lang['registration_information'] = 'Informaci�n de registro';
$lang['result'] = 'Resultado';
$lang['session_id'] = 'ID de sesi�n';
$lang['settings'] = 'Configuraci�n';
$lang['spent'] = 'Gastado';
$lang['summary_dates'] = "Resumen de banda: %1\$s en %2\$s";
$lang['themes'] = 'Tem�s';
$lang['time'] = 'Tiempo';
$lang['total'] = 'Total';
$lang['total_earned'] = 'Total ganado';
$lang['total_items'] = 'Total de objetos';
$lang['total_raids'] = 'Total de bandas';
$lang['total_spent'] = 'Total gastado';
$lang['transfer_member_history'] = 'Transfiera historial de miembro';
$lang['turn_ins'] = 'Transferir objetos';
$lang['type'] = 'Tipo';
$lang['update'] = 'Actualizar';
$lang['updated_by'] = 'Actualizado por';
$lang['user'] = 'Usuario';
$lang['username'] = 'Nombre de usuario';
$lang['value'] = 'Valor';
$lang['view'] = 'Ver';
$lang['view_action'] = 'Ver acci�n';
$lang['view_logs'] = 'Ver registros';

// Page Foot Counts
$lang['listadj_footcount']               = "... encontrado(s) %1\$d ajuste(s) / %2\$d por p�gina";
$lang['listevents_footcount']            = "... encontrado(s) %1\$d evento(s) / %2\$d por p�gina";
$lang['listiadj_footcount']              = "... encontrado(s) %1\$d ajuste(s) individuales / %2\$d por p�gina";
$lang['listitems_footcount']             = "... encontrado(s) %1\$d objeto(s) unico(s) / %2\$d por p�gina";
$lang['listmembers_active_footcount']    = "... encontrado(s) %1\$d miembro(s) activo(s) / %2\$sMostrar todos</a>";
$lang['listmembers_compare_footcount']   = "... comparar %1\$d miembros";
$lang['listmembers_footcount']           = "... encontrado(s) %1\$d miembro(s)";
$lang['listnews_footcount']              = "... encontrada(s) %1\$d entrada de noticias / %2\$d por p�gina";
$lang['listpurchased_footcount']         = "... encontrado(s) %1\$d objeto(s) / %2\$d por p�gina";
$lang['listraids_footcount']             = "... encontrada(s) %1\$d banda(s) / %2\$d por p�gina";
$lang['stats_active_footcount']          = "... encontrado(s) %1\$d miembro(s) activo(s) / %2\$sMostrar todos</a>";
$lang['stats_footcount']                 = "... encontrado(s) %1\$d miembro(s)";
$lang['viewevent_footcount']             = "... encontrada(s) %1\$d banda(s)";
$lang['viewitem_footcount']              = "... encontrado(s) %1\$d objeto(s)";
$lang['viewmember_adjustment_footcount'] = "... encontrado(s) %1\$d ajuste(s) individual";
$lang['viewmember_item_footcount']       = "... encontrado(s) %1\$d objeto(s) comprado(s) / %2\$d por p�gina";
$lang['viewmember_raid_footcount']       = "... encontrado(s) %1\$d asistencia en banda(s) / %2\$d por p�gina";
$lang['viewraid_attendees_footcount']    = "... encontrado(s) %1\$d asistente(s)";
$lang['viewraid_drops_footcount']        = "... encontrado(s) %1\$d drop(s)";

// Submit Buttons
$lang['close_window'] = 'Cerrar ventana';
$lang['compare_members'] = 'Comparar miembros';
$lang['create_news_summary'] = 'Crear resumen de noticias';
$lang['login'] = 'Inicio de sesi�n';
$lang['logout'] = 'Cerrar sesi�n';
$lang['log_add_data'] = 'A�ada datos al formulario';
$lang['lost_password'] = 'Rescuperar Contrase�a';
$lang['no'] = 'No';
$lang['proceed'] = 'Proceder';
$lang['reset'] = 'Restablecer';
$lang['set_admin_perms'] = 'Establecer permisos administrativos';
$lang['submit'] = 'Enviar';
$lang['upgrade'] = 'Actualizar';
$lang['yes'] = 'Si';

// Form Element Descriptions
$lang['admin_login'] = 'Inicio sesi�n de administrador';
$lang['confirm_password'] = 'Confirmar contrase�a';
$lang['confirm_password_note'] = 'Usted s�lo tendr� que confirmar su nueva contrase�a si la ha cambiado anteriormente';
$lang['current_password'] = 'Contrase�a Actual';
$lang['current_password_note'] = 'Deber� confirmar su contrase�a actual si desea cambiar su nombre de usuario o contrase�a';
$lang['email'] = 'Email';
$lang['email_address'] = 'Direcci�n de Email';
$lang['ending_date'] = 'Fecha final';
$lang['from'] = 'Desde';
$lang['guild_tag'] = 'Etiqueta de Hermandad';
$lang['language'] = 'Lenguaje';
$lang['new_password'] = 'Nueva Contrase�a';
$lang['new_password_note'] = 'Solo es necesario poner una nueva contrase�a si desea cambiarla';
$lang['password'] = 'Contrase�a';
$lang['remember_password'] = 'Recu�rdeme (cookie)';
$lang['starting_date'] = 'Fecha de inicio';
$lang['style'] = 'Estilo';
$lang['to'] = 'Para';
$lang['username'] = 'Usuario';
$lang['users'] = 'Usuarios';

// p�gination
$lang['next_page'] = 'P�gina siguiente';
$lang['page'] = 'P�gina';
$lang['previous_page'] = 'P�gina anterior';

// Permission Messages
$lang['noauth_default_title'] = 'Permiso denegado';
$lang['noauth_u_event_list'] = 'No tiene permisos para listar los eventos.';
$lang['noauth_u_event_view'] = 'No tiene permisos para ver los eventos.';
$lang['noauth_u_item_list'] = 'No tiene permisos para listar los objetos.';
$lang['noauth_u_item_view'] = 'No tiene permisos para ver los objetos.';
$lang['noauth_u_member_list'] = 'No tiene permisos para ver las clasificaciones de los miembros.';
$lang['noauth_u_member_view'] = 'No tiene permisos para ver el historial de miembros.';
$lang['noauth_u_raid_list'] = 'No tiene permisos para listar las bandas.';
$lang['noauth_u_raid_view'] = 'No tiene permisos para ver las bandas.';

// Submission Success Messages
$lang['add_itemvote_success'] = 'Su voto por el objeto ha sido registrado.';
$lang['update_itemvote_success'] = 'Su voto por el objeto ha sido actualizado.';
$lang['update_settings_success'] = 'La configuraci�n de usuario ha sido actualizada.';

// Form Validation Errors REVISAR EL DE AQUI ABAJO
$lang['fv_alpha_attendees'] = 'Personajes\' en los nombres de EverQuest contienen s�lo caracteres Alfab�ticos.';
$lang['fv_already_registered_email'] = 'La direcci�n de email ya est� registrada.';
$lang['fv_already_registered_username'] = 'El nombre de usuario ya est� registrado.';
$lang['fv_difference_transfer'] = 'Una transferencia de historial debe hacerse entre dos personas diferentes.';
$lang['fv_difference_turnin'] = 'Un turn-in debe hacerse entre dos personas diferentes.';
$lang['fv_invalid_email'] = 'La direcci�n de email no parece ser valida.';
$lang['fv_match_password'] = 'Los campos de contrase�a deben coincidir.';
$lang['fv_member_associated']  = "%1\$s ya est� asociado a otra cuenta de usuario.";
$lang['fv_number'] = 'Debe ser un n�mero.';
$lang['fv_number_adjustment'] = 'El ajuste de valor de campo debe ser un n�mero.';
$lang['fv_number_alimit'] = 'El campo l�mite de los ajustes debe ser un n�mero.';
$lang['fv_number_ilimit'] = 'El campo l�mite de los objetos debe ser un n�mero.';
$lang['fv_number_inactivepd'] = 'El periodo de inactividad debe ser un n�mero.';
$lang['fv_number_pilimit'] = 'El l�mite de los objetos adquiridos debe ser un n�mero.';
$lang['fv_number_rlimit'] = 'El l�mite de Raids debe ser un n�mero.';
$lang['fv_number_value'] = 'El valor del campo debe ser un n�mero.';
$lang['fv_number_vote'] = 'La campo votacion debe ser un n�mero.';
$lang['fv_date'] = 'Por favor elija una fecha valida del calendario.';
$lang['fv_range_day'] = 'El campo de D�a debe ser un n�mero entre 1 y 31.';
$lang['fv_range_hour'] = 'El campo de Hora debe ser un n�mero entre 0 y 23.';
$lang['fv_range_minute'] = 'El campo Minutos debe ser un n�mero entre 0 y 59.';
$lang['fv_range_month'] = 'El campo Mes debe ser un n�mero entre 1 y 12.';
$lang['fv_range_second'] = 'El segundo campo debe ser un n�mero entre 0 y 59.';
$lang['fv_range_year'] = 'El campo A�o debe ser un n�mero con un valor de al menos 1998.';
$lang['fv_required'] = 'Campo obligatorio';
$lang['fv_required_acro'] = 'El campo de sigla de hermandad es obligatorio.';
$lang['fv_required_adjustment'] = 'El campo de valor de ajuste es obligatorio.';
$lang['fv_required_attendees'] = 'Debe haber al menos un participante en esta banda.';
$lang['fv_required_buyer'] = 'Debe seleccionar un comprador';
$lang['fv_required_buyers'] = 'Debe seleccionar un comprador al menos.';
$lang['fv_required_email'] = 'El campo direcci�n de email es obligatorio.';
$lang['fv_required_event_name'] = 'Debe seleccionar un evento.';
$lang['fv_required_guildtag'] = 'El campo etiqueta de hermandad es obligatorio.';
$lang['fv_required_headline'] = 'El campo T�tulo es obligatorio.';
$lang['fv_required_inactivepd'] = 'Si el campo esconder miembros inactivos est� definido como SI, debe tambi�n poner un valor para el periodo de inactividad.';
$lang['fv_required_item_name'] = 'El campo de nombre del objeto debe ser rellenado o seleccionar un objeto existente.';
$lang['fv_required_member'] = 'Debe seleccionar un miembro.';
$lang['fv_required_members'] = 'Debe seleccionar un miembro al menos.';
$lang['fv_required_message'] = 'El campo Mensaje es obligatorio.';
$lang['fv_required_name'] = 'El campo Nombre es obligatorio.';
$lang['fv_required_password'] = 'El campo Contrase�a es obligatorio.';
$lang['fv_required_raidid'] = 'Debe seleccionar una banda.';
$lang['fv_required_user'] = 'El campo Nombre de Usuario es obligatorio.';
$lang['fv_required_value'] = 'El campo Valor es obligatorio.';
$lang['fv_required_vote'] = 'El campo Votaci�n es obligatorio.';

// Miscellaneous
$lang['added'] = 'A�adido';
$lang['additem_raidid_note'] = "Se mostraran s�lo las bandas de menos de dos semanas / %1\$sMostrar todo</a>";
$lang['additem_raidid_showall_note'] = 'Se muestran todas las bandas';
$lang['addraid_datetime_note'] = 'Si usted analiza un registro, la fecha y se encontrar�n autom�ticamente.';
$lang['addraid_value_note'] = 'Dar un Bonus por una sola vez; Si se deja en blanco se utulizar� el valor preestablecido en el evento';
$lang['add_items_from_raid'] = 'A�adir los objetos de esta banda';
$lang['deleted'] = 'Borrado';
$lang['done'] = 'Hecho';
$lang['enter_new'] = 'Introduzca uno nuevo';
$lang['error'] = 'Error';
$lang['head_admin'] = 'Admin principal';
$lang['hold_ctrl_note'] = 'Mantenga CTRL para seleccionar varios';
$lang['list'] = 'Listar';
$lang['list_groupadj'] = 'Lista de ajustes de grupo';
$lang['list_events'] = 'Lista de eventos';
$lang['list_indivadj'] = 'Lista de ajustes individuales';
$lang['list_items'] = 'Lista de objetos';
$lang['list_members'] = 'Lista de miembros';
$lang['list_news'] = 'Lista de noticias';
$lang['list_raids'] = 'Lista de bandas';
$lang['may_be_negative_note'] = 'puede ser negativo';
$lang['not_available'] = 'No disponible';
$lang['no_news'] = 'Ninguna entrada de noticias encontrada.';
$lang['of_raids'] = "%1\$d%% de bandas";
$lang['or'] = 'O';
$lang['powered_by'] = 'Proporcionado por';
$lang['preview'] = 'Vista previa';
$lang['required_field_note'] = 'Los asuntos marcados con un * son campos obligatorios.';
$lang['select_1ofx_members'] = "Selecciona 1 de %1\$d miembros...";
$lang['select_existing'] = 'Seleccione existentes';
$lang['select_version'] = 'Seleccione la versi�n de EQdkp desde la cual actualiza';
$lang['success'] = '�xito';
$lang['s_admin_note'] = 'Estos campos no pueden ser modificados por los usuarios.';
$lang['transfer_member_history_description'] = 'Esto transfiere el historial del miembro(s) (bandas, objetos, ajustes) a otro miembro.';
$lang['updated'] = 'Actualizado';
$lang['upgrade_complete'] = 'Su instalaci�n de EQdkp se ha actualizado.<br /><br /><b class="negative">Para mayor seguridad, elimine este archivo</b>';

// Settings
$lang['account_settings'] = 'Configurar cuenta';
$lang['adjustments_per_page'] = 'Ajustes por p�gina';
$lang['basic'] = 'B�sico';
$lang['events_per_page'] = 'Eventos por p�gina';
$lang['items_per_page'] = 'Objetos por p�gina';
$lang['news_per_page'] = 'Noticias por p�gina';
$lang['raids_per_page'] = 'Raids por p�gina';
$lang['associated_members'] = 'Miembros asociados';
$lang['guild_members'] = 'Miembro(s) de hermandad';
$lang['default_locale'] = 'Lugar por defecto';


// Error messages
$lang['error_account_inactive'] = 'Tu cuenta est� inactiva.';
$lang['error_already_activated'] = 'La cuenta ya ha sido activada.';
$lang['error_email_send'] = 'Failed sending email.';
$lang['error_invalid_email'] = 'No se proporcion� una direcci�n de email valida.';
$lang['error_invalid_event_provided'] = 'No se proporcion� un ID de evento v�lido.';
$lang['error_invalid_item_provided'] = 'No se proporcion� un ID de objeto v�lido.';
$lang['error_invalid_key'] = 'Usted a proporcionado una clave de activacion invalida.';
$lang['error_invalid_name_provided'] = 'No se proporcion� un nombre de usuario v�lido.';
$lang['error_invalid_news_provided'] = 'No se proporcion� un ID de noticia v�lido.';
$lang['error_invalid_raid_provided'] = 'No se proporcion� un ID de raid v�lido.';
$lang['error_user_not_found'] = 'No se proporcion� un nombre de usuario v�lido';
$lang['incorrect_password'] = 'Contrase�a incorrecta';
$lang['invalid_login'] = 'Nombre de usuario o contrase�a incorrectos';
$lang['not_admin'] = 'No es un administrador';

// Registration
$lang['account_activated_admin']   = 'La cuenta ha sido activada. Un e-mail ha sido enviado al usuario para informarle de este cambio.';
$lang['account_activated_user']    = "Su cuenta ha sido activada y ahora puede %1\$s iniciar sesion en %2\$s.";
$lang['password_sent'] = 'Su nueva contrase�a le ha sido enviada por email.';
$lang['register_activation_self']  = "Su cuenta ha sido creada, pero antes de poder usarla es necesario la activaci�n.<br /><br />Un email ha sido enviado a %1\$s con la informaci�n para activar su cuenta.";
$lang['register_activation_admin'] = "Su cuenta ha sido creada, pero antes de poder usarla debe ser activada por el administrador.<br /><br />Un email ha sido enviado a %1\$s con m�s informaci�n.";
$lang['register_activation_none']  = "Su cuenta ha sido creada y ahora puede %1\$siniciar sesi�n en%2\$s.<br /><br />Un email ha sido enviado a %3\$s con m�s informacion.";

//plus
$lang['news_submitter'] = 'escrito por';
$lang['news_submitat'] = 'a las';
$lang['droprate_loottable'] = "Tabla de bot�n";
$lang['droprate_name'] = "Nombre de objeto";
$lang['droprate_count'] = "Cuenta";
$lang['droprate_drop'] = "Drop %";

$lang['Itemsearch_link'] = "Buscar objeto";
$lang['Itemsearch_search'] = "Buscar objeto :";
$lang['Itemsearch_searchby'] = "Buscar por :";
$lang['Itemsearch_item'] = "Objeto ";
$lang['Itemsearch_buyer'] = "Comprador ";
$lang['Itemsearch_raid'] = "Banda ";
$lang['Itemsearch_unique'] = "Resultados de tema �nico :";
$lang['Itemsearch_no'] = "No";
$lang['Itemsearch_yes'] = "Si";

$lang['bosscount_player'] = "Jugador: ";
$lang['bosscount_raids'] = "Bandas: ";
$lang['bosscount_items'] = "Objetos: ";
$lang['bosscount_dkptotal'] = "Total DKP: ";

//MultiDKP
$lang['Plus_menuentry'] 			= "EQdkp Plus";
$lang['Multi_entryheader'] 		= "MultiDKP - A�adir Tabla-DKP";
$lang['Multi_pageheader'] 		= "MultiDKP - Mostrar Tablas-DKP";
$lang['Multi_events'] 				= "Eventos:";
$lang['Multi_eventname'] 				= "Nombre evento";
$lang['Multi_discnottolong'] 	= "(Nombre de la tabla-DKP) - esto no deber�a ser demasiado largo, la tabla-DKP se har� grande. Elija NAX, BWL, AQ etc. !";
$lang['Multi_kontoname_short']= "Tabla-DKP:";
$lang['Multi_discr'] 					= "Descripci�n:";
$lang['Multi_events'] 				= "Eventos de esta tabla-DKP";

$lang['Multi_addkonto'] 			  = "A�adir Tabla-DKP";
$lang['Multi_updatekonto'] 			= "Cambiar Tabla-DKP";
$lang['Multi_deletekonto'] 			= "Borrar Tabla-DKP";
$lang['Multi_viewkonten']			  = "Mostrar Tablas-DKP";
$lang['Multi_chooseevents']			= "Elija Evento(s)";
$lang['multi_footcount'] 				= "...encontrada(s) %1\$d Tablas-DKP  / %2\$d por p�gina";
$lang['multi_error_invalid']    = "Tablas-DKP no asignadas....";
$lang['Multi_required_event']   = "�Debe elegir al menos un evento!";
$lang['Multi_required_name']    = "�Debe insertar un nombre!";
$lang['Multi_required_disc']    = "�Debe insertar una descripci�n!";
$lang['Multi_admin_add_multi_success'] = "La Tabla-DKP %1\$s ( %2\$s ) con los eventos %3\$s se ha a�adido a la base de datos.";
$lang['Multi_admin_update_multi_success'] = "La Tabla-DKP %1\$s ( %2\$s ) con los eventos %3\$s se ha cambiado en la base de datos.";
$lang['Multi_admin_delete_success']           = "La Tabla-DKP %1\$s se ha eliminado de la base de datos.";
$lang['Multi_confirm_delete']    = '�Seguro que desea eliminar la Tabla-DKP?';

$lang['Multi_total_cost']   										= 'Total dkps para esta Tabla-DKP';
$lang['Multi_Accs']    													= 'Tabla(s)-DKP';

//update
$lang['upd_eqdkp_status']    										= 'Estado de actualizaci�n de EQdkp';
$lang['upd_system_status']    									= 'Estado de sistema';
$lang['upd_template_status']    								= 'Estado de plantilla';
$lang['upd_gamefile_status']                    = 'Estado de juego';
$lang['upd_update_need']    										= '�Necesita actualizar!';
$lang['upd_update_need_link']    								= 'Instalar todos los componentes necesarios';
$lang['upd_no_update']    											= 'Ninguna actualizaci�n necesaria. El sistema ya est� actualizado.';
$lang['upd_status']    													= 'Estado';
$lang['upd_state_error']    										= 'Error';
$lang['upd_sql_string']    											= 'Comando SQL';
$lang['upd_sql_status_done']    								= 'conseguido';
$lang['upd_sql_error']    											= 'Error';
$lang['upd_sql_footer']    											= 'Ejecutado comando SQL';
$lang['upd_sql_file_error']    									= 'Error: El archivo SQL requerido %1\$s no se ha podido ser encontrar';
$lang['upd_eqdkp_system_title']    							= 'Sistema de actualizaci�n de componentes EQdkp';
$lang['upd_plus_version']    										= 'Version EQdkp Plus';
$lang['upd_plus_feature']    										= 'Caracter�stica';
$lang['upd_plus_detail']    										= 'Detalles';
$lang['upd_update']    													= 'Actualizar';
$lang['upd_eqdkp_template_title']    						= 'Sistema de actualizaci�n de Plantillas EQdkp';
$lang['upd_eqdkp_gamefile_title']               = 'Sistema de actualizaci�n de juegos EQdkp';
$lang['upd_gamefile_availversion']              = 'Versi�n disponible';
$lang['upd_gamefile_instversion']               = 'Versi�n instalada';
$lang['upd_template_name']    									= 'Nombre de plantilla';
$lang['upd_template_state']    									= 'Estado de Plantilla';
$lang['upd_template_filestate']    							= 'Carpeta de plantillas disponibles';
$lang['upd_link_install']    										= 'Actualizar';
$lang['upd_link_reinstall']    									= 're-instalar';
$lang['upd_admin_need_update']    							= 'Ha sido detectado un error en la base de datos. El sistema no est� al dia y necesita ser actualizado.';
$lang['upd_admin_link_update']									= 'Click aqui para resolver el problema.';
$lang['upd_backto']    													= 'Volver a la vista general';

// Event Icon
$lang['event_icon_header']    								  = 'Selecciona un icono para el evento';

//update Itemstats
$lang['updi_header']    								    	= 'Actualizar datos Itemstats';
$lang['updi_header2']    								    	= 'Informacion Itemstats';
$lang['updi_action']    								    	= 'Acci�n';
$lang['updi_notfound']    								    = 'No encontrado';
$lang['updi_writeable_ok']    							  = 'El archivo es se puede escribir';
$lang['updi_writeable_no']    								= 'El archivo no es se puede escribir';
$lang['updi_help']    								    		= 'Descripci�n';
$lang['updi_footcount']    								    = 'Objeto actualizado';
$lang['updi_curl_bad']    								    = 'La funcion PHP necesaria (cURL) no se ha encontrado. Es posible que Itemstats no funcione bien. Por favor, p�ngase en contacto con su administrador.';
$lang['updi_curl_ok']    								    	= 'cURL encontrado.';
$lang['updi_fopen_bad']    								    = 'La funcion PHP necesaria (fopen) no se ha encontrado. Es posible que Itemstats no funcione bien. Por favor, p�ngase en contacto con su administrador.';
$lang['updi_fopen_ok']    								    = 'fopen encontrado.';
$lang['updi_nothing_found']						    		= 'No se encontraron objetos';
$lang['updi_itemscount']  						    		= 'Entradas Itemcache:';
$lang['updi_baditemscount']						    		= 'Malas Entradas:';
$lang['updi_items']										    		= 'Objetos en base de datos:';
$lang['updi_items_duplicate']					    		= '{Con objetos duplicados}';
$lang['updi_show_all']    								    = 'Listar todos los objetos con Itemstats';
$lang['updi_refresh_all']    								  = 'Eliminar todos los objetos y refr�squelos.';
$lang['updi_refresh_bad']    								  = 'Refrescar solo objetos malos';
$lang['updi_refresh_raidbank']    						= 'Refrescar objetos de Raidbanker';
$lang['updi_refresh_tradeskill']   						= 'Refrescar objetos Tradeskill';
$lang['updi_help_show_all']    								= 'Todos los objetos se muestran con sus estad�sticas. Refrescar las estad�sticas err�neas. (recomendado)';
$lang['updi_help_refresh_all']  							= 'Elimina el Itemcache actual y trata de actualizar todos los objetos que se muestran en EQDKP. ADVERTENCIA: Si usted comparte su Itemcache con un foro, los objetos del foro no pueden ser refrescados. Segun la velocidad de su servidor web y la disponibilidad de Allakhazam.com esta accion podria tardar varios minutos. Posiblemente los ajustes de su servidor web prohiben una buena ejecucion. En este caso pongase en contacto con su administrador.';
$lang['updi_help_refresh_bad']    						= 'Borra todos los Objetos malos de la cache y los refresca.';
$lang['updi_help_refresh_raidbank']    				= 'Si Raidbanker esta instalado, Itemstats utiliza los obejtos entrados en el banco.';
$lang['updi_help_refresh_Tradeskill']    			= 'Cuando Tradeskill esta instalado, los objetos entrados seran actualizados por Itemstats.';

$lang['updi_active'] 					   							= 'activado';
$lang['updi_inactive']    										= 'desactivado';

$lang['fontcolor']    			  = 'Color fuente';
$lang['Warrior']    					= 'Guerrero';
$lang['Rogue']    						= 'P�caro';
$lang['Hunter']    						= 'Cazador';
$lang['Paladin']    					= 'Paladin';
$lang['Priest']    						= 'Sacerdote';
$lang['Druid']    						= 'Druida';
$lang['Shaman']    						= 'Chaman';
$lang['Warlock']    					= 'Brujo';
$lang['Mage']    							= 'Mago';

# Reset DB Feature
$lang['reset_header']    			= 'Resetear datos de la web';
$lang['reset_infotext']  			= '���Peligro!!! ��Si borra los datos no podr�n recuperarse!!! Realice una copia de seguridad primero. Para confirmar la acci�n, escriba DELETE en el campo.';
$lang['reset_type']    				= 'Tipo de datos';
$lang['reset_disc']    				= 'Descripci�n';
$lang['reset_sec']    				= 'Certificado';
$lang['reset_action']    			= 'Acci�n';

$lang['reset_news']					  = 'Noticias';
$lang['reset_news_disc']		  = 'Eliminar todas las noticias de la base de datos.';
$lang['reset_dkp'] 					  = 'DKP';
$lang['reset_dkp_disc']			  = 'Eliminar todas las bandas y objetos de la base de datos y reiniciar todos los puntos DKP a cero.';
$lang['reset_ALL']   					= 'Todos';
$lang['reset_ALL_DISC']				= 'Eliminar todas las bandas, objetos y miembros. Reiniciar datos por completo. (No borra a los usuarios).';

$lang['reset_confirm_text']	  = 'aqu� (DELETE) =>';
$lang['reset_confirm']			  = 'Escribir';

// Armory Menu
$lang['lm_armorylink1']				= 'Armer�a';
$lang['lm_armorylink2']				= 'Talentos';
$lang['lm_armorylink3']				= 'Hermandad';

$lang['updi_update_ready']			= 'Los objetos se han actualizado. Puede <a href="#" onclick="javascript:parent.closeWindow()" >cerrar</a> esta ventana.';
$lang['updi_update_alternative']= 'M�todo de actualizaci�n alternativo para evitar intervalos de espera.';
$lang['zero_sum']				= 'Activar Zero SUM DKP';

//Hybrid
$lang['Hybrid']				= 'H�brido';

$lang['Jump_to'] 				= 'ver el v�deo en ';
$lang['News_vid_help'] 			= 'Para a�adir v�deos ponga el enlace al video sin [etiquetas]. Se soportan los siguientes sitios: google video, youtube, myvideo, clipfish, sevenload, metacafe y streetfire. ';

$lang['SubmitNews'] 		   = 'Enviar noticias';
$lang['SubmitNews_help'] 	   = '�Tiene una buena noticia? Presente la noticia y comp�rtala con todos los Usuarios de EQDKP Plus.';

$lang['MM_User_Confirm']	   = 'Seleccione su cuenta de admin? Si usted sume permisos de admin, esto solo se podra restarurar en la base de datos';

$lang['beta_warning']	   	   = 'Advertencia, esta version beta de eqdkp-plus no debe utilizarse en un sistema online! Esta version dejara de funciona si una version estable esta disponible. Compruebe <a href="http://www.eqdkp-plus.com" >www.eqdkp-plus.com</a> para actualizaciones!';

$lang['news_comment']        = 'Comentario';
$lang['news_comments']       = 'Comentarios';
$lang['comments_no_comments']	   = 'No hay entradas';
$lang['comments_comments_raid']	   = 'Comentarios';
$lang['comments_write_comment']	   = 'escribe un comentario';
$lang['comments_send_comment']	   = 'guardar comentario';
$lang['comments_save_wait']	   	   = 'Por favor espere, guardando comentario...';

$lang['news_nocomments'] 	 		    = 'Desactivar comentarios';
$lang['news_readmore_button']  			  	= 'Extender noticia';
$lang['news_readmore_button_help']  			  	= 'Se usa para extender la noticia con un bot�n LEER MAS, click aqu�:';
$lang['news_message'] 				  	= 'Texto de la noticia';
$lang['news_permissions']			  	= 'Permisos';

$lang['news_permissions_text']			= 'La noticia no se muestra para';
$lang['news_permissions_guest']			= 'Invitado';
$lang['news_permissions_member']		= 'Invitado y miembros (s�lo Admins podr�n)';
$lang['news_permissions_all']			= 'Libre para todos';
$lang['news_readmore'] 				  	= 'Leer m�s...';

$lang['recruitment_open']				= 'Reclutamiento abierto';
$lang['recruitment_contact']			= 'contactar';

$lang['sig_conf']						= 'Haga click en la imagen para obtener el c�digo BB';
$lang['sig_show']						= 'mostrar firma de WoW de su foro';

//Shirtshop
$lang['service']					    = 'Firmas';
$lang['shirt_ad1']					    = 'Vaya al taller de firmas. <br> Obtenga su Firma ahora!';
$lang['shirt_ad2']					    = 'Elija su jugador';
$lang['shirt_ad3']					    = 'Bienvenido a su taller de hermandad ';
$lang['shirt_ad4']					    = 'Elija una de los productos o haga su propia Firma con nuestro creador.<br>
										   Puede personalizar cada Firma y cada cambio de letra.<br>
										   En la pesta�a "Motivos" encontrar� todos los motivos';
$lang['error_iframe']					= "Tu navegador no soporta frames!";
$lang['new_window']						= 'Abrir taller en nueva ventana';
$lang['your_name']						= 'TU NOMBRE';
$lang['your_guild']						= 'TU HERMANDAD';
$lang['your_server']					= 'TU SERVIDOR';

//Last Raids
$lang['last_raids']					    = 'Ultimas bandas';

$lang['voice_error']				    = 'No hay conexi�n con el servidor.';

$lang['login_bridge_notice']		    = 'Incio de sesion - CMS-Puente esta activo. Use su datos CMS/Board para entrar al sistema.';

$lang['ads_remove']		    			= 'soporte EQdkp-Plus';
$lang['ads_header']	    				= 'Soporte EQdkp-Plus';
$lang['ads_text']		    			= 'EQDKP-Plus es un proyecto/afici�n que fue principalmente desarrollado y es actualizado por dos personas privadas.
											Al principio esto no era un problema, pero despu�s de tres a�os de programaci�n constante y actualizaci�n,
											los gastos para esto crecen demasiado r�pidos para manejarlos nosotros. S�lo para el revelador y el servidor de la actualizaci�n tenemos
												que gastar 600� por a�o ahora y tambi�n hay otros 1000� de gastos para un abogado, ya que se han producido
											algunos problem�s jur�dicos no hace mucho. Para el futuro tambi�n hemos planeado muchas m�s caracter�sticas basadas en el servidor
											por lo que har� falta otro servidor. A�adir los gastos para nuestro nuevo foro y el dise�ador de nuestra nueva p�gina de inicio.
											Todos estos gastos citados m�s nuestro tiempo de trabajo cada vez m�s invertido no podemos costearlos m�s.
											Por esta raz�n y no queriendo dejar el proyecto, ver� algunos anuncios en EQDKP-Plus.
											Estos banners son muy limitados para el contenido, no ver� ning�n cartel pornogr�fico o vendedores oro/objetos/leveling.

											Tiene opciones para desactivar estos anuncios:
										  <ol>
										  <li> Inicie sesion en <a href="http://www.eqdkp-plus.com">www.eqdkp-plus.com</a> y done la cantidad que desee.
										  		Por favor piense en cuanto vale EQDKP-Plus para usted.
										  		Despu�s de una donaci�n (Amazon o Paypal) recibir� un email con un serial-key para su
										  		respectiva version o una version superior (e.g. 0.6 o 0.7).<br><br></li>
										  <li> Inicie sesion en <a href="http://www.eqdkp-plus.com">www.eqdkp-plus.com</a> y done cualquier cantidad superior a 50�.
										  		De esta manera conseguir� una cuenta Premium, por lo que puede optar a
										  		libres actualizaciones a nuevas versiones. </li><br><br>
										  <li> Inicie sesi�n en <a href="http://www.eqdkp-plus.com">www.eqdkp-plus.com</a> y donando cualquier cantidad superior 100�.
										  		Ganar� el estado de oro y conseguir� una cuenta premium,
										  		por lo que optara gratis a nuevas actualizaciones y nuevas versiones + soporte personal
										  		de los desarrolladores de EQDKP-Plus.<br><br></li>
										  <li> Todos los desarroladores y los traductores que alguna vez contribuyeron a EQDKP-Plus tambi�n consiguen un serial key libre.<br><br></li>
										  <li> Los probadores de la beta comprometidos tambi�n consiguen un serial key libre. <br><br></li>
										  </ol>
										 Todo el dinero generado con anuncios y donaciones se usar�n �nicamente para pagar los gastos que ocasionan el proyecto EQDKP-Plus.
										 �EQDKP-Plus es un proyecto no lucrativo!  �No tienes una cuenta de Paypal o Amazon o tienes problemas con la clave? Escr�beme un <a href=mailto:corgan@eqdkp-plus.com>Email</a>.
										  ';


$lang['talents'] = array(
'Paladin'   	=> array('Sagrado','Proteccion','Retribuci�n'),
'Picaro'     	=> array('Asesinato','Combate','Sutileza'),
'Guerrero'   	=> array('Arm�s','Furia','Protecci�n'),
'Cazador'    	=> array('Bestias','Punter�a','Supervivencia'),
'Sacerdote'    	=> array('Disciplina','Sagrado','Sombras'),
'Brujo'  		=> array('Afflicci�n','Demonolog�a','Destrucci�n'),
'Druida'     	=> array('Equilibrio','Combate Feral','Restauraci�n'),
'Mago'      	=> array('Arcano','Fuego','Escarcha'),
'Chaman'    	=> array('Elemental','Mejora','Restauraci�n'),
'Caballero de la Muerte'   => array('Sangre','Escarcha','Profano')
);

$lang['portalmanager'] = 'Gestionar modulos del Portal';

$lang['air_img_resize_warning'] = 'Haga click en esta barra para ver la imagen completa. La original es %1$sx%2$s.';

$lang['guild_shop'] = 'Tienda';

// LibLoader Language String
$lang['libloader_notfound'] = 'La biblioteca del Cargador de Clase no est� disponible. Por favor compruebe si la carpeta "eqdkp/libraries/" esta� correctamente subida!<br/> Descarga: <a href="https://sourceforge.net/project/showfiles.php?group_id=167016&package_id=301378">Descargar Librer�as</a>';
$lang['libloader_tooold']   = "La Librer�a est� obsoleta. Tiene que subir la versi�n %1\$s o superior.<br/> Descarga: <a href='%2\$s' target='blank'>Descargar Librer�as</a><br/>Por favor descargue, y sobreescriba la carpeta existente 'eqdkp/libraries/' con la que ha descargado";
$lang['libloader_tooold_plug']  = "El m�dulo de la libreria '%1\$s' est� obsoleto. Se requiere un versi�n %2\$s o superior.
                                  Estas se incluyen en las librerias %4\$s o superior. Su versi�n de las librerias es %5\$s<br/>
                                  Descargar: <a href='%3\$s' target='blank'>Librer�as</a><br/>
                                  Por favor, desc�rguelas y sobrescriba las existentes en la carpeta 'eqdkp/libraries/' por las que acaba de descagar";

$lang['more_plugins']   = "Para obtener m�s plugins visita <a href=http://www.eqdkp-plus.com/download.php>www.eqdkp-plus.com</a>.";
$lang['more_moduls']   = "Para obtener m�s m�dulos visita <a href=http://www.eqdkp-plus.com/download.php>www.eqdkp-plus.com</a>.";
$lang['more_template']   = "Para obtener m�s plantillas visita <a href=http://www.eqdkp-plus.com/download.php>www.eqdkp-plus.com</a>";

// jQuery
$lang['cl_bttn_ok']      = 'Aceptar';
$lang['cl_bttn_cancel']  = 'Cancelar';

// Update Available
$lang['upd_available_head']    = 'Actualizacion de sistema disponible';
$lang['upd_available_txt']     = '� Advertencia ! El Sistema no est� actualizado. Hay actualizaciones disponibles.';
$lang['upd_available_link']    = 'Click para mostrar actualizaciones.';

$lang['menu_roster'] = 'Lista por clases';


$lang['adduser_first_name'] = 'Nombre';
$lang['adduser_last_name'] = 'Apellido';
$lang['adduser_addinfos'] = 'Informaci�n de perfil';
$lang['adduser_country'] = 'Pa�s';
$lang['adduser_town'] = 'Ciudad';
$lang['adduser_state'] = 'Provincia';
$lang['adduser_ZIP_code'] = 'C�digo Postal';
$lang['adduser_phone'] = 'Tel�fono';
$lang['adduser_cellphone'] = 'Tel�fono M�vil';
$lang['adduser_foneinfo'] = 'Los n�meros de tel�fono ser�n guardados an�nimamente y s�lo los administradores podr�n verlos. Con el n�mero del tel�fono m�vil, puede enviar mensajes de texto an�nimamente, p.ej en caso de nuevos acontecimientos de bandas canceladas.';
$lang['adduser_address'] = 'Calle';
$lang['adduser_allvatar_nick'] = 'Nick de Allvatar';
$lang['adduser_icq'] = 'ICQ';
$lang['adduser_skype'] = 'Skype';
$lang['adduser_msn'] = 'MSN';
$lang['adduser_irq'] = 'IRC Servidor y Canal';
$lang['adduser_gender'] = 'G�nero';
$lang['adduser_birthday'] = 'Cumplea�os';
$lang['adduser_gender_m'] = 'Hombre';
$lang['adduser_gender_f'] = 'Mujer';
$lang['fv_required'] = 'Campo requerido';
$lang['lib_cache_notwriteable'] = 'La carpeta "eqdkp/data" no se puede escribir. Por favor, ponga permisos chmod 777';
$lang['pcache_safemode_error']  = 'Modo a prueba de errores activo. EQDKP-PLUS no funciona as�, no puede escribir en la carpeta cache en modo a prueba de errores.';

// Ajax Image Uploader
$lang['aiupload_wrong_format']  = "Las dimensiones de la imagen est� fuera de los l�mites (valores m�ximos: %1\$spx x %2\$spx).<br/>Por favor cambie el tama�o a la imagen.";
$lang['aiupload_wrong_type']    = 'Tipo de archivo inv�lido. S�lo archivos de imagen (*.jpg, *.gif, *.png) est�n permitidas.';
$lang['aiupload_upload_again']  = 'S�balo de nuevo';

//Sticky news
$lang['sticky_news_prefix'] = '';
$lang['news_sticky'] = 'Hacerlo Fijo?';

$lang['menu_eqdkp'] = 'Men�';
$lang['menu_user'] = 'Men� de usuario';

//Usersettings
$lang['user_list'] = 'Lista de usuarios';
$lang['user_priv'] = 'Configuraci�n de privacidad';
$lang['user_priv_set_global'] = '�Qui�n deber�a poder ver datos del perfil como cuenta Skype, ICQ...?';
$lang['user_priv_set'] = 'Visible para ';
$lang['user_priv_all'] = 'todos';
$lang['user_priv_user'] = 'usuarios registrados';
$lang['user_priv_admin'] = 's�lo administradores';
$lang['user_priv_rl'] = 'planificadores de banda';
$lang['user_priv_no'] = 'Nadie';
$lang['user_priv_tel_all'] = '�Deber�an estar los n�meros de tel�fono visibles para todos en vez de s�lo para administradores? ';
$lang['user_priv_tel_cript'] = '�Deber�an estar los n�meros de tel�fono invisibles para todos incluso para administradores? (aun es posible enviar SMS) ';
$lang['user_priv_tel_sms'] = 'Deshabilitar los SMS de los administradores (no llegar� ninguna invitaci�n a bandas por SMS)';

// Image & BBCode Handling
$lang['images_not_available']	= 'La imagen embebida no est� disponible por el momento';
$lang['images_not_available_admin']	= '<b>No se puede revisar la imagen embebida</b><br/>Hay varias razones por las que esto puede ocurrir:<br/>- Las im�genes din�micas generadas est�n desactivadas por motivos de seguridad<br/>- conexiones externas bloqueadas: Prueba rutas en vez de URL';
$lang['images_userposted']		= 'User Posted Image';


//SMS
$lang['sms_header'] = 'Enviar mensaje';
$lang['sms_header'] = 'Enviar mensaje de texto/SMS';
$lang['sms_info'] = 'Enviar mensaje de texto/SMS a los usuarios, p.ej. cuando una banda se cancela o necesitas jugadores extras';
$lang['sms_info_account'] = "�Aun no tienes una cuenta de mensajes/SMS? Cons�guela ahora.";
$lang['sms_info_account_link'] = '<a href=http://www.eqdkp-plus.com target=_blank> --> Enlace</a>';
$lang['sms_send_info'] = 'Para poder mandar mensajes de texto/SMS, tiene que seleccionar al menos un usuario con un n�mero de m�vil v�lido e introducir un texto.';
$lang['sms_success'] = 'Mensaje de texto enviado al servidor-SMS. Puede tardar unos pocos minutos hasta que los mensajes se env�en.';
$lang['sms_error'] = 'Ocurri� un error al enviar el mensaje de texto.';
$lang['sms_error_badpw'] = 'Ocurri� un error al enviar el mensaje de texto. Usuario o contrase�a incorrecto.';
$lang['sms_error_bad'] = 'Ocurri� un error al enviar el mensaje de texto. No dispone de cr�dito para mensajes en su cuenta.';
$lang['sms_error_fopen'] = "Ocurri� un error al enviar el mensaje de texto. El servidor no pudo establecer una conexi�n fopen con el transmisor de SMS. Puede que el servidor no est� disponible o que tu servidor no acepte conexiones Fopen. En este �ltimo caso contacte con su administrador/proveedor de servicios. (�No contacte con el equipo de EQdkpPlus!)";
$lang['sms_error_159'] = 'Ocurri� un error al enviar el mensaje de texto. ID de Servicio desconocido.';
$lang['sms_error_160'] = 'Ocurri� un error al enviar el mensaje de texto. Mensaje no encontrado';
$lang['sms_error_200'] = 'Ocurri� un error al enviar el mensaje de texto. Error cr�tico /Script XML incompleto';
$lang['sms_error_254'] = 'Ocurri� un error al enviar el mensaje de texto. �El mensaje fue borrado!';

// Libraries
$lang = array_merge($lang, array(
    'cl_shortlangtag'           => 'es',

  // Update Check
  'cl_ucpdate_box'            => 'Nueva versi�n disponible',
  'cl_changelog_url'          => 'Changelog',
  'cl_timeformat'             => 'd/m/Y',
  'cl_noserver'               => 'Se ha producido un error al intentar ponerse en contacto con el servidor de actualizaci�n, ya sea que su servidor no permite conexiones salientes
                                  o el error fue causado por un problema de red..
                                  Por favor visite el foro de plugins en la web de EQdkp plus para asegurarse de que est� ejecutando la �ltima versi�n de plugin.',
  'cl_update_available'       => "Por favor, actualice el Plugin <i>%1\$s</i> .
                                  Su versi�n actual es <b>%2\$s</b> y la ultima versi�n es <b>%3\$s (Publicado en: %4\$s)</b>.<br/><br/>
                                  [fecha: %5\$s]%6\$s%7\$s",
  'cl_update_url'             => 'A la p�gina de descarga',

  // Plugin Updater
  'cl_update_box'             => 'Actualizaci�n de la base de datos necesaria',
  'cl_upd_wversion'           => "La actual base de datos ( Versi�n %1\$s ) no se ajusta a la versi�n instalada del plugin %2\$s.
                                  Por favor, utilice el bot�n de 'Actualizar base de datos' para realizar las actualizaciones autom�ticamente.",
  'cl_upd_woversion'          => 'Se encontr� una instalaci�n anterior. Los datos de la versi�n fallan.
                                  Por favor, elija la anterior versi�n instalada de la lista desplegable, para realizar todos los cambios en la base de datos.',
  'cl_upd_bttn'               => 'Actualizar base de datos',
  'cl_upd_no_file'            => 'El archivo de actualizaci�n falla',
  'cl_upd_glob_error'         => 'Se ha producido un error durante el proceso de actualizaci�n.',
  'cl_upd_ok'                 => 'La actualizaci�n de la base de datos se ha realizado correctamente.',
  'cl_upd_step'               => 'Paso',
  'cl_upd_step_ok'            => 'Conseguido',
  'cl_upd_step_false'         => 'Fallado',
  'cl_upd_reload_txt'         => 'Recargando ajustes, por favor espere...',
  'cl_upd_pls_choose'         => 'Por favor, elija...',
  'cl_upd_prev_version'       => 'Versi�n anterior',

  // HTML Class
  'cl_on'                     => 'On',
  'cl_off'                    => 'Off',

  // ReCaptcha Library
	'lib_captcha_head'					=> 'c�digo de confirmaci�n',
	'lib_captcha_insertword'		=> 'Introduzca las palabras escritas abajo',
	'lib_captcha_insertnumbers' => 'Introduzca los n�meros hablados',
	'lib_captcha_send'					=> 'Enviar c�digo de confirmaci�n',

	'lib_starrating_cancel'			=> 'Cancelar votos',

	// RSS Feeder
	'lib_rss_readmore'          => 'Leer m�s',
	'lib_rss_loading'           => 'El feed est� cargando ...',
	'lib_rss_error'             => 'Error al solicitar p�gina',
));

#$lang['']    								  = '';
?>