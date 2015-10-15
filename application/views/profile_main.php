<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 
 ?>
<div class="well well-lg">
     <ol class="breadcrumb btn-xs">
                      You are here :  
                        <li><a href="<?php echo site_url('hamrokrishi/index');?>">Home</a></li>
                        
                        <li class="active">Krishaks</li>
                        
                  </ol>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            
                <h2 class="text-center"> Our Registered Krishaks </h2>
                <hr>
                <div class="row">
                    <?php foreach($value2->result() as $r) {?>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 outer_krishak">
                    <div class="well well-sm">
                        <div class="row">
                         <a href="<?php echo site_url('profile_controller/single_profile/'.$r->id);?>"> 
                  <img class="img-rounded thumbnail img-responsive center-block" src="<?php echo site_url('uploads/farmersprofile/'.$r->farmers_image);?>" height="160" width="130" /></a>
                        </div>
                          <div class="row">
                              <div class="col-lg-12">
                            
                                  <h6 class="text-center"><?php echo $r->farmers_name;?></h6>
                            
                                   <a  class="btn btn-primary center-block btn-xs" href="<?php echo site_url('profile_controller/single_profile/'.$r->id);?>">     
                                  View Profile </a>
                        </div>
                        </div>
                    </div>
                </div>
                 <?php } ?>
            </div>
            
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>