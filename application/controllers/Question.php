<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

	public function index()
	{
		if(($this->session->userdata('userid'))){
		}else{ redirect('Login'); }

		$this->load->view('template/header');
		$this->load->view('question');
		$this->load->view('template/footer');
	}

	public function add_question()
	{
		if(($this->session->userdata('userid'))){
		}else{ redirect('Login'); }


		$this->form_validation->set_rules('title', 'Question title', 'required|english_check');

		$this->form_validation->set_rules('category_id', 'Category', 'required');
		
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[10]');

		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('template/header');
			$this->load->view('template_question');
			$this->load->view('template/footer');

		}else{

	
				$data['title']=$this->input->post('title');
				$data['description']=nl2br($this->input->post('description'));
				$data['code']=$this->input->post('code');
				$data['tag']=$this->input->post('tag');
				$data['user_id']=$this->session->userdata('user_id');
					
				$this->db->insert('questions',$data);
				
				
				$last_id=$this->db->insert_id();
					
				$msg='<div class="alert alert-success"> Your Question Created </div>';
					
				$this->session->set_flashdata('message',$msg);
					
				redirect('Showquestion/view/'.$last_id.'');
	
		$this->session->set_flashdata('message',$msg);
			redirect($_SERVER['HTTP_REFERER']);

		
	}

}

	public function question_details($id)
	{
		
		
		$data['question']=$this->db->where('id',$id)->get('questions')->result_array();
		
		
		$data['comment']=$this->db->select('*')->from('comment');
		$data['comment']=$this->db->join('users','comment.user_id=users.id');
		$data['comment']=$this->db->where('question_id',$id);
		$data['comment']=$this->db->get()->result_array();
		
	
		
		
		
		$data['id']=$id;
		
		
		$this->load->view('template/header');
		$this->load->view('question_details',$data);
		$this->load->view('template/footer');
	}

	
	public function comment($id){
		
		
	$this->form_validation->set_rules('comment', 'Comment', 'required');
	
	
	
			if ($this->form_validation->run() == FALSE)
			{
				
				
				$data['question']=$this->db->where('id',$id)->get('questions')->result_array();
				
		
		
					$data['comment']=$this->db->select('*')->from('comment');
					$data['comment']=$this->db->join('users','comment.user_id=users.id');
					$data['comment']=$this->db->where('id',$id);
					$data['comment']=$this->db->get()->result_array();
		
				
				$this->load->view('template/navbar');
				$this->load->view('show-question',$data);
				$this->load->view('template/footer');
				
			}else{
				
				
				$insert_data['comment']=nl2br($this->input->post('comment'));
				$insert_data['u_id']=$this->session->userdata('u_id');
				$insert_data['qid']=$id;
					
				$this->db->insert('comment',$insert_data);
				
					
				$msg='<div class="alert alert-success"> Your Comment templateed </div>';
					
				$this->session->set_flashdata('message',$msg);
					
				redirect($_SERVER['HTTP_REFERER']);	
				
				
			}
		
		
	}
	


}
 