<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SiswaModel;

class MenuController extends BaseController
{
	public function __construct(){
		$this->model = new SiswaModel();
	}

	public function rulesSiswa($edit = false){
		$unik 	= ($edit)?'':'|is_unique[siswa.nis]';
		$data = [
			'nis' => [
				'rules' 	=> 'required|numeric'.$unik,
				'errors'=> [
					'required' => 'NIS tidak boleh kosong',
					'is_unique' => 'NIS sudah ada',
					'numeric'	=> 'Hanya boleh angka'
				]
			],
			'nama' => [
				'rules'	=> 'required',
				'errors' => [
					'required' => 'Nama harus diisi'
				]
			],
			'tgl_lahir' => [
				'rules' 	=> 'required',
				'errors'=> [
					'required' => 'Tanggal lahir harus diisi',
				]
			],


		];

		return $data;
	}
	public function home(){
		return view('Beranda');
	}
	public function info_kegiatan(){
		return view('Info');
	}
	public function data_siswa(){
		$data = ['siswa' => $this->model->findAll()];
		return view('Siswa', $data);
	}

	public function tambahSiswa(){
		$data = [
			'validation' => \Config\Services::validation()
		];
		return view('tambah_siswa', $data);
	}
	public function simpanSiswa(){
		
		if ($this->validate($this->rulesSiswa())){
			$this->model->insert([
				'nis'	=> $this->request->getVar('nis'),
				'nama'	=> $this->request->getVar('nama'),
				'tgl_lahir'	=> $this->request->getVar('tgl_lahir')				
			]);

			session()->setFlashdata('berhasil', 'Data Siswa berhasil disimpan');
			echo "ad";
			return redirect()->to(base_url('data-siswa'));

		}else{
			echo "td";
			return redirect()->to('/data-siswa/tambah')->withInput();
		}



	}

	public function editSiswa($id){
		$data = [
			'siswa'	=> $this->model->find($id),
			'validation' => \Config\Services::validation()

		];
		return view('edit_siswa', $data);
	}
	public function updateSiswa($id){
		// var_dump($this->rulesSiswa(True));
		// die();
		if ($this->validate($this->rulesSiswa(true))){
			$this->model->update($id, [
				'nis'	=> $this->request->getVar('nis'),
				'nama'	=> $this->request->getVar('nama'),
				'tgl_lahir'	=> $this->request->getVar('tgl_lahir')				
			]);

			session()->setFlashdata('berhasil', 'Data Siswa berhasil disimpan');
			return redirect()->to(base_url('data-siswa'));

		}else{
			return redirect()->to('/data-siswa/edit/'.$id)->withInput();
		}

	}
	public function deleteSiswa($id){
		$this->model->delete($id);
		return redirect()->to(base_url('data-siswa'));

	}
}
