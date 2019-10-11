<?php
/**
 *Data:
 */

namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;
use think\Validate;

class Base extends Controller
{

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function success($data = null, $msg = 'success', $code = 0)
    {
        return $this->writeJson($code, $data, $msg);
    }
    public function error($data = null, $msg = 'error', $code = 1)
    {
        return $this->writeJson($code, $data, $msg);
    }

    public function onException(\Throwable $throwable): void
    {
        $msg = 'msg:1123'.$throwable->getMessage().','.'file:'.$throwable->getFile().'line:'.$throwable->getLine();
        $this->writeJson($throwable->getCode(), '', $msg);
    }

    public function test($data)
    {
        $check = new Validate([
            'name' => 'require|max:25'
        ]);
        if(!$check->check($data)) {
            throw new \Exception($check->getError());
        }
    }
}