<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyOrderStateDescTran_Ad.proto

namespace Dstore\Engine\Om_ModifyOrderStateDescTran_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $order_state_id = null;
    private $order_state_id_null = false;
    private $language_id = null;
    private $language_id_null = false;
    private $public_description = null;
    private $public_description_null = false;

    public function getOrderStateId()
    {
        return $this->order_state_id;
    }

    public function setOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_state_id = $var;
    }

    public function getOrderStateIdNull()
    {
        return $this->order_state_id_null;
    }

    public function setOrderStateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_state_id_null = $var;
    }

    public function getLanguageId()
    {
        return $this->language_id;
    }

    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id = $var;
    }

    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    public function getPublicDescription()
    {
        return $this->public_description;
    }

    public function setPublicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->public_description = $var;
    }

    public function getPublicDescriptionNull()
    {
        return $this->public_description_null;
    }

    public function setPublicDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->public_description_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyOrderStateDescTran_Ad\Response_Row::class);
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
    "0a9f060a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f646966794f726465725374617465446573635472616e5f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4d6f646966" .
    "794f726465725374617465446573635472616e5f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f2286020a0a506172616d65" .
    "7465727312330a0e6f726465725f73746174655f696418012001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565121c0a" .
    "136f726465725f73746174655f69645f6e756c6c18e9072001280812300a" .
    "0b6c616e67756167655f696418022001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512190a106c616e67756167655f" .
    "69645f6e756c6c18ea072001280812360a127075626c69635f6465736372" .
    "697074696f6e18032001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756512200a177075626c69635f646573637269707469" .
    "6f6e5f6e756c6c18eb072001280822e6010a08526573706f6e736512480a" .
    "106d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f" .
    "72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461" .
    "496e666f726d6174696f6e122f0a076d65737361676518032003280b321e" .
    "2e6473746f72652e656e67696e652e6d6573736167652e4d657373616765" .
    "12470a03726f7718042003280b323a2e6473746f72652e656e67696e652e" .
    "6f6d5f4d6f646966794f726465725374617465446573635472616e5f4164" .
    "2e526573706f6e73652e526f771a160a03526f77120f0a06726f775f6964" .
    "18904e20012805425f0a1b696f2e6473746f72652e656e67696e652e7072" .
    "6f636564757265735a40676f73646b2e6473746f72652e64652f656e6769" .
    "6e652f70726f636564757265732f6f6d5f4d6f646966794f726465725374" .
    "617465446573635472616e5f4164620670726f746f33"
));

