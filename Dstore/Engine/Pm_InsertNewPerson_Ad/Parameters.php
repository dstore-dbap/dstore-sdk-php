<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_InsertNewPerson_Ad.proto

namespace Dstore\Engine\Pm_InsertNewPerson_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_InsertNewPerson_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue characteristic_id_list1 = 1;</code>
     */
    private $characteristic_id_list1 = null;
    /**
     * <code>bool characteristic_id_list1_null = 1001;</code>
     */
    private $characteristic_id_list1_null = false;
    /**
     * <code>.dstore.values.StringValue value_list1 = 2;</code>
     */
    private $value_list1 = null;
    /**
     * <code>bool value_list1_null = 1002;</code>
     */
    private $value_list1_null = false;
    /**
     * <code>.dstore.values.StringValue characteristic_id_list2 = 3;</code>
     */
    private $characteristic_id_list2 = null;
    /**
     * <code>bool characteristic_id_list2_null = 1003;</code>
     */
    private $characteristic_id_list2_null = false;
    /**
     * <code>.dstore.values.StringValue value_list2 = 4;</code>
     */
    private $value_list2 = null;
    /**
     * <code>bool value_list2_null = 1004;</code>
     */
    private $value_list2_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_charac_category_id = 5;</code>
     */
    private $person_charac_category_id = null;
    /**
     * <code>bool person_charac_category_id_null = 1005;</code>
     */
    private $person_charac_category_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_id = 6;</code>
     */
    private $person_id = null;
    /**
     * <code>bool person_id_null = 1006;</code>
     */
    private $person_id_null = false;
    /**
     * <code>.dstore.values.StringValue error_id_list = 7;</code>
     */
    private $error_id_list = null;
    /**
     * <code>bool error_id_list_null = 1007;</code>
     */
    private $error_id_list_null = false;
    /**
     * <code>.dstore.values.BooleanValue result_in_error_id_list = 8;</code>
     */
    private $result_in_error_id_list = null;
    /**
     * <code>bool result_in_error_id_list_null = 1008;</code>
     */
    private $result_in_error_id_list_null = false;
    /**
     * <code>.dstore.values.BooleanValue value_ids_for_predefined_characs = 9;</code>
     */
    private $value_ids_for_predefined_characs = null;
    /**
     * <code>bool value_ids_for_predefined_characs_null = 1009;</code>
     */
    private $value_ids_for_predefined_characs_null = false;
    /**
     * <code>.dstore.values.BooleanValue cancel_on_error = 10;</code>
     */
    private $cancel_on_error = null;
    /**
     * <code>bool cancel_on_error_null = 1010;</code>
     */
    private $cancel_on_error_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_lists = 11;</code>
     */
    private $separator_in_lists = null;
    /**
     * <code>bool separator_in_lists_null = 1011;</code>
     */
    private $separator_in_lists_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 12;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1012;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue country = 13;</code>
     */
    private $country = null;
    /**
     * <code>bool country_null = 1013;</code>
     */
    private $country_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmInsertNewPersonAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list1 = 1;</code>
     */
    public function getCharacteristicIdList1()
    {
        return $this->characteristic_id_list1;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list1 = 1;</code>
     */
    public function setCharacteristicIdList1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->characteristic_id_list1 = $var;
    }

    /**
     * <code>bool characteristic_id_list1_null = 1001;</code>
     */
    public function getCharacteristicIdList1Null()
    {
        return $this->characteristic_id_list1_null;
    }

    /**
     * <code>bool characteristic_id_list1_null = 1001;</code>
     */
    public function setCharacteristicIdList1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list1_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue value_list1 = 2;</code>
     */
    public function getValueList1()
    {
        return $this->value_list1;
    }

    /**
     * <code>.dstore.values.StringValue value_list1 = 2;</code>
     */
    public function setValueList1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value_list1 = $var;
    }

    /**
     * <code>bool value_list1_null = 1002;</code>
     */
    public function getValueList1Null()
    {
        return $this->value_list1_null;
    }

    /**
     * <code>bool value_list1_null = 1002;</code>
     */
    public function setValueList1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->value_list1_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list2 = 3;</code>
     */
    public function getCharacteristicIdList2()
    {
        return $this->characteristic_id_list2;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list2 = 3;</code>
     */
    public function setCharacteristicIdList2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->characteristic_id_list2 = $var;
    }

    /**
     * <code>bool characteristic_id_list2_null = 1003;</code>
     */
    public function getCharacteristicIdList2Null()
    {
        return $this->characteristic_id_list2_null;
    }

    /**
     * <code>bool characteristic_id_list2_null = 1003;</code>
     */
    public function setCharacteristicIdList2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list2_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue value_list2 = 4;</code>
     */
    public function getValueList2()
    {
        return $this->value_list2;
    }

    /**
     * <code>.dstore.values.StringValue value_list2 = 4;</code>
     */
    public function setValueList2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value_list2 = $var;
    }

    /**
     * <code>bool value_list2_null = 1004;</code>
     */
    public function getValueList2Null()
    {
        return $this->value_list2_null;
    }

    /**
     * <code>bool value_list2_null = 1004;</code>
     */
    public function setValueList2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->value_list2_null = $var;
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
     * <code>.dstore.values.IntegerValue person_id = 6;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 6;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <code>bool person_id_null = 1006;</code>
     */
    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    /**
     * <code>bool person_id_null = 1006;</code>
     */
    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue error_id_list = 7;</code>
     */
    public function getErrorIdList()
    {
        return $this->error_id_list;
    }

    /**
     * <code>.dstore.values.StringValue error_id_list = 7;</code>
     */
    public function setErrorIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->error_id_list = $var;
    }

    /**
     * <code>bool error_id_list_null = 1007;</code>
     */
    public function getErrorIdListNull()
    {
        return $this->error_id_list_null;
    }

    /**
     * <code>bool error_id_list_null = 1007;</code>
     */
    public function setErrorIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->error_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue result_in_error_id_list = 8;</code>
     */
    public function getResultInErrorIdList()
    {
        return $this->result_in_error_id_list;
    }

    /**
     * <code>.dstore.values.BooleanValue result_in_error_id_list = 8;</code>
     */
    public function setResultInErrorIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->result_in_error_id_list = $var;
    }

    /**
     * <code>bool result_in_error_id_list_null = 1008;</code>
     */
    public function getResultInErrorIdListNull()
    {
        return $this->result_in_error_id_list_null;
    }

    /**
     * <code>bool result_in_error_id_list_null = 1008;</code>
     */
    public function setResultInErrorIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->result_in_error_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue value_ids_for_predefined_characs = 9;</code>
     */
    public function getValueIdsForPredefinedCharacs()
    {
        return $this->value_ids_for_predefined_characs;
    }

    /**
     * <code>.dstore.values.BooleanValue value_ids_for_predefined_characs = 9;</code>
     */
    public function setValueIdsForPredefinedCharacs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->value_ids_for_predefined_characs = $var;
    }

    /**
     * <code>bool value_ids_for_predefined_characs_null = 1009;</code>
     */
    public function getValueIdsForPredefinedCharacsNull()
    {
        return $this->value_ids_for_predefined_characs_null;
    }

    /**
     * <code>bool value_ids_for_predefined_characs_null = 1009;</code>
     */
    public function setValueIdsForPredefinedCharacsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_ids_for_predefined_characs_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue cancel_on_error = 10;</code>
     */
    public function getCancelOnError()
    {
        return $this->cancel_on_error;
    }

    /**
     * <code>.dstore.values.BooleanValue cancel_on_error = 10;</code>
     */
    public function setCancelOnError(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->cancel_on_error = $var;
    }

    /**
     * <code>bool cancel_on_error_null = 1010;</code>
     */
    public function getCancelOnErrorNull()
    {
        return $this->cancel_on_error_null;
    }

    /**
     * <code>bool cancel_on_error_null = 1010;</code>
     */
    public function setCancelOnErrorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->cancel_on_error_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_lists = 11;</code>
     */
    public function getSeparatorInLists()
    {
        return $this->separator_in_lists;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_lists = 11;</code>
     */
    public function setSeparatorInLists(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator_in_lists = $var;
    }

    /**
     * <code>bool separator_in_lists_null = 1011;</code>
     */
    public function getSeparatorInListsNull()
    {
        return $this->separator_in_lists_null;
    }

    /**
     * <code>bool separator_in_lists_null = 1011;</code>
     */
    public function setSeparatorInListsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_lists_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 12;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 12;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1012;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1012;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue country = 13;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <code>.dstore.values.StringValue country = 13;</code>
     */
    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->country = $var;
    }

    /**
     * <code>bool country_null = 1013;</code>
     */
    public function getCountryNull()
    {
        return $this->country_null;
    }

    /**
     * <code>bool country_null = 1013;</code>
     */
    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

}
