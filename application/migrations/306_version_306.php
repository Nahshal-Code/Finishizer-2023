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
        if (!$this->db->field_exists('branch_id', db_prefix() . 'customers_groups')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'customers_groups` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
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
        if (!$this->db->field_exists('branch_id', db_prefix() . 'currencies')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'currencies` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'payment_modes')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'payment_modes` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'expenses_categories')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'expenses_categories` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'contracts_types')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'contracts_types` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'estimate_request_forms')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'estimate_request_forms` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'estimate_request_status')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'estimate_request_status` ADD `branch_id` INT NULL DEFAULT NULL AFTER `id`;');
        }
        if (!$this->db->field_exists('branch_id', db_prefix() . 'tblknowledge_base_groups')) {
            $this->db->query('ALTER TABLE `' . db_prefix() . 'tblknowledge_base_groups` ADD `branch_id` INT NULL DEFAULT NULL AFTER `groupid `;');
        }
    }
}