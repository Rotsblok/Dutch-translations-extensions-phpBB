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
	'SO_SELECT'				=> 'Deel op',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Deel op Facebook',
	'SHARE_ON_TWITTER'		=> 'Deel op Twitter',
	'SHARE_ON_TUENTI'		=> 'Deel op Tuenti',
	'SHARE_ON_SONICO'		=> 'Deel op Sonico',
	'SHARE_ON_FRIENDFEED'	=> 'Deel op FriendFeed',
	'SHARE_ON_DIGG'			=> 'Deel op Digg',
	'SHARE_ON_REDDIT'		=> 'Deel op Reddit',
	'SHARE_ON_DELICIOUS'	=> 'Deel op Delicious',
	'SHARE_ON_VK'			=> 'Deel op VK',
	'SHARE_ON_TUMBLR'		=> 'Deel op Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Deel op Google+',
));