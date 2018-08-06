<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perfil extends CI_Controller {

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
			//$this->load->view('login');
			$this->load->view('perfil');
		}
	}
}
