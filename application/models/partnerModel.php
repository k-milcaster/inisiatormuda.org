<?php

class Partnermodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function addPartner($name, $desc, $img) {
        $data = array(
            'name' => $name,
            'desc' => $desc,
            'img' => $img,
        );
        $this->db->insert('partner', $data);
    }

    public function getPartnersList() {
        $query = $query = $this->db->get('partner');
        return $query;
    }

    public function getPartner($id) {
        $this->db->where('id_partner', $id);
        $query = $this->db->get('partner');
        return $query;
    }

    public function deletePartner($id) {
        $this->db->where('id_partner', $id);
        $this->db->delete('partner');
    }

    public function updatePartner($id, $name, $desc, $img) {
        $data = array(
            'name' => $name,
            'desc' => $desc,
            'img' => $img,
        );
        $this->db->where('id_partner', $id);
        $this->db->update('partner', $data);
    }

}
