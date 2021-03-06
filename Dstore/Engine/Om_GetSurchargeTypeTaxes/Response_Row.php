<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetSurchargeTypeTaxes.proto

namespace Dstore\Engine\Om_GetSurchargeTypeTaxes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetSurchargeTypeTaxes.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Die Beschreibung des Steuersatzes (z.B. "Normalsteuersatz")
     * </pre>
     *
     * <code>.dstore.values.StringValue tax_rate_description = 10001;</code>
     */
    private $tax_rate_description = null;
    /**
     * <pre>
     * Der Zeitpunkt, bis zu dem der Steuersatz "TaxRate" gültig ist
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_to = 10002;</code>
     */
    private $valid_to = null;
    /**
     * <pre>
     * Der im Zeitraum "ValidFrom" bis "ValidTo" hinterlegte Steuersatz als Prozent-Angabe
     * </pre>
     *
     * <code>.dstore.values.DecimalValue tax_rate = 10003;</code>
     */
    private $tax_rate = null;
    /**
     * <pre>
     * Der Zeitpunkt, ab dem der Steuersatz "TaxRate" gültig ist
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_from = 10004;</code>
     */
    private $valid_from = null;
    /**
     * <pre>
     * Die ID der "TaxRate"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tax_rate_id = 10005;</code>
     */
    private $tax_rate_id = null;
    /**
     * <pre>
     * Die ID einer Rabatt-/Aufschlagsart zu dem der Steuersatz "TaxRate" hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_id = 10006;</code>
     */
    private $surcharge_type_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetSurchargeTypeTaxes::initOnce();
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
     * Die Beschreibung des Steuersatzes (z.B. "Normalsteuersatz")
     * </pre>
     *
     * <code>.dstore.values.StringValue tax_rate_description = 10001;</code>
     */
    public function getTaxRateDescription()
    {
        return $this->tax_rate_description;
    }

    /**
     * <pre>
     * Die Beschreibung des Steuersatzes (z.B. "Normalsteuersatz")
     * </pre>
     *
     * <code>.dstore.values.StringValue tax_rate_description = 10001;</code>
     */
    public function setTaxRateDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->tax_rate_description = $var;
    }

    /**
     * <pre>
     * Der Zeitpunkt, bis zu dem der Steuersatz "TaxRate" gültig ist
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_to = 10002;</code>
     */
    public function getValidTo()
    {
        return $this->valid_to;
    }

    /**
     * <pre>
     * Der Zeitpunkt, bis zu dem der Steuersatz "TaxRate" gültig ist
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_to = 10002;</code>
     */
    public function setValidTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_to = $var;
    }

    /**
     * <pre>
     * Der im Zeitraum "ValidFrom" bis "ValidTo" hinterlegte Steuersatz als Prozent-Angabe
     * </pre>
     *
     * <code>.dstore.values.DecimalValue tax_rate = 10003;</code>
     */
    public function getTaxRate()
    {
        return $this->tax_rate;
    }

    /**
     * <pre>
     * Der im Zeitraum "ValidFrom" bis "ValidTo" hinterlegte Steuersatz als Prozent-Angabe
     * </pre>
     *
     * <code>.dstore.values.DecimalValue tax_rate = 10003;</code>
     */
    public function setTaxRate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->tax_rate = $var;
    }

    /**
     * <pre>
     * Der Zeitpunkt, ab dem der Steuersatz "TaxRate" gültig ist
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_from = 10004;</code>
     */
    public function getValidFrom()
    {
        return $this->valid_from;
    }

    /**
     * <pre>
     * Der Zeitpunkt, ab dem der Steuersatz "TaxRate" gültig ist
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_from = 10004;</code>
     */
    public function setValidFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_from = $var;
    }

    /**
     * <pre>
     * Die ID der "TaxRate"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tax_rate_id = 10005;</code>
     */
    public function getTaxRateId()
    {
        return $this->tax_rate_id;
    }

    /**
     * <pre>
     * Die ID der "TaxRate"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tax_rate_id = 10005;</code>
     */
    public function setTaxRateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tax_rate_id = $var;
    }

    /**
     * <pre>
     * Die ID einer Rabatt-/Aufschlagsart zu dem der Steuersatz "TaxRate" hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_id = 10006;</code>
     */
    public function getSurchargeTypeId()
    {
        return $this->surcharge_type_id;
    }

    /**
     * <pre>
     * Die ID einer Rabatt-/Aufschlagsart zu dem der Steuersatz "TaxRate" hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_id = 10006;</code>
     */
    public function setSurchargeTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->surcharge_type_id = $var;
    }

}

