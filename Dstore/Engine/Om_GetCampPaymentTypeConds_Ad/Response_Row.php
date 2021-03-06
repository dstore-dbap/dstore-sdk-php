<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampPaymentTypeConds_Ad.proto

namespace Dstore\Engine\Om_GetCampPaymentTypeConds_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCampPaymentTypeConds_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Liste von "PaymentTypeID"s (durch "," getrennt), die besagt, daß je nach "NegateFilter" eine der angegebenen Zahlungsarten ausgewählt sein muß oder eben NICHT ausgewählt sein darf (um die Bedingung zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.StringValue filter_by_payment_type_ids = 10001;</code>
     */
    private $filter_by_payment_type_ids = null;
    /**
     * <pre>
     * ID einer "Zahlungsart-Bedingung" (derzeit natürlich immer identisch mit "&#64;ConditionID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_id = 10002;</code>
     */
    private $condition_id = null;
    /**
     * <pre>
     * Gibt an, ob eine der in "FilterByPaymentTypeIDs" angegebenen Zahlungsarten ausgewählt sein muß ("0") oder NICHT ausgewählt sein darf ("1") um die Bedingung zu erfüllen
     * </pre>
     *
     * <code>.dstore.values.BooleanValue negate_filter = 10003;</code>
     */
    private $negate_filter = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCampPaymentTypeCondsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function getRowId()
    {
        return $this->row_id;
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    /**
     * <pre>
     * Liste von "PaymentTypeID"s (durch "," getrennt), die besagt, daß je nach "NegateFilter" eine der angegebenen Zahlungsarten ausgewählt sein muß oder eben NICHT ausgewählt sein darf (um die Bedingung zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.StringValue filter_by_payment_type_ids = 10001;</code>
     */
    public function getFilterByPaymentTypeIds()
    {
        return $this->filter_by_payment_type_ids;
    }

    /**
     * <pre>
     * Liste von "PaymentTypeID"s (durch "," getrennt), die besagt, daß je nach "NegateFilter" eine der angegebenen Zahlungsarten ausgewählt sein muß oder eben NICHT ausgewählt sein darf (um die Bedingung zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.StringValue filter_by_payment_type_ids = 10001;</code>
     */
    public function setFilterByPaymentTypeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->filter_by_payment_type_ids = $var;
    }

    /**
     * <pre>
     * ID einer "Zahlungsart-Bedingung" (derzeit natürlich immer identisch mit "&#64;ConditionID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_id = 10002;</code>
     */
    public function getConditionId()
    {
        return $this->condition_id;
    }

    /**
     * <pre>
     * ID einer "Zahlungsart-Bedingung" (derzeit natürlich immer identisch mit "&#64;ConditionID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_id = 10002;</code>
     */
    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_id = $var;
    }

    /**
     * <pre>
     * Gibt an, ob eine der in "FilterByPaymentTypeIDs" angegebenen Zahlungsarten ausgewählt sein muß ("0") oder NICHT ausgewählt sein darf ("1") um die Bedingung zu erfüllen
     * </pre>
     *
     * <code>.dstore.values.BooleanValue negate_filter = 10003;</code>
     */
    public function getNegateFilter()
    {
        return $this->negate_filter;
    }

    /**
     * <pre>
     * Gibt an, ob eine der in "FilterByPaymentTypeIDs" angegebenen Zahlungsarten ausgewählt sein muß ("0") oder NICHT ausgewählt sein darf ("1") um die Bedingung zu erfüllen
     * </pre>
     *
     * <code>.dstore.values.BooleanValue negate_filter = 10003;</code>
     */
    public function setNegateFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->negate_filter = $var;
    }

}

