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
<a class="btn btn-success" href="<?php echo site_url('admin/con_data/add_data');?>">Add New Data</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr>
      
   
      
      <th align="center" >Data for</th>
      <th align="center" >Data Descriptions</th>
      
      <th align="center" colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
 
      
       
      echo'<td width="20%" align="center">';
       echo"<br>";
    echo "<strong>";
    echo "Data for: ";
    echo "</strong>";
    echo $r->data_of;
    echo"<br>";
      ?><img src="<?php echo site_url('uploads/all_data/'.$r->data_image);?>" height="124" width="115" border="2" />
      
    <?php
   
   
    echo'<td align="center">';
      echo $r->data_description;
      
     
     
      
     ?>

      <td width="75" align="center"><a href="<?php echo site_url('admin/con_data/edit_data/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_data/delete_data/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>
<?php }?>