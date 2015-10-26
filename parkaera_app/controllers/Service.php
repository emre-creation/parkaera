<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function login_user(){
		
		$identifiant = $this->input->post('identifiant');
		$motdepass =$this->input->post('motdepass');
		
		$this->load->model('users');
		
		$login = $this->users->login($identifiant, $motdepass);
		
		if($login){
			$json = json_encode($login);
			echo($json);
		}else{
			$json = json_encode(array('error' => "Impossible de se connecter"));
			echo($json);
			
			
		}
		
	}
		
	public function create_user(){
			
		$identifiant = $this->input->post('identifiant');
		$motdepass =$this->input->post('motdepass');
		$mail =$this->input->post('mail');
		$tel =$this->input->post('tel');
		
		$this->load->model('users');
		
		$user = $this->users->create($identifiant, $motdepass, $mail, $tel);
		
		if(!$user){
			$json = json_encode(array('error' => "Erreur lors de l'inscription"));
			echo($json);
		
		}else{
			$json =json_encode(array(
				"id"	=> $identifiant,
				"mail"	=>	$mail,
				"tel"	=>	$tel,
				"entry"	=>	$user
			));
			
			echo($json);
		}
	}

	public function list_capteurs(){

		$this->load->model('capteurs');

		$this->capteurs->get_list();

	}
		
}
