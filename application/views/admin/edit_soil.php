<?php if(null == $this->session->userdata('status')){
 redirect('admin/backend/backend_login');
}
else
{ ?>
<?php
$this->load->view('admin/includes/semi_header.php');
$this->load->view('admin/includes/menu.php');

$r=$value->row();
?>
<div class="container well"> 
<h1>ADD Places :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_soil/process_edit_soil/'.$r->id);?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">  Name of the place:</label>
      <div class="col-sm-6">
      <input type="text"  name="place_name" id="place_name" value="<?php echo $r->place ;?>" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label"> Development Region:</label>
      <div class="col-sm-6">
      <input type="radio" name="dev_region" value="EDR" <?php if ($r->dev_region=='EDR'){?>checked="checked"<?php }?> /><label>&nbsp;&nbsp;EDR&nbsp;&nbsp;&nbsp;</label> 
      <input type="radio" name="dev_region" value="CDR" <?php if ($r->dev_region=='CDR'){?>checked="checked"<?php }?> /><label>&nbsp;&nbsp;CDR&nbsp;&nbsp;&nbsp;</label>   
      <input type="radio" name="dev_region" value="WDR" <?php if ($r->dev_region=='WDR'){?>checked="checked"<?php }?>/><label>&nbsp;&nbsp;WDR&nbsp;&nbsp;&nbsp;</label> 
      <input type="radio" name="dev_region" value="MWDR"<?php if ($r->dev_region=='MWDR'){?>checked="checked"<?php }?> /><label>&nbsp;&nbsp;MWDR&nbsp;&nbsp;&nbsp;</label> 
      <input type="radio" name="dev_region" value="FWDR" <?php if ($r->dev_region=='FWDR'){?>checked="checked"<?php }?> /><label>&nbsp;&nbsp;FWDR&nbsp;&nbsp;&nbsp;</label> 
       
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Soil Category:</label>
      <div class="col-sm-6">
            <select name="soil_type">
                         <option value="1" <?php if ($r->soil_type == 1){?> selected="selected" <?php }?> >Soils of Great Himalayas</option>
                         <option value="2" <?php if ($r->soil_type == 2){?> selected="selected" <?php }?> >Soils of the mountain land</option>
                         <option value="3" <?php if ($r->soil_type == 3){?> selected="selected" <?php }?> >Soils of river valleys</option>
                         <option value="4" <?php if ($r->soil_type == 4){?> selected="selected" <?php }?> >Soils of Silawik range</option>
                         <option value="5" <?php if ($r->soil_type == 5){?> selected="selected" <?php }?> >Soils of inner terai valley</option>
                         <option value="6" <?php if ($r->soil_type == 6){?> selected="selected" <?php }?> >Soils of the Terai Plane</option>
				
            </select>
      </div>
   </div>
   
    
 
   
      
   
      
   <div class="form-group">
      <label class="col-sm-3 control-label">Average Temperature :</label>
      <div class="col-sm-6">
      <input type="text"  name="avg_temp" id="avg_temp" value="<?php echo $r->avg_temp ;?>"class="required form-control" />
      </div>
   </div>
      
   <div class="form-group">
      <label class="col-sm-3 control-label">Average Rainfall :</label>
      <div class="col-sm-6">
      <input type="text"  name="avg_rainfall" id="avg_rainfall" value="<?php echo $r->avg_rainfall ;?>"class="required form-control" />
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">Nitrogen (N):</label>
      <div class="col-sm-6">
      <input type="text"  name="nitrogen" id="nitrogen" value="<?php echo $r->nitrogen ;?>"class="required form-control" />
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">Phosphorous (P):</label>
      <div class="col-sm-6">
      <input type="text"  name="phosphorous" id="phosphorous" value="<?php echo $r->phosphorous ;?>"class="required form-control" />
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">Potassium (K):</label>
      <div class="col-sm-6">
      <input type="text"  name="potassium" id="potassium" value="<?php echo $r->potassium ;?>" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label"> Mineral contents:</label>
      <div class="col-sm-6">
         <textarea rows="4" cols="20" name="mineral" id="mineral" class="required form-control"><?php echo $r->mineral; ?> </textarea>
      
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label"> Nutrient contents:</label>
      <div class="col-sm-6">
         <textarea rows="4" cols="20" name="nutrient" id="nutrient" class="required form-control"><?php echo $r->nutrient; ?> </textarea>
      
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label"> pH Value:</label>
      <div class="col-sm-6">
         <input type="text"  name="ph_value" id="ph_value" value="<?php echo $r->ph_value ;?>"class="required form-control" />
      
      </div>
   </div>
   
   
        
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO TITLE:</label>
      <div class="col-sm-6">
   <input type="text"   name="seo_title" id="seo_title" value="<?php echo $r->seo_title ;?>"class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO KEYWORD:</label>
      <div class="col-sm-6">
   <input type="text"   name="seo_keyword" id="seo_keyword" value="<?php echo $r->seo_keyword ;?>"class="required form-control" />
      </div>
   </div>
   
    
  <div class="form-group">
      <label class="col-sm-3 control-label"> META DATA:</label>
      <div class="col-sm-6">
        <textarea rows="4" cols="20" name="metadata" id="metadata" class="required form-control"><?php echo $r->metadata; ?> </textarea>
      </div>
   </div>
  
   <div class="form-group">
      <label class="col-sm-3 control-label"> Image of the place:</label>
      <div class="col-sm-6">
        <input type="file" name="place_image" id="place_image" />
         <p class="help-block">upload image of the location </p>
      </div>
   </div>
   <br>
   
   <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
  <input type="hidden" id="hidden" name="hidden" value="<?php echo $r->place_image;?>" />      
        </div>
        </div>

   
</form>
</div>
<?php }?>