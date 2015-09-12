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

    public function do_cropone($param) {

        $this->load->library('image_lib');
        $config = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/1/' . $param . '.jpg',
            'new_image' => 'public/images/articles/one/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 800,
            'height' => 500,
        );
        $configjpeg = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/1/' . $param . '.jpeg',
            'new_image' => 'public/images/articles/one/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 800,
            'height' => 500,
        );

        $configpng = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/1/' . $param . '.png',
            'new_image' => 'public/images/articles/one/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 800,
            'height' => 500,
        );
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->initialize($configjpeg);
        $this->image_lib->resize();
        $this->image_lib->initialize($configpng);
        $this->image_lib->resize();
    }
    
    public function do_croponesmall($param) {

        $this->load->library('image_lib');
        $config = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/1/' . $param . '.jpg',
            'new_image' => 'public/images/articles/onesmall/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 300,
            'height' => 206,
        );
        $configjpeg = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/1/' . $param . '.jpeg',
            'new_image' => 'public/images/articles/onesmall/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 300,
            'height' => 206,
            );

        $configpng = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/1/' . $param . '.png',
            'new_image' => 'public/images/articles/onesmall/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 300,
            'height' => 206,
        );
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->initialize($configjpeg);
        $this->image_lib->resize();
        $this->image_lib->initialize($configpng);
        $this->image_lib->resize();
    }
    

    public function do_croptwo($param) {

        $this->load->library('image_lib');
        $config = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/2/' . $param . '.jpg',
            'new_image' => 'public/images/articles/two/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 300,
            'height' => 206,
        );
        $configjpeg = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/2/' . $param . '.jpeg',
            'new_image' => 'public/images/articles/two/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 300,
            'height' => 306,
        );

        $configpng = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/2/' . $param . '.png',
            'new_image' => 'public/images/articles/two/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 300,
            'height' => 206,
        );
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->initialize($configjpeg);
        $this->image_lib->resize();
        $this->image_lib->initialize($configpng);
        $this->image_lib->resize();
    }

    public function do_cropthree($param) {

        $this->load->library('image_lib');
        $config = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/3/' . $param . '.jpg',
            'new_image' => 'public/images/articles/three/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 300,
            'height' => 206,
        );

        $configjpeg = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/3/' . $param . '.jpeg',
            'new_image' => 'public/images/articles/three/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 300,
            'height' => 206,
        );

        $configpng = array(
            'image_library' => 'gd2',
            'source_image' => 'public/images/articles/source/3/' . $param . '.png',
            'new_image' => 'public/images/articles/three/' . $param . '.jpg',
            'maintain_ratio' => TRUE,
            'width' => 300,
            'height' => 206,
        );
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->initialize($configjpeg);
        $this->image_lib->resize();
        $this->image_lib->initialize($configpng);
        $this->image_lib->resize();
    }

    public function posting() {
        $teks = $this->input->post('teks');
        $category = $this->input->post('listcategory');
        $newcategory = $this->input->post('categorys');
        if ($newcategory == '' && $category == 0) {
            redirect(base_url() . "Admin/articles");
        } else if ($teks == '') {
            redirect(base_url() . "Admin/articles");
        } else {
            $this->load->model('articleModel');
            $setid = '';
            $name = explode("</h1>", $teks);
            $setid = substr($name[0], 4);
            $textid = str_replace(' ', '', $setid);
            $in = 1;
            $this->load->model('articleModel');
            $pieces = explode("</h1>", $teks);
            $title = $pieces[0];
            $title = $title . '</h1>';
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
            $this->load->library('upload');
            $new_name = 'init1' . $textid; //renaming
            $config['file_name'] = $new_name;
            $config['upload_path'] = 'public/images/articles/source/1/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '2000';
            $this->upload->initialize($config); // Important
            $this->upload->do_upload($new_name);


            $querycategory = $this->articleModel->getarticleid($title);
            $idnya = 0;
            foreach ($querycategory->result_array() as $row) {
                $id = $row['id_article'];
            };
            $upload_data = $this->upload->data();
            $this->articleModel->insertimage($id, $new_name);



            if (!$this->upload->do_upload('userfile' . 1)) {
                $header = array(
                    'title' => 'careers',
                );
                $upload_error = array('err' => $this->upload->display_errors());
                $this->load->view('headeradmin', $header);
                $this->load->view('admaddstaffs', $upload_error);
                $this->load->view('footer');
            }




            $new_names = 'init2' . $textid; //renaming
            $configs['file_name'] = $new_names;
            $configs['upload_path'] = 'public/images/articles/source/2/';
            $configs['allowed_types'] = 'jpg|jpeg|png';
            $configs['max_size'] = '2000';
            $this->upload->initialize($configs); // Important
            $this->upload->do_upload($new_names);
            //$this->load->library('upload', $config);
            $upload_data = $this->upload->data();
            $this->articleModel->insertimage($id, $new_names);



            if (!$this->upload->do_upload('userfile' . 2)) {
                $header = array(
                    'title' => 'careers',
                );
                $upload_error = array('err' => $this->upload->display_errors());
                $this->load->view('headeradmin', $header);
                $this->load->view('admaddstaffs', $upload_error);
                $this->load->view('footer');
            }


//            }


            $new_namess = 'init3' . $textid; //renaming
            $configss['file_name'] = $new_namess;
            $configss['upload_path'] = 'public/images/articles/source/3/';
            $configss['allowed_types'] = 'jpg|jpeg|png';
            $configss['max_size'] = '2000';
            $this->upload->initialize($configss); // Important
            $this->upload->do_upload($new_namess);
            //$this->load->library('upload', $config);
            $upload_data = $this->upload->data();
            $this->articleModel->insertimage($id, $new_namess);



            if (!$this->upload->do_upload('userfile' . 3)) {
                $header = array(
                    'title' => 'careers',
                );
                $upload_error = array('err' => $this->upload->display_errors());
                $this->load->view('headeradmin', $header);
                $this->load->view('admaddstaffs', $upload_error);
                $this->load->view('footer');
            }

            $this->do_cropone($new_name);
            $this->do_croponesmall($new_name);
            $this->do_croptwo($new_names);
            $this->do_cropthree($new_namess);

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
            $this->load->model('staffsmodel');
            $init = $this->staffsmodel->getStaffsList();
            $content = array(
                'init' => $init,
            );
            $header = array(
                'title' => 'staffs',
            );
            $this->load->view('headeradmin', $header);
            $this->load->view('admstaffs', $content);
            $this->load->view('footer');
        }
    }

    public function addInitiator() {
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

    public function doAddInitiator() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Progname', 'trim|required|min_length[2]|max_length[45]');
            $this->form_validation->set_rules('bio', 'Progloc', 'trim|required|min_length[4]|max_length[600]');

            if ($this->form_validation->run() == FALSE) {
                $header = array(
                    'title' => 'staffs',
                );
                $content = array(
                    'err' => 'Terdapat error pada inputan anda, mohon cek kembali.'
                );

                $this->load->view('headeradmin', $header);
                $this->load->view('admaddstaffs', $content);
                $this->load->view('footer');
            } else {
                $dateposted = date('YmdHis');
                $id = $dateposted;
                $name = $this->input->post('name');
                $bio = $this->input->post('bio');

                $new_name = 'init' . $id; //renaming
                $config['file_name'] = $new_name;
                $config['upload_path'] = 'public/images/aboutus/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '2000';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $header = array(
                        'title' => 'staffs',
                    );
                    $upload_error = array('err' => $this->upload->display_errors());
                    $this->load->view('headeradmin', $header);
                    $this->load->view('admaddstaffs', $upload_error);
                    $this->load->view('footer');
                } else {
                    $upload_data = $this->upload->data();
                    $this->load->model('staffsmodel');
                    $this->staffsmodel->addStaff($name, $bio, $upload_data['file_name']);
                    redirect(base_url() . "admin/staffs");
                }
            }
        }
    }

    public function updateInitiator() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $id = $this->uri->segment(3);
            $this->load->model('staffsmodel');
            $init = $this->staffsmodel->getStaff($id);
            $content = array(
                'init' => $init,
            );
            $header = array(
                'title' => 'staffs',
            );
            $this->load->view('headeradmin', $header);
            $this->load->view('admupdstaffs', $content);
            $this->load->view('footer');
        }
    }

    public function doUpdateInitiator() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Progname', 'trim|required|min_length[2]|max_length[45]');
            $this->form_validation->set_rules('bio', 'Progloc', 'trim|required|min_length[4]|max_length[600]');

            if ($this->form_validation->run() == FALSE) {
                $header = array(
                    'title' => 'staffs',
                );
                $content = array(
                    'err' => 'Terdapat error pada inputan anda, mohon cek kembali.'
                );

                $this->load->view('headeradmin', $header);
                $this->load->view('admupdstaffs', $content);
                $this->load->view('footer');
            } else {

                $id = $this->input->post('id');
                $name = $this->input->post('name');
                $bio = $this->input->post('bio');
                $oriimg = $this->input->post('img');

                $new_name = 'img' . $id;
                $config['file_name'] = $new_name;
                $config['upload_path'] = 'public/images/programs/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['overwrite'] = 'TRUE';
                $config['max_size'] = '2000';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $this->load->model('staffsmodel');
                    $this->staffsmodel->updateStaff($id, $name, $bio, $oriimg);
                    redirect(base_url() . "admin/staffs");
                } else {
                    $upload_data = $this->upload->data();
                    $this->load->model('staffsmodel');
                    $this->staffsmodel->updateStaff($id, $name, $bio, $upload_data['file_name']);
                    redirect(base_url() . "admin/staffs");
                }
            }
        }
    }

    public function doDeleteInitiator() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $id = $this->uri->segment(3);
            $this->load->model('staffsmodel');
            $this->staffsmodel->deleteStaff($id);
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

            $this->load->model('careerModel');
            $querycategory = $this->careerModel->getCareer();
            $setcareer = '';
            $setidcareer = 0;
            $setcontentcareer = '';
            $settanggal = '';

            foreach ($querycategory->result_array() as $row) {
                $setcareer = $row['title'];
                $setidcareer = $row['id_career'];
                $setcontentcareer = $row ['content'];
                $settanggal = $row['datetime'];
            }
            $this->session->set_flashdata('setcareer', $setcareer);
            $this->session->set_flashdata('setcontent', $setcontentcareer);
            $this->session->set_flashdata('settanggalcareer', $settanggal);


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
            $articlescut = '';
            $newtable = '';
            $counter = 0;
            $errs = '';
            $i = 1;

            foreach ($querycategory->result_array() as $row) {

                $rest = substr($row['title'], 4, -5);  // returns "abcde"
                $newtable = $newtable . '<tr><td class="user-name">' . $i . '</td><td class="user-name">' . $row['postdate'] . '</td><td class="user-name">' . $rest . '</td><td class="user-name">' . substr($row['content'], 0, 9) . '...</td>';
                if ($row['published'] == 0) {
                    $newtable = $newtable . ' <td class="user-name"><a href="' . base_url() . 'Admin/editarticle/' . $row['id_article'] . '"><div class="btn-red">Update </td><td class="user-name"><a href="' . base_url() . 'Admin/deletearticle/' . $row['id_article'] . '"><div class="btn-red">Delete</div></a></td><td class="user-name"><a href="' . base_url() . 'Admin/updatepublished/' . $row['id_article'] . '/' . $row['published'] . '"><div class="btn-red">PUBLISH </td>';
                } else {
                    $newtable = $newtable . ' <td class="user-name"><a href="' . base_url() . 'Admin/editarticle/' . $row['id_article'] . '"><div class="btn-red">Update </td><td class="user-name"><a href="' . base_url() . 'Admin/deletearticle/' . $row['id_article'] . '"><div class="btn-red">Delete</div></a></td><td class="user-name"><a href="' . base_url() . 'Admin/updatepublished/' . $row['id_article'] . '/' . $row['published'] . '"><div class="btn-red">PUBLISHED </td>';
                }
                if ($row['recommended'] == 1) {
                    $counter++;
                    if ($counter != 5) {
                        $newtable = $newtable . '<td class="user-name"><a href="' . base_url() . 'Admin/updaterecommended/' . $row['id_article'] . '/' . $row['recommended'] . '"><div class="btn-red">RECOMMENDED</div></a></td></tr>';
                    } else {
                        $newtable = $newtable . '<td class="user-name"><a href=""><div class="btn-red">UNRECOMMENDED</div></a></td></tr>';
                    }
                } else {
                    $newtable = $newtable . '<td class="user-name"><a href="' . base_url() . 'Admin/updaterecommended/' . $row['id_article'] . '/' . $row['recommended'] . '"><div class="btn-red">UNRECOMMEND</div></a></td></tr>';
                }
                $i++;
            }
            if ($counter == 5) {
                $counter = 0;
                $errs = 'Recommend Hanya untuk 4 Artikel';
                //redirect(base_url() . "Admin/Direktoriarticle");
            }
            $this->session->set_flashdata('tableart', $newtable);

            $this->load->view('headeradmin', $header);
            $this->load->view('direktoriarticle', $errs);
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

    public function isihalamancareer() {
        if (!$this->auth()) {
            redirect(base_url() . "admin");
        } else {
            $header = array(
                'title' => 'careers',
            );

            $this->load->view('headeradmin', $header);
            $this->load->view('admpagecareer');
            $this->load->view('footer');
        }
    }

    public function postingcareer() {
        $teks = $this->input->post('teks');
        if ($teks == '') {
            redirect(base_url() . "Admin/articles");
        } else {
            $this->load->model('careerModel');

            $pieces = explode("</h1>", $teks);

            $title = $pieces[0];
            $title = substr($title, 4);
            $title = $title;


            $dateTime = date('Y-m-d H:i:s');

            $this->careerModel->deletecareer();
            $this->careerModel->insertcareer($title, $pieces[1], $dateTime, $this->session->userdata('id_user'));



            redirect(base_url() . "admin/careers");
        }
    }

}
