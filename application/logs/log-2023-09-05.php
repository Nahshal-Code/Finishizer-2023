<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-05 05:02:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR branch_id=0 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHE...' at line 17 - Invalid query: 
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
    
ERROR - 2023-09-05 06:56:50 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 06:56:50 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 06:56:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 06:56:50 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 06:56:50 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 06:56:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 06:57:13 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 06:57:13 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 06:57:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 06:57:13 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 06:57:13 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 06:57:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 06:58:18 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 06:58:18 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 06:58:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 06:58:18 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 06:58:18 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 06:58:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 07:04:29 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 07:04:29 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 07:04:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 07:04:29 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 07:04:29 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 07:04:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 14:10:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR branch_id=0 AND ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHE...' at line 17 - Invalid query: 
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
    
ERROR - 2023-09-05 14:10:08 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 14:10:08 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 14:10:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 154
ERROR - 2023-09-05 14:10:08 --> Severity: Notice --> Undefined variable: stripe_tax_rates C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 14:10:08 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
ERROR - 2023-09-05 14:10:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\finishizer_erp3.0.5\application\views\admin\subscriptions\form.php 186
