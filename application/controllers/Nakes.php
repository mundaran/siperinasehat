<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nakes extends CI_Controller {

	public function __construct()
	    {
			parent::__construct();
			cek_login_siperi();
			$this->load->model('model_nakes');
		}

	public function index()
	{
		$data['title'] ='Dashboard';
		$data ['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		$data ['sip']= $this->model_nakes->load_sip_terdaftar();
		$this->load->view('template_view/dashboard_header');
		$this->load->view('template_view/menubar',$data);
		$this->load->view('nakes/nakes_dashboard',$data);
		$this->load->view('template_view/dashboard_footer');
	}

	public function my_profile()
	{
		$data['title'] ='profile';
		$data ['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		
		$this->load->view('template_view/dashboard_header');
		$this->load->view('template_view/menubar',$data);
		$this->load->view('nakes/my_profile',$data);
		$this->load->view('template_view/dashboard_footer');
	}

	public function register_sip()
	{
		$data['title'] ='Register SIP';
		$data ['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		$data ['sip']= $this->model_nakes->load_data_sip();
		
		$this->load->view('template_view/dashboard_header');
		$this->load->view('template_view/menubar',$data);
		$this->load->view('nakes/nakes_register_sip',$data);
		$this->load->view('template_view/dashboard_footer');
	}

	public function notification()
	{
		$data['title'] ='Notification';
		$data ['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		
		$this->load->view('template_view/dashboard_header');
		$this->load->view('template_view/menubar',$data);
		$this->load->view('nakes/nakes_notification',$data);
		$this->load->view('template_view/dashboard_footer');
	}

	public function upload_berkas()
	{
		$data['title'] ='Register SIP';
		$data ['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		
		$this->load->view('template_view/dashboard_header');
		$this->load->view('template_view/menubar',$data);
		$this->load->view('nakes/nakes_upload_berkas',$data);
		$this->load->view('template_view/dashboard_footer');
	}

	public function perpanjangan()
	{
		$data['title'] ='Perpanjangan';
		$data ['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		
		$this->load->view('template_view/dashboard_header');
		$this->load->view('template_view/menubar',$data);
		$this->load->view('nakes/nakes_perpanjangan',$data);
		$this->load->view('template_view/dashboard_footer');
	}
	
	public function perubahan()
	{
		$data['title'] ='Perubahan';
		$data ['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		
		$this->load->view('template_view/dashboard_header');
		$this->load->view('template_view/menubar',$data);
		$this->load->view('nakes/nakes_perubahan',$data);
		$this->load->view('template_view/dashboard_footer');
	}

	public function pencabutan()
	{
		$data['title'] ='Pencabutan';
		$data ['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		
		$this->load->view('template_view/dashboard_header');
		$this->load->view('template_view/menubar',$data);
		$this->load->view('nakes/nakes_pencabutan',$data);
		$this->load->view('template_view/dashboard_footer');
	}


	//batas-tampilan dan aksi//

	public function aksi_upload_berkas()
	{
		$data['title'] ='Register SIP';
		$user = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		$id_user = $user['id'];
		$id_sip = $this->input->post('id_sip');

		$file_name_pas_foto = 'pas-foto-'.$id_user.'-'.$id_sip;
		$config['upload_path']          = './document/pas_foto';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['file_name']            = $file_name_pas_foto;
		$config['overwrite'] = true;
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( !$this->upload->do_upload('pasfoto')){
			 $this->session->set_flashdata('message', 'pasfoto-gagal' );
			 redirect('nakes/upload_berkas');
		} else {
			$file_name_ktp = 'ktp-'.$id_user.'-'.$id_sip;
			$config['upload_path']          = './document/foto_ktp';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$config['file_name']            = $file_name_ktp;
			$config['overwrite'] = true;
			$config['max_size']             = 1000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
			$pas_foto_up = $this->upload->data();
			$this->load->library('upload', $config);
	 		$this->upload->initialize($config);
			if ( !$this->upload->do_upload('ktp')){
				 $this->session->set_flashdata('message', 'ktp-gagal' );
				 redirect('nakes/upload_berkas');
			} else {
				$file_name_str= 'str-'.$id_user.'-'.$id_sip;
				$config['upload_path']          = './document/str';
				$config['allowed_types']        = 'gif|jpg|png|pdf';
				$config['file_name']            = $file_name_str;
				$config['overwrite'] = true;
				$config['max_size']             = 1000;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
				$ktp_up = $this->upload->data();
				$this->load->library('upload', $config);
		 		$this->upload->initialize($config);
				if ( !$this->upload->do_upload('str')){
					 $this->session->set_flashdata('message', 'str-gagal' );
					 redirect('nakes/upload_berkas');
				} else {
					$file_name_rop = 'rop-'.$id_user.'-'.$id_sip;
					$config['upload_path']          = './document/rop';
					$config['allowed_types']        = 'gif|jpg|png|pdf';
					$config['file_name']            = $file_name_rop;
					$config['overwrite'] = true;
					$config['max_size']             = 1000;
					$config['max_width']            = 1024;
					$config['max_height']           = 768;
					$str_up = $this->upload->data();
					$this->load->library('upload', $config);
			 		$this->upload->initialize($config);
					if ( !$this->upload->do_upload('rop')){
						 $this->session->set_flashdata('message', 'rop-gagal' );
						 redirect('nakes/upload_berkas');
					} else {
						$file_name_rtp = 'rtp-'.$id_user.'-'.$id_sip;
						$config['upload_path']          = './document/rtp';
						$config['allowed_types']        = 'gif|jpg|png|pdf';
						$config['file_name']            = $file_name_rtp;
						$config['overwrite'] = true;
						$config['max_size']             = 1000;
						$config['max_width']            = 1024;
						$config['max_height']           = 768;
						$rop_up = $this->upload->data();
						$this->load->library('upload', $config);
				 		$this->upload->initialize($config);
						if ( !$this->upload->do_upload('rtp')){
							 $this->session->set_flashdata('message', 'rtp-gagal' );
							 redirect('nakes/upload_berkas');
						} else {
							$file_name_ijazah = 'ijazah-'.$id_user.'-'.$id_sip;
							$config['upload_path']          = './document/ijazah';
							$config['allowed_types']        = 'gif|jpg|png|pdf';
							$config['file_name']            = $file_name_ijazah;
							$config['overwrite'] = true;
							$config['max_size']             = 1000;
							$config['max_width']            = 1024;
							$config['max_height']           = 768;
							$rtp_up = $this->upload->data();
							$this->load->library('upload', $config);
					 		$this->upload->initialize($config);
							if ( !$this->upload->do_upload('ijazah')){
								 $this->session->set_flashdata('message', 'ijazah-gagal' );
								 redirect('nakes/upload_berkas');
							} else {
								$file_name_surat_sehat = 'surat-sehat-'.$id_user.'-'.$id_sip;
								$config['upload_path']          = './document/surat_sehat';
								$config['allowed_types']        = 'gif|jpg|png|pdf';
								$config['file_name']            = $file_name_surat_sehat;
								$config['overwrite'] = true;
								$config['max_size']             = 1000;
								$config['max_width']            = 1024;
								$config['max_height']           = 768;
								$ijazah_up = $this->upload->data();
								$this->load->library('upload', $config);
						 		$this->upload->initialize($config);
								if ( !$this->upload->do_upload('surat_sehat')){
									 $this->session->set_flashdata('message', 'surat_sehat-gagal' );
									 redirect('nakes/upload_berkas');
								} else {
									$file_name_surat_pernyataan = 'surat-pernyataan-'.$id_user.'-'.$id_sip;
									$config['upload_path']          = './document/surat_pernyataan';
									$config['allowed_types']        = 'gif|jpg|png|pdf';
									$config['file_name']            = $file_name_surat_pernyataan;
									$config['overwrite'] = true;
									$config['max_size']             = 1000;
									$config['max_width']            = 1024;
									$config['max_height']           = 768;
									$surat_sehat_up = $this->upload->data();
									$this->load->library('upload', $config);
							 		$this->upload->initialize($config);
									if ( !$this->upload->do_upload('pernyataan')){
										 $this->session->set_flashdata('message', 'pernyataan-gagal' );
										 redirect('nakes/upload_berkas');
									} else {
										$surat_pernyataan_up = $this->upload->data();

										$update_data =  [
											'pas_foto' => $file_name_pas_foto,
											'foto_ktp' => $file_name_ktp,
											'foto_str' => $file_name_str,
											'rekomendasi_org_p' => $file_name_rop,
											'rekomendasi_tmpt_p' => $file_name_rtp,
											'ijazah' => $file_name_ijazah,
											'surat_sehat' => $file_name_surat_sehat,
											'pernyataan' => $file_name_surat_pernyataan,
											'status' => 2,
										];

										$this->model_nakes->upload_berkas_sip($id_user,$id_sip,$update_data);
									}
								}
							}
						}
					}
				}

			}


		}
       
	}



	public function aksi_edit_profile()
	{
		$user = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		$id = $user['id'];
		$nama = $this->input->post('nama_lengkap');
		$nik = $this->input->post('nik');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$alamat = $this->input->post('alamat');
		$provinsi = $this->input->post('provinsi');
		$kota_kabupaten = $this->input->post('kota_kabupaten');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');


		$data = array(
		'name' => $nama,
		'nik' => $nik,
		'email' => $email,
		'no_hp' => $no_hp,
		'tempat_lahir' => $tempat_lahir,
		'tanggal_lahir' => $tanggal_lahir,
		'alamat' => $alamat,
		'provinsi' => $provinsi,
		'kota_kabupaten' => $kota_kabupaten,
		'kecamatan' => $kecamatan,
		'kelurahan' => $kelurahan,
		);
		$this->model_nakes->edit_profile($id, $data);
	}

	public function aksi_register_sip()
	{
		$user = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
		$id = $user['id'];
		$id_new_sip = $this->input->post('id_sip_new');
		$jenis_sip = $this->input->post('jenis_sip');
		$no_str = $this->input->post('no_str');
		$masa_berlaku_str = $this->input->post('masa_berlaku_str');
		$tempat_praktek = $this->input->post('tempat_praktek');
		$alamat_praktek = $this->input->post('alamat_praktek');
		$jenis_praktek = $this->input->post('jenis_praktek');
		$hari_awal = $this->input->post('hari_awal');
		$hari_akhir = $this->input->post('hari_akhir');
		$jam_buka = $this->input->post('jam_buka');
		$jam_tutup = $this->input->post('jam_tutup');
		$status = '1' ;
		$tanggal_daftar = $this->input->post('tanggal_daftar');

		$data = array(
		'id' => $id_new_sip,
		'id_user' => $id,
		'jenis_sip' => $jenis_sip,
		'no_str' => $no_str,
		'masa_berlaku_str' => $masa_berlaku_str,
		'tempat_praktek' => $tempat_praktek,
		'alamat_praktek' => $alamat_praktek,
		'jenis_praktek' => $jenis_praktek,
		'hari_awal_praktek' => $hari_awal,
		'hari_akhir_praktek' => $hari_akhir,
		'jam_buka' => $jam_buka,
		'jam_tutup' => $jam_tutup,
		'status' => $status,
		'tanggal_daftar'=>$tanggal_daftar,
		);
		$this->model_nakes->registrasi_sip($data,$id_new_sip);
	}

	
}