 <div class="well well-sm"> 
<?php
$this->load->view('admin/includes/header.php'); ?>

     <p class="lead text-left"> <?php echo "<h4>Welcome to Hamro Krishi</h4>"; ?> </p>
     


</div>
<br>
<div class="well well-lg"> 
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="well well-sm">
                <img  class="center-block" src="<?php echo site_url('uploads/users/hamrokrishi_bw.png');?>" height="60" width="80" /><hr>

<form class="form-horizontal" action="<?php echo site_url('admin/backend/process');?>" method="POST" id="baseform" >
        
         
    <div class="form-group">
      <label class="col-sm-3 text-right control-label"> Email:</label>
      <div class="col-sm-9 text-left">
      <input type="text" id="email" name="email" class="required email form-control"  />
         
      </div>
   </div>
   
   
             
    <div class="form-group">
      <label class="col-sm-3  text-right control-label"> Password:</label>
      <div class="col-sm-9 text-left">
      <input type="password" id="pass" name="pass" class="required form-control"   />
         
         
      </div>
   </div> 
       
     <div class="form-group">
        <div class="col-md-10 control-label text-right">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="Sign in" /><br><br>
        </div>
        </div>
       
       
       

</form>
    </div>
            <h6 class="text-center">Please Enter your Moderator Email and Password .</h6>
    </div>
        <div class="col-lg-4">
            
<?php
if($this->session->flashdata('logout')){?>
<div class="row">
   <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                     <?php echo $this->session->flashdata('logout');?>
 </div></div></div> 
    
<?php
}
if($this->session->flashdata('register')){?>
<div class="row">
   <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                     <?php echo $this->session->flashdata('register');?>
 </div></div></div> 
<?php } if($this->session->flashdata('error')){?>
<div class="row">
   <div class="col-lg-12">
                <div class="alert alert-danger" role="alert">
                     <?php echo $this->session->flashdata('error');?>
</div></div></div>
                
<?php  
}?>
    
     </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   




</div>
 

