<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcedureCategories_Ad.proto

namespace Dstore\Engine\Do_GetProcedureCategories_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $procedure_category_id = null;
    private $procedure_category_id_null = false;

    public function getProcedureCategoryId()
    {
        return $this->procedure_category_id;
    }

    public function setProcedureCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->procedure_category_id = $var;
    }

    public function getProcedureCategoryIdNull()
    {
        return $this->procedure_category_id_null;
    }

    public function setProcedureCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_category_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Do_GetProcedureCategories_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $description = null;
    private $procedure_category_id = null;
    private $procedure_category = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->description = $var;
    }

    public function getProcedureCategoryId()
    {
        return $this->procedure_category_id;
    }

    public function setProcedureCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->procedure_category_id = $var;
    }

    public function getProcedureCategory()
    {
        return $this->procedure_category;
    }

    public function setProcedureCategory(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->procedure_category = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa6060a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "646f5f47657450726f63656475726543617465676f726965735f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e646f5f47657450726f63" .
    "656475726543617465676f726965735f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f226d0a0a506172616d657465727312" .
    "3a0a1570726f6365647572655f63617465676f72795f696418012001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "230a1a70726f6365647572655f63617465676f72795f69645f6e756c6c18" .
    "e90720012808228d030a08526573706f6e736512480a106d6574615f696e" .
    "666f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e" .
    "652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174" .
    "696f6e122f0a076d65737361676518032003280b321e2e6473746f72652e" .
    "656e67696e652e6d6573736167652e4d65737361676512450a03726f7718" .
    "042003280b32382e6473746f72652e656e67696e652e646f5f4765745072" .
    "6f63656475726543617465676f726965735f41642e526573706f6e73652e" .
    "526f771abe010a03526f77120f0a06726f775f696418904e200128051230" .
    "0a0b6465736372697074696f6e18914e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c7565123b0a1570726f6365647572" .
    "655f63617465676f72795f696418924e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512370a1270726f63656475" .
    "72655f63617465676f727918934e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c7565425d0a1b696f2e6473746f72652e" .
    "656e67696e652e70726f636564757265735a3e676f73646b2e6473746f72" .
    "652e64652f656e67696e652f70726f636564757265732f646f5f47657450" .
    "726f63656475726543617465676f726965735f4164620670726f746f33"
));

