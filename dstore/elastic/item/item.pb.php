<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/elastic/item/item.proto

namespace Dstore\Elastic\Item;

require_once('dstore/elastic/elastic.pb.php');
require_once('dstore/elastic/item/node.pb.php');
require_once('dstore/values.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Item extends \Google\Protobuf\Internal\Message
{
    private $node = null;
    private $variant_node;
    private $last_updated = null;
    private $score = 0.0;
    private $index_name = '';
    private $document_id = '';

    public function getNode()
    {
        return $this->node;
    }

    public function setNode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Elastic\Node\Node::class);
        $this->node = $var;
    }

    public function getVariantNode()
    {
        return $this->variant_node;
    }

    public function setVariantNode(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Elastic\Node\Node::class);
        $this->variant_node = $var;
    }

    public function getLastUpdated()
    {
        return $this->last_updated;
    }

    public function setLastUpdated(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->last_updated = $var;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->score = $var;
    }

    public function getIndexName()
    {
        return $this->index_name;
    }

    public function setIndexName($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_name = $var;
    }

    public function getDocumentId()
    {
        return $this->document_id;
    }

    public function setDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->document_id = $var;
    }

}

class Facet extends \Google\Protobuf\Internal\Message
{
    private $field_name = '';
    private $facet_value;
    private $range_from = 0.0;
    private $range_to = 0.0;

    public function getFieldName()
    {
        return $this->field_name;
    }

    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;
    }

    public function getFacetValue()
    {
        return $this->facet_value;
    }

    public function setFacetValue(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Elastic\Item\Facet_FacetValue::class);
        $this->facet_value = $var;
    }

    public function getRangeFrom()
    {
        return $this->range_from;
    }

    public function setRangeFrom($var)
    {
        GPBUtil::checkDouble($var);
        $this->range_from = $var;
    }

    public function getRangeTo()
    {
        return $this->range_to;
    }

    public function setRangeTo($var)
    {
        GPBUtil::checkDouble($var);
        $this->range_to = $var;
    }

}

class Facet_FacetValue extends \Google\Protobuf\Internal\Message
{
    private $value = null;
    private $total_item_count = 0;
    private $matching_item_count = 0;
    private $active = false;
    private $min_value = 0.0;
    private $max_value = 0.0;

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\Value::class);
        $this->value = $var;
    }

    public function getTotalItemCount()
    {
        return $this->total_item_count;
    }

    public function setTotalItemCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_item_count = $var;
    }

    public function getMatchingItemCount()
    {
        return $this->matching_item_count;
    }

    public function setMatchingItemCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->matching_item_count = $var;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($var)
    {
        GPBUtil::checkBool($var);
        $this->active = $var;
    }

    public function getMinValue()
    {
        return $this->min_value;
    }

    public function setMinValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->min_value = $var;
    }

    public function getMaxValue()
    {
        return $this->max_value;
    }

    public function setMaxValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->max_value = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad3050a1e6473746f72652f656c61737469632f6974656d2f6974656d2e" .
    "70726f746f12136473746f72652e656c61737469632e6974656d1a1c6473" .
    "746f72652f656c61737469632f656c61737469632e70726f746f1a1e6473" .
    "746f72652f656c61737469632f6974656d2f6e6f64652e70726f746f1a13" .
    "6473746f72652f76616c7565732e70726f746f22cd010a044974656d1227" .
    "0a046e6f646518012001280b32192e6473746f72652e656c61737469632e" .
    "6e6f64652e4e6f6465122f0a0c76617269616e745f6e6f64651802200328" .
    "0b32192e6473746f72652e656c61737469632e6e6f64652e4e6f64651233" .
    "0a0c6c6173745f7570646174656418032001280b321d2e6473746f72652e" .
    "76616c7565732e74696d657374616d7056616c7565120d0a0573636f7265" .
    "180a2001280112120a0a696e6465785f6e616d65180b2001280912130a0b" .
    "646f63756d656e745f6964180c20012809229e020a05466163657412120a" .
    "0a6669656c645f6e616d65180120012809123a0a0b66616365745f76616c" .
    "756518022003280b32252e6473746f72652e656c61737469632e6974656d" .
    "2e46616365742e466163657456616c756512120a0a72616e67655f66726f" .
    "6d180a2001280112100a0872616e67655f746f180b200128011a9e010a0a" .
    "466163657456616c756512230a0576616c756518012001280b32142e6473" .
    "746f72652e76616c7565732e56616c756512180a10746f74616c5f697465" .
    "6d5f636f756e74180220012805121b0a136d61746368696e675f6974656d" .
    "5f636f756e74180320012805120e0a066163746976651804200128081211" .
    "0a096d696e5f76616c756518052001280112110a096d61785f76616c7565" .
    "18062001280142500a16696f2e6473746f72652e656c61737469632e6974" .
    "656d420b456c61737469634974656d5a29676f73646b2e6473746f72652e" .
    "64652f656c61737469632f6974656d2f656c61737469635f6974656d6206" .
    "70726f746f33"
));
