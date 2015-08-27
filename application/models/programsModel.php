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
        $query = $this->db->query("SELECT * FROM programs");
        return $query;
    }

}
