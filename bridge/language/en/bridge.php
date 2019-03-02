<?php
/**
*
* @package Board3 Portal Who was here Module
* @copyright (c) 2015 Kirk <http://reyno41.bplaced.net/phpbb>
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

$lang = array_merge($lang, array(
	'ERROR_MSG_3112_MISTMATCH'				=> 'Please check if you have the right version of the phpbb forum installed. At least version from 3.2.x Best the most recent',
	'ERROR_WHO_WAS_HERE_WRONG_VERSION'		=> '<br>For this bridge from version 1.2.0 upwards, the LF WWH extension from version 1.5.0 is necessary, as it is not compatible with previous versions. It is recommended to always install the latest version of Bridge and wwh Extension.<br>
	
	Download the current version here: <a href="https://github.com/LukeWCS/lf-who-was-here/releases/" target="_blank">“Who was here?”</a> Extension installed. Required >= At least Version from 1.5.0',
));
