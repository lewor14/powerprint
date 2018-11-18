<?php 
	class Model_login extends CI_Model{
		function can_login(){
			$this->db->where('user_email',$this->input->post('email'));
			$this->db->where('user_password',md5($this->input->post('password')));
		
			$q=$this->db->get('user_tbl');
			if($q->num_rows()==1){
				return true;
			}
			else{
				return false;
			}	
	}	

		function can_stat(){
			$this->db->where('user_email',$this->input->post('email'));
			$this->db->where('user_password',md5($this->input->post('password')));
			$this->db->where('user_stat',1);
		
			$q=$this->db->get('user_tbl');
			if($q->num_rows()==1){
				return true;
			}
			else{
				return false;
			}	
	}

}
