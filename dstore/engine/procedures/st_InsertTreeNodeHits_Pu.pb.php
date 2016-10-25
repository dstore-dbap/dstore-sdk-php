<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_InsertTreeNodeHits_Pu.proto

namespace Dstore\Engine\St_InsertTreeNodeHits_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $tree_node_id = null;
    private $tree_node_id_null = false;
    private $unique_id = null;
    private $unique_id_null = false;
    private $is_node_id = null;
    private $is_node_id_null = false;

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

    public function getUniqueId()
    {
        return $this->unique_id;
    }

    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unique_id = $var;
    }

    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    public function getIsNodeId()
    {
        return $this->is_node_id;
    }

    public function setIsNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_node_id = $var;
    }

    public function getIsNodeIdNull()
    {
        return $this->is_node_id_null;
    }

    public function setIsNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_node_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\St_InsertTreeNodeHits_Pu\Response_Row::class);
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
    "0aef050a376473746f72652f656e67696e652f70726f636564757265732f" .
    "73745f496e73657274547265654e6f6465486974735f50752e70726f746f" .
    "12266473746f72652e656e67696e652e73745f496e73657274547265654e" .
    "6f6465486974735f50751a136473746f72652f76616c7565732e70726f74" .
    "6f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f746f" .
    "1a236473746f72652f656e67696e652f6d657461696e666f726d6174696f" .
    "6e2e70726f746f22ee010a0a506172616d657465727312310a0c74726565" .
    "5f6e6f64655f696418012001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565121a0a11747265655f6e6f64655f69645f" .
    "6e756c6c18e90720012808122d0a09756e697175655f696418022001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75651217" .
    "0a0e756e697175655f69645f6e756c6c18ea0720012808122f0a0a69735f" .
    "6e6f64655f696418032001280b321b2e6473746f72652e76616c7565732e" .
    "626f6f6c65616e56616c756512180a0f69735f6e6f64655f69645f6e756c" .
    "6c18eb072001280822e0010a08526573706f6e736512480a106d6574615f" .
    "696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e67" .
    "696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d" .
    "6174696f6e122f0a076d65737361676518032003280b321e2e6473746f72" .
    "652e656e67696e652e6d6573736167652e4d65737361676512410a03726f" .
    "7718042003280b32342e6473746f72652e656e67696e652e73745f496e73" .
    "657274547265654e6f6465486974735f50752e526573706f6e73652e526f" .
    "771a160a03526f77120f0a06726f775f696418904e2001280542590a1b69" .
    "6f2e6473746f72652e656e67696e652e70726f636564757265735a3a676f" .
    "73646b2e6473746f72652e64652f656e67696e652f70726f636564757265" .
    "732f73745f496e73657274547265654e6f6465486974735f507562067072" .
    "6f746f33"
));

