<?php
/**
*
* shareon [Dutch]
*
* @package language Share On
* @copyright (c) 2013 Vinny
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP
	'SO_ACP'		=> 'Deel op Extensie',
    'SO_TITLE'		=> 'Deel op Extensie-instellingen',
	'SO_EXPLAIN'	=> 'Configureer dit zo dat jij uitmaakt op welke sites je onderwerpen wilt delen.',	
	'SHARE_ON_MOD'	=> 'Deel op',
	'SO_CONFIG'		=> 'Instellingen',
	'SO_SELECT'		=> 'Deel op',
	'SO_VERSION_OLD'	=> 'Bestaande versie van de Extensie',
	'SO_VERSION_NEW'	=> 'Laatste versie van de Extensie',
	'SO_SAVED'		=> 'Veranderingen opgeslagen.',
	'SO_STATUS'		=> 'Deel op extensie inschakelen',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'Twitter',
	'SO_DIGG'		=> 'Digg',
	'SO_REDDIT'		=> 'Reddit',
	'SO_DELICIOUS' 	=> 'Delicious',
	'SO_VK'			=> 'VK',
	'SO_TUENTI'		=> 'Tuenti',
	'SO_SONICO'		=> 'Sonico',
	'SO_FRIENDFEED'	=> 'FriendFeed',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_GOOGLE'		=> 'Google+',

	// Share Type
	'SO_TYPE'			=> 'Deeltype',
	'SO_TYPE_EXPLAIN'	=> 'Je kan kiezen om de <strong>onderwerp</strong>-link te delen of ieder <strong>bericht</strong> van het onderwerp.',
));