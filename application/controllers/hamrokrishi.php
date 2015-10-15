<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Hamrokrishi extends CI_Controller {
   
      public function __construct() {
         parent::__construct();
          $this->load->helper('date'); 
         date_default_timezone_set("Asia/Kathmandu"); 
         
         $this->load->model('mod_slider');
          $this->load->model('mod_krishinews');
          $this->load->model('mod_farmersprofile');
   
      }
      
    
      
      public function index()
      {
        
       $data['slider']=$this->mod_slider->show_slider_images();
        $data['samachar']=$this->mod_krishinews->select_krishinews_samachar();
        $data['story']=$this->mod_krishinews->select_krishinews_story();
        $data['krishaks']=$this->mod_farmersprofile->show_farmersprofile();
        $data['page']="home";
        
         
         $this->load->view('index',$data);
                 
      }
   }