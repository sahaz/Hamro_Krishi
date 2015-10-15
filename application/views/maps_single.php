<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 $a=$value1->row();
 ?>
    

<div class="well well-lg"> 
    <ol class="breadcrumb btn-xs">
                      You are here :  
                        <li><a href="<?php echo site_url('hamrokrishi/index');?>">Home</a></li>
                        <li><a href="<?php echo site_url('maps_controller/display_maps');?>">Medicinal Plants</a></li>
                        
                        <li class="active"><?php echo $a->maps_name;?></li>
                        
                  </ol>
    <div class="row"></div>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
            <div class="well well-sm">
                <div class="row">
                   
                    <div class="col-lg-4"></div> 
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                          <a href="<?php echo site_url('uploads/maps/'.$a->maps_image);?>" rel="prettyPhoto" title="<?php echo $a->maps_name ;?>">
                            <img  class="img-rounded thumbnail img-responsive center-block" src="<?php echo site_url('uploads/maps/'.$a->maps_image);?>" height="200" width="250" />
                          </a>
                    </div>
                    </div>
                        
                    </div>
                    <div class="col-lg-4"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                            <h2><?php echo $a->maps_name;?></h2><br>
                           <h5>Descriptions and Suitable Conditions for farming :</h5>
                                <?php echo $a->maps_description;?>
                           
                        </div>
                        </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
                    <div class="col-lg-2">
                        <div class="well well-sm">
                        <a class="btn btn-warning btn-xs center-block" href="<?php echo site_url('maps_controller/display_maps');?>"> 

                            Quick select MAPs
                          </a>

                              <hr>

                           <?php foreach($value2->result() as $f) { ?>

                          <a href="<?php echo site_url('maps_controller/display_single_maps/'.$f->id);?>">
                           <div class="row">

                              <div class="col-lg-12">



                                  <h6>   <?php echo $f->maps_name;?></h6>
                                    

                              </div> 

                           </div>

                          </a>
                          <hr>




                              <?php }?>



                          </div>
                    </div>
        
    </div>
        
</div>