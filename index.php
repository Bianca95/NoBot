<?php
require_once('vendor/autoload.php');
 
$loop = ReactEventLoopFactory::create();
 
$client = new SlackRealTimeClient($loop);
$client->setToken('xoxb-147136165447-oXQ85V092xXMZwtf5NxjN1Cs');
$client->connect();

$client->on('message', function ($data) use ($client) {
    echo "Incoming message: ".$data['text']."\n";
});
 
$loop->run();
?>