<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {


	public function index()
	{

	$data['users']=  $this->db->select('*')->from('users')->order_by('id','desc')->limit(10)->get()->result_array();

	$data['total_products']=  $this->db->select('id')->from('products')->get()->num_rows();
	$data['total_categories']=  $this->db->select('id')->from('categories')->get()->num_rows();
	$data['total_orders']=  $this->db->select('id')->from('orders')->get()->num_rows();
	$data['total_contact']=  $this->db->select('id')->from('contact')->get()->num_rows();
	$data['total_users']=  $this->db->select('id')->from('users')->get()->num_rows();

			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/admin_dashboard', $data);
			$this->load->view('admin/footer');
	}

}