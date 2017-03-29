<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyOrderInformation_Ad.proto

namespace Dstore\Engine\Om_ModifyOrderInformation_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyOrderInformation_Ad.Parameters</code>
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
     * <code>.dstore.values.IntegerValue information_type_id = 2;</code>
     */
    private $information_type_id = null;
    /**
     * <code>bool information_type_id_null = 1002;</code>
     */
    private $information_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue information = 3;</code>
     */
    private $information = null;
    /**
     * <code>bool information_null = 1003;</code>
     */
    private $information_null = false;
    /**
     * <code>.dstore.values.StringValue country = 4;</code>
     */
    private $country = null;
    /**
     * <code>bool country_null = 1004;</code>
     */
    private $country_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyOrderInformationAd::initOnce();
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
     * <code>.dstore.values.StringValue information = 3;</code>
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * <code>.dstore.values.StringValue information = 3;</code>
     */
    public function setInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->information = $var;
    }

    /**
     * <code>bool information_null = 1003;</code>
     */
    public function getInformationNull()
    {
        return $this->information_null;
    }

    /**
     * <code>bool information_null = 1003;</code>
     */
    public function setInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue country = 4;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <code>.dstore.values.StringValue country = 4;</code>
     */
    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->country = $var;
    }

    /**
     * <code>bool country_null = 1004;</code>
     */
    public function getCountryNull()
    {
        return $this->country_null;
    }

    /**
     * <code>bool country_null = 1004;</code>
     */
    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

}
