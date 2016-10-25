<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/elastic/item/node.proto

namespace Dstore\Elastic\Node;

require_once('dstore/elastic/elastic.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Node extends \Google\Protobuf\Internal\Message
{
    private $description = '';
    private $tree_node_id = 0;
    private $active = false;
    private $level_id = 0;
    private $sort_no = 0;
    private $predecessor_tree_node_id;
    private $fields;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    public function setTreeNodeId($var)
    {
        GPBUtil::checkInt32($var);
        $this->tree_node_id = $var;
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

    public function getLevelId()
    {
        return $this->level_id;
    }

    public function setLevelId($var)
    {
        GPBUtil::checkInt32($var);
        $this->level_id = $var;
    }

    public function getSortNo()
    {
        return $this->sort_no;
    }

    public function setSortNo($var)
    {
        GPBUtil::checkInt32($var);
        $this->sort_no = $var;
    }

    public function getPredecessorTreeNodeId()
    {
        return $this->predecessor_tree_node_id;
    }

    public function setPredecessorTreeNodeId(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->predecessor_tree_node_id = $var;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields(&$var)
    {
        $this->fields = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab3030a1e6473746f72652f656c61737469632f6974656d2f6e6f64652e" .
    "70726f746f12136473746f72652e656c61737469632e6e6f64651a1c6473" .
    "746f72652f656c61737469632f656c61737469632e70726f746f2283020a" .
    "044e6f646512130a0b6465736372697074696f6e18012001280912140a0c" .
    "747265655f6e6f64655f6964180220012805120e0a066163746976651803" .
    "2001280812100a086c6576656c5f6964180420012805120f0a07736f7274" .
    "5f6e6f18052001280512200a187072656465636573736f725f747265655f" .
    "6e6f64655f696418062003280512350a066669656c647318142003280b32" .
    "252e6473746f72652e656c61737469632e6e6f64652e4e6f64652e466965" .
    "6c6473456e7472791a440a0b4669656c6473456e747279120b0a036b6579" .
    "18012001280912240a0576616c756518022001280b32152e6473746f7265" .
    "2e656c61737469632e4669656c643a02380142500a16696f2e6473746f72" .
    "652e656c61737469632e6974656d420b456c61737469634e6f64655a2967" .
    "6f73646b2e6473746f72652e64652f656c61737469632f6974656d2f656c" .
    "61737469635f6e6f6465620670726f746f33"
));
