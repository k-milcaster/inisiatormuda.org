<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index() {
        $this->load->model('systemmodel');
        $status = $this->systemmodel->getStatus('wholeweb');
        $statussingle = $this->systemmodel->getStatus('blogs');
        $id = $this->uri->segment(3);

        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1') {
                    $header = array(
                        'title' => 'Blog',
                    );
                    $this->load->view('header', $header);
                    $this->load->view('maintenance');
                    $this->load->view('footer');
                } else {
                    if (!isset($id)) {
                        $header = array(
                            'title' => 'Blog',
                        );
                        $this->load->model('articleModel');
                        $article = $this->articleModel->getarticlespengunjung();
                        if ($article->num_rows() == 0) {
                            $this->load->view('header', $header);
                            $this->load->view('maintenance');
                            $this->load->view('footer');
                        }
//                        $pagecount = (int) ($article->num_rows() / 6);
                        else if ($article->num_rows() != 0) {

                            $pagecount = (int) ($article->num_rows() / 4);
                            if ($article->num_rows() % 4 != 0) {
                                $pagecount++;
                            }

                            $content = array(
                                'pagecount' => $pagecount,
                                'page' => 1,
                                'article' => $article,
                            );


                            $this->load->view('header', $header);
                            $this->load->view('listartikelpengunjung', $content);
                            $this->load->view('footer');
                        }
                    } else {
//                        $this->load->model('programsmodel');
//                        $prog = $this->programsmodel->getProgram($id);
//                        $header = array(
//                            'title' => 'Blog',
//                        );
//                        $content = array(
//                            'prog' => $prog,
//                        );
//                        $this->load->view('header', $header);
//                        $this->load->view('programsingle', $content);
//                        $this->load->view('footer');
                    }
                }
            }
        }
    }

    public function page() {
        $this->load->model('systemmodel');
        $status = $this->systemmodel->getStatus('wholeweb');
        $statussingle = $this->systemmodel->getStatus('blogs');
        $page = $this->uri->segment(3);
        if ($page == 1 || $page == 0) {
            redirect(base_url() . "Blog");
        }
        foreach ($status->result() as $row) {
            foreach ($statussingle->result() as $row2) {
                if ($row->status === '1' || $row2->status === '1' || !isset($page)) {
                    $this->load->view('maintenance');
                } else {
                    $this->load->model('articleModel');
                    $article = $this->articleModel->getarticlespengunjung();
//                    $this->load->model('programsmodel');
//                    $programs = $this->programsmodel->getList();
                    $pagecount = (int) ($article->num_rows() / 4);
                    if ($pagecount % 4 != 0) {
                        $pagecount++;
                    }
                    if ($page > $pagecount) {
                        redirect(base_url() . "Blog/page/" . $pagecount);
                    }
                    $header = array(
                        'title' => 'Blogs',
                    );
                    $content = array(
                        'pagecount' => $pagecount,
                        'page' => $page,
                        'article' => $article,
                    );
                    $this->load->view('header', $header);
                    $this->load->view('listartikelpengunjung', $content);
                    $this->load->view('footer');
                }
            }
        }
    }

//    public function id() {
//        $this->load->model('systemmodel');
//        $status = $this->systemmodel->getStatus('wholeweb');
//        $statussingle = $this->systemmodel->getStatus('programs');
//        $id = $this->uri->segment(3);
//        foreach ($status->result() as $row) {
//            foreach ($statussingle->result() as $row2) {
//                if ($row->status === '1' || $row2->status === '1') {
//                    $this->load->view('maintenance');
//                } else {
//                    if (!isset($id)) {
//                        redirect(base_url() . 'program');
//                    } else {
//                        $this->load->model('programsmodel');
//                        $prog = $this->programsmodel->getProgram($id);
//                        $header = array(
//                            'title' => 'Programs',
//                        );
//                        $content = array(
//                            'prog' => $prog,
//                        );
//                        $this->load->view('header', $header);
//                        $this->load->view('programsingle', $content);
//                        $this->load->view('footer');
//                    }
//                }
//            }
//        }
//    }
    public function isiartikel($param) {
        $header = array(
            'title' => 'Blog',
        );
        $this->load->model("articleModel");
        $querycategory = $this->articleModel->getarticlesid($param);
        $setcontent = '';
        $settitle = '';
        $setby = '';
        $setdate = '';
        foreach ($querycategory->result_array() as $row) {
            $setcontent = $setcontent . $row['content'];
            $settitle = $settitle . $row['title'];
            $setdate = $setdate . 'Date : ' . substr($row['postdate'], 0, 10);
        }
        $this->session->set_flashdata('contentpengunjung', $setcontent);
        $this->session->set_flashdata('titlepengunjung', $settitle);
        $this->session->set_flashdata('datepengunjung', $setdate);


        $this->load->view('header', $header);
        $this->load->view('artikelpengunjung');
        $this->load->view('footer');
    }

}
