<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetHTreeNodeIDs_Ad.proto

namespace Dstore\Engine\Im_GetHTreeNodeIDs_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $node_id = null;
    private $node_id_null = false;
    private $is_tree_node_id = null;
    private $is_tree_node_id_null = false;
    private $get_hierarchy_independent_nodes = null;
    private $get_hierarchy_independent_nodes_null = false;

    public function getNodeId()
    {
        return $this->node_id;
    }

    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_id = $var;
    }

    public function getNodeIdNull()
    {
        return $this->node_id_null;
    }

    public function setNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_id_null = $var;
    }

    public function getIsTreeNodeId()
    {
        return $this->is_tree_node_id;
    }

    public function setIsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_tree_node_id = $var;
    }

    public function getIsTreeNodeIdNull()
    {
        return $this->is_tree_node_id_null;
    }

    public function setIsTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_tree_node_id_null = $var;
    }

    public function getGetHierarchyIndependentNodes()
    {
        return $this->get_hierarchy_independent_nodes;
    }

    public function setGetHierarchyIndependentNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_hierarchy_independent_nodes = $var;
    }

    public function getGetHierarchyIndependentNodesNull()
    {
        return $this->get_hierarchy_independent_nodes_null;
    }

    public function setGetHierarchyIndependentNodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_hierarchy_independent_nodes_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetHTreeNodeIDs_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $node_description = null;
    private $predecessor_tree_node_id = null;
    private $predecessor_description = null;
    private $h_tree_node_id = null;
    private $pre_predecessor_description = null;
    private $pre_predecessor_tree_node_id = null;
    private $tree_node_id = null;
    private $node_id = null;
    private $from_date = null;
    private $to_date = null;
    private $to_date_char = null;
    private $from_date_char = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getPredecessorTreeNodeId()
    {
        return $this->predecessor_tree_node_id;
    }

    public function setPredecessorTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->predecessor_tree_node_id = $var;
    }

    public function getPredecessorDescription()
    {
        return $this->predecessor_description;
    }

    public function setPredecessorDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->predecessor_description = $var;
    }

    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->h_tree_node_id = $var;
    }

    public function getPrePredecessorDescription()
    {
        return $this->pre_predecessor_description;
    }

    public function setPrePredecessorDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->pre_predecessor_description = $var;
    }

    public function getPrePredecessorTreeNodeId()
    {
        return $this->pre_predecessor_tree_node_id;
    }

    public function setPrePredecessorTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->pre_predecessor_tree_node_id = $var;
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

    public function getFromDate()
    {
        return $this->from_date;
    }

    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->from_date = $var;
    }

    public function getToDate()
    {
        return $this->to_date;
    }

    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->to_date = $var;
    }

    public function getToDateChar()
    {
        return $this->to_date_char;
    }

    public function setToDateChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->to_date_char = $var;
    }

    public function getFromDateChar()
    {
        return $this->from_date_char;
    }

    public function setFromDateChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->from_date_char = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab10b0a346473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f47657448547265654e6f64654944735f41642e70726f746f122364" .
    "73746f72652e656e67696e652e696d5f47657448547265654e6f64654944" .
    "735f41641a136473746f72652f76616c7565732e70726f746f1a1b647374" .
    "6f72652f656e67696e652f6d6573736167652e70726f746f1a236473746f" .
    "72652f656e67696e652f6d657461696e666f726d6174696f6e2e70726f74" .
    "6f229b020a0a506172616d6574657273122c0a076e6f64655f6964180120" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756512150a0c6e6f64655f69645f6e756c6c18e9072001280812340a0f69" .
    "735f747265655f6e6f64655f696418022001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c7565121d0a1469735f74726565" .
    "5f6e6f64655f69645f6e756c6c18ea072001280812440a1f6765745f6869" .
    "657261726368795f696e646570656e64656e745f6e6f6465731803200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "122d0a246765745f6869657261726368795f696e646570656e64656e745f" .
    "6e6f6465735f6e756c6c18eb072001280822fe060a08526573706f6e7365" .
    "12480a106d6574615f696e666f726d6174696f6e18022003280b322e2e64" .
    "73746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d" .
    "657461496e666f726d6174696f6e122f0a076d6573736167651803200328" .
    "0b321e2e6473746f72652e656e67696e652e6d6573736167652e4d657373" .
    "616765123e0a03726f7718042003280b32312e6473746f72652e656e6769" .
    "6e652e696d5f47657448547265654e6f64654944735f41642e526573706f" .
    "6e73652e526f771ab6050a03526f77120f0a06726f775f696418904e2001" .
    "280512350a106e6f64655f6465736372697074696f6e18914e2001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c7565123e0a" .
    "187072656465636573736f725f747265655f6e6f64655f696418924e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65123c0a177072656465636573736f725f6465736372697074696f6e1893" .
    "4e2001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512340a0e685f747265655f6e6f64655f696418944e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512400a" .
    "1b7072655f7072656465636573736f725f6465736372697074696f6e1895" .
    "4e2001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512420a1c7072655f7072656465636573736f725f747265655f6e6f" .
    "64655f696418964e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512320a0c747265655f6e6f64655f696418974e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565122d0a076e6f64655f696418984e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512310a0966726f6d5f64" .
    "61746518994e2001280b321d2e6473746f72652e76616c7565732e74696d" .
    "657374616d7056616c7565122f0a07746f5f64617465189a4e2001280b32" .
    "1d2e6473746f72652e76616c7565732e74696d657374616d7056616c7565" .
    "12310a0c746f5f646174655f63686172189b4e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512330a0e66726f6d5f" .
    "646174655f63686172189c4e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756542560a1b696f2e6473746f72652e656e" .
    "67696e652e70726f636564757265735a37676f73646b2e6473746f72652e" .
    "64652f656e67696e652f70726f636564757265732f696d5f476574485472" .
    "65654e6f64654944735f4164620670726f746f33"
));

