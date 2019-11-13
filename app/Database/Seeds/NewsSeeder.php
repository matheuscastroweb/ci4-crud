<?php

namespace App\Database\Seeds;

class NewsSeeder extends \CodeIgniter\Database\Seeder
{

    public function run()
    {
        helper('text');

        for ($i = 0; $i < 10; ++$i) {

            $data = [
                'title'     => random_string('alpha', 8),
                'slug'      => random_string('alpha', 8),
                'body'      => random_string('alpha', 32),
            ];

            $this->db->table('news')->insert($data);
        }
    }
}
