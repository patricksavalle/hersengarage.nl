<?php

class Activity_stream_ext
{
	public function __construct()
	{
		$this->version = ee('Addon')->get('hash_tag')->getVersion();
	}

	public function activate_extension()
	{
		$hooks = array(
			'after_channel_entry_create',
			'after_comment_insert',
			'core_boot',
			'after_member_insert',
		);

		foreach ($hooks as $hook)
		{
			ee('Model')->make('Extension', [
				'class'    => __CLASS__,
				'method'   => $hook,
				'hook'     => $hook,
				'settings' => [],
				'version'  => $this->version,
				'enabled'  => 'y'
			])->save();
		}
	}

	function disable_extension()
	{
		ee('Model')->get('Extension')
			->filter('class', __CLASS__)
			->delete();
	}

	function update_extension($current = '')
	{
		if ($current == '' OR $current == $this->version)
		{
			return FALSE;
		}
		return true;
	}

	function after_channel_entry_create()
	{

	}

	function after_comment_insert()
	{

	}

	function core_boot()
	{
		// log referer
		// log view

	}


}

// EOF
