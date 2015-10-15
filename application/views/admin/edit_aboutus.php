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

<h1>Add About Us :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_aboutus/process_edit_aboutus/'.$r->id);?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">About Us:</label>
      <div class="col-sm-6">
      <textarea rows="4" cols="20" name="aboutus" id="aboutus" class="required form-control"><?php echo $r->about_us;?></textarea><br><br>
             <script>
                    CKEDITOR.replace('aboutus');
            </script>
      </div>
   </div>
   
   
   
  <div class="form-group">
      <label class="col-sm-3 control-label">SEO TITLE:</label>
      <div class="col-sm-6">
      <input type="text" name="seo_title" id="seo_title"  value="<?php echo $r->seo_title;?>" class="required form-control" />
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
      <textarea rows="4" cols="20" name="metadata" id="metadata"  class="required form-control"><?php echo $r->metadata;?></textarea>
      </div>
   </div>
   
   
   <div class="form-group">
      <label class="col-sm-3 control-label"> Our Team:</label>
      <div class="col-sm-6">
         <input type="file" name="image" id="image" />
         <p class="help-block">upload our team </p>
      </div>
   </div>
   
   <div class="form-group">
        <div class="col-md-4 control-label">
    <input type="hidden" id="hidden" name="hidden"  value="<?php echo $r->image;?>"  /><br><br>      
           <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
        </div>
        </div>
   
      
</form>
</div>
<?php }?>
  
   
   