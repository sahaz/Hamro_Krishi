<?php if(null == $this->session->userdata('status')){
 redirect('admin/backend/backend_login');
}
else
{ ?>
<?php 
$this->load->view('admin/includes/semi_header.php');
$this->load->view('admin/includes/menu.php');

?>
<?php
if($this->session->flashdata('deleted')){?>
<div class="row">
   <div class="col-lg-4">
                <div class="alert alert-warning" role="alert">
                     <?php echo $this->session->flashdata('deleted');?>
</div></div></div>
                
<?php  
}?>

<?php
if($this->session->flashdata('uploaded')){?>
<div class="row">
   <div class="col-lg-4">
                <div class="alert alert-success" role="alert">
                     <?php echo $this->session->flashdata('uploaded');?>
</div></div></div>
                
<?php  
}?>
<div class="well">

   <div class="row">
   <div class="col-lg-9">
      
      <div class="table-responsive">
      <table  border="2" class="table table-striped table-hover table-condensed" >
          <tr>
      <th>Id</th>
      <th>Filename</th>
      <th>Image</th>
        <th>Description</th>
      <th>Modification</th>
    </tr>
         <?php $num=1;
         foreach ($value->result() as $r)
        {
         echo "<tr>";
         echo "<td>".$r->id."</td>";
         echo "<td>".$r->slider_image."</td>";?>
         <td><img src="<?php echo site_url('uploads/slider/'.$r->slider_image);?>" height="60" width="110"></td>
         <?php  echo "<td>".$r->image_description."</td>";?>
         <td align='center'><a href="<?php echo site_url('admin/con_slider/delete_slider_images/'.$r->id);?>" ><div class="btn btn-danger">DELETE</div></a></td>  
         </tr>
        <?php   } ?>



      </table>
     
      </div>
</div>


   <div class="col-lg-3">
   
   <form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_slider/process_slider_images');?>" method="POST" enctype="multipart/form-data">
   
   <div class="form-group">
      <label class="col-lg-5 control-label">Upload File :</label>
      <div class="col-lg-7">
        <input type="file" id="picture" name="picture" />
         <p class="help-block">atleast img with res. 1920by800 </p>
      </div>
   </div>
   
   
   <div class="form-group">
      <label class="col-lg-12 control-label">  Image Description : </label>
      <div class="col-lg-12">
      <textarea  rows="3" cols="60" id="description" name="description" class="required form-control"></textarea>
      </div>
   </div>
   
   
    <div class="form-group">
        <div class="col-lg-6 control-label">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
        </div>
        </div>
   
   
 
  
   
</form>
      
   </div>
</div>
</div>
<?php }?>


