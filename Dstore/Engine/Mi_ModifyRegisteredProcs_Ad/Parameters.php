<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyRegisteredProcs_Ad.proto

namespace Dstore\Engine\Mi_ModifyRegisteredProcs_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_ModifyRegisteredProcs_Ad.Parameters</code>
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
     * <code>.dstore.values.StringValue procedure_name = 2;</code>
     */
    private $procedure_name = null;
    /**
     * <code>bool procedure_name_null = 1002;</code>
     */
    private $procedure_name_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_procedure = 3;</code>
     */
    private $delete_procedure = null;
    /**
     * <code>bool delete_procedure_null = 1003;</code>
     */
    private $delete_procedure_null = false;
    /**
     * <code>.dstore.values.IntegerValue check_for_execution_restrictions = 4;</code>
     */
    private $check_for_execution_restrictions = null;
    /**
     * <code>bool check_for_execution_restrictions_null = 1004;</code>
     */
    private $check_for_execution_restrictions_null = false;
    /**
     * <code>.dstore.values.IntegerValue log_executions = 5;</code>
     */
    private $log_executions = null;
    /**
     * <code>bool log_executions_null = 1005;</code>
     */
    private $log_executions_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiModifyRegisteredProcsAd::initOnce();
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
     * <code>.dstore.values.StringValue procedure_name = 2;</code>
     */
    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    /**
     * <code>.dstore.values.StringValue procedure_name = 2;</code>
     */
    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->procedure_name = $var;
    }

    /**
     * <code>bool procedure_name_null = 1002;</code>
     */
    public function getProcedureNameNull()
    {
        return $this->procedure_name_null;
    }

    /**
     * <code>bool procedure_name_null = 1002;</code>
     */
    public function setProcedureNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_name_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_procedure = 3;</code>
     */
    public function getDeleteProcedure()
    {
        return $this->delete_procedure;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_procedure = 3;</code>
     */
    public function setDeleteProcedure(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_procedure = $var;
    }

    /**
     * <code>bool delete_procedure_null = 1003;</code>
     */
    public function getDeleteProcedureNull()
    {
        return $this->delete_procedure_null;
    }

    /**
     * <code>bool delete_procedure_null = 1003;</code>
     */
    public function setDeleteProcedureNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_procedure_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue check_for_execution_restrictions = 4;</code>
     */
    public function getCheckForExecutionRestrictions()
    {
        return $this->check_for_execution_restrictions;
    }

    /**
     * <code>.dstore.values.IntegerValue check_for_execution_restrictions = 4;</code>
     */
    public function setCheckForExecutionRestrictions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->check_for_execution_restrictions = $var;
    }

    /**
     * <code>bool check_for_execution_restrictions_null = 1004;</code>
     */
    public function getCheckForExecutionRestrictionsNull()
    {
        return $this->check_for_execution_restrictions_null;
    }

    /**
     * <code>bool check_for_execution_restrictions_null = 1004;</code>
     */
    public function setCheckForExecutionRestrictionsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_for_execution_restrictions_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue log_executions = 5;</code>
     */
    public function getLogExecutions()
    {
        return $this->log_executions;
    }

    /**
     * <code>.dstore.values.IntegerValue log_executions = 5;</code>
     */
    public function setLogExecutions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->log_executions = $var;
    }

    /**
     * <code>bool log_executions_null = 1005;</code>
     */
    public function getLogExecutionsNull()
    {
        return $this->log_executions_null;
    }

    /**
     * <code>bool log_executions_null = 1005;</code>
     */
    public function setLogExecutionsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->log_executions_null = $var;
    }

}
