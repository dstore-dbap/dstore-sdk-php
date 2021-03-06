<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPersonData_Ad.proto

namespace Dstore\Engine\Pm_ModifyPersonData_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_ModifyPersonData_Ad.Parameters</code>
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
     * <code>.dstore.values.StringValue characteristic_id_list = 2;</code>
     */
    private $characteristic_id_list = null;
    /**
     * <code>bool characteristic_id_list_null = 1002;</code>
     */
    private $characteristic_id_list_null = false;
    /**
     * <code>.dstore.values.StringValue value_list = 3;</code>
     */
    private $value_list = null;
    /**
     * <code>bool value_list_null = 1003;</code>
     */
    private $value_list_null = false;
    /**
     * <code>.dstore.values.StringValue error_id_list = 4;</code>
     */
    private $error_id_list = null;
    /**
     * <code>bool error_id_list_null = 1004;</code>
     */
    private $error_id_list_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_charac_category_id = 5;</code>
     */
    private $person_charac_category_id = null;
    /**
     * <code>bool person_charac_category_id_null = 1005;</code>
     */
    private $person_charac_category_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_charac_category_id = 6;</code>
     */
    private $delete_charac_category_id = null;
    /**
     * <code>bool delete_charac_category_id_null = 1006;</code>
     */
    private $delete_charac_category_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue result_in_error_id_list = 7;</code>
     */
    private $result_in_error_id_list = null;
    /**
     * <code>bool result_in_error_id_list_null = 1007;</code>
     */
    private $result_in_error_id_list_null = false;
    /**
     * <code>.dstore.values.BooleanValue value_ids_for_predefined_characs = 8;</code>
     */
    private $value_ids_for_predefined_characs = null;
    /**
     * <code>bool value_ids_for_predefined_characs_null = 1008;</code>
     */
    private $value_ids_for_predefined_characs_null = false;
    /**
     * <code>.dstore.values.BooleanValue change_all_or_nothing = 9;</code>
     */
    private $change_all_or_nothing = null;
    /**
     * <code>bool change_all_or_nothing_null = 1009;</code>
     */
    private $change_all_or_nothing_null = false;
    /**
     * <code>.dstore.values.StringValue country = 10;</code>
     */
    private $country = null;
    /**
     * <code>bool country_null = 1010;</code>
     */
    private $country_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_value_list = 11;</code>
     */
    private $separator_in_value_list = null;
    /**
     * <code>bool separator_in_value_list_null = 1011;</code>
     */
    private $separator_in_value_list_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmModifyPersonDataAd::initOnce();
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
     * <code>.dstore.values.StringValue characteristic_id_list = 2;</code>
     */
    public function getCharacteristicIdList()
    {
        return $this->characteristic_id_list;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 2;</code>
     */
    public function setCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->characteristic_id_list = $var;
    }

    /**
     * <code>bool characteristic_id_list_null = 1002;</code>
     */
    public function getCharacteristicIdListNull()
    {
        return $this->characteristic_id_list_null;
    }

    /**
     * <code>bool characteristic_id_list_null = 1002;</code>
     */
    public function setCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue value_list = 3;</code>
     */
    public function getValueList()
    {
        return $this->value_list;
    }

    /**
     * <code>.dstore.values.StringValue value_list = 3;</code>
     */
    public function setValueList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value_list = $var;
    }

    /**
     * <code>bool value_list_null = 1003;</code>
     */
    public function getValueListNull()
    {
        return $this->value_list_null;
    }

    /**
     * <code>bool value_list_null = 1003;</code>
     */
    public function setValueListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue error_id_list = 4;</code>
     */
    public function getErrorIdList()
    {
        return $this->error_id_list;
    }

    /**
     * <code>.dstore.values.StringValue error_id_list = 4;</code>
     */
    public function setErrorIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->error_id_list = $var;
    }

    /**
     * <code>bool error_id_list_null = 1004;</code>
     */
    public function getErrorIdListNull()
    {
        return $this->error_id_list_null;
    }

    /**
     * <code>bool error_id_list_null = 1004;</code>
     */
    public function setErrorIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->error_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_charac_category_id = 5;</code>
     */
    public function getPersonCharacCategoryId()
    {
        return $this->person_charac_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_charac_category_id = 5;</code>
     */
    public function setPersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_charac_category_id = $var;
    }

    /**
     * <code>bool person_charac_category_id_null = 1005;</code>
     */
    public function getPersonCharacCategoryIdNull()
    {
        return $this->person_charac_category_id_null;
    }

    /**
     * <code>bool person_charac_category_id_null = 1005;</code>
     */
    public function setPersonCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_charac_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_charac_category_id = 6;</code>
     */
    public function getDeleteCharacCategoryId()
    {
        return $this->delete_charac_category_id;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_charac_category_id = 6;</code>
     */
    public function setDeleteCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_charac_category_id = $var;
    }

    /**
     * <code>bool delete_charac_category_id_null = 1006;</code>
     */
    public function getDeleteCharacCategoryIdNull()
    {
        return $this->delete_charac_category_id_null;
    }

    /**
     * <code>bool delete_charac_category_id_null = 1006;</code>
     */
    public function setDeleteCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_charac_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue result_in_error_id_list = 7;</code>
     */
    public function getResultInErrorIdList()
    {
        return $this->result_in_error_id_list;
    }

    /**
     * <code>.dstore.values.BooleanValue result_in_error_id_list = 7;</code>
     */
    public function setResultInErrorIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->result_in_error_id_list = $var;
    }

    /**
     * <code>bool result_in_error_id_list_null = 1007;</code>
     */
    public function getResultInErrorIdListNull()
    {
        return $this->result_in_error_id_list_null;
    }

    /**
     * <code>bool result_in_error_id_list_null = 1007;</code>
     */
    public function setResultInErrorIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->result_in_error_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue value_ids_for_predefined_characs = 8;</code>
     */
    public function getValueIdsForPredefinedCharacs()
    {
        return $this->value_ids_for_predefined_characs;
    }

    /**
     * <code>.dstore.values.BooleanValue value_ids_for_predefined_characs = 8;</code>
     */
    public function setValueIdsForPredefinedCharacs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->value_ids_for_predefined_characs = $var;
    }

    /**
     * <code>bool value_ids_for_predefined_characs_null = 1008;</code>
     */
    public function getValueIdsForPredefinedCharacsNull()
    {
        return $this->value_ids_for_predefined_characs_null;
    }

    /**
     * <code>bool value_ids_for_predefined_characs_null = 1008;</code>
     */
    public function setValueIdsForPredefinedCharacsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_ids_for_predefined_characs_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue change_all_or_nothing = 9;</code>
     */
    public function getChangeAllOrNothing()
    {
        return $this->change_all_or_nothing;
    }

    /**
     * <code>.dstore.values.BooleanValue change_all_or_nothing = 9;</code>
     */
    public function setChangeAllOrNothing(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->change_all_or_nothing = $var;
    }

    /**
     * <code>bool change_all_or_nothing_null = 1009;</code>
     */
    public function getChangeAllOrNothingNull()
    {
        return $this->change_all_or_nothing_null;
    }

    /**
     * <code>bool change_all_or_nothing_null = 1009;</code>
     */
    public function setChangeAllOrNothingNull($var)
    {
        GPBUtil::checkBool($var);
        $this->change_all_or_nothing_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue country = 10;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <code>.dstore.values.StringValue country = 10;</code>
     */
    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->country = $var;
    }

    /**
     * <code>bool country_null = 1010;</code>
     */
    public function getCountryNull()
    {
        return $this->country_null;
    }

    /**
     * <code>bool country_null = 1010;</code>
     */
    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_value_list = 11;</code>
     */
    public function getSeparatorInValueList()
    {
        return $this->separator_in_value_list;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_value_list = 11;</code>
     */
    public function setSeparatorInValueList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator_in_value_list = $var;
    }

    /**
     * <code>bool separator_in_value_list_null = 1011;</code>
     */
    public function getSeparatorInValueListNull()
    {
        return $this->separator_in_value_list_null;
    }

    /**
     * <code>bool separator_in_value_list_null = 1011;</code>
     */
    public function setSeparatorInValueListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_value_list_null = $var;
    }

}

