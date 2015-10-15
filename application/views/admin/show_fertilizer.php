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
<a class="btn btn-success" href="<?php echo site_url('admin/con_fertilizer/add_fertilizer');?>">Add New Fertilizer</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr>
      <th>Fertilizer Info.</th>
      <th>Fertilizer Description</th>
      
      <th>SEO Options</th>
      <th colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
      echo'<td width="20%">';
       ?><img src="<?php echo site_url('uploads/fertilizer/'.$r->fertilizer_image);?>" height="124" width="115" border="2" />
      
    <?php
        echo"<br>";
       echo "<strong>";
      echo "ID: &nbsp";
      echo "</strong>";
      echo $r->id;
      echo"<br>";
       echo "<strong>";
      echo "Name: ";
       echo "</strong>";
       echo $r->fertilizer_name;
       
        echo'<td>';
      echo "<strong>";
      echo "Description: ";
       echo "</strong>";
        echo $r->fertilizer_description;
      
    
       
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

      <td width="75" align="center"><a href="<?php echo site_url('admin/con_fertilizer/edit_fertilizer/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_fertilizer/delete_fertilizer/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>
<?php }?>