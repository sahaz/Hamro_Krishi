<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class News_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
        
           $this->load->helper('date');     
         date_default_timezone_set("Asia/Kathmandu"); 
        
         $this->load->model('mod_krishinews');
       
         
         
         
      }
      
      public function display_samachar()
      {
        
       $data['value2']=$this->mod_krishinews->select_krishinews_samachar();
       
       $data['page']="samachar";
         
         $this->load->view('news_main',$data);
     
                 
      }
      public function display_story()
      {
        
       $data['value2']=$this->mod_krishinews->select_krishinews_story();
       
       $data['page']="story";
         
         $this->load->view('news_main',$data);
     
                 
      }
      public function single_news($news_type, $id)
      {
        
       $data['value1']=$this->mod_krishinews->select_by_type($news_type,$id);
       
       $data['page']="samachar";
         
         $this->load->view('news_single',$data);
     
                 
      }
      
   }