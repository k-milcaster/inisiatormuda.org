<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {

        if ($this->session->userdata('id_user') !== null) {
            redirect(base_url() . "admin/users    ");
        } else {

//            $header = array(
//                'title' => 'Login',
//            );
//            if (isset($_POST['login'])) {
//                $this->validasi_login();
//            }            
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function doLogin() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username == '' || $password == '') {
            redirect(base_url() . "Admin");
        } else {
            $this->load->model('usersModel');
            $login = $this->usersModel->getAccount($username, $password);
            if ($login->num_rows() > 0) {
                $row = $login->row_array();
                $this->session->set_userdata($row);
                redirect(base_url() . "admin");
            } else {
                $this->load->view('login');
            }
        }
    }

    public function doLogOut() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function users() {
        $this->load->model('usersModel');

        $users = $this->usersModel->getAccountList();

        $header = array(
            'title' => 'users',
        );

        $content = array(
            'users' => $users,
        );
        $this->load->view('headeradmin', $header);
        $this->load->view('admusers', $content);
        $this->load->view('footer');
    }

    public function careers() {
        $header = array(
            'title' => 'careers',
        );
        $this->load->view('headeradmin', $header);
        $this->load->view('admcareers');
        $this->load->view('footer');
    }

    public function programs() {
        $header = array(
            'title' => 'programs',
        );
        $this->load->view('headeradmin', $header);
        $this->load->view('admprograms');
        $this->load->view('footer');
    }

    public function articles() {
        $header = array(
            'title' => 'articles',
        );
        $this->load->view('headeradmin', $header);
        $this->load->view('admarticles');
        $this->load->view('footer');
    }

    public function system() {
        $this->load->model('systemModel');
        $whole = $this->systemModel->getStatus('wholeweb');
        foreach ($whole->result() as $row) {
            $data = array(
                'whole' => $row->status,
            );
        }
        $header = array(
            'title' => 'system',
        );
        $this->load->view('headeradmin', $header);
        $this->load->view('admsystem', $data);
        $this->load->view('footer');
    }

    public function showWhole() {
        $this->load->model('systemModel');
        $this->systemModel('wholeweb', '0');
        redirect(base_url() . 'admin/system');
    }

    public function hideWhole() {
        $this->load->model('systemModel');
        $this->systemModel->changeStatus('wholeweb', '1');
        redirect(base_url() . 'admin/system');
    }

}
