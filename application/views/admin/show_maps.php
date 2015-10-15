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
<br><br>
<a class="btn btn-success" href="<?php echo site_url('admin/con_maps/add_maps');?>">Add New MAP</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr>
      
   
      <th align="center">MAP IMAGE</th>
      <th align="center" >MAP DESCRIPTION</th>
      <th align="center" >SEO Options</th>
      
      <th align="center" colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
 
      
       
      echo'<td width="20%" align="center">';
      ?><img src="<?php echo site_url('uploads/maps/'.$r->maps_image);?>" height="124" width="115" border="2" />
      
    <?php
    echo"<br>";
    echo "<strong>";
    echo "MAP id: ";
    echo "</strong>";
    echo $r->id;
    echo"<br>";
    echo "<strong>";
    echo "Name: ";
    echo "</strong>";
    echo $r->maps_name;

    echo'<td align="center">';
      echo $r->maps_description;
      
     
       echo'<td width="15%">';
        echo "<strong>";
        echo "K:";
          echo "</strong>";
      echo $r->seo_keyword;
      echo"<br>";
         echo "<strong>";
        echo "T:";
          echo "</strong>";
      echo $r->seo_title;
      echo"<br>";
         echo "<strong>";
        echo "M:";
          echo "</strong>";
      echo $r->metadata;
      
     ?>

      <td width="75" align="center"><a href="<?php echo site_url('admin/con_maps/edit_maps/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_maps/delete_maps/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>
<?php }?>