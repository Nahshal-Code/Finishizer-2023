<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-09 18:29:17 --> Query error: Unknown column 'branch_id' in 'field list' - Invalid query: INSERT INTO `tblknowledge_base_groups` (`name`, `group_slug`, `color`, `description`, `group_order`, `branch_id`, `active`) VALUES ('test', 'test', '', '', '1', '1', 1)
ERROR - 2023-08-09 18:50:15 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:50:15 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:57:03 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:57:03 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:57:17 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:57:17 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:57:34 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:57:34 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:58:11 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:58:11 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:59:10 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:59:10 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:59:29 --> 404 Page Not Found: /index
ERROR - 2023-08-09 18:59:29 --> 404 Page Not Found: /index
ERROR - 2023-08-09 20:54:22 --> Query error: Unknown column 'knowledge_base_groups.branch_id' in 'where clause' - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS subject, articlegroup, datecreated ,name,groupid,articleid,slug,staff_article,tblknowledge_base.description
    FROM tblknowledge_base
    LEFT JOIN tblknowledge_base_groups ON tblknowledge_base_groups.groupid = tblknowledge_base.articlegroup
    
    WHERE  knowledge_base_groups.branch_id=2
    
    ORDER BY datecreated DESC
    LIMIT 0, 25
    
ERROR - 2023-08-09 20:55:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'knowledge_base_groups.branch_id=2
    
    ORDER BY datecreated DESC
    L...' at line 5 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS subject, articlegroup, datecreated ,name,groupid,articleid,slug,staff_article,tblknowledge_base.description
    FROM tblknowledge_base
    LEFT JOIN tblknowledge_base_groups ON tblknowledge_base_groups.groupid = tblknowledge_base.articlegroup
    
    WHERE tbl knowledge_base_groups.branch_id=2
    
    ORDER BY datecreated DESC
    LIMIT 0, 25
    
ERROR - 2023-08-09 21:08:31 --> Query error: Column 'branch_id' in where clause is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, ticketid, subject, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltickets.ticketid and rel_type="ticket" ORDER by tag_order ASC) as tags, tbldepartments.name as department_name, tblservices.name as service_name, CONCAT(tblcontacts.firstname, ' ', tblcontacts.lastname) as contact_full_name, status, priority, lastreply, `tbltickets`.`date` AS `tbltickets.date`, ctable_0.value as cvalue_0 ,adminread,ticketkey,tbltickets.userid,statuscolor,tbltickets.name as ticket_opened_by_name,tbltickets.email,tbltickets.userid,assigned,tblclients.company
    FROM tbltickets
    LEFT JOIN tblcontacts ON tblcontacts.id = tbltickets.contactid LEFT JOIN tblservices ON tblservices.serviceid = tbltickets.service LEFT JOIN tbldepartments ON tbldepartments.departmentid = tbltickets.department LEFT JOIN tbltickets_status ON tbltickets_status.ticketstatusid = tbltickets.status LEFT JOIN tblclients ON tblclients.userid = tbltickets.userid LEFT JOIN tbltickets_priorities ON tbltickets_priorities.priorityid = tbltickets.priority LEFT JOIN tblcustomfieldsvalues as ctable_0 ON tbltickets.ticketid = ctable_0.relid AND ctable_0.fieldto="tickets" AND ctable_0.fieldid=14
    
    WHERE  branch_id=1 AND merged_ticket_id IS NULL AND ( status IN (1, 2, 4))
    
    ORDER BY tbltickets.date DESC
    LIMIT 0, 25
    
ERROR - 2023-08-09 22:23:59 --> Query error: Unknown column 'branch_id' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `title`, `email`, `website`, `phonenumber`, `lead_value`, `company`, `address`, `city`, `state`, `country`, `zip`, `default_language`, `description`, `branch_id`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('2', '3', '3', 'test', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '2023-08-09 22:23:59', 0, '2023-08-09 22:23:59', '1')
ERROR - 2023-08-09 22:24:13 --> Query error: Unknown column 'branch_id' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `title`, `email`, `website`, `phonenumber`, `lead_value`, `company`, `address`, `city`, `state`, `country`, `zip`, `default_language`, `description`, `branch_id`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('2', '3', '3', 'test', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '2023-08-09 22:24:13', 0, '2023-08-09 22:24:13', '1')
ERROR - 2023-08-09 22:24:18 --> Query error: Unknown column 'branch_id' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `title`, `email`, `website`, `phonenumber`, `lead_value`, `company`, `address`, `city`, `state`, `country`, `zip`, `default_language`, `description`, `branch_id`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('2', '3', '3', 'test', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '2023-08-09 22:24:18', 0, '2023-08-09 22:24:18', '1')
ERROR - 2023-08-09 22:42:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY firstname ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS firstname, email, `tblroles`.`name` AS `tblroles.name`, last_login, active ,profile_image,lastname,staffid,branch_id
    FROM tblstaff
    LEFT JOIN tblroles ON tblroles.roleid = tblstaff.role
    
    WHERE  branch_id=
    
    ORDER BY firstname ASC
    LIMIT 0, 25
    
ERROR - 2023-08-09 22:43:14 --> Could not find the language line "features"
ERROR - 2023-08-09 22:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY firstname ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS firstname, email, `tblroles`.`name` AS `tblroles.name`, last_login, active ,profile_image,lastname,staffid,branch_id
    FROM tblstaff
    LEFT JOIN tblroles ON tblroles.roleid = tblstaff.role
    
    WHERE  branch_id=
    
    ORDER BY firstname ASC
    LIMIT 0, 25
    
ERROR - 2023-08-09 22:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY firstname ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS firstname, email, `tblroles`.`name` AS `tblroles.name`, last_login, active ,profile_image,lastname,staffid
    FROM tblstaff
    LEFT JOIN tblroles ON tblroles.roleid = tblstaff.role
    
    WHERE  branch_id=
    
    ORDER BY firstname ASC
    LIMIT 0, 25
    
ERROR - 2023-08-09 22:47:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY firstname ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS firstname, email, `tblroles`.`name` AS `tblroles.name`, last_login, active ,profile_image,lastname,staffid
    FROM tblstaff
    LEFT JOIN tblroles ON tblroles.roleid = tblstaff.role
    
    WHERE  branch_id=
    
    ORDER BY firstname ASC
    LIMIT 0, 25
    
ERROR - 2023-08-09 22:50:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY firstname ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS firstname, email, `tblroles`.`name` AS `tblroles.name`, last_login, active ,profile_image,lastname,staffid
    FROM tblstaff
    LEFT JOIN tblroles ON tblroles.roleid = tblstaff.role
    
    WHERE  tblstaff.branch_id=
    
    ORDER BY firstname ASC
    LIMIT 0, 25
    
