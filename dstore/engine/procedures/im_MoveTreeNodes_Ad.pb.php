<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_MoveTreeNodes_Ad.proto

namespace Dstore\Engine\Im_MoveTreeNodes_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $target_tree_node_id = null;
    private $target_tree_node_id_null = false;
    private $resort = null;
    private $resort_null = false;

    public function getTargetTreeNodeId()
    {
        return $this->target_tree_node_id;
    }

    public function setTargetTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->target_tree_node_id = $var;
    }

    public function getTargetTreeNodeIdNull()
    {
        return $this->target_tree_node_id_null;
    }

    public function setTargetTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->target_tree_node_id_null = $var;
    }

    public function getResort()
    {
        return $this->resort;
    }

    public function setResort(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->resort = $var;
    }

    public function getResortNull()
    {
        return $this->resort_null;
    }

    public function setResortNull($var)
    {
        GPBUtil::checkBool($var);
        $this->resort_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_MoveTreeNodes_Ad\Response_Row::class);
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
    "0a99050a326473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4d6f7665547265654e6f6465735f41642e70726f746f1221647374" .
    "6f72652e656e67696e652e696d5f4d6f7665547265654e6f6465735f4164" .
    "1a136473746f72652f76616c7565732e70726f746f1a1b6473746f72652f" .
    "656e67696e652f6d6573736167652e70726f746f1a236473746f72652f65" .
    "6e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22ac01" .
    "0a0a506172616d657465727312380a137461726765745f747265655f6e6f" .
    "64655f696418012001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512210a187461726765745f747265655f6e6f6465" .
    "5f69645f6e756c6c18e90720012808122b0a067265736f72741802200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "12140a0b7265736f72745f6e756c6c18ea072001280822db010a08526573" .
    "706f6e736512480a106d6574615f696e666f726d6174696f6e1802200328" .
    "0b322e2e6473746f72652e656e67696e652e6d657461696e666f726d6174" .
    "696f6e2e4d657461496e666f726d6174696f6e122f0a076d657373616765" .
    "18032003280b321e2e6473746f72652e656e67696e652e6d657373616765" .
    "2e4d657373616765123c0a03726f7718042003280b322f2e6473746f7265" .
    "2e656e67696e652e696d5f4d6f7665547265654e6f6465735f41642e5265" .
    "73706f6e73652e526f771a160a03526f77120f0a06726f775f696418904e" .
    "2001280542540a1b696f2e6473746f72652e656e67696e652e70726f6365" .
    "64757265735a35676f73646b2e6473746f72652e64652f656e67696e652f" .
    "70726f636564757265732f696d5f4d6f7665547265654e6f6465735f4164" .
    "620670726f746f33"
));
