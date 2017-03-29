<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_DeletePerson_Pu.proto

namespace Dstore\Engine\Pm_DeletePerson_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_DeletePerson_Pu.Parameters</code>
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
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    private $person_identification_values = null;
    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    private $person_identification_values_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 3;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1003;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 4;</code>
     */
    private $case_sensitive = null;
    /**
     * <code>bool case_sensitive_null = 1004;</code>
     */
    private $case_sensitive_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmDeletePersonPu::initOnce();
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
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->person_identification_values = $var;
    }

    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 3;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 3;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1003;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1003;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 4;</code>
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 4;</code>
     */
    public function setCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->case_sensitive = $var;
    }

    /**
     * <code>bool case_sensitive_null = 1004;</code>
     */
    public function getCaseSensitiveNull()
    {
        return $this->case_sensitive_null;
    }

    /**
     * <code>bool case_sensitive_null = 1004;</code>
     */
    public function setCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive_null = $var;
    }

}
