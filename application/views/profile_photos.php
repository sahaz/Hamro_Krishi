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
                        <li><a href="<?php echo site_url('profile_controller/single_profile/'.$a->id);?>"><?php echo $a->farmers_name;?></a></li>
                        <li class="active">Photos</li>
                        
                  </ol>
    
    <div class="row">
       
        <div class="col-lg-3">
             <div class="well well-sm">
              
                   
                    <a href="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" rel="prettyPhoto" title="<?php echo $a->farmers_image ;?>">
                        <img  class="thumbnail img-responsive center-block" src="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" height="300" width="300" />
                    </a>
                 <h4 class="text-center"><?php echo $a->farmers_name ;?></h4>
            </div>  
             
        </div>  
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
            
           
                <div class="row">
                   
                </div>
                <a class="btn btn-default btn-xs" href="<?php echo site_url('profile_controller/single_profile/'.$a->id);?>">Back</a>
                 <h4>Photos of : <?php echo $a->farmers_name;?></h4>
      
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