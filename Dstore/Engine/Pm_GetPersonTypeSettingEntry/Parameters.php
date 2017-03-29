<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonTypeSettingEntry.proto

namespace Dstore\Engine\Pm_GetPersonTypeSettingEntry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonTypeSettingEntry.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue key_variable = 2;</code>
     */
    private $key_variable = null;
    /**
     * <code>bool key_variable_null = 1002;</code>
     */
    private $key_variable_null = false;
    /**
     * <code>.dstore.values.StringValue value = 3;</code>
     */
    private $value = null;
    /**
     * <code>bool value_null = 1003;</code>
     */
    private $value_null = false;
    /**
     * <code>.dstore.values.BooleanValue select_result = 4;</code>
     */
    private $select_result = null;
    /**
     * <code>bool select_result_null = 1004;</code>
     */
    private $select_result_null = false;
    /**
     * <code>.dstore.values.BooleanValue print_error_msg_if_entry_is_missing = 5;</code>
     */
    private $print_error_msg_if_entry_is_missing = null;
    /**
     * <code>bool print_error_msg_if_entry_is_missing_null = 1005;</code>
     */
    private $print_error_msg_if_entry_is_missing_null = false;
    /**
     * <code>.dstore.values.BooleanValue try_global_setting_for_missing_key = 6;</code>
     */
    private $try_global_setting_for_missing_key = null;
    /**
     * <code>bool try_global_setting_for_missing_key_null = 1006;</code>
     */
    private $try_global_setting_for_missing_key_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonTypeSettingEntry::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue key_variable = 2;</code>
     */
    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    /**
     * <code>.dstore.values.StringValue key_variable = 2;</code>
     */
    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->key_variable = $var;
    }

    /**
     * <code>bool key_variable_null = 1002;</code>
     */
    public function getKeyVariableNull()
    {
        return $this->key_variable_null;
    }

    /**
     * <code>bool key_variable_null = 1002;</code>
     */
    public function setKeyVariableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->key_variable_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue value = 3;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>.dstore.values.StringValue value = 3;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <code>bool value_null = 1003;</code>
     */
    public function getValueNull()
    {
        return $this->value_null;
    }

    /**
     * <code>bool value_null = 1003;</code>
     */
    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue select_result = 4;</code>
     */
    public function getSelectResult()
    {
        return $this->select_result;
    }

    /**
     * <code>.dstore.values.BooleanValue select_result = 4;</code>
     */
    public function setSelectResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->select_result = $var;
    }

    /**
     * <code>bool select_result_null = 1004;</code>
     */
    public function getSelectResultNull()
    {
        return $this->select_result_null;
    }

    /**
     * <code>bool select_result_null = 1004;</code>
     */
    public function setSelectResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->select_result_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue print_error_msg_if_entry_is_missing = 5;</code>
     */
    public function getPrintErrorMsgIfEntryIsMissing()
    {
        return $this->print_error_msg_if_entry_is_missing;
    }

    /**
     * <code>.dstore.values.BooleanValue print_error_msg_if_entry_is_missing = 5;</code>
     */
    public function setPrintErrorMsgIfEntryIsMissing(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->print_error_msg_if_entry_is_missing = $var;
    }

    /**
     * <code>bool print_error_msg_if_entry_is_missing_null = 1005;</code>
     */
    public function getPrintErrorMsgIfEntryIsMissingNull()
    {
        return $this->print_error_msg_if_entry_is_missing_null;
    }

    /**
     * <code>bool print_error_msg_if_entry_is_missing_null = 1005;</code>
     */
    public function setPrintErrorMsgIfEntryIsMissingNull($var)
    {
        GPBUtil::checkBool($var);
        $this->print_error_msg_if_entry_is_missing_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue try_global_setting_for_missing_key = 6;</code>
     */
    public function getTryGlobalSettingForMissingKey()
    {
        return $this->try_global_setting_for_missing_key;
    }

    /**
     * <code>.dstore.values.BooleanValue try_global_setting_for_missing_key = 6;</code>
     */
    public function setTryGlobalSettingForMissingKey(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->try_global_setting_for_missing_key = $var;
    }

    /**
     * <code>bool try_global_setting_for_missing_key_null = 1006;</code>
     */
    public function getTryGlobalSettingForMissingKeyNull()
    {
        return $this->try_global_setting_for_missing_key_null;
    }

    /**
     * <code>bool try_global_setting_for_missing_key_null = 1006;</code>
     */
    public function setTryGlobalSettingForMissingKeyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->try_global_setting_for_missing_key_null = $var;
    }

}

