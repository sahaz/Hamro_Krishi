<?php if(null == $this->session->userdata('status')){
 redirect('admin/backend/backend_login');
}
else
{ ?>



<?php $this->load->view('admin/includes/header.php');?>
<?php $this->load->view('admin/includes/semi_header.php');?>
 


<div class="container well"> 
    <div class="row">
    <div class="col-lg-3">
        <div class="well well-sm">
        <strong><h2><p class="lead text-center"> - DASHBOARD - </p></h2></strong><hr>
<?php $email=$this->session->userdata('status');
                  $name=$this->session->userdata('name');
                  $access_level=$this->session->userdata('access_level'); 
                  $start=$this->session->userdata('start');
                if ( $name == "Sahaj Bhattarai")
                { ?><img src="<?php echo site_url('uploads/users/sahaz.png'); ?>" alt="The Admin" class="img-thumbnail img-responsive center-block " height="170" width="120">
                <?php } elseif ($name =="Sirish Poudel") { ?>
                        <img src="<?php echo site_url('uploads/users/sirish.png'); ?>" alt="Super User" class="img-thumbnail img-responsive center-block " height="170" width="120">
                  <?php } elseif ($name =="Jiwan Bhattarai") {?>
                        <img src="<?php echo site_url('uploads/users/jiwan.png'); ?>" alt="Super User" class="img-thumbnail img-responsive center-block "  height="170" width="120" >
                  <?php } elseif ($name =="Suman Shrestha") {?>
                        <img src="<?php echo site_url('uploads/users/suman.png'); ?>" alt="Super User" class="img-thumbnail img-responsive center-block " height="170" width="120" >
                       <?php } else {?>
                           <img src="<?php echo site_url('uploads/users/ab.jpg'); ?>" alt="Error" class="img-thumbnail img-responsive center-block " height="170" width="120" >
                  <?php  } ?>
                           <hr>
                           <div class="row ">
                           <div class="col-lg-5"><strong>Name :</strong></div>
                           <div class="col-lg-7 text-left"><?php echo $name;?></div>
                         
                           <div class="col-lg-5"><strong>Email :</strong></div>
                           <div class="col-lg-7 text-left"><?php echo $email; ?></div>
                         
                           <div class="col-lg-5"><strong><strong>Access as :</strong></strong></div>
                           <div class="col-lg-7 text-left"> <?php if ($access_level == "Administrator"){
                                           echo " Administrator";
                                            }
                                           else
                                           { echo "Moderator"; 
                                           
                                           } ?></div>
                          
                           <div class="col-lg-5"><strong>Login Time:</strong></div>
                           <div class="col-lg-7 text-left"><?php echo $start;?></div>
                           </div>
                           <br>
                                          
        </div>
    </div>
    
    <div class="col-lg-9">
        <div class="row">
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_crops/show_crops'); ?>" >
                    <img src="<?php echo site_url('uploads/users/crops.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
            
        </div>
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_diseases/show_diseases'); ?>" >
                    <img src="<?php echo site_url('uploads/users/diseases.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_soil/show_soil'); ?>" >
                    <img src="<?php echo site_url('uploads/users/soil.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_maps/show_maps'); ?>" >
                    <img src="<?php echo site_url('uploads/users/maps.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_fertilizer/show_fertilizer'); ?>" >
                    <img src="<?php echo site_url('uploads/users/fertilizer.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_farmersprofile/show_farmersprofile'); ?>" >
                    <img src="<?php echo site_url('uploads/users/profile.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_harvest/show_harvest'); ?>" >
                    <img src="<?php echo site_url('uploads/users/harvest.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_slider/show_slider_images'); ?>" >
                    <img src="<?php echo site_url('uploads/users/slider.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_krishinews/show_krishinews'); ?>" >
                    <img src="<?php echo site_url('uploads/users/news.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_data/show_data'); ?>" >
                    <img src="<?php echo site_url('uploads/users/data.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_help/show_help'); ?>" >
                    <img src="<?php echo site_url('uploads/users/help.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        
        <div class="col-lg-3">
            
                
                  <a href="<?php echo site_url('admin/con_aboutus/show_aboutus'); ?>" >
                    <img src="<?php echo site_url('uploads/users/aboutus.png'); ?>" alt="hamro krishi" class="img-responsive center-block img-rounded" height="150" width="150" alt="...">
                    
                  </a>
                
                
              
        </div>
        
        </div>
        
        </div>
        </div>
    <div class="row">
        <br>
        
     
    </div>
    
  
</div>

<?php $this->load->view('admin/includes/footer.php');?>

<?php } ?>