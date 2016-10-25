<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_UpdateLockedTreeNodeIDs_Ad.proto

namespace Dstore\Engine\Im_UpdateLockedTreeNodeIDs_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_id = null;
    private $user_id_null = false;
    private $tree_node_id = null;
    private $tree_node_id_null = false;
    private $lock_tree_node_id = null;
    private $lock_tree_node_id_null = false;

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_id = $var;
    }

    public function getUserIdNull()
    {
        return $this->user_id_null;
    }

    public function setUserIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_id_null = $var;
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

    public function getLockTreeNodeId()
    {
        return $this->lock_tree_node_id;
    }

    public function setLockTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->lock_tree_node_id = $var;
    }

    public function getLockTreeNodeIdNull()
    {
        return $this->lock_tree_node_id_null;
    }

    public function setLockTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->lock_tree_node_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_UpdateLockedTreeNodeIDs_Ad\Response_Row::class);
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
    "0a8e060a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f5570646174654c6f636b6564547265654e6f64654944735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e696d5f557064617465" .
    "4c6f636b6564547265654e6f64654944735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22f9010a0a506172616d657465" .
    "7273122c0a07757365725f696418012001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512150a0c757365725f69645f" .
    "6e756c6c18e9072001280812310a0c747265655f6e6f64655f6964180220" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565121a0a11747265655f6e6f64655f69645f6e756c6c18ea0720012808" .
    "12360a116c6f636b5f747265655f6e6f64655f696418032001280b321b2e" .
    "6473746f72652e76616c7565732e626f6f6c65616e56616c7565121f0a16" .
    "6c6f636b5f747265655f6e6f64655f69645f6e756c6c18eb072001280822" .
    "e5010a08526573706f6e736512480a106d6574615f696e666f726d617469" .
    "6f6e18022003280b322e2e6473746f72652e656e67696e652e6d65746169" .
    "6e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a07" .
    "6d65737361676518032003280b321e2e6473746f72652e656e67696e652e" .
    "6d6573736167652e4d65737361676512460a03726f7718042003280b3239" .
    "2e6473746f72652e656e67696e652e696d5f5570646174654c6f636b6564" .
    "547265654e6f64654944735f41642e526573706f6e73652e526f771a160a" .
    "03526f77120f0a06726f775f696418904e20012805425e0a1b696f2e6473" .
    "746f72652e656e67696e652e70726f636564757265735a3f676f73646b2e" .
    "6473746f72652e64652f656e67696e652f70726f636564757265732f696d" .
    "5f5570646174654c6f636b6564547265654e6f64654944735f4164620670" .
    "726f746f33"
));
