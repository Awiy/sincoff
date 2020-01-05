<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Menu extends CI_Controller 
{
    // controler helper untuk mencegah akses annymous
    public function __construct()
    {
        parent::__construct();
        redSessions();
    }

    public function index ()
    {
        $data['title'] = 'Menu Management';
        $data['icon']= $this->db->get_where('user_sub_menu', ['title' => $data['title']])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('template/footer');
        } else {
            $data  =[
                'menu' => $this->input->post('menu'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >New menu has been add</div>');
            redirect('menu');
        }
    }

    public function editMenu ($m_id)
    {
        $data['title'] = 'edit menu';
        $data['icon']= null;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get_where('user_menu',['id' => $m_id])->row_array();
        $this->form_validation->set_rules('menuedit', 'Menu name', 'required');
        $this->form_validation->set_rules('is_active', 'Activated choise', 'required');
        $this->form_validation->set_rules('confirmcechk', 'Confirm', 'required');
        
        if ($this->form_validation->run() == false) {
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/editmenu', $data);
        $this->load->view('template/footer');
        } else {
            $data  =[
                'menu' => $this->input->post('menuedit'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Menu has been up date</div>');
            redirect('menu');
        }
    }

    public function deletemenu ($m_id)
    {
        $this->db->delete('user_menu', array('id' => $m_id));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >Menu has been delete</div>');
        redirect('menu/index');
    }

     public function submenu ()
    {
        $data['title'] = 'Submenu Management';
        $data['icon']= $this->db->get_where('user_sub_menu', ['title' => $data['title']])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubmenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('template/footer');
        } else {
            $data  =[
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >New sub menu has been add</div>');
            redirect('menu/submenu');
        }
        
    }

    public function subEdit ($sm_id)
    {
        $data['title'] ='Sub menu edit page';
        $data['icon']= null;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->db->get_where('user_sub_menu',['id' => $sm_id])->row_array();
        $this->form_validation->set_rules('title', 'Menu name', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('url', 'Menu name', 'required');
        $this->form_validation->set_rules('is_active', 'Activated choise', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu page', 'required');
        $this->form_validation->set_rules('confirmcechk', 'Confirm', 'required');
        
        if ($this->form_validation->run() == false) {
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/editsubmenu', $data);
        $this->load->view('template/footer');
        } else {
            $data  =[
                'menu_id' => $this->input->post('menu_id'),
                'title' => $this->input->post('title'),
                'icon' => $this->input->post('icon'),
                'url' => $this->input->post('url'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >One menu has been up date</div>');
            redirect('menu/submenu');
        }
    }

    public function subdelete ($sm_id)
    {
        $this->db->delete('user_sub_menu', array('id' => $sm_id));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >Menu has been delete</div>');
        redirect('menu/submenu');
    }




}