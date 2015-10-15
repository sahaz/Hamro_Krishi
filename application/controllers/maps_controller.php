<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Maps_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
        
           $this->load->helper('date');     
         date_default_timezone_set("Asia/Kathmandu"); 
        
         $this->load->model('mod_maps');
       
         $this->load->model('mod_data');
         
         
      }
      
      public function display_maps()
      {
        
          $data['value2']=$this->mod_maps->show_maps();
       
       
       $data['value3']=$this->mod_data->select_data_of("maps");
       
       $data['page']="maps";
         
         $this->load->view('maps_main',$data);
     
                 
      }
      public function display_single_maps($id)
      {
         $data['value1']=$this->mod_maps->select_maps($id);
        $data['value2']=$this->mod_maps->show_maps();
       
       
       $data['title']="MEDICINAL PLANTS";
       $data['page']="maps";
         
         $this->load->view('maps_single',$data);
     
                 
      }
      
   }