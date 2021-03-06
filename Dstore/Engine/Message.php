<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/engine.proto

namespace Dstore\Engine;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 severity = 1;</code>
     */
    private $severity = 0;
    /**
     * <code>int32 code = 2;</code>
     */
    private $code = 0;
    /**
     * <code>string message = 3;</code>
     */
    private $message = '';

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 severity = 1;</code>
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * <code>int32 severity = 1;</code>
     */
    public function setSeverity($var)
    {
        GPBUtil::checkInt32($var);
        $this->severity = $var;
    }

    /**
     * <code>int32 code = 2;</code>
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * <code>int32 code = 2;</code>
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;
    }

    /**
     * <code>string message = 3;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <code>string message = 3;</code>
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;
    }

}

