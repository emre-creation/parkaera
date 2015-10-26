<?php

 class Ville extends CI_Model {
	 
	 public function __construct()
	 {
		 parent::__construct();
	 }
	  public function get_list(){
	  	$query = $this->db->get('villes');
	  	$result = $query->result();
	  	$json= json_encode($result);
	  	return $json;
	  	
	  }

}