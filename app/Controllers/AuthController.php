<?php 
namespace App\Controllers;
use App\Models\AuthModel;

class AuthController extends BaseController 
{
	public function __construct(){
		$this->model = new AuthModel();
	}

	public function registrasi(){
		$data = [
			'validation' => \Config\Services::validation()
		];
		return view('auth/registrasi', $data);
	}
	public function rulesRegistrasi(){
		$data = [
			'nama' => [
				'rules'	=> 'required',
				'errors'=> [
					'required' => 'Nama harus diisi'
				],
			],
			'email'=> [
				'rules'	=> 'required|valid_email|is_unique[users.email]',
				'errors'	=> [
					'required'	=> 'Email harus diisi',
					'valid_email'=> 'Email tidak valid',
					'is_unique'	=> 'Email {value} sudah ada'
				]
			],
			'password'=> [
				'rules'	=> 'required|min_length[8]',
				'errors'	=> [
					'required'	=> 'Password tidak boleh kosong',
					'min_length'=> 'Password minimal {param} karakter'
				]
			],
			'konfirmasi_password'=> [
				'rules'	=> 'required|min_length[8]',
				'errors'	=> [
					'required'	=> 'Konfirmasi Password tidak boleh kosong',
					'min_length'=> 'Konfirmasi Password minimal {param} karakter'
				]
			],


			
		];
		return $data;
	}
	public function simpanRegistrasi(){
		if ($this->validate($this->rulesRegistrasi())){
			$this->model->save([
				'nama'	=> $this->request->getPost('nama'),
				'email'	=> $this->request->getPost('email'),
				'password'	=> password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
				'role'	=> 'siswa'
			]);

			session()->setFlashdata('berhasil', 'Registrasi Berhasil');
			return redirect()->to('/registrasi');
		}else{
			return redirect()->to('/registrasi')->withInput();
		}
	}
}
?>