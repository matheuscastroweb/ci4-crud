<?php

namespace App\Database\Seeds;

class NewsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; ++$i) {

            $data = [
                'title'     => 'SEED-ID: '.$i.' - Teste de Seeders'.rand(10, 30),
                'slug'      => 'SEED-ID: '.$i.' - teste-de-seeders'.rand(10, 30),
                'body'      => 'SEED-ID: '.$i.' - Corpo da mensagem de news'.rand(10, 30),
            ];

            $this->db->table('news')->insert($data);
        }
    }
}
