<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyPayForShipDescr_Ad.proto

namespace Dstore\Engine\Om_ModifyPayForShipDescr_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyPayForShipDescr_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue payment_for_shipping_id = 1;</code>
     */
    private $payment_for_shipping_id = null;
    /**
     * <code>bool payment_for_shipping_id_null = 1001;</code>
     */
    private $payment_for_shipping_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1002;</code>
     */
    private $language_id_null = false;
    /**
     * <code>.dstore.values.StringValue payment_for_shipping_description = 3;</code>
     */
    private $payment_for_shipping_description = null;
    /**
     * <code>bool payment_for_shipping_description_null = 1003;</code>
     */
    private $payment_for_shipping_description_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_translation = 4;</code>
     */
    private $delete_translation = null;
    /**
     * <code>bool delete_translation_null = 1004;</code>
     */
    private $delete_translation_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyPayForShipDescrAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue payment_for_shipping_id = 1;</code>
     */
    public function getPaymentForShippingId()
    {
        return $this->payment_for_shipping_id;
    }

    /**
     * <code>.dstore.values.IntegerValue payment_for_shipping_id = 1;</code>
     */
    public function setPaymentForShippingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->payment_for_shipping_id = $var;
    }

    /**
     * <code>bool payment_for_shipping_id_null = 1001;</code>
     */
    public function getPaymentForShippingIdNull()
    {
        return $this->payment_for_shipping_id_null;
    }

    /**
     * <code>bool payment_for_shipping_id_null = 1001;</code>
     */
    public function setPaymentForShippingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_for_shipping_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue payment_for_shipping_description = 3;</code>
     */
    public function getPaymentForShippingDescription()
    {
        return $this->payment_for_shipping_description;
    }

    /**
     * <code>.dstore.values.StringValue payment_for_shipping_description = 3;</code>
     */
    public function setPaymentForShippingDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->payment_for_shipping_description = $var;
    }

    /**
     * <code>bool payment_for_shipping_description_null = 1003;</code>
     */
    public function getPaymentForShippingDescriptionNull()
    {
        return $this->payment_for_shipping_description_null;
    }

    /**
     * <code>bool payment_for_shipping_description_null = 1003;</code>
     */
    public function setPaymentForShippingDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_for_shipping_description_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_translation = 4;</code>
     */
    public function getDeleteTranslation()
    {
        return $this->delete_translation;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_translation = 4;</code>
     */
    public function setDeleteTranslation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_translation = $var;
    }

    /**
     * <code>bool delete_translation_null = 1004;</code>
     */
    public function getDeleteTranslationNull()
    {
        return $this->delete_translation_null;
    }

    /**
     * <code>bool delete_translation_null = 1004;</code>
     */
    public function setDeleteTranslationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_translation_null = $var;
    }

}

