<?php 
class Mod_crops extends CI_Model{
   
public function show_crops()
{
   $value=$this->db->get('crops');
   return $value;
}


public function upload_crops($data)
{
   $this->db->insert('crops',$data);
}

public function select_crops($id)
{
   $value=$this->db->get_where('crops',array("id"=>$id));
   return $value;
}

public function upload_edit_crops($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('crops',$data);
}

public function delete_crops($id)
{
   $this->db->where('id',$id);
   $this->db->delete('crops');
}
        


}
 
