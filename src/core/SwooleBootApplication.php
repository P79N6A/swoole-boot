<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/11/29
 * Time: 6:14 PM
 */

namespace SwooleBoot\Core;

use SwooleBoot\Core\Dispatcher\AbstractDispatcher;
use SwooleBoot\Core\Dispatcher\DispatcherManager;
use SwooleBoot\Core\Dispatcher\UriDispatcher;
use SwooleBoot\Swoole\Server\SwooleHttpServer;

class SwooleBootApplication {

    public static function run() {
        if (null === DispatcherManager::getDispatcher()) {
            $defaultDispatcher = new UriDispatcher();
            DispatcherManager::registerDispatcher($defaultDispatcher);
        }

        $swooleHttpServer = new SwooleHttpServer();
        $swooleHttpServer->init();
    }

    public static function registerDispatcher(AbstractDispatcher $defaultDispatcher) {
        DispatcherManager::registerDispatcher($defaultDispatcher);
    }

}
