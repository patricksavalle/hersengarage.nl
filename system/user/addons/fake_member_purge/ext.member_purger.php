<?php

class Ext_member_purger
{
	public function __construct()
	{
		$this->version = ee('Addon')->get('fake_member_purger')->getVersion();
	}

	public function activate_extension()
	{
		$hooks = array(
			'after_member_insert' => 'purge_members'
		);

		foreach ($hooks as $hook => $method)
		{
			ee('Model')->make('Extension', [
				'class'    => __CLASS__,
				'method'   => $method,
				'hook'     => $hook,
				'settings' => [],
				'version'  => $this->version,
				'enabled'  => 'y'
			])->save();
		}
	}

	function purge_members(string $tag)
	{
		$sql = "UPDATE exp_members
			SET group_id = (select group_id FROM exp_member_groups WHERE group_title='Banned')
			WHERE
			(FROM_UNIXTIME(join_date) < DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 WEEK) AND last_visit=last_activity)
            AND total_comments=0 AND total_entries=0";
		ee()->db->query($sql);
	}

}

// EOF
