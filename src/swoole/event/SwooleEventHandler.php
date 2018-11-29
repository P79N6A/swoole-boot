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
use SwooleBoot\Lib\Log;

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
        Log::getLogger()->info("server started, pid={$server->manager_pid}");
//        $logger->info("This is an informational message.");
//        $logger->warn("I'm not feeling so good...");
    }

    public function onShutdown(Server $server) {
        Log::getLogger()->info("server shutdown");

    }

    public function onWorkerStart(Server $server, int $workerId) {
        Log::getLogger()->info("server worker start, workerId={$workerId}");

    }

    public function onWorkerStop(Server $server, int $workerId) {
        Log::getLogger()->info("server worker stop, workerId={$workerId}");
    }

    public function onWorkerExit(Server $server, int $workerId) {
        Log::getLogger()->info("onWorkerExit");
    }

    public function onPacket(Server $server, string $data, array $clientInfo) {
        Log::getLogger()->info("onPacket");
    }

    public function onClose(Server $server, int $fd, int $reactorId) {
        Log::getLogger()->info("onClose");
    }

    public function onBufferFull(Server $serv, int $fd) {
        Log::getLogger()->info("onClose");
    }

    public function onBufferEmpty(Server $serv, int $fd) {
        Log::getLogger()->info("onBufferEmpty");
    }

    public function onTask(Server $server, int $taskId, int $srcWorkerId, mixed $data) {
        Log::getLogger()->info("onTask");
    }

    public function onFinish(Server $server, int $taskId, string $data) {
        Log::getLogger()->info("onFinish");
    }

    public function onPipeMessage(Server $server, int $src_worker_id, mixed $message) {
        Log::getLogger()->info("onPipeMessage");
    }

    public function onWorkerError(Server $server, int $workerId, int $workerPid, int $exitCode, int $signal) {
        Log::getLogger()->info("onWorkerError");
    }

    public function onManagerStart(Server $server) {
        Log::getLogger()->info("onManagerStart");
    }

    public function onManagerStop(Server $server) {
        Log::getLogger()->info("ManagerStop");

    }

    public function onRequest(Request $request, Response $response) {
        Log::getLogger()->info("receive request");
        DispatcherManager::getDispatcher()->handle($request, $response);
    }

}
