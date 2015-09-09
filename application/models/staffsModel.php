<?php

class StaffsModel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getStaff($id) {
        $this->db->where('id_staff', $id);
        $query = $this->db->get('staff');
        return $query;
    }

    public function getStaffsList() {
        $this->db->where('division', 'Initiator');
        $query = $this->db->get('staff');
        return $query;
    }

    public function addStaff($name, $bio, $img) {
        $data = array(
            'name' => $name,
            'bio' => $bio,
            'img' => $img,
            'division' => 'Initiator',
        );
        $this->db->insert('staff', $data);
    }

    public function deleteStaff($id) {
        $this->db->where('id_staff', $id);
        $this->db->delete('staff');
    }

    public function updateStaff($id, $name, $bio, $img) {
        $data = array(
            'name' => $name,
            'bio' => $bio,
            'img' => $img,
        );
        $this->db->where('id_staff', $id);
        $this->db->update('staff', $data);
    }
}
