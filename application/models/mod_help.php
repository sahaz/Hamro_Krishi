<?php 
class Mod_help extends CI_Model{
   
public function show_help()
{
   $value=$this->db->get('help');
   return $value;
}


public function upload_help($data)
{
   $this->db->insert('help',$data);
}


public function select_help($id)
{
   $value=$this->db->get_where('help',array("id"=>$id));
   return $value;
}

public function upload_edit_help($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('help',$data);
}

public function delete_help($id)
{
   $this->db->where('id',$id);
   $this->db->delete('help');
}

        


}
 
