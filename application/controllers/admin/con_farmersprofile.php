<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_farmersprofile extends CI_Controller {
     
   public function __construct() {
         parent::__construct();
          $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
         
          $this->load->model('mod_farmersprofile');
          
      }
      
        public function show_farmersprofile()
      {
       $data['value']=$this->mod_farmersprofile->show_farmersprofile(); 
       $data['title']="FARMER'S PROFILE";
       $data['page']="profile";
       $this->load->view('admin/show_farmersprofile',$data);
       
      }
      public function delete_farmersprofile($id)
      {
         $data['value']=$this->mod_farmersprofile->select_farmersprofile($id);
           
           $r=$data['value']->row();
           if($r->farmers_image != "default.jpg"){
               
           
           unlink(BASEPATH."../uploads/farmersprofile/".$r->farmers_image);
           }
           $this->mod_farmersprofile->delete_farmersprofile($id);
           
        
          redirect('admin/con_farmersprofile/show_farmersprofile');
        
       
      }
}