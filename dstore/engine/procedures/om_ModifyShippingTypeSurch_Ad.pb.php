<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyShippingTypeSurch_Ad.proto

namespace Dstore\Engine\Om_ModifyShippingTypeSurch_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $shipping_type_id = null;
    private $shipping_type_id_null = false;
    private $surcharge_type_id = null;
    private $surcharge_type_id_null = false;
    private $surcharge_value = null;
    private $surcharge_value_null = false;
    private $valid_from = null;
    private $valid_from_null = false;
    private $priority_no = null;
    private $priority_no_null = false;
    private $delete_configuration = null;
    private $delete_configuration_null = false;

    public function getShippingTypeId()
    {
        return $this->shipping_type_id;
    }

    public function setShippingTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->shipping_type_id = $var;
    }

    public function getShippingTypeIdNull()
    {
        return $this->shipping_type_id_null;
    }

    public function setShippingTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_type_id_null = $var;
    }

    public function getSurchargeTypeId()
    {
        return $this->surcharge_type_id;
    }

    public function setSurchargeTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->surcharge_type_id = $var;
    }

    public function getSurchargeTypeIdNull()
    {
        return $this->surcharge_type_id_null;
    }

    public function setSurchargeTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->surcharge_type_id_null = $var;
    }

    public function getSurchargeValue()
    {
        return $this->surcharge_value;
    }

    public function setSurchargeValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->surcharge_value = $var;
    }

    public function getSurchargeValueNull()
    {
        return $this->surcharge_value_null;
    }

    public function setSurchargeValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->surcharge_value_null = $var;
    }

    public function getValidFrom()
    {
        return $this->valid_from;
    }

    public function setValidFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->valid_from = $var;
    }

    public function getValidFromNull()
    {
        return $this->valid_from_null;
    }

    public function setValidFromNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_from_null = $var;
    }

    public function getPriorityNo()
    {
        return $this->priority_no;
    }

    public function setPriorityNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->priority_no = $var;
    }

    public function getPriorityNoNull()
    {
        return $this->priority_no_null;
    }

    public function setPriorityNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->priority_no_null = $var;
    }

    public function getDeleteConfiguration()
    {
        return $this->delete_configuration;
    }

    public function setDeleteConfiguration(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_configuration = $var;
    }

    public function getDeleteConfigurationNull()
    {
        return $this->delete_configuration_null;
    }

    public function setDeleteConfigurationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_configuration_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyShippingTypeSurch_Ad\Response_Row::class);
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
    "0a9f080a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f646966795368697070696e675479706553757263685f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e6f6d5f4d6f64696679" .
    "5368697070696e675479706553757263685f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f228a040a0a506172616d657465" .
    "727312350a107368697070696e675f747970655f696418012001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565121e0a" .
    "157368697070696e675f747970655f69645f6e756c6c18e9072001280812" .
    "360a117375726368617267655f747970655f696418022001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565121f0a1673" .
    "75726368617267655f747970655f69645f6e756c6c18ea07200128081234" .
    "0a0f7375726368617267655f76616c756518032001280b321b2e6473746f" .
    "72652e76616c7565732e646563696d616c56616c7565121d0a1473757263" .
    "68617267655f76616c75655f6e756c6c18eb072001280812310a0a76616c" .
    "69645f66726f6d18042001280b321d2e6473746f72652e76616c7565732e" .
    "74696d657374616d7056616c756512180a0f76616c69645f66726f6d5f6e" .
    "756c6c18ec072001280812300a0b7072696f726974795f6e6f1805200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12190a107072696f726974795f6e6f5f6e756c6c18ed072001280812390a" .
    "1464656c6574655f636f6e66696775726174696f6e18062001280b321b2e" .
    "6473746f72652e76616c7565732e626f6f6c65616e56616c756512220a19" .
    "64656c6574655f636f6e66696775726174696f6e5f6e756c6c18ee072001" .
    "280822e5010a08526573706f6e736512480a106d6574615f696e666f726d" .
    "6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d65" .
    "7461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e12" .
    "2f0a076d65737361676518032003280b321e2e6473746f72652e656e6769" .
    "6e652e6d6573736167652e4d65737361676512460a03726f771804200328" .
    "0b32392e6473746f72652e656e67696e652e6f6d5f4d6f64696679536869" .
    "7070696e675479706553757263685f41642e526573706f6e73652e526f77" .
    "1a160a03526f77120f0a06726f775f696418904e20012805425e0a1b696f" .
    "2e6473746f72652e656e67696e652e70726f636564757265735a3f676f73" .
    "646b2e6473746f72652e64652f656e67696e652f70726f63656475726573" .
    "2f6f6d5f4d6f646966795368697070696e675479706553757263685f4164" .
    "620670726f746f33"
));

