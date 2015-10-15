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
                        <li><a href="<?php echo site_url('disease_controller/display_crops'); ?>">Diseases</a></li>
                        <li class="active"><?php echo $a->crop_name;?></li>
                        
                  </ol>
    <div class="row">
         <div class="col-lg-2">
             
             <img  class=" img-responsive center-block" src="<?php echo site_url('uploads/all_data/disease_01.png');?>" height="90" width="260" />
         
         </div>
        <div class="col-lg-10">
    <?php foreach($value1->result() as $r) {
        if($r->disease_type == "Disease"){ ?>
<div class="col-lg-3">
    
      
         <div class="well well-sm">
         
              <a href="<?php echo site_url('disease_controller/display_single_disease/'.$r->id);?>"> 
                  <img class="img-circle img-responsive center-block" src="<?php echo site_url('uploads/diseases/'.$r->disease_image);?>" height="250" width="250" /></a>
              
             <div>
                 <p class="text-center">
                     <div class='row'>
                         <div class='col-lg-4'><h6 class="text-right">Disease Name </h6></div>
                 
                 <div class='col-lg-8'> <h5 class="text-justify"><?php echo $r->disease_name ;?></h5></div>
                     </div>  
                     <div class='row'>
                         <div class='col-lg-4'> <h6 class="text-right">Locally known as </h6></div>
                 <div class='col-lg-8'><h5 class="text-left"> <?php echo $r->disease_lname ;?></h5></div>
                     </div>  
                    
                        
                 </p>
               
            <a class="btn btn-info btn-xs center-block" href="<?php echo site_url('disease_controller/display_single_disease/'.$r->id);?>">    
         
            <span class="glyphicon glyphicon-search"></span> Select
         </a>
               
         </div>
         </div>
       
         
      
      </div>

             
        <?php }
        
        }?>
         </div>
             
         </div>
    <hr>
    <div class="row">
         <div class="col-lg-2">
             
             <img  class=" img-responsive center-block" src="<?php echo site_url('uploads/all_data/disease_02.png');?>" height="90" width="260" />
         
         </div>
        <div class="col-lg-10">
    <?php foreach($value1->result() as $r) {
        if($r->disease_type == "Worm"){ ?>
<div class="col-lg-3">
    
      
         <div class="well well-sm">
         
              <a href="<?php echo site_url('disease_controller/display_single_disease/'.$r->id);?>"> 
                  <img class="img-circle img-responsive center-block" src="<?php echo site_url('uploads/diseases/'.$r->disease_image);?>" height="250" width="250" /></a>
              
             <div>
                 <p class="text-center">
                     <div class='row'>
                         <div class='col-lg-4'><h6 class="text-right">Disease Name </h6></div>
                 
                 <div class='col-lg-8'> <h5 class="text-justify"><?php echo $r->disease_name ;?></h5></div>
                     </div>  
                     <div class='row'>
                         <div class='col-lg-4'> <h6 class="text-right">Locally known as </h6></div>
                 <div class='col-lg-8'><h5 class="text-left"> <?php echo $r->disease_lname ;?></h5></div>
                     </div>  
                    
                        
                 </p>
               
            <a class="btn btn-info btn-xs center-block" href="<?php echo site_url('disease_controller/display_single_disease/'.$r->id);?>">    
         
            <span class="glyphicon glyphicon-search"></span> Select
         </a>
               
         </div>
         </div>
       
         
      
      </div>

             
        <?php }
        
        }?>
         </div>
             
         </div>
         </div>
        