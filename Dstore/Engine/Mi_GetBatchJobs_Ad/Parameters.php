<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetBatchJobs_Ad.proto

namespace Dstore\Engine\Mi_GetBatchJobs_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetBatchJobs_Ad.Parameters</code>
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
     * <code>.dstore.values.IntegerValue order_by_column = 2;</code>
     */
    private $order_by_column = null;
    /**
     * <code>bool order_by_column_null = 1002;</code>
     */
    private $order_by_column_null = false;
    /**
     * <code>.dstore.values.BooleanValue order_desc = 3;</code>
     */
    private $order_desc = null;
    /**
     * <code>bool order_desc_null = 1003;</code>
     */
    private $order_desc_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetBatchJobsAd::initOnce();
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
     * <code>.dstore.values.IntegerValue order_by_column = 2;</code>
     */
    public function getOrderByColumn()
    {
        return $this->order_by_column;
    }

    /**
     * <code>.dstore.values.IntegerValue order_by_column = 2;</code>
     */
    public function setOrderByColumn(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_by_column = $var;
    }

    /**
     * <code>bool order_by_column_null = 1002;</code>
     */
    public function getOrderByColumnNull()
    {
        return $this->order_by_column_null;
    }

    /**
     * <code>bool order_by_column_null = 1002;</code>
     */
    public function setOrderByColumnNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_by_column_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue order_desc = 3;</code>
     */
    public function getOrderDesc()
    {
        return $this->order_desc;
    }

    /**
     * <code>.dstore.values.BooleanValue order_desc = 3;</code>
     */
    public function setOrderDesc(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->order_desc = $var;
    }

    /**
     * <code>bool order_desc_null = 1003;</code>
     */
    public function getOrderDescNull()
    {
        return $this->order_desc_null;
    }

    /**
     * <code>bool order_desc_null = 1003;</code>
     */
    public function setOrderDescNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_desc_null = $var;
    }

}

