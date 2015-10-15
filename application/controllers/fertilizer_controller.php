<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Fertilizer_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
        
           $this->load->helper('date');     
         date_default_timezone_set("Asia/Kathmandu"); 
        
         $this->load->model('mod_fertilizer');
       
         $this->load->model('mod_data');
         
         
      }
      
      public function display_fertilizer()
      {
        
       $data['value2']=$this->mod_fertilizer->show_fertilizer();
       $data['value3']=$this->mod_data->select_data_of("fertilizer");
       $data['title']="FERTILIZERS";
       $data['page']="fertilizer";
         
         $this->load->view('fertilizer_main',$data);
     
                 
      }
      public function display_single_fertilizer($id)
      {
          $data['value1']=$this->mod_fertilizer->select_fertilizer($id);
        $data['value2']=$this->mod_fertilizer->show_fertilizer();
       
       
       $data['title']="FERTILIZERS";
       $data['page']="fertilizer";
         
         $this->load->view('fertilizer_single',$data);
     
                 
      }
      
   }