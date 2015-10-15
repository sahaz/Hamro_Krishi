<?php 
class Mod_soil extends CI_Model{
   
public function show_soil()
{
   $value=$this->db->get('soil');
   return $value;
}


public function upload_soil($data)
{
   $this->db->insert('soil',$data);
}

public function select_soil($id)
{
   $value=$this->db->get_where('soil',array("id"=>$id));
   return $value;
}

public function upload_edit_soil($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('soil',$data);
}

public function delete_soil($id)
{
   $this->db->where('id',$id);
   $this->db->delete('soil');
}

public function select_districts($region)
{
   $value=$this->db->get_where('districts',array("dev_region"=>$region));
   return $value;
}
        
public function select_place($region)
{
   $value=$this->db->get_where('soil',array("dev_region"=>$region));
   return $value;
}
        


}
 
