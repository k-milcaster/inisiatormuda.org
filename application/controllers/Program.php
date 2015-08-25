<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

    public function index() {
        $this->load->model('systemModel');
        $status = $this->systemModel->getStatus('wholeweb');
        $statussingle = $this->systemModel->getStatus('programs');
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1') {
                    $this->load->view('maintenance');
                } else {
                    $header = array(
                        'title' => 'Programs',
                    );
                    $this->load->view('header', $header);
                    $this->load->view('program');
                    $this->load->view('footer');
                }
            }
        }
    }

}
