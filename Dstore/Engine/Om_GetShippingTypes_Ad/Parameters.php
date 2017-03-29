<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetShippingTypes_Ad.proto

namespace Dstore\Engine\Om_GetShippingTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetShippingTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue language_id = 1;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1001;</code>
     */
    private $language_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 2;</code>
     */
    private $shipping_type_id = null;
    /**
     * <code>bool shipping_type_id_null = 1002;</code>
     */
    private $shipping_type_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue only_active = 3;</code>
     */
    private $only_active = null;
    /**
     * <code>bool only_active_null = 1003;</code>
     */
    private $only_active_null = false;
    /**
     * <code>.dstore.values.TimestampValue valid_at_date_and_time = 4;</code>
     */
    private $valid_at_date_and_time = null;
    /**
     * <code>bool valid_at_date_and_time_null = 1004;</code>
     */
    private $valid_at_date_and_time_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetShippingTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 1;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 1;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1001;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1001;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 2;</code>
     */
    public function getShippingTypeId()
    {
        return $this->shipping_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 2;</code>
     */
    public function setShippingTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->shipping_type_id = $var;
    }

    /**
     * <code>bool shipping_type_id_null = 1002;</code>
     */
    public function getShippingTypeIdNull()
    {
        return $this->shipping_type_id_null;
    }

    /**
     * <code>bool shipping_type_id_null = 1002;</code>
     */
    public function setShippingTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue only_active = 3;</code>
     */
    public function getOnlyActive()
    {
        return $this->only_active;
    }

    /**
     * <code>.dstore.values.BooleanValue only_active = 3;</code>
     */
    public function setOnlyActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->only_active = $var;
    }

    /**
     * <code>bool only_active_null = 1003;</code>
     */
    public function getOnlyActiveNull()
    {
        return $this->only_active_null;
    }

    /**
     * <code>bool only_active_null = 1003;</code>
     */
    public function setOnlyActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_active_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_at_date_and_time = 4;</code>
     */
    public function getValidAtDateAndTime()
    {
        return $this->valid_at_date_and_time;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_at_date_and_time = 4;</code>
     */
    public function setValidAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_at_date_and_time = $var;
    }

    /**
     * <code>bool valid_at_date_and_time_null = 1004;</code>
     */
    public function getValidAtDateAndTimeNull()
    {
        return $this->valid_at_date_and_time_null;
    }

    /**
     * <code>bool valid_at_date_and_time_null = 1004;</code>
     */
    public function setValidAtDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_at_date_and_time_null = $var;
    }

}

