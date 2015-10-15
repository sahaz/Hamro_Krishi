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
              <a class="btn btn-default btn-xs " href="<?php echo site_url('farmersprofile_controller/display_farmer');?>">
                <span class="glyphicon glyphicon-arrow-left"></span> Back
            </a>
             <div class="well well-sm">
                 <h3 class="text-center">EDIT your Basic Information</h3><hr>
                 
                 <form class="form-horizontal" action="<?php echo site_url('farmersprofile_controller/process_basicinfo/'.$a->id);?>" method="POST" id="baseform" enctype="multipart/form-data">
       
     <div class="form-group">
      <label class="col-sm-5 control-label">Your Name :</label>
      <div class="col-sm-6">
         <input type="text" id="name" name="name" value="<?php echo $a->farmers_name ;?>" class="required form-control"/>
      
      </div>
   </div>
     <div class="form-group">
      <label class="col-sm-5 control-label">Sex :</label>
      <div class="col-sm-6">
          <input type="radio" name="sex" value="male" <?php if ($a->farmers_sex =='male'){?>checked="checked"<?php }?>  /> <label> Male</label>
            <input type="radio" name="sex" value="female" <?php if ($a->farmers_sex=='female'){?>checked="checked"<?php }?> /> <label> Female</label>
      
      </div>
   </div>
       <div class="form-group">
      <label class="col-sm-5 control-label">Your Address :</label>
      <div class="col-sm-6">
        
      <input type="text" id="address" name="address" value="<?php echo $a->farmers_address ;?>"class="required form-control" />
      </div>
   </div>
      
        <div class="form-group">
      <label class="col-sm-5 control-label"> Your Phone :</label>
      <div class="col-sm-6">
        <input type="text" id="phone" name="phone" value="<?php echo $a->farmers_phone ;?>" class="required form-control" />
      
      </div>
   </div>
           <div class="form-group">
      <label class="col-sm-5 control-label"> Your Email :</label>
      <div class="col-sm-6">
        <?php echo $a->farmers_email ;?>
      
      </div>
   </div>
           <div class="form-group">
      <label class="col-sm-5 control-label"> Farming Area :</label>
      <div class="col-sm-6">
        <textarea rows="4" cols="30" name="area" id="area" ><?php echo $a->farmers_area ;?></textarea>
      
      </div>
   </div>
           <div class="form-group">
      <label class="col-sm-5 control-label"> Main Crops :</label>
      <div class="col-sm-6">
       <textarea rows="4" cols="30" name="main_crop" id="main_crop" ><?php echo $a->farmers_maincrop ;?></textarea>
      
      </div>
   </div>
                     
      <div class="form-group">
        <div class="col-md-9 control-label">
  <input type="submit" class="btn btn-success" id="submit" name="submit" value="SAVE" />
        </div>
        </div>
   
       
       
      
       

   </form>
                
                      
            
        </div>
        </div>
                
        <div class="col-lg-3">
        </div>
        </div>
        </div>