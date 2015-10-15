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
                        
                        <li class="active">Diseases</li>
                        
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
            <img class="img-responsive center-block" src="<?php echo site_url('uploads/all_data/crop_02.png');?>" height="140" width="140" />
         </div>
         <div class="col-lg-10">
             <div class="row">
    <?php foreach($value1->result() as $r) {?>

             
             <div class="col-lg-3 outer_disease">
    
      
         <div class="well well-sm">
         
              <a href="<?php echo site_url('disease_controller/display_diseases/'.$r->id);?>"> 
                  <img class="img-circle  img-responsive center-block" src="<?php echo site_url('uploads/crops/'.$r->crop_image);?>" height="140" width="140" /></a>
              
             <div>
                 <p class="text-center">
                     <div class='row'>
                         <div class='col-lg-3'><h6>Common Name </h6></div>
                 
                         <div class='col-lg-8'> <h6 class="text-center"><strong>: &nbsp; <?php echo $r->crop_name ;?></strong></h6></div>
                     </div>  
                     <div class='row'>
                         <div class='col-lg-3'> <h6>Scientific Name</h6></div>
                         <div class='col-lg-8'><h6 class="text-center">: &nbsp; <?php echo $r->crop_sname ;?></h6></div>
                     </div>  
                    
                        
                 </p>
               
            <a class="btn btn-info btn-xs center-block" href="<?php echo site_url('disease_controller/display_diseases/'.$r->id);?>">    
         
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