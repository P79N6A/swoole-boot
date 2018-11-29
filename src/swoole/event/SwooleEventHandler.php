<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/11/29
 * Time: 8:19 PM
 */

namespace SwooleBoot\Swoole\Event;

use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Http\Server;
use SwooleBoot\Core\Dispatcher\DispatcherManager;

class SwooleEventHandler {

    private static $instance = null;

    /**
     * @return  SwooleEventHandler
     */
    public static function getInstance() {
        if (null === self::$instance) {
            self::$instance = new SwooleEventHandler();
        }
        return self::$instance;
    }

    private function __construct() {
    }


    public function onStart(Server $server) {
        $server->manager_pid;
    }

    public function onShutdown(Server $server) {

    }

    public function onWorkerStart(Server $server, int $workerId) {

    }

    public function onWorkerStop(Server $server, int $worker_id) {

    }

    public function onWorkerExit(Server $server, int $worker_id) {

    }

    public function onPacket(Server $server, string $data, array $client_info) {

    }

    public function onClose(Server $server, int $fd, int $reactorId) {

    }

    public function onBufferFull(Server $serv, int $fd) {

    }

    public function onBufferEmpty(Server $serv, int $fd) {

    }

    public function onTask(Server $server, int $taskId, int $srcWorkerId, mixed $data) {

    }

    public function onFinish(Server $server, int $taskId, string $data) {

    }

    public function onPipeMessage(Server $server, int $src_worker_id, mixed $message) {

    }

    public function onWorkerError(Server $server, int $workerId, int $workerPid, int $exitCode, int $signal) {
    }

    public function onManagerStart(Server $server) {

    }

    public function onManagerStop(Server $server) {

    }

    public function onRequest(Request $request, Response $response) {
        DispatcherManager::getDispatcher()->handle($request, $response);
    }

}
