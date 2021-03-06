<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPrepaidCodes_Ad.proto

namespace Dstore\Engine\Om_GetPrepaidCodes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetPrepaidCodes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue prepaid_code = 1;</code>
     */
    private $prepaid_code = null;
    /**
     * <code>bool prepaid_code_null = 1001;</code>
     */
    private $prepaid_code_null = false;
    /**
     * <code>.dstore.values.TimestampValue from_code_valid_until = 2;</code>
     */
    private $from_code_valid_until = null;
    /**
     * <code>bool from_code_valid_until_null = 1002;</code>
     */
    private $from_code_valid_until_null = false;
    /**
     * <code>.dstore.values.TimestampValue to_code_valid_until = 3;</code>
     */
    private $to_code_valid_until = null;
    /**
     * <code>bool to_code_valid_until_null = 1003;</code>
     */
    private $to_code_valid_until_null = false;
    /**
     * <code>.dstore.values.IntegerValue filter_by_use_state = 4;</code>
     */
    private $filter_by_use_state = null;
    /**
     * <code>bool filter_by_use_state_null = 1004;</code>
     */
    private $filter_by_use_state_null = false;
    /**
     * <code>.dstore.values.StringValue order_by = 5;</code>
     */
    private $order_by = null;
    /**
     * <code>bool order_by_null = 1005;</code>
     */
    private $order_by_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetPrepaidCodesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue prepaid_code = 1;</code>
     */
    public function getPrepaidCode()
    {
        return $this->prepaid_code;
    }

    /**
     * <code>.dstore.values.StringValue prepaid_code = 1;</code>
     */
    public function setPrepaidCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->prepaid_code = $var;
    }

    /**
     * <code>bool prepaid_code_null = 1001;</code>
     */
    public function getPrepaidCodeNull()
    {
        return $this->prepaid_code_null;
    }

    /**
     * <code>bool prepaid_code_null = 1001;</code>
     */
    public function setPrepaidCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->prepaid_code_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue from_code_valid_until = 2;</code>
     */
    public function getFromCodeValidUntil()
    {
        return $this->from_code_valid_until;
    }

    /**
     * <code>.dstore.values.TimestampValue from_code_valid_until = 2;</code>
     */
    public function setFromCodeValidUntil(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_code_valid_until = $var;
    }

    /**
     * <code>bool from_code_valid_until_null = 1002;</code>
     */
    public function getFromCodeValidUntilNull()
    {
        return $this->from_code_valid_until_null;
    }

    /**
     * <code>bool from_code_valid_until_null = 1002;</code>
     */
    public function setFromCodeValidUntilNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_code_valid_until_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue to_code_valid_until = 3;</code>
     */
    public function getToCodeValidUntil()
    {
        return $this->to_code_valid_until;
    }

    /**
     * <code>.dstore.values.TimestampValue to_code_valid_until = 3;</code>
     */
    public function setToCodeValidUntil(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_code_valid_until = $var;
    }

    /**
     * <code>bool to_code_valid_until_null = 1003;</code>
     */
    public function getToCodeValidUntilNull()
    {
        return $this->to_code_valid_until_null;
    }

    /**
     * <code>bool to_code_valid_until_null = 1003;</code>
     */
    public function setToCodeValidUntilNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_code_valid_until_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue filter_by_use_state = 4;</code>
     */
    public function getFilterByUseState()
    {
        return $this->filter_by_use_state;
    }

    /**
     * <code>.dstore.values.IntegerValue filter_by_use_state = 4;</code>
     */
    public function setFilterByUseState(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->filter_by_use_state = $var;
    }

    /**
     * <code>bool filter_by_use_state_null = 1004;</code>
     */
    public function getFilterByUseStateNull()
    {
        return $this->filter_by_use_state_null;
    }

    /**
     * <code>bool filter_by_use_state_null = 1004;</code>
     */
    public function setFilterByUseStateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_use_state_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue order_by = 5;</code>
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * <code>.dstore.values.StringValue order_by = 5;</code>
     */
    public function setOrderBy(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->order_by = $var;
    }

    /**
     * <code>bool order_by_null = 1005;</code>
     */
    public function getOrderByNull()
    {
        return $this->order_by_null;
    }

    /**
     * <code>bool order_by_null = 1005;</code>
     */
    public function setOrderByNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_by_null = $var;
    }

}

