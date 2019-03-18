<?php
/**
*
* @package phpBB Extension Bridge - Brücke zwischen den Extensions [3.1] [3.2] Stat BLock  und [3.1][3.2] LF who was here
* @copyright (c) 2019 (Christian-Esch.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ERROR_BRIDGE_EXTENSION_NOT_ENABLEABLE'		=> 'The extension “%1$s - Bridge between LF Wer War Da and Statblock Extension from kirk” can not be activated. Please check the prerequisites that are necessary for the extension.',
	'ERROR_WHO_WAS_HERE_NOT_INSTALLED'			=> '<br>The extension <a href="https://github.com/LukeWCS/lf-who-was-here/releases" target="_blank">“%2$s”</a> must be installed first.<br> Please make sure that you have the correct version installed.',
	'WRONG_VERSION'								=> 'The version of the bridge that you want to install (Version 1.x.x) , is not compatible with "LF who was here" from the version 2.x.x. Please install the bridge from version 2.0.0. <br><br>xyx',
	'ERROR_PHPBB_WRONG_VERSION'					=> '<br>Please check if you have the right version of the phpbb forum installed. At least version from 3.2.x Best the most recent',
	'ERROR_WHO_WAS_HERE_WRONG_VERSION'			=> '<br>For the extension <strong> Bridge between "LF who was here" and "Stat BLock" </strong> as of version 1.2.0 or higher, the extension <strong> "LF who was here" </strong> is from version 1.5.0 necessary. <br> It is always recommended to install the latest versions of both extensions. <br> <br> Download the latest version here: <a href = "https://github.com/LukeWCS/lf-who -what-here / releases / "target =" _ blank ">"LF who was here?"</a>.',
));
