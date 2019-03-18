<?php
/**
*
* @package phpBB Extension Bridge - Brücke zwischen den Extensions [3.1] [3.2] Stat BLock  und [3.1][3.2] LF who was here
* @copyright (c) 2019 (Christian-Esch.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\bruecke;


class ext extends \phpbb\extension\base
{

	public function is_enableable()
	{
		$is_enableable = true;

		$user = $this->container->get('user');
		$user->add_lang_ext('chris1278/bruecke', 'bridge');
		$lang = $user->lang;

		if (!( (phpbb_version_compare(PHPBB_VERSION, '3.2.0', '>=') )) ) 
		{
			$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('ERROR_PHPBB_WRONG_VERSION');
			$is_enableable = false;
		}

		
		$ext_manager = $this->container->get('ext.manager');
		if (!$ext_manager->is_enabled('bb3mobi/washere'))
		{
				$user->add_lang_ext('chris1278/bruecke', 'bridge');
				trigger_error(sprintf($lang['ERROR_BRIDGE_EXTENSION_NOT_ENABLEABLE'] . '<br />' . $user->lang('ERROR_WHO_WAS_HERE_NOT_INSTALLED'), 'Bridge', 'LF Who_Was_Here'). adm_back_link(append_sid('index.' . $this->container->getParameter('core.php_ext'), 'i=acp_extensions&amp;mode=main')), E_USER_WARNING);
		}
		
		$ext_name = 'lukewcs/whowashere';
		$display_name = $ext_name;
		if ($ext_manager->is_enabled('lukewcs/whowashere'))
		{
			$metadata_manager = $ext_manager->create_extension_metadata_manager('lukewcs/whowashere', $this->container->get('template'));

			$metadata = $metadata_manager->get_metadata($display_name);

			$required = $metadata['version'];

			$version = false;
			if ($required && isset($required))
			{
				$clean_required = html_entity_decode($required);
				$version = phpbb_version_compare($clean_required, '2.0.0-dev', '>=');
			}

			/* Wrong VERSION? No party! */
			if ( ($version))
			{
				$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('WRONG_VERSION');
				$is_enableable = false;
			}

			$user->lang = $lang;

			return $is_enableable;
		}
		
		$ext_name = 'bb3mobi/washere';
		$display_name = $ext_name;
		if ($ext_manager->is_available($ext_name))
		{
			$metadata_manager = $ext_manager->create_extension_metadata_manager('bb3mobi/washere', $this->container->get('template'));

			$metadata = $metadata_manager->get_metadata($display_name);

			$required = $metadata['version'];

			$version = false;
			if ($required && isset($required))
			{
				$clean_required = html_entity_decode($required);
				$version = phpbb_version_compare($clean_required, '1.5.0-dev', '>=');
			}

			/* Wrong VERSION? No party! */
			if ( !($version))
			{
				$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('ERROR_WHO_WAS_HERE_WRONG_VERSION');
				$is_enableable = false;
			}
			$user->lang = $lang;

			return $is_enableable;
		}
	}
}