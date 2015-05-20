<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $header = array(
            'title' => 'Home',
        );
        $this->load->view('headerIndex', $header);
        $this->load->view('home');
        $this->load->view('footer');
    }

}
