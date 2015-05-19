<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $this->load->view('header');
        $this->load->view('admin');
        $this->load->view('footer');
    }

    
    private function validasi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($username=='' || $password=='') {
			redirect(base_url()."akun?s=login&errorl=blank");	
		}
		$this->load->model('Membership_model');
		$login = false;
		$login = $this->Membership_model->validate($username, $password);
		if($login==false){
			redirect(base_url()."akun?s=login&errorl=invalid");	
		} else {
			$id = $this->Membership_model->getidakun($username);
			$data=array('LOGIN'=>TRUE,'USERNAME'=>$username,'ID_AKUN'=>$id);
			$this->session->set_userdata($data);
			redirect(base_url()."dashboard");
		}
	}
    
}
