<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetProcMetaProperties_Ad.proto

namespace Dstore\Engine\Mi_GetProcMetaProperties_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetProcMetaProperties_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue procedure_name = 1;</code>
     */
    private $procedure_name = null;
    /**
     * <code>bool procedure_name_null = 1001;</code>
     */
    private $procedure_name_null = false;
    /**
     * <code>.dstore.values.StringValue meta_info_type = 2;</code>
     */
    private $meta_info_type = null;
    /**
     * <code>bool meta_info_type_null = 1002;</code>
     */
    private $meta_info_type_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetProcMetaPropertiesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue procedure_name = 1;</code>
     */
    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    /**
     * <code>.dstore.values.StringValue procedure_name = 1;</code>
     */
    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->procedure_name = $var;
    }

    /**
     * <code>bool procedure_name_null = 1001;</code>
     */
    public function getProcedureNameNull()
    {
        return $this->procedure_name_null;
    }

    /**
     * <code>bool procedure_name_null = 1001;</code>
     */
    public function setProcedureNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_name_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue meta_info_type = 2;</code>
     */
    public function getMetaInfoType()
    {
        return $this->meta_info_type;
    }

    /**
     * <code>.dstore.values.StringValue meta_info_type = 2;</code>
     */
    public function setMetaInfoType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->meta_info_type = $var;
    }

    /**
     * <code>bool meta_info_type_null = 1002;</code>
     */
    public function getMetaInfoTypeNull()
    {
        return $this->meta_info_type_null;
    }

    /**
     * <code>bool meta_info_type_null = 1002;</code>
     */
    public function setMetaInfoTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->meta_info_type_null = $var;
    }

}

