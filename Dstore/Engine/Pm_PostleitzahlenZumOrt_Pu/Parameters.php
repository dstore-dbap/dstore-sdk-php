<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_PostleitzahlenZumOrt_Pu.proto

namespace Dstore\Engine\Pm_PostleitzahlenZumOrt_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_PostleitzahlenZumOrt_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue ort = 1;</code>
     */
    private $ort = null;
    /**
     * <code>bool ort_null = 1001;</code>
     */
    private $ort_null = false;
    /**
     * <code>.dstore.values.StringValue p_l_z = 2;</code>
     */
    private $p_l_z = null;
    /**
     * <code>bool p_l_z_null = 1002;</code>
     */
    private $p_l_z_null = false;
    /**
     * <code>.dstore.values.BooleanValue return_result = 3;</code>
     */
    private $return_result = null;
    /**
     * <code>bool return_result_null = 1003;</code>
     */
    private $return_result_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmPostleitzahlenZumOrtPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue ort = 1;</code>
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * <code>.dstore.values.StringValue ort = 1;</code>
     */
    public function setOrt(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->ort = $var;
    }

    /**
     * <code>bool ort_null = 1001;</code>
     */
    public function getOrtNull()
    {
        return $this->ort_null;
    }

    /**
     * <code>bool ort_null = 1001;</code>
     */
    public function setOrtNull($var)
    {
        GPBUtil::checkBool($var);
        $this->ort_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue p_l_z = 2;</code>
     */
    public function getPLZ()
    {
        return $this->p_l_z;
    }

    /**
     * <code>.dstore.values.StringValue p_l_z = 2;</code>
     */
    public function setPLZ(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->p_l_z = $var;
    }

    /**
     * <code>bool p_l_z_null = 1002;</code>
     */
    public function getPLZNull()
    {
        return $this->p_l_z_null;
    }

    /**
     * <code>bool p_l_z_null = 1002;</code>
     */
    public function setPLZNull($var)
    {
        GPBUtil::checkBool($var);
        $this->p_l_z_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue return_result = 3;</code>
     */
    public function getReturnResult()
    {
        return $this->return_result;
    }

    /**
     * <code>.dstore.values.BooleanValue return_result = 3;</code>
     */
    public function setReturnResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->return_result = $var;
    }

    /**
     * <code>bool return_result_null = 1003;</code>
     */
    public function getReturnResultNull()
    {
        return $this->return_result_null;
    }

    /**
     * <code>bool return_result_null = 1003;</code>
     */
    public function setReturnResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->return_result_null = $var;
    }

}

