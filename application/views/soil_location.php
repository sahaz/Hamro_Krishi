<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 $a=$value1->row();
 ?>    

<div class="container well well-lg"> 
    <ol class="breadcrumb btn-xs">
                      You are here :  
                        <li><a href="<?php echo site_url('hamrokrishi/index');?>">Home</a></li>
                        <li><a href="<?php echo site_url('soil_controller/display_soil');?>">Soil</a></li>
                        <li><a href="<?php echo site_url('soil_controller/display_soil');?>"><?php echo $a->dev_region ;?></a></li>
                        <li><a href="<?php echo site_url('soil_controller/display_districts/'.$a->dev_region);?>"><?php echo $a->district ;?></a></li>
                        
                        <li class="active"><?php echo $a->place ;?></li>
                        
                  </ol>
    <div class="row">
          <div class="col-lg-1">
           
        </div>
       
        <div class="col-lg-7">
            <div class="well well-sm">
              
                   
                    <a href="<?php echo site_url('uploads/soil/'.$a->place_image);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $a->place_image ;?>">
           <img  class="thumbnail img-responsive center-block" src="<?php echo site_url('uploads/soil/'.$a->place_image);?>" height="300" width="450" />
            </a>
                
                  <div class="row">
                      
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h3><?php echo $a->place;?></h3>
                        <div class="well well-sm">
                        <h5>Soil type : <?php 
                                    if($a->soil_type == 1)
                                    {
                                        echo "Soils of Great Himalayas";
                                    }
                                 elseif($a->soil_type == 2) 
                                    {
                                        echo "Soils of the mountain land";
                                    }
                                 elseif($a->soil_type == 3) 
                                    {
                                        echo "Soils of river valleys";
                                    }
                                 elseif($a->soil_type == 4) 
                                    {
                                        echo "Soils of Silawik range";
                                    }
                                 elseif($a->soil_type == 5) 
                                    {
                                        echo "Soils of inner terai valley";
                                    }
                                 elseif($a->soil_type == 6) 
                                    {
                                        echo "Soils of the Terai Plane";
                                    }
                                    ?></h5></div>
                        <h6>Average Rainfall : <?php echo $a->avg_rainfall;?> &deg; C</h6>
                        <h6>Average Temperature : <?php echo $a->avg_temp;?> mm </h6>
                       
                           
                        
                    </div>
                      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        
                        <img  class="left img-responsive center-block" src="<?php echo site_url('uploads/all_data/'.$a->dev_region.'.png');?>" height="150" width="150" />
                        <p class="text-center">District : <strong><?php echo $a->district;?></strong></p>
                    </div>
                      <div class="col-lg-1"></div>
                </div>
               
                
                <div class="row">
                    <div class="col-lg-6">
                         <div class="well well-sm">
                         
                                <h5>Nitrogen (N) : <?php echo $a->nitrogen;?> % </h5>
                                <h5>Phosphorous (P) : <?php echo $a->phosphorous;?> % </h5>
                                <h5>Potassium (K) : <?php echo $a->potassium;?> % </h5>
                                <h5>pH Value (pH): <?php echo $a->ph_value;?></h5>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <div class="well well-sm">
                        <h5><u>Mineral Contents</u></h5><?php echo $a->mineral;?></p> 
                    </div>
                </div>
                    <div class="col-lg-12">
                    <div class="well well-sm">
                        <h5><u>Nutrient Contents</u></h5><?php echo $a->nutrient;?></p> 
                    </div>
                </div>
                </div>
               </div>
               
        </div>
        
        
         <div class="col-lg-1">
            
        </div>
                
        <div class="col-lg-3">
            <div class="well well-sm">
            
                    <a class="btn btn-warning btn-xs center-block" href="<?php echo site_url('soil_controller/display_soil');?>"> 
         
                        Change Development Region
                    </a>
                    <hr>
                    <h6><a href="<?php echo site_url('soil_controller/display_districts/FWDR');?>"> 
         
                        Far-Western Dev, Region (FWDR)
                        </a></h6>
                    <h6><a href="<?php echo site_url('soil_controller/display_districts/MWDR');?>"> 
         
                        Mid-Western Dev. Region (MWDR)
                        </a></h6>
                    <h6><a href="<?php echo site_url('soil_controller/display_districts/WDR');?>"> 
         
                        Western Dev. Region (WDR)
                        </a></h6>
                    <h6><a href="<?php echo site_url('soil_controller/display_districts/CDR');?>"> 
         
                        Central Dev. Region (CDR)
                        </a></h6>
                    <h6><a href="<?php echo site_url('soil_controller/display_districts/EDR');?>"> 
         
                        Eastern Dev. Region (EDR)
                        </a></h6>
                        
                
            </div>
            
            <div class="well well-sm">
               <a class="btn btn-success btn-xs center-block" href="<?php echo site_url('soil_controller/display_districts/'.$a->dev_region);?>"> 
         
                        Change District
                    </a> 
                  <?php foreach($value3->result() as $d) {?>
                 
                  
                <strong><u><?php echo $d->district_name;?></u></strong><br>
                  <?php foreach($value2->result() as $r) {
                        if($r->district == $d->district_name){ ?>
                 <a class="btn btn-default btn-xs" href="<?php echo site_url('soil_controller/display_location/'.$r->id);?>"><?php echo $r->place;?></a>  
                 
                  <?php }  }
                  
              
                
                
                echo '<br>';
                echo '<br>';
                  } ;?>
              
                
            </div>
        </div>
    </div>
</div>