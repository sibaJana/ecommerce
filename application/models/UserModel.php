<?php

class UserModel extends CI_Model{

/* ********************login page********************  */
function email_check($email){
    return $this->db->get_where('user',array('email_id'=>$email))->result_array();
}
function login($data){
    return $this->db->get_where('user',$data)->result();
}
}

?>