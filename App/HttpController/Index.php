<?php

namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller
{

    public function index()
    {
        // TODO: Implement index() method.
        $this->response()->write("hihihihi");
    }
}