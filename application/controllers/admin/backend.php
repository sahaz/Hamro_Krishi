<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Backend extends CI_Controller {
   
   
    
   public function __construct() {
         parent::__construct();
         
         $this->load->helper('date');
         
         
         date_default_timezone_set("Asia/Kathmandu"); 
         
          $this->load->model('mod_login');
   }
   
   public function backend_login()
   {
       $data['title']="LOGIN to HAMROKRISHI";
      $this->load->view('admin/backend_login',$data);
   }
   
   
   public function process()
   {
       $data['email']=$this->input->post('email');
           $data['password']=$this->input->post('pass');
           $data['password']=md5($data['password']); 
           
           $result=$this->mod_login->check_admin($data);
          $r= $result->row();
            if(!empty($r))
         {  
                $datestring = "%h:%i %A";
                
            $session_array=array('status'=>$r->email,'name'=>$r->name,'access_level'=>$r->access_level,'start'=> mdate($datestring));
           
            $this->session->set_userdata($session_array);
            redirect('admin/con_dashboard/show_dashboard');
         }
         else
         {
            $this->session->set_flashdata('error','Authentication Failure : Username & Password unmatched');
            redirect('admin/backend/backend_login');
         }
      }
      
       public function logout()
   {
     $this->session->unset_userdata('status','name', 'access_level');
     
          $this->session->set_flashdata('logout','Successfully logged out ! Thankyou ');
            redirect('admin/backend/backend_login');
   }
   
  
}