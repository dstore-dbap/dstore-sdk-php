<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonCharacValueID_Ad.proto

namespace Dstore\Engine\Pm_GetPersonCharacValueID_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonCharacValueID_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 1;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <code>bool person_characteristic_id_null = 1001;</code>
     */
    private $person_characteristic_id_null = false;
    /**
     * <code>.dstore.values.StringValue value = 2;</code>
     */
    private $value = null;
    /**
     * <code>bool value_null = 1002;</code>
     */
    private $value_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonCharacValueIDAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 1;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 1;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <code>bool person_characteristic_id_null = 1001;</code>
     */
    public function getPersonCharacteristicIdNull()
    {
        return $this->person_characteristic_id_null;
    }

    /**
     * <code>bool person_characteristic_id_null = 1001;</code>
     */
    public function setPersonCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue value = 2;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>.dstore.values.StringValue value = 2;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <code>bool value_null = 1002;</code>
     */
    public function getValueNull()
    {
        return $this->value_null;
    }

    /**
     * <code>bool value_null = 1002;</code>
     */
    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

}

