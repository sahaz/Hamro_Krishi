<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_slider extends CI_Controller {
   
   public function __construct() {
         parent::__construct();
          $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
          $this->load->model('mod_slider');
   }
   
   public function show_slider_images()
   {
     
      $data['value']=$this->mod_slider->show_slider_images();
      $data['title']="SLIDER IMAGES";
      $data['page']="slider";
      $this->load->view('admin/show_slider_images',$data);
   }

   public function process_slider_images()
   {
     
      $source=$_FILES['picture']['tmp_name'];
         $destination=BASEPATH."../uploads/slider/".$_FILES['picture']['name'];
         move_uploaded_file($source, $destination);
         
         $data['slider_image']=$_FILES['picture']['name'];
         $data['image_description']=$this->input->post('description');
         $this->mod_slider->upload_slider_images($data);
         $this->session->set_flashdata('uploaded','Successfully uploaded');
         redirect("admin/con_slider/show_slider_images");
   }
   
   public function delete_slider_images($id)
      {  
      
         $data['value']=$this->mod_slider->select_images($id);
         $a=$data['value']->row();
         
         unlink(BASEPATH."../uploads/slider/".$a->slider_image);
         $v=$a->slider_image;
         $this->mod_slider->delete_slider_images($id);
           $this->session->set_flashdata('deleted','Successfully deleted :  '.$v);
          redirect("admin/con_slider/show_slider_images");
      }
   
}