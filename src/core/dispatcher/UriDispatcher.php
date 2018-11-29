<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/11/29
 * Time: 8:15 PM
 */

namespace SwooleBoot\Core\Dispatcher;


use Swoole\Http\Request;
use Swoole\Http\Response;

class UriDispatcher extends AbstractDispatcher {

    public function handle(Request $request, Response $response) {
        $response->end("lalal");
    }

}
