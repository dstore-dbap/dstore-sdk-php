<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetGroupSurcharges_Ad.proto

namespace Dstore\Engine\Om_GetGroupSurcharges_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $group_id = null;
    private $group_id_null = false;
    private $tree_node_id = null;
    private $tree_node_id_null = false;

    public function getGroupId()
    {
        return $this->group_id;
    }

    public function setGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->group_id = $var;
    }

    public function getGroupIdNull()
    {
        return $this->group_id_null;
    }

    public function setGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->group_id_null = $var;
    }

    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_node_id = $var;
    }

    public function getTreeNodeIdNull()
    {
        return $this->tree_node_id_null;
    }

    public function setTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetGroupSurcharges_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $relative = null;
    private $unit_symbol = null;
    private $surcharge_value = null;
    private $group_id = null;
    private $group_description = null;
    private $node_description = null;
    private $active = null;
    private $unit_id = null;
    private $brutto = null;
    private $tree_node_id = null;
    private $node_id = null;
    private $surcharge_type_description = null;
    private $surcharge_type_id = null;
    private $level_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getRelative()
    {
        return $this->relative;
    }

    public function setRelative(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->relative = $var;
    }

    public function getUnitSymbol()
    {
        return $this->unit_symbol;
    }

    public function setUnitSymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unit_symbol = $var;
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

    public function getGroupId()
    {
        return $this->group_id;
    }

    public function setGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->group_id = $var;
    }

    public function getGroupDescription()
    {
        return $this->group_description;
    }

    public function setGroupDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->group_description = $var;
    }

    public function getNodeDescription()
    {
        return $this->node_description;
    }

    public function setNodeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_description = $var;
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

    public function getUnitId()
    {
        return $this->unit_id;
    }

    public function setUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->unit_id = $var;
    }

    public function getBrutto()
    {
        return $this->brutto;
    }

    public function setBrutto(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->brutto = $var;
    }

    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_node_id = $var;
    }

    public function getNodeId()
    {
        return $this->node_id;
    }

    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_id = $var;
    }

    public function getSurchargeTypeDescription()
    {
        return $this->surcharge_type_description;
    }

    public function setSurchargeTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->surcharge_type_description = $var;
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

    public function getLevelId()
    {
        return $this->level_id;
    }

    public function setLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af40a0a376473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657447726f7570537572636861726765735f41642e70726f746f" .
    "12266473746f72652e656e67696e652e6f6d5f47657447726f7570537572" .
    "636861726765735f41641a136473746f72652f76616c7565732e70726f74" .
    "6f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f746f" .
    "1a236473746f72652f656e67696e652f6d657461696e666f726d6174696f" .
    "6e2e70726f746f22a2010a0a506172616d6574657273122d0a0867726f75" .
    "705f696418012001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c756512160a0d67726f75705f69645f6e756c6c18e90720" .
    "01280812310a0c747265655f6e6f64655f696418022001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565121a0a117472" .
    "65655f6e6f64655f69645f6e756c6c18ea072001280822b1070a08526573" .
    "706f6e736512480a106d6574615f696e666f726d6174696f6e1802200328" .
    "0b322e2e6473746f72652e656e67696e652e6d657461696e666f726d6174" .
    "696f6e2e4d657461496e666f726d6174696f6e122f0a076d657373616765" .
    "18032003280b321e2e6473746f72652e656e67696e652e6d657373616765" .
    "2e4d65737361676512410a03726f7718042003280b32342e6473746f7265" .
    "2e656e67696e652e6f6d5f47657447726f7570537572636861726765735f" .
    "41642e526573706f6e73652e526f771ae6050a03526f77120f0a06726f77" .
    "5f696418904e20012805122e0a0872656c617469766518914e2001280b32" .
    "1b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75651230" .
    "0a0b756e69745f73796d626f6c18924e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756512350a0f7375726368617267" .
    "655f76616c756518934e2001280b321b2e6473746f72652e76616c756573" .
    "2e646563696d616c56616c7565122e0a0867726f75705f696418944e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512360a1167726f75705f6465736372697074696f6e18954e2001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c756512350a" .
    "106e6f64655f6465736372697074696f6e18964e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565122c0a0661637469" .
    "766518974e2001280b321b2e6473746f72652e76616c7565732e626f6f6c" .
    "65616e56616c7565122d0a07756e69745f696418984e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565122c0a0662" .
    "727574746f18994e2001280b321b2e6473746f72652e76616c7565732e62" .
    "6f6f6c65616e56616c756512320a0c747265655f6e6f64655f6964189a4e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565122d0a076e6f64655f6964189b4e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c7565123f0a1a737572636861" .
    "7267655f747970655f6465736372697074696f6e189c4e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512370a1173" .
    "75726368617267655f747970655f6964189d4e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c7565122e0a086c657665" .
    "6c5f6964189e4e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756542590a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a3a676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f6f6d5f47657447726f75705375" .
    "72636861726765735f4164620670726f746f33"
));

