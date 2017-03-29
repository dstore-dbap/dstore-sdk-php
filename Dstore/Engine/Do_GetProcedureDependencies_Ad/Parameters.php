<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcedureDependencies_Ad.proto

namespace Dstore\Engine\Do_GetProcedureDependencies_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.do_GetProcedureDependencies_Ad.Parameters</code>
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
     * <code>.dstore.values.IntegerValue procedure_category_id = 2;</code>
     */
    private $procedure_category_id = null;
    /**
     * <code>bool procedure_category_id_null = 1002;</code>
     */
    private $procedure_category_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue ascertain_used_procedures = 3;</code>
     */
    private $ascertain_used_procedures = null;
    /**
     * <code>bool ascertain_used_procedures_null = 1003;</code>
     */
    private $ascertain_used_procedures_null = false;
    /**
     * <code>.dstore.values.BooleanValue order_by_level_of_dependence = 4;</code>
     */
    private $order_by_level_of_dependence = null;
    /**
     * <code>bool order_by_level_of_dependence_null = 1004;</code>
     */
    private $order_by_level_of_dependence_null = false;
    /**
     * <code>.dstore.values.IntegerValue only_up_to_dependence_level = 5;</code>
     */
    private $only_up_to_dependence_level = null;
    /**
     * <code>bool only_up_to_dependence_level_null = 1005;</code>
     */
    private $only_up_to_dependence_level_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\DoGetProcedureDependenciesAd::initOnce();
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
     * <code>.dstore.values.IntegerValue procedure_category_id = 2;</code>
     */
    public function getProcedureCategoryId()
    {
        return $this->procedure_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_category_id = 2;</code>
     */
    public function setProcedureCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->procedure_category_id = $var;
    }

    /**
     * <code>bool procedure_category_id_null = 1002;</code>
     */
    public function getProcedureCategoryIdNull()
    {
        return $this->procedure_category_id_null;
    }

    /**
     * <code>bool procedure_category_id_null = 1002;</code>
     */
    public function setProcedureCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue ascertain_used_procedures = 3;</code>
     */
    public function getAscertainUsedProcedures()
    {
        return $this->ascertain_used_procedures;
    }

    /**
     * <code>.dstore.values.BooleanValue ascertain_used_procedures = 3;</code>
     */
    public function setAscertainUsedProcedures(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->ascertain_used_procedures = $var;
    }

    /**
     * <code>bool ascertain_used_procedures_null = 1003;</code>
     */
    public function getAscertainUsedProceduresNull()
    {
        return $this->ascertain_used_procedures_null;
    }

    /**
     * <code>bool ascertain_used_procedures_null = 1003;</code>
     */
    public function setAscertainUsedProceduresNull($var)
    {
        GPBUtil::checkBool($var);
        $this->ascertain_used_procedures_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue order_by_level_of_dependence = 4;</code>
     */
    public function getOrderByLevelOfDependence()
    {
        return $this->order_by_level_of_dependence;
    }

    /**
     * <code>.dstore.values.BooleanValue order_by_level_of_dependence = 4;</code>
     */
    public function setOrderByLevelOfDependence(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->order_by_level_of_dependence = $var;
    }

    /**
     * <code>bool order_by_level_of_dependence_null = 1004;</code>
     */
    public function getOrderByLevelOfDependenceNull()
    {
        return $this->order_by_level_of_dependence_null;
    }

    /**
     * <code>bool order_by_level_of_dependence_null = 1004;</code>
     */
    public function setOrderByLevelOfDependenceNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_by_level_of_dependence_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue only_up_to_dependence_level = 5;</code>
     */
    public function getOnlyUpToDependenceLevel()
    {
        return $this->only_up_to_dependence_level;
    }

    /**
     * <code>.dstore.values.IntegerValue only_up_to_dependence_level = 5;</code>
     */
    public function setOnlyUpToDependenceLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->only_up_to_dependence_level = $var;
    }

    /**
     * <code>bool only_up_to_dependence_level_null = 1005;</code>
     */
    public function getOnlyUpToDependenceLevelNull()
    {
        return $this->only_up_to_dependence_level_null;
    }

    /**
     * <code>bool only_up_to_dependence_level_null = 1005;</code>
     */
    public function setOnlyUpToDependenceLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_up_to_dependence_level_null = $var;
    }

}

