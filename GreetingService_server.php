<?php
require dirname(__FILE__) . '/vendor/autoload.php';

class GreetingService_server extends \GeneratedSources\GreetingServiceStub
{
  public function greeting(
    \GeneratedSources\HelloRequest $request,
    \Grpc\ServerContext $serverContext
  ): ?\GeneratedSources\HelloResponse {
    $name = $request->getName();
    $response = new \GeneratedSources\HelloResponse();
    $response->setGreeting("Response from the server to: " . $name);
    return $response;
  }
}

$server = new \Grpc\RpcServer();
$server->addHttp2Port('0.0.0.0:8080');
$server->handle(new GreetingService_server());
$server->run();
