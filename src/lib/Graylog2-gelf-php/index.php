<?php

require('GELFMessage.php');
require('GELFMessagePublisher.php');

$message = new GELFMessage();
$message->setShortMessage('something is broken.');
$message->setFullMessage("lol full message!");
$message->setHost('somehost');
$message->setLevel(2);
$message->setFile('/var/www/example.php');
$message->setLine(1337);
$message->setAdditional("something", "foo");
$message->setAdditional("something_else", "bar");

$publisher = new GELFMessagePublisher('172.16.22.30');
$publisher->publish($message);