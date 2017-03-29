<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetUsedVoucherCodes_Ad.proto

namespace Dstore\Engine\Om_GetUsedVoucherCodes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetUsedVoucherCodes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue visitor_or_order_id = 1;</code>
     */
    private $visitor_or_order_id = null;
    /**
     * <code>bool visitor_or_order_id_null = 1001;</code>
     */
    private $visitor_or_order_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue is_order_id = 2;</code>
     */
    private $is_order_id = null;
    /**
     * <code>bool is_order_id_null = 1002;</code>
     */
    private $is_order_id_null = false;
    /**
     * <code>.dstore.values.StringValue voucher_code = 3;</code>
     */
    private $voucher_code = null;
    /**
     * <code>bool voucher_code_null = 1003;</code>
     */
    private $voucher_code_null = false;
    /**
     * <code>.dstore.values.TimestampValue from_validation_date_and_time = 4;</code>
     */
    private $from_validation_date_and_time = null;
    /**
     * <code>bool from_validation_date_and_time_null = 1004;</code>
     */
    private $from_validation_date_and_time_null = false;
    /**
     * <code>.dstore.values.TimestampValue to_validation_date_and_time = 5;</code>
     */
    private $to_validation_date_and_time = null;
    /**
     * <code>bool to_validation_date_and_time_null = 1005;</code>
     */
    private $to_validation_date_and_time_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetUsedVoucherCodesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue visitor_or_order_id = 1;</code>
     */
    public function getVisitorOrOrderId()
    {
        return $this->visitor_or_order_id;
    }

    /**
     * <code>.dstore.values.IntegerValue visitor_or_order_id = 1;</code>
     */
    public function setVisitorOrOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->visitor_or_order_id = $var;
    }

    /**
     * <code>bool visitor_or_order_id_null = 1001;</code>
     */
    public function getVisitorOrOrderIdNull()
    {
        return $this->visitor_or_order_id_null;
    }

    /**
     * <code>bool visitor_or_order_id_null = 1001;</code>
     */
    public function setVisitorOrOrderIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visitor_or_order_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue is_order_id = 2;</code>
     */
    public function getIsOrderId()
    {
        return $this->is_order_id;
    }

    /**
     * <code>.dstore.values.IntegerValue is_order_id = 2;</code>
     */
    public function setIsOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->is_order_id = $var;
    }

    /**
     * <code>bool is_order_id_null = 1002;</code>
     */
    public function getIsOrderIdNull()
    {
        return $this->is_order_id_null;
    }

    /**
     * <code>bool is_order_id_null = 1002;</code>
     */
    public function setIsOrderIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_order_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue voucher_code = 3;</code>
     */
    public function getVoucherCode()
    {
        return $this->voucher_code;
    }

    /**
     * <code>.dstore.values.StringValue voucher_code = 3;</code>
     */
    public function setVoucherCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->voucher_code = $var;
    }

    /**
     * <code>bool voucher_code_null = 1003;</code>
     */
    public function getVoucherCodeNull()
    {
        return $this->voucher_code_null;
    }

    /**
     * <code>bool voucher_code_null = 1003;</code>
     */
    public function setVoucherCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->voucher_code_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue from_validation_date_and_time = 4;</code>
     */
    public function getFromValidationDateAndTime()
    {
        return $this->from_validation_date_and_time;
    }

    /**
     * <code>.dstore.values.TimestampValue from_validation_date_and_time = 4;</code>
     */
    public function setFromValidationDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_validation_date_and_time = $var;
    }

    /**
     * <code>bool from_validation_date_and_time_null = 1004;</code>
     */
    public function getFromValidationDateAndTimeNull()
    {
        return $this->from_validation_date_and_time_null;
    }

    /**
     * <code>bool from_validation_date_and_time_null = 1004;</code>
     */
    public function setFromValidationDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_validation_date_and_time_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue to_validation_date_and_time = 5;</code>
     */
    public function getToValidationDateAndTime()
    {
        return $this->to_validation_date_and_time;
    }

    /**
     * <code>.dstore.values.TimestampValue to_validation_date_and_time = 5;</code>
     */
    public function setToValidationDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_validation_date_and_time = $var;
    }

    /**
     * <code>bool to_validation_date_and_time_null = 1005;</code>
     */
    public function getToValidationDateAndTimeNull()
    {
        return $this->to_validation_date_and_time_null;
    }

    /**
     * <code>bool to_validation_date_and_time_null = 1005;</code>
     */
    public function setToValidationDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_validation_date_and_time_null = $var;
    }

}

