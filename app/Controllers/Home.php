<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index(){
		return view('Univ/welcome');
	}

    public function mhs()
    {

    	$data = array(
    		array('Amir 1', 'Basdat 1', 1),
    		array('Amir 2', 'Basdat 1', 2),
    		array('Amir 3', 'Basdat 1', 3),
    		array('Amir 4', 'Basdat 1', 4),
    		array('Amir 5', 'Basdat 1', 5),
    		array('Amir 6', 'Basdat 2', 6),
    		array('Amir 7', 'Basdat 2', 7),
    		array('Amir 8', 'Basdat 2', 8),
    		array('Amir 9', 'Basdat 2', 9),
    		array('Amir 8', 'Basdat 2', 8),
    		array('Amir 9', 'Basdat 2', 9),
    		array('Amir 8', 'Basdat 2', 8),
    		array('Amir 9', 'Basdat 2', 9),
    		array('Amir 8', 'Basdat 2', 8),
    		array('Amir 9', 'Basdat 2', 9),
    		array('Amir 10', 'Basdat 2', 10)
    	);

    	$arr = array(
    		'apps' => 'UNS',
    		'datatable' => $data
    	);

        return view('Univ/mhs', $arr);
    }

    public function test($x){
    	echo "Hello $x";
    }

    public function prodi(){
    	$data = array(
    		array('Fak. Teknik', 'Teknik Mesin'),
    		array('Fak. Teknik', 'Teknik Industri'),
    		array('Fak. Teknik', 'Teknik Kimia'),
    		array('Fak. Kedokteran', 'Kedokteran Gigi'),
    		array('Fak. Kedokteran', 'Kedokteran Jiwa'),
    		array('Fak. MIPA', 'Matematika'),
    		array('Fak. MIPA', 'Kimia'),
    		array('Fak. MIPA', 'Fisika'),
    		array('Fak. MIPA', 'Biologi'),
    		array('Fak. Keguruan', 'Pendidikan Biologi'),
    		array('Fak. Keguruan', 'Pendidikan Kimia'),
    		array('Fak. Keguruan', 'Pendidikan Matematika'),
    		array('Fak. Keguruan', 'Pendidikan Biologi'),
    		array('Fak. Keguruan', 'Pendidikan Biologi'),
    		array('Fak. Keguruan', 'Pendidikan Biologi'),
    	);

    	$arr = array(
    		'prodi' => $data
    	);

    	return view('Univ/prodi', $arr);
    }

    public function uns($nama, $nim){
    	echo "Hello ini dari UNS mahasiswa: ".$nama." (nim: ".$nim.")";
    }
}
