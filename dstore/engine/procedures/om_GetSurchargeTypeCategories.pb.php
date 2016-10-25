<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetSurchargeTypeCategories.proto

namespace Dstore\Engine\Om_GetSurchargeTypeCategories;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $category_id = null;
    private $category_id_null = false;

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function setCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->category_id = $var;
    }

    public function getCategoryIdNull()
    {
        return $this->category_id_null;
    }

    public function setCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->category_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetSurchargeTypeCategories\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $priority_no = null;
    private $category_description = null;
    private $surcharge_type_category_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getPriorityNo()
    {
        return $this->priority_no;
    }

    public function setPriorityNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->priority_no = $var;
    }

    public function getCategoryDescription()
    {
        return $this->category_description;
    }

    public function setCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->category_description = $var;
    }

    public function getSurchargeTypeCategoryId()
    {
        return $this->surcharge_type_category_id;
    }

    public function setSurchargeTypeCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->surcharge_type_category_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9e060a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4765745375726368617267655479706543617465676f726965732e" .
    "70726f746f122b6473746f72652e656e67696e652e6f6d5f476574537572" .
    "6368617267655479706543617465676f726965731a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22590a0a506172616d65746572" .
    "7312300a0b63617465676f72795f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512190a106361746567" .
    "6f72795f69645f6e756c6c18e907200128082296030a08526573706f6e73" .
    "6512480a106d6574615f696e666f726d6174696f6e18022003280b322e2e" .
    "6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e" .
    "4d657461496e666f726d6174696f6e122f0a076d65737361676518032003" .
    "280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d6573" .
    "7361676512460a03726f7718042003280b32392e6473746f72652e656e67" .
    "696e652e6f6d5f4765745375726368617267655479706543617465676f72" .
    "6965732e526573706f6e73652e526f771ac6010a03526f77120f0a06726f" .
    "775f696418904e2001280512310a0b7072696f726974795f6e6f18914e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756512390a1463617465676f72795f6465736372697074696f6e18924e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512400a1a7375726368617267655f747970655f63617465676f72795f69" .
    "6418934e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565425e0a1b696f2e6473746f72652e656e67696e652e7072" .
    "6f636564757265735a3f676f73646b2e6473746f72652e64652f656e6769" .
    "6e652f70726f636564757265732f6f6d5f47657453757263686172676554" .
    "79706543617465676f72696573620670726f746f33"
));

