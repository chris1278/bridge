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
	
	'ERROR_MSG_3112_MISTMATCH'				=> 'Bitte Prüfe ob du die Richtige Version des Phpbb-Forums Installiert hast. Mindestens Version ab 3.2.x Am besten die Aktuellste',
	'ERROR_WHO_WAS_HERE_WRONG_VERSION'		=> '<br>Für diese Bridge ab Version ab 1.2.0 ist die LF WWH Extension ab Version 1.5.0 notwendig, da mit vorherigen Versionoen nicht kompatibel ist. Es wird empfohlen immer die aktuelle Version von Bridge und wwh Extension zu Installieren.<br>
	
	Lade dir die aktuelle Version hier runter:  <a href="https://github.com/LukeWCS/lf-who-was-here/releases/" target="_blank">“Wer war da?”</a> Erweiterung installiert. Erforderlich >= Mindestens Version ab 1.5.0',
	
));
