<?php

class User_model extends CI_Model {

  function login($username, $password) {
        $this->db->select('*');
        $this->db->from(TBL_USERS);
        $this->db->where('usr_logname', $username);
        $this->db->where('usr_logpwd', md5("$password"));
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}
