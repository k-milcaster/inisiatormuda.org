<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {

    public function index() {
        $this->load->model('systemmodel');
        $status = $this->systemmodel->getStatus('wholeweb');
        $statussingle = $this->systemmodel->getStatus('programs');
        $id = $this->uri->segment(3);
        echo $id;
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1') {
                    $this->load->view('maintenance');
                } else {
                    if (!isset($id)) {
                        $this->load->model('partnermodel');
                        $partners = $this->partnermodel->getPartnersList();
                        $header = array(
                            'title' => 'Partners',
                        );
                        $content = array(
                            'partners' => $partners,
                        );
                        $this->load->view('header', $header);
                        $this->load->view('partner', $content);
                        $this->load->view('footer');
                    } else {
                        $this->load->model('partnermodel');
                        $partners = $this->partnermodel->getPartner($id);
                        $header = array(
                            'title' => 'Partners',
                        );
                        $content = array(
                            'partners' => $partners,
                        );
                        $this->load->view('header', $header);
                        $this->load->view('partnersingle', $content);
                        $this->load->view('footer');
                    }
                }
            }
        }
    }

    public function id() {
        $this->load->model('systemmodel');
        $status = $this->systemmodel->getStatus('wholeweb');
        $statussingle = $this->systemmodel->getStatus('programs');
        $id = $this->uri->segment(3);
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1') {
                    $this->load->view('maintenance');
                } else {
                    if (!isset($id)) {
                        redirect(base_url() . 'partner');
                    } else {
                        $this->load->model('partnermodel');
                        $partners = $this->partnermodel->getPartner($id);
                        $header = array(
                            'title' => 'Partners',
                        );
                        $content = array(
                            'partners' => $partners,
                        );
                        $this->load->view('header', $header);
                        $this->load->view('partnersingle', $content);
                        $this->load->view('footer');
                    }
                }
            }
        }
    }

}
