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
                        <li><a href="<?php echo site_url('soil_controller/display_soil');?>">Soil</a></li>
                        
                        <li class="active"><?php echo $a->dev_region ;?></li>
                        
                  </ol>
    <h6>Dev. Regions : 
        <a class="btn btn-success btn-xs" href="<?php echo site_url('soil_controller/display_districts/FWDR');?>">FWDR</a> 
        <a class="btn btn-success btn-xs" href="<?php echo site_url('soil_controller/display_districts/MWDR');?>">MWDR</a> 
        <a class="btn btn-success btn-xs" href="<?php echo site_url('soil_controller/display_districts/WDR');?>">WDR</a> 
        <a class="btn btn-success btn-xs" href="<?php echo site_url('soil_controller/display_districts/CDR');?>">CDR</a> 
        <a class="btn btn-success btn-xs" href="<?php echo site_url('soil_controller/display_districts/EDR');?>">EDR</a> 
   </h6>
     <div class="row">
         <div class="col-lg-4">
             <p class="lead">
                 Please select the places under given districts:
             </p>
         </div>
         <div class="col-lg-8">
             
                 <?php foreach($value3->result() as $d) {?>
                 <div class="row"> 
                     <p class="lead">
                <?php echo $d->district_name." : ";?>
                  <?php foreach($value2->result() as $r) {
                        if($r->district == $d->district_name){ ?>
                 <a class="btn btn-default btn-md" href="<?php echo site_url('soil_controller/display_location/'.$r->id);?>"><?php echo $r->place;?></a>  
                  <?php }  }
              
                echo '</p>';  
                echo '</div>';
                  echo '<br>';
                echo '<br>';
                  } ;?>
              
            
         </div>
     </div>
</div>