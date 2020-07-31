<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->loadViews("home");
	}
	public function login(){

		$this->load->library('session');
		$this->load->model('User_model');

		if ($_POST['checkbox'] == 1) {
			if($_POST['username'] && $_POST['password']) {
			$login=$this->User_model->loginUser($_POST);
			
			if ($login) {
					$array=array(
					"usua_nombres"=>$login[0]->usua_nombres,
					"usua_apellidos"=>$login[0]->usua_apellidos,
					"usua_esadmin"=>$login[0]->usua_esadmin,
					"usua_id"=>$login[0]->usua_id
					);
					$this->session->set_userdata($array);
				
				}
			}
		}else{
			if($_POST['username'] && $_POST['password']) {
			$login=$this->User_model->loginAdmin($_POST);
			
			if ($login) {
					$array=array(
					"usua_nombres"=>$login[0]->usua_nombres,
					"usua_apellidos"=>$login[0]->usua_apellidos,
					"usua_id"=>$login[0]->usua_id
				);
				$this->session->set_userdata($array);
				
				}
			
			}

		}
		$this->loadViews('login');
	}

	function loadViews($view,$datos=null){

		$this->load->library('session');
		if ($_SESSION['usua_esadmin']==1) {

				if ($_SESSION['usua_nombres']) {

				if ($view=="login") {
					redirect(base_url()."Dashboard","location");
				}

				$this->load->view('includes/header');
				$this->load->view('includes/sidebar');
				$this->load->view('home');
				$this->load->view('includes/footer');
			}else{
				if ($view=="login") {
					$this->load->view($view);
				}else{
					redirect(base_url()."Dashboard/login","location");
				}
			}


		}else{

				if ($_SESSION['usua_nombres']) {

				if ($view=="login") {
					redirect(base_url()."Dashboard","location");
				}

				$this->load->view('includes/header');
				$this->load->view('includes/sidebar_user');
				$this->load->view('home_user');
				$this->load->view('includes/footer');
			}else{
				if ($view=="login") {
					$this->load->view($view);
				}else{
					redirect(base_url()."Dashboard/login","location");
				}
			}

		}
}

	
	function logout() {
		$this->load->library('session');
        $this->session->sess_destroy($login);
        redirect(base_url()."Dashboard/login","location");
    }
}
?>