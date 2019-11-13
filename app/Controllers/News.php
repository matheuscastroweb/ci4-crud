<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
    public function index()
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews();

        echo view('templates/header', $data);
        echo view('pages/news/overview', $data);
        echo view('templates/footer', $data);
    }


    public function view($id = null)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($id);

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Não pude encontrar este item:" . $id);
        }

        $data['title'] = $data['news']['title'];


        echo view('templates/header', $data);
        echo view('pages/news/view', $data);
        echo view('templates/footer', $data);
    }

    public function create()
    {
        helper('form');

        echo view('templates/header');
        echo view('pages/news/form');
        echo view('templates/footer');
    }

    public function store()
    {
        helper('form');
        $model = new NewsModel();

        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required'
        ];


        if ($this->validate($rules)) {
            //Se passar o ID e ele for null ou não existir, ele insere, do contrário ele da update
            $model->save([
                'id'    => $this->request->getVar('id'),
                'title' => $this->request->getVar('title'),
                'slug'  => url_title($this->request->getVar('title')),
                'body'  => $this->request->getVar('body')

            ]);

            //Redirect atualizado tb do ci3 para o ci4
            return redirect()->to('/news');
        }

        echo view('templates/header');
        echo view('pages/news/form');
        echo view('templates/footer');
    }

    public function edit($id = null)
    {
        helper('form');
        $model = new NewsModel();

        $data['news'] = $model->getNews($id);
        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Não pude encontrar essa notícia");
        }

        $data = [
            'title' => $data['news']['title'],
            'id' => $data['news']['id'],
            'body' => $data['news']['body'],

        ];

        echo view('templates/header');
        echo view('pages/news/form', $data);
        echo view('templates/footer');
    }
    public function delete($id = null)
    {

        $model = new NewsModel();
        $model->delete($id);

        return redirect()->to('/news');
    }
}
