<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    //Nome da tabela. Agora é obrigatório
    protected $table = 'news';

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['slug' => $slug])
            ->first();
    }
}
