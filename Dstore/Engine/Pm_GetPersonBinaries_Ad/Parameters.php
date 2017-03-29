<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonBinaries_Ad.proto

namespace Dstore\Engine\Pm_GetPersonBinaries_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonBinaries_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    private $person_id = null;
    /**
     * <code>bool person_id_null = 1001;</code>
     */
    private $person_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue include_binary_code = 2;</code>
     */
    private $include_binary_code = null;
    /**
     * <code>bool include_binary_code_null = 1002;</code>
     */
    private $include_binary_code_null = false;
    /**
     * <code>.dstore.values.IntegerValue binary_characteristic_id = 3;</code>
     */
    private $binary_characteristic_id = null;
    /**
     * <code>bool binary_characteristic_id_null = 1003;</code>
     */
    private $binary_characteristic_id_null = false;
    /**
     * <code>.dstore.values.StringValue value = 4;</code>
     */
    private $value = null;
    /**
     * <code>bool value_null = 1004;</code>
     */
    private $value_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonBinariesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <code>bool person_id_null = 1001;</code>
     */
    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    /**
     * <code>bool person_id_null = 1001;</code>
     */
    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue include_binary_code = 2;</code>
     */
    public function getIncludeBinaryCode()
    {
        return $this->include_binary_code;
    }

    /**
     * <code>.dstore.values.IntegerValue include_binary_code = 2;</code>
     */
    public function setIncludeBinaryCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->include_binary_code = $var;
    }

    /**
     * <code>bool include_binary_code_null = 1002;</code>
     */
    public function getIncludeBinaryCodeNull()
    {
        return $this->include_binary_code_null;
    }

    /**
     * <code>bool include_binary_code_null = 1002;</code>
     */
    public function setIncludeBinaryCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_binary_code_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue binary_characteristic_id = 3;</code>
     */
    public function getBinaryCharacteristicId()
    {
        return $this->binary_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue binary_characteristic_id = 3;</code>
     */
    public function setBinaryCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_characteristic_id = $var;
    }

    /**
     * <code>bool binary_characteristic_id_null = 1003;</code>
     */
    public function getBinaryCharacteristicIdNull()
    {
        return $this->binary_characteristic_id_null;
    }

    /**
     * <code>bool binary_characteristic_id_null = 1003;</code>
     */
    public function setBinaryCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue value = 4;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>.dstore.values.StringValue value = 4;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <code>bool value_null = 1004;</code>
     */
    public function getValueNull()
    {
        return $this->value_null;
    }

    /**
     * <code>bool value_null = 1004;</code>
     */
    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

}
