<?php

namespace App\Models;
use CodeIgniter\Model;

class PesertaModel extends Model {
	protected $table = 'peserta';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useTimeStamps = true;
	protected $allowedFields = [
		'name', 'email'
	];
}

?>