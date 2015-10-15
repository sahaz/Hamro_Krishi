<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 $a=$value2->row();
 ?>
<head>
    <script src="<?php echo site_url('script/jquery.js');?>" ></script>
      <script>
      $(document).ready(function(){
          
              
             $('#box').click(function(){                 
                  
                $('#add').html("<div class='well well-sm'><form action='<?php echo site_url("farmersprofile_controller/process_ppchange/".$a->id);?>' method='post' enctype='multipart/form-data'><input type='file' id='profilepic' name='profilepic' /><br><input type='submit' class='btn btn-default btn-xs center-block' id='submit' name='submit' value='Upload' /></form></div>");
                 });
                  
             $('#box1').click(function(){                 
                  
             $('#add1').html("<div class='well well-sm'><a href='<?php echo site_url("farmersprofile_controller/delete_pp/".$a->id);?>' class='btn btn-xs btn-danger center-block'>DELETE</a></div>");
                 });
                 
             $('#box2').click(function(){                 
                  
                $('#add2').html("<form action='<?php echo site_url("farmersprofile_controller/edit_myexperiences/".$a->id);?>' method='post' ><textarea rows='3' cols='69' id='myexperience' name='myexperience' ><?php echo html_entity_decode($a->farmers_experiences);?></textarea><br><input type='submit' class='btn btn-info btn-xs' id='submit' name='submit' value='SAVE' /></form>");
                 });
                 
             $('#box3').click(function(){                 
                  
        $('#add3').html("<form action='<?php echo site_url("farmersprofile_controller/edit_mytraining/".$a->id);?>' method='post' ><textarea rows='3' cols='69' id='mytraining' name='mytraining' ><?php echo html_entity_decode($a->farmers_training);?></textarea><br><input type='submit' class='btn btn-info btn-xs' id='submit' name='submit' value='SAVE' /></form>");
                 });
                 
         
                 
                 
             $('#box4').click(function(){                 
                  
                $('#add4').html("<div class='well well-sm'><form action='<?php echo site_url("farmersprofile_controller/process_myharvest/".$a->id);?>'  id='baseform' method='post' enctype='multipart/form-data' >Harvest Title : <input type='text' id='harvest_title' name='harvest_title' class='required form-control' /><br>Harvest Description : <textarea rows='8' cols='73' id='harvest_description' name='harvest_description' class='required form-control' ></textarea><br> Image of the Harvest<input type='file' id='harvest_image' name='harvest_image' /><br><input type='submit' class='btn btn-success btn-xs' id='submit' name='submit' value='SAVE' /></form></div>");
                 }); 
                  
           
              
               
            });
      </script>
      
   </head>

