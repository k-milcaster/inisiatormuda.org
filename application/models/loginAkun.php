<?php

class LoginAkun extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getTrue($username, $password) {
        $query = $this->db->query("SELECT usernameAkun, passwordAkun "
                . "FROM akun WHERE usernameAkun= '" . $username . "' AND passwordAkun= '" . $password . "'");


        if ($query->num_rows() > 0) {
                return TRUE;
        } else {
            return FALSE;
        }
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
