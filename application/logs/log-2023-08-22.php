<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-22 18:16:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHE...' at line 1 - Invalid query: SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE status=1 AND branch_id= UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE lost=1 AND branch_id=
ERROR - 2023-08-22 18:28:40 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:28:40 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2) AND billable = 1) AND rel_id="1" AND rel_type="lead"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:39:55 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:39:55 --> Query error: Subquery returns more than 1 row - Invalid query: 
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
    
    
    WHERE  ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 1)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:49:52 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:49:52 --> Query error: Subquery returns more than 1 row - Invalid query: 
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
    
    
    WHERE  ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 1)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:50:04 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:50:04 --> Query error: Subquery returns more than 1 row - Invalid query: 
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
    
    
    WHERE  ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 1)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:51:47 --> Severity: Notice --> Undefined variable: setup_menu C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-08-22 18:51:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-08-22 18:51:47 --> Severity: Notice --> Undefined variable: sidebar_menu C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\includes\aside.php 12
ERROR - 2023-08-22 18:51:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\includes\aside.php 12
ERROR - 2023-08-22 18:52:56 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:52:56 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:53:16 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:53:16 --> Query error: Subquery returns more than 1 row - Invalid query: 
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
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:53:30 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:53:30 --> Query error: Subquery returns more than 1 row - Invalid query: 
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
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:55:44 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:55:44 --> Query error: Subquery returns more than 1 row - Invalid query: 
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
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:56:06 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:56:06 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:56:52 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:56:52 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:57:21 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:57:21 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 18:58:34 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 18:58:34 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 19:00:19 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 19:00:19 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 19:00:31 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 19:00:31 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 20:35:55 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 20:35:55 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 20:53:49 --> Query error: Unknown column 'tblstaff.branch_id' in 'where clause' - Invalid query: 
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
    
    
    WHERE  tblstaff.branch_id=1 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 1)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 20:55:33 --> Query error: Unknown column 'tblstaff.branch_id' in 'where clause' - Invalid query: 
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
    
    
    WHERE  tblstaff.branch_id=2 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 1)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 20:55:38 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 20:55:38 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 20:56:09 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 20:56:09 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 20:56:23 --> Query error: Unknown column 'tblstaff.branch_id' in 'where clause' - Invalid query: 
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
    
    
    WHERE  tblstaff.branch_id=1 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 1)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 20:57:57 --> Query error: Unknown column 'tblstaff.branch_id' in 'where clause' - Invalid query: 
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
    
    
    WHERE  tblstaff.branch_id=2 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 1)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 20:58:03 --> Query error: Unknown column 'tblstaff.branch_id' in 'where clause' - Invalid query: 
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
    
    
    WHERE  tblstaff.branch_id=2 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 1)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 20:58:53 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 20:58:53 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 20:59:14 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\finishizer_erp3.0.5\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-22 20:59:14 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority ,billed,recurring,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=1 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=1) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=1 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( status IN (1, 4, 3, 2)) AND rel_id="2" AND rel_type="ticket"
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 21:25:35 --> Query error: Unknown column 'tblstaff.branch_id' in 'where clause' - Invalid query: 
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
    
    
    WHERE  tblstaff.branch_id=2 AND ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 21:25:40 --> Query error: Unknown column 'tblstaff.branch_id' in 'where clause' - Invalid query: 
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
    
    
    WHERE  tblstaff.branch_id=2 AND ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 21:26:03 --> Query error: Unknown column 'tblstaff.branch_id' in 'where clause' - Invalid query: 
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
    
    
    WHERE  tblstaff.branch_id=2 AND ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 21:26:27 --> Query error: Unknown column 'tblstaff.branch_id' in 'where clause' - Invalid query: 
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
    
    
    WHERE  tblstaff.branch_id=2 AND ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 21:26:43 --> Query error: Unknown column 'tblstaff.branch_id' in 'where clause' - Invalid query: 
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
    
    
    WHERE  tblstaff.branch_id=2 AND ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-22 21:57:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ENDAND branch_id="2"' at line 7 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tbltasks`
WHERE `status` = 1 AND CASE
            WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id = `rel_id` AND `name` = "hide_tasks_on_main_tasks_table" AND value=1)
            THEN rel_type != "project"
            ELSE 1=1
            ENDAND branch_id="2"
ERROR - 2023-08-22 21:59:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ENDAND branch_id="2"' at line 7 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tbltasks`
WHERE `status` = 1 AND CASE
            WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id = `rel_id` AND `name` = "hide_tasks_on_main_tasks_table" AND value=1)
            THEN rel_type != "project"
            ELSE 1=1
            ENDAND branch_id="2"
ERROR - 2023-08-22 21:59:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ENDAND branch_id="2"' at line 7 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tbltasks`
WHERE `status` = 1 AND CASE
            WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id = `rel_id` AND `name` = "hide_tasks_on_main_tasks_table" AND value=1)
            THEN rel_type != "project"
            ELSE 1=1
            ENDAND branch_id="2"
ERROR - 2023-08-22 21:59:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ENDAND branch_id="2"' at line 7 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tbltasks`
WHERE `status` = 1 AND CASE
            WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id = `rel_id` AND `name` = "hide_tasks_on_main_tasks_table" AND value=1)
            THEN rel_type != "project"
            ELSE 1=1
            ENDAND branch_id="2"
