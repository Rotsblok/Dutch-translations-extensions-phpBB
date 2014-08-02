<?php
/**
*
* Board Announcements extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BOARD_ANNOUNCEMENTS_SETTINGS'			=> 'Forumaankondigingen-instellingen',
	'BOARD_ANNOUNCEMENTS_SETTINGS_EXPLAIN'	=> 'Hier kan je een forumaankondiging beheren een aanmaken die weergegeven zal worden op iedere pagina van je forum.',

	'BOARD_ANNOUNCEMENTS_ENABLE'			=> 'Forumaankondiging inschakelen',
	'BOARD_ANNOUNCEMENTS_GUESTS'			=> 'Gasten toestaan om deze forumaankondiging te bekijken',

	'BOARD_ANNOUNCEMENTS_BGCOLOR'			=> 'Forumaankondiging achtergrondskleur',
	'BOARD_ANNOUNCEMENTS_BGCOLOR_EXPLAIN'	=> 'Je kan de achtergrondskleur van de aankondiging veranderen door gebruik te maken van een hex code (bijv.: FFFF80). Laat dit veld leeg om gebruik te maken van de standaardkleur.',

	'BOARD_ANNOUNCEMENTS_TEXT'				=> 'Forumaankondiging-bericht',
	'BOARD_ANNOUNCEMENTS_PREVIEW'			=> 'Forumaankondiging - Voorbeeld',

	'BOARD_ANNOUNCEMENTS_UPDATED'			=> 'Forumaankondiging is bijgewerkt.',

	// ACP Module
	'ACP_BOARD_ANNOUNCEMENTS'				=> 'Forumaankondigingen',
	'ACP_BOARD_ANNOUNCEMENTS_SETTINGS'		=> 'Aankondiging-instelling',
));
