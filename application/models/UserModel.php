<?php

class UserModel extends CI_Model{

/* ********************login page********************  */
function email_check($email){
    return $this->db->get_where('user',array('email_id'=>$email))->result_array();
}
function login($data){
    return $this->db->get_where('user',$data)->result();
}


/* ********************REGISTRATION PAGE********************  */

public function check_email_phone($phone, $email) {
    $this->db->where('phone_number', $phone);
    $this->db->or_where('email_id', $email);
    $query = $this->db->get('user');
    return $query->num_rows() > 0 ? 1 : 0;
}

public function register($data){
    return $this->db->insert('user',$data);
}
public function nav_category(){
    return $this->db->get('product_category')->result();
}
public function productByCategory($data){
    return $this->db->get_where('product',array('category_id'=>$data))->result();
}
public function discount_percent(){
    return $this->db->get('discount')->result();
}

}

?>