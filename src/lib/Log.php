<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/11/29
 * Time: 9:34 PM
 */

namespace SwooleBoot\Lib;


use Logger;

class Log {

    private static $initialized = false;


    public static function getLogger(){
        if (!self::$initialized) {
            Logger::configure(array(
                'appenders' => array(
                    'default' => array(
                        'class' => 'LoggerAppenderConsole',
                        'layout' => array(
                            'class' => 'LoggerLayoutPattern',
                            'params' => array(
                                'conversionPattern' => '[%d{Y-m-d H:i:s,u}][%p][%l] %m%n'
                            )
                        ),
                    ),
                ),
                'rootLogger' => array(
                    'appenders' => array('default'),
                ),
            ));
        }
        return Logger::getLogger("default");
    }

}