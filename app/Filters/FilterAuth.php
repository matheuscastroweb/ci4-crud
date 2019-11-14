<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterAuth implements FilterInterface
{
  
    /**
     * Before utilizado para verificações antes de entrar no controller de fato
     * PATH. Config/Filters
     */
    public function before(RequestInterface $request)
    {
        
        echo "Filtro before utilizado. IP: ". $request->getIPAddress();
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        echo "Filtro after utilizado. CODE: ".$response->getStatusCode();
    }
}