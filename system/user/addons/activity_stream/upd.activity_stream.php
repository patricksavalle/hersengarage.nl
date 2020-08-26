<?php /** @noinspection SqlResolve */

class Hash_tag_upd {

	var $version			= '0.1';

	function install()
	{
		ee()->db->query("INSERT INTO exp_modules (module_name, module_version, has_cp_backend)
				  VALUES ('Hash_tag', '$this->version', 'n')");

		ee()->db->query("CREATE TABLE IF NOT EXISTS exp_activity_stream (
			id INT UNSIGNED NOT NULL AUTO_INCREMENT,
			type CHAR(40) NOT NULL,
			url VARCHAR(250) NULL DEFAULT NULL,
			date_time DATETIME NOT NULL DEFAULT NOW(),
			PRIMARY KEY id (id)
		) DEFAULT CHARACTER SET ".ee()->db->escape_str(ee()->db->char_set)." COLLATE ".ee()->db->escape_str(ee()->db->dbcollat));

		return TRUE;
	}

	function uninstall()
	{
		$query = ee()->db->query("SELECT module_id FROM exp_modules WHERE module_name = 'Activity_stream'");

		ee()->db->query("DELETE FROM exp_module_member_groups WHERE module_id = '".$query->row('module_id') ."'");
		ee()->db->query("DELETE FROM exp_modules WHERE module_name = 'Activity_stream'");
		ee()->db->query("DELETE FROM exp_actions WHERE class = 'Activity_stream'");
		ee()->db->query("DROP TABLE IF EXISTS exp_activity_stream");

		ee()->config->_update_config('', []);

		return TRUE;
	}

	function update($current = '')
	{

	}
}

// EOF
