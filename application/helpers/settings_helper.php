<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Add option
 *
 * @since  Version 1.0.1
 *
 * @param string  $name      Option name (required|unique)
 * @param string  $value     Option value
 * @param integer $autoload  Whether to autoload this option
 *
 */
function add_option($name, $value = '', $autoload = 1)
{
    if (!option_exists($name)) {
        $CI = & get_instance();

        $opt = $CI->db->select('id')->where('name', $name)->get(db_prefix() . 'options')->row();
        if(!$opt){
            $data = ['name' => $name];
            $CI->db->insert(db_prefix() . 'options', $data);
            $op_id = $CI->db->insert_id();

        }
        else{
            $op_id = $opt->id;
        }
        
        $newData = [
                    'branch_id' => get_current_branch(),
                    'option_id'  => $op_id,
                    'value' => $value,
                    'autoload' => $autoload,
                ];

        $CI->db->insert(db_prefix() . 'branch_options', $newData);
        $insert_id = $CI->db->insert_id();
        if ($insert_id) {
                return true;
        }
    
        return false;
        // $newData = [
        //         'name'  => $name,
        //         'value' => $value,
        //     ];

        // if ($CI->db->field_exists('autoload', db_prefix() . 'options')) {
        //     $newData['autoload'] = $autoload;
        // }

        // $CI->db->insert(db_prefix() . 'options', $newData);

        // $insert_id = $CI->db->insert_id();

        // if ($insert_id) {
        //     return true;
        // }

        // return false;
    }

    return false;
}

/**
 * Get option value
 * @param  string $name Option name
 * @return mixed
 */
function get_option($name)
{
    $CI = & get_instance();

    if (!class_exists('app', false)) {
        $CI->load->library('app');
    }

    return $CI->app->get_option($name);
}

/**
 * Updates option by name
 *
 * @param  string $name     Option name
 * @param  string $value    Option Value
 * @param  mixed $autoload  Whether to update the autoload
 *
 * @return boolean
 */
function update_option($name, $value, $autoload = null)
{
    /**
     * Create the option if not exists
     * @since  2.3.3
     */
    if (!option_exists($name)) {
        return add_option($name, $value, $autoload === null ? 1 : 0);
    }

    $CI = & get_instance();

    $op_id = $CI->db->select('id')->where('name', $name)->get(db_prefix() . 'options')->row();

    $CI->db->where('option_id', $op_id->id);
    $CI->db->where('branch_id', get_current_branch());
    $data = ['value' => $value];

    if ($autoload) {
        $data['autoload'] = $autoload;
    }

    $CI->db->update(db_prefix() . 'branch_options', $data);
    // $CI->db->where('name', $name);
    // $data = ['value' => $value];

    // if ($autoload) {
    //     $data['autoload'] = $autoload;
    // }

    // $CI->db->update(db_prefix() . 'options', $data);

    if ($CI->db->affected_rows() > 0) {
        return true;
    }

    return false;
}

/**
 * Delete option
 * @since  Version 1.0.4
 * @param  mixed $name option name
 * @return boolean
 */
function delete_option($name)
{
    $CI = &get_instance();
    $op_id = $CI->db->select('id')->where('name', $name)->get(db_prefix() . 'options')->row();

    $num = total_rows(db_prefix() . 'branch_options', ['option_id' => $op_id->id,]);
    
    if( $num == 1)
    {
        $CI->db->where('name', $name);
        $CI->db->delete(db_prefix() . 'options');
    }
        $CI->db->where('option_id', $op_id->id);
        $CI->db->where('branch_id', get_current_branch());
        $CI->db->delete(db_prefix() . 'branch_options');
        return (bool) $CI->db->affected_rows();
    
    
//     $CI = &get_instance();
//     $CI->db->where('name', $name);
//     $CI->db->delete(db_prefix() . 'options');

//     return (bool) $CI->db->affected_rows();
 }

/**
 * @since  2.3.3
 * Check whether an option exists
 *
 * @param  string $name option name
 *
 * @return boolean
 */
function option_exists($name)
{
    // return total_rows(db_prefix() . 'options', [
    //     'name' => $name,
    // ]) > 0;
    $bid = get_current_branch();
    if(!$bid){
        return total_rows(db_prefix() . 'options', [
                'name' => $name,
            ]) > 0;
    }
    else{
        $CI = &get_instance();
        $op_id = $CI->db->select('id')->where('name', $name)->get(db_prefix() . 'options')->row();
        if($op_id){
        return total_rows(db_prefix() . 'branch_options', [
            'branch_id' => get_current_branch(),'option_id' => $op_id->id,
             ]) > 0;
    }
    }
    
        
    return false;
    
}

