<?php


namespace chris1278\bridge;


class ext extends \phpbb\extension\base
{

	public function is_enableable()
	{
		$is_enableable = true;

		$user = $this->container->get('user');
		$user->add_lang_ext('chris1278/bridge', 'bridge');
		$lang = $user->lang;
/** In der folgenden  Zeile die aktuelle phpbb Version die genutzt werdenn mus*/
		if (!( (phpbb_version_compare(PHPBB_VERSION, '3.2.0', '>=') )) ) 
		{
			$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('ERROR_MSG_3112_MISTMATCH');
			$is_enableable = false;
		}

		
		$ext_manager = $this->container->get('ext.manager');
		

		
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
/** In der folgenden  Zeile die mindestanforderung an lf wwh Version*/
			$version = phpbb_version_compare($clean_required, '1.5.0', '>=');
		}

		/* Wrong VERSION? No party! */
		if ( !($version))
		{
			$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('ERROR_WHO_WAS_HERE_WRONG_VERSION');
			$is_enableable = false;
		}
	}

		$user->lang = $lang;

		return $is_enableable;
	}
}
