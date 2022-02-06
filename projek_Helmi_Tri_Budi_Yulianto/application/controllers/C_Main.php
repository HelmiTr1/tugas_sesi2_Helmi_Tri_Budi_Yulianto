<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_basic','query');
    }
    
    

    
    public function index()
    {

        $data['title'] ="Pendaftaran";
		$data['data'] = $this->query->select_all_join_2('pendaftaran','idPendaftaran as "id", namaPasien, namaDokter, keluhan, tanggal','pasien','pendaftaran.idPasien','pasien.idPasien','dokter','pendaftaran.idDokter','dokter.idDokter');
        $data['content'] = $this->load->view('main/pendaftaran',$data,TRUE);
		$this->load->view('index',$data);
    }
    public function pendaftaran_form()
    {

        $id = $this->input->post('id');
		if ($id) {
			$data['data'] = $this->query->select_where('pendaftaran', 'idPendaftaran', $id)->row();
		} else {
			$data['data'] = null;
        }
		$data['title'] = 'Pendaftaran Form';
		$data['pasien'] =$this->query->select_all('pasien');
		$data['dokter'] =$this->query->select_all('dokter');
		$data['content'] = $this->load->view('main/pendaftaran_form', $data, true);
		$this->load->view('index', $data);
    }

    public function pendaftaran_add()
    {
        $table_field = $this->db->list_fields('pendaftaran');
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		$insert['tanggal'] = date('Y-m-d');
		$check_data = $this->query->select_where('pendaftaran', 'idPendaftaran', $insert['idPendaftaran'])->row();
		if ($check_data != null) {
			$this->returnJson(array('status' => 'error', 'msg' => 'ID sudah digunakan!'));
		} else {
			if ($insert) {
				$do_insert = $this->query->insert_all('pendaftaran', $insert);
				$this->returnJson(array('status' => 'ok', 'msg' => 'Insert data berhasil', 'redirect' => '/sip/main'));
			} else {
				$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
			}
		}
    }

    public function pendaftaran_update()
	{
		$table_field = $this->db->list_fields('pendaftaran');
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
        }
		$update['tanggal'] = date('Y-m-d');
        
			if ($update) {
				$do_update = $this->query->update('pendaftaran', $update, 'idPendaftaran', $update['idPendaftaran']);
				$this->returnJson(array('status' => 'ok', 'msg' => 'Update data berhasil', 'redirect' => '/sip/main'));
			} else {
				$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
			}
    }
    
    public function pendaftaran_delete()
    {
		$id = $this->input->post('id');
		$do_delete = $this->query->delete('pendaftaran', 'idPendaftaran', $id);
		if ($do_delete) {
			redirect('/');
		} else { }
    }
    public function rekam_medik()
    {

        $data['title'] ="Rekam Medik";
		$data['data'] = $this->db->query('SELECT `idRekamMedik` as "id", `rekam_medik`.`idPendaftaran`, `namaPasien`, `namaDokter`, `diagnosa`, `tanggalPemeriksaan` FROM (`rekam_medik` INNER JOIN `pendaftaran` ON `rekam_medik`.`idPendaftaran`=`pendaftaran`.`idPendaftaran`) JOIN `pasien` ON `pendaftaran`.`idPasien` = `pasien`.`idPasien` JOIN `dokter` ON `pendaftaran`.`idDokter` = `dokter`.`idDokter`')->result();
        $data['content'] = $this->load->view('main/rekam_medik',$data,TRUE);
		$this->load->view('index',$data);
    }
    public function rekam_medik_form()
    {

        $id = $this->input->post('id');
		if ($id) {
			$data['data'] = $this->db->query('SELECT `idRekamMedik` ,`ruangan`, `rekam_medik`.`idPendaftaran`, `keluhan`, `namaPasien`, `namaDokter`, `diagnosa`,`tanggalKonsultasiKembali`, `tanggalPemeriksaan` FROM (`rekam_medik` INNER JOIN `pendaftaran` ON `rekam_medik`.`idPendaftaran`=`pendaftaran`.`idPendaftaran`) JOIN `pasien` ON `pendaftaran`.`idPasien` = `pasien`.`idPasien` JOIN `dokter` ON `pendaftaran`.`idDokter` = `dokter`.`idDokter` WHERE idRekamMedik='.$id) ->row();
		} else {
			$data['data'] = null;
        }
		$data['title'] = 'Rekam Medik Form';
		$data['pendaftaran'] =$this->query->select_all_join_2('pendaftaran','idPendaftaran, namaPasien, namaDokter, keluhan, tanggal','pasien','pendaftaran.idPasien','pasien.idPasien','dokter','pendaftaran.idDokter','dokter.idDokter');
		$data['dokter'] =$this->query->select_all('dokter');
		$data['content'] = $this->load->view('main/rekam_medik_form', $data, true);
		$this->load->view('index', $data);
    }

    public function rekam_medik_add()
    {
        $table_field = $this->db->list_fields('rekam_medik');
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		$insert['tanggalPemeriksaan'] = date('Y-m-d');
		$check_data = $this->query->select_where('rekam_medik', 'idRekamMedik', $insert['idRekamMedik'])->row();
		if ($check_data != null) {
			$this->returnJson(array('status' => 'error', 'msg' => 'ID sudah digunakan!'));
		} else {
			if ($insert) {
				$do_insert = $this->query->insert_all('rekam_medik', $insert);
				$this->returnJson(array('status' => 'ok', 'msg' => 'Insert data berhasil', 'redirect' => 'rekam_medik'));
			} else {
				$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
			}
		}
    }

    public function rekam_medik_update()
	{
		$table_field = $this->db->list_fields('rekam_medik');
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
        }
		$update['tanggalPemeriksaan'] = date('Y-m-d');
        
			if ($update) {
				$do_update = $this->query->update('rekam_medik', $update, 'idRekamMedik', $update['idRekamMedik']);
				$this->returnJson(array('status' => 'ok', 'msg' => 'Update data berhasil', 'redirect' => 'rekam_medik'));
			} else {
				$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
			}
    }
    
    public function rekam_medik_delete()
    {
		$id = $this->input->post('id');
		$do_delete = $this->query->delete('rekam_medik', 'idRekamMedik', $id);
		if ($do_delete) {
			redirect('main/rekam_medik');
		} else { }
    }
    
    

    //RETURN JSON
    function returnJson($msg){
		echo json_encode($msg);
		exit;
	}
	
	function ajax_pendaftaran(){
		$id = $this->input->post('id');
		$data = $this->query->select_where_join_2('pendaftaran','idPendaftaran, namaPasien, namaDokter, keluhan, tanggal','idPendaftaran',$id,'pasien','pendaftaran.idPasien','pasien.idPasien','dokter','pendaftaran.idDokter','dokter.idDokter')->result();

		$this->returnJson(array('status' => 'ok', 'data' => $data));
	}
    

}

/* End of file C_Main.php */
