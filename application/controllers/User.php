<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
	}

	public function index()
	{
		$data['title'] = 'ManganYok';
		$this->load->model('Post_model');
		$data['baru'] = $this->Post_model->get_post_baru();
		$data['rek'] = $this->Post_model->get_post_rekomendasi();
		if ($this->session->userdata('email') !=  NULL) {
			is_logged_in();
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('temp/post_header', $data);
			$this->load->view('user/index', $data);
			$this->load->view('temp/post_footer');
		} else {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('temp/post_header_guest', $data);
			$this->load->view('user/index', $data);
			$this->load->view('temp/post_footer');
		}
	}

	public function postingan($id_post)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Post_model');
		$data['post'] = $this->Post_model->get_postingan_list($id_post);
		$asal = $data['post']['asal_masakan'];
		$tipe = $data['post']['id_tipe'];
		$data['populer'] = $this->Post_model->get_postingan_populer();
		$data['recent'] = $this->Post_model->get_postingan_recent($asal, $tipe);
		$data['tipe'] = $this->db->get('tipe_masakan')->result_array();
		$data['title'] = $data['post']['title'];
		//load library disqus
		$this->load->library('disqus');
		if ($data['user']['id'] != $data['post']['id_user']) {
			$view = $data['post']['pengunjung'] + 1;
			$this->db->set('pengunjung', $view);
			$this->db->where('id', $id_post);
			$this->db->update('post');
		}
		//membuat variabel disqus
		$data['disqus'] = $this->disqus->get_html();
		if ($this->session->userdata('email') !=  NULL) {
			is_logged_in();
			$this->load->view('temp/post_header', $data);
			$this->load->view('user/postingan', $data);
			$this->load->view('temp/post_footer');
		} else {
			$this->load->view('temp/post_header_guest', $data);
			$this->load->view('user/postingan', $data);
			$this->load->view('temp/post_footer');
		}
	}

	public function post()
	{
		is_logged_in();
		$data['title'] = 'Buat Post';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('Post_model', 'post');

		$data['postSub'] = $this->post->getsubPost();
		$data['tipe'] = $this->db->get('tipe_masakan')->result_array();

		$this->form_validation->set_rules(
			'title',
			'Title',
			'required|trim',
			[
				'required' => 'Judul Kosong!'
			]
		);
		$this->form_validation->set_rules(
			'id_tipe',
			'Id_tipe',
			'required|trim',
			[
				'required' => 'Tipe Masakan Kosong!'
			]
		);

		$this->form_validation->set_rules(
			'asal_masakan',
			'Asal_masakan',
			'required|trim',
			[
				'required' => 'Asal Masakan Kosong!'
			]
		);

		$this->form_validation->set_rules(
			'deskripsi',
			'Deskripsi',
			'required|trim',
			[
				'required' => 'Deskripsi Kosong!'
			]
		);

		$this->form_validation->set_rules(
			'metode',
			'Metode',
			'required|trim',
			[
				'required' => 'Metode Kosong!'
			]
		);

		$this->form_validation->set_rules(
			'bahan',
			'Bahan',
			'required|trim',
			[
				'required' => 'Bahan Kosong!'
			]
		);
		if ($this->form_validation->run() == false) {
			$this->load->view('temp/post_header', $data);
			$this->load->view('user/buat-post', $data);
			$this->load->view('temp/post_footer');
		} else {
			$upload_image = $_FILES['gambar1']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4048';
				$config['upload_path'] = './assets/dmb/img/post/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar1')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar_1', $new_image);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
				}
			}

			$upload_image = $_FILES['gambar2']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4048';
				$config['upload_path'] = './assets/dmb/img/post/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar2')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar_2', $new_image);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
				}
			}

			$upload_image = $_FILES['gambar3']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4048';
				$config['upload_path'] = './assets/dmb/img/post/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar3')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar_3', $new_image);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
				}
			}

			$data = [
				'id_user' => $data['user']['id'],
				'title' => $this->input->post('title'),
				'youtube' => $this->input->post('youtube'),
				'pengunjung' => 0,
				'id_tipe' => $this->input->post('id_tipe'),
				'asal_masakan' => $this->input->post('asal_masakan'),
				'deskripsi' => $this->input->post('deskripsi'),
				'metode' => $this->input->post('metode'),
				'bahan' => $this->input->post('bahan'),
				'nutrisi' => $this->input->post('nutrisi'),
				'date_created' => time()
			];
			$this->db->insert('post', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Post baru ditambahkan</div>');
			redirect('user/lihatpost');
		}
	}

	public function lihatpost()
	{
		is_logged_in();
		$data['title'] = 'Lihat Post';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $data['user']['id'];
		$this->load->model('Post_model');
		$data['model'] = $this->Post_model->get_post_list($id);
		$data['tipe'] = $this->db->get('tipe_masakan')->result_array();
		$this->load->view('temp/post_header', $data);
		$this->load->view('user/lihat-post', $data);
		$this->load->view('temp/post_footer');
	}

	public function editPost($id)
	{
		is_logged_in();
		$data['title'] = 'Edit Post';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('Post_model', 'post');

		$data['post'] = $this->db->get_where('post', ['id' => $id])->row_array();
		$data['postSub'] = $this->post->getsubPost();
		$data['tipe'] = $this->db->get('tipe_masakan')->result_array();

		$this->form_validation->set_rules(
			'title',
			'Title',
			'required|trim',
			[
				'required' => 'Judul Kosong!'
			]
		);
		$this->form_validation->set_rules(
			'youtube',
			'Youtube',
			'required|trim',
			[
				'required' => 'Link Youtube Kosong!'
			]
		);
		$this->form_validation->set_rules(
			'id_tipe',
			'Id_tipe',
			'required|trim',
			[
				'required' => 'Tipe Masakan Kosong!'
			]
		);

		$this->form_validation->set_rules(
			'asal_masakan',
			'Asal_masakan',
			'required|trim',
			[
				'required' => 'Asal Masakan Kosong!'
			]
		);

		$this->form_validation->set_rules(
			'deskripsi',
			'Deskripsi',
			'required|trim',
			[
				'required' => 'Deskripsi Kosong!'
			]
		);

		$this->form_validation->set_rules(
			'metode',
			'Metode',
			'required|trim',
			[
				'required' => 'Metode Kosong!'
			]
		);

		$this->form_validation->set_rules(
			'bahan',
			'Bahan',
			'required|trim',
			[
				'required' => 'Bahan Kosong!'
			]
		);

		$this->form_validation->set_rules(
			'nutrisi',
			'Nutrisi',
			'required|trim',
			[
				'required' => 'Nutrisi Kosong Masakan Kosong!'
			]
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('temp/post_header', $data);
			$this->load->view('user/edit-post', $data);
			$this->load->view('temp/post_footer');
		} else {
			$upload_image = $_FILES['gambar1']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4048';
				$config['upload_path'] = './assets/dmb/img/post/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar1')) {
					$old_image = $data['post']['gambar_1'];
					if ($old_image != 'default.png') {
						unlink(FCPATH . 'assets/dmb/img/post/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar_1', $new_image);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
				}
			}

			$upload_image = $_FILES['gambar2']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4048';
				$config['upload_path'] = './assets/dmb/img/post/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar2')) {
					$old_image = $data['post']['gambar_2'];
					if ($old_image != 'default.png') {
						unlink(FCPATH . 'assets/dmb/img/post/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar_2', $new_image);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
				}
			}

			$upload_image = $_FILES['gambar3']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '4048';
				$config['upload_path'] = './assets/dmb/img/post/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar3')) {
					$old_image = $data['post']['gambar_3'];
					if ($old_image != 'default.png') {
						unlink(FCPATH . 'assets/dmb/img/post/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar_3', $new_image);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
				}
			}

			$data = [
				'id_user' => $data['user']['id'],
				'title' => $this->input->post('title'),
				'youtube' => $this->input->post('youtube'),
				'id_tipe' => $this->input->post('id_tipe'),
				'asal_masakan' => $this->input->post('asal_masakan'),
				'deskripsi' => $this->input->post('deskripsi'),
				'metode' => $this->input->post('metode'),
				'bahan' => $this->input->post('bahan'),
				'nutrisi' => $this->input->post('nutrisi'),
			];
			$this->db->where('id', $id);
			$this->db->update('post', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Post baru ditambahkan</div>');
			redirect('user/lihatpost');
		}
	}

	public function hapusPost($delete_id)
	{
		is_logged_in();
		$this->db->get_where('post', ['id' => $delete_id])->row_array();

		$this->db->where('id', $delete_id);
		$this->db->delete('post');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menghapus Post Sukses !</div>');
		redirect('user/lihatpost');
	}

	public function laporan($id)
	{
		is_logged_in();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data = [
			'id_user' => $data['user']['id'],
			'id_post' => $id,
			'laporan' => $this->input->post('report'),
			'date_created' => time()
		];
		$this->db->insert('report', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Laporan telah ditambahkan</div>');
		redirect('user/postingan/' . $id);
	}

	function cetakResep($id_post)
	{
		$dompdf = new Dompdf();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Post_model');
		$data['post'] = $this->Post_model->get_postingan_list($id_post);
		$data['tipe'] = $this->db->get('tipe_masakan')->result_array();
		$data['title'] = $data['post']['title'];

		$html = $this->load->view("user/cetak-resep", $data, true);

		$dompdf->load_html($html);


		// Mengatus Ukuran Kertas dan Orientasi Paper 	
		$dompdf->set_paper('A4', 'landscape');
		// Render dari HTML ke PDF
		$dompdf->render();
		// Membuat File PDF
		$pdf = $dompdf->output();
		// output Rander sebelumnya ke Browser
		$dompdf->stream($data['post']['title'] . '.pdf', array("Attachment" => false));
	}

	public function faqs()
	{
		$data['title'] = 'FAQs';
		if ($this->session->userdata('email') !=  NULL) {
			is_logged_in();
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('temp/post_header', $data);
			$this->load->view('user/faqs', $data);
			$this->load->view('temp/post_footer');
		} else {
			$this->load->view('temp/post_header_guest', $data);
			$this->load->view('user/faqs', $data);
			$this->load->view('temp/post_footer');
		}
	}

	public function ketentuan()
	{
		$data['title'] = 'Syarat dan Ketentuan';
		if ($this->session->userdata('email') !=  NULL) {
			is_logged_in();
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('temp/post_header', $data);
			$this->load->view('user/ketentuan', $data);
			$this->load->view('temp/post_footer');
		} else {
			$this->load->view('temp/post_header_guest', $data);
			$this->load->view('user/ketentuan', $data);
			$this->load->view('temp/post_footer');
		}
	}


	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['key'] = $keyword;
		$data['title'] = 'Pencarian ' . $keyword;
		$this->load->model('Post_model');
		$data['model'] = $this->Post_model->get_search_list($keyword);
		$data['tipe'] = $this->db->get('tipe_masakan')->result_array();
		if ($this->session->userdata('email') !=  NULL) {
			is_logged_in();
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('temp/post_header', $data);
			$this->load->view('user/search', $data);
			$this->load->view('temp/post_footer');
		} else {
			$this->load->view('temp/post_header_guest', $data);
			$this->load->view('user/search', $data);
			$this->load->view('temp/post_footer');
		}
	}

	public function filter()
	{
		$data['title'] = 'Filter';
		$this->load->model('Post_model');
		$data['rek'] = $this->Post_model->get_post_rekomendasi();
		$data['baru'] = $this->Post_model->get_post_baru();
		$data['tipe'] = $this->db->get('tipe_masakan')->result_array();
		$data['asal'] = $this->Post_model->get_asal();
		if ($this->session->userdata('email') !=  NULL) {
			is_logged_in();
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('temp/post_header', $data);
			$this->load->view('user/filter', $data);
			$this->load->view('temp/post_footer');
		} else {
			$this->load->view('temp/post_header_guest', $data);
			$this->load->view('user/filter', $data);
			$this->load->view('temp/post_footer');
		}
	}

	public function resultFilter()
	{
		$data['title'] = 'Hasil Filter';
		$tipe = $this->input->post('tipe');
		$asal = $this->input->post('asal');
		$view = $this->input->post('view');
		$this->load->model('Post_model');
		$data['model'] = $this->Post_model->get_filter_list($tipe, $asal, $view);
		if ($this->session->userdata('email') !=  NULL) {
			is_logged_in();
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('temp/post_header', $data);
			$this->load->view('user/filter_result', $data);
			$this->load->view('temp/post_footer');
		} else {
			$this->load->view('temp/post_header_guest', $data);
			$this->load->view('user/filter_result', $data);
			$this->load->view('temp/post_footer');
		}
	}
}
