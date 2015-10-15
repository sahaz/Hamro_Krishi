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
              
                   
                    <a href="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" rel="prettyPhoto" title="<?php echo $a->farmers_image ;?>">
                        <img  class="thumbnail img-responsive center-block" src="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" height="300" width="300" />
                    </a>
                 <h4 class="text-center"><?php echo $a->farmers_name ;?></h4>
            </div>  
             <div class="well well-sm">
                 <h5 class="text-center">ADD MORE PHOTOS</h5><hr>
                 <div class="row">
                     <div class="col-lg-12">
                    <form class="form-horizontal" action="<?php echo site_url('farmersprofile_controller/process_myphotos/'.$a->id);?>" method="POST" id="baseform" enctype="multipart/form-data">
       
                        
                             <input type="file" id="myphoto" name="myphoto" /><br>
                         
                       Description of your photo :
                                    <textarea rows="4" cols="30" name="picture_description" id="picture_description" ></textarea>

                                    <br>
                               <input type="submit" class="btn btn-info btn-xs" id="submit" name="submit" value="UPLOAD" />
                            
                            </form>
            </div>  
            </div>  
            </div>  
        </div>  
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
            
           
                <div class="row">
                    <?php if($this->session->flashdata('myphotos_success')){?>
         <div class="row">
               <div class="col-lg-12">
                             <div class="alert alert-success alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?php echo $this->session->flashdata('myphotos_success');?>
        
                             </div>
               </div>
         </div> 

            <?php
            }?>
                </div>
                <a class="btn btn-default btn-xs" href="<?php echo site_url('farmersprofile_controller/display_farmer/');?>">Back to My Profile </a>
                 <h2>My Photos</h2>
        <a class="btn btn-info btn-xs" href="<?php echo site_url('farmersprofile_controller/manage_myphotos/'.$a->id);?>">MANAGE MY PHOTOS </a>
        <hr>
                <div class="row">
                <?php foreach($value3->result() as $r) {?>
                    
                <div class="col-lg-3 outer">
                    
                       
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer">  
                        <a href="<?php echo site_url('uploads/farmers_photos/'.$r->picture_name);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $r->picture_description;?>">   
                            <img class="thumbnail img-responsive" src="<?php echo site_url('uploads/farmers_photos/'.$r->picture_name);?>" height="160" width="160" ></a>
                    
                    
                    </div>
                </div>
                <?php } ?>
            </div>
            
        </div>  
    </div>  
</div>