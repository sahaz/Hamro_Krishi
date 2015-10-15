<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 $a=$value3->row();
 ?>
    

<div class="well well-lg"> 
    <ol class="breadcrumb btn-xs">
                      You are here :  
                        <li><a href="<?php echo site_url('hamrokrishi/index');?>">Home</a></li>
                        
                        <li class="active">Medicinal Plants</li>
                        
                  </ol>
   <div class="row">
       <div class="col-lg-8">
                   <p class="lead text-justify"> <?php 
                    echo $a->data_description;
                    echo "<br>";
                    ?></p>
       
            </div>
       <div class="col-lg-4">
           <a href="<?php echo site_url('uploads/all_data/'.$a->data_image);?>" rel="prettyPhoto" title="<?php echo $a->data_image ;?>">
           <img  class="img-rounded img-responsive thumbnail center-block" src="<?php echo site_url('uploads/all_data/'.$a->data_image);?>" height="250" width="350" />
           </a>
       </div>
       </div>
    <hr>
     <div class="row">
         <div class="col-lg-2">
             <img class="img-responsive center-block" src="<?php echo site_url('uploads/all_data/map_01.png');?>" height="140" width="140" />
         </div>
         <div class="col-lg-10">
             <div class="row">
    <?php foreach($value2->result() as $r) {?>

             <div class="col-lg-3 outer_other">
    
      
         <div class="well well-sm">
         
              <a href="<?php echo site_url('maps_controller/display_single_maps/'.$r->id);?>"> 
                  <img class="img-rounded center-block" src="<?php echo site_url('uploads/maps/'.$r->maps_image);?>" height="140" width="140" /></a>
              
             <div>
                 <p class="text-center">
                     <div class='row'>
                         <div class='col-lg-3'><h6>Name:</h6></div>
                 
                         <div class='col-lg-8'> <h6 class="text-left"><strong><?php echo $r->maps_name ;?></strong></h6></div>
                     </div> 
                    
                        
                 </p>
               
            <a class="btn btn-success btn-xs center-block" href="<?php echo site_url('maps_controller/display_single_maps/'.$r->id);?>">    
         
            <span class="glyphicon glyphicon-search"></span> Select
         </a>
               
         </div>
         </div>
       
         
      
      </div>

             
      <?php }?>
         </div>
         </div>
         
     </div>
         
    
   </div>