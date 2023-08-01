<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-01 22:12:25 --> Could not find the language line "features"
ERROR - 2023-08-01 22:13:10 --> Could not find the language line "features"
ERROR - 2023-08-01 22:15:14 --> Could not find the language line "features"
ERROR - 2023-08-01 22:15:42 --> Could not find the language line "features"
ERROR - 2023-08-01 22:33:53 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=2 AND project_id = 1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-01 22:34:36 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=2 AND project_id = 1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-01 22:35:28 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=2 AND project_id = 1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-01 22:35:31 --> Severity: Notice --> Undefined variable: bid C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\tickets\add.php 122
ERROR - 2023-08-01 22:36:21 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=2 AND project_id = 1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-01 22:36:52 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=2 AND project_id = 1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-01 22:36:58 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=2 AND project_id = 1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-01 22:37:32 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=1 AND project_id = 1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-01 22:39:49 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-08-01 22:39:49 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-08-01 22:39:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-08-01 22:39:49 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-08-01 22:39:49 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-08-01 22:39:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-08-01 22:41:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY t...' at line 5 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id= AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-01 22:42:14 --> Query error: Unknown column 'branch_id' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `title`, `email`, `website`, `phonenumber`, `lead_value`, `company`, `address`, `city`, `state`, `country`, `zip`, `default_language`, `description`, `branch_id`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('1', '2', '1', 'HARSHA T', '', 'hthoppil70@gmail.com', '', '0509305925', '', 'explore', 'VILLA 74', '', 'ABU DHABI', '234', '', '', '', '', '2023-08-01 22:42:14', 0, '2023-08-01 22:42:14', '1')
ERROR - 2023-08-01 22:43:20 --> Query error: Unknown column 'branch_id' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `title`, `email`, `website`, `phonenumber`, `lead_value`, `company`, `address`, `city`, `state`, `country`, `zip`, `default_language`, `description`, `branch_id`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('1', '2', '1', 'HARSHA T', '', 'hthoppil70@gmail.com', '', '0509305925', '', '', 'VILLA 74', '', 'ABU DHABI', '234', '', '', '', '', '2023-08-01 22:43:20', 0, '2023-08-01 22:43:20', '1')
ERROR - 2023-08-01 22:43:57 --> Query error: Unknown column 'branch_id' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `title`, `email`, `website`, `phonenumber`, `lead_value`, `company`, `address`, `city`, `state`, `country`, `zip`, `default_language`, `description`, `branch_id`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('1', '2', '1', 'test', '', 'hthoppil70@gmail.com', '', '0509305925', '', '', 'VILLA 74', '', 'ABU DHABI', '234', '', '', '', '', '2023-08-01 22:43:57', 0, '2023-08-01 22:43:57', '1')
ERROR - 2023-08-01 22:44:58 --> Query error: Unknown column 'branch_id' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `title`, `email`, `website`, `phonenumber`, `lead_value`, `company`, `address`, `city`, `state`, `country`, `zip`, `default_language`, `description`, `branch_id`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('1', '2', '1', 'tetst', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2023-08-01 22:44:58', 0, '2023-08-01 22:44:58', '1')
ERROR - 2023-08-01 22:45:32 --> Query error: Unknown column 'branch_id' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `title`, `email`, `website`, `phonenumber`, `lead_value`, `company`, `address`, `city`, `state`, `country`, `zip`, `default_language`, `description`, `branch_id`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('1', '2', '1', 'tst', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2023-08-01 22:45:32', 0, '2023-08-01 22:45:32', '1')
ERROR - 2023-08-01 22:45:54 --> Query error: Unknown column 'branch_id' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `title`, `email`, `website`, `phonenumber`, `lead_value`, `company`, `address`, `city`, `state`, `country`, `zip`, `default_language`, `description`, `branch_id`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('1', '2', '1', 'tst', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2023-08-01 22:45:54', 0, '2023-08-01 22:45:54', '1')
ERROR - 2023-08-01 23:01:28 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\custom_fields_helper.php 343
ERROR - 2023-08-01 23:01:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IS NULL
AND `active` = 1
ORDER BY `field_order` ASC' at line 4 - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'tasks'
AND  IS NULL
AND `active` = 1
ORDER BY `field_order` ASC
