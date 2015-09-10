<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        $this->load->model('systemModel');
        $status = $this->systemModel->getStatus('wholeweb');
        $statussingle = $this->systemModel->getStatus('aboutus');
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1') {
                    $this->load->view('maintenance');
                } else {
                    $this->load->model('staffsmodel');
                    $init = $this->staffsmodel->getStaffsList();
                    $content = array(
                        'init' => $init,
                    );
                    $header = array(
                        'title' => 'About',
                    );
                    $this->load->view('header', $header);
                    $this->load->view('about', $content);
                    $this->load->view('footer');
                }
            }
        }
    }

    public function director() {
        $this->load->model('systemModel');
        $status = $this->systemModel->getStatus('wholeweb');
        $statussingle = $this->systemModel->getStatus('aboutus');
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1') {
                    $this->load->view('maintenance');
                } else {
                    $header = array(
                        'title' => 'About',
                    );
                    $this->load->view('header', $header);
                    $this->load->view('director');
                    $this->load->view('footer');
                }
            }
        }
    }

    public function initiator() {
        $this->load->model('systemModel');
        $status = $this->systemModel->getStatus('wholeweb');
        $statussingle = $this->systemModel->getStatus('aboutus');
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1') {
                    $this->load->view('maintenance');
                } else {
                    $this->load->model('staffsmodel');
                    $init = $this->staffsmodel->getStaffsList();
                    $content = array(
                        'init' => $init,
                    );
                    $header = array(
                        'title' => 'About',
                    );
                    $this->load->view('header', $header);
                    $this->load->view('initiator', $content);
                    $this->load->view('footer');
                }
            }
        }
    }

    public function greetings() {
        $this->load->model('systemModel');
        $status = $this->systemModel->getStatus('wholeweb');
        $statussingle = $this->systemModel->getStatus('aboutus');
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1') {
                    $this->load->view('maintenance');
                } else {
                    $header = array(
                        'title' => 'About',
                    );
                    $this->load->view('header', $header);
                    $this->load->view('greetings');
                    $this->load->view('footer');
                }
            }
        }
    }

    public function advisor() {
        $this->load->model('systemModel');
        $status = $this->systemModel->getStatus('wholeweb');
        $statussingle = $this->systemModel->getStatus('aboutus');
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1') {
                    $this->load->view('maintenance');
                } else {
                    $header = array(
                        'title' => 'About',
                    );
                    $this->load->view('header', $header);
                    $this->load->view('advisors');
                    $this->load->view('footer');
                }
            }
        }
    }

}
