<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetGroupConditions_Ad.proto

namespace Dstore\Engine\Pm_GetGroupConditions_Ad;

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
    private $include_conditions = null;
    private $include_conditions_null = false;

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

    public function getIncludeConditions()
    {
        return $this->include_conditions;
    }

    public function setIncludeConditions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_conditions = $var;
    }

    public function getIncludeConditionsNull()
    {
        return $this->include_conditions_null;
    }

    public function setIncludeConditionsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_conditions_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetGroupConditions_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $condition_description = null;
    private $condition_id = null;
    private $condition = null;
    private $condition_position_id = null;
    private $characteristic_description = null;
    private $person_characteristic_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getConditionId()
    {
        return $this->condition_id;
    }

    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_id = $var;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    public function setCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition = $var;
    }

    public function getConditionPositionId()
    {
        return $this->condition_position_id;
    }

    public function setConditionPositionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_position_id = $var;
    }

    public function getCharacteristicDescription()
    {
        return $this->characteristic_description;
    }

    public function setCharacteristicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_description = $var;
    }

    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_characteristic_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9a080a376473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f47657447726f7570436f6e646974696f6e735f41642e70726f746f" .
    "12266473746f72652e656e67696e652e706d5f47657447726f7570436f6e" .
    "646974696f6e735f41641a136473746f72652f76616c7565732e70726f74" .
    "6f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f746f" .
    "1a236473746f72652f656e67696e652f6d657461696e666f726d6174696f" .
    "6e2e70726f746f22b6010a0a506172616d657465727312310a0c636f6e64" .
    "6974696f6e5f696418012001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565121a0a11636f6e646974696f6e5f69645f" .
    "6e756c6c18e9072001280812370a12696e636c7564655f636f6e64697469" .
    "6f6e7318022001280b321b2e6473746f72652e76616c7565732e626f6f6c" .
    "65616e56616c756512200a17696e636c7564655f636f6e646974696f6e73" .
    "5f6e756c6c18ea072001280822c3040a08526573706f6e736512480a106d" .
    "6574615f696e666f726d6174696f6e18022003280b322e2e6473746f7265" .
    "2e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e" .
    "666f726d6174696f6e122f0a076d65737361676518032003280b321e2e64" .
    "73746f72652e656e67696e652e6d6573736167652e4d6573736167651241" .
    "0a03726f7718042003280b32342e6473746f72652e656e67696e652e706d" .
    "5f47657447726f7570436f6e646974696f6e735f41642e526573706f6e73" .
    "652e526f771af8020a03526f77120f0a06726f775f696418904e20012805" .
    "123a0a15636f6e646974696f6e5f6465736372697074696f6e18914e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12320a0c636f6e646974696f6e5f696418924e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c7565122f0a09636f6e64" .
    "6974696f6e18a29c012001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565123c0a15636f6e646974696f6e5f706f736974" .
    "696f6e5f696418a39c012001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512400a1a63686172616374657269737469" .
    "635f6465736372697074696f6e18a49c012001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565123f0a18706572736f6e5f" .
    "63686172616374657269737469635f696418a59c012001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756542590a1b696f" .
    "2e6473746f72652e656e67696e652e70726f636564757265735a3a676f73" .
    "646b2e6473746f72652e64652f656e67696e652f70726f63656475726573" .
    "2f706d5f47657447726f7570436f6e646974696f6e735f4164620670726f" .
    "746f33"
));

