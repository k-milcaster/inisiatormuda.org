<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index() {

        $header = array(
            'title' => 'Blog',
        );
        
        $this->loadlistarticle();
        $this->load->view('header', $header);
        $this->load->view('listartikelpengunjung');
        $this->load->view('footer');
    }

    public function isiartikel($param) {
        $header = array(
            'title' => 'Blog',
        );
        $this->load->model("articleModel");
        $querycategory = $this->articleModel->getarticlesid($param);
        $setcontent = '';
        $settitle ='';
        foreach ($querycategory->result_array() as $row) {
            $setcontent=$setcontent.$row['content'];
            $settitle = $settitle.$row['title'];
            
            
        }
        $this->session->set_flashdata('contentpengunjung', $setcontent);
        $this->session->set_flashdata('titlepengunjung', $settitle);
        
        
        
        $this->load->view('header', $header);
        $this->load->view('artikelpengunjung');
        $this->load->view('footer');
    }

    public function loadlistarticle() {
        $this->load->model("articleModel");
        $querycategory = $this->articleModel->getarticlespengunjung();
//        $setcat ='';
        $setcat ='';
        $i=0;
        foreach ($querycategory->result_array() as $row) {
            $setcat=$setcat.' <div class="grid_12">
            <h3 class="pb1"><span>'.$row['title'].'</span></h3>
            <img src="public/images/page4_img1.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
                <p>'. substr($row['content'], 0, 250) .'.... <a href="'. base_url() .'Blog/isiartikel/'.$row['id_article'].'" class="btn">MORE</a> </p>
                  
            </div>
            
        </div>';
            $i++;
            }
            
           if($i==0){
               $setcat=$setcat.' <div class="grid_12">
            <h3 class="pb1"><span>BELUM ADA ARTIKEL</span></h3>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>';
           }
        $this->session->set_flashdata('setartpengunjung', $setcat);



    }

}
