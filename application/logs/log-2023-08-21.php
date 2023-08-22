<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-21 19:13:48 --> Query error: Table 'finishizer_erp.tblsessions' doesn't exist - Invalid query: SELECT 1
FROM `tblsessions`
WHERE `id` = 'd3d8scdfahhvp5v5apm8e5g4bb10h5l9'
ERROR - 2023-08-21 19:27:06 --> Could not find the language line "branch"
ERROR - 2023-08-21 19:27:44 --> Could not find the language line "branch"
ERROR - 2023-08-21 19:29:19 --> Could not find the language line "features"
ERROR - 2023-08-21 19:29:47 --> Could not find the language line "features"
ERROR - 2023-08-21 19:30:36 --> Could not find the language line "features"
ERROR - 2023-08-21 19:31:11 --> Could not find the language line "features"
ERROR - 2023-08-21 19:31:41 --> Could not find the language line "features"
ERROR - 2023-08-21 21:06:18 --> Could not find the language line "features"
ERROR - 2023-08-21 21:06:31 --> Could not find the language line "features"
ERROR - 2023-08-21 21:08:53 --> Severity: Notice --> Undefined variable: bid C:\xampp\htdocs\finishizer_erp3.0.5\application\controllers\admin\Tasks.php 390
ERROR - 2023-08-21 21:38:43 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tblleads.id as id, tblleads.name as name, company, tblleads.email as email, tblleads.phonenumber as phonenumber, lead_value, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC LIMIT 1) as tags, firstname as assigned_firstname, tblleads_status.name as status_name, tblleads_sources.name as source_name, lastcontact, dateadded ,junk,lost,color,status,assigned,lastname as assigned_lastname,tblleads.addedfrom as addedfrom,(SELECT count(leadid) FROM tblclients WHERE tblclients.leadid=tblleads.id) as is_converted,zip
    FROM tblleads
    LEFT JOIN tblstaff ON tblstaff.staffid = tblleads.assigned LEFT JOIN tblleads_status ON tblleads_status.id = tblleads.status JOIN tblleads_sources ON tblleads_sources.id = tblleads.source
    
    WHERE  branch_id=1 AND lost = 0 AND junk = 0 AND status IN (2)
    
    ORDER BY dateadded DESC
    LIMIT 0, 25
    
ERROR - 2023-08-21 21:38:54 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tblleads.id as id, tblleads.name as name, company, tblleads.email as email, tblleads.phonenumber as phonenumber, lead_value, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC LIMIT 1) as tags, firstname as assigned_firstname, tblleads_status.name as status_name, tblleads_sources.name as source_name, lastcontact, dateadded ,junk,lost,color,status,assigned,lastname as assigned_lastname,tblleads.addedfrom as addedfrom,(SELECT count(leadid) FROM tblclients WHERE tblclients.leadid=tblleads.id) as is_converted,zip
    FROM tblleads
    LEFT JOIN tblstaff ON tblstaff.staffid = tblleads.assigned LEFT JOIN tblleads_status ON tblleads_status.id = tblleads.status JOIN tblleads_sources ON tblleads_sources.id = tblleads.source
    
    WHERE  branch_id=2 AND lost = 0 AND junk = 0
    
    ORDER BY dateadded DESC
    LIMIT 0, 25
    
ERROR - 2023-08-21 21:39:16 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tblleads.id as id, tblleads.name as name, company, tblleads.email as email, tblleads.phonenumber as phonenumber, lead_value, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC LIMIT 1) as tags, firstname as assigned_firstname, tblleads_status.name as status_name, tblleads_sources.name as source_name, lastcontact, dateadded ,junk,lost,color,status,assigned,lastname as assigned_lastname,tblleads.addedfrom as addedfrom,(SELECT count(leadid) FROM tblclients WHERE tblclients.leadid=tblleads.id) as is_converted,zip
    FROM tblleads
    LEFT JOIN tblstaff ON tblstaff.staffid = tblleads.assigned LEFT JOIN tblleads_status ON tblleads_status.id = tblleads.status JOIN tblleads_sources ON tblleads_sources.id = tblleads.source
    
    WHERE  branch_id=2 AND lost = 0 AND junk = 0
    
    ORDER BY dateadded DESC
    LIMIT 0, 25
    
ERROR - 2023-08-21 22:38:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE status=2 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FR...' at line 1 - Invalid query: SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE branch_id=1 WHERE status=2 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE branch_id=1 WHERE status=1 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE branch_id=1 WHERE lost=1
ERROR - 2023-08-21 22:51:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where branch-id1 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value ...' at line 1 - Invalid query: SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE status=2 AND where branch-id1 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE status=1 AND where branch-id1 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE lost=1 AND where branch-id1
ERROR - 2023-08-21 22:51:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where branch_id1 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value ...' at line 1 - Invalid query: SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE status=2 AND where branch_id1 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE status=1 AND where branch_id1 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE lost=1 AND where branch_id1
ERROR - 2023-08-21 22:52:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE branch_id=1 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value...' at line 1 - Invalid query: SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE status=2 AND WHERE branch_id=1 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE status=1 AND WHERE branch_id=1 UNION ALL SELECT COUNT(*) as total,SUM(lead_value) as value FROM tblleads WHERE lost=1 AND WHERE branch_id=1
