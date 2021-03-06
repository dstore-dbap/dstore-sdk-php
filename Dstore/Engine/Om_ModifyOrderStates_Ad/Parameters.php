<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyOrderStates_Ad.proto

namespace Dstore\Engine\Om_ModifyOrderStates_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyOrderStates_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue order_state_id = 1;</code>
     */
    private $order_state_id = null;
    /**
     * <code>bool order_state_id_null = 1001;</code>
     */
    private $order_state_id_null = false;
    /**
     * <code>.dstore.values.StringValue order_state = 2;</code>
     */
    private $order_state = null;
    /**
     * <code>bool order_state_null = 1002;</code>
     */
    private $order_state_null = false;
    /**
     * <code>.dstore.values.StringValue public_description = 3;</code>
     */
    private $public_description = null;
    /**
     * <code>bool public_description_null = 1003;</code>
     */
    private $public_description_null = false;
    /**
     * <code>.dstore.values.IntegerValue insert_update_or_delete = 4;</code>
     */
    private $insert_update_or_delete = null;
    /**
     * <code>bool insert_update_or_delete_null = 1004;</code>
     */
    private $insert_update_or_delete_null = false;
    /**
     * <code>.dstore.values.BooleanValue active = 5;</code>
     */
    private $active = null;
    /**
     * <code>bool active_null = 1005;</code>
     */
    private $active_null = false;
    /**
     * <code>.dstore.values.IntegerValue change_order_state_trigger_id = 6;</code>
     */
    private $change_order_state_trigger_id = null;
    /**
     * <code>bool change_order_state_trigger_id_null = 1006;</code>
     */
    private $change_order_state_trigger_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyOrderStatesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue order_state_id = 1;</code>
     */
    public function getOrderStateId()
    {
        return $this->order_state_id;
    }

    /**
     * <code>.dstore.values.IntegerValue order_state_id = 1;</code>
     */
    public function setOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_state_id = $var;
    }

    /**
     * <code>bool order_state_id_null = 1001;</code>
     */
    public function getOrderStateIdNull()
    {
        return $this->order_state_id_null;
    }

    /**
     * <code>bool order_state_id_null = 1001;</code>
     */
    public function setOrderStateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_state_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue order_state = 2;</code>
     */
    public function getOrderState()
    {
        return $this->order_state;
    }

    /**
     * <code>.dstore.values.StringValue order_state = 2;</code>
     */
    public function setOrderState(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->order_state = $var;
    }

    /**
     * <code>bool order_state_null = 1002;</code>
     */
    public function getOrderStateNull()
    {
        return $this->order_state_null;
    }

    /**
     * <code>bool order_state_null = 1002;</code>
     */
    public function setOrderStateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_state_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue public_description = 3;</code>
     */
    public function getPublicDescription()
    {
        return $this->public_description;
    }

    /**
     * <code>.dstore.values.StringValue public_description = 3;</code>
     */
    public function setPublicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->public_description = $var;
    }

    /**
     * <code>bool public_description_null = 1003;</code>
     */
    public function getPublicDescriptionNull()
    {
        return $this->public_description_null;
    }

    /**
     * <code>bool public_description_null = 1003;</code>
     */
    public function setPublicDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->public_description_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue insert_update_or_delete = 4;</code>
     */
    public function getInsertUpdateOrDelete()
    {
        return $this->insert_update_or_delete;
    }

    /**
     * <code>.dstore.values.IntegerValue insert_update_or_delete = 4;</code>
     */
    public function setInsertUpdateOrDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->insert_update_or_delete = $var;
    }

    /**
     * <code>bool insert_update_or_delete_null = 1004;</code>
     */
    public function getInsertUpdateOrDeleteNull()
    {
        return $this->insert_update_or_delete_null;
    }

    /**
     * <code>bool insert_update_or_delete_null = 1004;</code>
     */
    public function setInsertUpdateOrDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->insert_update_or_delete_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue active = 5;</code>
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * <code>.dstore.values.BooleanValue active = 5;</code>
     */
    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->active = $var;
    }

    /**
     * <code>bool active_null = 1005;</code>
     */
    public function getActiveNull()
    {
        return $this->active_null;
    }

    /**
     * <code>bool active_null = 1005;</code>
     */
    public function setActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->active_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue change_order_state_trigger_id = 6;</code>
     */
    public function getChangeOrderStateTriggerId()
    {
        return $this->change_order_state_trigger_id;
    }

    /**
     * <code>.dstore.values.IntegerValue change_order_state_trigger_id = 6;</code>
     */
    public function setChangeOrderStateTriggerId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->change_order_state_trigger_id = $var;
    }

    /**
     * <code>bool change_order_state_trigger_id_null = 1006;</code>
     */
    public function getChangeOrderStateTriggerIdNull()
    {
        return $this->change_order_state_trigger_id_null;
    }

    /**
     * <code>bool change_order_state_trigger_id_null = 1006;</code>
     */
    public function setChangeOrderStateTriggerIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->change_order_state_trigger_id_null = $var;
    }

}

