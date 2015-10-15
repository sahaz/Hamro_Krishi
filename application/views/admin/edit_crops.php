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
<h1>ADD CROPS :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_crops/process_edit_crops/'.$r->id);?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Name of the crop:</label>
      <div class="col-sm-6">
      <input type="text" name="crop_name" id="crop_name" value="<?php echo $r->crop_name;?>" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Scientific Name of the crop:</label>
      <div class="col-sm-6">
      <input type="text" name="crop_sname" id="crop_sname" value="<?php echo $r->crop_sname;?>" class="required form-control" />
      </div>
   </div>
   
    
  
   
   
      
   <div class="form-group">
      <label class="col-sm-3 control-label">  SEO TITLE:</label>
      <div class="col-sm-6">
      <input type="text" name="seo_title" id="seo_title" value="<?php echo $r->seo_title;?>" class="required form-control"  />
      </div>
   </div>
   
        
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO KEYWORD:</label>
      <div class="col-sm-6">
   <input type="text" name="seo_keyword" id="seo_keyword" value="<?php echo $r->seo_keyword;?>" class="required form-control" />
      </div>
   </div>
   
    
  <div class="form-group">
      <label class="col-sm-3 control-label"> META DATA:</label>
      <div class="col-sm-6">
        <textarea rows="4" cols="20"  name="metadata" id="metadata"  class="required form-control"><?php echo $r->metadata;?></textarea>
      </div>
   </div>
  
   <div class="form-group">
      <label class="col-sm-3 control-label"> Image of the crop:</label>
      <div class="col-sm-6">
        <input type="file" name="crop_image" id="crop_image" />
         <p class="help-block">upload crop images </p>
      </div>
   </div>
   <br>
   
   <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
  <input type="hidden" id="hidden" name="hidden" value="<?php echo $r->crop_image;?>" /><br><br>      
        </div>
        </div>

   
</form>
</div>
<?php }?>