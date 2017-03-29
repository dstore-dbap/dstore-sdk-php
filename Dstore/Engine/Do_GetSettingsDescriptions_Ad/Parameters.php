<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetSettingsDescriptions_Ad.proto

namespace Dstore\Engine\Do_GetSettingsDescriptions_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.do_GetSettingsDescriptions_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue settings_table = 1;</code>
     */
    private $settings_table = null;
    /**
     * <code>bool settings_table_null = 1001;</code>
     */
    private $settings_table_null = false;
    /**
     * <code>.dstore.values.StringValue key_variable = 2;</code>
     */
    private $key_variable = null;
    /**
     * <code>bool key_variable_null = 1002;</code>
     */
    private $key_variable_null = false;
    /**
     * <code>.dstore.values.IntegerValue settings_entry_category_id = 3;</code>
     */
    private $settings_entry_category_id = null;
    /**
     * <code>bool settings_entry_category_id_null = 1003;</code>
     */
    private $settings_entry_category_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\DoGetSettingsDescriptionsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue settings_table = 1;</code>
     */
    public function getSettingsTable()
    {
        return $this->settings_table;
    }

    /**
     * <code>.dstore.values.StringValue settings_table = 1;</code>
     */
    public function setSettingsTable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->settings_table = $var;
    }

    /**
     * <code>bool settings_table_null = 1001;</code>
     */
    public function getSettingsTableNull()
    {
        return $this->settings_table_null;
    }

    /**
     * <code>bool settings_table_null = 1001;</code>
     */
    public function setSettingsTableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->settings_table_null = $var;
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
     * <code>.dstore.values.IntegerValue settings_entry_category_id = 3;</code>
     */
    public function getSettingsEntryCategoryId()
    {
        return $this->settings_entry_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue settings_entry_category_id = 3;</code>
     */
    public function setSettingsEntryCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->settings_entry_category_id = $var;
    }

    /**
     * <code>bool settings_entry_category_id_null = 1003;</code>
     */
    public function getSettingsEntryCategoryIdNull()
    {
        return $this->settings_entry_category_id_null;
    }

    /**
     * <code>bool settings_entry_category_id_null = 1003;</code>
     */
    public function setSettingsEntryCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->settings_entry_category_id_null = $var;
    }

}
