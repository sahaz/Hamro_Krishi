<?php if(null == $this->session->userdata('status')){
 redirect('admin/backend/backend_login');
}
else
{ ?>
<?php
$this->load->view('admin/includes/semi_header.php');
$this->load->view('admin/includes/menu.php');

?>
<div class="container well"> 
<h1>ADD Places :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_soil/process_soil');?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">  Name of the place:</label>
      <div class="col-sm-6">
      <input type="text"  name="place_name" id="place_name" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label"> Development Region:</label>
      <div class="col-sm-6">
      <input type="radio" name="dev_region" value="EDR" checked="checked" /><label>&nbsp;&nbsp;EDR&nbsp;&nbsp;&nbsp;</label> 
      <input type="radio" name="dev_region" value="CDR"  /><label>&nbsp;&nbsp;CDR&nbsp;&nbsp;&nbsp;</label>   
      <input type="radio" name="dev_region" value="WDR" /><label>&nbsp;&nbsp;WDR&nbsp;&nbsp;&nbsp;</label> 
      <input type="radio" name="dev_region" value="MWDR" /><label>&nbsp;&nbsp;MWDR&nbsp;&nbsp;&nbsp;</label> 
      <input type="radio" name="dev_region" value="FWDR"  /><label>&nbsp;&nbsp;FWDR&nbsp;&nbsp;&nbsp;</label> 
       
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Soil Category:</label>
      <div class="col-sm-6">
            <select name="soil_type">
                         <option value="1">Soils of Great Himalayas</option>
                         <option value="2">Soils of the mountain land</option>
                         <option value="3">Soils of river valleys</option>
                         <option value="4">Soils of Silawik range</option>
                         <option value="5">Soils of inner terai valley</option>
                         <option value="6">Soils of the Terai Plane</option>
				
            </select>
      </div>
   </div>
   
    
 
   
      
   
      
   <div class="form-group">
      <label class="col-sm-3 control-label">Average Temperature :</label>
      <div class="col-sm-6">
      <input type="text"  name="avg_temp" id="avg_temp" class="required form-control" />
       <p class="help-block">*integer value only </p>
      </div>
   </div>
      
   <div class="form-group">
      <label class="col-sm-3 control-label">Average Rainfall :</label>
      <div class="col-sm-6">
      <input type="text"  name="avg_rainfall" id="avg_rainfall" class="required form-control" />
      <p class="help-block">*integer value only </p>
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">Nitrogen (N):</label>
      <div class="col-sm-6">
      <input type="text"  name="nitrogen" id="nitrogen" class="required form-control" />
      <p class="help-block">*integer value only </p>
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">Phosphorous (P):</label>
      <div class="col-sm-6">
      <input type="text"  name="phosphorous" id="phosphorous" class="required form-control" />
      <p class="help-block">*integer value only </p>
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">Potassium (K):</label>
      <div class="col-sm-6">
      <input type="text"  name="potassium" id="potassium" class="required form-control" />
      <p class="help-block">*integer value only </p>
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label"> Mineral contents:</label>
      <div class="col-sm-6">
         <textarea rows="4" cols="20" name="mineral" id="mineral" class="required form-control"></textarea>
      
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label"> Nutrient contents:</label>
      <div class="col-sm-6">
         <textarea rows="4" cols="20" name="nutrient" id="nutrient" class="required form-control"></textarea>
      
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label"> pH Value:</label>
      <div class="col-sm-6">
         <input type="text"  name="ph_value" id="ph_value" class="required form-control" />
      
      </div>
   </div>
   
   
        
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO TITLE:</label>
      <div class="col-sm-6">
   <input type="text"   name="seo_title" id="seo_title" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO KEYWORD:</label>
      <div class="col-sm-6">
   <input type="text"   name="seo_keyword" id="seo_keyword" class="required form-control" />
      </div>
   </div>
   
    
  <div class="form-group">
      <label class="col-sm-3 control-label"> META DATA:</label>
      <div class="col-sm-6">
        <textarea rows="4" cols="20" name="metadata" id="metadata" class="required form-control"></textarea>
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
        </div>
        </div>

   
</form>
</div>
<?php }?>