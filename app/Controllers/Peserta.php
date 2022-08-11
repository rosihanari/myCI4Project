<?php
namespace App\Controllers;
use App\Models\PesertaModel;

class Peserta extends BaseController
{

	protected $peserta;

	function __construct(){
		$this->peserta = new PesertaModel();
	}

    public function index(){
    	$arr['peserta'] = $this->peserta->findAll();

    	return view('Peserta/showtable', $arr); 

    }

    public function delete($id){
    	$this->peserta->delete($id);
    	return redirect()->to('peserta');
    }

    public function create(){
    	return view('Peserta/create');
    }

    public function store(){
    	if (!$this->validate(
    		['name' => [
    			'rules' => 'required',
    			'errors' => [
    				'required' => '{field} harus diisi'
    			]
    		],
    		
    		'email' => [
    			'rules' => 'required|valid_email',
    			'errors' => [
    				'required' => '{field} harus diisi',
    				'valid_email' => 'Email tidak valid'
    			]
    		]],

    		)){
    		session()->setFlashdata('error', $this->validator->listErrors());
    		return redirect()->back()->withInput();
    	}

    	$this->peserta->insert([

    		'name' => $this->request->getVar('name'),
    		'email' => $this->request->getVar('email')

    	]);

    	return redirect()->to('peserta');
    }

    public function edit($id){
    	$arr['peserta'] = $this->peserta->find($id);
    	return view('Peserta/edit', $arr);
    }

    public function update($id){
    	if (!$this->validate(
    		['name' => [
    			'rules' => 'required',
    			'errors' => [
    				'required' => '{field} harus diisi'
    			]
    		],
    		
    		'email' => [
    			'rules' => 'required|valid_email',
    			'errors' => [
    				'required' => '{field} harus diisi',
    				'valid_email' => 'Email tidak valid'
    			]
    		]],

    		)){
    		session()->setFlashdata('error', $this->validator->listErrors());
    		return redirect()->back()->withInput();
    	}

    	$this->peserta->update($id, [

    		'name' => $this->request->getVar('name'),
    		'email' => $this->request->getVar('email')

    	]);

    	return redirect()->to('peserta');
    }
}

?>