<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-01 05:07:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR branch_id=0 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHE...' at line 17 - Invalid query: 
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
    
ERROR - 2023-09-01 06:29:09 --> Query error: Unknown column 'branch_id' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblcontracts`
WHERE `branch_id` = "2" AND (DATE(dateend) > "2023-09-01" AND `trash` =0) OR (DATE(dateend) IS NULL AND `trash` =0)
ERROR - 2023-09-01 06:30:03 --> Query error: Unknown column 'branch_id' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblcontracts`
WHERE `branch_id` = "2" AND (DATE(dateend) > "2023-09-01" AND `trash` =0) OR (DATE(dateend) IS NULL AND `trash` =0)
ERROR - 2023-09-01 06:37:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''(SELECT userid FROM tblclients WHERE branch_id=2)'
AND DATE(dateend) < '2023...' at line 3 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblcontracts`
WHERE client IN '(SELECT userid FROM tblclients WHERE branch_id=2)'
AND DATE(dateend) < '2023-09-01'
AND `trash` = 0
ERROR - 2023-09-01 06:41:55 --> Severity: Notice --> Undefined variable: CI C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\contracts_helper.php 202
ERROR - 2023-09-01 06:41:55 --> Severity: Notice --> Trying to get property 'db' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\contracts_helper.php 202
ERROR - 2023-09-01 06:41:55 --> Severity: error --> Exception: Call to a member function select() on null C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\contracts_helper.php 202
ERROR - 2023-09-01 06:42:21 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\finishizer_erp3.0.5\system\database\DB_query_builder.php 2443
ERROR - 2023-09-01 06:42:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
AND DATE(dateend) < '2023-09-01'
AND `trash` = 0' at line 3 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblcontracts`
WHERE client IN Array
AND DATE(dateend) < '2023-09-01'
AND `trash` = 0
ERROR - 2023-09-01 06:44:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AD (DATE(dateend) `>"2023-09-01"` AND `trash` =0) OR (DATE(dateend) IS NULL A...' at line 3 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblcontracts`
WHERE `client` IN (SELECT userid FROM tblclients WHERE branch_id=2) AD (DATE(dateend) `>"2023-09-01"` AND `trash` =0) OR (DATE(dateend) IS NULL AND `trash` =0)
ERROR - 2023-09-01 06:46:07 --> Severity: error --> Exception: Object of class CI_DB_mysqli_result could not be converted to string C:\xampp\htdocs\finishizer_erp3.0.5\system\database\DB_query_builder.php 2443
ERROR - 2023-09-01 07:46:37 --> Severity: Warning --> explode() expects parameter 2 to be string, object given C:\xampp\htdocs\finishizer_erp3.0.5\application\helpers\contracts_helper.php 206
ERROR - 2023-09-01 07:46:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND DATE(dateend) < '2023-09-01'
AND `trash` = 0' at line 4 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblcontracts`
WHERE client IN
AND DATE(dateend) < '2023-09-01'
AND `trash` = 0
ERROR - 2023-09-01 07:58:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 5 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblcontracts`
WHERE `client` IN (SELECT userid FROM tblclients WHERE branch_id=2) 
                                                    AND (DATE(dateend) < "2023-09-01" 
                                                    AND `trash` =0
ERROR - 2023-09-01 08:20:41 --> Query error: Not unique table/alias: 'tblcontracts' - Invalid query: SELECT `id`, `subject`, `client`, `datestart`, `dateend`, `branch_id`
FROM (`tblcontracts`, `tblcontracts`)
JOIN `tblclients` ON `tblcontracts`.`client`=`tblclients`.`userid`
WHERE `branch_id` = '2'
AND `dateend` IS NOT NULL
AND `trash` = 0
AND `dateend` >= '2023-08-25'
AND `dateend` <= '2023-09-08'
ERROR - 2023-09-01 08:21:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')' at line 4 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblcontracts`
WHERE `client` IN (SELECT userid FROM tblclients WHERE branch_id=2) 
                                                    AND `trash` = 1)
