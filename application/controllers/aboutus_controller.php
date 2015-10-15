<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Aboutus_controller extends CI_Controller {
            public function __construct() 
      {
        parent::__construct();
         $this->load->model('mod_ourteam');
            $this->load->helper('date');     
         date_default_timezone_set("Asia/Kathmandu"); 
        
         
         
      }
      public function display_aboutus()
      {
         $data['value1']=$this->mod_ourteam->show_aboutus();
         $data['title']="ABOUT US";
         $data['page']="aboutus";
         $this->load->view('aboutus',$data);
         
      }
   }