<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetBillInformationRules_Ad.proto

namespace Dstore\Engine\Om_GetBillInformationRules_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetBillInformationRules_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue user_id = 1;</code>
     */
    private $user_id = null;
    /**
     * <code>bool user_id_null = 1001;</code>
     */
    private $user_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue information_type_id = 2;</code>
     */
    private $information_type_id = null;
    /**
     * <code>bool information_type_id_null = 1002;</code>
     */
    private $information_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue bill_state_id = 3;</code>
     */
    private $bill_state_id = null;
    /**
     * <code>bool bill_state_id_null = 1003;</code>
     */
    private $bill_state_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetBillInformationRulesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue user_id = 1;</code>
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * <code>.dstore.values.IntegerValue user_id = 1;</code>
     */
    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_id = $var;
    }

    /**
     * <code>bool user_id_null = 1001;</code>
     */
    public function getUserIdNull()
    {
        return $this->user_id_null;
    }

    /**
     * <code>bool user_id_null = 1001;</code>
     */
    public function setUserIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 2;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 2;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <code>bool information_type_id_null = 1002;</code>
     */
    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    /**
     * <code>bool information_type_id_null = 1002;</code>
     */
    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue bill_state_id = 3;</code>
     */
    public function getBillStateId()
    {
        return $this->bill_state_id;
    }

    /**
     * <code>.dstore.values.IntegerValue bill_state_id = 3;</code>
     */
    public function setBillStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->bill_state_id = $var;
    }

    /**
     * <code>bool bill_state_id_null = 1003;</code>
     */
    public function getBillStateIdNull()
    {
        return $this->bill_state_id_null;
    }

    /**
     * <code>bool bill_state_id_null = 1003;</code>
     */
    public function setBillStateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->bill_state_id_null = $var;
    }

}

