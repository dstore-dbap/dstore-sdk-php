<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ChangeOrderState_Pu.proto

namespace Dstore\Engine\Om_ChangeOrderState_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ChangeOrderState_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue result = 1;</code>
     */
    private $result = null;
    /**
     * <code>bool result_null = 1001;</code>
     */
    private $result_null = false;
    /**
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    private $person_identification_values = null;
    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    private $person_identification_values_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 3;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1003;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 4;</code>
     */
    private $case_sensitive = null;
    /**
     * <code>bool case_sensitive_null = 1004;</code>
     */
    private $case_sensitive_null = false;
    /**
     * <code>.dstore.values.StringValue order_content_ids = 5;</code>
     */
    private $order_content_ids = null;
    /**
     * <code>bool order_content_ids_null = 1005;</code>
     */
    private $order_content_ids_null = false;
    /**
     * <code>.dstore.values.BooleanValue is_order_id = 6;</code>
     */
    private $is_order_id = null;
    /**
     * <code>bool is_order_id_null = 1006;</code>
     */
    private $is_order_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue order_state_id = 7;</code>
     */
    private $order_state_id = null;
    /**
     * <code>bool order_state_id_null = 1007;</code>
     */
    private $order_state_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue select_denied_orders = 8;</code>
     */
    private $select_denied_orders = null;
    /**
     * <code>bool select_denied_orders_null = 1008;</code>
     */
    private $select_denied_orders_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmChangeOrderStatePu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.dstore.values.IntegerValue result = 1;</code>
     */
    public function setResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->result = $var;
    }

    /**
     * <code>bool result_null = 1001;</code>
     */
    public function getResultNull()
    {
        return $this->result_null;
    }

    /**
     * <code>bool result_null = 1001;</code>
     */
    public function setResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->result_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->person_identification_values = $var;
    }

    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 3;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 3;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1003;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1003;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 4;</code>
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 4;</code>
     */
    public function setCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->case_sensitive = $var;
    }

    /**
     * <code>bool case_sensitive_null = 1004;</code>
     */
    public function getCaseSensitiveNull()
    {
        return $this->case_sensitive_null;
    }

    /**
     * <code>bool case_sensitive_null = 1004;</code>
     */
    public function setCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue order_content_ids = 5;</code>
     */
    public function getOrderContentIds()
    {
        return $this->order_content_ids;
    }

    /**
     * <code>.dstore.values.StringValue order_content_ids = 5;</code>
     */
    public function setOrderContentIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->order_content_ids = $var;
    }

    /**
     * <code>bool order_content_ids_null = 1005;</code>
     */
    public function getOrderContentIdsNull()
    {
        return $this->order_content_ids_null;
    }

    /**
     * <code>bool order_content_ids_null = 1005;</code>
     */
    public function setOrderContentIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_content_ids_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue is_order_id = 6;</code>
     */
    public function getIsOrderId()
    {
        return $this->is_order_id;
    }

    /**
     * <code>.dstore.values.BooleanValue is_order_id = 6;</code>
     */
    public function setIsOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->is_order_id = $var;
    }

    /**
     * <code>bool is_order_id_null = 1006;</code>
     */
    public function getIsOrderIdNull()
    {
        return $this->is_order_id_null;
    }

    /**
     * <code>bool is_order_id_null = 1006;</code>
     */
    public function setIsOrderIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_order_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue order_state_id = 7;</code>
     */
    public function getOrderStateId()
    {
        return $this->order_state_id;
    }

    /**
     * <code>.dstore.values.IntegerValue order_state_id = 7;</code>
     */
    public function setOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_state_id = $var;
    }

    /**
     * <code>bool order_state_id_null = 1007;</code>
     */
    public function getOrderStateIdNull()
    {
        return $this->order_state_id_null;
    }

    /**
     * <code>bool order_state_id_null = 1007;</code>
     */
    public function setOrderStateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_state_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue select_denied_orders = 8;</code>
     */
    public function getSelectDeniedOrders()
    {
        return $this->select_denied_orders;
    }

    /**
     * <code>.dstore.values.BooleanValue select_denied_orders = 8;</code>
     */
    public function setSelectDeniedOrders(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->select_denied_orders = $var;
    }

    /**
     * <code>bool select_denied_orders_null = 1008;</code>
     */
    public function getSelectDeniedOrdersNull()
    {
        return $this->select_denied_orders_null;
    }

    /**
     * <code>bool select_denied_orders_null = 1008;</code>
     */
    public function setSelectDeniedOrdersNull($var)
    {
        GPBUtil::checkBool($var);
        $this->select_denied_orders_null = $var;
    }

}

