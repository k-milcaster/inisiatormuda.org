<?php

class Systemmodel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getStatus($name) {
        $query = $this->db->query("SELECT * "
                . "FROM system WHERE name= '" . $name . "'");
        return $query;
    }

    public function changeStatus($name, $status) {
        $data = array(
            'status' => $status,            
        );
        $this->db->where('name', $name);
        $this->db->update('system', $data);
    }

//
//    public function getUsername($username, $password) {
//        $query = $this->db->query("SELECT usernameAkun, passwordAkun "
//                . "FROM akun WHERE usernameAkun= '" . $username . "' AND passwordAkun= '" . $password . "'");
//
//
//        if ($query->num_rows() > 0) {
//                return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
}
