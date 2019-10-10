<?php
/**
 *Data:
 */

namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;
class Base extends Controller
{

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function success($data = null, $msg = 'success', $code = 0)
    {
        $result = [
            'code' => $code,
            'msg'  => $msg,
            'data' => $data
        ];
        $string = json_encode($result);
        $this->response()->write($string);
    }
    public function error($data = null, $msg = 'error', $code = 1)
    {
        $result = [
            'code' => $code,
            'msg'  => $msg,
            'data' => $data
        ];
        $string = json_encode($result);
        $this->response()->write($string);
    }
}