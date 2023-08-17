<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-16 18:26:38 --> 404 Page Not Found: /index
ERROR - 2023-08-16 18:26:39 --> 404 Page Not Found: /index
ERROR - 2023-08-16 18:27:31 --> 404 Page Not Found: /index
ERROR - 2023-08-16 18:27:31 --> 404 Page Not Found: /index
ERROR - 2023-08-16 18:28:48 --> 404 Page Not Found: /index
ERROR - 2023-08-16 18:28:49 --> 404 Page Not Found: /index
ERROR - 2023-08-16 18:29:22 --> 404 Page Not Found: /index
ERROR - 2023-08-16 18:29:23 --> 404 Page Not Found: /index
ERROR - 2023-08-16 18:51:36 --> Severity: Notice --> Undefined variable: setup_menu C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-08-16 18:51:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-08-16 18:51:36 --> Severity: Notice --> Undefined variable: sidebar_menu C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\includes\aside.php 12
ERROR - 2023-08-16 18:51:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\includes\aside.php 12
ERROR - 2023-08-16 20:21:54 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: SELECT *
FROM `tblprojects`
JOIN `tblclients` ON `tblclients`.`userid` = `tblprojects`.`clientid`
WHERE (`company` LIKE "%t%" ESCAPE '!'
                OR `description` LIKE "%t%" ESCAPE '!'
                OR `name` LIKE "%t%" ESCAPE '!'
                OR `vat` LIKE "%t%" ESCAPE '!'
                OR `phonenumber` LIKE "%t%" ESCAPE '!'
                OR `city` LIKE "%t%" ESCAPE '!'
                OR `zip` LIKE "%t%" ESCAPE '!'
                OR `state` LIKE "%t%" ESCAPE '!'
                OR `zip` LIKE "%t%" ESCAPE '!'
                OR `address` LIKE "%t%" ESCAPE '!')
AND `branch_id` = '1'
ORDER BY `name` ASC
ERROR - 2023-08-16 20:22:02 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: SELECT *
FROM `tblprojects`
JOIN `tblclients` ON `tblclients`.`userid` = `tblprojects`.`clientid`
WHERE (`company` LIKE "%p%" ESCAPE '!'
                OR `description` LIKE "%p%" ESCAPE '!'
                OR `name` LIKE "%p%" ESCAPE '!'
                OR `vat` LIKE "%p%" ESCAPE '!'
                OR `phonenumber` LIKE "%p%" ESCAPE '!'
                OR `city` LIKE "%p%" ESCAPE '!'
                OR `zip` LIKE "%p%" ESCAPE '!'
                OR `state` LIKE "%p%" ESCAPE '!'
                OR `zip` LIKE "%p%" ESCAPE '!'
                OR `address` LIKE "%p%" ESCAPE '!')
AND `branch_id` = '1'
ORDER BY `name` ASC
ERROR - 2023-08-16 20:40:24 --> Severity: error --> Exception: Call to undefined function get_curent_branch() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 53
ERROR - 2023-08-16 20:41:26 --> Severity: error --> Exception: Call to undefined function get_curent_branch() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 53
ERROR - 2023-08-16 20:42:01 --> Severity: error --> Exception: Call to undefined function get_curent_branch() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 53
ERROR - 2023-08-16 20:43:01 --> Severity: error --> Exception: Call to undefined function get_curent_branch() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 53
ERROR - 2023-08-16 20:43:22 --> Severity: error --> Exception: Call to undefined function get_curent_branch() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 53
ERROR - 2023-08-16 20:43:27 --> Severity: error --> Exception: Call to undefined function get_curent_branch() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 53
ERROR - 2023-08-16 20:43:42 --> Severity: error --> Exception: Call to undefined function get_curent_branch() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 53
ERROR - 2023-08-16 20:43:46 --> Severity: error --> Exception: Call to undefined function get_curent_branch() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 53
ERROR - 2023-08-16 22:08:58 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
