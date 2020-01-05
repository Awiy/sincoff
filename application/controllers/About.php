<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        
    }

	public function index()
	{
        $data['title'] = 'About us';
        $data['icon']= $this->db->get_where('user_sub_menu', ['title' => $data['title']])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('about/index', $data);
        $this->load->view('template/footer');
    }
}