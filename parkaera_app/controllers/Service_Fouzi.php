<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_Fouzi extends CI_Controller {

	public function list_ville(){
		$this->load->model('ville');
	$ville =$this->ville->get_list();
 echo($ville);
}


}