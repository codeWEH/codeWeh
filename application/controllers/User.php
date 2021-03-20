<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('User_m', 'm');
	}

	function index(){
		$data['users']=$this->m->getUser();
		$this->load->view('layout/header');
		$this->load->view('user/index', $data);
		$this->load->view('layout/footer');
	}

	public function add(){
		$this->load->view('layout/header_1');
		$this->load->view('user/add');
		$this->load->view('layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg','Account added successfully');
		}else{
			$this->session->set_flashdata('error_msg','Fail to add account');
		}
		redirect(base_url('user/index'));
	}

	public function edit($id){
		$data['user'] = $this->m->getUserById($id);
		$this->load->view('layout/header_1');
		$this->load->view('user/edit', $data);
		$this->load->view('layout/footer');
	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg','Account updated successfully');
		}else{
			$this->session->set_flashdata('error_msg','Failed to update account');
		}
		redirect(base_url('user/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg','Account delete successfully');
		}else{
			$this->session->set_flashdata('error_msg','Failed to delete account');
		}
		redirect(base_url('user/index'));
	}

	public function keywords(){
		$key = $this->input->post('name');
		$data['users'] = $this->m->search($key);
		$this->load->view('layout/header');
		$this->load->view('user/keywords', $data);
		$this->load->view('layout/footer');
	}

}

