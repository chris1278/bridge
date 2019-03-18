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
	'ERROR_BRIDGE_EXTENSION_NOT_ENABLEABLE'		=> 'Die Erweiterung “%1$s - Brücke zwischen"LF Wer War Da" und "[3.1] [3.2] Stat BLock" Extension kann nicht aktiviert werden. Bitte prüfen Sie die Voraussetzungen, die für die Erweiterung notwendig sind.',
	'ERROR_WHO_WAS_HERE_NOT_INSTALLED'			=> '<br>Die Erweiterung <a href="https://github.com/LukeWCS/lf-who-was-here/releases" target="_blank">“%2$s”</a> muss zuerst installiert sein.<br> Bitte achten Sie darauf das Sie die Richtige Version installiert haben.',
	'WRONG_VERSION'								=> 'Die Version der Bridge, die Sie Installieren möchten (Version 1.x.x) , ist nicht kompatibel mit "LF who was here" ab der Version 2.x.x. Bitte installieren Sie dazu die Bridge ab Version 2.0.0. <br><br>xyx',
	'ERROR_PHPBB_WRONG_VERSION'					=> '<br>Bitte Prüfen Sie ob Sie die Richtige Version des Phpbb-Forums Installiert hast. Mindestens Version ab 3.2.x Am besten die Aktuellste',
	'ERROR_WHO_WAS_HERE_WRONG_VERSION'			=> '<br>Für die Erweiterung <strong>Brücke zwischen "LF who was here" und "Stat BLock"</strong> ab Version ab 1.2.0 ist die Erweiterung <strong>"LF who was here"</strong> ab Version 1.5.0 notwendig.<br> Es wird empfohlen immer die aktuelle Versionen von beiden Erweiterungen zu Installieren.<br><br>Laden Sie die aktuelle Version hier runter:  <a href="https://github.com/LukeWCS/lf-who-was-here/releases/" target="_blank">“LF who was here?”</a>.',
));
