<?php

class articleModel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getArticleList() {
        $query = $query = $this->db->get('article');
        return $query;
    }

    public function getCategory() {
        $query = $this->db->query("SELECT * FROM category");
        return $query;
    }

    public function ambilgambar($param) {
        $query = $this->db->query("SELECT * FROM images where id_article ='" . $param . "'");
        return $query;
    }

    public function getcategorybyid($param) {
        $query = $this->db->query("SELECT * FROM category WHERE id_category = " . $param);
        return $query;
    }

    public function getusername($param) {
        $query = $this->db->query("SELECT username FROM user WHERE id_user = " . $param);
        return $query;
    }

    public function insertarticle($param1, $param2, $param3, $param4, $param5) {
        $new_article = array(
            'id_article' => null,
            'id_category' => $param1,
            'content' => $param2,
            'user_id_user' => $param3,
            'title' => $param4,
            'postdate' => $param5,
            'published' => 0,
            'recommended' => 0
        );

        $this->db->insert('article', $new_article);
    }

    public function getarticleid($param) {
        $query = $this->db->query("SELECT * FROM article WHERE title = '" . $param . "'");
        return $query;
    }

    public function insertimage($param1, $param2, $param3, $param4) {
        $new_article = array(
            'id_img' => null,
            'id_article' => $param1,
            'img' => $param2,
            'img2' => $param3,
            'img3' => $param4,
        );

        $this->db->insert('images', $new_article);
    }

    public function editarticle($param, $param1, $param2, $param3) {
//        UPDATE `article` SET `id_article`=[value-1],`id_category`=[value-2],`title`=[value-3],`content`=[value-4],`postdate`=[value-5],`published`=[value-6],`recommended`=[value-7],`user_id_user`=[value-8] WHERE 1
        $query = $this->db->query("UPDATE `article` SET `id_category`='" . $param1 . "',`title`='" . $param2 . "',`content`='" . $param3 . "' WHERE id_article = " . $param);
        return $query;
    }

    public function getarticlespengunjung() {
        $query = $this->db->query("SELECT a.id_article, a.id_category, a.title, a.content, a.postdate, a.published, a.recommended, a.user_id_user, i.img, i.img2, i.img3, u.username
FROM article AS a, images AS i, user AS u
WHERE a.id_article = i.id_article
AND u.id_user = a.user_id_user
AND a.published =1
ORDER BY a.postdate DESC ");
        return $query;
    }

    public function getarticles() {
        $query = $this->db->query("SELECT * FROM article ORDER BY  `article`.`postdate` DESC ");
        return $query;
    }

    public function getarticlesid($param) {
        $query = $this->db->query("SELECT * FROM article WHERE  id_article =" . $param);
        return $query;
    }

    public function insertnewcat($param) {
        $new_cat = array(
            'id_category' => null,
            'category' => $param
        );

        $query = $this->db->insert('category', $new_cat);
    }

    public function getidcat($param) {

        $query = $this->db->query("SELECT id_category FROM category WHERE  category ='" . $param . "'");
        return $query;
    }

    public function updatepublished($param, $param2) {
        if ($param2 == 0) {
            $query = $this->db->query("UPDATE  article SET  published =  1 WHERE  id_article =" . $param);
            return $query;
        } else {
            $query = $this->db->query("UPDATE  article SET  published =  0 WHERE  id_article =" . $param);
            return $query;
        }
    }

    public function updaterecommended($param, $param2) {

        if ($param2 == 0) {
            $query = $this->db->query("UPDATE  article SET  recommended =  1 WHERE  id_article =" . $param);
            return $query;
        } else {
            $query = $this->db->query("UPDATE  article SET  recommended =  0 WHERE  id_article =" . $param);
            return $query;
        }
    }

    public function deletearticles($param) {
        $query = $this->db->query("DELETE FROM `article`  WHERE  id_article =" . $param);
        return $query;
    }

    public function deletetrack($param) {
        $query = $this->db->query("DELETE FROM `images`  WHERE  id_article =" . $param);
        return $query;
    }

    public function getarticleby() {
        $query = $this->db->query("SELECT * FROM article WHERE published = '" . 1 . "'");
        return $query;
    }

    public function home() {
        $query = $this->db->query("SELECT a.title, a.id_article, i.img , i.img2, i.img3 FROM article as a , images as i WHERE a.id_article = i.id_article AND a.recommended=1 ");
        return $query;
    }

}
