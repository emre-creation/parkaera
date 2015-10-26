<?php

 class Session extends CI_Model {
	 
	 public function __construct()
	 {
		 parent::__construct();
	 }

	 public function create_session(){

	 	$query = $this->db->get('session');

	 	$results = $query->result();

	 	$json = json_encode($results);
	 	echo($json);

	 }
}
?>