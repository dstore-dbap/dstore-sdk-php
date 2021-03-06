<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyOrderContent_Ad.proto

namespace Dstore\Engine\Om_ModifyOrderContent_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyOrderContent_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue order_content_id = 1;</code>
     */
    private $order_content_id = null;
    /**
     * <code>bool order_content_id_null = 1001;</code>
     */
    private $order_content_id_null = false;
    /**
     * <code>.dstore.values.StringValue order_no = 2;</code>
     */
    private $order_no = null;
    /**
     * <code>bool order_no_null = 1002;</code>
     */
    private $order_no_null = false;
    /**
     * <code>.dstore.values.IntegerValue quantity = 3;</code>
     */
    private $quantity = null;
    /**
     * <code>bool quantity_null = 1003;</code>
     */
    private $quantity_null = false;
    /**
     * <code>.dstore.values.DecimalValue net_sum = 4;</code>
     */
    private $net_sum = null;
    /**
     * <code>bool net_sum_null = 1004;</code>
     */
    private $net_sum_null = false;
    /**
     * <code>.dstore.values.DecimalValue gross_sum = 5;</code>
     */
    private $gross_sum = null;
    /**
     * <code>bool gross_sum_null = 1005;</code>
     */
    private $gross_sum_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyOrderContentAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue order_content_id = 1;</code>
     */
    public function getOrderContentId()
    {
        return $this->order_content_id;
    }

    /**
     * <code>.dstore.values.IntegerValue order_content_id = 1;</code>
     */
    public function setOrderContentId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_content_id = $var;
    }

    /**
     * <code>bool order_content_id_null = 1001;</code>
     */
    public function getOrderContentIdNull()
    {
        return $this->order_content_id_null;
    }

    /**
     * <code>bool order_content_id_null = 1001;</code>
     */
    public function setOrderContentIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_content_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue order_no = 2;</code>
     */
    public function getOrderNo()
    {
        return $this->order_no;
    }

    /**
     * <code>.dstore.values.StringValue order_no = 2;</code>
     */
    public function setOrderNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->order_no = $var;
    }

    /**
     * <code>bool order_no_null = 1002;</code>
     */
    public function getOrderNoNull()
    {
        return $this->order_no_null;
    }

    /**
     * <code>bool order_no_null = 1002;</code>
     */
    public function setOrderNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_no_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue quantity = 3;</code>
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <code>.dstore.values.IntegerValue quantity = 3;</code>
     */
    public function setQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->quantity = $var;
    }

    /**
     * <code>bool quantity_null = 1003;</code>
     */
    public function getQuantityNull()
    {
        return $this->quantity_null;
    }

    /**
     * <code>bool quantity_null = 1003;</code>
     */
    public function setQuantityNull($var)
    {
        GPBUtil::checkBool($var);
        $this->quantity_null = $var;
    }

    /**
     * <code>.dstore.values.DecimalValue net_sum = 4;</code>
     */
    public function getNetSum()
    {
        return $this->net_sum;
    }

    /**
     * <code>.dstore.values.DecimalValue net_sum = 4;</code>
     */
    public function setNetSum(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->net_sum = $var;
    }

    /**
     * <code>bool net_sum_null = 1004;</code>
     */
    public function getNetSumNull()
    {
        return $this->net_sum_null;
    }

    /**
     * <code>bool net_sum_null = 1004;</code>
     */
    public function setNetSumNull($var)
    {
        GPBUtil::checkBool($var);
        $this->net_sum_null = $var;
    }

    /**
     * <code>.dstore.values.DecimalValue gross_sum = 5;</code>
     */
    public function getGrossSum()
    {
        return $this->gross_sum;
    }

    /**
     * <code>.dstore.values.DecimalValue gross_sum = 5;</code>
     */
    public function setGrossSum(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->gross_sum = $var;
    }

    /**
     * <code>bool gross_sum_null = 1005;</code>
     */
    public function getGrossSumNull()
    {
        return $this->gross_sum_null;
    }

    /**
     * <code>bool gross_sum_null = 1005;</code>
     */
    public function setGrossSumNull($var)
    {
        GPBUtil::checkBool($var);
        $this->gross_sum_null = $var;
    }

}

