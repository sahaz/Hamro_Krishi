<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 $a=$value2->row();
 $r=$value1->row();
 ?>

<div class="well well-lg">
    <div class="row">
        
        <div class="col-lg-10">
                  <ol class="breadcrumb btn-xs ">
                      You are here :  
                        <li><a href="<?php echo site_url('hamrokrishi/index');?>">Home</a></li>
                        <li><a href="<?php echo site_url('disease_controller/display_crops'); ?>">Diseases</a></li>
                        <li><a href="<?php echo site_url('disease_controller/display_diseases/'.$a->id); ?>"><?php echo $a->crop_name;?></a></li>
                        <li class="active"><?php echo $r->disease_name;?></li>
                        
                  </ol>

            <div class="row">
            <div class="col-lg-5">
                             
                         <a href="<?php echo site_url('uploads/diseases/'.$r->disease_image);?>" rel="prettyPhoto" title="<?php echo $r->disease_name;?>">   
                        <img class="thumbnail " src="<?php echo site_url('uploads/diseases/'.$r->disease_image);?>" height="305" width="400" ></a>
                </div>
            <div class="col-lg-7">
                
                           <p class="text-left lead">
                           <h2><?php echo $r->disease_name ;?> </h2></p><hr>
                              <p class="text-left lead">Locally known as : <em><?php echo $r->disease_lname ;?></em></p>
                              <div class="well well-sm">
                                  
                                  <div class="row">
                                  <div class="col-lg-6">
                                      <p class="text-left lead">Affected Crop :</p><hr>
                                      <h3 class="text-center"><?php echo $a->crop_name ;?></h3>
                            <h5><p class="text-center">( <em><?php echo $a->crop_sname ;?></em> )</p></h5>
                                  </div>
                                  <div class="col-lg-6">
                                   
                             <a href="<?php echo site_url('uploads/crops/'.$a->crop_image);?>" rel="prettyPhoto" title="<?php echo $a->crop_name;?>">   
                        <img class="img-rounded center-block " src="<?php echo site_url('uploads/crops/'.$a->crop_image);?>" height="140" width="250" ></a>
                            
                                  </div>
                                       </div>
                                   
                        
                              </div>
                        </div>
    </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="well well-sm">
                         <div class="row">
                                <div class="col-lg-2">
                                    <h3 class="text-center">Symptoms :</h3>
                                </div>
                                <div class="col-lg-10">
                                     <p class="lead"><?php echo $r->disease_symptoms ;?></p>
                                </div>
                             </div>
                        <hr>
                         <div class="row">
                                <div class="col-lg-2">
                                    <h3 class="text-center">Causes :</h3>
                                </div>
                                <div class="col-lg-10">
                                     <p class="lead"><?php echo $r->disease_causes ;?></p>
                                </div>
                             </div>
                        <hr> 
                        <div class="row">
                                <div class="col-lg-2">
                                    <h3 class="text-center">Preventive Measures :</h3>
                                </div>
                                <div class="col-lg-10">
                                     <p class="lead"><?php echo $r->disease_preventive_measures ;?></p>
                                </div>
                             </div>
                    </div>
                </div>
            </div>
    </div>
        <div class="col-lg-2">
         <div class="well well-sm">
       <a class="btn btn-success btn-xs center-block" href="<?php echo site_url('disease_controller/display_diseases/'.$a->id);?>"> 
         
           View all under this crop
         </a>
         
             <hr>
         <strong>Diseases :</strong>
          <?php foreach($value3->result() as $t) { 
                if($t->disease_type == "Disease" && $t->crop_id == $r->crop_id ){  ?>
         <a href="<?php echo site_url('disease_controller/display_single_disease/'.$t->id);?>">
          <div class="row">
              
             <div class="col-lg-12">
                 
                 
                
                    <?php echo $t->disease_name;?>
                 
             </div> 
      
          </div>
          
         </a>
         <hr>
         <?php }?>
          
         
        
             <?php }?>
         
         <strong>Pests :</strong>
          <?php foreach($value3->result() as $t) { 
                if($t->disease_type == "Worm" && $t->crop_id == $r->crop_id ){  ?>
         <a href="<?php echo site_url('disease_controller/display_single_disease/'.$t->id);?>">
          <div class="row">
              
             <div class="col-lg-12">
                 
                 
                
                    <?php echo $t->disease_name;?>
                 
             </div> 
      
          </div>
          
         </a>
         <hr>
         <?php }?>
          
         
        
             <?php }?>
         
         
         </div>
         <div class="well well-sm">
       <a class="btn btn-warning btn-xs center-block" href="<?php echo site_url('disease_controller/display_crops/'.$a->id);?>"> 
         
           Select another crop
         </a>
         
             <hr>
         
          <?php foreach($value4->result() as $f) { ?>
                
         <a href="<?php echo site_url('disease_controller/display_diseases/'.$f->id);?>">
          <div class="row">
              
             <div class="col-lg-12">
                 
                 
                
                    <?php echo $f->crop_name;?>
                    <h6><em>( <?php echo $f->crop_sname;?> )</em></h6>
                 
             </div> 
      
          </div>
          
         </a>
         <hr>
         
          
         
        
             <?php }?>
         
        
         
         </div>
         
      </div>

    </div>
</div>