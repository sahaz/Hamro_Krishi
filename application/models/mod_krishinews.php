<?php 
class Mod_krishinews extends CI_Model{
   
public function show_krishinews()
{
   $value=$this->db->get('krishi_news');
   return $value;
}


public function upload_krishinews($data)
{
   $this->db->insert('krishi_news',$data);
}

public function select_krishinews($id)
{
   $value=$this->db->get_where('krishi_news',array("id"=>$id));
   return $value;
}

public function upload_edit_krishinews($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('krishi_news',$data);
}

public function delete_krishinews($id)
{
   $this->db->where('id',$id);
   $this->db->delete('krishi_news');
}
  
public function select_krishinews_samachar()
{
   $value=$this->db->get_where('krishi_news',array("news_type"=>"samachar"));
   return $value;
}
public function select_krishinews_story()
{
   $value=$this->db->get_where('krishi_news',array("news_type"=>"story"));
   return $value;
}
public function select_by_type($news_type,$id)
{
   $value=$this->db->get_where('krishi_news',array("news_type"=>$news_type, "id"=>$id));
   return $value;
}


}
 
