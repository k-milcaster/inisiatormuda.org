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

                $var = '';
                $this->load->model('articleModel');
                $query = $this->articleModel->home();
                foreach ($query->result_array() as $row) {
                    $var = $var . ' <div data-src="' . base_url() . 'public/images/articles/one/' . $row['img'] . '.jpg">
            <div class="caption">
            <a href="' . base_url() . 'blog/isiartikel/' . $row['id_article'] . '/' . $row['img'] . '/' . $row['img2'] . '/' . $row['img3'] . '">
                <div class="slide-text-info">
                    ' . $row['title'] . '    
                </div>
                </a>
            </div>
        </div>';
                }




                $this->session->set_flashdata('home', $var);


                $this->load->view('headerIndex', $header);
                $this->load->view('home');
                $this->load->view('footer');
                $this->load->model('articleModel');
            } else {
                $this->load->view('maintenance');
            }
        }
    }

}
