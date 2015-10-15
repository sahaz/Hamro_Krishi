<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_harvest extends CI_Controller {
     
   public function __construct() {
         parent::__construct();
         
          $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
          $this->load->model('mod_harvest');
          
      }
      
        public function show_harvest()
      {
       $data['value']=$this->mod_harvest->show_harvest();
       $data['title']="FARMER'S HARVEST";
       $data['page']="harvest";
       $this->load->view('admin/show_harvest',$data);
       
      }
      public function delete_harvest($id)
      {
         $data['value']=$this->mod_harvest->select_harvest($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/farmersprofile/".$r->harvest_image);
           
           $this->mod_harvest->delete_harvest($id);
           
        
          redirect('admin/con_harvest/show_harvest');
        
       
      }
}