<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_LogPageVisits_Pu.proto

namespace Dstore\Engine\St_LogPageVisits_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $unique_id = null;
    private $unique_id_null = false;
    private $page_no = null;
    private $page_no_null = false;

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

    public function getPageNo()
    {
        return $this->page_no;
    }

    public function setPageNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->page_no = $var;
    }

    public function getPageNoNull()
    {
        return $this->page_no_null;
    }

    public function setPageNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->page_no_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\St_LogPageVisits_Pu\Response_Row::class);
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
    "0a86050a326473746f72652f656e67696e652f70726f636564757265732f" .
    "73745f4c6f67506167655669736974735f50752e70726f746f1221647374" .
    "6f72652e656e67696e652e73745f4c6f67506167655669736974735f5075" .
    "1a136473746f72652f76616c7565732e70726f746f1a1b6473746f72652f" .
    "656e67696e652f6d6573736167652e70726f746f1a236473746f72652f65" .
    "6e67696e652f6d657461696e666f726d6174696f6e2e70726f746f229901" .
    "0a0a506172616d6574657273122d0a09756e697175655f69641801200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "170a0e756e697175655f69645f6e756c6c18e90720012808122c0a077061" .
    "67655f6e6f18022001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512150a0c706167655f6e6f5f6e756c6c18ea0720" .
    "01280822db010a08526573706f6e736512480a106d6574615f696e666f72" .
    "6d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d" .
    "657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e" .
    "122f0a076d65737361676518032003280b321e2e6473746f72652e656e67" .
    "696e652e6d6573736167652e4d657373616765123c0a03726f7718042003" .
    "280b322f2e6473746f72652e656e67696e652e73745f4c6f675061676556" .
    "69736974735f50752e526573706f6e73652e526f771a160a03526f77120f" .
    "0a06726f775f696418904e2001280542540a1b696f2e6473746f72652e65" .
    "6e67696e652e70726f636564757265735a35676f73646b2e6473746f7265" .
    "2e64652f656e67696e652f70726f636564757265732f73745f4c6f675061" .
    "67655669736974735f5075620670726f746f33"
));

