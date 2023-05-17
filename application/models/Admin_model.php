
<?php

class Admin_model extends CI_Model{
   
   
    function email_check($email){
        return $this->db->get_where('admin',array('email'=>$email))->result_array();
    }
    function login($data){
        return $this->db->get_where('admin',$data)->result();
    } 
    
    public function check_category($category_name){
        return $this->db->get_where('product_category',array('category_name'=>$category_name))->result();   
    }
    public function category($data){
       return $this->db->insert('product_category',$data);
    }
    public function invertory($data){
        return $this->db->insert('product_inventory',$data);
     }
     public function display(){
        return $this->db->get('product_inventory')->result();
     }
     public function discount_name_check($name){
        return $this->db->get_where('discount',array('name'=>$name))->result();   
    }
     public function discount($data){
        return $this->db->insert('discount',$data);
     }
    public function display_category(){
        return $this->db->get('product_category')->result();
     }
     public function product_inventory(){
        return $this->db->get('product_inventory')->result();
     }
     public function product_discount(){
        return $this->db->get('discount')->result();
     }
     public function product_name_check($name){
        return $this->db->get_where('product',array('product_name'=>$name))->result();   
    }
    public function product($data){
        return $this->db->insert('product',$data);
     }

}

?>