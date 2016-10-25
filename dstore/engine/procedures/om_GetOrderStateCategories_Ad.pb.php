<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderStateCategories_Ad.proto

namespace Dstore\Engine\Om_GetOrderStateCategories_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetOrderStateCategories_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $order_state_category_description = null;
    private $order_state_category_id = null;
    private $order_state_category = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getOrderStateCategoryDescription()
    {
        return $this->order_state_category_description;
    }

    public function setOrderStateCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->order_state_category_description = $var;
    }

    public function getOrderStateCategoryId()
    {
        return $this->order_state_category_id;
    }

    public function setOrderStateCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_state_category_id = $var;
    }

    public function getOrderStateCategory()
    {
        return $this->order_state_category;
    }

    public function setOrderStateCategory(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->order_state_category = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae2050a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4765744f72646572537461746543617465676f726965735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e6f6d5f4765744f7264" .
    "6572537461746543617465676f726965735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f220c0a0a506172616d65746572" .
    "7322a7030a08526573706f6e736512480a106d6574615f696e666f726d61" .
    "74696f6e18022003280b322e2e6473746f72652e656e67696e652e6d6574" .
    "61696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f" .
    "0a076d65737361676518032003280b321e2e6473746f72652e656e67696e" .
    "652e6d6573736167652e4d65737361676512460a03726f7718042003280b" .
    "32392e6473746f72652e656e67696e652e6f6d5f4765744f726465725374" .
    "61746543617465676f726965735f41642e526573706f6e73652e526f771a" .
    "d7010a03526f77120f0a06726f775f696418904e2001280512450a206f72" .
    "6465725f73746174655f63617465676f72795f6465736372697074696f6e" .
    "18914e2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c7565123d0a176f726465725f73746174655f63617465676f72795f" .
    "696418924e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512390a146f726465725f73746174655f63617465676f" .
    "727918934e2001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c7565425e0a1b696f2e6473746f72652e656e67696e652e7072" .
    "6f636564757265735a3f676f73646b2e6473746f72652e64652f656e6769" .
    "6e652f70726f636564757265732f6f6d5f4765744f726465725374617465" .
    "43617465676f726965735f4164620670726f746f33"
));

