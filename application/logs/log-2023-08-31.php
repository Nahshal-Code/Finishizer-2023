<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-31 05:03:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR branch_id=0 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHE...' at line 17 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,rel_type,rel_id,recurring,(CASE rel_type
        WHEN "contract" THEN (SELECT subject FROM tblcontracts WHERE tblcontracts.id = tbltasks.rel_id)
        WHEN "estimate" THEN (SELECT id FROM tblestimates WHERE tblestimates.id = tbltasks.rel_id)
        WHEN "proposal" THEN (SELECT id FROM tblproposals WHERE tblproposals.id = tbltasks.rel_id)
        WHEN "invoice" THEN (SELECT id FROM tblinvoices WHERE tblinvoices.id = tbltasks.rel_id)
        WHEN "ticket" THEN (SELECT CONCAT(CONCAT("#",tbltickets.ticketid), " - ", tbltickets.subject) FROM tbltickets WHERE tbltickets.ticketid=tbltasks.rel_id)
        WHEN "lead" THEN (SELECT CASE tblleads.email WHEN "" THEN tblleads.name ELSE CONCAT(tblleads.name, " - ", tblleads.email) END FROM tblleads WHERE tblleads.id=tbltasks.rel_id)
        WHEN "customer" THEN (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE tblclients.userid=tbltasks.rel_id)
        WHEN "project" THEN (SELECT CONCAT(CONCAT(CONCAT("#",tblprojects.id)," - ",tblprojects.name), " - ", (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE userid=tblprojects.clientid)) FROM tblprojects WHERE tblprojects.id=tbltasks.rel_id)
        WHEN "expense" THEN (SELECT CASE expense_name WHEN "" THEN tblexpenses_categories.name ELSE
         CONCAT(tblexpenses_categories.name, ' (',tblexpenses.expense_name,')') END FROM tblexpenses JOIN tblexpenses_categories ON tblexpenses_categories.id = tblexpenses.category WHERE tblexpenses.id=tbltasks.rel_id)
        ELSE NULL
        END) as rel_name,billed,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  branch_id= OR branch_id=0 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 1)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-31 05:04:44 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:23:28 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:24:00 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:24:09 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:30:10 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:30:12 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:30:19 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:33:13 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:33:15 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:33:18 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:41:44 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:41:45 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:41:47 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:42:31 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:42:52 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 0
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:44:55 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:45:00 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:49:42 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:49:43 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:49:47 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:49:52 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:51:04 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:51:11 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 05:52:25 --> Severity: Notice --> Undefined property: Contract::$ci C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 9
ERROR - 2023-08-31 05:52:25 --> Severity: Notice --> Trying to get property 'load' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 9
ERROR - 2023-08-31 05:52:25 --> Severity: error --> Exception: Call to a member function helper() on null C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 9
ERROR - 2023-08-31 06:39:46 --> Severity: Notice --> Undefined property: Contract::$ci C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 8
ERROR - 2023-08-31 06:39:46 --> Severity: Notice --> Trying to get property 'load' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 8
ERROR - 2023-08-31 06:39:46 --> Severity: error --> Exception: Call to a member function helper() on null C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 8
ERROR - 2023-08-31 06:39:48 --> Severity: Notice --> Undefined property: Contract::$ci C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 8
ERROR - 2023-08-31 06:39:49 --> Severity: Notice --> Trying to get property 'load' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 8
ERROR - 2023-08-31 06:39:49 --> Severity: error --> Exception: Call to a member function helper() on null C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 8
ERROR - 2023-08-31 06:39:57 --> Severity: Notice --> Undefined property: Contract::$ci C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 8
ERROR - 2023-08-31 06:39:57 --> Severity: Notice --> Trying to get property 'load' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 8
ERROR - 2023-08-31 06:39:57 --> Severity: error --> Exception: Call to a member function helper() on null C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\Contract.php 8
ERROR - 2023-08-31 06:42:30 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 06:42:45 --> Query error: Unknown column 'null' in 'where clause' - Invalid query: SELECT *
FROM `tblcustomfields`
WHERE `fieldto` = 'company'
AND `branch_id` = `null`
AND `active` = 1
ORDER BY `field_order` ASC
ERROR - 2023-08-31 06:58:19 --> Query error: Unknown column 'tblleads.branch_id' in 'where clause' - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblcontracts.id as id, subject, CASE tblclients.company WHEN ' ' THEN (SELECT CONCAT(firstname, ' ', lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE tblclients.company END as company, tblcontracts_types.name as type_name, contract_value, datestart, dateend, tblprojects.name as project_name, signature ,tblcontracts.id,trash,client,hash,marked_as_signed,project_id
    FROM tblcontracts
    LEFT JOIN tblclients ON tblclients.userid = tblcontracts.client LEFT JOIN tblprojects ON tblprojects.id = tblcontracts.project_id LEFT JOIN tblcontracts_types ON tblcontracts_types.id = tblcontracts.contract_type
    
    WHERE tblleads.branch_id=2 AND ( trash = 0 AND YEAR(datestart) IN (2023))
    
    ORDER BY dateend IS NULL ASC, dateend ASC
    LIMIT 0, 25
    
ERROR - 2023-08-31 07:00:53 --> Query error: Unknown column 'tblleads.branch_id' in 'where clause' - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblcontracts.id as id, subject, CASE tblclients.company WHEN ' ' THEN (SELECT CONCAT(firstname, ' ', lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE tblclients.company END as company, tblcontracts_types.name as type_name, contract_value, datestart, dateend, tblprojects.name as project_name, signature ,tblcontracts.id,trash,client,hash,marked_as_signed,project_id
    FROM tblcontracts
    LEFT JOIN tblclients ON tblclients.userid = tblcontracts.client LEFT JOIN tblprojects ON tblprojects.id = tblcontracts.project_id LEFT JOIN tblcontracts_types ON tblcontracts_types.id = tblcontracts.contract_type
    
    WHERE tblleads.branch_id=2 AND ( trash = 0 AND YEAR(datestart) IN (2023))
    
    ORDER BY dateend IS NULL ASC, dateend ASC
    LIMIT 0, 25
    
ERROR - 2023-08-31 07:05:28 --> Query error: Unknown column 'branch_id' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblprojects`
WHERE `branch_id` = "2" AND `status` = 1
ERROR - 2023-08-31 07:16:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND `clientid` IN (SELECT userid FROM tblclients WHERE branch_id=2) AND `stat...' at line 3 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblprojects`
WHERE AND `clientid` IN (SELECT userid FROM tblclients WHERE branch_id=2) AND `status` = 1
ERROR - 2023-08-31 07:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR branch_id=0 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHE...' at line 17 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,rel_type,rel_id,recurring,(CASE rel_type
        WHEN "contract" THEN (SELECT subject FROM tblcontracts WHERE tblcontracts.id = tbltasks.rel_id)
        WHEN "estimate" THEN (SELECT id FROM tblestimates WHERE tblestimates.id = tbltasks.rel_id)
        WHEN "proposal" THEN (SELECT id FROM tblproposals WHERE tblproposals.id = tbltasks.rel_id)
        WHEN "invoice" THEN (SELECT id FROM tblinvoices WHERE tblinvoices.id = tbltasks.rel_id)
        WHEN "ticket" THEN (SELECT CONCAT(CONCAT("#",tbltickets.ticketid), " - ", tbltickets.subject) FROM tbltickets WHERE tbltickets.ticketid=tbltasks.rel_id)
        WHEN "lead" THEN (SELECT CASE tblleads.email WHEN "" THEN tblleads.name ELSE CONCAT(tblleads.name, " - ", tblleads.email) END FROM tblleads WHERE tblleads.id=tbltasks.rel_id)
        WHEN "customer" THEN (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE tblclients.userid=tbltasks.rel_id)
        WHEN "project" THEN (SELECT CONCAT(CONCAT(CONCAT("#",tblprojects.id)," - ",tblprojects.name), " - ", (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE userid=tblprojects.clientid)) FROM tblprojects WHERE tblprojects.id=tbltasks.rel_id)
        WHEN "expense" THEN (SELECT CASE expense_name WHEN "" THEN tblexpenses_categories.name ELSE
         CONCAT(tblexpenses_categories.name, ' (',tblexpenses.expense_name,')') END FROM tblexpenses JOIN tblexpenses_categories ON tblexpenses_categories.id = tblexpenses.category WHERE tblexpenses.id=tbltasks.rel_id)
        ELSE NULL
        END) as rel_name,billed,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  branch_id= OR branch_id=0 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 1)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-31 07:31:21 --> Query error: Unknown column 'tblprojects.branch_id' in 'where clause' - Invalid query: SELECT *, CASE tblclients.company WHEN ' ' THEN (SELECT CONCAT(firstname, ' ', lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE tblclients.company END as company
FROM `tblprojects`
JOIN `tblclients` ON `tblclients`.`userid`=`tblprojects`.`clientid`
WHERE `id` != 1 AND (`status` = 1 OR `status` = 2 OR `status` = 3) AND `tblprojects`.`branch_id` = 1
ORDER BY `id` DESC
ERROR - 2023-08-31 07:32:51 --> Query error: Unknown column 'tblprojects.branch_id' in 'where clause' - Invalid query: SELECT *, CASE tblclients.company WHEN ' ' THEN (SELECT CONCAT(firstname, ' ', lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE tblclients.company END as company
FROM `tblprojects`
JOIN `tblclients` ON `tblclients`.`userid`=`tblprojects`.`clientid`
WHERE `id` != 1 AND (`status` = 1 OR `status` = 2 OR `status` = 3) AND `tblprojects`.`branch_id` = 1
ORDER BY `id` DESC
