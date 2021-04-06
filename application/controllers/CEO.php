<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CEO extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required|trim|is_unique[user_role.role]', [
            'required' => 'Nama Role Kosong!',
            'is_unique' => 'Role Sudah Ada!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('temp/header', $data);
            $this->load->view('temp/sidebar', $data);
            $this->load->view('temp/topbar', $data);
            $this->load->view('ceo/role', $data);
            $this->load->view('temp/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role baru ditambahkan</div>');
            redirect('CEO/role');
        }
    }

    public function editRole($id)
    {
        $data['title'] = 'Edit Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_role'] = $this->db->get_where('user_role', ['id' => $id])->row_array();
        $this->form_validation->set_rules(
            'role',
            'Role',
            'required|trim',
            [
                'required' => 'Nama Kosong Kosong!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('temp/header', $data);
            $this->load->view('temp/sidebar', $data);
            $this->load->view('temp/topbar', $data);
            $this->load->view('ceo/edit-role', $data);
            $this->load->view('temp/footer');
        } else {
            $role = $this->input->post('role');
            $this->db->set('role', $role);
            $this->db->where('id', $id);
            $this->db->update('user_role');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role anda telah di Update!</div>');
            redirect('CEO/role');
        }
    }

    public function hapusRole($id)
    {
        $this->db->get_where('user_role', ['id' => $id])->row_array();

        $this->db->where('id', $id);
        $this->db->delete('user_role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role anda telah di hapus!</div>');
        redirect('CEO/role');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('temp/header', $data);
        $this->load->view('temp/sidebar', $data);
        $this->load->view('temp/topbar', $data);
        $this->load->view('ceo/role-access', $data);
        $this->load->view('temp/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akes diganti!</div>');
    }

    public function promotion()
    {
        $data['title'] = 'Promotion';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->db->get_where('user', ['role_id' => 3])->result_array();

        $this->load->view('temp/header', $data);
        $this->load->view('temp/sidebar', $data);
        $this->load->view('temp/topbar', $data);
        $this->load->view('ceo/promotion', $data);
        $this->load->view('temp/footer');
    }

    public function promotionUsers($promotion_id)
    {
        $this->db->get_where('user', ['id' => $promotion_id])->row_array();


        $this->db->set('role_id', 2);
        $this->db->where('id', $promotion_id);
        $this->db->update('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Promosi Sukses !</div>');
        redirect('CEO/promotion');
    }

    public function admin()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['admin'] = $this->db->get_where('user', ['role_id' => 2])->result_array();

        $this->load->view('temp/header', $data);
        $this->load->view('temp/sidebar', $data);
        $this->load->view('temp/topbar', $data);
        $this->load->view('ceo/admin', $data);
        $this->load->view('temp/footer');
    }

    public function deleteAdmin($delete_id)
    {
        $this->db->get_where('user', ['id' => $delete_id])->row_array();


        $this->db->set('role_id', 3);
        $this->db->where('id', $delete_id);
        $this->db->update('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus admin Sukses !</div>');
        redirect('CEO/admin');
    }
}
