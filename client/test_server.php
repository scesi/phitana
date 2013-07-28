<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'lib/class.websocket_client.php';

$message = '{
    "action":"asdf",
    "data":{
        "nick":"carlos"
    }
}';

$client = new WebsocketClient();
$client->connect('10.0.0.9', 8000, '/phitana');
echo $client->sendData($message);
