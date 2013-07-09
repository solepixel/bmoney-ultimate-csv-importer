BMoney Ulimate CSV Importer
=================

~Current Version:2.7.1~

Actions
===========

### bmuci_before_init - occurs at start of init
* var: (object) $this
	
### bmuci_after_init - occurs at end of init
* var: (object) $this
	
### bmuci_before_import - occurs at start of import
* var: (object) $this

### bmuci_before_row_import - occurs before each row imports
* var: (array) $import_data
* var: (array) $row
* var: (object) $this
	
### bmuci_after_row_import - occurs before each row imports
* var: (int) $id
* var: (array) $row
* var: (object) $this
	
### bmuci_after_import - occurs at end of import
* var: (object) $this
	
### bmuci_custom_import - allows custom scripting on row data
* var: (object) $this
* var: (array) $row

### bmuci_debug_mode - enables debug mode
* var: (bool) $debug_mode

### bmuci_debug_counter - Number of rows to import during debug mode. This should be limited since the debug log can get very long.
* var: (int) $num_rows


Filters
===========

### bmuci_sample_data - changes number of sample rows $num_sample_rows displayed
* filter var: (int) $num_sample_rows
* default: 3
	
### bmuci_post_data - filters post $import_data before inserted into database
* filter var: (array) $import_data
* other vars: (array) $row, (object) $this
	
### bmuci_post_meta - filters post $import_data before inserted into database
* filter var: (array) $import_meta
* other vars: (int) $post_id, (array) $row, (object) $this
	
### bmuci_postmeta_value - filters post meta value $v before inserted/updated into database
* filter var: (string) $v
* other vars: (int) $post_id, (string) $k, (array) $row, (object) $this
	
### bmuci_user_import_data - filters user import data prior to validation
* filter var: (array) $import_data
* other vars: (array) $row, (object) $this
	
### bmuci_insert_user - filters initial $new_user data before inserting into database (user_login, user_pass, user_email, role)
* filter var: (array) $new_user
* other vars: (array) $row, (object) $this
	
### bmuci_user_data - filters other user $import_data before inserting into database
* filter var: (array) $import_data
* other vars: (array) $row, (object) $this
	
### bmuci_usermeta_value - filters user meta $v before inserting/updating into database
* filter var: (string) $v
* other vars: (int) $user_id, (string) $k, (array) $row, (object) $this

### bmuci_atttachment_directory - directory where attachments are stored
* filter var: (string) $directory
* other vars: (int) $post_id, (array) $row, (object) $this


Changelog
===========
### 2.7.1
* Fixed field name for scheduled imports

### 2.7
* Adding Auto-updater
* Adding taxonomies for posts
* Updated documentation
* New filters (bmuci_debug_mode and bmuci_debug_counter)
* Restructured to support tabbed interface.
* Logging functionality
* Various other fixes.

### 2.61
* Fixed compatibility issue with register_importer

### 2.6
* Added action for custom import scripting
* Minor bug fixes/clean up.

### 2.5
* Fixed a performance issue
* Added some documentation

### 2.4
* Cleaned up some of the unique field code.
* Added support for incremental imports
	
### 2.3
* Added Unique field support - still needs work
	
### 2.2
* Add cron and "remember last import" support
	
### 2.0
* Added support for users
	
### 1.0
* Initial build

If you found this plugin useful, please feel free to send me a gittip! http://gittip.com/solepixel/