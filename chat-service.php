<?php
    use Ratchet\Server\IoServer;
    use MeuApp\SocketChat;

    require dirname(__DIR__)."/chat-websocket-server/vendor/autoload.php";

    $server = IoServer::factory(
        new \Ratchet\Http\HttpServer(
            new \Ratchet\WebSocket\WsServer(
                new SocketChat()
            )
        ), 8070
    );

    $server->run();