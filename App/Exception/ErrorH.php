<?php
/**
 *Data:
 */

namespace App\Exception;

use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
class ErrorH
{

    public static function handle( \Throwable $exception, Request $request, Response $response )
    {
        var_dump($exception->getTraceAsString());
    }

}