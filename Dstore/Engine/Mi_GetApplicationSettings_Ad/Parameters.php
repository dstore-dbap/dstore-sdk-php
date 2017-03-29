<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetApplicationSettings_Ad.proto

namespace Dstore\Engine\Mi_GetApplicationSettings_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetApplicationSettings_Ad.Parameters</code>
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
     * <code>.dstore.values.BooleanValue search_for_key_variable_with_like = 4;</code>
     */
    private $search_for_key_variable_with_like = null;
    /**
     * <code>bool search_for_key_variable_with_like_null = 1004;</code>
     */
    private $search_for_key_variable_with_like_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_values_for_global_user = 5;</code>
     */
    private $include_values_for_global_user = null;
    /**
     * <code>bool include_values_for_global_user_null = 1005;</code>
     */
    private $include_values_for_global_user_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetApplicationSettingsAd::initOnce();
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
     * <code>.dstore.values.BooleanValue search_for_key_variable_with_like = 4;</code>
     */
    public function getSearchForKeyVariableWithLike()
    {
        return $this->search_for_key_variable_with_like;
    }

    /**
     * <code>.dstore.values.BooleanValue search_for_key_variable_with_like = 4;</code>
     */
    public function setSearchForKeyVariableWithLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->search_for_key_variable_with_like = $var;
    }

    /**
     * <code>bool search_for_key_variable_with_like_null = 1004;</code>
     */
    public function getSearchForKeyVariableWithLikeNull()
    {
        return $this->search_for_key_variable_with_like_null;
    }

    /**
     * <code>bool search_for_key_variable_with_like_null = 1004;</code>
     */
    public function setSearchForKeyVariableWithLikeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_for_key_variable_with_like_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_values_for_global_user = 5;</code>
     */
    public function getIncludeValuesForGlobalUser()
    {
        return $this->include_values_for_global_user;
    }

    /**
     * <code>.dstore.values.BooleanValue include_values_for_global_user = 5;</code>
     */
    public function setIncludeValuesForGlobalUser(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_values_for_global_user = $var;
    }

    /**
     * <code>bool include_values_for_global_user_null = 1005;</code>
     */
    public function getIncludeValuesForGlobalUserNull()
    {
        return $this->include_values_for_global_user_null;
    }

    /**
     * <code>bool include_values_for_global_user_null = 1005;</code>
     */
    public function setIncludeValuesForGlobalUserNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_values_for_global_user_null = $var;
    }

}

