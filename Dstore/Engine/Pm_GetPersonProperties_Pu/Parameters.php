<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonProperties_Pu.proto

namespace Dstore\Engine\Pm_GetPersonProperties_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonProperties_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.BooleanValue sorted_result = 1;</code>
     */
    private $sorted_result = null;
    /**
     * <code>bool sorted_result_null = 1001;</code>
     */
    private $sorted_result_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_person_charac_category_id = 2;</code>
     */
    private $include_person_charac_category_id = null;
    /**
     * <code>bool include_person_charac_category_id_null = 1002;</code>
     */
    private $include_person_charac_category_id_null = false;
    /**
     * <code>.dstore.values.StringValue input_parameter = 3;</code>
     */
    private $input_parameter = null;
    /**
     * <code>bool input_parameter_null = 1003;</code>
     */
    private $input_parameter_null = false;
    /**
     * <code>.dstore.values.IntegerValue input_is_unique_id = 4;</code>
     */
    private $input_is_unique_id = null;
    /**
     * <code>bool input_is_unique_id_null = 1004;</code>
     */
    private $input_is_unique_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 5;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1005;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue language_id = 6;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1006;</code>
     */
    private $language_id_null = false;
    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 7;</code>
     */
    private $characteristic_id_list = null;
    /**
     * <code>bool characteristic_id_list_null = 1007;</code>
     */
    private $characteristic_id_list_null = false;
    /**
     * <code>.dstore.values.StringValue date_format = 8;</code>
     */
    private $date_format = null;
    /**
     * <code>bool date_format_null = 1008;</code>
     */
    private $date_format_null = false;
    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 9;</code>
     */
    private $case_sensitive = null;
    /**
     * <code>bool case_sensitive_null = 1009;</code>
     */
    private $case_sensitive_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_id = 10;</code>
     */
    private $person_id = null;
    /**
     * <code>bool person_id_null = 1010;</code>
     */
    private $person_id_null = false;
    /**
     * <code>.dstore.values.TimestampValue date_and_time = 11;</code>
     */
    private $date_and_time = null;
    /**
     * <code>bool date_and_time_null = 1011;</code>
     */
    private $date_and_time_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_actual_properties = 12;</code>
     */
    private $get_actual_properties = null;
    /**
     * <code>bool get_actual_properties_null = 1012;</code>
     */
    private $get_actual_properties_null = false;
    /**
     * <code>.dstore.values.StringValue separator_for_ident_vals = 13;</code>
     */
    private $separator_for_ident_vals = null;
    /**
     * <code>bool separator_for_ident_vals_null = 1013;</code>
     */
    private $separator_for_ident_vals_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonPropertiesPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.BooleanValue sorted_result = 1;</code>
     */
    public function getSortedResult()
    {
        return $this->sorted_result;
    }

    /**
     * <code>.dstore.values.BooleanValue sorted_result = 1;</code>
     */
    public function setSortedResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->sorted_result = $var;
    }

    /**
     * <code>bool sorted_result_null = 1001;</code>
     */
    public function getSortedResultNull()
    {
        return $this->sorted_result_null;
    }

    /**
     * <code>bool sorted_result_null = 1001;</code>
     */
    public function setSortedResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sorted_result_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_person_charac_category_id = 2;</code>
     */
    public function getIncludePersonCharacCategoryId()
    {
        return $this->include_person_charac_category_id;
    }

    /**
     * <code>.dstore.values.BooleanValue include_person_charac_category_id = 2;</code>
     */
    public function setIncludePersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_person_charac_category_id = $var;
    }

    /**
     * <code>bool include_person_charac_category_id_null = 1002;</code>
     */
    public function getIncludePersonCharacCategoryIdNull()
    {
        return $this->include_person_charac_category_id_null;
    }

    /**
     * <code>bool include_person_charac_category_id_null = 1002;</code>
     */
    public function setIncludePersonCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_person_charac_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue input_parameter = 3;</code>
     */
    public function getInputParameter()
    {
        return $this->input_parameter;
    }

    /**
     * <code>.dstore.values.StringValue input_parameter = 3;</code>
     */
    public function setInputParameter(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->input_parameter = $var;
    }

    /**
     * <code>bool input_parameter_null = 1003;</code>
     */
    public function getInputParameterNull()
    {
        return $this->input_parameter_null;
    }

    /**
     * <code>bool input_parameter_null = 1003;</code>
     */
    public function setInputParameterNull($var)
    {
        GPBUtil::checkBool($var);
        $this->input_parameter_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue input_is_unique_id = 4;</code>
     */
    public function getInputIsUniqueId()
    {
        return $this->input_is_unique_id;
    }

    /**
     * <code>.dstore.values.IntegerValue input_is_unique_id = 4;</code>
     */
    public function setInputIsUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->input_is_unique_id = $var;
    }

    /**
     * <code>bool input_is_unique_id_null = 1004;</code>
     */
    public function getInputIsUniqueIdNull()
    {
        return $this->input_is_unique_id_null;
    }

    /**
     * <code>bool input_is_unique_id_null = 1004;</code>
     */
    public function setInputIsUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->input_is_unique_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 5;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 5;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1005;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1005;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 6;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 6;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1006;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1006;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 7;</code>
     */
    public function getCharacteristicIdList()
    {
        return $this->characteristic_id_list;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 7;</code>
     */
    public function setCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->characteristic_id_list = $var;
    }

    /**
     * <code>bool characteristic_id_list_null = 1007;</code>
     */
    public function getCharacteristicIdListNull()
    {
        return $this->characteristic_id_list_null;
    }

    /**
     * <code>bool characteristic_id_list_null = 1007;</code>
     */
    public function setCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 8;</code>
     */
    public function getDateFormat()
    {
        return $this->date_format;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 8;</code>
     */
    public function setDateFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->date_format = $var;
    }

    /**
     * <code>bool date_format_null = 1008;</code>
     */
    public function getDateFormatNull()
    {
        return $this->date_format_null;
    }

    /**
     * <code>bool date_format_null = 1008;</code>
     */
    public function setDateFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_format_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 9;</code>
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 9;</code>
     */
    public function setCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->case_sensitive = $var;
    }

    /**
     * <code>bool case_sensitive_null = 1009;</code>
     */
    public function getCaseSensitiveNull()
    {
        return $this->case_sensitive_null;
    }

    /**
     * <code>bool case_sensitive_null = 1009;</code>
     */
    public function setCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 10;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 10;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <code>bool person_id_null = 1010;</code>
     */
    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    /**
     * <code>bool person_id_null = 1010;</code>
     */
    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue date_and_time = 11;</code>
     */
    public function getDateAndTime()
    {
        return $this->date_and_time;
    }

    /**
     * <code>.dstore.values.TimestampValue date_and_time = 11;</code>
     */
    public function setDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->date_and_time = $var;
    }

    /**
     * <code>bool date_and_time_null = 1011;</code>
     */
    public function getDateAndTimeNull()
    {
        return $this->date_and_time_null;
    }

    /**
     * <code>bool date_and_time_null = 1011;</code>
     */
    public function setDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_and_time_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_actual_properties = 12;</code>
     */
    public function getGetActualProperties()
    {
        return $this->get_actual_properties;
    }

    /**
     * <code>.dstore.values.BooleanValue get_actual_properties = 12;</code>
     */
    public function setGetActualProperties(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_actual_properties = $var;
    }

    /**
     * <code>bool get_actual_properties_null = 1012;</code>
     */
    public function getGetActualPropertiesNull()
    {
        return $this->get_actual_properties_null;
    }

    /**
     * <code>bool get_actual_properties_null = 1012;</code>
     */
    public function setGetActualPropertiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_actual_properties_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator_for_ident_vals = 13;</code>
     */
    public function getSeparatorForIdentVals()
    {
        return $this->separator_for_ident_vals;
    }

    /**
     * <code>.dstore.values.StringValue separator_for_ident_vals = 13;</code>
     */
    public function setSeparatorForIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator_for_ident_vals = $var;
    }

    /**
     * <code>bool separator_for_ident_vals_null = 1013;</code>
     */
    public function getSeparatorForIdentValsNull()
    {
        return $this->separator_for_ident_vals_null;
    }

    /**
     * <code>bool separator_for_ident_vals_null = 1013;</code>
     */
    public function setSeparatorForIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_for_ident_vals_null = $var;
    }

}

