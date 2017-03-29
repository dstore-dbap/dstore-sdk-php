<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyShippingTypeSurch_Ad.proto

namespace Dstore\Engine\Om_ModifyShippingTypeSurch_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyShippingTypeSurch_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 1;</code>
     */
    private $shipping_type_id = null;
    /**
     * <code>bool shipping_type_id_null = 1001;</code>
     */
    private $shipping_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue surcharge_type_id = 2;</code>
     */
    private $surcharge_type_id = null;
    /**
     * <code>bool surcharge_type_id_null = 1002;</code>
     */
    private $surcharge_type_id_null = false;
    /**
     * <code>.dstore.values.DecimalValue surcharge_value = 3;</code>
     */
    private $surcharge_value = null;
    /**
     * <code>bool surcharge_value_null = 1003;</code>
     */
    private $surcharge_value_null = false;
    /**
     * <code>.dstore.values.TimestampValue valid_from = 4;</code>
     */
    private $valid_from = null;
    /**
     * <code>bool valid_from_null = 1004;</code>
     */
    private $valid_from_null = false;
    /**
     * <code>.dstore.values.IntegerValue priority_no = 5;</code>
     */
    private $priority_no = null;
    /**
     * <code>bool priority_no_null = 1005;</code>
     */
    private $priority_no_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_configuration = 6;</code>
     */
    private $delete_configuration = null;
    /**
     * <code>bool delete_configuration_null = 1006;</code>
     */
    private $delete_configuration_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyShippingTypeSurchAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 1;</code>
     */
    public function getShippingTypeId()
    {
        return $this->shipping_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 1;</code>
     */
    public function setShippingTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->shipping_type_id = $var;
    }

    /**
     * <code>bool shipping_type_id_null = 1001;</code>
     */
    public function getShippingTypeIdNull()
    {
        return $this->shipping_type_id_null;
    }

    /**
     * <code>bool shipping_type_id_null = 1001;</code>
     */
    public function setShippingTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue surcharge_type_id = 2;</code>
     */
    public function getSurchargeTypeId()
    {
        return $this->surcharge_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue surcharge_type_id = 2;</code>
     */
    public function setSurchargeTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->surcharge_type_id = $var;
    }

    /**
     * <code>bool surcharge_type_id_null = 1002;</code>
     */
    public function getSurchargeTypeIdNull()
    {
        return $this->surcharge_type_id_null;
    }

    /**
     * <code>bool surcharge_type_id_null = 1002;</code>
     */
    public function setSurchargeTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->surcharge_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.DecimalValue surcharge_value = 3;</code>
     */
    public function getSurchargeValue()
    {
        return $this->surcharge_value;
    }

    /**
     * <code>.dstore.values.DecimalValue surcharge_value = 3;</code>
     */
    public function setSurchargeValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->surcharge_value = $var;
    }

    /**
     * <code>bool surcharge_value_null = 1003;</code>
     */
    public function getSurchargeValueNull()
    {
        return $this->surcharge_value_null;
    }

    /**
     * <code>bool surcharge_value_null = 1003;</code>
     */
    public function setSurchargeValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->surcharge_value_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_from = 4;</code>
     */
    public function getValidFrom()
    {
        return $this->valid_from;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_from = 4;</code>
     */
    public function setValidFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_from = $var;
    }

    /**
     * <code>bool valid_from_null = 1004;</code>
     */
    public function getValidFromNull()
    {
        return $this->valid_from_null;
    }

    /**
     * <code>bool valid_from_null = 1004;</code>
     */
    public function setValidFromNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_from_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue priority_no = 5;</code>
     */
    public function getPriorityNo()
    {
        return $this->priority_no;
    }

    /**
     * <code>.dstore.values.IntegerValue priority_no = 5;</code>
     */
    public function setPriorityNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->priority_no = $var;
    }

    /**
     * <code>bool priority_no_null = 1005;</code>
     */
    public function getPriorityNoNull()
    {
        return $this->priority_no_null;
    }

    /**
     * <code>bool priority_no_null = 1005;</code>
     */
    public function setPriorityNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->priority_no_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_configuration = 6;</code>
     */
    public function getDeleteConfiguration()
    {
        return $this->delete_configuration;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_configuration = 6;</code>
     */
    public function setDeleteConfiguration(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_configuration = $var;
    }

    /**
     * <code>bool delete_configuration_null = 1006;</code>
     */
    public function getDeleteConfigurationNull()
    {
        return $this->delete_configuration_null;
    }

    /**
     * <code>bool delete_configuration_null = 1006;</code>
     */
    public function setDeleteConfigurationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_configuration_null = $var;
    }

}

