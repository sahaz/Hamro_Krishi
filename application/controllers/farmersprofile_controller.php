<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Farmersprofile_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
        
           $this->load->helper('date');     
         date_default_timezone_set("Asia/Kathmandu"); 
        
         $this->load->model('mod_farmersprofile');
    
         $this->load->model('mod_data');
         
         
      }
      
      public function display_farmer()
      {
        $id=$this->session->userdata('f_id');
       $data['value2']=$this->mod_farmersprofile->select_farmersprofile($id);
       $data['value3']=$this->mod_farmersprofile->select_farmersharvests($id);
       $data['value4']=$this->mod_farmersprofile->select_myphotos($id);
       
       $data['page']="farmersprofile";
         
         $this->load->view('farmersprofile_main',$data);
                 
      }
      public function process_ppchange($id)
      {
        $pic=$_FILES['profilepic']['name'];
         $choose=$this->mod_farmersprofile->select_farmersprofile($id); 
         $f=$choose->row();
            if($pic == ''){
                    $data['farmers_image']=$f->farmers_image;
          }
          else{
           $data['farmers_image']=$f->farmers_email."_".$_FILES['profilepic']['name'];
           $source=$_FILES['profilepic']['tmp_name'];
           $destination=BASEPATH."../uploads/farmersprofile/".$f->farmers_email."_".$_FILES['profilepic']['name'];
          move_uploaded_file($source,$destination);
          
          if (!($f->farmers_image == "default_female.jpg" || $f->farmers_image == "default_male.jpg" )){
           unlink(BASEPATH."../uploads/farmersprofile/".$f->farmers_image);
           }
          }
           
           
          
            $this->mod_farmersprofile->update_profilepic($data,$id);
            $this->session->set_flashdata('change',' Success ! Profile Picture Changed  ');
            redirect('farmersprofile_controller/display_farmer');     
      }
       public function delete_pp($id)
      {
        $choose=$this->mod_farmersprofile->select_farmersprofile($id); 
         $f=$choose->row();
         if ($f->farmers_sex == "female"){
          $data['farmers_image']="default_female.jpg";   
         }
         else{
             $data['farmers_image']="default_male.jpg";   
         }
         unlink(BASEPATH."../uploads/farmersprofile/".$f->farmers_image);
         
       $this->mod_farmersprofile->update_profilepic($data,$id);
        $this->session->set_flashdata('delete',' Deleted ! Back to default profile image.  ');
            redirect('farmersprofile_controller/display_farmer'); 
                 
      }
      
      public function show_myphotos($id)
      {
        $data['value2']=$this->mod_farmersprofile->select_farmersprofile($id);
        $data['value3']=$this->mod_farmersprofile->select_myphotos($id);
        $data['page']="farmersprofile";
        $this->load->view('farmersprofile_myphotos',$data);
      }
      public function process_myphotos($id)
      {
                  
        $data['farmers_id']=$id;
        $data['picture_description']=$this->input->post('picture_description');
        $data['picture_name']=$id."_".$_FILES['myphoto']['name'];
         
         $source=$_FILES['myphoto']['tmp_name'];
           $destination=BASEPATH."../uploads/farmers_photos/".$id."_".$_FILES['myphoto']['name'];
          move_uploaded_file($source,$destination);
          
          $this->mod_farmersprofile->add_myphotos($data);
      $this->session->set_flashdata('myphotos_success',(' Success ! New photo added to your collection '));
          redirect('farmersprofile_controller/show_myphotos/'.$id); 
      
      }
      public function manage_myphotos($id)
      {
        $data['value2']=$this->mod_farmersprofile->select_farmersprofile($id);
        $data['value3']=$this->mod_farmersprofile->select_myphotos($id);
        $data['page']="farmersprofile";
        $this->load->view('farmersprofile_manage_myphotos',$data);
      }
      public function process_edit_myphotos($id)
      {
        $test=$this->mod_farmersprofile->select_id_by_photos($id);
        $p=$test->row();  
        
         unlink(BASEPATH."../uploads/farmers_photos/".$p->picture_name);
        
         $this->mod_farmersprofile->delete_myphotos($id);
         $this->session->set_flashdata('myphotos_delete',(' Success ! Selected photo is deleted'));
        redirect('farmersprofile_controller/manage_myphotos/'.$p->farmers_id); 
      }
      public function edit_basicinfo($id)
      {
        $data['value2']=$this->mod_farmersprofile->select_farmersprofile($id);
        $data['page']="farmersprofile";
        $this->load->view('farmersprofile_edit_basicinfo',$data);
      }
      public function process_basicinfo($id)
      {
          $check_sex=$this->mod_farmersprofile->select_farmersprofile($id);
          $x=$check_sex->row();
          
        $data['farmers_name']=$this->input->post('name');
        $data['farmers_sex']=$this->input->post('sex');
        $data['farmers_address']=$this->input->post('address');
        $data['farmers_phone']=$this->input->post('phone');
        
        $data['farmers_maincrop']=$this->input->post('main_crop');
        $data['farmers_area']=$this->input->post('area');
        
        if($x->farmers_image == 'default_male.jpg' || $x->farmers_image == 'default_female.jpg' ){
            if ($this->input->post('sex') == "male"){
              $data['farmers_image']="default_male.jpg" ;
            } elseif ( $this->input->post('sex') == "female")
                {
                $data['farmers_image']="default_female.jpg" ;
            }
            
        }
        
        $this->session->set_userdata('f_name', $data['farmers_name']) ;
        
        
          $this->mod_farmersprofile->update_profilepic($data,$id);
      $this->session->set_flashdata('edit_basicinfo',(' Basic Info. updated'));
          redirect('farmersprofile_controller/display_farmer'); 
      }
      public function change_password($id)
      {
          $data['value2']=$this->mod_farmersprofile->select_farmersprofile($id);
        $data['page']="farmersprofile";
        $this->load->view('farmersprofile_change_password',$data);
      }
       public function process_password($id)
      {
        $test['value2']=$this->mod_farmersprofile->select_farmersprofile($id);
        $p=$test['value2']->row();
       
        if($p->farmers_password != md5($this->input->post('pass1')) ){
             $this->session->set_flashdata('pass_error1',(' Your Current Password is not matched ! Please try again.'));
          redirect('farmersprofile_controller/change_password/'.$p->id); 
        }else{
            if($this->input->post('pass2') != $this->input->post('pass3') ){
               $this->session->set_flashdata('pass_error2',(' Password Retype Mismatch. Please match you new password'));
          redirect('farmersprofile_controller/change_password/'.$p->id);  
            }
            else{
                  
                  $data['farmers_password']= md5($this->input->post('pass2'));
        
          $this->mod_farmersprofile->update_profilepic($data,$id);
      $this->session->set_flashdata('pass_changed',(' Success ! Your Password has been changed.'));
          redirect('farmersprofile_controller/display_farmer'); 
            }
          
        }
        
      }
      public function delete_profile($id) 
              {
           $data['value2']=$this->mod_farmersprofile->select_farmersprofile($id);
        $data['page']="farmersprofile";
        $this->load->view('farmersprofile_delete_profile',$data);
      }
      public function process_delete_profile($id)
      {       
          
        $profilepic=$this->mod_farmersprofile->select_farmersprofile($id); 
         $f=$profilepic->row();
         if (md5($this->input->post('password')) != $f->farmers_password)
            {
             $this->session->set_flashdata('delete_password_error',"Password not matched. Please try again.");
            redirect('farmersprofile_controller/delete_profile/'.$f->id); 
            }
         else
             {
              $allimages=$this->mod_farmersprofile->select_myphotos($id); 
        
        foreach($allimages ->result() as $i) { 
             unlink(BASEPATH."../uploads/farmers_pictures/".$i->picture_name);
        }
        unlink(BASEPATH."../uploads/farmersprofile/".$f->farmers_image);
         
       $this->mod_farmersprofile->delete_farmers_photos($id);
       $this->mod_farmersprofile->delete_profile($id);
       $this->mod_farmersprofile->delete_harvest_photos($id);
       
       $this->session->unset_userdata('f_status','f_name','f_id','f_time');
       
        $this->session->set_flashdata('delete_profile',' Profile Delted ! Hope you come back and sognup again. Thnak you . ');
            redirect('hamrokrishi/index'); 
         }
       
                 
      }
      public function edit_myexperiences($id)
      {
        $data['farmers_experiences']=$this->input->post('myexperience');
         $this->mod_farmersprofile->update_experience($data,$id);
         $this->session->set_flashdata('edit_experiences','Experiences edited');
         redirect('farmersprofile_controller/display_farmer'); 
      }
      public function edit_mytraining($id)
      {
        $data['farmers_training']=$this->input->post('mytraining');
         $this->mod_farmersprofile->update_experience($data,$id);
         $this->session->set_flashdata('edit_training','Trainings edited');
         redirect('farmersprofile_controller/display_farmer'); 
      }
       public function process_myharvest($id)
      {
         $temp=$this->mod_farmersprofile->select_farmersprofile($id);
         $temp2=$temp->row();
        $data['harvest_name']=$this->input->post('harvest_title');
        $data['harvest_description']=$this->input->post('harvest_description');
        $datestring = "%Y/%m/%d, %h:%i %A";
        $data['entry_date']= mdate($datestring);
        $data['farmers_id']= $id;
        
         $data['harvest_image']=$temp2->farmers_email."_".$_FILES['harvest_image']['name'];
         
         $source=$_FILES['harvest_image']['tmp_name'];
           $destination=BASEPATH."../uploads/farmers_harvest/".$temp2->farmers_email."_".$_FILES['harvest_image']['name'];
          move_uploaded_file($source,$destination);
          $this->mod_farmersprofile->add_harvest($data);
      $this->session->set_flashdata('harvest_add',(' Harvest Title : '.'<br>'.$data['harvest_name'].' added.'));
          redirect('farmersprofile_controller/display_farmer'); 
      }
    
      public function delete_myharvest($id)
      {
        $choose=$this->mod_farmersprofile->select_harvest($id); 
         $f=$choose->row();
         $harvest=$f->harvest_name;
         
         unlink(BASEPATH."../uploads/farmers_harvest/".$f->harvest_image);
         
       $this->mod_farmersprofile->delete_harvest($id);
        $this->session->set_flashdata('harvest_delete',(' Harvest Title : '.'<br>'.$harvest.' deleted.'));
            redirect('farmersprofile_controller/display_farmer');
      }
      public function ask_expert()
      {
         $data['value2']=$this->mod_data->select_data_of('expert');
        $data['page']="farmersprofile";
        $this->load->view('farmersprofile_ask_expert',$data); 
      }
      public function process_ask_expert($id)
      {
        
        
         $name=$this->session->userdata('f_name');
         $sender=$this->session->userdata('f_status');
         $subject= $this->input->post('news_body');
         $message_content =$this->input->post('news_body');
          
          $this->load->library('email');
          $config['protocol']='sendmail';
          $config['protocol'] = 'smtp';
          $config['validate'] = 'FALSE';
          $config['mail_type']='text';
          $this->email->initialize($config);
         
          $this->email->from($sender, $name);
          $this->email->to('sahazbhattarai@live.com'); 
          $this->email->subject($subject);
          $this->email->message($message_content);  
         
          if($this->email->send())
             {
             $this->session->set_flashdata('mail_success',"Success your query has been successfully submitted."."<br>"." We will soon contact you with your answers, please check your email regularly. Thanks ");
            redirect('farmersprofile_controller/ask_expert');
           
        
          }
          else
             {
              $eoor=$this->email->print_debugger();
           $this->session->set_flashdata('mail_error',$eoor);
            redirect('farmersprofile_controller/ask_expert');
          }
        $this->load->view('farmersprofile_ask_expert',$data); 
      }
      
      public function guest_submit()
      {
          $data['page']="signin";
         $this->session->set_flashdata('submitdata_guest_warning',"You have to be signed in to submit."); 
         redirect('login_controller/sign_in'); 
      }
      public function submit_data($section)
      {
          $data['page']="farmersprofile";
          $data['selection']=$section;
           $this->load->view('submitdata_form',$data); 
      }
      
      public function process_submitdata($id)
      {
        
        
         $name=$this->session->userdata('f_name');
         $sender=$this->session->userdata('f_status');
         $subject= $this->input->post('news_body');
         $message_content =$this->input->post('news_body');
          
          $this->load->library('email');
          $config['protocol']='sendmail';
          $config['protocol'] = 'smtp';
          $config['validate'] = 'FALSE';
          $config['mail_type']='text';
          $this->email->initialize($config);
         
          $this->email->from($sender, $name);
          $this->email->to('sahazbhattarai@live.com'); 
          $this->email->subject($subject);
          $this->email->message($message_content);  
         
          if($this->email->send())
             {
             $this->session->set_flashdata('mail_success',"Success your query has been successfully submitted."."<br>"." We will soon contact you with your answers, please check your email regularly. Thanks ");
            redirect('farmersprofile_controller/ask_expert');
           
        
          }
          else
             {
              $eoor=$this->email->print_debugger();
           $this->session->set_flashdata('mail_error',$eoor);
            redirect('farmersprofile_controller/ask_expert');
          }
        $this->load->view('farmersprofile_ask_expert',$data); 
      }
      
      
      }
      /*      

                   $config = Array(
                       'useragent' => 'CodeIgniter',
             'protocol' => 'smtp',
             'smtp_host' => 'ssl://smtp.googlemail.com',
             'smtp_port' => 465,
             'smtp_user' => 'sahazbhattarai@gmail.com',
             'smtp_pass' => 'mypassword',
             'mailtype'  => 'html', 
             'charset'   => 'iso-8859-1'
         );
       */