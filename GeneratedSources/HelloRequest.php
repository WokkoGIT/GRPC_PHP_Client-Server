<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GreetingService.proto

namespace GeneratedSources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GeneratedSources.HelloRequest</code>
 */
class HelloRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int32 userID = 3;</code>
     */
    protected $userID = 0;
    /**
     * Generated from protobuf field <code>int32 txid = 4;</code>
     */
    protected $txid = 0;
    /**
     * Generated from protobuf field <code>int32 orderID = 5;</code>
     */
    protected $orderID = 0;
    /**
     * Generated from protobuf field <code>string refundAddress = 6;</code>
     */
    protected $refundAddress = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int $userID
     *     @type int $txid
     *     @type int $orderID
     *     @type string $refundAddress
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GreetingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 userID = 3;</code>
     * @return int
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Generated from protobuf field <code>int32 userID = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setUserID($var)
    {
        GPBUtil::checkInt32($var);
        $this->userID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 txid = 4;</code>
     * @return int
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * Generated from protobuf field <code>int32 txid = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTxid($var)
    {
        GPBUtil::checkInt32($var);
        $this->txid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 orderID = 5;</code>
     * @return int
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Generated from protobuf field <code>int32 orderID = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderID($var)
    {
        GPBUtil::checkInt32($var);
        $this->orderID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string refundAddress = 6;</code>
     * @return string
     */
    public function getRefundAddress()
    {
        return $this->refundAddress;
    }

    /**
     * Generated from protobuf field <code>string refundAddress = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRefundAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->refundAddress = $var;

        return $this;
    }

}

