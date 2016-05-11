<?php
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuarios extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function insertUsuario($data){
		if($data){
			$alerta = null;
			$this->db->where('email',$data["email"]);
			$dadosUsuario = $this->db->get("tab_usuarios");
			
			if($dadosUsuario->result()){
				$alerta = array(
						"success" => false,
						"class" => "danger",
						"mensagem" => "Ja existe um usuário cadastro com esse email: <br>".$data["email"]
				);
			}else{
				$dadosInsert = array(
					'nome' => $data["nome"],
					'apelido' => $data["apelido"],
					'email' => $data["email"],
					'senha' => $data["senha"],
					'cidade_id' => $data["municipio"],
					'data_nascimento' => "2016-05-11"

				);
				$this->db->insert('tab_usuarios',$dadosInsert);
				if($this->db->affected_rows()){
					$alerta = array(
						"success" => true,
						"class" => "success",
						"mensagem" => "Cadastro realizado com sucesso, acesse seu e-mail para ativa-lo!"
					);
				}else{
					$alerta = array(
						"success" => false,
						"class" => "danger",
						"mensagem" => "Não foi possivel realizar o cadastro"
					);
				}
			}
			
			
			//var_dump($dadosUsuario);
			
			return $alerta;
		}
	}

}
?>
