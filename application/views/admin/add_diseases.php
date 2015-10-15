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
<h1>ADD DISEASES/INFECTANTS :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_diseases/process_diseases');?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Name of the Crop affected with the disease/infectant:</label>
      <div class="col-sm-6">
            <select name="disease_crop">
                           <?php  
                              foreach($value->result() as $r)
                                 {
                                      ?><option value="<?php echo $r->id; ?>"><?php echo $r->crop_name; ?></option><?php
				}   ?>
            </select>
      </div>
   </div>
   
    
 
   
      
   <div class="form-group">
      <label class="col-sm-3 control-label">  Type :</label>
      <div class="col-sm-6">
      <input type="radio" name="disease_type" value="Disease" checked="checked" /><label>Disease</label>
       <input type="radio" name="disease_type" value="Worm"/><label>Worms</label>
      </div>
   </div>
      
   <div class="form-group">
      <label class="col-sm-3 control-label">  Name of the Disease?Infectant:</label>
      <div class="col-sm-6">
      <input type="text"  name="disease_name" id="disease_name" class="required form-control" />
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label"> Locally Known as :</label>
      <div class="col-sm-6">
      <input type="text"  name="disease_lname" id="disease_lname" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">  Causes/Identification:</label>
      <div class="col-sm-6">
         <textarea rows="4" cols="20" name="disease_causes" id="disease_causes" class="required form-control"></textarea>
         <script>
                    CKEDITOR.replace('disease_causes');
            </script>
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">  Symptoms:</label>
      <div class="col-sm-6">
         <textarea rows="4" cols="20" name="disease_symptoms" id="disease_symptoms" class="required form-control"></textarea>
      
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">  Preventive Measures:</label>
      <div class="col-sm-6">
         <textarea rows="4" cols="20" name="disease_preventive_measures" id="disease_preventive_measures" class="required form-control"></textarea>
      
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
      <label class="col-sm-3 control-label"> Image of the disease/infectant:</label>
      <div class="col-sm-6">
        <input type="file" name="disease_image" id="disease_image" />
         <p class="help-block">upload images of plant affected with disease or image of the infectants </p>
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