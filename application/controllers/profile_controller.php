<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Profile_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
        
           $this->load->helper('date');     
         date_default_timezone_set("Asia/Kathmandu"); 
        
         $this->load->model('mod_farmersprofile');
         
       
         
         
         
      }
      
      public function display_profile()
      {
        
       $data['value2']=$this->mod_farmersprofile->show_farmersprofile();
       
       $data['page']="profile";
         
         $this->load->view('profile_main',$data);
     
                 
      }
      public function single_profile($id)
      {
        
       $data['value2']=$this->mod_farmersprofile->select_farmersprofile($id);
       $data['value3']=$this->mod_farmersprofile->select_farmersharvests($id);
       
       $data['page']="profile";
         
         $this->load->view('profile_single',$data);
     
                 
      }
      public function view_photos($id)
      {
        $data['value2']=$this->mod_farmersprofile->select_farmersprofile($id);
        $data['value3']=$this->mod_farmersprofile->select_myphotos($id);
        $data['page']="profile";
        $this->load->view('profile_photos',$data);
      }
      
   }