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
        $this->load->library('session');
        $this->session->set_userdata('selectedbranch_id',0);
        $data['branches'] = $this->Branches_model->get();
        $data['title'] = 'Branches';
        $this->load->view('admin/branches/manage',$data);
    }

    public function branch($id='')
    {
        if ($this->input->post()) {
            if ($id == '') {
                // if (!has_permission('expenses', '', 'create')) {
                //     set_alert('danger', _l('access_denied'));
                //     echo json_encode([
                //         'url' => admin_url('expenses/expense'),
                //     ]);
                //     die;
                // }
                $this->load->model('Leads_model');
                 
                $id = $this->Branches_model->add($this->input->post());
                               
                if ($id) {
                    $this->Leads_model->add_email_integration($id);
                    $this->Branches_model->add_new_branch_options($id);
                    set_alert('success', _l('added_successfully', _l('branch')));
                    redirect(admin_url('branches'));
                    
                }
                set_alert('danger', _l('error'));
                    redirect(admin_url('branches'));
            }
        
            // if (!has_permission('expenses', '', 'edit')) {
            //     set_alert('danger', _l('access_denied'));
            //     echo json_encode([
            //             'url' => admin_url('expenses/expense/' . $id),
            //         ]);
            //     die;
            // }
            $success = $this->Branches_model->update($id,$this->input->post());
            if ($success) {
                set_alert('success', _l('updated_successfully', _l('Branch')));
                redirect(admin_url('branches'));
            }
            
         }
        $data = [];
        if($id != ''){
            $this->session->set_userdata('selectedbranch_id',$id);
            $data['branch'] = $this->Branches_model->get($id);
            
        }
        $this->load->model('Currencies_model');
        $data['currencies'] = $this->Currencies_model->get();
        $this->load->view('admin/branches/branch',$data);
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

    public function delete($bid)
    {
        //delete every client and related data in this branch
        $this->load->model('Clients_model');
        $clients = $this->Clients_model->get('',['branch_id'=>$bid]);
        if($clients){
            foreach($clients as $client){
                $this->Clients_model->delete($client['userid']);
            }
        }

        //delete every item and related data in this branch
        $this->load->model('Invoice_items_model');
        $items = $this->Invoice_items_model->get('',[db_prefix() . 'items.branch_id'=>$bid]);
        if($items){
            foreach($items as $itm){
                $this->Invoice_items_model->delete_item_taxes($itm['id']);
                $this->Invoice_items_model->delete($itm['id']);
            }
        }
        $item_grps = $this->Invoice_items_model->get_groups();
        if($item_grps){
            foreach($item_grps as $grp){
                $this->Invoice_items_model->delete_group($grp['id']);
            }
        }
        //delete expenses and related data in this branch
        $this->load->model('Expenses_model');
        $expenses = $this->Expenses_model->get('',[db_prefix() . 'expenses.branch_id'=>$bid]);
        if($expenses){
            foreach($expenses as $exp){
                $this->Expenses_model->delete($exp['id']);
            }
        }

        $expense_cat = $this->Expenses_model->get_category();
        if($expense_cat){
            foreach($expense_cat as $cat){
                $this->Expenses_model->delete_category($cat['id']);
            }
        }
        //delete every tickets and related data in this branch

        $this->load->model('Tickets_model');
        $tickets = $this->Tickets_model->get('',[db_prefix() . 'tickets.branch_id'=>$bid]);
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

          //delete every tasks in this branch
        $this->load->model('Tasks_model');
        $tasks = $this->Tasks_model->get('',['branch_id'=>$bid]);
        if($tasks){
            foreach($tasks as $tsk){
                $this->Tasks_model->delete_task($tsk['id']);
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

        //delete staff related data in this branch
        $this->load->model('Staff_model');
        $staffs = $this->Staff_model->get('',['branch_id'=>$bid]);
        if($staffs){            
                
                foreach($staffs as $stf){
                    $this->Staff_model->delete($stf['staffid'],get_staff_user_id());
                }
                          
            
        }
        $response = $this->Branches_model->delete($bid);
        
        if ($response){
            redirect(admin_url('Branches'));
            
        }
    }

    
    
}

?>