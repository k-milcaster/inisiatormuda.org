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

    public function posting() {
        $newcategory = '';
        $teks = $this->input->post('teks');
        $category = $this->input->post('listcategory');
        $newcategory = $this->input->post('categorys');
        if ($teks == '' || $category == '') {
            redirect(base_url() . "Admin/articles");
        } else {
            $this->load->model('articleModel');

            $pieces = explode("</h1>", $teks);
            $title = $pieces[0];
            $title = $title . '</h1>';
            if ($pieces[0] == '') {
                $pieces = explode("</h2>", $teks);
                $title = '';
                $title = $pieces[0];
                $title = $title . '</h2>';
                if ($pieces[0] == "") {
                    $pieces = explode("</h3>", $teks);
                    $title = '';
                    $title = $pieces[0] . '</h3>';
                    if ($pieces[0] == "") {
                        $pieces = explode("</h4>", $teks);
                        $title = '';
                        $title = $pieces[0] . '</h4>';
                        if ($pieces[0] == "") {
                            $pieces = explode("</h5>", $teks);
                            $title = '';
                            $title = $pieces[0] . '</h5>';
                            if ($pieces[0] == "") {
                                $pieces = explode("</h6>", $teks);
                                $title = '';
                                $title = $pieces[0] . '</h6>';
                            }
                        }
                    }
                }
            }


            $dateTime = date('Y-m-d H:i:s');

            if ($newcategory == '') {
                $this->articleModel->insertarticle($category, $pieces[1], $this->session->userdata('id_user'), $title, $dateTime);
            } else {
                $this->articleModel->insertnewcat($newcategory);
                $paramater = $this->articleModel->getidcat($newcategory);
                foreach ($paramater->result_array() as $row) {
                    $getid = $row['id_category'];
                }

                $this->articleModel->insertarticle($getid, $pieces[1], $this->session->userdata('id_user'), $title, $dateTime);
            }

            redirect(base_url() . "admin/direktoriarticle");
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

    public function addInitiators() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $header = array(
                'title' => 'staffs',
            );
            $this->load->view('headeradmin', $header);
            $this->load->view('admaddstaffs');
            $this->load->view('footer');
        }
    }

    public function doAddInitiators() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            
        }
    }

    public function updateInitiators() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $header = array(
                'title' => 'staffs',
            );
            $this->load->view('headeradmin', $header);
            $this->load->view('admupdstaffs');
            $this->load->view('footer');
        }
    }

    public function doDeleteInitiators() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $id = $this->uri->segment(3);
            $this->load->model('staffsmodel');
            $this->usersmodel->deleteStaff($id);
            redirect(base_url() . "admin/staffs");
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
    }

    public function direktoriarticle() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $header = array(
                'title' => 'articles',
            );


            $this->load->model("articleModel");
            $querycategory = $this->articleModel->getarticles();
            $right = '';
            $left = '';
            $title = '';
            $articlescut = '';
            $i = 0;

            foreach ($querycategory->result_array() as $row) {
                $title = '<h3><span>' . $row['title'] . '</span></h3>';
                $articlescut = '<p class="col3">' . substr($row['content'], 0, 45) . '...';

                if ($row['published'] == 0) {
                    $articlescut = $articlescut . '</p><a href="' . base_url() . 'Admin/updatepublished/' . $row['id_article'] . '/' . $row['published'] . '" class="btn">PUBLISH</a>';
                } else {
                    $articlescut = $articlescut . '</p><a href="' . base_url() . 'Admin/updatepublished/' . $row['id_article'] . '/' . $row['published'] . '" class="btn">PUBLISHED</a>';
                }
                if ($row['recommended'] == 1) {
                    $articlescut = $articlescut . '<a href="' . base_url() . 'Admin/updaterecommended/' . $row['id_article'] . '/' . $row['recommended'] . '" class="btn">RECOMMENDED</a><a href="' . base_url() . 'Admin/editarticle/' . $row['id_article'] . '" class="btn">EDIT</a><a href="' . base_url() . 'Admin/deletearticle/' . $row['id_article'] . '" class="btn">DELETE</a>';
                } else {
                    $articlescut = $articlescut . '<a href="' . base_url() . 'Admin/updaterecommended/' . $row['id_article'] . '/' . $row['recommended'] . '" class="btn">UNRECOMMENDED</a><a href="' . base_url() . 'Admin/editarticle/' . $row['id_article'] . '" class="btn">EDIT</a><a href="' . base_url() . 'Admin/deletearticle/' . $row['id_article'] . '" class="btn">DELETE</a>';
                }

                $a = $i % 2;
                if ($a == 0) {
                    $left = $left . $title . $articlescut;
                } else {
                    $right = $right . $title . $articlescut;
                }
                $i++;
            }
            $this->session->set_flashdata('right', $right);
            $this->session->set_flashdata('left', $left);


            $this->load->view('headeradmin', $header);
            $this->load->view('direktoriarticle');
            $this->load->view('footer');
        }
    }

    public function editarticle($param) {


        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $header = array(
                'title' => 'articles',
            );
        }

        $this->load->database();
        $this->load->model("articleModel");
        $query = $this->articleModel->getarticlesid($param);
        $setcat1 = '';
        $setcat2 = '';
        $idcategory = '';
        foreach ($query->result_array() as $row) {
            $setcat1 = $setcat1 . $row['title'] . $row['content'];
            $idcategory = $row['id_category'];
        }
        $this->session->set_flashdata('contentedit', $setcat1);

        $querycategory = $this->articleModel->getcategorybyid($idcategory);

        foreach ($querycategory->result_array() as $row) {
            $setcat2 = $setcat2 . '<select name = "listcategory"; class="form-control">
                                <option value = "' . $row['id_category'] . '">' . $row['category'] . '</option>';
        }


        $querycategory = $this->articleModel->getCategory();

        foreach ($querycategory->result_array() as $row) {
            $setcat2 = $setcat2 . '
                                <option value = "' . $row['id_category'] . '">' . $row['category'] . '</option>';
        }
        $setcat2 = $setcat2 . '</select>';
        $this->session->set_flashdata('categoryedit', $setcat2);
        $this->session->set_flashdata('idart', $param);


        $this->load->view('headeradmin', $header);
        $this->load->view('admartedit');
        $this->load->view('footer');





