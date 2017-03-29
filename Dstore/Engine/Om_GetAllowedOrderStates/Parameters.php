<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetAllowedOrderStates.proto

namespace Dstore\Engine\Om_GetAllowedOrderStates;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetAllowedOrderStates.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue from_order_state_id = 1;</code>
     */
    private $from_order_state_id = null;
    /**
     * <code>bool from_order_state_id_null = 1001;</code>
     */
    private $from_order_state_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue to_order_state_id = 2;</code>
     */
    private $to_order_state_id = null;
    /**
     * <code>bool to_order_state_id_null = 1002;</code>
     */
    private $to_order_state_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue payment_for_shipping_id = 3;</code>
     */
    private $payment_for_shipping_id = null;
    /**
     * <code>bool payment_for_shipping_id_null = 1003;</code>
     */
    private $payment_for_shipping_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue language_id = 4;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1004;</code>
     */
    private $language_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue only_active = 5;</code>
     */
    private $only_active = null;
    /**
     * <code>bool only_active_null = 1005;</code>
     */
    private $only_active_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetAllowedOrderStates::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue from_order_state_id = 1;</code>
     */
    public function getFromOrderStateId()
    {
        return $this->from_order_state_id;
    }

    /**
     * <code>.dstore.values.IntegerValue from_order_state_id = 1;</code>
     */
    public function setFromOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_order_state_id = $var;
    }

    /**
     * <code>bool from_order_state_id_null = 1001;</code>
     */
    public function getFromOrderStateIdNull()
    {
        return $this->from_order_state_id_null;
    }

    /**
     * <code>bool from_order_state_id_null = 1001;</code>
     */
    public function setFromOrderStateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_order_state_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue to_order_state_id = 2;</code>
     */
    public function getToOrderStateId()
    {
        return $this->to_order_state_id;
    }

    /**
     * <code>.dstore.values.IntegerValue to_order_state_id = 2;</code>
     */
    public function setToOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->to_order_state_id = $var;
    }

    /**
     * <code>bool to_order_state_id_null = 1002;</code>
     */
    public function getToOrderStateIdNull()
    {
        return $this->to_order_state_id_null;
    }

    /**
     * <code>bool to_order_state_id_null = 1002;</code>
     */
    public function setToOrderStateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_order_state_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue payment_for_shipping_id = 3;</code>
     */
    public function getPaymentForShippingId()
    {
        return $this->payment_for_shipping_id;
    }

    /**
     * <code>.dstore.values.IntegerValue payment_for_shipping_id = 3;</code>
     */
    public function setPaymentForShippingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->payment_for_shipping_id = $var;
    }

    /**
     * <code>bool payment_for_shipping_id_null = 1003;</code>
     */
    public function getPaymentForShippingIdNull()
    {
        return $this->payment_for_shipping_id_null;
    }

    /**
     * <code>bool payment_for_shipping_id_null = 1003;</code>
     */
    public function setPaymentForShippingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_for_shipping_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 4;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 4;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1004;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1004;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue only_active = 5;</code>
     */
    public function getOnlyActive()
    {
        return $this->only_active;
    }

    /**
     * <code>.dstore.values.BooleanValue only_active = 5;</code>
     */
    public function setOnlyActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->only_active = $var;
    }

    /**
     * <code>bool only_active_null = 1005;</code>
     */
    public function getOnlyActiveNull()
    {
        return $this->only_active_null;
    }

    /**
     * <code>bool only_active_null = 1005;</code>
     */
    public function setOnlyActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_active_null = $var;
    }

}

