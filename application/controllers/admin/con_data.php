<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_data extends CI_Controller {
     
   public function __construct() {
         parent::__construct();
          $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
          
         $this->load->model('mod_data');
          
      }
      
        public function show_data()
      {
       $data['value']=$this->mod_data->show_data();
        $data['title']="DATA";
         $data['page']="data";
       $this->load->view('admin/show_data',$data);
       
      }
      public function add_data()
      {  
          $data['page']="data";
          $data['title']="ADD DATA";    
          $this->load->view('admin/add_data',$data);
      }
      
      public function process_data()
      {
          $data['data_of']=$this->input->post('data_of');
          $data['data_description']=$this->input->post('data_description');
        
       
           
           $data['data_image']=$_FILES['data_image']['name'];
           
           $source=$_FILES['data_image']['tmp_name'];
           $destination=BASEPATH."../uploads/all_data/".$_FILES['data_image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_data->upload_data($data);
           
            redirect('admin/con_data/show_data');
           
      }
      public function edit_data($id)
      {
        $data['value']=$this->mod_data->select_data($id);
        $title1=$data['value']->row();
         $data['title']="EDIT data for ".$title1->data_of;
       $data['page']="data";
        $this->load->view('admin/edit_data',$data);
      }
      
      public function process_edit_data($id)
      { 
         $data['data_of']=$this->input->post('data_of');
          $data['data_description']=$this->input->post('data_description');
        
       
          $img1=$this->input->post('hidden');
          $img2=$_FILES['data_image']['name'];
           if ($img2=='')
           {
              $data['data_image']=$img1;
           }
           else
           {
              $data['data_image']=$img2;
              unlink(BASEPATH."../uploads/all_data/".$img1);
              
           }
           $source=$_FILES['data_image']['tmp_name'];
           $destination=BASEPATH."../uploads/all_data/".$_FILES['data_image']['name'];
           move_uploaded_file($source,$destination);
           
           
           $this->mod_data->upload_edit_data($data,$id);
           
           redirect('admin/con_data/show_data');
      }
        public function delete_data($id)
      {
           
       
           $data['value']=$this->mod_data->select_data($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/all_data/".$r->data_image);
           
           $this->mod_data->delete_data($id);
           
        
          redirect('admin/con_data/show_data');
        
      }
}