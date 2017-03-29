<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyConditions_Ad.proto

namespace Dstore\Engine\Pm_ModifyConditions_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_ModifyConditions_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue condition_id = 1;</code>
     */
    private $condition_id = null;
    /**
     * <code>bool condition_id_null = 1001;</code>
     */
    private $condition_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue condition_position_id = 2;</code>
     */
    private $condition_position_id = null;
    /**
     * <code>bool condition_position_id_null = 1002;</code>
     */
    private $condition_position_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 3;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <code>bool person_characteristic_id_null = 1003;</code>
     */
    private $person_characteristic_id_null = false;
    /**
     * <code>.dstore.values.StringValue condition = 4;</code>
     */
    private $condition = null;
    /**
     * <code>bool condition_null = 1004;</code>
     */
    private $condition_null = false;
    /**
     * <code>.dstore.values.StringValue country = 5;</code>
     */
    private $country = null;
    /**
     * <code>bool country_null = 1005;</code>
     */
    private $country_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_condition_position_id = 6;</code>
     */
    private $delete_condition_position_id = null;
    /**
     * <code>bool delete_condition_position_id_null = 1006;</code>
     */
    private $delete_condition_position_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmModifyConditionsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue condition_id = 1;</code>
     */
    public function getConditionId()
    {
        return $this->condition_id;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_id = 1;</code>
     */
    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_id = $var;
    }

    /**
     * <code>bool condition_id_null = 1001;</code>
     */
    public function getConditionIdNull()
    {
        return $this->condition_id_null;
    }

    /**
     * <code>bool condition_id_null = 1001;</code>
     */
    public function setConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_position_id = 2;</code>
     */
    public function getConditionPositionId()
    {
        return $this->condition_position_id;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_position_id = 2;</code>
     */
    public function setConditionPositionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_position_id = $var;
    }

    /**
     * <code>bool condition_position_id_null = 1002;</code>
     */
    public function getConditionPositionIdNull()
    {
        return $this->condition_position_id_null;
    }

    /**
     * <code>bool condition_position_id_null = 1002;</code>
     */
    public function setConditionPositionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_position_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 3;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 3;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <code>bool person_characteristic_id_null = 1003;</code>
     */
    public function getPersonCharacteristicIdNull()
    {
        return $this->person_characteristic_id_null;
    }

    /**
     * <code>bool person_characteristic_id_null = 1003;</code>
     */
    public function setPersonCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue condition = 4;</code>
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * <code>.dstore.values.StringValue condition = 4;</code>
     */
    public function setCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition = $var;
    }

    /**
     * <code>bool condition_null = 1004;</code>
     */
    public function getConditionNull()
    {
        return $this->condition_null;
    }

    /**
     * <code>bool condition_null = 1004;</code>
     */
    public function setConditionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue country = 5;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <code>.dstore.values.StringValue country = 5;</code>
     */
    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->country = $var;
    }

    /**
     * <code>bool country_null = 1005;</code>
     */
    public function getCountryNull()
    {
        return $this->country_null;
    }

    /**
     * <code>bool country_null = 1005;</code>
     */
    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_condition_position_id = 6;</code>
     */
    public function getDeleteConditionPositionId()
    {
        return $this->delete_condition_position_id;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_condition_position_id = 6;</code>
     */
    public function setDeleteConditionPositionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_condition_position_id = $var;
    }

    /**
     * <code>bool delete_condition_position_id_null = 1006;</code>
     */
    public function getDeleteConditionPositionIdNull()
    {
        return $this->delete_condition_position_id_null;
    }

    /**
     * <code>bool delete_condition_position_id_null = 1006;</code>
     */
    public function setDeleteConditionPositionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_condition_position_id_null = $var;
    }

}

