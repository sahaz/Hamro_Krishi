<?php 
class Mod_maps extends CI_Model{
   
public function show_maps()
{
   $value=$this->db->get('maps');
   return $value;
}


public function upload_maps($data)
{
   $this->db->insert('maps',$data);
}

public function select_maps($id)
{
   $value=$this->db->get_where('maps',array("id"=>$id));
   return $value;
}

public function upload_edit_maps($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('maps',$data);
}

public function delete_maps($id)
{
   $this->db->where('id',$id);
   $this->db->delete('maps');
}

        


}
 
