<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_diseases extends CI_Controller {
     
   public function __construct() {
         parent::__construct();
         
          $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
          $this->load->model('mod_diseases');
          $this->load->model('mod_crops');
      }
      
        public function show_diseases()
      {
       $data['value']=$this->mod_diseases->show_diseases();  
       $data['value2']=$this->mod_crops->show_crops(); 
       $data['title']="DISEASES";
       $data['page']="disease";
       $this->load->view('admin/show_diseases',$data);
       
      }
       public function add_diseases()
      {  
          $data['value']=$this->mod_crops->show_crops();
          $data['title']="ADD DISEASE";
          $data['page']="disease";
          $this->load->view('admin/add_diseases',$data);
      }
      
      public function process_diseases()
      {
          $data['crop_id']=$this->input->post('disease_crop');
          $data['disease_type']=$this->input->post('disease_type');
          $data['disease_name']=$this->input->post('disease_name');
          $data['disease_lname']=$this->input->post('disease_lname');
          $data['disease_causes']=$this->input->post('disease_causes');
          $data['disease_symptoms']=$this->input->post('disease_symptoms');
          $data['disease_preventive_measures']=$this->input->post('disease_preventive_measures');
          $data['seo_keyword']=$this->input->post('seo_keyword');
          $data['seo_title']=$this->input->post('seo_title');
          $data['metadata']=$this->input->post('metadata');
         
           
           $data['disease_image']=$_FILES['disease_image']['name'];
           
           $source=$_FILES['disease_image']['tmp_name'];
           $destination=BASEPATH."../uploads/diseases/".$_FILES['disease_image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_diseases->upload_diseases($data);
           
            redirect('admin/con_diseases/show_diseases');
           
      }
       public function edit_diseases($id)
      {
        $data['value']=$this->mod_diseases->select_diseases($id);
        $data['value2']=$this->mod_crops->show_crops($id);
        $title1=$data['value']->row();
         $data['title']="EDIT ".$title1->disease_name;
        $data['page']="disease";
        $this->load->view('admin/edit_diseases',$data);
      }
      
      public function process_edit_diseases($id)
      {
         $data['crop_id']=$this->input->post('disease_crop');
          $data['disease_type']=$this->input->post('disease_type');
          $data['disease_name']=$this->input->post('disease_name');
          $data['disease_lname']=$this->input->post('disease_lname');
          $data['disease_causes']=$this->input->post('disease_causes');
          $data['disease_symptoms']=$this->input->post('disease_symptoms');
          $data['disease_preventive_measures']=$this->input->post('disease_preventive_measures');
          $data['seo_keyword']=$this->input->post('seo_keyword');
          $data['seo_title']=$this->input->post('seo_title');
          $data['metadata']=$this->input->post('metadata');
           
          $img1=$this->input->post('hidden');
          $img2=$_FILES['disease_image']['name'];
           if ($img2=='')
           {
              $data['disease_image']=$img1;
           }
           else
           {
              $data['disease_image']=$img2;
              unlink(BASEPATH."../uploads/diseases/".$img1);
              
           }
           $source=$_FILES['disease_image']['tmp_name'];
           $destination=BASEPATH."../uploads/diseases/".$_FILES['disease_image']['name'];
           move_uploaded_file($source,$destination);
           
           
           $this->mod_diseases->upload_edit_diseases($data,$id);
           
           redirect('admin/con_diseases/show_diseases');
      }
        public function delete_diseases($id)
      {
           
       
           $data['value']=$this->mod_diseases->select_diseases($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/diseases/".$r->disease_image);
           
           $this->mod_diseases->delete_diseases($id);
           
        
          redirect('admin/con_diseases/show_diseases');
        
      }
      
}