<?php

class articleModel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getCategory() {
        $query = $this->db->query("SELECT * FROM category");
        return $query;
    }
    
    public function insertarticle($param1, $param2,$param3) {
        $new_article = array(
       'id_article' => null,
       'id_category' => $param1,
       'content' => $param2,
       'user_id_user' =>$param3
       
       
         
      );

     $this->db->insert('article',$new_article);
    
        
        
    }

}
