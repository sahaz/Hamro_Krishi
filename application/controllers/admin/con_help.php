<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_help extends CI_Controller {
     
   public function __construct() {
         parent::__construct();
          $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
          
         $this->load->model('mod_help');
          
      }
      
        public function show_help()
      {
       $data['value']=$this->mod_help->show_help(); 
       $data['title']="HELP";
         $data['page']="help";
       $this->load->view('admin/show_help',$data);
       
      }
      public function add_help()
      {     
          $data['title']="ADD HELP";
            $data['page']="help";
          $this->load->view('admin/add_help',$data);
      }
      
      public function process_help()
      {
          $data['help_section']=$this->input->post('help_section');
          $data['help_description']=$this->input->post('help_description');
        
       
           
         
           
           $this->mod_help->upload_help($data);
            redirect('admin/con_help/show_help');
           
      }
      public function edit_help($id)
      {
        $data['value']=$this->mod_help->select_help($id);
        $title1=$data['value']->row();
         $data['title']="EDIT help for ".$title1->help_section;
       $data['page']="help";
        $this->load->view('admin/edit_help',$data);
      }
      
      public function process_edit_help($id)
      { 
          $data['help_section']=$this->input->post('help_section');
          $data['help_description']=$this->input->post('help_description');
        
       
        
      
           
           
           $this->mod_help->upload_edit_help($data,$id);
           redirect('admin/con_help/show_help');
      }
        public function delete_help($id)
      {
           
       
         
           
           $this->mod_help->delete_help($id);
           
        
          redirect('admin/con_help/show_help');
        
      }
}