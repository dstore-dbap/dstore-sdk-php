<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyShippingTypes_Ad.proto

namespace Dstore\Engine\Om_ModifyShippingTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyShippingTypes_Ad.Parameters</code>
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
     * <code>.dstore.values.StringValue shipping_type_description = 2;</code>
     */
    private $shipping_type_description = null;
    /**
     * <code>bool shipping_type_description_null = 1002;</code>
     */
    private $shipping_type_description_null = false;
    /**
     * <code>.dstore.values.IntegerValue region_id = 3;</code>
     */
    private $region_id = null;
    /**
     * <code>bool region_id_null = 1003;</code>
     */
    private $region_id_null = false;
    /**
     * <code>.dstore.values.DecimalValue brutto_sum_from = 4;</code>
     */
    private $brutto_sum_from = null;
    /**
     * <code>bool brutto_sum_from_null = 1004;</code>
     */
    private $brutto_sum_from_null = false;
    /**
     * <code>.dstore.values.DecimalValue brutto_sum_to = 5;</code>
     */
    private $brutto_sum_to = null;
    /**
     * <code>bool brutto_sum_to_null = 1005;</code>
     */
    private $brutto_sum_to_null = false;
    /**
     * <code>.dstore.values.IntegerValue currency_id = 6;</code>
     */
    private $currency_id = null;
    /**
     * <code>bool currency_id_null = 1006;</code>
     */
    private $currency_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue surcharge_type_id = 7;</code>
     */
    private $surcharge_type_id = null;
    /**
     * <code>bool surcharge_type_id_null = 1007;</code>
     */
    private $surcharge_type_id_null = false;
    /**
     * <code>.dstore.values.DecimalValue cost = 8;</code>
     */
    private $cost = null;
    /**
     * <code>bool cost_null = 1008;</code>
     */
    private $cost_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_shipping_type = 9;</code>
     */
    private $delete_shipping_type = null;
    /**
     * <code>bool delete_shipping_type_null = 1009;</code>
     */
    private $delete_shipping_type_null = false;
    /**
     * <code>.dstore.values.BooleanValue active = 10;</code>
     */
    private $active = null;
    /**
     * <code>bool active_null = 1010;</code>
     */
    private $active_null = false;
    /**
     * <code>.dstore.values.StringValue predef_bill_content_description = 11;</code>
     */
    private $predef_bill_content_description = null;
    /**
     * <code>bool predef_bill_content_description_null = 1011;</code>
     */
    private $predef_bill_content_description_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyShippingTypesAd::initOnce();
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
     * <code>.dstore.values.StringValue shipping_type_description = 2;</code>
     */
    public function getShippingTypeDescription()
    {
        return $this->shipping_type_description;
    }

    /**
     * <code>.dstore.values.StringValue shipping_type_description = 2;</code>
     */
    public function setShippingTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->shipping_type_description = $var;
    }

    /**
     * <code>bool shipping_type_description_null = 1002;</code>
     */
    public function getShippingTypeDescriptionNull()
    {
        return $this->shipping_type_description_null;
    }

    /**
     * <code>bool shipping_type_description_null = 1002;</code>
     */
    public function setShippingTypeDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_type_description_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue region_id = 3;</code>
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * <code>.dstore.values.IntegerValue region_id = 3;</code>
     */
    public function setRegionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->region_id = $var;
    }

    /**
     * <code>bool region_id_null = 1003;</code>
     */
    public function getRegionIdNull()
    {
        return $this->region_id_null;
    }

    /**
     * <code>bool region_id_null = 1003;</code>
     */
    public function setRegionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->region_id_null = $var;
    }

    /**
     * <code>.dstore.values.DecimalValue brutto_sum_from = 4;</code>
     */
    public function getBruttoSumFrom()
    {
        return $this->brutto_sum_from;
    }

    /**
     * <code>.dstore.values.DecimalValue brutto_sum_from = 4;</code>
     */
    public function setBruttoSumFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->brutto_sum_from = $var;
    }

    /**
     * <code>bool brutto_sum_from_null = 1004;</code>
     */
    public function getBruttoSumFromNull()
    {
        return $this->brutto_sum_from_null;
    }

    /**
     * <code>bool brutto_sum_from_null = 1004;</code>
     */
    public function setBruttoSumFromNull($var)
    {
        GPBUtil::checkBool($var);
        $this->brutto_sum_from_null = $var;
    }

    /**
     * <code>.dstore.values.DecimalValue brutto_sum_to = 5;</code>
     */
    public function getBruttoSumTo()
    {
        return $this->brutto_sum_to;
    }

    /**
     * <code>.dstore.values.DecimalValue brutto_sum_to = 5;</code>
     */
    public function setBruttoSumTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->brutto_sum_to = $var;
    }

    /**
     * <code>bool brutto_sum_to_null = 1005;</code>
     */
    public function getBruttoSumToNull()
    {
        return $this->brutto_sum_to_null;
    }

    /**
     * <code>bool brutto_sum_to_null = 1005;</code>
     */
    public function setBruttoSumToNull($var)
    {
        GPBUtil::checkBool($var);
        $this->brutto_sum_to_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue currency_id = 6;</code>
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * <code>.dstore.values.IntegerValue currency_id = 6;</code>
     */
    public function setCurrencyId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->currency_id = $var;
    }

    /**
     * <code>bool currency_id_null = 1006;</code>
     */
    public function getCurrencyIdNull()
    {
        return $this->currency_id_null;
    }

    /**
     * <code>bool currency_id_null = 1006;</code>
     */
    public function setCurrencyIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->currency_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue surcharge_type_id = 7;</code>
     */
    public function getSurchargeTypeId()
    {
        return $this->surcharge_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue surcharge_type_id = 7;</code>
     */
    public function setSurchargeTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->surcharge_type_id = $var;
    }

    /**
     * <code>bool surcharge_type_id_null = 1007;</code>
     */
    public function getSurchargeTypeIdNull()
    {
        return $this->surcharge_type_id_null;
    }

    /**
     * <code>bool surcharge_type_id_null = 1007;</code>
     */
    public function setSurchargeTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->surcharge_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.DecimalValue cost = 8;</code>
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * <code>.dstore.values.DecimalValue cost = 8;</code>
     */
    public function setCost(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->cost = $var;
    }

    /**
     * <code>bool cost_null = 1008;</code>
     */
    public function getCostNull()
    {
        return $this->cost_null;
    }

    /**
     * <code>bool cost_null = 1008;</code>
     */
    public function setCostNull($var)
    {
        GPBUtil::checkBool($var);
        $this->cost_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_shipping_type = 9;</code>
     */
    public function getDeleteShippingType()
    {
        return $this->delete_shipping_type;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_shipping_type = 9;</code>
     */
    public function setDeleteShippingType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_shipping_type = $var;
    }

    /**
     * <code>bool delete_shipping_type_null = 1009;</code>
     */
    public function getDeleteShippingTypeNull()
    {
        return $this->delete_shipping_type_null;
    }

    /**
     * <code>bool delete_shipping_type_null = 1009;</code>
     */
    public function setDeleteShippingTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_shipping_type_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue active = 10;</code>
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * <code>.dstore.values.BooleanValue active = 10;</code>
     */
    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->active = $var;
    }

    /**
     * <code>bool active_null = 1010;</code>
     */
    public function getActiveNull()
    {
        return $this->active_null;
    }

    /**
     * <code>bool active_null = 1010;</code>
     */
    public function setActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->active_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue predef_bill_content_description = 11;</code>
     */
    public function getPredefBillContentDescription()
    {
        return $this->predef_bill_content_description;
    }

    /**
     * <code>.dstore.values.StringValue predef_bill_content_description = 11;</code>
     */
    public function setPredefBillContentDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->predef_bill_content_description = $var;
    }

    /**
     * <code>bool predef_bill_content_description_null = 1011;</code>
     */
    public function getPredefBillContentDescriptionNull()
    {
        return $this->predef_bill_content_description_null;
    }

    /**
     * <code>bool predef_bill_content_description_null = 1011;</code>
     */
    public function setPredefBillContentDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->predef_bill_content_description_null = $var;
    }

}

