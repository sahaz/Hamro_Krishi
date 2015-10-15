<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_crops extends CI_Controller {
     
   public function __construct() {
         parent::__construct();
         $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
         
          $this->load->model('mod_crops');
          $this->load->model('mod_diseases');
      }
      
        public function show_crops()
      {
       $data['value']=$this->mod_crops->show_crops(); 
       $data['title']="CROPS";
       $data['page']="crop";
       $this->load->view('admin/show_crops',$data);
       
      }
      
       public function add_crops()
      {     
           $data['page']="crop";
           $data['title']="ADD CROPS";
          $this->load->view('admin/add_crops',$data);
      }
      
      public function process_crops()
      {
          $data['crop_name']=$this->input->post('crop_name');
          $data['crop_sname']=$this->input->post('crop_sname');
          $data['seo_keyword']=$this->input->post('seo_keyword');
          $data['seo_title']=$this->input->post('seo_title');
          $data['metadata']=$this->input->post('metadata');
         
           
           $data['crop_image']=$_FILES['crop_image']['name'];
           
           $source=$_FILES['crop_image']['tmp_name'];
           $destination=BASEPATH."../uploads/crops/".$_FILES['crop_image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_crops->upload_crops($data);
           
           
            redirect('admin/con_crops/show_crops');
           
      }
       public function edit_crops($id)
      {
        $data['value']=$this->mod_crops->select_crops($id);
         $title1=$data['value']->row();
         $data['title']="EDIT ".$title1->crop_name;
        $data['page']="crop";
        $this->load->view('admin/edit_crops',$data);
      }
      
      public function process_edit_crops($id)
      {
           $data['crop_name']=$this->input->post('crop_name');
           $data['crop_sname']=$this->input->post('crop_sname');
           $data['seo_keyword']=$this->input->post('seo_keyword');
            $data['seo_title']=$this->input->post('seo_title');
           $data['metadata']=$this->input->post('metadata');
           $img1=$this->input->post('hidden');
           $img2=$_FILES['crop_image']['name'];
           if ($img2=='')
           {
              $data['crop_image']=$img1;
           }
           else
           {
              $data['crop_image']=$img2;
              unlink(BASEPATH."../uploads/crops/".$img1);
              
           }
           $source=$_FILES['crop_image']['tmp_name'];
           $destination=BASEPATH."../uploads/crops/".$_FILES['crop_image']['name'];
           move_uploaded_file($source,$destination);
           
           
           $this->mod_crops->upload_edit_crops($data,$id);
         
           redirect('admin/con_crops/show_crops');
      }
        public function delete_crops($id)
      {
           
       
           $data['value']=$this->mod_crops->select_crops($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/crops/".$r->crop_image);
           
           $this->mod_crops->delete_crops($id);
           
           
           $data['value']=$this->mod_diseases->select_crops_diseases($id);
           foreach($data['value']->result() as $r)
           {
           unlink(BASEPATH."../uploads/diseases/".$r->disease_image);
           }
           $this->mod_diseases->delete_diseases_crops($id);
        
          redirect('admin/con_crops/show_crops');
        
      }
      
}
   
   