<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyLockedPersonTypes_Ad.proto

namespace Dstore\Engine\Pm_ModifyLockedPersonTypes_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_id = null;
    private $user_id_null = false;
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $locked = null;
    private $locked_null = false;

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_id = $var;
    }

    public function getUserIdNull()
    {
        return $this->user_id_null;
    }

    public function setUserIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_id_null = $var;
    }

    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_type_id = $var;
    }

    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    public function getLocked()
    {
        return $this->locked;
    }

    public function setLocked(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->locked = $var;
    }

    public function getLockedNull()
    {
        return $this->locked_null;
    }

    public function setLockedNull($var)
    {
        GPBUtil::checkBool($var);
        $this->locked_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;

    public function getMetaInformation()
    {
        return $this->meta_information;
    }

    public function setMetaInformation(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Metainformation\MetaInformation::class);
        $this->meta_information = $var;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Message\Message::class);
        $this->message = $var;
    }

    public function getRow()
    {
        return $this->row;
    }

    public function setRow(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_ModifyLockedPersonTypes_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0afc050a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4d6f646966794c6f636b6564506572736f6e54797065735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e706d5f4d6f64696679" .
    "4c6f636b6564506572736f6e54797065735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22e7010a0a506172616d657465" .
    "7273122c0a07757365725f696418012001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512150a0c757365725f69645f" .
    "6e756c6c18e9072001280812330a0e706572736f6e5f747970655f696418" .
    "022001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565121c0a13706572736f6e5f747970655f69645f6e756c6c18ea07" .
    "20012808122b0a066c6f636b656418032001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c756512140a0b6c6f636b65645f" .
    "6e756c6c18eb072001280822e5010a08526573706f6e736512480a106d65" .
    "74615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e" .
    "656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e66" .
    "6f726d6174696f6e122f0a076d65737361676518032003280b321e2e6473" .
    "746f72652e656e67696e652e6d6573736167652e4d65737361676512460a" .
    "03726f7718042003280b32392e6473746f72652e656e67696e652e706d5f" .
    "4d6f646966794c6f636b6564506572736f6e54797065735f41642e526573" .
    "706f6e73652e526f771a160a03526f77120f0a06726f775f696418904e20" .
    "012805425e0a1b696f2e6473746f72652e656e67696e652e70726f636564" .
    "757265735a3f676f73646b2e6473746f72652e64652f656e67696e652f70" .
    "726f636564757265732f706d5f4d6f646966794c6f636b6564506572736f" .
    "6e54797065735f4164620670726f746f33"
));