<div class="well well-lg"> 
    <div class="row">
        <div class="col-lg-8">
             <ol class="breadcrumb btn-xs">
                      You are here :  
                        <li><a href="<?php echo site_url('hamrokrishi/index');?>">Home</a></li>
                        <li><a href="<?php echo site_url('farmersprofile_controller/display_farmer');?>">Profile</a></li>
                        
                        <li class="active"><?php echo $a->farmers_name;?></li>
                        
                  </ol>
        </div>
        <div class="col-lg-4">
            <?php if($this->session->flashdata('edit_experiences')){?>
         <div class="row">
               <div class="col-lg-12">
                             <div class="alert alert-success alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?php echo $this->session->flashdata('edit_experiences');?>
        
                             </div>
               </div>
         </div> 

            <?php
            }
            if($this->session->flashdata('edit_training')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?php echo $this->session->flashdata('edit_training');?>
        
                             </div>
               </div></div> 

            <?php
            }
            if($this->session->flashdata('harvest_add')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <?php echo $this->session->flashdata('harvest_add');?>
        
                             </div>
               </div></div> 

            <?php
            }
             if($this->session->flashdata('harvest_delete')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <?php echo $this->session->flashdata('harvest_delete');?>
        
                             </div>
               </div></div> 

             <?php } if($this->session->flashdata('change_pp')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <?php echo $this->session->flashdata('change_pp');?>
        
                             </div>
               </div></div> 

             <?php }  if($this->session->flashdata('delete_pp')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <?php echo $this->session->flashdata('delete_pp');?>
        
                             </div>
               </div></div> 

             <?php }  if($this->session->flashdata('pass_changed')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <?php echo $this->session->flashdata('pass_changed');?>
        
                             </div>
               </div></div> 

             <?php }  ?>
        </div>
    </div>
   
    
    
    <div class="row">
              
        <div class="col-lg-3">
            <div class="well well-sm">
              
                   
                    <a href="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $a->farmers_image ;?>">
                        <img  class="thumbnail img-responsive center-block" src="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" />
                    </a>
  <div class="row">             
  <div class="col-lg-12">
                    <p id="box" class="text-center" ><a class="btn btn-info btn-xs center-block">Change Profile Picture</a></p>
                     <p id='add'></p> 
                     <?php if(!($a->farmers_image == "default_female.jpg" || $a->farmers_image == "default_male.jpg")) {?>
                    <p id="box1" class="text-center" ><a class="btn btn-default btn-xs center-block">Delete Profile Picture</a></p>
                    <p id='add1'></p> 
                     <?php }?>
  </div>
  </div>
      
     
     
      
      
   
            </div>
            <div class="well well-sm">
                <p class="text-center lead"><strong>MY PHOTOS</strong></p>
                
                <hr>
                <div class="row">
                    <?php $count= 1 ;?>
                    <?php foreach($value4->result() as $r) {
                        if ($count <=4){?>
                        
                    <div class="col-lg-6">

                           
                              <div class="col-lg-10 col-md-2 col-sm-3 col-xs-4 outer_small">  
                            <a href="<?php echo site_url('uploads/farmers_photos/'.$r->picture_name);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $r->picture_description;?>">   
                                <img class="img-responsive" src="<?php echo site_url('uploads/farmers_photos/'.$r->picture_name);?>"  height="80" width="80"></a>


                        </div>
                    </div>
                    <?php  $count += 1; } } ?>
            </div>
                <a class="btn btn-success btn-xs center-block" href="<?php echo site_url('farmersprofile_controller/show_myphotos/'.$a->id);?>">View All</a>
            </div>
               
        </div>
        
        
         <div class="col-lg-7">
             <div class="well well-sm">
                 
                 <h4 class="text-center">Krishak Profile</h4><hr>
                 <div class="row">
                     <div class="col-lg-5 col-md-5 col-sm-5 "></div>
                     
                     <div class="col-lg-3 col-md-3 col-sm-3 text-right ">
                         <strong>Profile Settings : </strong>
                     </div>
                     
                 
                     <div class="col-lg-2 col-md-2 col-sm-2 ">
                         <a class="btn btn-info btn-xs center-block" href="<?php echo site_url('farmersprofile_controller/change_password/'.$a->id);?>">
                         Password
                     </a>
                     </div>
                     <div class="col-lg-2 col-md-2 col-sm-2 ">
                         <a class="btn btn-danger btn-xs center-block" href="<?php echo site_url('farmersprofile_controller/delete_profile/'.$a->id);?>">
                         Delete Accnt.
                     </a>
                     </div>
                 </div>
                 <br>
                 <div class="well well-sm">
                    
                           
                                <strong>Basic Information</strong> 
                            
                         
                     
                      <a class="btn btn-default btn-xs " href="<?php echo site_url('farmersprofile_controller/edit_basicinfo/'.$a->id);?>">
                          EDIT
                     </a>
               
                     <h3><?php echo $a->farmers_name;?></h3>
                     <h5>Sex : <?php echo $a->farmers_sex;?></h5>
                     <h5>Address : <?php echo $a->farmers_address;?></h5>
                     <h5>Phone : <?php echo $a->farmers_phone;?></h5>
                     <h5>Email : <?php echo $a->farmers_email;?></h5>
                     <h5>Farming Area : <?php echo $a->farmers_area;?></h5>
                     <h5>Major Crop : <?php echo $a->farmers_maincrop;?></h5>
                 </div>
                 
                
                 <div class="row">
                     <div class="col-lg-3">
                        
                  <strong>My Experiences</strong>
                         <p id="box2"><a class="btn btn-default btn-xs center-block" >
                         EDIT
                             </a></p>
                   </div>
                 
                 
                    
              <div class="col-lg-9">
                 <div class="well well-sm">
                   
                     
                    <?php echo $a->farmers_experiences;?>
                
                       </div>
                  <p id="add2"></p>
                        
                </div>
                </div>
                 <hr>
                 <div class="row">
                     <div class="col-lg-3">
                        
                  <strong>My Training</strong>
                       <p id="box3">  <a class="btn btn-default btn-xs center-block" >
                         EDIT
                           </a></p>
                   </div>
                 
                 
                    
              <div class="col-lg-9">
                 <div class="well well-sm">
                   
                     
                    <?php echo $a->farmers_training;?>
                
                       </div>  
                   <p id="add3"></p>
                        
                </div>
                </div>
                 <hr>
                 <div class="row">
                     
                     <div class="col-lg-4">
                     <strong>My Harvests</strong>
                     <p id="box4"<a class="btn btn-success btn-xs " >
                         ADD NEW
                         </a></p>
                     </div>
                     
                     <div class="col-lg-4">
                    
                 </div>
                     <div class="col-lg-4"></div>
                     </div>
                     <p id="add4"></p>
                  <?php foreach($value3->result() as $r) {?>
                     <div class="row">
                     <div class="col-lg-12">
                        
                    <div class="well well-sm">
                        <div class="row">
                            <div class="col-lg-10"></div>
                             
                             <div class="col-lg-2">
                         <a class="btn btn-danger btn-xs center-block" href="<?php echo site_url('farmersprofile_controller/delete_myharvest/'.$r->id);?>">
                         DELETE
                     </a></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <a href="<?php echo site_url('uploads/farmers_harvest/'.$r->harvest_image);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $r->harvest_image ;?>">
                                            <img  class="thumbnail img-responsive center-block" src="<?php echo site_url('uploads/farmers_harvest/'.$r->harvest_image);?>" />
                                        </a>
                                    </div>
                                    <div class="col-lg-9">
                                        <h6>Added on : <?php echo $r->entry_date;?></h6>
                                        <h5><?php echo $r->harvest_name;?></h5>
                                        <h6><?php echo $r->harvest_description;?></h6>
                                    </div>
                                </div>
                               
                            </div>
                       
                  
                    </div>
                    </div>
                    </div>
                    </div>
                  <?php }  ;?>
                
                      
            
        </div>
        </div>
                
        <div class="col-lg-2">
            
            <div class="well well-sm">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="<?php echo site_url('farmersprofile_controller/ask_expert/'.$a->id);?>">
                            <img  class="img-responsive center-block" src="<?php echo site_url('uploads/all_data/our_expert.jpeg');?>" />
                            <img  class="img-responsive center-block" src="<?php echo site_url('uploads/all_data/askexpert.png');?>" />
                        </a>   
                </div>  
              </div>  
            </div>
            <div class="well well-sm">
                 <h5 class="text-center">Be Part of HamroKrishi</h5>
               <h6 class="text-center">Submit your  krishi news, stories and pictures</h6><hr>
               <a class="btn btn-success btn-xs center-block" href="<?php echo site_url('farmersprofile_controller/submit_data/NEWS');?>"> SUBMIT KRISHI NEWS </a><br>
               <a class="btn btn-info btn-xs center-block" href="<?php echo site_url('farmersprofile_controller/submit_data/STORY');?>"> SUBMIT KRISHI STORY </a><br>
               <a class="btn btn-primary btn-xs center-block" href="<?php echo site_url('farmersprofile_controller/submit_data/PHOTO');?>"> SUBMIT KRISHI PHOTOS</a><br>
            </div>
            
            
        </div>
    </div>
</div>