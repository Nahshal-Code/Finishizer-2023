<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property-read CI_DB_mysql_driver $db
 */
class Migration_Version_306 extends CI_Migration
{
    public function up()
    {
        
        if (!$this->db->field_exists('branch_id', db_prefix() . 'staff')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'staff` ADD `branch_id` INT NULL DEFAULT NULL AFTER `staff_id`;');
        }
    }
}