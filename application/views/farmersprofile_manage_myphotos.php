<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 $a=$value2->row();
 ?>
<div class="well well-lg">
    <div class="row">
       
        <div class="col-lg-2">
             <div class="well well-sm">
              
                   
                    <a href="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" rel="prettyPhoto" title="<?php echo $a->farmers_image ;?>">
                        <img  class="thumbnail img-responsive center-block" src="<?php echo site_url('uploads/farmersprofile/'.$a->farmers_image);?>" height="300" width="300" />
                    </a>
                 <h4 class="text-center"><?php echo $a->farmers_name ;?></h4>
            </div>  
              
        </div>  
        <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9">
            
                <div class="row">
                    <div class="col-lg-6">
                        <a class="btn btn-default btn-xs " href="<?php echo site_url('farmersprofile_controller/show_myphotos/'.$a->id);?>"><span class="glyphicon glyphicon-arrow-left"></span> Back to MY PHOTOS </a>
                 <h2>Manage your photos</h2>
          <hr>
                    </div>
                    <div class="col-lg-6">
                        <?php if($this->session->flashdata('myphotos_delete')){?>
                            <div class="row">
                                  <div class="col-lg-12">
                                                <div class="alert alert-success alert-dismissible" role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <?php echo $this->session->flashdata('myphotos_delete');?>

                                                </div>
                                  </div>
                            </div> 

                               <?php
                               } ?>
                    </div>
                </div>
                
                
      
                <div class="row">
                    
                <?php foreach($value3->result() as $r) {?>
                     
                       
                            <div class="col-lg-2 outer">
                                <div class="well well-sm">
                                     <div class="row">
                       
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                        <a href="<?php echo site_url('uploads/farmers_photos/'.$r->picture_name);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $r->picture_description;?>">   
                            <img class="thumbnail img-responsive center-block" src="<?php echo site_url('uploads/farmers_photos/'.$r->picture_name);?>"  height="200" width="200"></a>
                              
                                      <a class="btn btn-danger btn-xs center-block" href="<?php echo site_url('farmersprofile_controller/process_edit_myphotos/'.$r->id);?>"><span class="glyphicon glyphicon-trash"></span> DELETE </a>
                                  
                              
                              
                    
                    </div>
                </div>
                </div>
                </div>
                
                <?php } ?>
            </div>
            
        </div> 
    </div>  
</div>