<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyApplicationParts_Ad.proto

namespace Dstore\Engine\Mi_ModifyApplicationParts_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_ModifyApplicationParts_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue application_part_id = 1;</code>
     */
    private $application_part_id = null;
    /**
     * <code>bool application_part_id_null = 1001;</code>
     */
    private $application_part_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue application_id = 2;</code>
     */
    private $application_id = null;
    /**
     * <code>bool application_id_null = 1002;</code>
     */
    private $application_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue user_id = 3;</code>
     */
    private $user_id = null;
    /**
     * <code>bool user_id_null = 1003;</code>
     */
    private $user_id_null = false;
    /**
     * <code>.dstore.values.StringValue application_part = 4;</code>
     */
    private $application_part = null;
    /**
     * <code>bool application_part_null = 1004;</code>
     */
    private $application_part_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete = 5;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1005;</code>
     */
    private $delete_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiModifyApplicationPartsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue application_part_id = 1;</code>
     */
    public function getApplicationPartId()
    {
        return $this->application_part_id;
    }

    /**
     * <code>.dstore.values.IntegerValue application_part_id = 1;</code>
     */
    public function setApplicationPartId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->application_part_id = $var;
    }

    /**
     * <code>bool application_part_id_null = 1001;</code>
     */
    public function getApplicationPartIdNull()
    {
        return $this->application_part_id_null;
    }

    /**
     * <code>bool application_part_id_null = 1001;</code>
     */
    public function setApplicationPartIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->application_part_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue application_id = 2;</code>
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * <code>.dstore.values.IntegerValue application_id = 2;</code>
     */
    public function setApplicationId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->application_id = $var;
    }

    /**
     * <code>bool application_id_null = 1002;</code>
     */
    public function getApplicationIdNull()
    {
        return $this->application_id_null;
    }

    /**
     * <code>bool application_id_null = 1002;</code>
     */
    public function setApplicationIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->application_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue user_id = 3;</code>
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * <code>.dstore.values.IntegerValue user_id = 3;</code>
     */
    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_id = $var;
    }

    /**
     * <code>bool user_id_null = 1003;</code>
     */
    public function getUserIdNull()
    {
        return $this->user_id_null;
    }

    /**
     * <code>bool user_id_null = 1003;</code>
     */
    public function setUserIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue application_part = 4;</code>
     */
    public function getApplicationPart()
    {
        return $this->application_part;
    }

    /**
     * <code>.dstore.values.StringValue application_part = 4;</code>
     */
    public function setApplicationPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->application_part = $var;
    }

    /**
     * <code>bool application_part_null = 1004;</code>
     */
    public function getApplicationPartNull()
    {
        return $this->application_part_null;
    }

    /**
     * <code>bool application_part_null = 1004;</code>
     */
    public function setApplicationPartNull($var)
    {
        GPBUtil::checkBool($var);
        $this->application_part_null = $var;
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

}
