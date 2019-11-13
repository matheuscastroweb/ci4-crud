<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class NewsRest extends ResourceController
{
    protected $modelName = 'App\Models\NewsModel';
    protected $format = 'application/json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        return $this->respond($this->model->asArray()
            ->where(['id' => $id])
            ->first());
    }

    public function delete($id = null)
    {
        return $this->respond($this->model->delete($id));
    }
}
