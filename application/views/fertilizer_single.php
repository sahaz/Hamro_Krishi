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
                        <li><a href="<?php echo site_url('fertilizer_controller/display_fertilizer');?>">Fertilizers</a></li>
                        
                        <li class="active"><?php echo $a->fertilizer_name;?></li>
                        
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
                          <a href="<?php echo site_url('uploads/fertilizer/'.$a->fertilizer_image);?>" rel="prettyPhoto" title="<?php echo $a->fertilizer_image ;?>">
                            <img  class="img-rounded thumbnail img-responsive center-block" src="<?php echo site_url('uploads/fertilizer/'.$a->fertilizer_image);?>" height="200" width="250" />
                          </a>
                    </div>
                    </div>
                        
                    </div>
                    <div class="col-lg-4"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                            <h2><?php echo $a->fertilizer_name;?></h2><br>
                           <h5>Descriptions and Proper Usage Techniques :</h5>
                                <?php echo $a->fertilizer_description;?>
                           
                        </div>
                        </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
                    <div class="col-lg-2">
                        <div class="well well-sm">
                        <a class="btn btn-warning btn-xs center-block" href="<?php echo site_url('fertilizer_controller/display_fertilizer');?>"> 

                            Quick Select Fertilizer
                          </a>

                              <hr>

                           <?php foreach($value2->result() as $f) { ?>

                          <a href="<?php echo site_url('fertilizer_controller/display_single_fertilizer/'.$f->id);?>">
                           <div class="row">

                              <div class="col-lg-12">



                                     <?php echo $f->fertilizer_name;?>
                                    

                              </div> 

                           </div>

                          </a>
                          <hr>




                              <?php }?>



                          </div>
                    </div>
        
    </div>
        
</div>