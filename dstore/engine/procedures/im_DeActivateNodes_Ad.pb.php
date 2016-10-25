<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_DeActivateNodes_Ad.proto

namespace Dstore\Engine\Im_DeActivateNodes_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $activate = null;
    private $activate_null = false;
    private $tree_node_id_list = null;
    private $tree_node_id_list_null = false;

    public function getActivate()
    {
        return $this->activate;
    }

    public function setActivate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->activate = $var;
    }

    public function getActivateNull()
    {
        return $this->activate_null;
    }

    public function setActivateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->activate_null = $var;
    }

    public function getTreeNodeIdList()
    {
        return $this->tree_node_id_list;
    }

    public function setTreeNodeIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->tree_node_id_list = $var;
    }

    public function getTreeNodeIdListNull()
    {
        return $this->tree_node_id_list_null;
    }

    public function setTreeNodeIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_id_list_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_DeActivateNodes_Ad\Response_Row::class);
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
    "0aa0050a346473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f446541637469766174654e6f6465735f41642e70726f746f122364" .
    "73746f72652e656e67696e652e696d5f446541637469766174654e6f6465" .
    "735f41641a136473746f72652f76616c7565732e70726f746f1a1b647374" .
    "6f72652f656e67696e652f6d6573736167652e70726f746f1a236473746f" .
    "72652f656e67696e652f6d657461696e666f726d6174696f6e2e70726f74" .
    "6f22ab010a0a506172616d6574657273122d0a0861637469766174651801" .
    "2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e5661" .
    "6c756512160a0d61637469766174655f6e756c6c18e9072001280812350a" .
    "11747265655f6e6f64655f69645f6c69737418022001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565121f0a1674726565" .
    "5f6e6f64655f69645f6c6973745f6e756c6c18ea072001280822dd010a08" .
    "526573706f6e736512480a106d6574615f696e666f726d6174696f6e1802" .
    "2003280b322e2e6473746f72652e656e67696e652e6d657461696e666f72" .
    "6d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d657373" .
    "61676518032003280b321e2e6473746f72652e656e67696e652e6d657373" .
    "6167652e4d657373616765123e0a03726f7718042003280b32312e647374" .
    "6f72652e656e67696e652e696d5f446541637469766174654e6f6465735f" .
    "41642e526573706f6e73652e526f771a160a03526f77120f0a06726f775f" .
    "696418904e2001280542560a1b696f2e6473746f72652e656e67696e652e" .
    "70726f636564757265735a37676f73646b2e6473746f72652e64652f656e" .
    "67696e652f70726f636564757265732f696d5f446541637469766174654e" .
    "6f6465735f4164620670726f746f33"
));

