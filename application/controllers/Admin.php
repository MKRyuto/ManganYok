<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Laporan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Report_model', 'laporan');

        $data['subLaporan'] = $this->laporan->getsubLaporan();
        $data['report'] = $this->db->get('report')->result_array();

        $this->load->view('temp/header', $data);
        $this->load->view('temp/sidebar', $data);
        $this->load->view('temp/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('temp/footer');
    }

    public function hapusPost($delete_id)
    {
        $this->db->get_where('report', ['id' => $delete_id])->row_array();

        $this->db->where('id', $delete_id);
        $this->db->delete('report');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus Laporan Sukses !</div>');
        redirect('admin/user');
    }

    public function user()
    {
        $data['title'] = 'User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->db->get_where('user', ['role_id' => 3])->result_array();

        $this->load->view('temp/header', $data);
        $this->load->view('temp/sidebar', $data);
        $this->load->view('temp/topbar', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('temp/footer');
    }

    public function deleteUsers($delete_id)
    {
        $this->db->get_where('user', ['id' => $delete_id])->row_array();

        $this->db->where('id', $delete_id);
        $this->db->delete('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus Akun Sukses !</div>');
        redirect('admin/user');
    }

    public function post()
    {
        $data['title'] = 'Post';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Post_model', 'post');

        $data['subPost'] = $this->post->getsubPost();
        $data['post'] = $this->db->get('post')->result_array();

        $this->load->view('temp/header', $data);
        $this->load->view('temp/sidebar', $data);
        $this->load->view('temp/topbar', $data);
        $this->load->view('admin/post', $data);
        $this->load->view('temp/footer');
    }

    public function deletePost($delete_id)
    {
        $this->db->get_where('post', ['id' => $delete_id])->row_array();

        $this->db->where('id', $delete_id);
        $this->db->delete('post');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menghapus Post Sukses !</div>');
        redirect('admin/post');
    }
}
