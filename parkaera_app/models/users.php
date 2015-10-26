<?php

 class Users extends CI_Model {
	 
	 public function __construct()
	 {
		 parent::__construct();
	 }
	 
	 public function login($id, $pass){
		 
		 $pass = md5($pass);
		 
		 $query = $this->db->get_where('utilisateurs', array('identifiant' => $id, 'motdepass' => $pass));
		 
		 $resultat = $query->result();
		 
		 $count = count($resultat);
		 
		 if($count == 1){
			 return $resultat[0];
			 
		 }else{
			 return false;
		 }
		 
	 }
	 
	 public function create($id, $pass, $mail, $tel){
		 
		 $pass = md5($pass);
		 
		 $time = time();
		 
		 $data = array(
			'identifiant' => $id,
			'motdepass' => $pass,
			'mail' => $mail,
			'tel' => $tel,
			'timestamp' => $time
		);
		
		$this->db->where('identifiant', $id);
		
		$this->db->or_where('mail', $mail);
		
		$query = $this->db->get('utilisateurs');
		
		$resultat = $query->result();
		
		$count = count($resultat);
		
		if($count == 0){
			
			$this->db->insert('utilisateurs', $data);
			$entry = $this->db->insert_id();
			return $entry;
			
		}else{
			return false;
			
		}
		  
	 }
	 
 }

?>