<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetPHStatistics_Ad.proto

namespace Dstore\Engine\St_GetPHStatistics_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_GetPHStatistics_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.TimestampValue from_date_and_time = 1;</code>
     */
    private $from_date_and_time = null;
    /**
     * <code>bool from_date_and_time_null = 1001;</code>
     */
    private $from_date_and_time_null = false;
    /**
     * <code>.dstore.values.TimestampValue to_date_and_time = 2;</code>
     */
    private $to_date_and_time = null;
    /**
     * <code>bool to_date_and_time_null = 1002;</code>
     */
    private $to_date_and_time_null = false;
    /**
     * <code>.dstore.values.StringValue basic_characteristic_numbers = 3;</code>
     */
    private $basic_characteristic_numbers = null;
    /**
     * <code>bool basic_characteristic_numbers_null = 1003;</code>
     */
    private $basic_characteristic_numbers_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StGetPHStatisticsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.TimestampValue from_date_and_time = 1;</code>
     */
    public function getFromDateAndTime()
    {
        return $this->from_date_and_time;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date_and_time = 1;</code>
     */
    public function setFromDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_date_and_time = $var;
    }

    /**
     * <code>bool from_date_and_time_null = 1001;</code>
     */
    public function getFromDateAndTimeNull()
    {
        return $this->from_date_and_time_null;
    }

    /**
     * <code>bool from_date_and_time_null = 1001;</code>
     */
    public function setFromDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_and_time_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date_and_time = 2;</code>
     */
    public function getToDateAndTime()
    {
        return $this->to_date_and_time;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date_and_time = 2;</code>
     */
    public function setToDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_date_and_time = $var;
    }

    /**
     * <code>bool to_date_and_time_null = 1002;</code>
     */
    public function getToDateAndTimeNull()
    {
        return $this->to_date_and_time_null;
    }

    /**
     * <code>bool to_date_and_time_null = 1002;</code>
     */
    public function setToDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_and_time_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue basic_characteristic_numbers = 3;</code>
     */
    public function getBasicCharacteristicNumbers()
    {
        return $this->basic_characteristic_numbers;
    }

    /**
     * <code>.dstore.values.StringValue basic_characteristic_numbers = 3;</code>
     */
    public function setBasicCharacteristicNumbers(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->basic_characteristic_numbers = $var;
    }

    /**
     * <code>bool basic_characteristic_numbers_null = 1003;</code>
     */
    public function getBasicCharacteristicNumbersNull()
    {
        return $this->basic_characteristic_numbers_null;
    }

    /**
     * <code>bool basic_characteristic_numbers_null = 1003;</code>
     */
    public function setBasicCharacteristicNumbersNull($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_characteristic_numbers_null = $var;
    }

}

