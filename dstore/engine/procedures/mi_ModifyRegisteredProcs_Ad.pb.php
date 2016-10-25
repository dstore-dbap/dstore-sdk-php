<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyRegisteredProcs_Ad.proto

namespace Dstore\Engine\Mi_ModifyRegisteredProcs_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $procedure_id = null;
    private $procedure_id_null = false;
    private $procedure_name = null;
    private $procedure_name_null = false;
    private $delete_procedure = null;
    private $delete_procedure_null = false;
    private $check_for_execution_restrictions = null;
    private $check_for_execution_restrictions_null = false;
    private $log_executions = null;
    private $log_executions_null = false;

    public function getProcedureId()
    {
        return $this->procedure_id;
    }

    public function setProcedureId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->procedure_id = $var;
    }

    public function getProcedureIdNull()
    {
        return $this->procedure_id_null;
    }

    public function setProcedureIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_id_null = $var;
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

    public function getProcedureNameNull()
    {
        return $this->procedure_name_null;
    }

    public function setProcedureNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_name_null = $var;
    }

    public function getDeleteProcedure()
    {
        return $this->delete_procedure;
    }

    public function setDeleteProcedure(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_procedure = $var;
    }

    public function getDeleteProcedureNull()
    {
        return $this->delete_procedure_null;
    }

    public function setDeleteProcedureNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_procedure_null = $var;
    }

    public function getCheckForExecutionRestrictions()
    {
        return $this->check_for_execution_restrictions;
    }

    public function setCheckForExecutionRestrictions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->check_for_execution_restrictions = $var;
    }

    public function getCheckForExecutionRestrictionsNull()
    {
        return $this->check_for_execution_restrictions_null;
    }

    public function setCheckForExecutionRestrictionsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_for_execution_restrictions_null = $var;
    }

    public function getLogExecutions()
    {
        return $this->log_executions;
    }

    public function setLogExecutions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->log_executions = $var;
    }

    public function getLogExecutionsNull()
    {
        return $this->log_executions_null;
    }

    public function setLogExecutionsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->log_executions_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_ModifyRegisteredProcs_Ad\Response_Row::class);
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
    "0adb070a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4d6f646966795265676973746572656450726f63735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e6d695f4d6f646966795265" .
    "676973746572656450726f63735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22ce030a0a506172616d65746572731231" .
    "0a0c70726f6365647572655f696418012001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565121a0a1170726f63656475" .
    "72655f69645f6e756c6c18e9072001280812320a0e70726f636564757265" .
    "5f6e616d6518022001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565121c0a1370726f6365647572655f6e616d655f6e75" .
    "6c6c18ea072001280812350a1064656c6574655f70726f63656475726518" .
    "032001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56" .
    "616c7565121e0a1564656c6574655f70726f6365647572655f6e756c6c18" .
    "eb072001280812450a20636865636b5f666f725f657865637574696f6e5f" .
    "7265737472696374696f6e7318042001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565122e0a25636865636b5f666f72" .
    "5f657865637574696f6e5f7265737472696374696f6e735f6e756c6c18ec" .
    "072001280812330a0e6c6f675f657865637574696f6e7318052001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565121c" .
    "0a136c6f675f657865637574696f6e735f6e756c6c18ed072001280822e3" .
    "010a08526573706f6e736512480a106d6574615f696e666f726d6174696f" .
    "6e18022003280b322e2e6473746f72652e656e67696e652e6d657461696e" .
    "666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d" .
    "65737361676518032003280b321e2e6473746f72652e656e67696e652e6d" .
    "6573736167652e4d65737361676512440a03726f7718042003280b32372e" .
    "6473746f72652e656e67696e652e6d695f4d6f6469667952656769737465" .
    "72656450726f63735f41642e526573706f6e73652e526f771a160a03526f" .
    "77120f0a06726f775f696418904e20012805425c0a1b696f2e6473746f72" .
    "652e656e67696e652e70726f636564757265735a3d676f73646b2e647374" .
    "6f72652e64652f656e67696e652f70726f636564757265732f6d695f4d6f" .
    "646966795265676973746572656450726f63735f4164620670726f746f33"
));

