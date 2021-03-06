<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPeriodsForPredVals_Ad.proto

namespace Dstore\Engine\Pm_ModifyPeriodsForPredVals_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_ModifyPeriodsForPredVals_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue value_id = 1;</code>
     */
    private $value_id = null;
    /**
     * <code>bool value_id_null = 1001;</code>
     */
    private $value_id_null = false;
    /**
     * <code>.dstore.values.TimestampValue valid_from = 2;</code>
     */
    private $valid_from = null;
    /**
     * <code>bool valid_from_null = 1002;</code>
     */
    private $valid_from_null = false;
    /**
     * <code>.dstore.values.TimestampValue valid_to = 3;</code>
     */
    private $valid_to = null;
    /**
     * <code>bool valid_to_null = 1003;</code>
     */
    private $valid_to_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete = 4;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1004;</code>
     */
    private $delete_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmModifyPeriodsForPredValsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue value_id = 1;</code>
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * <code>.dstore.values.IntegerValue value_id = 1;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

    /**
     * <code>bool value_id_null = 1001;</code>
     */
    public function getValueIdNull()
    {
        return $this->value_id_null;
    }

    /**
     * <code>bool value_id_null = 1001;</code>
     */
    public function setValueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_id_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_from = 2;</code>
     */
    public function getValidFrom()
    {
        return $this->valid_from;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_from = 2;</code>
     */
    public function setValidFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_from = $var;
    }

    /**
     * <code>bool valid_from_null = 1002;</code>
     */
    public function getValidFromNull()
    {
        return $this->valid_from_null;
    }

    /**
     * <code>bool valid_from_null = 1002;</code>
     */
    public function setValidFromNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_from_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_to = 3;</code>
     */
    public function getValidTo()
    {
        return $this->valid_to;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_to = 3;</code>
     */
    public function setValidTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_to = $var;
    }

    /**
     * <code>bool valid_to_null = 1003;</code>
     */
    public function getValidToNull()
    {
        return $this->valid_to_null;
    }

    /**
     * <code>bool valid_to_null = 1003;</code>
     */
    public function setValidToNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_to_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 4;</code>
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 4;</code>
     */
    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete = $var;
    }

    /**
     * <code>bool delete_null = 1004;</code>
     */
    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    /**
     * <code>bool delete_null = 1004;</code>
     */
    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

}

