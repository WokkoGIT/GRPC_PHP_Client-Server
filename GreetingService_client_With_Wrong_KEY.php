<?php

require dirname(__FILE__).'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

function greet($hostname, $name)
{
  $client = new \GeneratedSources\GreetingServiceClient($hostname, [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
  ]);
  $request = new \GeneratedSources\HelloRequest();
  $request->setName($name)
          ->setUserID(12345)
          ->setTxid(1234)
          ->setRefundAddress(getenv("WRONG_KEY"))
          ->setOrderID(12345678);
  list($response, $status) = $client->greeting($request)    ->wait();
  if ($status->code !== Grpc\STATUS_OK) {
    echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
    exit(1);
  }
  echo $response->getGreeting() . PHP_EOL;
}

$name = !empty($argv[1]) ? $argv[1] : 'PHP client';
$hostname = !empty($argv[2]) ? $argv[2] : 'localhost:8080';
greet($hostname, $name);
