<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_dashboard extends CI_Controller {
   
   public function __construct() 
      {
        parent::__construct();
         
         $this->load->helper('date');
         
         
         date_default_timezone_set("Asia/Kathmandu"); 
         
      }
      
   public function show_dashboard()
   {
      $data['title']="DASHBOARD";
      $this->load->view('admin/dashboard',$data);
   }
}
   