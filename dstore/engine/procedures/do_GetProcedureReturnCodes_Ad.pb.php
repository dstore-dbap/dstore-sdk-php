<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcedureReturnCodes_Ad.proto

namespace Dstore\Engine\Do_GetProcedureReturnCodes_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $procedure_name = null;
    private $procedure_name_null = false;
    private $procedure_category_id = null;
    private $procedure_category_id_null = false;
    private $return_code = null;
    private $return_code_null = false;
    private $include_indirect_return_codes = null;
    private $include_indirect_return_codes_null = false;

    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->procedure_name = $var;
    }

    public function getProcedureNameNull()
    {
        return $this->procedure_name_null;
    }

    public function setProcedureNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_name_null = $var;
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

    public function getProcedureCategoryIdNull()
    {
        return $this->procedure_category_id_null;
    }

    public function setProcedureCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_category_id_null = $var;
    }

    public function getReturnCode()
    {
        return $this->return_code;
    }

    public function setReturnCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->return_code = $var;
    }

    public function getReturnCodeNull()
    {
        return $this->return_code_null;
    }

    public function setReturnCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->return_code_null = $var;
    }

    public function getIncludeIndirectReturnCodes()
    {
        return $this->include_indirect_return_codes;
    }

    public function setIncludeIndirectReturnCodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_indirect_return_codes = $var;
    }

    public function getIncludeIndirectReturnCodesNull()
    {
        return $this->include_indirect_return_codes_null;
    }

    public function setIncludeIndirectReturnCodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_indirect_return_codes_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Do_GetProcedureReturnCodes_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $return_code = null;
    private $description = null;
    private $return_code_occurence = null;
    private $procedure_name = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getReturnCode()
    {
        return $this->return_code;
    }

    public function setReturnCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->return_code = $var;
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

    public function getReturnCodeOccurence()
    {
        return $this->return_code_occurence;
    }

    public function setReturnCodeOccurence(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->return_code_occurence = $var;
    }

    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->procedure_name = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aea080a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "646f5f47657450726f63656475726552657475726e436f6465735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e646f5f47657450726f" .
    "63656475726552657475726e436f6465735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22fd020a0a506172616d657465" .
    "727312320a0e70726f6365647572655f6e616d6518012001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565121c0a137072" .
    "6f6365647572655f6e616d655f6e756c6c18e90720012808123a0a157072" .
    "6f6365647572655f63617465676f72795f696418022001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512230a1a7072" .
    "6f6365647572655f63617465676f72795f69645f6e756c6c18ea07200128" .
    "0812300a0b72657475726e5f636f646518032001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512190a107265747572" .
    "6e5f636f64655f6e756c6c18eb072001280812420a1d696e636c7564655f" .
    "696e6469726563745f72657475726e5f636f64657318042001280b321b2e" .
    "6473746f72652e76616c7565732e626f6f6c65616e56616c7565122b0a22" .
    "696e636c7564655f696e6469726563745f72657475726e5f636f6465735f" .
    "6e756c6c18ec072001280822bd030a08526573706f6e736512480a106d65" .
    "74615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e" .
    "656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e66" .
    "6f726d6174696f6e122f0a076d65737361676518032003280b321e2e6473" .
    "746f72652e656e67696e652e6d6573736167652e4d65737361676512460a" .
    "03726f7718042003280b32392e6473746f72652e656e67696e652e646f5f" .
    "47657450726f63656475726552657475726e436f6465735f41642e526573" .
    "706f6e73652e526f771aed010a03526f77120f0a06726f775f696418904e" .
    "2001280512310a0b72657475726e5f636f646518914e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512300a0b64" .
    "65736372697074696f6e18924e2001280b321a2e6473746f72652e76616c" .
    "7565732e737472696e6756616c7565123b0a1572657475726e5f636f6465" .
    "5f6f63637572656e636518934e2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512330a0e70726f6365647572655f" .
    "6e616d6518944e2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565425e0a1b696f2e6473746f72652e656e67696e652e" .
    "70726f636564757265735a3f676f73646b2e6473746f72652e64652f656e" .
    "67696e652f70726f636564757265732f646f5f47657450726f6365647572" .
    "6552657475726e436f6465735f4164620670726f746f33"
));

