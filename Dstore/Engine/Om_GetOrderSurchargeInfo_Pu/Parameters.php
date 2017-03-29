<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderSurchargeInfo_Pu.proto

namespace Dstore\Engine\Om_GetOrderSurchargeInfo_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetOrderSurchargeInfo_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue order_id = 1;</code>
     */
    private $order_id = null;
    /**
     * <code>bool order_id_null = 1001;</code>
     */
    private $order_id_null = false;
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
     * <code>.dstore.values.IntegerValue position_no = 4;</code>
     */
    private $position_no = null;
    /**
     * <code>bool position_no_null = 1004;</code>
     */
    private $position_no_null = false;
    /**
     * <code>.dstore.values.IntegerValue information_type_id = 5;</code>
     */
    private $information_type_id = null;
    /**
     * <code>bool information_type_id_null = 1005;</code>
     */
    private $information_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetOrderSurchargeInfoPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue order_id = 1;</code>
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * <code>.dstore.values.IntegerValue order_id = 1;</code>
     */
    public function setOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_id = $var;
    }

    /**
     * <code>bool order_id_null = 1001;</code>
     */
    public function getOrderIdNull()
    {
        return $this->order_id_null;
    }

    /**
     * <code>bool order_id_null = 1001;</code>
     */
    public function setOrderIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_id_null = $var;
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
     * <code>.dstore.values.IntegerValue position_no = 4;</code>
     */
    public function getPositionNo()
    {
        return $this->position_no;
    }

    /**
     * <code>.dstore.values.IntegerValue position_no = 4;</code>
     */
    public function setPositionNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->position_no = $var;
    }

    /**
     * <code>bool position_no_null = 1004;</code>
     */
    public function getPositionNoNull()
    {
        return $this->position_no_null;
    }

    /**
     * <code>bool position_no_null = 1004;</code>
     */
    public function setPositionNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->position_no_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 5;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 5;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <code>bool information_type_id_null = 1005;</code>
     */
    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    /**
     * <code>bool information_type_id_null = 1005;</code>
     */
    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
    }

}

