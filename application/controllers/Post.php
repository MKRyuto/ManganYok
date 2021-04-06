<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Report';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Report_model', 'report');

        $data['subReport'] = $this->report->getsubReport();
        $data['report'] = $this->db->get('report')->result_array();

        $this->load->view('temp/header', $data);
        $this->load->view('temp/sidebar', $data);
        $this->load->view('temp/topbar', $data);
        $this->load->view('post/index', $data);
        $this->load->view('temp/footer');
    }

    public function terimaPost($id_terima)
    {
        $this->db->get_where('report', ['id' => $id_terima])->row_array();


        $this->db->set('status', 1);
        $this->db->where('id', $id_terima);
        $this->db->update('report');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Report di terima</div>');
        redirect('post');
    }

    public function hapusPost($delete_id)
    {
        $this->db->get_where('report', ['id' => $delete_id])->row_array();

        $this->db->where('id', $delete_id);
        $this->db->delete('report');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus Report Sukses !</div>');
        redirect('post');
    }

    public function tipe()
    {
        $data['title'] = 'Tipe Masakan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['tipe'] = $this->db->get('tipe_masakan')->result_array();

        $this->form_validation->set_rules('tipe', 'Tipe', 'required|trim|is_unique[tipe_masakan.tipe]', [
            'required' => 'Nama Tipe Masakan Kosong!',
            'is_unique' => 'Nama Tipe Masakan Ada!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('temp/header', $data);
            $this->load->view('temp/sidebar', $data);
            $this->load->view('temp/topbar', $data);
            $this->load->view('post/tipe', $data);
            $this->load->view('temp/footer');
        } else {
            $this->db->insert('tipe_masakan', ['tipe' => $this->input->post('tipe')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tipe Masakan baru ditambahkan</div>');
            redirect('post/tipe');
        }
    }

    public function editTipe($id)
    {
        $data['title'] = 'Edit Tipe Masakan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tipe'] = $this->db->get_where('tipe_masakan', ['id' => $id])->row_array();
        $this->form_validation->set_rules(
            'tipe',
            'Tipe',
            'required|trim',
            [
                'required' => 'Nama Tipe Masakan Kosong!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('temp/header', $data);
            $this->load->view('temp/sidebar', $data);
            $this->load->view('temp/topbar', $data);
            $this->load->view('post/edit-tipe', $data);
            $this->load->view('temp/footer');
        } else {
            $tipe = $this->input->post('tipe');
            $this->db->set('tipe', $tipe);
            $this->db->where('id', $id);
            $this->db->update('tipe_masakan');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tipe Masakan anda telah di Update!</div>');
            redirect('post/tipe');
        }
    }

    public function hapusTipe($id)
    {
        $data['tipe'] = $this->db->get_where('tipe_masakan', ['id' => $id])->row_array();

        $this->db->where('id', $id);
        $this->db->delete('tipe_masakan');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tipe Masakan anda telah di hapus!</div>');
        redirect('post/tipe');
    }
}
