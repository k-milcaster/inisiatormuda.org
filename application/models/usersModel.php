<?php

class Usersmodel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getAccount($username, $password) {
        $query = $this->db->query("SELECT * "
                . "FROM user WHERE username= '" . $username . "' AND password= '" . $password . "'");
        return $query;
    }

    public function getAccountList() {
        $query = $this->db->query("SELECT * FROM user");
        return $query;
    }

    public function userNameAvailable($username) {
        $query = $this->db->query("SELECT * "
                . "FROM user WHERE username= '" . $username . "'");
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function addAccount($username, $password, $role) {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'username' => $username,
            'password' => $password,
            'registered' => $date,
            'lastlogin' => $date,
            'role' => $role,
        );
        $this->db->insert('user', $data);
    }

    public function deleteAccount($username) {
        $this->db->where('username', $username);
        $this->db->delete('user');
    }

    public function updateLastLogin($username) {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'lastlogin' => $date,
        );
        $this->db->where('username', $username);
        $this->db->update('user', $data);
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
