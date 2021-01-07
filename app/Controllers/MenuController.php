<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SiswaModel;

class MenuController extends Controller
{
	public function __construct(){
		$this->model = new SiswaModel();
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
		return view('tambah_siswa');
	}
	public function simpanSiswa(){
		$data = [
			'nis'	=> $this->request->getVar('nis'),
			'nama'	=> $this->request->getVar('nama'),
			'tgl_lahir'	=> $this->request->getVar('tgl_lahir')

		];
		$this->model->insert($data);

		return redirect()->to(base_url('data-siswa'));
	}
}
