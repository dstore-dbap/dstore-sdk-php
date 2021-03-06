<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcedureResultSets_Ad.proto

namespace Dstore\Engine\Do_GetProcedureResultSets_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.do_GetProcedureResultSets_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue procedure_name = 1;</code>
     */
    private $procedure_name = null;
    /**
     * <code>bool procedure_name_null = 1001;</code>
     */
    private $procedure_name_null = false;
    /**
     * <code>.dstore.values.IntegerValue procedure_result_condition_id = 2;</code>
     */
    private $procedure_result_condition_id = null;
    /**
     * <code>bool procedure_result_condition_id_null = 1002;</code>
     */
    private $procedure_result_condition_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\DoGetProcedureResultSetsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue procedure_name = 1;</code>
     */
    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    /**
     * <code>.dstore.values.StringValue procedure_name = 1;</code>
     */
    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->procedure_name = $var;
    }

    /**
     * <code>bool procedure_name_null = 1001;</code>
     */
    public function getProcedureNameNull()
    {
        return $this->procedure_name_null;
    }

    /**
     * <code>bool procedure_name_null = 1001;</code>
     */
    public function setProcedureNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_name_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_result_condition_id = 2;</code>
     */
    public function getProcedureResultConditionId()
    {
        return $this->procedure_result_condition_id;
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_result_condition_id = 2;</code>
     */
    public function setProcedureResultConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->procedure_result_condition_id = $var;
    }

    /**
     * <code>bool procedure_result_condition_id_null = 1002;</code>
     */
    public function getProcedureResultConditionIdNull()
    {
        return $this->procedure_result_condition_id_null;
    }

    /**
     * <code>bool procedure_result_condition_id_null = 1002;</code>
     */
    public function setProcedureResultConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_result_condition_id_null = $var;
    }

}

