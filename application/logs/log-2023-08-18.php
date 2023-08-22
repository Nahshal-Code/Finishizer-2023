<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-18 16:30:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY t...' at line 5 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date` ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority
    
    WHERE  tbltickets.branch_id =  AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-18 16:31:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY t...' at line 5 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date` ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority
    
    WHERE  tbltickets.branch_id =  AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-18 16:37:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY t...' at line 5 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date` ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority
    
    WHERE  tbltickets.branch_id =  AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-18 16:37:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY t...' at line 5 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date` ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority
    
    WHERE  tbltickets.branch_id =  AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-18 16:37:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY t...' at line 5 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date` ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority
    
    WHERE  tbltickets.branch_id =  AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-18 16:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY t...' at line 5 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date` ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority
    
    WHERE  tbltickets.branch_id =  AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-18 16:40:39 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 16:40:41 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 16:40:43 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 16:40:44 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 16:45:35 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 16:45:37 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 16:45:38 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 16:45:39 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 16:45:40 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 16:59:29 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 16:59:46 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 17:00:08 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 17:02:49 --> Severity: error --> Exception: syntax error, unexpected 'static' (T_STATIC) C:\xampp\htdocs\finishizer_erp3.0.5\application\services\leads\LeadsKanban.php 29
ERROR - 2023-08-18 22:03:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY id ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS id, name, (SELECT COUNT(id) FROM tblestimate_requests WHERE tblestimate_requests.from_form_id = tblestimate_request_forms.id), dateadded ,form_key,id
    FROM tblestimate_request_forms
    
    
    WHERE  branch_id=
    
    ORDER BY id ASC
    LIMIT 0, 25
    
ERROR - 2023-08-18 22:03:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY id ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS id, name, (SELECT COUNT(id) FROM tblestimate_requests WHERE tblestimate_requests.from_form_id = tblestimate_request_forms.id), dateadded ,form_key,id
    FROM tblestimate_request_forms
    
    
    WHERE  branch_id=
    
    ORDER BY id ASC
    LIMIT 0, 25
    
