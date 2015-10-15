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
<img  src="<?php echo site_url('uploads/users/hk_house.png');?>" height="350" width="350" />

      </div>
      <div class="media-body">
         <p class="media-heading lead text-right"><strong>The Best Agricultural Web Portal in Nepal</strong></p>
         <p class="lead text-right">Join Free* and improve your farming techniques </p>
      </div>
      </div>
       
  <div class="col-lg-6">
                         <?php
                               if($this->session->flashdata('submitdata_guest_warning')){?>
                               <div class="row">
                                  <div class="col-lg-12">
                                               <div class="alert alert-warning alert-dismissible" role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <?php echo $this->session->flashdata('submitdata_guest_warning');?>

                                                </div>
                                  </div></div> 

                        <?php }?>
     <div class="well">
         
      
     
     <p class="text-center"><h2>Sign In :</h2></p>
  
     <form class="form-horizontal" action="<?php echo site_url('login_controller/process_signin');?>" method="POST" id="baseform" >
        
         
         <div class="form-group">
           <label class="col-sm-4 control-label"> Email:</label>
           <div class="col-sm-7">
           <input type="text" id="email" name="email" class="required email form-control"  />

           </div>
         </div>

   
             
         <div class="form-group">
           <label class="col-sm-4 control-label"> Password:</label>
           <div class="col-sm-7">
           <input type="password" id="pass" name="pass" class="required form-control"   />


           </div>
         </div> 

            <div class="form-group">
               <div class="col-sm-11 control-label">
               <input type="submit" class="btn btn-info btn-sm" id="submit" name="submit" value="Sign In" /><br><br>
               </div>
             </div>
    </form>
       Haven't registered ? Sign Up here &nbsp;<a class="btn btn-warning" href="<?php echo site_url('login_controller/sign_up');?>"><span class="glyphicon glyphicon-plus"></span> Sign UP </a>
    </div>
    </div>
       <div class="col-lg-1"></div>
   </div>
   
  
</div>