<?php

class Allpurpose
{
      public function __construct()
      {
         $this->CI=&get_instance();
      }
      
      public function parentpage()
      {
            $value=$this->CI->db->get_where('pages',array('parent'=>0));
            return $value;
      }
      public function childpage()
      {
            $value=$this->CI->db->get_where('pages',array('parent !='=>0));
            return $value;
         
      }
      public function gettitle($id)
      {
         $value=$this->CI->db->get_where('pages',array('id'=>$id));
         return $value;
         
      }
        public function showcategory()
      {
         $value=$this->CI->db->get('product_category');
         return $value;
         
      }
}

?>
