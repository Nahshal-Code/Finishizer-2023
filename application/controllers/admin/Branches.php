<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Branches extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Branches_model');
        $this->load->model('Leads_model');
        $this->load->helper('modules_helper');

    }
    public function index()
    {
        $data['branches'] = $this->Branches_model->getBranches();
        $this->load->view('admin/branches/manage',$data);
    }

    public function branch()
    {
        
        $this->load->view('admin/branches/create_branch');
    }

    public function create(){
        if ($this->input->post()) {
            $data = $this->input->post();
            $id = $this->Branches_model->add($data);
            set_alert('success', _l('added_successfully', _l('branch')));
            $this->Leads_model->add_email_integration($id);
            $src = './modules/';
            $dst = './modules'.$id.'/';
            custom_copy($src, $dst);
            redirect(admin_url('Branches'));
        }
    }

    public function branch_home($bid){
        app_init_admin_sidebar_menu_items();
        redirect(admin_url('dashboard/'.$bid));
    }
    
}

?>