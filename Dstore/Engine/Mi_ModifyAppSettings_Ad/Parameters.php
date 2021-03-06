<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyAppSettings_Ad.proto

namespace Dstore\Engine\Mi_ModifyAppSettings_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_ModifyAppSettings_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue application_id = 1;</code>
     */
    private $application_id = null;
    /**
     * <code>bool application_id_null = 1001;</code>
     */
    private $application_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue user_id = 2;</code>
     */
    private $user_id = null;
    /**
     * <code>bool user_id_null = 1002;</code>
     */
    private $user_id_null = false;
    /**
     * <code>.dstore.values.StringValue key_variable = 3;</code>
     */
    private $key_variable = null;
    /**
     * <code>bool key_variable_null = 1003;</code>
     */
    private $key_variable_null = false;
    /**
     * <code>.dstore.values.StringValue value = 4;</code>
     */
    private $value = null;
    /**
     * <code>bool value_null = 1004;</code>
     */
    private $value_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete = 5;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1005;</code>
     */
    private $delete_null = false;
    /**
     * <code>.dstore.values.BooleanValue key_value_pairs_in_tempdb = 6;</code>
     */
    private $key_value_pairs_in_tempdb = null;
    /**
     * <code>bool key_value_pairs_in_tempdb_null = 1006;</code>
     */
    private $key_value_pairs_in_tempdb_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiModifyAppSettingsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue application_id = 1;</code>
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * <code>.dstore.values.IntegerValue application_id = 1;</code>
     */
    public function setApplicationId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->application_id = $var;
    }

    /**
     * <code>bool application_id_null = 1001;</code>
     */
    public function getApplicationIdNull()
    {
        return $this->application_id_null;
    }

    /**
     * <code>bool application_id_null = 1001;</code>
     */
    public function setApplicationIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->application_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue user_id = 2;</code>
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * <code>.dstore.values.IntegerValue user_id = 2;</code>
     */
    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_id = $var;
    }

    /**
     * <code>bool user_id_null = 1002;</code>
     */
    public function getUserIdNull()
    {
        return $this->user_id_null;
    }

    /**
     * <code>bool user_id_null = 1002;</code>
     */
    public function setUserIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue key_variable = 3;</code>
     */
    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    /**
     * <code>.dstore.values.StringValue key_variable = 3;</code>
     */
    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->key_variable = $var;
    }

    /**
     * <code>bool key_variable_null = 1003;</code>
     */
    public function getKeyVariableNull()
    {
        return $this->key_variable_null;
    }

    /**
     * <code>bool key_variable_null = 1003;</code>
     */
    public function setKeyVariableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->key_variable_null = $var;
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

    /**
     * <code>.dstore.values.BooleanValue delete = 5;</code>
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 5;</code>
     */
    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete = $var;
    }

    /**
     * <code>bool delete_null = 1005;</code>
     */
    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    /**
     * <code>bool delete_null = 1005;</code>
     */
    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue key_value_pairs_in_tempdb = 6;</code>
     */
    public function getKeyValuePairsInTempdb()
    {
        return $this->key_value_pairs_in_tempdb;
    }

    /**
     * <code>.dstore.values.BooleanValue key_value_pairs_in_tempdb = 6;</code>
     */
    public function setKeyValuePairsInTempdb(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->key_value_pairs_in_tempdb = $var;
    }

    /**
     * <code>bool key_value_pairs_in_tempdb_null = 1006;</code>
     */
    public function getKeyValuePairsInTempdbNull()
    {
        return $this->key_value_pairs_in_tempdb_null;
    }

    /**
     * <code>bool key_value_pairs_in_tempdb_null = 1006;</code>
     */
    public function setKeyValuePairsInTempdbNull($var)
    {
        GPBUtil::checkBool($var);
        $this->key_value_pairs_in_tempdb_null = $var;
    }

}

