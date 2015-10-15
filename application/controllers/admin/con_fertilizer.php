<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_fertilizer extends CI_Controller {
     
   public function __construct() {
         parent::__construct();
         
          $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
          $this->load->model('mod_fertilizer');
          
      }
      
        public function show_fertilizer()
      {
       $data['value']=$this->mod_fertilizer->show_fertilizer();  
       $data['title']="FERTILIZERS";
       $data['page']="fertilizer";
       $this->load->view('admin/show_fertilizer',$data);
       
      }
      
       public function add_fertilizer()
      { 
           $data['title']="ADD FERTILIZER";
           $data['page']="fertilizer";
          $this->load->view('admin/add_fertilizer',$data);
      }
      
      public function process_fertilizer()
      {
          $data['fertilizer_name']=$this->input->post('fertilizer_name');
          $data['fertilizer_description']=$this->input->post('fertilizer_description');
          $data['seo_keyword']=$this->input->post('seo_keyword');
          $data['seo_title']=$this->input->post('seo_title');
          $data['metadata']=$this->input->post('metadata');
         
           
           $data['fertilizer_image']=$_FILES['fertilizer_image']['name'];
           
           $source=$_FILES['fertilizer_image']['tmp_name'];
           $destination=BASEPATH."../uploads/fertilizer/".$_FILES['fertilizer_image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_fertilizer->upload_fertilizer($data);
            redirect('admin/con_fertilizer/show_fertilizer');
           
      }
       public function edit_fertilizer($id)
      {
        $data['value']=$this->mod_fertilizer->select_fertilizer($id);
        $title1=$data['value']->row();
         $data['title']="EDIT ".$title1->fertilizer_name;
        $data['page']="fertilizer";
        $this->load->view('admin/edit_fertilizer',$data);
      }
      
      public function process_edit_fertilizer($id)
      {
           $data['fertilizer_name']=$this->input->post('fertilizer_name');
           $data['fertilizer_description']=$this->input->post('fertilizer_description');
           $data['seo_keyword']=$this->input->post('seo_keyword');
            $data['seo_title']=$this->input->post('seo_title');
           $data['metadata']=$this->input->post('metadata');
           $img1=$this->input->post('hidden');
           $img2=$_FILES['fertilizer_image']['name'];
           if ($img2=='')
           {
              $data['fertilizer_image']=$img1;
           }
           else
           {
              $data['fertilizer_image']=$img2;
              unlink(BASEPATH."../uploads/fertilizer/".$img1);
              
           }
           $source=$_FILES['fertilizer_image']['tmp_name'];
           $destination=BASEPATH."../uploads/fertilizer/".$_FILES['fertilizer_image']['name'];
           move_uploaded_file($source,$destination);
           
           
           $this->mod_fertilizer->upload_edit_fertilizer($data,$id);
           redirect('admin/con_fertilizer/show_fertilizer');
      }
        public function delete_fertilizer($id)
      {
           
       
           $data['value']=$this->mod_fertilizer->select_fertilizer($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/fertilizer/".$r->fertilizer_image);
           
           $this->mod_fertilizer->delete_fertilizer($id);
           
        
          redirect('admin/con_fertilizer/show_fertilizer');
        
      }
      
}
   
   