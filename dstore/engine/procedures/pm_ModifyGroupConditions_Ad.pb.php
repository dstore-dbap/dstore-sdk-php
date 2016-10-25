<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyGroupConditions_Ad.proto

namespace Dstore\Engine\Pm_ModifyGroupConditions_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $condition_id = null;
    private $condition_id_null = false;
    private $condition_description = null;
    private $condition_description_null = false;
    private $delete_group_condition = null;
    private $delete_group_condition_null = false;

    public function getConditionId()
    {
        return $this->condition_id;
    }

    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_id = $var;
    }

    public function getConditionIdNull()
    {
        return $this->condition_id_null;
    }

    public function setConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_id_null = $var;
    }

    public function getConditionDescription()
    {
        return $this->condition_description;
    }

    public function setConditionDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition_description = $var;
    }

    public function getConditionDescriptionNull()
    {
        return $this->condition_description_null;
    }

    public function setConditionDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_description_null = $var;
    }

    public function getDeleteGroupCondition()
    {
        return $this->delete_group_condition;
    }

    public function setDeleteGroupCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_group_condition = $var;
    }

    public function getDeleteGroupConditionNull()
    {
        return $this->delete_group_condition_null;
    }

    public function setDeleteGroupConditionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_group_condition_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_ModifyGroupConditions_Ad\Response_Row::class);
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
    "0aab060a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4d6f6469667947726f7570436f6e646974696f6e735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e706d5f4d6f646966794772" .
    "6f7570436f6e646974696f6e735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f229e020a0a506172616d65746572731231" .
    "0a0c636f6e646974696f6e5f696418012001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565121a0a11636f6e64697469" .
    "6f6e5f69645f6e756c6c18e9072001280812390a15636f6e646974696f6e" .
    "5f6465736372697074696f6e18022001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512230a1a636f6e646974696f6e5f" .
    "6465736372697074696f6e5f6e756c6c18ea0720012808123b0a1664656c" .
    "6574655f67726f75705f636f6e646974696f6e18032001280b321b2e6473" .
    "746f72652e76616c7565732e626f6f6c65616e56616c756512240a1b6465" .
    "6c6574655f67726f75705f636f6e646974696f6e5f6e756c6c18eb072001" .
    "280822e3010a08526573706f6e736512480a106d6574615f696e666f726d" .
    "6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d65" .
    "7461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e12" .
    "2f0a076d65737361676518032003280b321e2e6473746f72652e656e6769" .
    "6e652e6d6573736167652e4d65737361676512440a03726f771804200328" .
    "0b32372e6473746f72652e656e67696e652e706d5f4d6f6469667947726f" .
    "7570436f6e646974696f6e735f41642e526573706f6e73652e526f771a16" .
    "0a03526f77120f0a06726f775f696418904e20012805425c0a1b696f2e64" .
    "73746f72652e656e67696e652e70726f636564757265735a3d676f73646b" .
    "2e6473746f72652e64652f656e67696e652f70726f636564757265732f70" .
    "6d5f4d6f6469667947726f7570436f6e646974696f6e735f416462067072" .
    "6f746f33"
));

