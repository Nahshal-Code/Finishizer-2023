<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Branches extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Branches_model');
        
        
        //$this->load->helper('modules_helper');

    }
    public function index()
    {
        $data['branches'] = $this->Branches_model->getBranches();
        $data['title'] = 'Branches';
        $this->load->view('admin/branches/manage',$data);
    }

    public function branch()
    {
        
        $this->load->view('admin/branches/create_branch');
    }

    public function create(){
        
        if ($this->input->post()) {
            $this->load->model('Leads_model');
            $data = $this->input->post();
            $id = $this->Branches_model->add($data);
            $this->Leads_model->add_email_integration($id);
            $this->Branches_model->add_new_branch_options($id);
            set_alert('success', _l('added_successfully', _l('branch')));
            
            // $src = './modules/';
            // $dst = './modules'.$id.'/';
            // custom_copy($src, $dst);
            redirect(admin_url('Branches'));
        }
    }

    public function delete($id){

        $bid = get_current_branch();

    //delete every tickets and related data in this branch

    $this->load->model('Tickets_model');
    $tickets = $this->Tickets_model->get('',['branch_id'=>$bid]);
    if($tickets){
        foreach($tickets as $tkt){
            $this->Tickets_model->delete($tkt['ticketid ']);
        }
    }

    $predefined_replies = $this->Tickets_model->get_predefined_reply();
    if($predefined_replies){
        foreach($predefined_replies as $reply){
            $this->Tickets_model->delete_predefined_reply($reply['id ']);
        }
    }

    $tkt_priorities = $this->Tickets_model->get_priority();
       if($tkt_priorities){
        foreach($tkt_priorities as $priority){
            if($priority['branch_id'] != '0'){
                $this->Tickets_model->delete_priority($priority['id']);
            }
        }
       }

       $tkt_statuses = $this->Tickets_model->get_priority();
       if($tkt_statuses){
        foreach($tkt_statuses as $stat){
            if($stat['branch_id'] != '0'){
                $this->Tickets_model->delete_ticket_status($stat['id']);
            }
        }
       }

       //delete every leads and related data in this branch

       $this->load->model('Leads_model');
           $leads = $this->Leads_model->get('',[ db_prefix() . 'leads.branch_id'=>$bid]);
          if($leads){
           foreach($leads as $lead){
               $this->Leads_model->delete($lead['id']);
           }        
          }
          $lead_sources = $this->Leads_model->get_source();
          if($lead_sources){
           foreach($lead_sources as $src){
               if($src['branch_id'] != '0'){
                   $this->Leads_model->delete_source($src['id']);
               }
           }
          }
   
          $lead_statuses = $this->Leads_model->get_status();
          if($lead_statuses){
           foreach($lead_statuses as $status){
               if($status['branch_id'] != '0'){
                   $this->Leads_model->delete_status($src['id']);
               }
           }
          }
   
          $this->Leads_model->delete_email_integration($bid);
   
          $wtl_forms = $this->Leads_model->get_form(['branch_id' =>$bid]);
          if($wtl_forms){
           foreach($wtl_forms as $form){
                       
                           $this->Leads_model->delete_form($form['id']);
                       
                   }
          }

       //delete knowledge base related data in this branch
        $this->load->model('Knowledge_base_model');
        $kb_groups = $this->Knowledge_base_model->get_kbg();
        if($kb_groups){
            foreach($kb_groups as $grp){
                $grp_articles = $this->Knowledge_base_model->get_group_articles($grp['groupid']);
                foreach($grp_articles as $art){
                    $this->Knowledge_base_model->delete_article($art['articleid']);
                }
                $this->Knowledge_base_model->delete_group($grp['groupid']);
            }
            
        }

        
        $response = $this->Branches_model->delete($id);

        if ($response){
            redirect(admin_url('Branches'));
        }
    }

    
    
}

?>