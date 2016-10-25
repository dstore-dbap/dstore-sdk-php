<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyShippingTypes_Ad.proto

namespace Dstore\Engine\Om_ModifyShippingTypes_Ad;

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
    private $shipping_type_description = null;
    private $shipping_type_description_null = false;
    private $region_id = null;
    private $region_id_null = false;
    private $brutto_sum_from = null;
    private $brutto_sum_from_null = false;
    private $brutto_sum_to = null;
    private $brutto_sum_to_null = false;
    private $currency_id = null;
    private $currency_id_null = false;
    private $surcharge_type_id = null;
    private $surcharge_type_id_null = false;
    private $cost = null;
    private $cost_null = false;
    private $delete_shipping_type = null;
    private $delete_shipping_type_null = false;
    private $active = null;
    private $active_null = false;
    private $predef_bill_content_description = null;
    private $predef_bill_content_description_null = false;

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

    public function getShippingTypeDescription()
    {
        return $this->shipping_type_description;
    }

    public function setShippingTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->shipping_type_description = $var;
    }

    public function getShippingTypeDescriptionNull()
    {
        return $this->shipping_type_description_null;
    }

    public function setShippingTypeDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_type_description_null = $var;
    }

    public function getRegionId()
    {
        return $this->region_id;
    }

    public function setRegionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->region_id = $var;
    }

    public function getRegionIdNull()
    {
        return $this->region_id_null;
    }

    public function setRegionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->region_id_null = $var;
    }

    public function getBruttoSumFrom()
    {
        return $this->brutto_sum_from;
    }

    public function setBruttoSumFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->brutto_sum_from = $var;
    }

    public function getBruttoSumFromNull()
    {
        return $this->brutto_sum_from_null;
    }

    public function setBruttoSumFromNull($var)
    {
        GPBUtil::checkBool($var);
        $this->brutto_sum_from_null = $var;
    }

    public function getBruttoSumTo()
    {
        return $this->brutto_sum_to;
    }

    public function setBruttoSumTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->brutto_sum_to = $var;
    }

    public function getBruttoSumToNull()
    {
        return $this->brutto_sum_to_null;
    }

    public function setBruttoSumToNull($var)
    {
        GPBUtil::checkBool($var);
        $this->brutto_sum_to_null = $var;
    }

    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    public function setCurrencyId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->currency_id = $var;
    }

    public function getCurrencyIdNull()
    {
        return $this->currency_id_null;
    }

    public function setCurrencyIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->currency_id_null = $var;
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

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->cost = $var;
    }

    public function getCostNull()
    {
        return $this->cost_null;
    }

    public function setCostNull($var)
    {
        GPBUtil::checkBool($var);
        $this->cost_null = $var;
    }

    public function getDeleteShippingType()
    {
        return $this->delete_shipping_type;
    }

    public function setDeleteShippingType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_shipping_type = $var;
    }

    public function getDeleteShippingTypeNull()
    {
        return $this->delete_shipping_type_null;
    }

    public function setDeleteShippingTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_shipping_type_null = $var;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->active = $var;
    }

    public function getActiveNull()
    {
        return $this->active_null;
    }

    public function setActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->active_null = $var;
    }

    public function getPredefBillContentDescription()
    {
        return $this->predef_bill_content_description;
    }

    public function setPredefBillContentDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->predef_bill_content_description = $var;
    }

    public function getPredefBillContentDescriptionNull()
    {
        return $this->predef_bill_content_description_null;
    }

    public function setPredefBillContentDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->predef_bill_content_description_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyShippingTypes_Ad\Response_Row::class);
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
    "0aba0b0a386473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f646966795368697070696e6754797065735f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e6f6d5f4d6f6469667953686970" .
    "70696e6754797065735f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22b5070a0a506172616d657465727312350a107368" .
    "697070696e675f747970655f696418012001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565121e0a157368697070696e" .
    "675f747970655f69645f6e756c6c18e90720012808123d0a197368697070" .
    "696e675f747970655f6465736372697074696f6e18022001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c756512270a1e7368" .
    "697070696e675f747970655f6465736372697074696f6e5f6e756c6c18ea" .
    "0720012808122e0a09726567696f6e5f696418032001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512170a0e726567" .
    "696f6e5f69645f6e756c6c18eb072001280812340a0f62727574746f5f73" .
    "756d5f66726f6d18042001280b321b2e6473746f72652e76616c7565732e" .
    "646563696d616c56616c7565121d0a1462727574746f5f73756d5f66726f" .
    "6d5f6e756c6c18ec072001280812320a0d62727574746f5f73756d5f746f" .
    "18052001280b321b2e6473746f72652e76616c7565732e646563696d616c" .
    "56616c7565121b0a1262727574746f5f73756d5f746f5f6e756c6c18ed07" .
    "2001280812300a0b63757272656e63795f696418062001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512190a106375" .
    "7272656e63795f69645f6e756c6c18ee072001280812360a117375726368" .
    "617267655f747970655f696418072001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565121f0a16737572636861726765" .
    "5f747970655f69645f6e756c6c18ef072001280812290a04636f73741808" .
    "2001280b321b2e6473746f72652e76616c7565732e646563696d616c5661" .
    "6c756512120a09636f73745f6e756c6c18f0072001280812390a1464656c" .
    "6574655f7368697070696e675f7479706518092001280b321b2e6473746f" .
    "72652e76616c7565732e626f6f6c65616e56616c756512220a1964656c65" .
    "74655f7368697070696e675f747970655f6e756c6c18f10720012808122b" .
    "0a06616374697665180a2001280b321b2e6473746f72652e76616c756573" .
    "2e626f6f6c65616e56616c756512140a0b6163746976655f6e756c6c18f2" .
    "072001280812430a1f7072656465665f62696c6c5f636f6e74656e745f64" .
    "65736372697074696f6e180b2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122d0a247072656465665f62696c6c5f" .
    "636f6e74656e745f6465736372697074696f6e5f6e756c6c18f307200128" .
    "0822e1010a08526573706f6e736512480a106d6574615f696e666f726d61" .
    "74696f6e18022003280b322e2e6473746f72652e656e67696e652e6d6574" .
    "61696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f" .
    "0a076d65737361676518032003280b321e2e6473746f72652e656e67696e" .
    "652e6d6573736167652e4d65737361676512420a03726f7718042003280b" .
    "32352e6473746f72652e656e67696e652e6f6d5f4d6f6469667953686970" .
    "70696e6754797065735f41642e526573706f6e73652e526f771a160a0352" .
    "6f77120f0a06726f775f696418904e20012805425a0a1b696f2e6473746f" .
    "72652e656e67696e652e70726f636564757265735a3b676f73646b2e6473" .
    "746f72652e64652f656e67696e652f70726f636564757265732f6f6d5f4d" .
    "6f646966795368697070696e6754797065735f4164620670726f746f33"
));