//        $query = $this->articleModel->editarticle($param);
//        redirect(base_url() . 'Admin/direktoriarticle');
    }

    public function edit($param) {
        $newcategory = '';
        $teks = $this->input->post('teks');
        $category = $this->input->post('listcategory');
        $newcategory = $this->input->post('categorys');
        if ($teks == '' || $category == '') {
            redirect(base_url() . "Admin/direktoriarticle");
        } else {
            $this->load->model('articleModel');

            $pieces = explode("</h1>", $teks);
            $title = $pieces[0];
            $title = $title . '</h1>';
            if ($pieces[0] == '') {
                $pieces = explode("</h2>", $teks);
                $title = '';
                $title = $pieces[0];
                $title = $title . '</h2>';
                if ($pieces[0] == "") {
                    $pieces = explode("</h3>", $teks);
                    $title = '';
                    $title = $pieces[0] . '</h3>';
                    if ($pieces[0] == "") {
                        $pieces = explode("</h4>", $teks);
                        $title = '';
                        $title = $pieces[0] . '</h4>';
                        if ($pieces[0] == "") {
                            $pieces = explode("</h5>", $teks);
                            $title = '';
                            $title = $pieces[0] . '</h5>';
                            if ($pieces[0] == "") {
                                $pieces = explode("</h6>", $teks);
                                $title = '';
                                $title = $pieces[0] . '</h6>';
                            }
                        }
                    }
                }
            }


            $dateTime = date('Y-m-d H:i:s');

            if ($newcategory == '') {
                $this->articleModel->editarticle($param, $category, $title, $pieces[1]);
            } else {
                $this->articleModel->insertnewcat($newcategory);
                $paramater = $this->articleModel->getidcat($newcategory);
                foreach ($paramater->result_array() as $row) {
                    $getid = $row['id_category'];
                }

                $this->articleModel->editarticle($param, $getid, $title, $pieces[1]);
            }

            redirect(base_url() . "admin/direktoriarticle");
        }
    }

    public function updatepublished($param, $param2) {



        $this->load->database();
        $this->load->model("articleModel");
        $query = $this->articleModel->updatepublished($param, $param2);
        redirect(base_url() . 'Admin/direktoriarticle');
    }

    public function updaterecommended($param, $param2) {
        $this->load->database();
        $this->load->model("articleModel");
        $query = $this->articleModel->updaterecommended($param, $param2);
        redirect(base_url() . 'Admin/direktoriarticle');
    }

    public function deletearticle($param) {
        $this->load->database();
        $this->load->model("articleModel");
        $query = $this->articleModel->deletearticles($param);
        redirect(base_url() . 'Admin/direktoriarticle');
    }

    public function updateProgram() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $id = $this->uri->segment(3);
            $this->load->model('programsmodel');
            $prog = $this->programsmodel->getprogram($id);
            $header = array(
                'title' => 'programs',
            );
            $content = array(
                'prog' => $prog,
            );
            $this->load->view('headeradmin', $header);
            $this->load->view('admupdprogram', $content);
            $this->load->view('footer');
        }
    }

    public function doUpdateProgram() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('progid', 'Progid', 'trim|required|min_length[2]|max_length[45]');
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
                $this->load->view('admupdprogram', $content);
                $this->load->view('footer');
            } else {

                $id = $this->input->post('progid');
                $name = $this->input->post('progname');
                $date = $this->input->post('progdate');
                $loc = $this->input->post('progloc');
                $desc = $this->input->post('progdesc');
                $oriimg = $this->input->post('progimg');

                $new_name = 'img' . $id;
                $config['file_name'] = $new_name;
                $config['upload_path'] = 'public/images/programs/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['overwrite'] = 'TRUE';
                $config['max_size'] = '2000';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $this->load->model('programsmodel');
                    $this->programsmodel->updateprogram($id, $name, $date, $loc, $desc, $oriimg);
                    redirect(base_url() . "admin/programs");
                } else {
                    $upload_data = $this->upload->data();
                    $this->load->model('programsmodel');
                    $this->programsmodel->updateprogram($id, $name, $date, $loc, $desc, $upload_data['file_name']);
                    redirect(base_url() . "admin/programs");
                }
            }
        }
        //
    }

    public function deleteProgram() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            if ($this->authAdmin()) {
                $id = $this->uri->segment(3);
                $this->load->model('programsmodel');
                $this->programsmodel->deletePrograms($id);
                redirect(base_url() . "admin/programs");
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

    public function articles() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $header = array(
                'title' => 'articles',
            );

            $this->load->model("articleModel");
            $querycategory = $this->articleModel->getCategory();
            $setcat = '';
            $setcat = $setcat . ' <select name = "listcategory"; class="form-control">
                                <option value = "0">Pilih Kategori</option>
                                ';
            foreach ($querycategory->result_array() as $row) {
                $setcat = $setcat . '
                                <option value = "' . $row['id_category'] . '">' . $row['category'] . '</option>';
            }
            $setcat = $setcat . '</select>';
            $this->session->set_flashdata('setcat', $setcat);



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
