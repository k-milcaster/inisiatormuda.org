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
       'published'=>0,
       'recommended'=>0
       
       
         
      );

     $this->db->insert('article',$new_article);
    
        
        
    }
    
    public function editarticle($param) {
        
    }

    public function getarticles() {
        $query = $this->db->query("SELECT * FROM article");
        return $query;
    }
    
    public function updatepublished($param,$param2) {
        if($param2==0){
            $query = $this->db->query("UPDATE  article SET  published =  1 WHERE  id_article =".$param);
        return $query;
        }
        else{
            $query = $this->db->query("UPDATE  article SET  published =  0 WHERE  id_article =".$param);
        return $query;
        }
    }
    public function updaterecommended($param,$param2) {
        
        if($param2==0){
            $query = $this->db->query("UPDATE  article SET  recommended =  1 WHERE  id_article =".$param);
        return $query;
        }
        else{
            $query = $this->db->query("UPDATE  article SET  recommended =  0 WHERE  id_article =".$param);
        return $query;
        }
        
        
    }
    public function deletearticles($param) {
        $query = $this->db->query("DELETE FROM `article`  WHERE  id_article =".$param);
        return $query;
    }
    
    public function getarticlesbyid() {
        
    }
    
}
