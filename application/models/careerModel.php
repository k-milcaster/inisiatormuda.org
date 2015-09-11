<?php

class careerModel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function insertcareer($param1, $param2,$param3,$param4) {
        $new_article = array(
       'id_career' => null,
       'title'=>$param1,
       'content'=>$param2,
       'datetime'=>$param3, 
        'id_user_id'=>$param4,    
       'publish'=>0
       
       
         
      );

     $this->db->insert('career',$new_article);
    
        
        
    }
    public function getCareer() {
        $query = $this->db->query(" SELECT * FROM career ");
        return $query;
    }
    
    public function editarticle($param,$param1,$param2,$param3) {
//        UPDATE `article` SET `id_article`=[value-1],`id_category`=[value-2],`title`=[value-3],`content`=[value-4],`postdate`=[value-5],`published`=[value-6],`recommended`=[value-7],`user_id_user`=[value-8] WHERE 1
        $query = $this->db->query("UPDATE `article` SET `id_category`='".$param1."',`title`='".$param2."',`content`='".$param3."' WHERE id_article = ".$param);
        return $query;
    }

    public function deletecareer($param) {
        $query = $this->db->query("DELETE FROM career");
        return $query;
    }
    
  
    
}
