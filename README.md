bmoney-ultimate-csv-importer
=================


Actions:

* bmuci_before_init - occurs at start of init
	* var: (object) $this
* bmuci_after_init - occurs at end of init
	* var: (object) $this
* bmuci_before_import - occurs at start of import
	* var: (object) $this
* bmuci_after_import - occurs at end of import
	* var: (object) $this

Filters:

* bmuci_sample_data - changes number of sample rows $num_sample_rows displayed
	* filter var: (int) $num_sample_rows
	* default: 3
	
* bmuci_post_data - filters post $import_data before inserted into database
	* filter var: (array) $import_data
	* other var: (array) $row
* bmuci_postmeta_value - filters post meta value $v before inserted/updated into database
	* filter var: (string) $v
	* other vars: (int) $post_id, (string) $k, (array) $row
	
* bmuci_user_import_data - filters user import data prior to validation
	* filter var: (array) $import_data
	* other var: (array) $row
* bmuci_insert_user - filters initial $new_user data before inserting into database (user_login, user_pass, user_email, role)
	* filter var: (array) $new_user
	* other vars: (array) $row
* bmuci_user_data - filters other user $import_data before inserting into database
	* filter var: (array) $import_data
	* other vars: (array) $row
* bmuci_usermeta_value - filters user meta $v before inserting/updating into database
	* filter var: (string) $v
	* other vars: (int) $user_id, (string) $k, (array) $row


changelog:
2.2
	- Add cron and "remember last import" support
2.0 
	- Added support for users
1.0
	- Initial build