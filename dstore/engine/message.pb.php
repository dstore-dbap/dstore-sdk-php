<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/message.proto

namespace Dstore\Engine\Message;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Message extends \Google\Protobuf\Internal\Message
{
    private $severity = 0;
    private $code = 0;
    private $message = '';

    public function getSeverity()
    {
        return $this->severity;
    }

    public function setSeverity($var)
    {
        GPBUtil::checkInt32($var);
        $this->severity = $var;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0abe010a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f12156473746f72652e656e67696e652e6d657373616765223a0a074d" .
    "65737361676512100a087365766572697479180120012805120c0a04636f" .
    "6465180220012805120f0a076d65737361676518032001280942440a1069" .
    "6f2e6473746f72652e656e67696e65421050726f6365647572654d657373" .
    "6167655a1e676f73646b2e6473746f72652e64652f656e67696e652f6d65" .
    "7373616765620670726f746f33"
));
