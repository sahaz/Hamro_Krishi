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
<h1>ADD DISEASES/INFECTANTS :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_diseases/process_edit_diseases/'.$r->id);?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Name of the Crop affected with the disease/infectant:</label>
      <div class="col-sm-6">
            <select name="disease_crop">
                           <?php  
                              foreach($value2->result() as $s)
                                 {
                                      ?><option value="<?php echo $s->id; ?>" <?php if ($r->crop_id == $s->id){?> selected="selected" <?php }?> ><?php echo $s->crop_name; ?></option><?php
				}   ?>
            </select>
      </div>
   </div>
   
    
 
   
      
   <div class="form-group">
      <label class="col-sm-3 control-label">  Type :</label>
      <div class="col-sm-6">
      <input type="radio" name="disease_type" value="Disease" <?php if ($r->disease_type == "Disease"){?> checked="checked" <?php } ?>/><label>Disease</label>
       <input type="radio" name="disease_type" value="Worm" <?php if ($r->disease_type == "Worm"){?> checked="checked" <?php } ?>/><label>Worms</label>
      </div>
   </div>
      
   <div class="form-group">
      <label class="col-sm-3 control-label">  Name of the Disease?Infectant:</label>
      <div class="col-sm-6">
      <input type="text"  name="disease_name" id="disease_name" value="<?php echo $r->disease_name ;?>" class="required form-control" />
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">  Locally Known as :</label>
      <div class="col-sm-6">
      <input type="text"  name="disease_lname" id="disease_lname" value="<?php echo $r->disease_lname ;?>" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">  Causes/Identification:</label>
      <div class="col-sm-6">
         <textarea rows="4" cols="20" name="disease_causes" id="disease_causes" class="required form-control"><?php echo $r->disease_causes; ?> </textarea>
      
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">  Symptoms:</label>
      <div class="col-sm-6">
         <textarea rows="4" cols="20" name="disease_symptoms" id="disease_symptoms" class="required form-control"><?php echo $r->disease_symptoms; ?> </textarea>
      
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">  Preventive Measures:</label>
      <div class="col-sm-6">
         <textarea rows="4" cols="20" name="disease_preventive_measures" id="disease_preventive_measures" class="required form-control"><?php echo $r->disease_preventive_measures; ?> </textarea>
      
      </div>
   </div>
   
        
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO TITLE:</label>
      <div class="col-sm-6">
   <input type="text"   name="seo_title" id="seo_title" value="<?php echo $r->seo_title ;?>" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO KEYWORD:</label>
      <div class="col-sm-6">
   <input type="text"   name="seo_keyword" id="seo_keyword" value="<?php echo $r->seo_keyword ;?>" class="required form-control" />
      </div>
   </div>
   
    
  <div class="form-group">
      <label class="col-sm-3 control-label"> META DATA:</label>
      <div class="col-sm-6">
        <textarea rows="4" cols="20" name="metadata" id="metadata" class="required form-control"><?php echo $r->metadata; ?> </textarea>
      </div>
   </div>
  
   <div class="form-group">
      <label class="col-sm-3 control-label"> Image of the disease/infectant:</label>
      <div class="col-sm-6">
        <input type="file" name="disease_image" id="disease_image" />
         <p class="help-block">upload images of plant affected with disease or image of the infectants </p>
      </div>
   </div>
   <br>
   
   <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" />
  <input type="hidden" id="hidden" name="hidden" value="<?php echo $r->disease_image;?>" /><br><br>      <br><br>
        </div>
        </div>

   
</form>
</div>
<?php }?>