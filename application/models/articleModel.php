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
    
    public function insertarticle($param1, $param2,$param3,$param4,$param5) {
        $new_article = array(
       'id_article' => null,
       'id_category' => $param1,
       'content' => $param2,
       'user_id_user' =>$param3,
       'title'=>$param4,
       'postdate'=>$param5,
       
       
         
      );

     $this->db->insert('article',$new_article);
    
        
        
    }

    public function getarticles() {
        $query = $this->db->query("SELECT * FROM article");
        return $query;
    }
    public function getarticlesbyid() {
        
    }
    
}
