<?php
namespace App\Controllers;
use App\Models\PesertaModel;

class Galeri extends BaseController {

	public function index(){
		return view('galeri');
	}

}