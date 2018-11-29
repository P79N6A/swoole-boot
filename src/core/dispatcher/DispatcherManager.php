<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/11/29
 * Time: 8:36 PM
 */

namespace SwooleBoot\Core\Dispatcher;


class DispatcherManager {

    private static $dispatcher;

    public static function registerDispatcher(AbstractDispatcher $dispatcher) {
        //TODO 检查注册的dispatcher合法性
        self::$dispatcher = $dispatcher;
    }

    /**
     * @return AbstractDispatcher
     */
    public static function getDispatcher() {
        return self::$dispatcher;
    }

}
