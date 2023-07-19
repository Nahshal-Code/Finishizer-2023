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
        if (!$this->db->field_exists('branch_id', db_prefix() . 'departments')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'departments` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'tickets_predefined_replies')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'tickets_predefined_replies` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'tickets_priorities')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'tickets_priorities` ADD `branch_id` INT NULL DEFAULT NULL AFTER `priorityid `;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'tickets_status')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'tickets_status` ADD `branch_id` INT NULL DEFAULT NULL AFTER `ticketstatusid  `;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'services')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'services` ADD `branch_id` INT NULL DEFAULT NULL AFTER `serviceid   `;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'spam_filters')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'spam_filters` ADD `branch_id` INT NULL DEFAULT NULL AFTER `serviceid   `;');
        }

        
            
        if (!$this->db->field_exists('branch_id', db_prefix() . 'leads_sources')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'leads_sources` ADD `branch_id` INT NULL DEFAULT NULL AFTER `departmentid `;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'leads_status')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'leads_status` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        }   
        if (!$this->db->field_exists('branch_id', db_prefix() . 'web_to_lead')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'web_to_lead` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        } 
        if (!$this->db->field_exists('branch_id', db_prefix() . 'taxes')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'taxes` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        }
    }
}