<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Soil_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
        
           $this->load->helper('date');     
         date_default_timezone_set("Asia/Kathmandu"); 
        
         $this->load->model('mod_soil');
       
         $this->load->model('mod_data');
         
         
      }
      
      public function display_soil()
      {
        
       $data['value2']=$this->mod_data->select_data_of("soil");
       
       $data['page']="soil";
         
         $this->load->view('soil_main',$data);
     
                 
      }
      public function display_districts($region)
      {
        
       $data['value2']=$this->mod_soil->select_place($region);
       $data['value3']=$this->mod_soil->select_districts($region);
       
       $data['page']="soil";
         
         $this->load->view('soil_districts',$data);
     
                 
      }
      public function display_location($id)
      {
        
       $data['value1']=$this->mod_soil->select_soil($id);
       $t=$data['value1']->row();
       $region=$t->dev_region;
       $data['value2']=$this->mod_soil->select_place($region);
       $data['value3']=$this->mod_soil->select_districts($region);
       
       $data['page']="soil";
         
         $this->load->view('soil_location',$data);
     
                 
      }
      
   }