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
                        
                        <li class="active">Soil</li>
                        
                  </ol>
   <div class="row">
       <div class="col-lg-8">
                   <p class="lead text-justify"> <?php 
                    echo $a->data_description;
                    echo "<br>";
                    ?></p>
       
            </div>
       <div class="col-lg-4">
            <a href="<?php echo site_url('uploads/all_data/'.$a->data_image);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $a->data_image ;?>">
           <img  class="img-rounded thumbnail center-block" src="<?php echo site_url('uploads/all_data/'.$a->data_image);?>" height="250" width="350" />
            </a>
       </div>
       </div>
    <hr>
    <div class="row">
         <div class="col-lg-2">
             <img class="img-responsive center-block" src="<?php echo site_url('uploads/all_data/soil_01.png');?>" height="140" width="140" />
         </div>
         <div class="col-lg-10">
             <div class="row">
             <div class="col-lg-2">     
                 <div class="well well-sm">         
              <a href="<?php echo site_url('soil_controller/display_districts/FWDR');?>"> 
                  <img class="center-block img-responsive" src="<?php echo site_url('uploads/all_data/fwdr.png');?>" height="150" width="150" /></a>
                 </div>
             </div>
             <div class="col-lg-2">     
                 <div class="well well-sm">         
              <a href="<?php echo site_url('soil_controller/display_districts/MWDR');?>"> 
                  <img class="center-block img-responsive" src="<?php echo site_url('uploads/all_data/mwdr.png');?>" height="150" width="150" /></a>
                 </div>
             </div>
             <div class="col-lg-2">     
                 <div class="well well-sm">         
              <a href="<?php echo site_url('soil_controller/display_districts/WDR');?>"> 
                  <img class="center-block img-responsive" src="<?php echo site_url('uploads/all_data/wdr.png');?>" height="150" width="150" /></a>
                 </div>
             </div>
             <div class="col-lg-2">     
                 <div class="well well-sm">         
              <a href="<?php echo site_url('soil_controller/display_districts/CDR');?>"> 
                  <img class="center-block img-responsive" src="<?php echo site_url('uploads/all_data/cdr.png');?>" height="150" width="150" /></a>
                 </div>
             </div>
             <div class="col-lg-2">     
                 <div class="well well-sm">         
              <a href="<?php echo site_url('soil_controller/display_districts/EDR');?>"> 
                  <img class="center-block img-responsive" src="<?php echo site_url('uploads/all_data/edr.png');?>" height="150" width="150" /></a>
                 </div>
             </div>
             
             </div>
         </div>
         
     </div>
</div>