<?php
require dirname(__FILE__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

class GreetingService_server extends \GeneratedSources\GreetingServiceStub
{
  public function greeting(
    \GeneratedSources\HelloRequest $request,
    \Grpc\ServerContext $serverContext
  ): ?\GeneratedSources\HelloResponse {
    $name = $request->getName();
    $txid = $request->getTxid();
    $refundAddress = $request->getRefundAddress();
    $orderID = $request->getOrderID();
    $userID = $request->getUserID();

    echo    "Информация о клиенте:\n\n".
            "Client name: ".$name."\n".
            "Client txid: ".$txid."\n".
            "Client refund Address: ".$refundAddress."\n".
            "Client orderID: ".$orderID."\n".
            "Client userID:".$userID."\n";

    $response = new \GeneratedSources\HelloResponse();

      if ($refundAddress==(getenv("TRUSTED_SECRET_KEY"))) {
          echo "\nСовершаем логику на сервере...\n\n";
          $response->setGreeting("TRUSTED USER: " . $name);
      } else {
          echo "\nКлиент с неправильным ключем, не совершаем логику\n\n";
          $response = null;
      }

    return $response;
  }
}

$server = new \Grpc\RpcServer();
$server->addHttp2Port('0.0.0.0:8080');
$server->handle(new GreetingService_server());
$server->run();
