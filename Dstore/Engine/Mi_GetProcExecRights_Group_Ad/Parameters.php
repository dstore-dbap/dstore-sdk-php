<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetProcExecRights_Group_Ad.proto

namespace Dstore\Engine\Mi_GetProcExecRights_Group_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetProcExecRights_Group_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue user_group_id = 1;</code>
     */
    private $user_group_id = null;
    /**
     * <code>bool user_group_id_null = 1001;</code>
     */
    private $user_group_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue procedure_id = 2;</code>
     */
    private $procedure_id = null;
    /**
     * <code>bool procedure_id_null = 1002;</code>
     */
    private $procedure_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue procedure_category_id = 3;</code>
     */
    private $procedure_category_id = null;
    /**
     * <code>bool procedure_category_id_null = 1003;</code>
     */
    private $procedure_category_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetProcExecRightsGroupAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue user_group_id = 1;</code>
     */
    public function getUserGroupId()
    {
        return $this->user_group_id;
    }

    /**
     * <code>.dstore.values.IntegerValue user_group_id = 1;</code>
     */
    public function setUserGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_group_id = $var;
    }

    /**
     * <code>bool user_group_id_null = 1001;</code>
     */
    public function getUserGroupIdNull()
    {
        return $this->user_group_id_null;
    }

    /**
     * <code>bool user_group_id_null = 1001;</code>
     */
    public function setUserGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_group_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_id = 2;</code>
     */
    public function getProcedureId()
    {
        return $this->procedure_id;
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_id = 2;</code>
     */
    public function setProcedureId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->procedure_id = $var;
    }

    /**
     * <code>bool procedure_id_null = 1002;</code>
     */
    public function getProcedureIdNull()
    {
        return $this->procedure_id_null;
    }

    /**
     * <code>bool procedure_id_null = 1002;</code>
     */
    public function setProcedureIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_category_id = 3;</code>
     */
    public function getProcedureCategoryId()
    {
        return $this->procedure_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_category_id = 3;</code>
     */
    public function setProcedureCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->procedure_category_id = $var;
    }

    /**
     * <code>bool procedure_category_id_null = 1003;</code>
     */
    public function getProcedureCategoryIdNull()
    {
        return $this->procedure_category_id_null;
    }

    /**
     * <code>bool procedure_category_id_null = 1003;</code>
     */
    public function setProcedureCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_category_id_null = $var;
    }

}

