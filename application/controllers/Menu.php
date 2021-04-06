<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required|trim|is_unique[user_menu.menu]', [
            'required' => 'Nama Menu Kosong!',
            'is_unique' => 'Menu Sudah Ada!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('temp/header', $data);
            $this->load->view('temp/sidebar', $data);
            $this->load->view('temp/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('temp/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu baru ditambahkan</div>');
            redirect('menu');
        }
    }

    public function editMenu($id)
    {
        $data['title'] = 'Edit Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();
        $this->form_validation->set_rules(
            'menu',
            'Menu',
            'required|trim',
            [
                'required' => 'Nama Menu Kosong!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('temp/header', $data);
            $this->load->view('temp/sidebar', $data);
            $this->load->view('temp/topbar', $data);
            $this->load->view('menu/edit-menu', $data);
            $this->load->view('temp/footer');
        } else {
            $menu = $this->input->post('menu');
            $this->db->set('menu', $menu);
            $this->db->where('id', $id);
            $this->db->update('user_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu anda telah di Update!</div>');
            redirect('menu');
        }
    }

    public function hapusMenu($id)
    {
        $data['user_menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();

        $this->db->where('id', $id);
        $this->db->delete('user_menu');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu anda telah di hapus!</div>');
        redirect('menu');
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required|trim|is_unique[user_sub_menu.title]', [
            'required' => 'Title Submenu Kosong!',
            'is_unique' => 'Submenu Sudah Ada!'
        ]);
        $this->form_validation->set_rules('menu_id', 'Menu', 'required', [
            'required' => 'ID Menu Kosong!'
        ]);
        $this->form_validation->set_rules('url', 'URL', 'required|trim', [
            'required' => 'URL Menu Kosong!'
        ]);
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim', [
            'required' => 'Class Icon Menu Kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('temp/header', $data);
            $this->load->view('temp/sidebar', $data);
            $this->load->view('temp/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('temp/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu baru ditambahkan</div>');
            redirect('menu/submenu');
        }
    }

    public function editSubmenu($id)
    {
        $data['title'] = 'Edit Submenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['user_sub_menu'] = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required|trim', [
            'required' => 'Title Submenu Kosong!'
        ]);
        $this->form_validation->set_rules('menu_id', 'Menu', 'required', [
            'required' => 'ID Menu Kosong!'
        ]);
        $this->form_validation->set_rules('url', 'URL', 'required|trim', [
            'required' => 'URL Menu Kosong!'
        ]);
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim', [
            'required' => 'Class Icon Menu Kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('temp/header', $data);
            $this->load->view('temp/sidebar', $data);
            $this->load->view('temp/topbar', $data);
            $this->load->view('menu/edit-submenu', $data);
            $this->load->view('temp/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->where('id', $id);
            $this->db->update('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu anda telah di Update!</div>');
            redirect('menu/submenu/');
        }
    }

    public function hapusSubmenu($id)
    {
        $data['user_sub_menu'] = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();

        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu anda telah di hapus!</div>');
        redirect('menu/submenu/');
    }
}
