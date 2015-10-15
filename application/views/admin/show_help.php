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
<a class="btn btn-success" href="<?php echo site_url('admin/con_help/add_help');?>">Add Help text</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr>
      
   
      
      <th width="15%" align="center" >Help for </th>
      <th width="60%" align="center" >Help Descriptions</th>
      
      <th align="center" colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
 
      
       
      echo'<td  align="center">';
      
    echo $r->help_section;
    
   
    echo'<td  align="center">';
      echo $r->help_description;
      
     
     
      
     ?>

      <td width="75" align="center"><a href="<?php echo site_url('admin/con_help/edit_help/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_help/delete_help/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>
<?php }?>