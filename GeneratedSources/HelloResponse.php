<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GreetingService.proto

namespace GeneratedSources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GeneratedSources.HelloResponse</code>
 */
class HelloResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string greeting = 1;</code>
     */
    protected $greeting = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $greeting
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GreetingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string greeting = 1;</code>
     * @return string
     */
    public function getGreeting()
    {
        return $this->greeting;
    }

    /**
     * Generated from protobuf field <code>string greeting = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGreeting($var)
    {
        GPBUtil::checkString($var, True);
        $this->greeting = $var;

        return $this;
    }

}

