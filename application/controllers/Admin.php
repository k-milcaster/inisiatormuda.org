<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    private function auth() {
        if ($this->session->userdata('id_user') !== null) {
            return true;
        } else {
            return false;
        }
    }

    private function authAdmin() {
        if ($this->session->userdata('role') === 'administrator') {
            return true;
        } else {
            return false;
        }
    }

    public function index() {

        if ($this->auth()) {
            if ($this->authAdmin()) {
                redirect(base_url() . "admin/users");
            } else {
                redirect(base_url() . "admin/articles");
            }
        } else {
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
            $this->load->model('usersmodel');
            $login = $this->usersmodel->getAccount($username, $password);
            if ($login->num_rows() > 0) {
                $row = $login->row_array();
                $this->session->set_userdata($row);
                $this->usersmodel->updateLastLogin($username);
                redirect(base_url() . "admin");
            } else {
                $this->load->view('login');
            }
        }
    }

    public function doLogOut() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function staffs() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $header = array(
                'title' => 'staffs',
            );
            $this->load->view('headeradmin', $header);
            $this->load->view('admstaffs');
            $this->load->view('footer');
        }
    }

    public function users() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            if ($this->authAdmin()) {
                $this->load->model('usersmodel');

                $users = $this->usersmodel->getAccountList();

                $header = array(
                    'title' => 'users',
                );

                $content = array(
                    'users' => $users,
                );
                $this->load->view('headeradmin', $header);
                $this->load->view('admusers', $content);
                $this->load->view('footer');
            } else {
                $header = array(
                    'title' => 'Warning',
                );
                $this->load->view('headeradmin', $header);
                $this->load->view('adminWarning');
                $this->load->view('footer');
            }
        }
    }

    public function addUser() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            if ($this->authAdmin()) {
                $header = array(
                    'title' => 'users',
                );
                $this->load->view('headeradmin', $header);
                $this->load->view('admadduser');
                $this->load->view('footer');
            } else {
                $header = array(
                    'title' => 'Warning',
                );
                $this->load->view('headeradmin', $header);
                $this->load->view('adminWarning');
                $this->load->view('footer');
            }
        }
    }

    public function doAddUser() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[repassword]');
            $this->form_validation->set_rules('repassword', 'Password Confirmation', 'trim|required');
            $this->form_validation->set_rules('role', 'Role', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $header = array(
                    'title' => 'users',
                );
                $content = array(
                    'err' => 'Terdapat error pada inputan anda, mohon cek kembali.'
                );

                $this->load->view('headeradmin', $header);
                $this->load->view('admadduser', $content);
                $this->load->view('footer');
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $role = $this->input->post('role');
                $this->load->model('usersmodel');
                $usernameAvailable = $this->usersmodel->userNameAvailable($username);
                if ($usernameAvailable) {
                    $this->usersmodel->addAccount($username, $password, $role);
                    redirect(base_url() . "admin/users");
                } else {
                    $header = array(
                        'title' => 'users',
                    );
                    $content = array(
                        'err' => 'Username yang anda pilih sudah dipakai, gunakan username lain'
                    );
                    $this->load->view('headeradmin', $header);
                    $this->load->view('admadduser', $content);
                    $this->load->view('footer');
                }
            }
        }
    }

    public function deleteUser() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            if ($this->authAdmin()) {
                $id = $this->uri->segment(3);
                $this->load->model('usersmodel');
                $this->usersmodel->deleteAccount($id);
                redirect(base_url() . "admin");
            } else {
                $header = array(
                    'title' => 'Warning',
                );
                $this->load->view('headeradmin', $header);
                $this->load->view('adminWarning');
                $this->load->view('footer');
            }
        }
    }

    public function careers() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $header = array(
                'title' => 'careers',
            );
            $this->load->view('headeradmin', $header);
            $this->load->view('admcareers');
            $this->load->view('footer');
        }
    }

    public function programs() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $this->load->model('programsmodel');
            $progs = $this->programsmodel->getProgramsList();
            $header = array(
                'title' => 'programs',
            );
            $content = array(
                'users' => $progs,
            );
            $this->load->view('headeradmin', $header);
            $this->load->view('admprograms', $content);
            $this->load->view('footer');
        }
    }

    public function addPrograms() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $header = array(
                'title' => 'programs',
            );
            $this->load->view('headeradmin', $header);
            $this->load->view('admaddprogram');
            $this->load->view('footer');
        }
    }

    public function doAddProgram() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('progname', 'Progname', 'trim|required|min_length[2]|max_length[45]');
            $this->form_validation->set_rules('progloc', 'Progloc', 'trim|required|min_length[4]|max_length[45]');
            $this->form_validation->set_rules('progdesc', 'Progdesc', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $header = array(
                    'title' => 'programs',
                );
                $content = array(
                    'err' => 'Terdapat error pada inputan anda, mohon cek kembali.'
                );

                $this->load->view('headeradmin', $header);
                $this->load->view('admaddprogram', $content);
                $this->load->view('footer');
            } else {
                $dateposted = date('YmdHis');
                $id = $dateposted;
                $name = $this->input->post('progname');
                $date = $this->input->post('progdate');
                $loc = $this->input->post('progloc');
                $desc = $this->input->post('progdesc');

                $new_name = 'IMG' . $id; //renaming
                $config['file_name'] = $new_name;
                $config['upload_path'] = 'public/images/programs/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '2000';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $header = array(
                        'title' => 'programs',
                    );
                    $upload_error = array('err' => $this->upload->display_errors());
                    $this->load->view('headeradmin', $header);
                    $this->load->view('admaddprogram', $upload_error);
                    $this->load->view('footer');
                } else {
                    $upload_data = $this->upload->data();
                    $this->load->model('programsmodel');
                    $this->programsmodel->addprogram($id, $name, $date, $loc, $desc, $upload_data['file_name']);
                    redirect(base_url() . "admin/programs");
                }
            }
        }
        //
    }

    public function articles() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $header = array(
                'title' => 'articles',
            );
            $this->load->view('headeradmin', $header);
            $this->load->view('admarticles');
            $this->load->view('footer');
        }
    }

    public function system() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            if ($this->authAdmin()) {
                $this->load->model('systemmodel');
                $data = $this->systemmodel->getStatusList();
                $header = array(
                    'title' => 'system',
                );
                $content = array(
                    'data' => $data,
                );
                $this->load->view('headeradmin', $header);
                $this->load->view('admsystem', $content);
                $this->load->view('footer');
            } else {
                $header = array(
                    'title' => 'Warning',
                );
                $this->load->view('headeradmin', $header);
                $this->load->view('adminWarning');
                $this->load->view('footer');
            }
        }
    }

    public function show() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            if ($this->authAdmin()) {
                $id = $this->uri->segment(3);
                $this->load->model('systemmodel');
                $this->systemmodel->changeStatus($id, '0');
                redirect(base_url() . 'admin/system');
            }
        }
    }

    public function hide() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            if ($this->authAdmin()) {
                $id = $this->uri->segment(3);
                $this->load->model('systemmodel');
                $this->systemmodel->changeStatus($id, '1');
                redirect(base_url() . 'admin/system');
            }
        }
    }

}
