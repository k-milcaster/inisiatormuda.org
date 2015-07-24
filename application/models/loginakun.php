<?php

class Loginakun extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getAccount($username, $password) {
        $query = $this->db->query("SELECT * "
                . "FROM user WHERE username= '" . $username . "' AND password= '" . $password . "'");
        return $query;
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
