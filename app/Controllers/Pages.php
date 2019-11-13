<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
	public function index()
	{
        /**
         * Chamar a view com o view('name_view)
         */
		return view('welcome_message');
    }
    
    public function showme($page = 'home'){
        //Verifica se acha o arquivos
        if(!is_file(APPPATH.'/Views/pages/'.$page.'.php')){
            //Lançamento de excessão do próprio codeigniter
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        //ucfirt pegar a primeira letra maiuscula
        $data['title'] = ucfirst($page);


        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }

}
