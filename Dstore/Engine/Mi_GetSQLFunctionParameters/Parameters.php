<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetSQLFunctionParameters.proto

namespace Dstore\Engine\Mi_GetSQLFunctionParameters;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetSQLFunctionParameters.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue s_q_l_function_name = 1;</code>
     */
    private $s_q_l_function_name = null;
    /**
     * <code>bool s_q_l_function_name_null = 1001;</code>
     */
    private $s_q_l_function_name_null = false;
    /**
     * <code>.dstore.values.StringValue parameter_name = 2;</code>
     */
    private $parameter_name = null;
    /**
     * <code>bool parameter_name_null = 1002;</code>
     */
    private $parameter_name_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetSQLFunctionParameters::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue s_q_l_function_name = 1;</code>
     */
    public function getSQLFunctionName()
    {
        return $this->s_q_l_function_name;
    }

    /**
     * <code>.dstore.values.StringValue s_q_l_function_name = 1;</code>
     */
    public function setSQLFunctionName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->s_q_l_function_name = $var;
    }

    /**
     * <code>bool s_q_l_function_name_null = 1001;</code>
     */
    public function getSQLFunctionNameNull()
    {
        return $this->s_q_l_function_name_null;
    }

    /**
     * <code>bool s_q_l_function_name_null = 1001;</code>
     */
    public function setSQLFunctionNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->s_q_l_function_name_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue parameter_name = 2;</code>
     */
    public function getParameterName()
    {
        return $this->parameter_name;
    }

    /**
     * <code>.dstore.values.StringValue parameter_name = 2;</code>
     */
    public function setParameterName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->parameter_name = $var;
    }

    /**
     * <code>bool parameter_name_null = 1002;</code>
     */
    public function getParameterNameNull()
    {
        return $this->parameter_name_null;
    }

    /**
     * <code>bool parameter_name_null = 1002;</code>
     */
    public function setParameterNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->parameter_name_null = $var;
    }

}

