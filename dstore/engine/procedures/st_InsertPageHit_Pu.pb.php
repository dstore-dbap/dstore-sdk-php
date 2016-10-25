<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_InsertPageHit_Pu.proto

namespace Dstore\Engine\St_InsertPageHit_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $page_description = null;
    private $page_description_null = false;
    private $unique_id = null;
    private $unique_id_null = false;

    public function getPageDescription()
    {
        return $this->page_description;
    }

    public function setPageDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->page_description = $var;
    }

    public function getPageDescriptionNull()
    {
        return $this->page_description_null;
    }

    public function setPageDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->page_description_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\St_InsertPageHit_Pu\Response_Row::class);
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
    "0a97050a326473746f72652f656e67696e652f70726f636564757265732f" .
    "73745f496e73657274506167654869745f50752e70726f746f1221647374" .
    "6f72652e656e67696e652e73745f496e73657274506167654869745f5075" .
    "1a136473746f72652f76616c7565732e70726f746f1a1b6473746f72652f" .
    "656e67696e652f6d6573736167652e70726f746f1a236473746f72652f65" .
    "6e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22aa01" .
    "0a0a506172616d657465727312340a10706167655f646573637269707469" .
    "6f6e18012001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565121e0a15706167655f6465736372697074696f6e5f6e756c" .
    "6c18e90720012808122d0a09756e697175655f696418022001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512170a0e75" .
    "6e697175655f69645f6e756c6c18ea072001280822db010a08526573706f" .
    "6e736512480a106d6574615f696e666f726d6174696f6e18022003280b32" .
    "2e2e6473746f72652e656e67696e652e6d657461696e666f726d6174696f" .
    "6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167651803" .
    "2003280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d" .
    "657373616765123c0a03726f7718042003280b322f2e6473746f72652e65" .
    "6e67696e652e73745f496e73657274506167654869745f50752e52657370" .
    "6f6e73652e526f771a160a03526f77120f0a06726f775f696418904e2001" .
    "280542540a1b696f2e6473746f72652e656e67696e652e70726f63656475" .
    "7265735a35676f73646b2e6473746f72652e64652f656e67696e652f7072" .
    "6f636564757265732f73745f496e73657274506167654869745f50756206" .
    "70726f746f33"
));
