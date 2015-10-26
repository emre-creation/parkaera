<?php

 class Capteurs extends CI_Model {
	 
	 public function __construct()
	 {
		 parent::__construct();
	 }

	 public function get_list(){

	 	$query = $this->db->get('capteurs');

	 	$results = $query->result();

	 	$json = json_encode($results);
	 	echo($json);

	 }
}