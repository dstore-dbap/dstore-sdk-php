<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcedureResultSets_Ad.proto

namespace Dstore\Engine\Do_GetProcedureResultSets_Ad;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Do_GetProcedureResultSets_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $condition = null;
    private $procedure_result_condition_id = null;
    private $description_valid_since_version = null;
    private $description = null;
    private $precision_value = null;
    private $parameter_name = null;
    private $scale = null;
    private $sort_no = null;
    private $result_column_name = null;
    private $length = null;
    private $description_last_edited = null;
    private $introduced_indstore_version = null;
    private $data_type = null;
    private $proc_result_cond_description = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getDescriptionValidSinceVersion()
    {
        return $this->description_valid_since_version;
    }

    public function setDescriptionValidSinceVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->description_valid_since_version = $var;
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

    public function getPrecisionValue()
    {
        return $this->precision_value;
    }

    public function setPrecisionValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->precision_value = $var;
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

    public function getScale()
    {
        return $this->scale;
    }

    public function setScale(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->scale = $var;
    }

    public function getSortNo()
    {
        return $this->sort_no;
    }

    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_no = $var;
    }

    public function getResultColumnName()
    {
        return $this->result_column_name;
    }

    public function setResultColumnName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->result_column_name = $var;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->length = $var;
    }

    public function getDescriptionLastEdited()
    {
        return $this->description_last_edited;
    }

    public function setDescriptionLastEdited(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->description_last_edited = $var;
    }

    public function getIntroducedIndstoreVersion()
    {
        return $this->introduced_indstore_version;
    }

    public function setIntroducedIndstoreVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->introduced_indstore_version = $var;
    }

    public function getDataType()
    {
        return $this->data_type;
    }

    public function setDataType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->data_type = $var;
    }

    public function getProcResultCondDescription()
    {
        return $this->proc_result_cond_description;
    }

    public function setProcResultCondDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->proc_result_cond_description = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af30b0a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "646f5f47657450726f636564757265526573756c74536574735f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e646f5f47657450726f63" .
    "6564757265526573756c74536574735f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22cf010a0a506172616d6574657273" .
    "12320a0e70726f6365647572655f6e616d6518012001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565121c0a1370726f63" .
    "65647572655f6e616d655f6e756c6c18e9072001280812420a1d70726f63" .
    "65647572655f726573756c745f636f6e646974696f6e5f69641802200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "122b0a2270726f6365647572655f726573756c745f636f6e646974696f6e" .
    "5f69645f6e756c6c18ea072001280822f7070a08526573706f6e73651248" .
    "0a106d6574615f696e666f726d6174696f6e18022003280b322e2e647374" .
    "6f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d6574" .
    "61496e666f726d6174696f6e122f0a076d65737361676518032003280b32" .
    "1e2e6473746f72652e656e67696e652e6d6573736167652e4d6573736167" .
    "6512450a03726f7718042003280b32382e6473746f72652e656e67696e65" .
    "2e646f5f47657450726f636564757265526573756c74536574735f41642e" .
    "526573706f6e73652e526f771aa8060a03526f77120f0a06726f775f6964" .
    "18904e20012805122e0a09636f6e646974696f6e18914e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512430a1d70" .
    "726f6365647572655f726573756c745f636f6e646974696f6e5f69641892" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512440a1f6465736372697074696f6e5f76616c69645f73696e63" .
    "655f76657273696f6e18934e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512300a0b6465736372697074696f6e18" .
    "944e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512350a0f707265636973696f6e5f76616c756518954e2001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "330a0e706172616d657465725f6e616d6518964e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565122b0a057363616c" .
    "6518974e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565122d0a07736f72745f6e6f18984e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512370a127265" .
    "73756c745f636f6c756d6e5f6e616d6518994e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c7565122c0a066c656e6774" .
    "68189a4e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565123f0a176465736372697074696f6e5f6c6173745f6564" .
    "69746564189b4e2001280b321d2e6473746f72652e76616c7565732e7469" .
    "6d657374616d7056616c756512400a1b696e74726f64756365645f696e64" .
    "73746f72655f76657273696f6e189c4e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c7565122e0a09646174615f747970" .
    "65189d4e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512410a1c70726f635f726573756c745f636f6e645f646573" .
    "6372697074696f6e189e4e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c7565425d0a1b696f2e6473746f72652e656e67" .
    "696e652e70726f636564757265735a3e676f73646b2e6473746f72652e64" .
    "652f656e67696e652f70726f636564757265732f646f5f47657450726f63" .
    "6564757265526573756c74536574735f4164620670726f746f33"
));

