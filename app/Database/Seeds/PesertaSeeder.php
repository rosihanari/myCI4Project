<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PesertaSeeder extends Seeder
{
    public function run()
    {
        $data = [
        	[
            'name' 	=> 'Rosihan Ari 1',
            'email'	=> 'darth@theempire.com',
            'created_at' => Time::now()
        	],
        	[
            'name' 	=> 'Rosihan Ari 2',
            'email'	=> 'darth@theempire.com',
            'created_at' => Time::now()
        	],
        	[
            'name' 	=> 'Rosihan Ari 3',
            'email'	=> 'darth@theempire.com',
            'created_at' => Time::now()
        	],
        	[
            'name' 	=> 'Rosihan Ari 4',
            'email'	=> 'darth@theempire.com',
            'created_at' => Time::now()
        	],
        	[
            'name' 	=> 'Rosihan Ari 5',
            'email'	=> 'darth@theempire.com',
            'created_at' => Time::now()
        	],
        	[
            'name' 	=> 'Rosihan Ari 6',
            'email'	=> 'darth@theempire.com',
            'created_at' => Time::now()
        	]
        ];

        $this->db->table('peserta')->insertBatch($data);
    }
}
