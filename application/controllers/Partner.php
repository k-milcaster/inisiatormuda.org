<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {

    public function index() {
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

    public function page() {
        $this->load->model('systemmodel');
        $status = $this->systemmodel->getStatus('wholeweb');
        $statussingle = $this->systemmodel->getStatus('programs');
        $page = $this->uri->segment(3);
        if ($page == 1 || $page == 0) {
            redirect(base_url() . "program");
        }
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1' || !isset($page)) {
                    $this->load->view('maintenance');
                } else {
                    $this->load->model('programsmodel');
                    $programs = $this->programsmodel->getProgramsList();
                    $pagecount = (int) ($programs->num_rows() / 6);
                    if ($pagecount % 6 != 0) {
                        $pagecount++;
                    }
                    if ($page > $pagecount) {
                        redirect(base_url() . "program/page/" . $pagecount);
                    }
                    $header = array(
                        'title' => 'Programs',
                    );
                    $content = array(
                        'pagecount' => $pagecount,
                        'page' => $page,
                        'programs' => $programs,
                    );
                    $this->load->view('header', $header);
                    $this->load->view('program', $content);
                    $this->load->view('footer');
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
                        redirect(base_url() . 'program');
                    } else {
                        $this->load->model('programsmodel');
                        $prog = $this->programsmodel->getProgram($id);
                        $header = array(
                            'title' => 'Programs',
                        );
                        $content = array(
                            'prog' => $prog,
                        );
                        $this->load->view('header', $header);
                        $this->load->view('programsingle', $content);
                        $this->load->view('footer');
                    }
                }
            }
        }
    }

}
