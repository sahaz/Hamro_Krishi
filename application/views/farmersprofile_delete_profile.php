<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
$a=$value2->row();
 ?>
<div class="well well-lg"> 
  
    <div class="row">
        
       
        <div class="col-lg-3">
            <div class="well well-sm">
              
                   
                    <a href="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $a->farmers_image ;?>">
                        <img  class="thumbnail img-responsive center-block" src="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" />
                    </a>
            </div>            
        </div>
        
        
         <div class="col-lg-6">
            <div class="row"><a class="btn btn-default btn-xs " href="<?php echo site_url('farmersprofile_controller/display_farmer');?>">
                <span class="glyphicon glyphicon-arrow-left"></span> Back
            </a> 
            </div><br>
             <div class="well well-sm">
                 <h5>Caution : If you delete your profile all your related data and pictures will be removed from HamroKrishi.</h5><br>
                 
                 <form class="form-horizontal" action="<?php echo site_url('farmersprofile_controller/process_delete_profile/'.$a->id);?>" method="POST" id="baseform" >
       
                <div class="form-group">
                 <label class="col-sm-5 control-label">Enter you  Current Password :</label>
                 <div class="col-sm-6">
                     <input type="password" id="password" name="password"  class="required form-control"/>
                 </div>
                 </div>
                 
                 <div class="form-group">
                   <div class="col-md-9 control-label">
             <input type="submit" class="btn btn-danger btn-xs" id="submit" name="submit" value="DELETE ACCOUNT" />
                   </div>
                   </div>
   
          </form>

        </div>
        </div>
        <div class="col-lg-3">
            <?php if($this->session->flashdata('delete_password_error')){?>
         <div class="row">
               <div class="col-lg-12">
                             <div class="alert alert-danger alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?php echo $this->session->flashdata('delete_password_error');?>
  
                             </div>
               </div>
         </div> 

            <?php
            } ?>
        </div>
                
        
        </div>
        </div>