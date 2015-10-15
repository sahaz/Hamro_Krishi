<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 $a=$value2->row();
 ?>
<div class="well well-lg">  
    <div class="row">
        <div class="col-lg-5">
            <div class="well well-lg"> 
                <img  class="img-responsive center-block" src="<?php echo site_url('uploads/all_data/our_expert.jpeg');?>" height="200" width="100" />
                <hr>
                <div class="row">
                <div class="col-lg-3">
                    <img  class="img-responsive center-block" src="<?php echo site_url('uploads/all_data/'.$a->data_image);?>" height="100" width="100" />
                    <h6 class="text-center">Govt. of Nepal Certified</h6>
                </div>
                <div class="col-lg-9">
                    <h5><?php echo $a->data_description;?></h5>
                </div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-7">
            <div class="well well-lg">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <?php if($this->session->flashdata('mail_success')){?>
                            <div class="row">
                                  <div class="col-lg-12">
                                                <div class="alert alert-success alert-dismissible" role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <?php echo $this->session->flashdata('mail_success');?>

                                                </div>
                                  </div>
                            </div> 

                               <?php
                               }
                               if($this->session->flashdata('mail_error')){?>
                               <div class="row">
                                  <div class="col-lg-12">
                                               <div class="alert alert-danger alert-dismissible" role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <?php echo $this->session->flashdata('mail_error');?>

                                                </div>
                                  </div></div> 

                        <?php }?>
                    </div>
                </div>
                <div class="row">
                <div class="row">
                    <div class="col-lg-3"><a class="btn btn-default btn-xs " href="<?php echo site_url('farmersprofile_controller/display_farmer');?>"><span class="glyphicon glyphicon-arrow-left"></span> Back to MY Profile </a></div>
                    <div class="col-lg-6"><h4 class="text-center">Ask Our Expert</h4>
                    <h6 class="text-center"><em>Put your queries and send to our expert.</em></h6></div>
                    <div class="col-lg-6"></div>
                </div>   
                    <hr>
                 <form class="form-horizontal" action="<?php echo site_url('farmersprofile_controller/process_ask_expert')?>" method="POST" id="baseform" >
       
                    <div class="form-group">
                     <label class="col-sm-4 control-label">Your Email Address : </label>
                     <div class="col-sm-6">
                         <h5><?php echo $this->session->userdata('f_status');?></h5>
                     </div>
                     </div>
                    <div class="form-group">
                     <label class="col-sm-4 control-label"> Subject of your query : </label>
                     <div class="col-sm-6">
                         <input type="text" id="subject" name="subject" class="required form-control" />
                     </div>
                     </div>
                    <div class="form-group">
                     <label class="col-sm-4 control-label">Explanation of your query : </label>
                     <div class="col-sm-6">
                         <textarea rows="6" cols="20" name="news_body" id="news_body" class="required form-control"></textarea>
                     
                     </div>
                     </div>
                     <div class="form-group">
                       <div class="col-md-10 control-label">
                 <input type="submit" class="btn btn-success" id="submit" name="submit" value="SEND EMAIL" />
                       </div>
                       </div>     

                  </form>
            
        
        </div>
        </div>
    </div>
</div>
</div>