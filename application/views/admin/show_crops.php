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

<br>
<a class="btn btn-success" href="<?php echo site_url('admin/con_crops/add_crops');?>">Add New Crop</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr>
      <th>Crop ID</th>
      <th>Crop's Image</th>
      <th>Crop's Name</th>
      <th>Crop's Scientific Name</th>
      <th>SEO KEYWORD</th>
      <th>SEO TITLE</th>
      <th>METADATA</th>
      <th colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
      echo'<td align="center">';
      echo $r->id;
      
    
       
      echo'<td align="center">';
      ?><img src="<?php echo site_url('uploads/crops/'.$r->crop_image);?>" height="124" width="115" border="2" />
      
    <?php
      echo'<td align="center">';
      echo $r->crop_name;
      
      echo'<td align="center">';
      echo $r->crop_sname;
      
      echo'<td align="center">';
      echo $r->seo_keyword;
      
      echo'<td align="center">';
      echo $r->seo_title;
      
      echo'<td align="center">';
      echo $r->metadata;
     ?>

      <td width="75" align="center"><a href="<?php echo site_url('admin/con_crops/edit_crops/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_crops/delete_crops/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>
<?php } ?>