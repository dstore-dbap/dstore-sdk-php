<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyProcExRestForGroup_Ad.proto

namespace Dstore\Engine\Mi_ModifyProcExRestForGroup_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_ModifyProcExRestForGroup_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue procedure_id = 1;</code>
     */
    private $procedure_id = null;
    /**
     * <code>bool procedure_id_null = 1001;</code>
     */
    private $procedure_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue restriction_for_user_group_id = 2;</code>
     */
    private $restriction_for_user_group_id = null;
    /**
     * <code>bool restriction_for_user_group_id_null = 1002;</code>
     */
    private $restriction_for_user_group_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue from_nesting_level = 3;</code>
     */
    private $from_nesting_level = null;
    /**
     * <code>bool from_nesting_level_null = 1003;</code>
     */
    private $from_nesting_level_null = false;
    /**
     * <code>.dstore.values.IntegerValue condition_id = 4;</code>
     */
    private $condition_id = null;
    /**
     * <code>bool condition_id_null = 1004;</code>
     */
    private $condition_id_null = false;
    /**
     * <code>.dstore.values.StringValue parameter_name = 5;</code>
     */
    private $parameter_name = null;
    /**
     * <code>bool parameter_name_null = 1005;</code>
     */
    private $parameter_name_null = false;
    /**
     * <code>.dstore.values.IntegerValue condition_number = 6;</code>
     */
    private $condition_number = null;
    /**
     * <code>bool condition_number_null = 1006;</code>
     */
    private $condition_number_null = false;
    /**
     * <code>.dstore.values.StringValue operator = 7;</code>
     */
    private $operator = null;
    /**
     * <code>bool operator_null = 1007;</code>
     */
    private $operator_null = false;
    /**
     * <code>.dstore.values.StringValue condition = 8;</code>
     */
    private $condition = null;
    /**
     * <code>bool condition_null = 1008;</code>
     */
    private $condition_null = false;
    /**
     * <code>.dstore.values.BooleanValue restriction_is_active = 9;</code>
     */
    private $restriction_is_active = null;
    /**
     * <code>bool restriction_is_active_null = 1009;</code>
     */
    private $restriction_is_active_null = false;
    /**
     * <code>.dstore.values.IntegerValue set_restriction_is_active_only = 10;</code>
     */
    private $set_restriction_is_active_only = null;
    /**
     * <code>bool set_restriction_is_active_only_null = 1010;</code>
     */
    private $set_restriction_is_active_only_null = false;
    /**
     * <code>.dstore.values.IntegerValue delete = 11;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1011;</code>
     */
    private $delete_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiModifyProcExRestForGroupAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_id = 1;</code>
     */
    public function getProcedureId()
    {
        return $this->procedure_id;
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_id = 1;</code>
     */
    public function setProcedureId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->procedure_id = $var;
    }

    /**
     * <code>bool procedure_id_null = 1001;</code>
     */
    public function getProcedureIdNull()
    {
        return $this->procedure_id_null;
    }

    /**
     * <code>bool procedure_id_null = 1001;</code>
     */
    public function setProcedureIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue restriction_for_user_group_id = 2;</code>
     */
    public function getRestrictionForUserGroupId()
    {
        return $this->restriction_for_user_group_id;
    }

    /**
     * <code>.dstore.values.IntegerValue restriction_for_user_group_id = 2;</code>
     */
    public function setRestrictionForUserGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->restriction_for_user_group_id = $var;
    }

    /**
     * <code>bool restriction_for_user_group_id_null = 1002;</code>
     */
    public function getRestrictionForUserGroupIdNull()
    {
        return $this->restriction_for_user_group_id_null;
    }

    /**
     * <code>bool restriction_for_user_group_id_null = 1002;</code>
     */
    public function setRestrictionForUserGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->restriction_for_user_group_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue from_nesting_level = 3;</code>
     */
    public function getFromNestingLevel()
    {
        return $this->from_nesting_level;
    }

    /**
     * <code>.dstore.values.IntegerValue from_nesting_level = 3;</code>
     */
    public function setFromNestingLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_nesting_level = $var;
    }

    /**
     * <code>bool from_nesting_level_null = 1003;</code>
     */
    public function getFromNestingLevelNull()
    {
        return $this->from_nesting_level_null;
    }

    /**
     * <code>bool from_nesting_level_null = 1003;</code>
     */
    public function setFromNestingLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_nesting_level_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_id = 4;</code>
     */
    public function getConditionId()
    {
        return $this->condition_id;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_id = 4;</code>
     */
    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_id = $var;
    }

    /**
     * <code>bool condition_id_null = 1004;</code>
     */
    public function getConditionIdNull()
    {
        return $this->condition_id_null;
    }

    /**
     * <code>bool condition_id_null = 1004;</code>
     */
    public function setConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue parameter_name = 5;</code>
     */
    public function getParameterName()
    {
        return $this->parameter_name;
    }

    /**
     * <code>.dstore.values.StringValue parameter_name = 5;</code>
     */
    public function setParameterName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->parameter_name = $var;
    }

    /**
     * <code>bool parameter_name_null = 1005;</code>
     */
    public function getParameterNameNull()
    {
        return $this->parameter_name_null;
    }

    /**
     * <code>bool parameter_name_null = 1005;</code>
     */
    public function setParameterNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->parameter_name_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_number = 6;</code>
     */
    public function getConditionNumber()
    {
        return $this->condition_number;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_number = 6;</code>
     */
    public function setConditionNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_number = $var;
    }

    /**
     * <code>bool condition_number_null = 1006;</code>
     */
    public function getConditionNumberNull()
    {
        return $this->condition_number_null;
    }

    /**
     * <code>bool condition_number_null = 1006;</code>
     */
    public function setConditionNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_number_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue operator = 7;</code>
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * <code>.dstore.values.StringValue operator = 7;</code>
     */
    public function setOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->operator = $var;
    }

    /**
     * <code>bool operator_null = 1007;</code>
     */
    public function getOperatorNull()
    {
        return $this->operator_null;
    }

    /**
     * <code>bool operator_null = 1007;</code>
     */
    public function setOperatorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->operator_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue condition = 8;</code>
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * <code>.dstore.values.StringValue condition = 8;</code>
     */
    public function setCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition = $var;
    }

    /**
     * <code>bool condition_null = 1008;</code>
     */
    public function getConditionNull()
    {
        return $this->condition_null;
    }

    /**
     * <code>bool condition_null = 1008;</code>
     */
    public function setConditionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue restriction_is_active = 9;</code>
     */
    public function getRestrictionIsActive()
    {
        return $this->restriction_is_active;
    }

    /**
     * <code>.dstore.values.BooleanValue restriction_is_active = 9;</code>
     */
    public function setRestrictionIsActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->restriction_is_active = $var;
    }

    /**
     * <code>bool restriction_is_active_null = 1009;</code>
     */
    public function getRestrictionIsActiveNull()
    {
        return $this->restriction_is_active_null;
    }

    /**
     * <code>bool restriction_is_active_null = 1009;</code>
     */
    public function setRestrictionIsActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->restriction_is_active_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue set_restriction_is_active_only = 10;</code>
     */
    public function getSetRestrictionIsActiveOnly()
    {
        return $this->set_restriction_is_active_only;
    }

    /**
     * <code>.dstore.values.IntegerValue set_restriction_is_active_only = 10;</code>
     */
    public function setSetRestrictionIsActiveOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->set_restriction_is_active_only = $var;
    }

    /**
     * <code>bool set_restriction_is_active_only_null = 1010;</code>
     */
    public function getSetRestrictionIsActiveOnlyNull()
    {
        return $this->set_restriction_is_active_only_null;
    }

    /**
     * <code>bool set_restriction_is_active_only_null = 1010;</code>
     */
    public function setSetRestrictionIsActiveOnlyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->set_restriction_is_active_only_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue delete = 11;</code>
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * <code>.dstore.values.IntegerValue delete = 11;</code>
     */
    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->delete = $var;
    }

    /**
     * <code>bool delete_null = 1011;</code>
     */
    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    /**
     * <code>bool delete_null = 1011;</code>
     */
    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

}

