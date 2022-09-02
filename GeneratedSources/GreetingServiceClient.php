<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GeneratedSources;

/**
 */
class GreetingServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \GeneratedSources\HelloRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function greeting(\GeneratedSources\HelloRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/GeneratedSources.GreetingService/greeting',
        $argument,
        ['\GeneratedSources\HelloResponse', 'decode'],
        $metadata, $options);
    }

}
