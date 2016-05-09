<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function logar()
	{
		//$this->load->view('welcome_message');
		echo 'logado';
	}

	public function sair(){
		echo 'deslogado';
	}
}
