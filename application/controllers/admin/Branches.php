<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Branches extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Branches_model');
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
            $this->Branches_model->add($data);
            set_alert('success', _l('added_successfully', _l('branch')));
            redirect(admin_url('Branches'));
        }
    }

    
}

?>