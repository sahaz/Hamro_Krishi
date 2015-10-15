
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_krishinews extends CI_Controller {
     
   public function __construct() {
         parent::__construct();
         
          $this->load->helper('date');
         date_default_timezone_set("Asia/Kathmandu"); 
          $this->load->model('mod_krishinews');
          
      }
      
        public function show_krishinews()
      {
       $data['value']=$this->mod_krishinews->show_krishinews();
       $data['title']="AGRO NEWS & STORIES";
       $data['page']="news";
       $this->load->view('admin/show_krishinews',$data);
      }
      public function add_krishinews()
      {     
          $data['title']="ADD NEWS & STORIES";
          $data['page']="news";
          $this->load->view('admin/add_krishinews',$data);
      }
      
      public function process_krishinews()
      {
          $data['news_type']=$this->input->post('news_type');
          $data['news_date']=$this->input->post('news_date');
          $data['news_location']=$this->input->post('news_location');
          $data['news_headline']=$this->input->post('news_headline');
          $data['news_body']=$this->input->post('news_body');
         
          $data['seo_keyword']=$this->input->post('seo_keyword');
          $data['seo_title']=$this->input->post('seo_title');
          $data['metadata']=$this->input->post('metadata');
         
           
           $data['news_image']=$_FILES['news_image']['name'];
           
           $source=$_FILES['news_image']['tmp_name'];
           $destination=BASEPATH."../uploads/krishinews/".$_FILES['news_image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_krishinews->upload_krishinews($data);
            redirect('admin/con_krishinews/show_krishinews');
           
      }
       public function edit_krishinews($id)
      {
        $data['value']=$this->mod_krishinews->select_krishinews($id);
        $title1=$data['value']->row();
         $data['title']="EDIT ".$title1->news_type." no. ".$title1->id;
        $data['page']="news";
        $this->load->view('admin/edit_krishinews',$data);
      }
      
      public function process_edit_krishinews($id)
      {
        $data['news_type']=$this->input->post('news_type');
          $data['news_date']=$this->input->post('news_date');
          $data['news_location']=$this->input->post('news_location');
          $data['news_headline']=$this->input->post('news_headline');
          $data['news_body']=$this->input->post('news_body');
          
          $img1=$this->input->post('hidden');
          $img2=$_FILES['news_image']['name'];
           if ($img2=='')
           {
              $data['news_image']=$img1;
           }
           else
           {
              $data['news_image']=$img2;
              unlink(BASEPATH."../uploads/krishinews/".$img1);
              
           }
           $source=$_FILES['news_image']['tmp_name'];
           $destination=BASEPATH."../uploads/krishinews/".$_FILES['news_image']['name'];
           move_uploaded_file($source,$destination);
           
           
           $this->mod_krishinews->upload_edit_krishinews($data,$id);
           redirect('admin/con_krishinews/show_krishinews');
      }
        public function delete_krishinews($id)
      {
           
       
           $data['value']=$this->mod_krishinews->select_krishinews($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/krishinews/".$r->news_image);
           
           $this->mod_krishinews->delete_krishinews($id);
           
        
          redirect('admin/con_krishinews/show_krishinews');
        
      }
}
       