<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

    public function index() {
        $this->load->model('systemModel');
        $status = $this->systemModel->getStatus('wholeweb');
        $statussingle = $this->systemModel->getStatus('carees');
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1') {
                    $this->load->view('maintenance');
                } else {
                    $header = array(
                        'title' => 'Career',
                    );
                    $header = array(
                'title' => 'Career',
            );
            
            $this->load->model('careerModel');
            $querycategory = $this->careerModel->getCareer();
            $setcareer = '';
            $setidcareer = 0;
            $setcontentcareer = '';
            $settanggal='';
            
            foreach ($querycategory->result_array() as $row) {
                $setcareer = $row['title'];
                $setidcareer = $row['id_career'];
                $setcontentcareer = $row ['content'];
                $settanggal = $row['datetime'];
            }
            $this->session->set_flashdata('setcareer', $setcareer);
            $this->session->set_flashdata('setcontent', $setcontentcareer);
            $this->session->set_flashdata('settanggalcareer', $settanggal);
            

           $this->load->view('header', $header);
           $this->load->view('career');
           $this->load->view('footer');
                    
                }
            }
        }
    }
    


}
