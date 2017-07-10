<?php

global $db;
global $asterisk_conf;

$tables = array('digium_phones_general', 'digium_phones_devices', 'digium_phones_device_settings', 'digium_phones_lines', 'digium_phones_line_settings', 'digium_phones_phonebooks', 'digium_phones_phonebook_entries', 'digium_phones_device_phonebooks', 'digium_phones_alerts', 'digium_phones_customapp_settings', 'digium_phones_customapps', 'digium_phones_device_alerts', 'digium_phones_device_customapps', 'digium_phones_device_externallines', 'digium_phones_device_logos', 'digium_phones_device_networks', 'digium_phones_device_ringtones', 'digium_phones_device_statuses', 'digium_phones_extension_settings', 'digium_phones_externalline_settings', 'digium_phones_externallines', 'digium_phones_firmware', 'digium_phones_firmware_packages', 'digium_phones_logos', 'digium_phones_network_settings', 'digium_phones_networks', 'digium_phones_phonebook_entry_settings', 'digium_phones_queues', 'digium_phones_ringtones', 'digium_phones_status_entries', 'digium_phones_status_settings', 'digium_phones_statuses', 'digium_phones_voicemail_translations');
foreach ($tables as $table) {
	$sql = "DROP TABLE IF EXISTS {$table}";
	$result = $db->query($sql);
	if (DB::IsError($result)) {
		die_freepbx($result->getDebugInfo());
	}
	unset($result);
}

// end of file