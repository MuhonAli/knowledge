<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$query=  $this->db->select('*, questions.id as id')->from('questions')->order_by('users.id','desc')->join('users', 'questions.user_id =users.id')->limit(5)->get();

		$data['questions'] = $query->result_array();

		$this->load->view('template/header');
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}
}
 