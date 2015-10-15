<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Disease_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
        
           $this->load->helper('date');     
         date_default_timezone_set("Asia/Kathmandu"); 
        
         $this->load->model('mod_crops');
         $this->load->model('mod_diseases');
         $this->load->model('mod_data');
         
         
      }
      
      public function display_crops()
      {
        
       $data['value1']=$this->mod_crops->show_crops();
       $data['value2']=$this->mod_data->select_data_of("disease");
       $data['page']="disease";
         
         $this->load->view('diseases_main',$data);
                 
      }
       public function display_diseases($id)
      {
        
      
       $data['value1']=$this->mod_diseases->select_crops_diseases($id);
       $r=$data['value1']->row();
       $data['value2']=$this->mod_crops->select_crops($r->crop_id);  
       $s=$data['value2']->row();
       $data['title']=$s->crop_name." Diseases";
       $data['page']="disease";
         $this->load->view('diseases_list',$data);
                 
      }
      public function display_single_disease($id)
      {
        
       $data['value1']=$this->mod_diseases->select_diseases($id);
        $r=$data['value1']->row();
       $data['value2']=$this->mod_crops->select_crops($r->crop_id);
       $data['value3']=$this->mod_diseases->show_diseases();
       $data['value4']=$this->mod_crops->show_crops();
       $data['title']=$r->disease_name; 
       $data['page']="disease";
         $this->load->view('disease_single',$data);
                 
      }
   }