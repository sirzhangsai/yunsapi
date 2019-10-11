<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/5/28
 * Time: 下午6:33
 */

namespace EasySwoole\EasySwoole;
use App\Exception\ErrorH;
use EasySwoole\EasySwoole\SysConst;
use EasySwoole\EasySwoole\Config;
use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwoole\Component\Di;
class EasySwooleEvent implements Event
{

    public static function initialize()
    {
        // TODO: Implement initialize() method.
        date_default_timezone_set('Asia/Shanghai');
        //加载文件
        $dirPath = EASYSWOOLE_ROOT.'/Config';
        if (is_dir($dirPath)) {
            $conDir = scandir($dirPath);
            foreach ($conDir as $item) {
                if ($item == '.' || $item == '..') {
                    continue;
                }
                Config::getInstance()->setConf(basename($item, '.php'), require_once $dirPath.'/'."{$item}");
            }
        }
        //Di::getInstance()->set(SysConst::ERROR_HANDLER,[ErrorH::class,'handle']);
        Di::getInstance()->set(SysConst::HTTP_EXCEPTION_HANDLER,[ErrorH::class,'handle']);


    }

    public static function mainServerCreate(EventRegister $register)
    {
        // TODO: Implement mainServerCreate() method.
    }

    public static function onRequest(Request $request, Response $response): bool
    {
        // TODO: Implement onRequest() method.
        return true;
    }

    public static function afterRequest(Request $request, Response $response): void
    {
        // TODO: Implement afterAction() method.
    }
}