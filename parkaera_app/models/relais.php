<?php

 class Relais extends CI_Model {
	 
	 public function __construct()
	 {
		 parent::__construct();
	 }

	 public function get_relais(){

	 	$query = $this->db->get('relais');

	 	$results = $query->result();

	 	$json = json_encode($results);
	 	echo($json);

	 }
}
?>