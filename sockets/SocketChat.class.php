<?php
    namespace MeuApp;
    
    use Ratchet\MessageComponentInterface;
    use Ratchet\ConnectionInterface;


    class SocketChat implements MessageComponentInterface {
        
        function __construct(){
            echo "Servidor iniciado";
        }
        
        public function onOpen(ConnectionInterface $conn) {
            
        }
        
        public function onMessage(ConnectionInterface $conn, $msg){
            
        }
        
        public function onClose(ConnectionInterface $conn) {
            
        }
        
        public function onError(ConnectionInterface $conn, \Exception $e){
            
        }
    }
