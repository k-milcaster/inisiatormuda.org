<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->model('systemModel');
        $status = $this->systemModel->getStatus('wholeweb');
        foreach ($status->result() as $row) {
            if ($row->status === '0') {
                $header = array(
                    'title' => 'Home',
                );
                $this->load->view('headerIndex', $header);
                $this->load->view('home');
                $this->load->view('footer');
            } else {
                $this->load->view('maintenance');
            }
        }
    }

}
