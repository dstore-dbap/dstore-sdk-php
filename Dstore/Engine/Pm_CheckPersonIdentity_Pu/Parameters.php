<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_CheckPersonIdentity_Pu.proto

namespace Dstore\Engine\Pm_CheckPersonIdentity_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_CheckPersonIdentity_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue person_identification_values = 1;</code>
     */
    private $person_identification_values = null;
    /**
     * <code>bool person_identification_values_null = 1001;</code>
     */
    private $person_identification_values_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 2;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1002;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    private $unique_id = null;
    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    private $unique_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_id = 4;</code>
     */
    private $person_id = null;
    /**
     * <code>bool person_id_null = 1004;</code>
     */
    private $person_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue select_result = 5;</code>
     */
    private $select_result = null;
    /**
     * <code>bool select_result_null = 1005;</code>
     */
    private $select_result_null = false;
    /**
     * <code>.dstore.values.BooleanValue grant_access_values = 6;</code>
     */
    private $grant_access_values = null;
    /**
     * <code>bool grant_access_values_null = 1006;</code>
     */
    private $grant_access_values_null = false;
    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 7;</code>
     */
    private $case_sensitive = null;
    /**
     * <code>bool case_sensitive_null = 1007;</code>
     */
    private $case_sensitive_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 8;</code>
     */
    private $separator_in_ident_vals = null;
    /**
     * <code>bool separator_in_ident_vals_null = 1008;</code>
     */
    private $separator_in_ident_vals_null = false;
    /**
     * <code>.dstore.values.StringValue identification_ids = 9;</code>
     */
    private $identification_ids = null;
    /**
     * <code>bool identification_ids_null = 1009;</code>
     */
    private $identification_ids_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmCheckPersonIdentityPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 1;</code>
     */
    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 1;</code>
     */
    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->person_identification_values = $var;
    }

    /**
     * <code>bool person_identification_values_null = 1001;</code>
     */
    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    /**
     * <code>bool person_identification_values_null = 1001;</code>
     */
    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 2;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 2;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1002;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1002;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unique_id = $var;
    }

    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 4;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 4;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <code>bool person_id_null = 1004;</code>
     */
    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    /**
     * <code>bool person_id_null = 1004;</code>
     */
    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue select_result = 5;</code>
     */
    public function getSelectResult()
    {
        return $this->select_result;
    }

    /**
     * <code>.dstore.values.BooleanValue select_result = 5;</code>
     */
    public function setSelectResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->select_result = $var;
    }

    /**
     * <code>bool select_result_null = 1005;</code>
     */
    public function getSelectResultNull()
    {
        return $this->select_result_null;
    }

    /**
     * <code>bool select_result_null = 1005;</code>
     */
    public function setSelectResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->select_result_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue grant_access_values = 6;</code>
     */
    public function getGrantAccessValues()
    {
        return $this->grant_access_values;
    }

    /**
     * <code>.dstore.values.BooleanValue grant_access_values = 6;</code>
     */
    public function setGrantAccessValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->grant_access_values = $var;
    }

    /**
     * <code>bool grant_access_values_null = 1006;</code>
     */
    public function getGrantAccessValuesNull()
    {
        return $this->grant_access_values_null;
    }

    /**
     * <code>bool grant_access_values_null = 1006;</code>
     */
    public function setGrantAccessValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->grant_access_values_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 7;</code>
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 7;</code>
     */
    public function setCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->case_sensitive = $var;
    }

    /**
     * <code>bool case_sensitive_null = 1007;</code>
     */
    public function getCaseSensitiveNull()
    {
        return $this->case_sensitive_null;
    }

    /**
     * <code>bool case_sensitive_null = 1007;</code>
     */
    public function setCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 8;</code>
     */
    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 8;</code>
     */
    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1008;</code>
     */
    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1008;</code>
     */
    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue identification_ids = 9;</code>
     */
    public function getIdentificationIds()
    {
        return $this->identification_ids;
    }

    /**
     * <code>.dstore.values.StringValue identification_ids = 9;</code>
     */
    public function setIdentificationIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->identification_ids = $var;
    }

    /**
     * <code>bool identification_ids_null = 1009;</code>
     */
    public function getIdentificationIdsNull()
    {
        return $this->identification_ids_null;
    }

    /**
     * <code>bool identification_ids_null = 1009;</code>
     */
    public function setIdentificationIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->identification_ids_null = $var;
    }

}
