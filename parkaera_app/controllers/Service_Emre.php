<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_Emre extends CI_Controller {
	
	
	public function list_relais(){

		$this->load->model('relais');

		$this->relais->get_relais();
	}
	
	public function login_user(){
		
		$identifiant = $this->input->post('identifiant');
		$motdepass =$this->input->post('motdepass');
		
		$this->load->model('users');
		
		$login = $this->users->login($identifiant, $motdepass);
		
		if($login){
			
			//chargement du model session
			$this->load->model('session');
			$session = $this->session->session($id, $identifiant);
			//utilisation de la fonction du model qui ajoute une entree dans la table session
			
			$json = json_encode($login);
			echo($json);
			
		}else{
			$json = json_encode(array('error' => "Impossible de se connecter"));
			echo($json);
			
			
		}
		
	}
	
	public function logout_user(){
		
		//chargement du model session
		//utilisation de la fonction du model qui met la colonne is_active de la table à false
		
	}
		
}
?>
