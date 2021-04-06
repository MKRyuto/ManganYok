<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['post'] = $this->db->get_where('post', ['id_user' => $data['user']['id']])->num_rows();
        $this->load->view('temp/header', $data);
        $this->load->view('temp/sidebar', $data);
        $this->load->view('temp/topbar', $data);
        $this->load->view('account/index', $data);
        $this->load->view('temp/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules(
            'name',
            'Name',
            'required|trim',
            [
                'required' => 'Nama Kosong!'
            ]
        );
        $this->form_validation->set_rules(
            'text',
            'Text',
            'required|trim',
            [
                'required' => 'Deskripsi Kosong!'
            ]
        );
        $this->form_validation->set_rules(
            'sosmed',
            'Sosmed',
            'required|trim',
            [
                'required' => 'Sosial Media Kosong!'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('temp/header', $data);
            $this->load->view('temp/sidebar', $data);
            $this->load->view('temp/topbar', $data);
            $this->load->view('account/edit', $data);
            $this->load->view('temp/footer');
        } else {
            $email = $this->input->post('email');

            //Cek Gambar yang akan di Upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '4048';
                $config['upload_path'] = './assets/img/profile/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                }
            }

            $data = [
                'name' => $this->input->post('name'),
                'text' => $this->input->post('text'),
                'sosmed' => $this->input->post('sosmed'),
                'profesi' => $this->input->post('profesi'),
                'telp' => $this->input->post('telp')
            ];
            $this->db->where('email', $email);
            $this->db->update('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile anda telah di Update!</div>');
            redirect('account');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules(
            'current_password',
            'Current_password',
            'required|trim',
            [
                'required' => 'Password Kosong!'
            ]
        );
        $this->form_validation->set_rules('new_password1', 'Password', 'required|trim|min_length[6]|matches[new_password2]', [
            'required' => 'Password Kosong!',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);

        $this->form_validation->set_rules('new_password2', 'Password', 'required|trim|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('temp/header', $data);
            $this->load->view('temp/sidebar', $data);
            $this->load->view('temp/topbar', $data);
            $this->load->view('account/changepassword', $data);
            $this->load->view('temp/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Sebelumnya Salah!</div>');
                redirect('account/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Tidak Boleh Sama!</div>');
                    redirect('account/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password telah diganti!</div>');
                    redirect('account/changepassword');
                }
            }
        }
    }
}