ERROR - 2023-09-01 08:23:03 --> Query error: Unknown column 'tblprojects.branch_id' in 'where clause' - Invalid query: SELECT *
FROM `tblprojects`
JOIN `tblclients` ON `tblclients`.`userid` = `tblprojects`.`clientid`
WHERE `clientid` = 2
AND (`company` LIKE "%b%" ESCAPE '!'
                OR `description` LIKE "%b%" ESCAPE '!'
                OR `name` LIKE "%b%" ESCAPE '!'
                OR `vat` LIKE "%b%" ESCAPE '!'
                OR `phonenumber` LIKE "%b%" ESCAPE '!'
                OR `city` LIKE "%b%" ESCAPE '!'
                OR `zip` LIKE "%b%" ESCAPE '!'
                OR `state` LIKE "%b%" ESCAPE '!'
                OR `zip` LIKE "%b%" ESCAPE '!'
                OR `address` LIKE "%b%" ESCAPE '!')
AND `tblprojects`.`branch_id` = '2'
ORDER BY `name` ASC
ERROR - 2023-09-01 08:23:31 --> Query error: Unknown column 'tblprojects.branch_id' in 'where clause' - Invalid query: SELECT *
FROM `tblprojects`
JOIN `tblclients` ON `tblclients`.`userid` = `tblprojects`.`clientid`
WHERE `clientid` = 2
AND (`company` LIKE "%br%" ESCAPE '!'
                OR `description` LIKE "%br%" ESCAPE '!'
                OR `name` LIKE "%br%" ESCAPE '!'
                OR `vat` LIKE "%br%" ESCAPE '!'
                OR `phonenumber` LIKE "%br%" ESCAPE '!'
                OR `city` LIKE "%br%" ESCAPE '!'
                OR `zip` LIKE "%br%" ESCAPE '!'
                OR `state` LIKE "%br%" ESCAPE '!'
                OR `zip` LIKE "%br%" ESCAPE '!'
                OR `address` LIKE "%br%" ESCAPE '!')
AND `tblprojects`.`branch_id` = '2'
ORDER BY `name` ASC
ERROR - 2023-09-01 08:24:12 --> Query error: Unknown column 'tblprojects.branch_id' in 'where clause' - Invalid query: SELECT *
FROM `tblprojects`
JOIN `tblclients` ON `tblclients`.`userid` = `tblprojects`.`clientid`
WHERE `clientid` = 2
AND (`company` LIKE "%b%" ESCAPE '!'
                OR `description` LIKE "%b%" ESCAPE '!'
                OR `name` LIKE "%b%" ESCAPE '!'
                OR `vat` LIKE "%b%" ESCAPE '!'
                OR `phonenumber` LIKE "%b%" ESCAPE '!'
                OR `city` LIKE "%b%" ESCAPE '!'
                OR `zip` LIKE "%b%" ESCAPE '!'
                OR `state` LIKE "%b%" ESCAPE '!'
                OR `zip` LIKE "%b%" ESCAPE '!'
                OR `address` LIKE "%b%" ESCAPE '!')
AND `tblprojects`.`branch_id` = '2'
ORDER BY `name` ASC
ERROR - 2023-09-01 08:24:54 --> Query error: Unknown column 'tblprojects.branch_id' in 'where clause' - Invalid query: SELECT *
FROM `tblprojects`
JOIN `tblclients` ON `tblclients`.`userid` = `tblprojects`.`clientid`
WHERE `clientid` = 1
AND (`company` LIKE "%b%" ESCAPE '!'
                OR `description` LIKE "%b%" ESCAPE '!'
                OR `name` LIKE "%b%" ESCAPE '!'
                OR `vat` LIKE "%b%" ESCAPE '!'
                OR `phonenumber` LIKE "%b%" ESCAPE '!'
                OR `city` LIKE "%b%" ESCAPE '!'
                OR `zip` LIKE "%b%" ESCAPE '!'
                OR `state` LIKE "%b%" ESCAPE '!'
                OR `zip` LIKE "%b%" ESCAPE '!'
                OR `address` LIKE "%b%" ESCAPE '!')
AND `tblprojects`.`branch_id` = '1'
ORDER BY `name` ASC
ERROR - 2023-09-01 16:12:58 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-09-01 16:12:58 --> Unable to connect to the database
ERROR - 2023-09-01 16:13:57 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-09-01 16:13:57 --> Unable to connect to the database
ERROR - 2023-09-01 16:16:01 --> Severity: Warning --> mysqli::real_connect(): Error while reading greeting packet. PID=7948 C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-09-01 16:16:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/2006): MySQL server has gone away C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-09-01 16:16:01 --> Unable to connect to the database
ERROR - 2023-09-01 16:27:53 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-09-01 16:27:53 --> Unable to connect to the database
