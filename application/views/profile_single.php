<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 $a=$value2->row();
 ?>
<div class="well well-lg">
     <ol class="breadcrumb btn-xs">
                      You are here :  
                        <li><a href="<?php echo site_url('hamrokrishi/index');?>">Home</a></li>
                        
                        <li><a href="<?php echo site_url('profile_controller/display_profile');?>">Krishaks</a></li>
                        <li class="active"><?php echo $a->farmers_name;?></li>
                        
                  </ol>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="well well lg">
                <div class="row">              
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12"><a href="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" rel="prettyPhoto" title="<?php echo $a->farmers_image ;?>">
                        <img  class="thumbnail img-responsive center-block" src="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" />
                    </a></div>
                        </div>
                        <div class="row">
                            <div class="well well-sm">
                                <div class="row">
                                <div class="col-lg-6">
                                    <strong>View Photos</strong>
                                 
                                </div>
                                    <div class="col-lg-6">
                                     <?php if(null != $this->session->userdata('f_status')){?>   
                                        
                                        <a class="btn btn-success btn-xs" href="<?php echo site_url('profile_controller/view_photos/'.$a->id);?>">
      <span class="glyphicon glyphicon-picture"></span>   Photos </a>
                                     <?php }
                                     else {
                                    
                                         echo '<em>'.'Login to view Photos'.'</em>'; 
                                  
                                     }
?>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
                    
              
                   
                   
            
            </div>
                    
            
                <div class="col-lg-9">
                    <div class="well well-sm">
                        <p class="lead">
                          <?php echo $a->farmers_name;?>                          
                        </p>
                        
                          Sex : <?php if($a->farmers_sex == "female"){
                          echo "F";
                          
                          }
                          else {
                              echo "M";
                          } ?>                          
                        
                        <h4>
                             Addess : <?php echo $a->farmers_address;?>                          
                        </h4>
                        
                        <h5>
                          Email : <?php echo $a->farmers_email;?>                          
                        </h5>
                        <h5>
                          Contact No. : <?php if(null == $this->session->userdata('f_status')){
                                         echo '<em>'.'Please Login to view the Phone Number'.'</em>';                       
                          }else{ 
                              echo $a->farmers_phone;                          
                          }?>                          
                        </h5>
                        <h5>
                          Area of Farming : <?php if(null == $this->session->userdata('f_status')){
                                         echo '<em>'.'Please Login to view the area of farming'.'</em>';                       
                          }else{ 
                              echo $a->farmers_area;                          
                          }?>                          
                        </h5>
                        <h5>
                          Main Crop : <?php if(null == $this->session->userdata('f_status')){
                                         echo '<em>'.'Please Login to view the main corp '.'</em>';                       
                          }else{ 
                              echo $a->farmers_maincrop;                          
                          }?>                          
                        </h5>
                    </div>
                    <div class="well well-sm">
                        <div class='row'>
                            <div class='col-lg-2'><h5>Experiences :</h5></div>
                        <div class='col-lg-10'>
                        
                       
                            <?php if(null == $this->session->userdata('f_status')){
                                         echo '<em>'.'Please Login to view the experiences for this profile '.'</em>';                       
                          }else{ 
                              echo '<p class="lead">';
                              echo $a->farmers_experiences; 
                              echo ' </p>';
                          }?> 
                                                  
                        
                    </div>
                    </div>
                    </div>
                    
                    <div class="well well-sm">
                        <div class='row'>
                            <div class='col-lg-2'><h5>Training : </h5></div>
                        <div class='col-lg-10'>
                        
                            <?php if(null == $this->session->userdata('f_status')){
                                         echo '<em>'.'Please Login to view the training for this profile '.'</em>';                       
                          }else{ 
                              echo '<p class="lead">';
                              echo $a->farmers_training; 
                              echo ' </p>';
                          }?> 
                                                  
                       
                    </div>
                    </div>
                    </div>
                    <div class="well well-sm">
                        <h5>Harvests :</h5> 
                       
                            <?php if(null == $this->session->userdata('f_status')){
                                         echo '<em>'.'Please Login to view the harvests for this profile '.'</em>';                       
                          }else{ 
                               foreach($value3->result() as $r) {
                          ?>
                              
                               <div class='row'>
                                   <div class='col-lg-3'>
                                       <a href="<?php echo site_url('uploads/farmers_harvest/'.$r->harvest_image);?>" rel="prettyPhoto" title="<?php echo $r->harvest_image ;?>">
                                        <img  class="thumbnail img-responsive center-block" src="<?php echo site_url('uploads/farmers_harvest/'.$r->harvest_image);?>" />
                                       </a>
                                   </div>
                        <div class='col-lg-9'>
                             <h6>Added on : <?php echo $r->entry_date;?></h6>
                             <h5><?php echo $r->harvest_name;?></h5>
                             <h6><?php echo $r->harvest_description;?></h6>
                            
                                   </div>  
                                   </div>  
                          <?php     }
                          } ?> 
                                                  
                        
                      
                       
                    </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-lg-1"></div>
    </div>
    </div>
