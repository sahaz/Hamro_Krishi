<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Test extends CI_Controller {
   
      public function __construct() {
         parent::__construct();
         $this->load->model('mod_slider');
          $this->load->model('mod_krishinews');
          
         
            
            
         
       
      }
      
    
      
      public function show()
      {
        
       $data['slider']=$this->mod_slider->show_slider_images();
        $data['samachar']=$this->mod_krishinews->select_krishinews_samachar();
        $data['story']=$this->mod_krishinews->select_krishinews_story();
        
         
         $this->load->view('test',$data);
                 
      }
   }