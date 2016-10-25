<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyProcExRestForGroup_Ad.proto

namespace Dstore\Engine\Mi_ModifyProcExRestForGroup_Ad;

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
    private $restriction_for_user_group_id = null;
    private $restriction_for_user_group_id_null = false;
    private $from_nesting_level = null;
    private $from_nesting_level_null = false;
    private $condition_id = null;
    private $condition_id_null = false;
    private $parameter_name = null;
    private $parameter_name_null = false;
    private $condition_number = null;
    private $condition_number_null = false;
    private $operator = null;
    private $operator_null = false;
    private $condition = null;
    private $condition_null = false;
    private $restriction_is_active = null;
    private $restriction_is_active_null = false;
    private $set_restriction_is_active_only = null;
    private $set_restriction_is_active_only_null = false;
    private $delete = null;
    private $delete_null = false;

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

    public function getRestrictionForUserGroupId()
    {
        return $this->restriction_for_user_group_id;
    }

    public function setRestrictionForUserGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->restriction_for_user_group_id = $var;
    }

    public function getRestrictionForUserGroupIdNull()
    {
        return $this->restriction_for_user_group_id_null;
    }

    public function setRestrictionForUserGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->restriction_for_user_group_id_null = $var;
    }

    public function getFromNestingLevel()
    {
        return $this->from_nesting_level;
    }

    public function setFromNestingLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_nesting_level = $var;
    }

    public function getFromNestingLevelNull()
    {
        return $this->from_nesting_level_null;
    }

    public function setFromNestingLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_nesting_level_null = $var;
    }

    public function getConditionId()
    {
        return $this->condition_id;
    }

    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_id = $var;
    }

    public function getConditionIdNull()
    {
        return $this->condition_id_null;
    }

    public function setConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_id_null = $var;
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

    public function getParameterNameNull()
    {
        return $this->parameter_name_null;
    }

    public function setParameterNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->parameter_name_null = $var;
    }

    public function getConditionNumber()
    {
        return $this->condition_number;
    }

    public function setConditionNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_number = $var;
    }

    public function getConditionNumberNull()
    {
        return $this->condition_number_null;
    }

    public function setConditionNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_number_null = $var;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function setOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->operator = $var;
    }

    public function getOperatorNull()
    {
        return $this->operator_null;
    }

    public function setOperatorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->operator_null = $var;
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

    public function getConditionNull()
    {
        return $this->condition_null;
    }

    public function setConditionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_null = $var;
    }

    public function getRestrictionIsActive()
    {
        return $this->restriction_is_active;
    }

    public function setRestrictionIsActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->restriction_is_active = $var;
    }

    public function getRestrictionIsActiveNull()
    {
        return $this->restriction_is_active_null;
    }

    public function setRestrictionIsActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->restriction_is_active_null = $var;
    }

    public function getSetRestrictionIsActiveOnly()
    {
        return $this->set_restriction_is_active_only;
    }

    public function setSetRestrictionIsActiveOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->set_restriction_is_active_only = $var;
    }

    public function getSetRestrictionIsActiveOnlyNull()
    {
        return $this->set_restriction_is_active_only_null;
    }

    public function setSetRestrictionIsActiveOnlyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->set_restriction_is_active_only_null = $var;
    }

    public function getDelete()
    {
        return $this->delete;
    }

    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->delete = $var;
    }

    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_ModifyProcExRestForGroup_Ad\Response_Row::class);
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
    "0add0b0a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4d6f6469667950726f63457852657374466f7247726f75705f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6d695f4d6f646966" .
    "7950726f63457852657374466f7247726f75705f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22c4070a0a506172616d65" .
    "7465727312310a0c70726f6365647572655f696418012001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565121a0a1170" .
    "726f6365647572655f69645f6e756c6c18e9072001280812420a1d726573" .
    "7472696374696f6e5f666f725f757365725f67726f75705f696418022001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65122b0a227265737472696374696f6e5f666f725f757365725f67726f75" .
    "705f69645f6e756c6c18ea072001280812370a1266726f6d5f6e65737469" .
    "6e675f6c6576656c18032001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512200a1766726f6d5f6e657374696e675f" .
    "6c6576656c5f6e756c6c18eb072001280812310a0c636f6e646974696f6e" .
    "5f696418042001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565121a0a11636f6e646974696f6e5f69645f6e756c6c18" .
    "ec072001280812320a0e706172616d657465725f6e616d6518052001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c7565121c" .
    "0a13706172616d657465725f6e616d655f6e756c6c18ed07200128081235" .
    "0a10636f6e646974696f6e5f6e756d62657218062001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565121e0a15636f6e" .
    "646974696f6e5f6e756d6265725f6e756c6c18ee0720012808122c0a086f" .
    "70657261746f7218072001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c756512160a0d6f70657261746f725f6e756c6c18ef" .
    "0720012808122d0a09636f6e646974696f6e18082001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c756512170a0e636f6e64" .
    "6974696f6e5f6e756c6c18f00720012808123a0a15726573747269637469" .
    "6f6e5f69735f61637469766518092001280b321b2e6473746f72652e7661" .
    "6c7565732e626f6f6c65616e56616c756512230a1a726573747269637469" .
    "6f6e5f69735f6163746976655f6e756c6c18f1072001280812430a1e7365" .
    "745f7265737472696374696f6e5f69735f6163746976655f6f6e6c79180a" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565122c0a237365745f7265737472696374696f6e5f69735f61637469" .
    "76655f6f6e6c795f6e756c6c18f20720012808122b0a0664656c65746518" .
    "0b2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512140a0b64656c6574655f6e756c6c18f3072001280822e6010a" .
    "08526573706f6e736512480a106d6574615f696e666f726d6174696f6e18" .
    "022003280b322e2e6473746f72652e656e67696e652e6d657461696e666f" .
    "726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573" .
    "7361676518032003280b321e2e6473746f72652e656e67696e652e6d6573" .
    "736167652e4d65737361676512470a03726f7718042003280b323a2e6473" .
    "746f72652e656e67696e652e6d695f4d6f6469667950726f634578526573" .
    "74466f7247726f75705f41642e526573706f6e73652e526f771a160a0352" .
    "6f77120f0a06726f775f696418904e20012805425f0a1b696f2e6473746f" .
    "72652e656e67696e652e70726f636564757265735a40676f73646b2e6473" .
    "746f72652e64652f656e67696e652f70726f636564757265732f6d695f4d" .
    "6f6469667950726f63457852657374466f7247726f75705f416462067072" .
    "6f746f33"
));

