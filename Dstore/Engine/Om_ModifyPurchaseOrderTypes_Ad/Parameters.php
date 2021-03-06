<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyPurchaseOrderTypes_Ad.proto

namespace Dstore\Engine\Om_ModifyPurchaseOrderTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyPurchaseOrderTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue order_type_id = 1;</code>
     */
    private $order_type_id = null;
    /**
     * <code>bool order_type_id_null = 1001;</code>
     */
    private $order_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue order_type_description = 2;</code>
     */
    private $order_type_description = null;
    /**
     * <code>bool order_type_description_null = 1002;</code>
     */
    private $order_type_description_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_order_type = 3;</code>
     */
    private $delete_order_type = null;
    /**
     * <code>bool delete_order_type_null = 1003;</code>
     */
    private $delete_order_type_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyPurchaseOrderTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue order_type_id = 1;</code>
     */
    public function getOrderTypeId()
    {
        return $this->order_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue order_type_id = 1;</code>
     */
    public function setOrderTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_type_id = $var;
    }

    /**
     * <code>bool order_type_id_null = 1001;</code>
     */
    public function getOrderTypeIdNull()
    {
        return $this->order_type_id_null;
    }

    /**
     * <code>bool order_type_id_null = 1001;</code>
     */
    public function setOrderTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue order_type_description = 2;</code>
     */
    public function getOrderTypeDescription()
    {
        return $this->order_type_description;
    }

    /**
     * <code>.dstore.values.StringValue order_type_description = 2;</code>
     */
    public function setOrderTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->order_type_description = $var;
    }

    /**
     * <code>bool order_type_description_null = 1002;</code>
     */
    public function getOrderTypeDescriptionNull()
    {
        return $this->order_type_description_null;
    }

    /**
     * <code>bool order_type_description_null = 1002;</code>
     */
    public function setOrderTypeDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_type_description_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_order_type = 3;</code>
     */
    public function getDeleteOrderType()
    {
        return $this->delete_order_type;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_order_type = 3;</code>
     */
    public function setDeleteOrderType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_order_type = $var;
    }

    /**
     * <code>bool delete_order_type_null = 1003;</code>
     */
    public function getDeleteOrderTypeNull()
    {
        return $this->delete_order_type_null;
    }

    /**
     * <code>bool delete_order_type_null = 1003;</code>
     */
    public function setDeleteOrderTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_order_type_null = $var;
    }

}

