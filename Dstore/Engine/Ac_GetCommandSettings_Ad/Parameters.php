<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/ac_GetCommandSettings_Ad.proto

namespace Dstore\Engine\Ac_GetCommandSettings_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.ac_GetCommandSettings_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue command_id = 1;</code>
     */
    private $command_id = null;
    /**
     * <code>bool command_id_null = 1001;</code>
     */
    private $command_id_null = false;
    /**
     * <code>.dstore.values.StringValue key_variable = 2;</code>
     */
    private $key_variable = null;
    /**
     * <code>bool key_variable_null = 1002;</code>
     */
    private $key_variable_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\AcGetCommandSettingsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue command_id = 1;</code>
     */
    public function getCommandId()
    {
        return $this->command_id;
    }

    /**
     * <code>.dstore.values.IntegerValue command_id = 1;</code>
     */
    public function setCommandId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->command_id = $var;
    }

    /**
     * <code>bool command_id_null = 1001;</code>
     */
    public function getCommandIdNull()
    {
        return $this->command_id_null;
    }

    /**
     * <code>bool command_id_null = 1001;</code>
     */
    public function setCommandIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->command_id_null = $var;
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

}

