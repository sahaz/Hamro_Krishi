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
<h1>ADD MAPs:</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_maps/process_maps');?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Name of the MAP:</label>
      <div class="col-sm-6">
      <input type="text" name="maps_name" id="maps_name" class="required form-control" />
      </div>
   </div>
   
    
 <div class="form-group">
      <label class="col-sm-3 control-label">MAP Description:</label>
      <div class="col-sm-6">
        <textarea rows="4" cols="30" name="maps_description" id="maps_description" class="required form-control"></textarea>
      </div>
   </div>
   
      
   <div class="form-group">
      <label class="col-sm-3 control-label">  SEO TITLE:</label>
      <div class="col-sm-6">
      <input type="text"  name="seo_title" id="seo_title" class="required form-control" />
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
      <label class="col-sm-3 control-label"> Image of the MAP:</label>
      <div class="col-sm-6">
        <input type="file" name="maps_image" id="map_image" />
         <p class="help-block">upload MAPs image </p>
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