<?php namespace App\Controllers;

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
    

}
