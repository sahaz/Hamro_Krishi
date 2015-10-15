
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_soil extends CI_Controller {
     
   public function __construct() {
         parent::__construct();
         
          $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
          $this->load->model('mod_soil');
          
      }
      
        public function show_soil()
      {
       $data['value']=$this->mod_soil->show_soil(); 
       $data['title']="SOIL";
       $data['page']="soil";
       $this->load->view('admin/show_soil',$data);
      }
      public function add_soil()
      {  
          $data['title']="ADD SOIL PROFILE";
          $data['page']="soil";
          $this->load->view('admin/add_soil',$data);
      }
      
      public function process_soil()
      {
          $data['place']=$this->input->post('place_name');
          $data['dev_region']=$this->input->post('dev_region');
          $data['soil_type']=$this->input->post('soil_type');
          $data['avg_temp']=$this->input->post('avg_temp');
          $data['avg_rainfall']=$this->input->post('avg_rainfall');
          $data['nitrogen']=$this->input->post('nitrogen');
          $data['phosphorous']=$this->input->post('phosphorous');
          $data['potassium']=$this->input->post('potassium');
          $data['mineral']=$this->input->post('mineral');
          $data['nutrient']=$this->input->post('nutrient');
          $data['ph_value']=$this->input->post('ph_value');
          $data['seo_keyword']=$this->input->post('seo_keyword');
          $data['seo_title']=$this->input->post('seo_title');
          $data['metadata']=$this->input->post('metadata');
         
           
           $data['place_image']=$_FILES['place_image']['name'];
           
           $source=$_FILES['place_image']['tmp_name'];
           $destination=BASEPATH."../uploads/soil/".$_FILES['place_image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_soil->upload_soil($data);
            redirect('admin/con_soil/show_soil');
           
      }
       public function edit_soil($id)
      {
        $data['value']=$this->mod_soil->select_soil($id);
        $title1=$data['value']->row();
         $data['title']="EDIT soil of ".$title1->place;
         $data['page']="soil";
        $this->load->view('admin/edit_soil',$data);
      }
      
      public function process_edit_soil($id)
      {
         $data['place']=$this->input->post('place_name');
          $data['dev_region']=$this->input->post('dev_region');
          $data['soil_type']=$this->input->post('soil_type');
          $data['avg_temp']=$this->input->post('avg_temp');
          $data['avg_rainfall']=$this->input->post('avg_rainfall');
          $data['nitrogen']=$this->input->post('nitrogen');
          $data['phosphorous']=$this->input->post('phosphorous');
          $data['potassium']=$this->input->post('potassium');
          $data['mineral']=$this->input->post('mineral');
          $data['nutrient']=$this->input->post('nutrient');
          $data['ph_value']=$this->input->post('ph_value');
          $data['seo_keyword']=$this->input->post('seo_keyword');
          $data['seo_title']=$this->input->post('seo_title');
          $data['metadata']=$this->input->post('metadata');
           
          $img1=$this->input->post('hidden');
          $img2=$_FILES['place_image']['name'];
           if ($img2=='')
           {
              $data['place_image']=$img1;
           }
           else
           {
              $data['place_image']=$img2;
              unlink(BASEPATH."../uploads/soil/".$img1);
              
           }
           $source=$_FILES['place_image']['tmp_name'];
           $destination=BASEPATH."../uploads/soil/".$_FILES['place_image']['name'];
           move_uploaded_file($source,$destination);
           
           
           $this->mod_soil->upload_edit_soil($data,$id);
           redirect('admin/con_soil/show_soil');
      }
        public function delete_soil($id)
      {
           
       
           $data['value']=$this->mod_soil->select_soil($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/soil/".$r->place_image);
           
           $this->mod_soil->delete_soil($id);
           
        
          redirect('admin/con_soil/show_soil');
        
      }
}
       