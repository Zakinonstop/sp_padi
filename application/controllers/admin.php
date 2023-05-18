<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->model('model_login');

		$this->load->model('model_admin');

		$id_admin = $this->session->userdata('id_admin');

		$this->db->where('id_admin', $id_admin);
		$db = $this->db->get('admin')->row();

		if (!$this->session->userdata('id_admin') == TRUE) {
			redirect('auth');
		}
	}
	public function index()
	{

		$id_admin = $this->session->userdata('id_admin');

		$db = $this->model_admin->get_admin($id_admin)->row();
		$data['nama_admin'] = $db->nama_admin;
		$data['gejala'] = $this->model_admin->get_all_gejala()->num_rows();
		$data['penyakit'] = $this->model_admin->get_all_penyakit()->num_rows();

		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/dashboard_admin', $data);
		$this->load->view('admin/footer');
	}

	public function profile()
	{

		$id_admin = $this->session->userdata('id_admin');

		$db = $this->model_admin->get_admin($id_admin)->row();
		$data['nama_admin'] = $db->nama_admin;

		$data['admin'] = $this->model_admin->get_admin($id_admin)->result_array();


		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/profile', $data);
		$this->load->view('admin/footer');
	}

	public function edit_admin()
	{

		$delete = $this->model_admin->edit_admin();

		if ($delete['result'] == 'success') {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Data Profile Success!
			</div>
			');
			redirect('admin/profile');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Profile Failed!
			</div>
			');
			redirect('admin/profile');
		}
	}


	public function gejala()
	{

		$id_admin = $this->session->userdata('id_admin');

		$db = $this->model_admin->get_admin($id_admin)->row();
		$data['nama_admin'] = $db->nama_admin;
		$data['gejala'] = $this->model_admin->get_all_gejala()->result_array();

		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/gejala', $data);
		$this->load->view('admin/footer');
	}

	public function add_gejala()
	{

		$add = $this->model_admin->add_gejala();

		if ($add['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Gejala Success!
			</div>
			');
			redirect('admin/gejala');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Gejala Failed!
			</div>
			');
			redirect('admin/gejala');
		}
	}

	public function delete_gejala()
	{

		$delete = $this->model_admin->delete_gejala();

		if ($delete['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Gejala Success!
			</div>
			');
			redirect('admin/gejala');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Gejala Failed!
			</div>
			');
			redirect('admin/gejala');
		}
	}
	public function edit_gejala()
	{

		$delete = $this->model_admin->edit_gejala();



		if ($delete['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Gejala Success!
			</div>
			');


			redirect('admin/gejala');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Gejala Failed!
			</div>
			');
		}
	}

	public function penyakit()
	{

		$id_admin = $this->session->userdata('id_admin');

		$db = $this->model_admin->get_admin($id_admin)->row();
		$data['nama_admin'] = $db->nama_admin;
		$data['penyakit'] = $this->model_admin->get_all_penyakit()->result_array();

		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/penyakit', $data);
		$this->load->view('admin/footer');
	}

	public function add_penyakit()
	{

		$add = $this->model_admin->add_penyakit();

		if ($add['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Hama Dan Penyakit Success!
			</div>
			');
			redirect('admin/penyakit');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Hama Dan Penyakit Failed!
			</div>
			');
			redirect('admin/penyakit');
		}
	}

	public function delete_penyakit()
	{

		$delete = $this->model_admin->delete_penyakit();

		if ($delete['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Hama Dan Penyakit Success!
			</div>
			');
			redirect('admin/penyakit');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Hama Dan Penyakit Failed!
			</div>
			');
			redirect('admin/penyakit');
		}
	}
	public function edit_penyakit()
	{

		$delete = $this->model_admin->edit_penyakit();



		if ($delete['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Hama Dan Penyakit Success!
			</div>
			');


			redirect('admin/penyakit');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Hama Dan Penyakit Failed!
			</div>
			');
		}
	}

	public function detail_penyakit()
	{

		$id_admin = $this->session->userdata('id_admin');
		$db = $this->model_admin->get_admin($id_admin)->row();
		$data['nama_admin'] = $db->nama_admin;

		$kode_penyakit = $this->uri->segment('3');
		$data['kode_penyakit'] = $kode_penyakit;

		$penyakit = $this->model_admin->get_penyakit($kode_penyakit)->row();
		$data['penyakit'] = $penyakit->penyakit;

		$data['gejala'] = $this->model_admin->get_gejala_penyakit($kode_penyakit)->result_array();
		$data['all_gejala'] = $this->model_admin->get_all_gejala()->result_array();

		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/detail_penyakit', $data);
		$this->load->view('admin/footer');
	}

	public function add_basispengetahuan()
	{

		$kode_penyakit = $this->input->post('kode$kode_penyakit');
		$add = $this->model_admin->add_basispengetahuan();

		if ($add['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Gejala Success!
			</div>
			');
			redirect('admin/detail_penyakit/' . $kode_penyakit);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Gejala Failed!
			</div>
			');
			redirect('admin/detail_penyakit' . $kode_penyakit);
		}
	}

	public function delete_basispengetahuan()
	{


		$kode_penyakit = $this->input->post('ko$kode_penyakit');
		$delete = $this->model_admin->delete_basispengetahuan();

		if ($delete['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Basis Pengetahuan Success!
			</div>
			');
			redirect('admin/detail_penyakit/' . $kode_penyakit);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Basis Pengetahuan Failed!
			</div>
			');
			redirect('admin/detail_penyakit/' . $kode_penyakit);
		}
	}
}
