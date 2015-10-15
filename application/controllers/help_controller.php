<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Help_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
        
           $this->load->helper('date');     
         date_default_timezone_set("Asia/Kathmandu"); 
        
         $this->load->model('mod_help');
       
         
         
         
      }
      
      public function display_help()
      {
        
       $data['value1']=$this->mod_help->show_help();
       
       $data['page']="help";
         
         $this->load->view('help',$data);
     
                 
      }
      
   }