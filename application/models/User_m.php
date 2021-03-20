<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 creating function that getting data from dbase 
 */
class User_m extends CI_Model{
	
	public function getUser(){
		$query = $this->db->get('tbluser');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function submit(){
		$field = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				 'password'=>$this->input->post('password')
			);
		$this->db->insert('tbluser',$field);
		if($this->db->affected_rows()> 0){
			return true;
		}else{
			return false;
		}
	}

	public function getUserById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('tbluser');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				 'password'=>$this->input->post('password')
			);
		$this->db->where('id', $id);
		$this->db->update('tbluser', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tbluser');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function search($key){
		$this->db->like('name', $key);
		$query = $this->db->get('tbluser');
		return $query->result(); 
	}

}