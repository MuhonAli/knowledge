<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		if($this->session->userdata('admin_id')){   
			
		}else{
			redirect('AdminLogin');
		} 
		 
	}

	
	public function index()
	{
		

		$data['users'] = $this->db->select('*')->from('users')->where('type', 'sugnup')->get()->result_array();
		
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/home', $data);
		$this->load->view('admin/inc/footer');

	}
	

	public function dashboard()
	{
		$data['admin'] = $this->db->select('*')->from('admin')->get()->result_array();
		
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/admin_dashboard', $data);
		$this->load->view('admin/inc/footer');
	}



	public function change_email($id)
	{
		$email = $this->input->post('email');
		$this->db->set('email', $email);
		$this->db->where('id',$id);
		$this->db->update('admin');
		$msg='<div class="alert alert-success">Email Updated successfully!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function change_phone_number($id)
	{
		$phone = $this->input->post('phone');
		$this->db->set('phone', $phone);
		$this->db->where('id',$id);
		$this->db->update('admin');
		$msg='<div class="alert alert-success">Number Updated successfully!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}



	public function change_password($id)
	{

		$password = md5($this->input->post('password'));
		$this->db->set('password', $password);
		$this->db->where('id',$id);
		$this->db->update('admin');

		$msg='<div class="alert alert-success">Password Updated successfully!</div>';
		
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function user()
	{
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/user_page');
		$this->load->view('admin/inc/footer');
	}




	public function user_list()
	{

		$data['users'] = $this->db->select('*')->from('users')->get()->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/user_list', $data);
		$this->load->view('admin/inc/footer');
	}



	public function questions()
	{

		$data['questions'] = $this->db->select('*')->from('questions')->get()->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/questions', $data);
		$this->load->view('admin/inc/footer');
	}

	public function block_list()
	{

		$data['users'] = $this->db->select('*')->from('users')->where('block',1)->get()->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/user_list', $data);
		$this->load->view('admin/inc/footer');
	}


	public function question_details($id)
	{

		$query=  $this->db->select('*, questions.id as id')->from('questions')->order_by('users.id','desc')->join('users', 'questions.user_id =users.id')->where('questions.id',$id)->get();

		$data['question'] = $query->result_array();

		$query=  $this->db->select('*')->from('answer')->order_by('answer.id','desc')->join('users', 'answer.user_id =users.id')->where('answer.question_id',$id)->get();
		$data['answers'] = $query->result_array();
		
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/question_details', $data);
		$this->load->view('admin/inc/footer');
	}

	public function reject_question($id)
	{
		$this->db->set('reject',1);
		$this->db->where('id',$id);
		$this->db->update('questions');
		$msg='<div class="alert alert-success">Question marked as rejected!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}





	public function rejected_questions()
	{

		$data['questions'] = $this->db->select('*')->from('questions')->where('reject',1)->get()->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/rejected_questions', $data);
		$this->load->view('admin/inc/footer');
	}





	public function user_message()
	{
		$data['messages'] = $this->db->select('*')->from('contact')->order_by('id','desc')->get()->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/user_message', $data);
		$this->load->view('admin/inc/footer');
	}

	public function delete_message($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('contact');
		$msg='<div class="alert alert-success">Message deleted successfully!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function unblock_user($id)
	{
		$this->db->set('block',0);
		$this->db->where('id',$id);
		$this->db->update('users');
		$msg='<div class="alert alert-success">user Removed From block List!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function archive_user($id)

	{
		$this->db->set('archive',1);
		$this->db->where('id',$id);
		$this->db->update('users');
		$msg='<div class="alert alert-success">user Marked As Archived!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function unarchive_user($id)

	{
		$this->db->set('archive',0);
		$this->db->where('id',$id);
		$this->db->update('users');
		$msg='<div class="alert alert-success">user Removed From Archived List!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function yard_list($id)
	{

		$data['users'] = $this->db->select('*')->from('users')->where('id',$id)->get()->result_array();
		$data['yards'] = $this->db->select('*')->from('yard')->where('user_id',$id)->get()->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/yard_list', $data);
		$this->load->view('admin/inc/footer');
	}

	public function add_yard($id)
	{

		$this->form_validation->set_rules('yard_address', 'Yard address', 'required');
		$this->form_validation->set_rules('yard_phone_number', 'Yard Phone number', 'required');



		if ($this->form_validation->run() == FALSE)
		{ 
			$this->load->view('admin/inc/header');
			$this->load->view('admin/inc/navbar');
			$this->load->view('admin/add_yard');
			$this->load->view('admin/inc/footer');


		} else{


			$data['user_id'] = $id;
			$data['yard_address'] = $this->input->post('yard_address');
			$data['yard_phone_number'] = $this->input->post('yard_phone_number');
			
			$this->db->insert('yard', $data);



			$msg = '<div class="alert alert-success">Yard Added successfully.</div>';

			$this->session->set_flashdata('message', $msg);

			redirect($_SERVER['HTTP_REFERER']);

		}
	}



	public function update_yard($id)
	{

		$this->form_validation->set_rules('yard_address', 'Yard address', 'required');
		$this->form_validation->set_rules('yard_phone_number', 'Yard Phone number', 'required');

		if ($this->form_validation->run() == FALSE)
		{ 
			$msg = '<div class="alert alert-danger">All fields are required</div>';

			$this->session->set_flashdata('message', $msg);
			redirect($_SERVER['HTTP_REFERER']);;

		} else{

			$data['yard_address'] = $this->input->post('yard_address');
			$data['yard_phone_number'] = $this->input->post('yard_phone_number');
			$this->db->where('id', $id);
			$this->db->update('yard', $data);

			$msg = '<div class="alert alert-success">Yard Updated successfully.</div>';

			$this->session->set_flashdata('message', $msg);

			redirect($_SERVER['HTTP_REFERER']);

		}
	}

	public function add_user()
	{
		$this->form_validation->set_rules('company_name', 'Company name', 'required');
		$this->form_validation->set_rules('company_address', 'Company address', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone number', 'required');
		$this->form_validation->set_rules('user_name', 'user name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('account_payable_email', 'Account payable email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');



		if ($this->form_validation->run() == FALSE)
		{ 
			$this->load->view('admin/inc/header');
			$this->load->view('admin/inc/navbar');
			$this->load->view('admin/add_user');
			$this->load->view('admin/inc/footer');


		} else{

			$data['company_name'] = $this->input->post('company_name');
			$data['company_address'] = $this->input->post('company_address');
			$data['phone_number'] = $this->input->post('phone_number');
			$data['user_name'] = $this->input->post('user_name');
			$data['email'] = $this->input->post('email');
			$data['account_payable_email'] = $this->input->post('account_payable_email');
			$data['password'] = md5($this->input->post('password'));


			if($_FILES && $_FILES['company_logo']['name']){
				
				$config['upload_path'] = './images';
				$config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('company_logo')) {

					
					$this->session->set_flashdata('message', $this->upload->display_errors());
					redirect($_SERVER['HTTP_REFERER']);
				} else {

					$avatar = $this->upload->data();
					$avatar_name = $avatar['file_name'];
					$data['company_logo']=$avatar_name;

					$config['image_library'] = 'gd2';
					$config['source_image'] = 'images/'.$data['company_logo'].'';
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = FALSE;
					$config['quality'] = '100%';

				}

				$this->load->library('image_lib',$config);

		
			} 
			
			$this->db->insert('users', $data);



			$msg = '<div class="alert alert-success">user Created successfully</div>';

			$this->session->set_flashdata('message', $msg);

			redirect($_SERVER['HTTP_REFERER']);

		}
	}


	public function vehicles()
	{
		
		
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/vehicles');
		$this->load->view('admin/inc/footer');

	}


	public function vehicle_list($pa)
	{
		
		$data['vehicles'] = $this->db->select('*')->from('vehicles')->where('yardStatus', $pa)->get()->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/vehicle_list', $data);
		$this->load->view('admin/inc/footer');

	}



	public function vehicle_details($id)
	{
		
		$data['vehicle'] = $this->db->select('*')->from('vehicles')->where('id', $id)->get()->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/vehicle_details', $data);
		$this->load->view('admin/inc/footer');

	}




	public function vehicle_status($id)
	{
		$yardStatus = $this->input->post('yardStatus');
		$this->db->set('yardStatus', $yardStatus);
		$this->db->where('id',$id);
		$this->db->update('vehicles');
		$msg='<div class="alert alert-success">vehicle status changed successfully!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function archive_vehicle($pa)
	{
		
		$data['vehicles'] = $this->db->select('*')->from('vehicles')->where('claimed',1)->where('accountsR', 'PAID')->get()->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/vehicle_list', $data);
		$this->load->view('admin/inc/footer');

	}

	public function claimed_vehicle($pa)
	{
		
		$data['vehicles'] = $this->db->select('*')->from('vehicles')->where('claimed',1)->get()->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/vehicle_list', $data);
		$this->load->view('admin/inc/footer');

	}

	public function vehicle_unclaimed($id)
	{
		$this->db->set('claimed',0);
		$this->db->where('id',$id);
		$this->db->update('vehicles');
		$msg='<div class="alert alert-success">Vehicle marked as Unclaimed!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function vehicle_claimed($id)
	{
		$this->db->set('claimed',1);
		$this->db->where('id',$id);
		$this->db->update('vehicles');
		$msg='<div class="alert alert-success">Vehicle marked as Claimed!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function vehicle_unpaid($id)
	{
		$this->db->set('accountsR',"UNPAID");
		$this->db->where('id',$id);
		$this->db->update('vehicles');
		$msg='<div class="alert alert-success">Vehicle marked as UNPAID!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function vehicle_paid($id)
	{
		$this->db->set('accountsR',"PAID");
		$this->db->where('id',$id);
		$this->db->update('vehicles');
		$msg='<div class="alert alert-success">Vehicle marked as PAID!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function delete_yard($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('yard');
		$msg='<div class="alert alert-success">Yard removed successfully!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function Subscribers()
	{
		

		$data['users'] = $this->db->select('*')->from('users')->where('type', 'subscriber')->get()->result_array();
		
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/subscribers', $data);
		$this->load->view('admin/inc/footer');

	}


	public function service_needed()
	{
		

		$data['users'] = $this->db->select('*')->from('users')->where('type', 'service')->get()->result_array();
		
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/service_needed', $data);
		$this->load->view('admin/inc/footer');

	}

}