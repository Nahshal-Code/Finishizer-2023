<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-31 16:06:02 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date` ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority
    
    WHERE  branch_id=1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-07-31 16:15:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY t...' at line 5 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date` ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority
    
    WHERE  branch_id= AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-07-31 20:51:16 --> Could not find the language line "features"
ERROR - 2023-07-31 20:51:58 --> Could not find the language line "features"
ERROR - 2023-07-31 21:45:11 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\system\database\DB_query_builder.php 2443
ERROR - 2023-07-31 21:45:11 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `active` = 1
AND `branch_id` = Array
AND `fieldto` = 'items'
AND `add_edit_preview` = 1
ORDER BY `field_order` ASC
ERROR - 2023-07-31 21:46:51 --> Severity: error --> Exception: Too few arguments to function render_custom_fields(), 2 passed in C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\proposals\proposal.php on line 178 and at least 3 expected C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\custom_fields_helper.php 13
ERROR - 2023-07-31 21:47:23 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\system\database\DB_query_builder.php 2443
ERROR - 2023-07-31 21:47:23 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `active` = 1
AND `branch_id` = Array
AND `fieldto` = 'items'
AND `add_edit_preview` = 1
ORDER BY `field_order` ASC
ERROR - 2023-07-31 22:41:10 --> Severity: Warning --> Illegal string offset 'branch_id' C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\custom_fields_helper.php 31
ERROR - 2023-07-31 22:41:11 --> Severity: Notice --> Undefined index: branch_id C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\custom_fields_helper.php 31
ERROR - 2023-07-31 22:41:11 --> Query error: Unknown column 'add_edit_preview' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `active` = 1
AND `branch_id` IS NULL
AND `fieldto` = 'items'
AND `add_edit_preview` = 1
ORDER BY `field_order` ASC
ERROR - 2023-07-31 22:42:34 --> Query error: Unknown column 'add_edit_preview' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `active` = 1
AND `fieldto` = 'items'
AND `add_edit_preview` = 1
ORDER BY `field_order` ASC
ERROR - 2023-07-31 22:44:56 --> Severity: error --> Exception: Too few arguments to function render_custom_fields(), 4 passed in C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\custom_fields_helper.php on line 513 and exactly 5 expected C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\custom_fields_helper.php 13
ERROR - 2023-07-31 22:49:18 --> Severity: error --> Exception: Too few arguments to function render_custom_fields(), 3 passed in C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\proposals\proposal.php on line 178 and exactly 5 expected C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\custom_fields_helper.php 12
ERROR - 2023-07-31 23:05:42 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\custom_fields_helper.php 31
ERROR - 2023-07-31 23:05:42 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\custom_fields_helper.php 31
ERROR - 2023-07-31 23:05:42 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\custom_fields_helper.php 31
