<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-15 21:58:51 --> Query error: Unknown column 'branch_id' in 'where clause' - Invalid query: SELECT `tblcontacts`.`id`, `tblcontacts`.`userid`, `tblcontacts`.`is_primary`, `tblcontacts`.`firstname`, `tblcontacts`.`lastname`, `tblcontacts`.`email`, `tblcontacts`.`phonenumber`, `tblcontacts`.`title`, `tblcontacts`.`datecreated`, `tblcontacts`.`password`, `tblcontacts`.`new_pass_key`, `tblcontacts`.`new_pass_key_requested`, `tblcontacts`.`email_verified_at`, `tblcontacts`.`email_verification_key`, `tblcontacts`.`email_verification_sent_at`, `tblcontacts`.`last_ip`, `tblcontacts`.`last_login`, `tblcontacts`.`last_password_change`, `tblcontacts`.`active`, `tblcontacts`.`profile_image`, `tblcontacts`.`direction`, `tblcontacts`.`invoice_emails`, `tblcontacts`.`estimate_emails`, `tblcontacts`.`credit_note_emails`, `tblcontacts`.`contract_emails`, `tblcontacts`.`task_emails`, `tblcontacts`.`project_emails`, `tblcontacts`.`ticket_emails`, `company`
FROM `tblcontacts`
LEFT JOIN `tblclients` ON `tblclients`.`userid`=`tblcontacts`.`userid`
WHERE (`firstname` LIKE "%t%" ESCAPE '!'
                OR `lastname` LIKE "%t%" ESCAPE '!'
                OR `email` LIKE "%t%" ESCAPE '!'
                OR CONCAT(firstname, ' ', lastname) LIKE "%t%" ESCAPE '!'
                OR CONCAT(lastname, ' ', firstname) LIKE "%t%" ESCAPE '!'
                OR `tblcontacts`.`phonenumber` LIKE "%t%" ESCAPE '!'
                OR `tblcontacts`.`title` LIKE "%t%" ESCAPE '!'
                OR `company` LIKE "%t%" ESCAPE '!')
AND `tblcontacts`.`active` = 1
AND `branch_id` = '1'
ORDER BY `firstname` ASC
ERROR - 2023-08-15 22:30:29 --> 404 Page Not Found: /index
ERROR - 2023-08-15 22:30:29 --> 404 Page Not Found: /index
ERROR - 2023-08-15 22:30:45 --> 404 Page Not Found: /index
ERROR - 2023-08-15 22:30:45 --> 404 Page Not Found: /index
ERROR - 2023-08-15 22:31:00 --> 404 Page Not Found: /index
ERROR - 2023-08-15 22:31:01 --> 404 Page Not Found: /index
