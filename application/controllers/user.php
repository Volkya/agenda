<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct()
	{
        		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		session_start();
		if(array_key_exists('userKey', $_SESSION)){
			$this->load->view('perfil');
		}else{
			$this->load->view('login');
		}
	}

	public function close($ctrl=''){
		$this->users->cerrar();
		if($ctrl==''){
			$this->learfen->outPrint();
		}else{
			$this->load->view($ctrl);
		}
	}

	public function login(){
		$nick = $this->input->post('user');
		$pass = $this->input->post('pass');
		$this->users->activar($nick, $pass);
		$this->learfen->outPrint();
	}

	public function new(){
		$nick = $this->input->post('user');
		$pass = $this->input->post('pass');
		$this->users->registrar($nick,$pass);
		$this->learfen->outPrint();
	}
}
