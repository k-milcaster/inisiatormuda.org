<?php

class Programsmodel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function addProgram($id, $name, $date, $loc, $desc, $img) {
        $dateposted = date('Y-m-d H:i:s');
        $data = array(
            'id_programs' => $id,
            'name_programs' => $name,
            'date_programs' => $date,
            'location_programs' => $loc,
            'description_programs' => $desc,
            'posteddate_programs' => $dateposted,
            'img_programs' => $img,
        );
        $this->db->insert('programs', $data);
    }

    public function getProgramsList() {
        $query = $query = $this->db->get('programs');
        return $query;
    }

    public function getProgram($id) {     
        $this->db->where('id_programs', $id);
        $query = $query = $this->db->get('mytable');
        return $query;
    }

    public function deletePrograms($id) {
        $this->db->where('id_programs', $id);
        $this->db->delete('programs');
    }

    public function updatePrograms($id, $name, $date, $loc, $desc, $img) {
        $dateposted = date('Y-m-d H:i:s');
        $data = array(            
            'name_programs' => $name,
            'date_programs' => $date,
            'location_programs' => $loc,
            'description_programs' => $desc,
            'posteddate_programs' => $dateposted,
            'img_programs' => $img,
        );
        $this->db->where('id_programs', $id);
        $this->db->update('programs', $data);
    }

}
