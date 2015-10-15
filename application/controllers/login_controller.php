<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Login_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
         
         $this->load->helper('date');
         $this->load->model('mod_farmersprofile');
         
         date_default_timezone_set("Asia/Kathmandu"); 
         
      }
      
      
      public function process_signin()
      {
            $data['email']=$this->input->post('email');
           $data['password']=$this->input->post('pass');
           $data['password']=md5($data['password']); 
           
           $result=$this->mod_farmersprofile->check_farmer($data);
          $r= $result->row();
            if(!empty($r))
         {  
                 $datestring = "%h:%i %A";
            $session_array=array('f_status'=>$r->farmers_email,'f_name'=>$r->farmers_name, 'f_id'=>$r->id, 'f_time'=>mdate($datestring));
           
            $this->session->set_userdata($session_array);
            $data['page']="farmersprofile";
            redirect('farmersprofile_controller/display_farmer');
         }
         else
         {
           
            $this->session->set_flashdata('error','Authentication Failure : Username & Password unmatched');
            $data['page']="home";
            redirect('hamrokrishi/index');
         }
      }
       public function logout()
       {
         $this->session->unset_userdata('f_status','f_name','f_id','f_time');
         
          $this->session->set_flashdata('signout',' Successfully Logged out ');
          $data['page']="home";
            redirect('hamrokrishi/index'); 
       }
         
       public function sign_up()
       { 
          $data['title']="SIGN UP";
          $data['page']="signup";
          $this->load->view('signup_form',$data);
       }
       
       public function sign_in()
       {
          $data['title']="SIGN IN";
          $data['page']="signin";
          $this->load->view('signin_form',$data);
       }
       
        public function process_signup_form()
      {        
            $repeat['email']=$this->mod_farmersprofile->show_farmersprofile();
            
            if ($this->input->post('pass1') != $this->input->post('pass2'))
                {
                    $this->session->set_flashdata('pass_error','Password didnt match eachother. Enter again' );
                    redirect('login_controller/sign_up');
                }
                
                        foreach($repeat['email']->result() as $e)
                {
                    if($this->input->post('email') == $e->farmers_email )
                    {
                       $this->session->set_flashdata('email_error',$this->input->post('email').' : Sorry this  email is already taken. Enter a new emailid.' );
                    redirect('login_controller/sign_up'); 
                    }
                
                }
                
                
            $data['farmers_name']=$this->input->post('name');
            $data['farmers_sex']=$this->input->post('sex');
            $data['farmers_address']=$this->input->post('address');
            $data['farmers_phone']=$this->input->post('phone');
            $data['farmers_email']=$this->input->post('email');
           $data['farmers_password']=$this->input->post('pass1');
           $data['farmers_password']=md5($data['farmers_password']); 
            
           $datestring = "%Y/%m/%d, %h:%i %A";
            
            $data['date_joined']=mdate($datestring);
            $pic=$_FILES['profilepic']['name'];
            
            if($pic == ''){
                if($this->input->post('sex')== female){
                    $data['farmers_image']="default_female.jpg";
                }
                else{
                    $data['farmers_image']="default_male.jpg";
                }
              
              
           
          }
          else{
           $data['farmers_image']=$data['farmers_email']."_".$_FILES['profilepic']['name'];
           $source=$_FILES['profilepic']['tmp_name'];
           $destination=BASEPATH."../uploads/farmersprofile/".$data['farmers_email']."_".$_FILES['profilepic']['name'];
          move_uploaded_file($source,$destination);
          }
           
            $data['access_level']="farmer";
            
            $this->mod_farmersprofile->register_farmer($data);
            $this->session->set_flashdata('register','Successfully registered !! Thankyou for joining Hamro Krishi. &nbsp&nbsp');
            redirect('login_controller/sign_up');
                
      }
   }
   