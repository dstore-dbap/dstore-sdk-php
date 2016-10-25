<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcResultConditions_Ad.proto

namespace Dstore\Engine\Do_GetProcResultConditions_Ad;

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
    private $procedure_result_condition_id = null;
    private $procedure_result_condition_id_null = false;

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

    public function getProcedureResultConditionId()
    {
        return $this->procedure_result_condition_id;
    }

    public function setProcedureResultConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->procedure_result_condition_id = $var;
    }

    public function getProcedureResultConditionIdNull()
    {
        return $this->procedure_result_condition_id_null;
    }

    public function setProcedureResultConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_result_condition_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Do_GetProcResultConditions_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $condition_description = null;
    private $condition = null;
    private $procedure_result_condition_id = null;
    private $procedure_name = null;
    private $parameter_name = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getConditionDescription()
    {
        return $this->condition_description;
    }

    public function setConditionDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition_description = $var;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    public function setCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition = $var;
    }

    public function getProcedureResultConditionId()
    {
        return $this->procedure_result_condition_id;
    }

    public function setProcedureResultConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->procedure_result_condition_id = $var;
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

    public function getParameterName()
    {
        return $this->parameter_name;
    }

    public function setParameterName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->parameter_name = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a80080a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "646f5f47657450726f63526573756c74436f6e646974696f6e735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e646f5f47657450726f" .
    "63526573756c74436f6e646974696f6e735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22cf010a0a506172616d657465" .
    "727312320a0e70726f6365647572655f6e616d6518012001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565121c0a137072" .
    "6f6365647572655f6e616d655f6e756c6c18e9072001280812420a1d7072" .
    "6f6365647572655f726573756c745f636f6e646974696f6e5f6964180220" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565122b0a2270726f6365647572655f726573756c745f636f6e64697469" .
    "6f6e5f69645f6e756c6c18ea07200128082281040a08526573706f6e7365" .
    "12480a106d6574615f696e666f726d6174696f6e18022003280b322e2e64" .
    "73746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d" .
    "657461496e666f726d6174696f6e122f0a076d6573736167651803200328" .
    "0b321e2e6473746f72652e656e67696e652e6d6573736167652e4d657373" .
    "61676512460a03726f7718042003280b32392e6473746f72652e656e6769" .
    "6e652e646f5f47657450726f63526573756c74436f6e646974696f6e735f" .
    "41642e526573706f6e73652e526f771ab1020a03526f77120f0a06726f77" .
    "5f696418904e20012805123a0a15636f6e646974696f6e5f646573637269" .
    "7074696f6e18914e2001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c7565122e0a09636f6e646974696f6e18924e2001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75651243" .
    "0a1d70726f6365647572655f726573756c745f636f6e646974696f6e5f69" .
    "6418934e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512330a0e70726f6365647572655f6e616d6518944e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12330a0e706172616d657465725f6e616d6518954e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565425e0a1b696f2e" .
    "6473746f72652e656e67696e652e70726f636564757265735a3f676f7364" .
    "6b2e6473746f72652e64652f656e67696e652f70726f636564757265732f" .
    "646f5f47657450726f63526573756c74436f6e646974696f6e735f416462" .
    "0670726f746f33"
));

