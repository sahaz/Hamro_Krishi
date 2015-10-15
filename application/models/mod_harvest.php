<?php 
class Mod_harvest extends CI_Model{
   
public function show_harvest()
{
   $value=$this->db->get('harvest');
   return $value;
}



public function select_harvest($id)
{
   $value=$this->db->get_where('harvest',array("id"=>$id));
   return $value;
}


public function delete_harvest($id)
{
   $this->db->where('id',$id);
   $this->db->delete('harvest');
}

}
 
