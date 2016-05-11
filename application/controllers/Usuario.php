<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function registrar()
	{
		$data = $this->input->post();
		$alerta = null;
		if($this->input->post('captcha')) redirect();

		$this->form_validation->set_rules('nome', 'NOME','required');
		$this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
		$this->form_validation->set_rules('email2', 'Conferencia Email', 'required|valid_email|matches[email]');
		$this->form_validation->set_rules('senha', 'SENHA', 'required|min_length[8]');
		$this->form_validation->set_rules('estado', 'ESTADO', 'required');
		$this->form_validation->set_rules('municipio', 'MUNICIPIO', 'required');

		if($this->form_validation->run() === TRUE){

			$this->load->model("usuarios");
			$insert = $this->usuarios->insertUsuario($data);
			//echo $insertUsuario->alerta["success"];
			//var_dump($insert["success"]) ;	
			if($insert["success"]){
				$alerta = array(

					"class" => $insert["class"],
					"mensagem" => $insert["mensagem"] 
				);
			}else{
				$alerta = array(

					"class" => $insert["class"],
					"mensagem" => $insert["mensagem"] 
				);
			}
			
		}else{
			$alerta = array(
				"class" => "danger",
				"mensagem" => "Atenção! Falha ao realizar o cadastro! <br>".validation_errors() 
			);
		}
		$dados = array(
			"alerta" => $alerta,
			"data" => $data
	    );
		$this->load->model("municipios");
		$this->load->view('welcome',$dados);
	}
}
