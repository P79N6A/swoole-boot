<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/11/29
 * Time: 8:14 PM
 */

namespace SwooleBoot\Core\Dispatcher;


use Swoole\Http\Request;
use Swoole\Http\Response;

abstract class AbstractDispatcher {

    public abstract function handle(Request $request, Response $response);


}
