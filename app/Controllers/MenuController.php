<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class MenuController extends Controller
{
	public function home(){
		return view('Beranda');
	}
	public function info_kegiatan(){
		return view('Info');
	}
	public function data_siswa(){
		return view('Siswa');
	}
}
