<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 ?>
    




<div class="well well-sm"> 
   <div class="row">
       <div class="col-lg-1"></div>
       <div class="col-lg-4">
      <div class="thumbnail">
<img  src="<?php echo site_url('uploads/users/hk_house.png');?>" height="550" width="350" />

      </div>
      <div class="media-body">
         <p class="media-heading lead text-center"><strong>The Best Agricultural Web Portal in Nepal</strong></p>
         <p class="lead text-center">Join Free* and improve your farming techniques </p>
         
      </div>
      </div>
        <div class="col-lg-6">
     <div class="well">
         
        <?php if($this->session->flashdata('register')){?>
            
         
         
         
         <div class="row">
               <div class="col-lg-12">
                             <div class="alert alert-success alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?php echo $this->session->flashdata('register');?><a href="<?php echo site_url('login_controller/sign_in');?>">Sign in</a>
        
                             </div>
               </div>
         </div> 

            <?php
            }
            if($this->session->flashdata('pass_error')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?php echo $this->session->flashdata('pass_error');?>
        
                             </div>
               </div></div> 

            <?php
            }
            if($this->session->flashdata('email_error')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <?php echo $this->session->flashdata('email_error');?>
        
                             </div>
               </div></div> 

            <?php
            }
            ?>
     
         <h2><p class="text-center">Please enter your Personal Details: </p></h2><hr>
    
   <form class="form-horizontal" action="<?php echo site_url('login_controller/process_signup_form');?>" method="POST" id="baseform" enctype="multipart/form-data">
       
     <div class="form-group">
      <label class="col-sm-5 control-label">Your Name :</label>
      <div class="col-sm-6">
         <input type="text" id="name" name="name" class="required form-control"/>
      
      </div>
   </div>
     <div class="form-group">
      <label class="col-sm-5 control-label">Sex :</label>
      <div class="col-sm-6">
          <input type="radio" name="sex" value="male" checked="checked" /> <label> Male</label>
            <input type="radio" name="sex" value="female"/> <label> Female</label>
      
      </div>
   </div>
           <div class="form-group">
      <label class="col-sm-5 control-label"> Your Email :</label>
      <div class="col-sm-6">
        <input type="text" id="email" name="email" class="required email form-control" />
      
      </div>
   </div>
      
      <div class="form-group">
      <label class="col-sm-5 control-label"> Enter a password :</label>
      <div class="col-sm-6">
        
      <input type="password" id="pass1" name="pass1" class="required form-control"/>
      </div>
   </div>
      <div class="form-group">
      <label class="col-sm-5 control-label"> Retype the password :</label>
      <div class="col-sm-6">
        
      <input type="password" id="pass2" name="pass2" class="required form-control"/>
      </div>
   </div>
   
   
      
    <div class="form-group">
      <label class="col-sm-5 control-label">Your Address :</label>
      <div class="col-sm-6">
        
      <input type="text" id="address" name="address" class="required form-control" />
      </div>
   </div>
      
        <div class="form-group">
      <label class="col-sm-5 control-label"> Your Phone :</label>
      <div class="col-sm-6">
        <input type="text" id="phone" name="phone" class="required form-control" />
      
      </div>
   </div>
       <div class="form-group">
      <label class="col-sm-5 control-label"> Profile Picture :</label>
      <div class="col-sm-6">
        <input type="file" name="profilepic" id="profilepic" />
         <p class="help-block">upload your image  </p>
      </div>
   </div>
        
       
      <div class="form-group">
        <div class="col-md-9 control-label">
  <input type="submit" class="btn btn-success" id="submit" name="submit" value="Sign UP" /><br><br>
        </div>
        </div>
   
       
       
      
       

   </form>
     
  </div>
    </div>
   
       
       <div class="col-lg-2"></div>
   </div>
   
  
</div>