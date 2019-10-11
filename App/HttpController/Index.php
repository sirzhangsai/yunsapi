<?php

namespace App\HttpController;


class Index extends Base
{

    public function index()
    {
        //$data = $this->request()->getRequestParam();
       // $this->test($data);
        $b =1/0;
        $c = 1;
       // throw new \Exception('pilipala123456');
        return $this->error($c);
    }
}