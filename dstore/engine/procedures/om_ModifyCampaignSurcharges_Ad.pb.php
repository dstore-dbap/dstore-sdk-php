<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyCampaignSurcharges_Ad.proto

namespace Dstore\Engine\Om_ModifyCampaignSurcharges_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $benefit_id = null;
    private $benefit_id_null = false;
    private $surcharge_type_id = null;
    private $surcharge_type_id_null = false;
    private $surcharge_value = null;
    private $surcharge_value_null = false;
    private $item_condition_id = null;
    private $item_condition_id_null = false;
    private $apply_to_option = null;
    private $apply_to_option_null = false;
    private $delete_benefit = null;
    private $delete_benefit_null = false;
    private $derived_from_person_charac_id = null;
    private $derived_from_person_charac_id_null = false;
    private $derived_from_node_charac_id = null;
    private $derived_from_node_charac_id_null = false;

    public function getBenefitId()
    {
        return $this->benefit_id;
    }

    public function setBenefitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->benefit_id = $var;
    }

    public function getBenefitIdNull()
    {
        return $this->benefit_id_null;
    }

    public function setBenefitIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->benefit_id_null = $var;
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

    public function getItemConditionId()
    {
        return $this->item_condition_id;
    }

    public function setItemConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_condition_id = $var;
    }

    public function getItemConditionIdNull()
    {
        return $this->item_condition_id_null;
    }

    public function setItemConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->item_condition_id_null = $var;
    }

    public function getApplyToOption()
    {
        return $this->apply_to_option;
    }

    public function setApplyToOption(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->apply_to_option = $var;
    }

    public function getApplyToOptionNull()
    {
        return $this->apply_to_option_null;
    }

    public function setApplyToOptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->apply_to_option_null = $var;
    }

    public function getDeleteBenefit()
    {
        return $this->delete_benefit;
    }

    public function setDeleteBenefit(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->delete_benefit = $var;
    }

    public function getDeleteBenefitNull()
    {
        return $this->delete_benefit_null;
    }

    public function setDeleteBenefitNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_benefit_null = $var;
    }

    public function getDerivedFromPersonCharacId()
    {
        return $this->derived_from_person_charac_id;
    }

    public function setDerivedFromPersonCharacId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->derived_from_person_charac_id = $var;
    }

    public function getDerivedFromPersonCharacIdNull()
    {
        return $this->derived_from_person_charac_id_null;
    }

    public function setDerivedFromPersonCharacIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->derived_from_person_charac_id_null = $var;
    }

    public function getDerivedFromNodeCharacId()
    {
        return $this->derived_from_node_charac_id;
    }

    public function setDerivedFromNodeCharacId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->derived_from_node_charac_id = $var;
    }

    public function getDerivedFromNodeCharacIdNull()
    {
        return $this->derived_from_node_charac_id_null;
    }

    public function setDerivedFromNodeCharacIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->derived_from_node_charac_id_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $benefit_id = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyCampaignSurcharges_Ad\Response_Row::class);
        $this->row = $var;
    }

    public function getBenefitId()
    {
        return $this->benefit_id;
    }

    public function setBenefitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->benefit_id = $var;
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
    "0aae0a0a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f6469667943616d706169676e537572636861726765735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4d6f646966" .
    "7943616d706169676e537572636861726765735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22e4050a0a506172616d65" .
    "74657273122f0a0a62656e656669745f696418012001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512180a0f62656e" .
    "656669745f69645f6e756c6c18e9072001280812360a1173757263686172" .
    "67655f747970655f696418022001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565121f0a167375726368617267655f74" .
    "7970655f69645f6e756c6c18ea072001280812340a0f7375726368617267" .
    "655f76616c756518032001280b321b2e6473746f72652e76616c7565732e" .
    "646563696d616c56616c7565121d0a147375726368617267655f76616c75" .
    "655f6e756c6c18eb072001280812360a116974656d5f636f6e646974696f" .
    "6e5f696418042001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565121f0a166974656d5f636f6e646974696f6e5f6964" .
    "5f6e756c6c18ec072001280812340a0f6170706c795f746f5f6f7074696f" .
    "6e18052001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565121d0a146170706c795f746f5f6f7074696f6e5f6e756c6c" .
    "18ed072001280812330a0e64656c6574655f62656e656669741806200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "121c0a1364656c6574655f62656e656669745f6e756c6c18ee0720012808" .
    "12420a1d646572697665645f66726f6d5f706572736f6e5f636861726163" .
    "5f696418072001280b321b2e6473746f72652e76616c7565732e626f6f6c" .
    "65616e56616c7565122b0a22646572697665645f66726f6d5f706572736f" .
    "6e5f6368617261635f69645f6e756c6c18ef072001280812400a1b646572" .
    "697665645f66726f6d5f6e6f64655f6368617261635f696418082001280b" .
    "321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512" .
    "290a20646572697665645f66726f6d5f6e6f64655f6368617261635f6964" .
    "5f6e756c6c18f007200128082297020a08526573706f6e736512480a106d" .
    "6574615f696e666f726d6174696f6e18022003280b322e2e6473746f7265" .
    "2e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e" .
    "666f726d6174696f6e122f0a076d65737361676518032003280b321e2e64" .
    "73746f72652e656e67696e652e6d6573736167652e4d6573736167651247" .
    "0a03726f7718042003280b323a2e6473746f72652e656e67696e652e6f6d" .
    "5f4d6f6469667943616d706169676e537572636861726765735f41642e52" .
    "6573706f6e73652e526f77122f0a0a62656e656669745f69641865200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "1a160a03526f77120f0a06726f775f696418904e20012805425f0a1b696f" .
    "2e6473746f72652e656e67696e652e70726f636564757265735a40676f73" .
    "646b2e6473746f72652e64652f656e67696e652f70726f63656475726573" .
    "2f6f6d5f4d6f6469667943616d706169676e537572636861726765735f41" .
    "64620670726f746f33"
));

