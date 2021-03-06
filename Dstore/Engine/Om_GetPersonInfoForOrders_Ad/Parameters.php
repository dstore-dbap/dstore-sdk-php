<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPersonInfoForOrders_Ad.proto

namespace Dstore\Engine\Om_GetPersonInfoForOrders_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetPersonInfoForOrders_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue order_id = 1;</code>
     */
    private $order_id = null;
    /**
     * <code>bool order_id_null = 1001;</code>
     */
    private $order_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1002;</code>
     */
    private $language_id_null = false;
    /**
     * <code>.dstore.values.TimestampValue date_and_time = 3;</code>
     */
    private $date_and_time = null;
    /**
     * <code>bool date_and_time_null = 1003;</code>
     */
    private $date_and_time_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_actual_properties = 4;</code>
     */
    private $get_actual_properties = null;
    /**
     * <code>bool get_actual_properties_null = 1004;</code>
     */
    private $get_actual_properties_null = false;
    /**
     * <code>.dstore.values.StringValue date_format = 5;</code>
     */
    private $date_format = null;
    /**
     * <code>bool date_format_null = 1005;</code>
     */
    private $date_format_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetPersonInfoForOrdersAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue order_id = 1;</code>
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * <code>.dstore.values.IntegerValue order_id = 1;</code>
     */
    public function setOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_id = $var;
    }

    /**
     * <code>bool order_id_null = 1001;</code>
     */
    public function getOrderIdNull()
    {
        return $this->order_id_null;
    }

    /**
     * <code>bool order_id_null = 1001;</code>
     */
    public function setOrderIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue date_and_time = 3;</code>
     */
    public function getDateAndTime()
    {
        return $this->date_and_time;
    }

    /**
     * <code>.dstore.values.TimestampValue date_and_time = 3;</code>
     */
    public function setDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->date_and_time = $var;
    }

    /**
     * <code>bool date_and_time_null = 1003;</code>
     */
    public function getDateAndTimeNull()
    {
        return $this->date_and_time_null;
    }

    /**
     * <code>bool date_and_time_null = 1003;</code>
     */
    public function setDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_and_time_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_actual_properties = 4;</code>
     */
    public function getGetActualProperties()
    {
        return $this->get_actual_properties;
    }

    /**
     * <code>.dstore.values.BooleanValue get_actual_properties = 4;</code>
     */
    public function setGetActualProperties(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_actual_properties = $var;
    }

    /**
     * <code>bool get_actual_properties_null = 1004;</code>
     */
    public function getGetActualPropertiesNull()
    {
        return $this->get_actual_properties_null;
    }

    /**
     * <code>bool get_actual_properties_null = 1004;</code>
     */
    public function setGetActualPropertiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_actual_properties_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 5;</code>
     */
    public function getDateFormat()
    {
        return $this->date_format;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 5;</code>
     */
    public function setDateFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->date_format = $var;
    }

    /**
     * <code>bool date_format_null = 1005;</code>
     */
    public function getDateFormatNull()
    {
        return $this->date_format_null;
    }

    /**
     * <code>bool date_format_null = 1005;</code>
     */
    public function setDateFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_format_null = $var;
    }

}

