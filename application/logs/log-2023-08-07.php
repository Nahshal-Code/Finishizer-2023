<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-07 19:16:49 --> Severity: Notice --> Undefined variable: bid C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\admin\Leads.php 1190
ERROR - 2023-08-07 19:16:49 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\finishizer_erp3.0.5\application\models\Staff_model.php 348
ERROR - 2023-08-07 19:16:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IS NULL
ORDER BY `firstname` DESC' at line 4 - Invalid query: SELECT *, CONCAT(firstname, ' ', lastname) as full_name
FROM `tblstaff`
WHERE `active` = 1
AND  IS NULL
ORDER BY `firstname` DESC
ERROR - 2023-08-07 19:17:34 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\finishizer_erp3.0.5\application\models\Staff_model.php 348
ERROR - 2023-08-07 19:17:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IS NULL
ORDER BY `firstname` DESC' at line 4 - Invalid query: SELECT *, CONCAT(firstname, ' ', lastname) as full_name
FROM `tblstaff`
WHERE `active` = 1
AND  IS NULL
ORDER BY `firstname` DESC
ERROR - 2023-08-07 19:17:52 --> Query error: Unknown column 'branch' in 'where clause' - Invalid query: SELECT *, CONCAT(firstname, ' ', lastname) as full_name
FROM `tblstaff`
WHERE `active` = 1
AND `active` = 1
AND `is_not_staff` = 0
AND `branch` = '2'
ORDER BY `firstname` DESC
ERROR - 2023-08-07 19:22:00 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\system\database\DB_query_builder.php 2443
ERROR - 2023-08-07 19:22:00 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *, CONCAT(firstname, ' ', lastname) as full_name
FROM `tblstaff`
WHERE `active` = 1
AND `active` = 1
AND `is_not_staff` = 0
AND `branch_id` = Array
ORDER BY `firstname` DESC
ERROR - 2023-08-07 21:47:02 --> Could not find the language line "branch"
ERROR - 2023-08-07 21:47:02 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\system\database\DB_driver.php 1472
ERROR - 2023-08-07 21:47:02 --> Query error: Table 'finishizer_erp.tblmytable' doesn't exist - Invalid query: INSERT INTO `tblmytable` (`id`, `active`, `check_every`, `responsible`, `lead_source`, `lead_status`, `encryption`, `folder`, `notify_lead_imported`, `notify_lead_contact_more_times`, `notify_type`, `mark_public`, `only_loop_on_unseen_emails`, `delete_after_import`, `create_task_if_customer`) VALUES (Array, '0', '10', '0', '0', '0', 'tls', 'INBOX', '1', '1', 'assigned', '0', '1', '0', '1')
ERROR - 2023-08-07 21:48:29 --> Could not find the language line "branch"
ERROR - 2023-08-07 21:48:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\system\database\DB_driver.php 1472
ERROR - 2023-08-07 21:48:29 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `tblleads_email_integration` (`id`, `active`, `check_every`, `responsible`, `lead_source`, `lead_status`, `encryption`, `folder`, `notify_lead_imported`, `notify_lead_contact_more_times`, `notify_type`, `mark_public`, `only_loop_on_unseen_emails`, `delete_after_import`, `create_task_if_customer`) VALUES (Array, '0', '10', '0', '0', '0', 'tls', 'INBOX', '1', '1', 'assigned', '0', '1', '0', '1')
ERROR - 2023-08-07 21:49:37 --> Could not find the language line "branch"
ERROR - 2023-08-07 21:49:37 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\system\database\DB_driver.php 1472
ERROR - 2023-08-07 21:49:37 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `tblleads_email_integration` (`id`, `active`, `check_every`, `responsible`, `lead_source`, `lead_status`, `encryption`, `folder`, `notify_lead_imported`, `notify_lead_contact_more_times`, `notify_type`, `mark_public`, `only_loop_on_unseen_emails`, `delete_after_import`, `create_task_if_customer`) VALUES (Array, '0', '10', '0', '0', '0', 'tls', 'INBOX', '1', '1', 'assigned', '0', '1', '0', '1')
ERROR - 2023-08-07 21:52:39 --> Could not find the language line "branch"
ERROR - 2023-08-07 21:52:39 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\system\database\DB_driver.php 1472
ERROR - 2023-08-07 21:52:39 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `tblleads_email_integration` (`id`, `active`, `check_every`, `responsible`, `lead_source`, `lead_status`, `encryption`, `folder`, `notify_lead_imported`, `notify_lead_contact_more_times`, `notify_type`, `mark_public`, `only_loop_on_unseen_emails`, `delete_after_import`, `create_task_if_customer`) VALUES (Array, '0', '10', '0', '0', '0', 'tls', 'INBOX', '1', '1', 'assigned', '0', '1', '0', '1')
ERROR - 2023-08-07 22:13:22 --> Could not find the language line "branch"
ERROR - 2023-08-07 22:21:22 --> Could not find the language line "branch"
ERROR - 2023-08-07 22:55:35 --> Could not find the language line "features"
ERROR - 2023-08-07 22:56:00 --> Could not find the language line "features"
