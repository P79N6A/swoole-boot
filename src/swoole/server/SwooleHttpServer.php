<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/11/29
 * Time: 6:27 PM
 */

namespace SwooleBoot\Swoole\Server;

use Swoole\Http\Server;
use SwooleBoot\Swoole\Event\SwooleEventHandler;

class SwooleHttpServer {

    public function init(int $port = 8080) {
        $server = new Server("127.0.0.1", $port);
        $eventHandler = SwooleEventHandler::getInstance();
        $server->on('Start', array($eventHandler, "onStart"));
        $server->on('Shutdown', array($eventHandler, 'onShutdown'));
        $server->on('WorkerStart', array($eventHandler, 'onWorkerStart'));
        $server->on('WorkerStop', array($eventHandler, 'onWorkerStop'));
        $server->on('WorkerExit', array($eventHandler, 'onWorkerExit'));
        $server->on('Packet', array($eventHandler, 'onPacket'));
        $server->on('Close', array($eventHandler, 'onClose'));
        $server->on('BufferFull', array($eventHandler, 'onBufferFull'));
        $server->on('BufferEmpty', array($eventHandler, 'onBufferEmpty'));
        $server->on('Task', array($eventHandler, 'onTask'));
        $server->on('Finish', array($eventHandler, 'onFinish'));
        $server->on('PipeMessage', array($eventHandler, 'onPipeMessage'));
        $server->on('WorkerError', array($eventHandler, 'onWorkerError'));
        $server->on('ManagerStart', array($eventHandler, 'onManagerStart'));
        $server->on('ManagerStop', array($eventHandler, 'onManagerStop'));
        $server->on('Request', array($eventHandler, 'onRequest'));
        $server->start();
    }

}
