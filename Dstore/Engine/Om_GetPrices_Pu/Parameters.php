<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPrices_Pu.proto

namespace Dstore\Engine\Om_GetPrices_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetPrices_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue node_ids = 1;</code>
     */
    private $node_ids = null;
    /**
     * <code>bool node_ids_null = 1001;</code>
     */
    private $node_ids_null = false;
    /**
     * <code>.dstore.values.StringValue quantities = 2;</code>
     */
    private $quantities = null;
    /**
     * <code>bool quantities_null = 1002;</code>
     */
    private $quantities_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_id = 3;</code>
     */
    private $person_id = null;
    /**
     * <code>bool person_id_null = 1003;</code>
     */
    private $person_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue currency_id = 4;</code>
     */
    private $currency_id = null;
    /**
     * <code>bool currency_id_null = 1004;</code>
     */
    private $currency_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue is_tree_node_id = 5;</code>
     */
    private $is_tree_node_id = null;
    /**
     * <code>bool is_tree_node_id_null = 1005;</code>
     */
    private $is_tree_node_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue price_node_characteristic_id = 6;</code>
     */
    private $price_node_characteristic_id = null;
    /**
     * <code>bool price_node_characteristic_id_null = 1006;</code>
     */
    private $price_node_characteristic_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue compute_sum = 7;</code>
     */
    private $compute_sum = null;
    /**
     * <code>bool compute_sum_null = 1007;</code>
     */
    private $compute_sum_null = false;
    /**
     * <code>.dstore.values.StringValue unique_id = 8;</code>
     */
    private $unique_id = null;
    /**
     * <code>bool unique_id_null = 1008;</code>
     */
    private $unique_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_additional_price_info = 9;</code>
     */
    private $get_additional_price_info = null;
    /**
     * <code>bool get_additional_price_info_null = 1009;</code>
     */
    private $get_additional_price_info_null = false;
    /**
     * <code>.dstore.values.IntegerValue delivery_person_id = 10;</code>
     */
    private $delivery_person_id = null;
    /**
     * <code>bool delivery_person_id_null = 1010;</code>
     */
    private $delivery_person_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_price_per_single_node_id = 11;</code>
     */
    private $get_price_per_single_node_id = null;
    /**
     * <code>bool get_price_per_single_node_id_null = 1011;</code>
     */
    private $get_price_per_single_node_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue payment_type_id = 12;</code>
     */
    private $payment_type_id = null;
    /**
     * <code>bool payment_type_id_null = 1012;</code>
     */
    private $payment_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 13;</code>
     */
    private $shipping_type_id = null;
    /**
     * <code>bool shipping_type_id_null = 1013;</code>
     */
    private $shipping_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetPricesPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue node_ids = 1;</code>
     */
    public function getNodeIds()
    {
        return $this->node_ids;
    }

    /**
     * <code>.dstore.values.StringValue node_ids = 1;</code>
     */
    public function setNodeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->node_ids = $var;
    }

    /**
     * <code>bool node_ids_null = 1001;</code>
     */
    public function getNodeIdsNull()
    {
        return $this->node_ids_null;
    }

    /**
     * <code>bool node_ids_null = 1001;</code>
     */
    public function setNodeIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_ids_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue quantities = 2;</code>
     */
    public function getQuantities()
    {
        return $this->quantities;
    }

    /**
     * <code>.dstore.values.StringValue quantities = 2;</code>
     */
    public function setQuantities(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->quantities = $var;
    }

    /**
     * <code>bool quantities_null = 1002;</code>
     */
    public function getQuantitiesNull()
    {
        return $this->quantities_null;
    }

    /**
     * <code>bool quantities_null = 1002;</code>
     */
    public function setQuantitiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->quantities_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 3;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 3;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <code>bool person_id_null = 1003;</code>
     */
    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    /**
     * <code>bool person_id_null = 1003;</code>
     */
    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue currency_id = 4;</code>
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * <code>.dstore.values.IntegerValue currency_id = 4;</code>
     */
    public function setCurrencyId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->currency_id = $var;
    }

    /**
     * <code>bool currency_id_null = 1004;</code>
     */
    public function getCurrencyIdNull()
    {
        return $this->currency_id_null;
    }

    /**
     * <code>bool currency_id_null = 1004;</code>
     */
    public function setCurrencyIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->currency_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue is_tree_node_id = 5;</code>
     */
    public function getIsTreeNodeId()
    {
        return $this->is_tree_node_id;
    }

    /**
     * <code>.dstore.values.BooleanValue is_tree_node_id = 5;</code>
     */
    public function setIsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->is_tree_node_id = $var;
    }

    /**
     * <code>bool is_tree_node_id_null = 1005;</code>
     */
    public function getIsTreeNodeIdNull()
    {
        return $this->is_tree_node_id_null;
    }

    /**
     * <code>bool is_tree_node_id_null = 1005;</code>
     */
    public function setIsTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_tree_node_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue price_node_characteristic_id = 6;</code>
     */
    public function getPriceNodeCharacteristicId()
    {
        return $this->price_node_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue price_node_characteristic_id = 6;</code>
     */
    public function setPriceNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->price_node_characteristic_id = $var;
    }

    /**
     * <code>bool price_node_characteristic_id_null = 1006;</code>
     */
    public function getPriceNodeCharacteristicIdNull()
    {
        return $this->price_node_characteristic_id_null;
    }

    /**
     * <code>bool price_node_characteristic_id_null = 1006;</code>
     */
    public function setPriceNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->price_node_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue compute_sum = 7;</code>
     */
    public function getComputeSum()
    {
        return $this->compute_sum;
    }

    /**
     * <code>.dstore.values.BooleanValue compute_sum = 7;</code>
     */
    public function setComputeSum(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->compute_sum = $var;
    }

    /**
     * <code>bool compute_sum_null = 1007;</code>
     */
    public function getComputeSumNull()
    {
        return $this->compute_sum_null;
    }

    /**
     * <code>bool compute_sum_null = 1007;</code>
     */
    public function setComputeSumNull($var)
    {
        GPBUtil::checkBool($var);
        $this->compute_sum_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 8;</code>
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 8;</code>
     */
    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unique_id = $var;
    }

    /**
     * <code>bool unique_id_null = 1008;</code>
     */
    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    /**
     * <code>bool unique_id_null = 1008;</code>
     */
    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_additional_price_info = 9;</code>
     */
    public function getGetAdditionalPriceInfo()
    {
        return $this->get_additional_price_info;
    }

    /**
     * <code>.dstore.values.BooleanValue get_additional_price_info = 9;</code>
     */
    public function setGetAdditionalPriceInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_additional_price_info = $var;
    }

    /**
     * <code>bool get_additional_price_info_null = 1009;</code>
     */
    public function getGetAdditionalPriceInfoNull()
    {
        return $this->get_additional_price_info_null;
    }

    /**
     * <code>bool get_additional_price_info_null = 1009;</code>
     */
    public function setGetAdditionalPriceInfoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_additional_price_info_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue delivery_person_id = 10;</code>
     */
    public function getDeliveryPersonId()
    {
        return $this->delivery_person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue delivery_person_id = 10;</code>
     */
    public function setDeliveryPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->delivery_person_id = $var;
    }

    /**
     * <code>bool delivery_person_id_null = 1010;</code>
     */
    public function getDeliveryPersonIdNull()
    {
        return $this->delivery_person_id_null;
    }

    /**
     * <code>bool delivery_person_id_null = 1010;</code>
     */
    public function setDeliveryPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delivery_person_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_price_per_single_node_id = 11;</code>
     */
    public function getGetPricePerSingleNodeId()
    {
        return $this->get_price_per_single_node_id;
    }

    /**
     * <code>.dstore.values.BooleanValue get_price_per_single_node_id = 11;</code>
     */
    public function setGetPricePerSingleNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_price_per_single_node_id = $var;
    }

    /**
     * <code>bool get_price_per_single_node_id_null = 1011;</code>
     */
    public function getGetPricePerSingleNodeIdNull()
    {
        return $this->get_price_per_single_node_id_null;
    }

    /**
     * <code>bool get_price_per_single_node_id_null = 1011;</code>
     */
    public function setGetPricePerSingleNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_price_per_single_node_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue payment_type_id = 12;</code>
     */
    public function getPaymentTypeId()
    {
        return $this->payment_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue payment_type_id = 12;</code>
     */
    public function setPaymentTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->payment_type_id = $var;
    }

    /**
     * <code>bool payment_type_id_null = 1012;</code>
     */
    public function getPaymentTypeIdNull()
    {
        return $this->payment_type_id_null;
    }

    /**
     * <code>bool payment_type_id_null = 1012;</code>
     */
    public function setPaymentTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 13;</code>
     */
    public function getShippingTypeId()
    {
        return $this->shipping_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 13;</code>
     */
    public function setShippingTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->shipping_type_id = $var;
    }

    /**
     * <code>bool shipping_type_id_null = 1013;</code>
     */
    public function getShippingTypeIdNull()
    {
        return $this->shipping_type_id_null;
    }

    /**
     * <code>bool shipping_type_id_null = 1013;</code>
     */
    public function setShippingTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_type_id_null = $var;
    }

}

