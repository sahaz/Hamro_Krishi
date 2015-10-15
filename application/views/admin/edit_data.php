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
<h1>ADD MAPs:</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_data/process_edit_data/'.$r->id);?>" method="POST" enctype="multipart/form-data" >
   
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Data for :</label>
      <div class="col-sm-6">
            <select name="data_of">
                         <option value="disease" <?php if ($r->data_of == "disease"){?> selected="selected" <?php }?> >Diseases</option>
                         <option value="soil" <?php if ($r->data_of == "soil"){?> selected="selected" <?php }?> >Soil</option>
                         <option value="fertilizer" <?php if ($r->data_of == "fertilizer"){?> selected="selected" <?php }?> >Fertilizer</option>
                         <option value="maps" <?php if ($r->data_of == "maps"){?> selected="selected" <?php }?> >MAPs</option>
                         <option value="expert" <?php if ($r->data_of == "expert"){?> selected="selected" <?php }?> >Agro Expert</option>
                     
            </select>
      </div>
   </div>
   
    
 <div class="form-group">
      <label class="col-sm-3 control-label">Data Description:</label>
      <div class="col-sm-6">
        <textarea rows="10" cols="30" name="data_description" id="data_description" class="required form-control"><?php echo $r->data_description; ?></textarea>
      </div>
   </div>
   

   
  
   <div class="form-group">
      <label class="col-sm-3 control-label"> Image for the data:</label>
      <div class="col-sm-6">
        <input type="file" name="data_image" id="data_image" />
         <p class="help-block">upload related image </p>
      </div>
   </div>
   <br>
   
   <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
  <input type="hidden" id="hidden" name="hidden" value="<?php echo $r->data_image;?>" /><br><br>
        </div>
        </div>

   
</form>
</div>
<?php }?>