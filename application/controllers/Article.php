<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    public function index() {
       
                    $header = array(
                        'title' => 'Blog',
                    );
                    $this->load->view('header', $header);
                    $this->load->view('listartikelpengunjung');
                    $this->load->view('footer');
            
        }
        
        public function isiartikel() {
            $header = array(
                        'title' => 'Article',
                    );
                    $this->load->view('header', $header);
                    $this->load->view('artikelpengunjung');
                    $this->load->view('footer');
        }
        
    }


