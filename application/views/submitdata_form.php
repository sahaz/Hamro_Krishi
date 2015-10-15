<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 
 ?>
<div class="well well-lg">  
    <div class="row">
       
        <div class="col-lg-9">
            <div class="well well-lg">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <?php if($this->session->flashdata('submitdata_mail_success')){?>
                            <div class="row">
                                  <div class="col-lg-12">
                                                <div class="alert alert-success alert-dismissible" role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <?php echo $this->session->flashdata('submitdata_mail_success');?>

                                                </div>
                                  </div>
                            </div> 

                               <?php
                               }
                               if($this->session->flashdata('submitdata_mail_error')){?>
                               <div class="row">
                                  <div class="col-lg-12">
                                               <div class="alert alert-danger alert-dismissible" role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <?php echo $this->session->flashdata('submitdata_mail_error');?>

                                                </div>
                                  </div></div> 

                        <?php }?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-3"><a class="btn btn-default btn-xs " href="<?php echo site_url('farmersprofile_controller/display_farmer');?>"><span class="glyphicon glyphicon-arrow-left"></span> Back to my Profile </a></div>
                    <div class="col-lg-6"><h4 class="text-center">Feature in HamroKrishi</h4>
                    <h6 class="text-center"><em>Submit your Krishi News, Stories and Krishi Photos. We will feature them in our website.</em></h6></div>
                    <div class="col-lg-6"></div>
                </div>   
                    <hr>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="well well-sm">
                                 <div class="row">
                         <div class="col-lg-12">
                     <div class="col-sm-4 ">My Name: </div>
                     <div class="col-sm-8">
                         <?php echo $this->session->userdata('f_name');?>
                     </div>
                     <div class="col-sm-4 ">My Email: </div>
                     <div class="col-sm-8">
                         <?php echo $this->session->userdata('f_status');?>
                     </div>
                     <div class="col-sm-4 ">Feature my : </div>
                     <div class="col-sm-8">
                        KRISHI  <?php echo $selection;?>
                     </div>
                    
                     </div>
                             </div>
                         </div>
                        </div>
                    </div>
                             
                     
                 
            
        
        </div>
        </div>
    
          <div class="col-lg-3">
            <div class="well well-lg"> 
                
                
            </div>
        </div>
        </div>
    <div class="row">
        
        <div class="col-lg-10">
        <div class="well well-lg">
            
            <form class="form-horizontal" action="<?php echo site_url('farmersprofile_controller/process_submitdata')?>" method="POST" id="baseform"  enctype="multipart/form-data ">
       
                     
                    
                    <div class="form-group">
                     <label class="col-sm-2 control-label"> Title : </label>
                     <div class="col-sm-10">
                         <input type="text" id="title" name="title" placeholder="Title of your <?php echo $selection;?>" class="required form-control" />
                     </div>
                     </div>
                    <div class="form-group">
                     <label class="col-sm-2 control-label">Description : </label>
                     <div class="col-sm-10">
                         <textarea rows="20" cols="40" name="description" id="description" placeholder="Full description of your <?php echo $selection;?>" class="required form-control"></textarea>
                         
                     </div>
                     </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label"> Image : </label>
                        <div class="col-sm-10">
                          <input type="file" name="image" id="image" />
                           <p class="help-block">choose your related image </p>
                        </div>
                     </div>
                     <div class="form-group">
                       <div class="col-md-3 control-label">
                 <input type="submit" class="btn btn-default" id="submit" name="submit" value="SEND" />
                       </div>
                       </div>     

                  </form>
        </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
