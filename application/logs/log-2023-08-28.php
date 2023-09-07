<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-28 19:50:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR branch_id=0 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHE...' at line 17 - Invalid query: 
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
    
ERROR - 2023-08-28 21:36:59 --> Query error: Unknown column 'tblbranch_id' in 'where clause' - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tblclients.userid as userid, company, CONCAT(firstname, " ", lastname) as fullname, email, tblclients.phonenumber as phonenumber, `tblclients`.`active` AS `tblclients.active`, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tblcustomer_groups JOIN tblcustomers_groups ON tblcustomer_groups.groupid = tblcustomers_groups.id WHERE customer_id = tblclients.userid ORDER by name ASC) as customerGroups, tblclients.datecreated as datecreated ,tblcontacts.id as contact_id,lastname,tblclients.zip as zip,registration_confirmed
    FROM tblclients
    LEFT JOIN tblcontacts ON tblcontacts.userid=tblclients.userid AND tblcontacts.is_primary=1
    
    WHERE tblbranch_id=1 AND (tblclients.active = 1 OR tblclients.active=0 AND registration_confirmed = 0)
    
    ORDER BY company ASC
    LIMIT 0, 25
    
ERROR - 2023-08-28 21:37:07 --> Query error: Unknown column 'tblbranch_id' in 'where clause' - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tblclients.userid as userid, company, CONCAT(firstname, " ", lastname) as fullname, email, tblclients.phonenumber as phonenumber, `tblclients`.`active` AS `tblclients.active`, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tblcustomer_groups JOIN tblcustomers_groups ON tblcustomer_groups.groupid = tblcustomers_groups.id WHERE customer_id = tblclients.userid ORDER by name ASC) as customerGroups, tblclients.datecreated as datecreated ,tblcontacts.id as contact_id,lastname,tblclients.zip as zip,registration_confirmed
    FROM tblclients
    LEFT JOIN tblcontacts ON tblcontacts.userid=tblclients.userid AND tblcontacts.is_primary=1
    
    WHERE tblbranch_id=1
    
    ORDER BY company ASC
    LIMIT 0, 25
    
ERROR - 2023-08-28 21:37:38 --> Query error: Unknown column 'tblbranch_id' in 'where clause' - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tblclients.userid as userid, company, CONCAT(firstname, " ", lastname) as fullname, email, tblclients.phonenumber as phonenumber, `tblclients`.`active` AS `tblclients.active`, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tblcustomer_groups JOIN tblcustomers_groups ON tblcustomer_groups.groupid = tblcustomers_groups.id WHERE customer_id = tblclients.userid ORDER by name ASC) as customerGroups, tblclients.datecreated as datecreated ,tblcontacts.id as contact_id,lastname,tblclients.zip as zip,registration_confirmed
    FROM tblclients
    LEFT JOIN tblcontacts ON tblcontacts.userid=tblclients.userid AND tblcontacts.is_primary=1
    
    WHERE tblbranch_id=1 AND (tblclients.active = 1 OR tblclients.active=0 AND registration_confirmed = 0)
    
    ORDER BY company ASC
    LIMIT 0, 25
    
ERROR - 2023-08-28 21:43:58 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE tblclients.company WHEN ' ' THEN (SELECT CONCAT(firstname, ' ', lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE tblclients.company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    WHERE  branch_id=2 AND ( status IN (1, 2, 3))
    
    ORDER BY deadline IS NULL ASC, deadline ASC
    LIMIT 0, 25
    
ERROR - 2023-08-28 21:51:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`status` = 1' at line 3 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblprojects`
WHERE `branch_id` = "2" AND  `AND` `status` = 1
