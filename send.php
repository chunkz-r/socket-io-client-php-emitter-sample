<?php

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;
require __DIR__ . '/vendor/autoload.php';
$client = new Client(new Version2X('http://localhost:3005'));
$client->initialize();
$client->emit('chat-message', ['msg' => 'Hello World']);
$client->close();