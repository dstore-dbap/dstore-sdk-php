<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyNodeCharacSettings_Ad.proto

namespace Dstore\Engine\Im_ModifyNodeCharacSettings_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_ModifyNodeCharacSettings_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 1;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <code>bool node_characteristic_id_null = 1001;</code>
     */
    private $node_characteristic_id_null = false;
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

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImModifyNodeCharacSettingsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 1;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 1;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <code>bool node_characteristic_id_null = 1001;</code>
     */
    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    /**
     * <code>bool node_characteristic_id_null = 1001;</code>
     */
    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
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

}
