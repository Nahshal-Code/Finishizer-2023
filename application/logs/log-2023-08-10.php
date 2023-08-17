<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-10 20:40:45 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS firstname, email, `tblroles`.`name` AS `tblroles.name`, last_login, active ,profile_image,lastname,staffid
    FROM tblstaff
    LEFT JOIN tblroles ON tblroles.roleid = tblstaff.role
    
    WHERE  branch_id=2
    
    ORDER BY firstname ASC
    LIMIT 0, 25
    
ERROR - 2023-08-10 20:51:55 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-10 20:53:10 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-10 20:53:13 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-10 20:55:20 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-10 20:55:34 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-10 20:55:45 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-10 20:59:16 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 89
ERROR - 2023-08-10 20:59:16 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 104
ERROR - 2023-08-10 20:59:16 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 20:59:23 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 89
ERROR - 2023-08-10 20:59:23 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 104
ERROR - 2023-08-10 20:59:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 21:00:11 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 89
ERROR - 2023-08-10 21:00:11 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 104
ERROR - 2023-08-10 21:00:15 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 89
ERROR - 2023-08-10 21:00:15 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 104
ERROR - 2023-08-10 21:03:25 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 89
ERROR - 2023-08-10 21:03:25 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 104
ERROR - 2023-08-10 21:05:08 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 89
ERROR - 2023-08-10 21:05:08 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 104
ERROR - 2023-08-10 21:09:04 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 89
ERROR - 2023-08-10 21:09:04 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 104
ERROR - 2023-08-10 21:09:04 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 21:09:07 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 89
ERROR - 2023-08-10 21:09:07 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 104
ERROR - 2023-08-10 21:09:07 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 21:12:47 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 89
ERROR - 2023-08-10 21:12:47 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 104
ERROR - 2023-08-10 21:12:47 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 21:15:48 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 86
ERROR - 2023-08-10 21:15:48 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 21:15:48 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 21:29:07 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 86
ERROR - 2023-08-10 21:29:07 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 21:29:07 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 21:32:30 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 86
ERROR - 2023-08-10 21:32:30 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 21:32:31 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 21:37:44 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 86
ERROR - 2023-08-10 21:37:44 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 21:37:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 22:19:29 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 86
ERROR - 2023-08-10 22:19:29 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 22:19:29 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 22:22:43 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 86
ERROR - 2023-08-10 22:22:43 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 22:22:43 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 22:28:42 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 22:28:42 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 22:28:46 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 22:28:46 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 22:29:08 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 22:29:08 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 22:40:04 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 22:40:04 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
ERROR - 2023-08-10 22:43:11 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 86
ERROR - 2023-08-10 22:43:11 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tables\tickets.php 101
ERROR - 2023-08-10 22:43:11 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\datatables_helper.php 214