function app_init_settings_tabs()
{
    $CI = &get_instance();

    $CI->app_tabs->add_settings_tab('general', [
        'name'     => _l('settings_group_general'),
        'view'     => 'admin/settings/includes/general',
        'position' => 5,
        'icon'     => 'fa fa-cog',
    ]);

    $CI->app_tabs->add_settings_tab('company', [
        'name'     => _l('company_information'),
        'view'     => 'admin/settings/includes/company',
        'position' => 10,
        'icon'     => 'fa-solid fa-bars-staggered',
    ]);

    $CI->app_tabs->add_settings_tab('localization', [
        'name'     => _l('settings_group_localization'),
        'view'     => 'admin/settings/includes/localization',
        'position' => 15,
        'icon'     => 'fa-solid fa-globe',
    ]);

    $CI->app_tabs->add_settings_tab('email', [
        'name'     => _l('settings_group_email'),
        'view'     => 'admin/settings/includes/email',
        'position' => 20,
        'icon'     => 'fa-regular fa-envelope',
    ]);

    $CI->app_tabs->add_settings_tab('sales', [
        'name'     => _l('settings_group_sales'),
        'view'     => 'admin/settings/includes/sales',
        'position' => 25,
        'icon'     => 'fa-solid fa-receipt',
    ]);

    $CI->app_tabs->add_settings_tab('subscriptions', [
        'name'     => _l('subscriptions'),
        'view'     => 'admin/settings/includes/subscriptions',
        'position' => 30,
        'icon'     => 'fa fa-repeat',
    ]);

    $CI->app_tabs->add_settings_tab('payment_gateways', [
        'name'     => _l('settings_group_online_payment_modes'),
        'view'     => 'admin/settings/includes/payment_gateways',
        'position' => 35,
        'icon'     => 'fa-regular fa-credit-card',
    ]);

    $CI->app_tabs->add_settings_tab('clients', [
        'name'     => _l('settings_group_clients'),
        'view'     => 'admin/settings/includes/clients',
        'position' => 40,
        'icon'     => 'fa-regular fa-user',
    ]);

    $CI->app_tabs->add_settings_tab('tasks', [
        'name'     => _l('tasks'),
        'view'     => 'admin/settings/includes/tasks',
        'position' => 45,
        'icon'     => 'fa-regular fa-circle-check',
    ]);

    $CI->app_tabs->add_settings_tab('tickets', [
        'name'     => _l('support'),
        'view'     => 'admin/settings/includes/tickets',
        'position' => 50,
        'icon'     => 'fa-regular fa-life-ring',
    ]);

    $CI->app_tabs->add_settings_tab('leads', [
        'name'     => _l('leads'),
        'view'     => 'admin/settings/includes/leads',
        'position' => 55,
        'icon'     => 'fa fa-tty',
    ]);

    $CI->app_tabs->add_settings_tab('calendar', [
        'name'     => _l('settings_calendar'),
        'view'     => 'admin/settings/includes/calendar',
        'position' => 60,
        'icon'     => 'fa-regular fa-calendar',
    ]);

    $CI->app_tabs->add_settings_tab('pdf', [
        'name'     => _l('settings_pdf'),
        'view'     => 'admin/settings/includes/pdf',
        'position' => 65,
        'icon'     => 'fa-regular fa-file-pdf',
    ]);

    $CI->app_tabs->add_settings_tab('e_sign', [
        'name'     => 'E-Sign',
        'view'     => 'admin/settings/includes/e_sign',
        'position' => 70,
        'icon'     => 'fa-solid fa-signature',
    ]);

    $CI->app_tabs->add_settings_tab('cronjob', [
        'name'     => _l('settings_group_cronjob'),
        'view'     => 'admin/settings/includes/cronjob',
        'position' => 75,
        'icon'     => 'fa-solid fa-microchip',
    ]);

    $CI->app_tabs->add_settings_tab('tags', [
        'name'     => _l('tags'),
        'view'     => 'admin/settings/includes/tags',
        'position' => 80,
        'icon'     => 'fa-solid fa-tags',
    ]);

    $CI->app_tabs->add_settings_tab('pusher', [
        'name'     => 'Pusher.com',
        'view'     => 'admin/settings/includes/pusher',
        'position' => 85,
        'icon'     => 'fa-regular fa-bell',
    ]);

    $CI->app_tabs->add_settings_tab('google', [
        'name'     => 'Google',
        'view'     => 'admin/settings/includes/google',
        'position' => 90,
        'icon'     => 'fa-brands fa-google',
    ]);

    $CI->app_tabs->add_settings_tab('misc', [
        'name'     => _l('settings_group_misc'),
        'view'     => 'admin/settings/includes/misc',
        'position' => 95,
        'icon'     => 'fa-solid fa-gears',
    ]);
}