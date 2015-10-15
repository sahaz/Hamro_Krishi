<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_maps extends CI_Controller {
     
   public function __construct() {
         parent::__construct();
          $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
          $this->load->model('mod_maps');
          
      }
      
        public function show_maps()
      {
       $data['value']=$this->mod_maps->show_maps();
       $data['title']="MEDICINAL AND AROMATIC PLANTS";
         $data['page']="maps";
       $this->load->view('admin/show_maps',$data);
       
      }
      public function add_maps()
      {  
          $data['title']="ADD MAPS";
            $data['page']="maps";
          $this->load->view('admin/add_maps',$data);
      }
      
      public function process_maps()
      {
          $data['maps_name']=$this->input->post('maps_name');
          $data['maps_description']=$this->input->post('maps_description');
        
          $data['seo_keyword']=$this->input->post('seo_keyword');
          $data['seo_title']=$this->input->post('seo_title');
          $data['metadata']=$this->input->post('metadata');
         
           
           $data['maps_image']=$_FILES['maps_image']['name'];
           
           $source=$_FILES['maps_image']['tmp_name'];
           $destination=BASEPATH."../uploads/maps/".$_FILES['maps_image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_maps->upload_maps($data);
            redirect('admin/con_maps/show_maps');
           
      }
      public function edit_maps($id)
      {
        $data['value']=$this->mod_maps->select_maps($id);
        $title1=$data['value']->row();
         $data['title']="EDIT ".$title1->maps_name;
       $data['page']="maps";
        $this->load->view('admin/edit_maps',$data);
      }
      
      public function process_edit_maps($id)
      { 
         $data['maps_name']=$this->input->post('maps_name');
          $data['maps_description']=$this->input->post('maps_description');
        
          $data['seo_keyword']=$this->input->post('seo_keyword');
          $data['seo_title']=$this->input->post('seo_title');
          $data['metadata']=$this->input->post('metadata');
           
          $img1=$this->input->post('hidden');
          $img2=$_FILES['maps_image']['name'];
           if ($img2=='')
           {
              $data['maps_image']=$img1;
           }
           else
           {
              $data['maps_image']=$img2;
              unlink(BASEPATH."../uploads/maps/".$img1);
              
           }
           $source=$_FILES['maps_image']['tmp_name'];
           $destination=BASEPATH."../uploads/maps/".$_FILES['maps_image']['name'];
           move_uploaded_file($source,$destination);
           
           
           $this->mod_maps->upload_edit_maps($data,$id);
           redirect('admin/con_maps/show_maps');
      }
        public function delete_maps($id)
      {
           
       
           $data['value']=$this->mod_maps->select_maps($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/maps/".$r->maps_image);
           
           $this->mod_maps->delete_maps($id);
           
        
          redirect('admin/con_maps/show_maps');
        
      }
}