<?php
/*
Plugin Name: BMoney Ultimate CSV Importer
Plugin URI: http://www.infomedia.com/
Description: Imports (almost) anything into WordPress.
Version: 2.3
Author: Brian DiChiara
Author URI: http://www.briandichiara.com


PLUGIN HOOKS:
	
Actions:

	bmuci_before_init - occurs at start of init
		var: (object) $this
	bmuci_after_init - occurs at end of init
		var: (object) $this
	bmuci_before_import - occurs at start of import
		var: (object) $this
	bmuci_after_import - occurs at end of import
		var: (object) $this

Filters:
	
	bmuci_customization_methods - custom column customization methods
		filter var: (array) $customization_methods
	
	bmuci_sample_data - changes number of sample rows $num_sample_rows displayed
		filter var: (int) $num_sample_rows
		default: 3
		
		
	bmuci_post_data - filters post $import_data before inserted into database
		filter var: (array) $import_data
		other var: (array) $row
	bmuci_postmeta_value - filters post meta value $v before inserted/updated into database
		filter var: (string) $v
		other vars: (int) $post_id, (string) $k, (array) $row
		
	bmuci_user_import_data - filters user import data prior to validation
		filter var: (array) $import_data
		other var: (array) $row
	bmuci_insert_user - filters initial $new_user data before inserting into database (user_login, user_pass, user_email, role)
		filter var: (array) $new_user
		other vars: (array) $row
	bmuci_user_data - filters other user $import_data before inserting into database
		filter var: (array) $import_data
		other vars: (array) $row
	bmuci_usermeta_value - filters user meta $v before inserting/updating into database
		filter var: (string) $v
		other vars: (int) $user_id, (string) $k, (array) $row
		
*/

define('BMUCI_VERSION', '2.3');
define('BMUCI_OPT_PREFIX', 'bmuci_');
define('BMUCI_PATH', plugin_dir_path( __FILE__ ));
define('BMUCI_DIR', plugin_dir_url( __FILE__ ));

require_once(BMUCI_PATH.'classes/bm-ultimate-csv-importer.class.php');

$bmuci_plugin = new BM_Ultimate_CSV_Importer();
$bmuci_plugin->initialize();