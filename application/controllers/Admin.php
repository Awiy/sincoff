<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Admin extends CI_Controller 
{
    // controler helper untuk mencegah akses annymous
    public function __construct()
    {
        parent::__construct();
        redSessions();

    }

    public function index ()
    {
        $data['title'] = 'Admin Dashboard';
        $data['icon']= $this->db->get_where('user_sub_menu', ['title' => $data['title']])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }

    public function role ()
    {
        $data['title'] = 'Role';
        $data['icon']= $this->db->get_where('user_sub_menu', ['title' => $data['title']])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('template/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >New role has been add</div>');
            redirect('admin/role');
        }

    }

    public function roleAccess ($role_id)
    {
        $data['title'] = 'Role Access';
        $data['icon']= $this->db->get_where('user_sub_menu', ['title' => $data['title']])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('template/footer');
    }

    public function changeAccess ()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);
        if($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed..!</div>');
    }

    public function roleedit ($role_id)
    {
        $data['title'] = 'Rename Role';
        $data['icon']= null;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->form_validation->set_rules('confirmcechk', 'Confirm', 'required');
        $this->form_validation->set_rules('roleedit', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('admin/roleedit', $data);
            $this->load->view('template/footer');
        } else {
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_role', ['role' => $this->input->post('roleedit')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Role has been rename</div>');
            redirect('admin/role');
        }
        

    }

    public function delete ($role_id)
    {
        $this->db->delete('user_role', array('id' => $role_id));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Role has been delete</div>');
        redirect('admin/role');
    }
}