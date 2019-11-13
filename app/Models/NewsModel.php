<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    //Nome da tabela. Agora é obrigatório
    protected $table = 'news';
    protected $primaryKey = 'id';

    //Permitir os tempos a serem inseridos atualizados
    protected $allowedFields = ['title', 'slug', 'body'];

    protected $useTimestamps = true;
    protected $useSoftDeletes = true;

    //Caso queira colocar pra BR
    /*
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    */

    public function getNews($id = false)
    {
        if ($id === false) {
            //Caso queira trazer o deletado com o deletedAt preenchido
            $this->withDeleted();
            return $this->findAll();
        }

       

        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }
}
