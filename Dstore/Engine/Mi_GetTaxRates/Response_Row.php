<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTaxRates.proto

namespace Dstore\Engine\Mi_GetTaxRates;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetTaxRates.Response.Row</code>
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
     * Gibt an, ob der Steuersatz aktiv ist. Dies ist nur eine Information für "Client-Anwendungen". Engineseitig gibt es zu dieser Information keine implementierte Funktionalität.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10002;</code>
     */
    private $active = null;
    /**
     * <pre>
     * Steuersatz als Multiplikator, d.h. im Falle von z.B. "TaxRate = 19" (ergo 19 Prozent) steht hier "1.19"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue taxes_multiplier = 10003;</code>
     */
    private $taxes_multiplier = null;
    /**
     * <pre>
     * Der Steuersatz in Prozent
     * </pre>
     *
     * <code>.dstore.values.DecimalValue tax_rate = 10004;</code>
     */
    private $tax_rate = null;
    /**
     * <pre>
     * Die ID eines Steuersatzes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tax_rate_id = 10005;</code>
     */
    private $tax_rate_id = null;
    /**
     * <pre>
     * Gibt an, ob dieser Steuersatz in speziellen Fällen, wo kein Steuersatz konfiguriert ist und auch nicht "künstlich bestimmt" werden kann, verwendet werden soll
     * </pre>
     *
     * <code>.dstore.values.BooleanValue use_as_fallback = 10006;</code>
     */
    private $use_as_fallback = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetTaxRates::initOnce();
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
     * Gibt an, ob der Steuersatz aktiv ist. Dies ist nur eine Information für "Client-Anwendungen". Engineseitig gibt es zu dieser Information keine implementierte Funktionalität.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10002;</code>
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * <pre>
     * Gibt an, ob der Steuersatz aktiv ist. Dies ist nur eine Information für "Client-Anwendungen". Engineseitig gibt es zu dieser Information keine implementierte Funktionalität.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10002;</code>
     */
    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->active = $var;
    }

    /**
     * <pre>
     * Steuersatz als Multiplikator, d.h. im Falle von z.B. "TaxRate = 19" (ergo 19 Prozent) steht hier "1.19"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue taxes_multiplier = 10003;</code>
     */
    public function getTaxesMultiplier()
    {
        return $this->taxes_multiplier;
    }

    /**
     * <pre>
     * Steuersatz als Multiplikator, d.h. im Falle von z.B. "TaxRate = 19" (ergo 19 Prozent) steht hier "1.19"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue taxes_multiplier = 10003;</code>
     */
    public function setTaxesMultiplier(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->taxes_multiplier = $var;
    }

    /**
     * <pre>
     * Der Steuersatz in Prozent
     * </pre>
     *
     * <code>.dstore.values.DecimalValue tax_rate = 10004;</code>
     */
    public function getTaxRate()
    {
        return $this->tax_rate;
    }

    /**
     * <pre>
     * Der Steuersatz in Prozent
     * </pre>
     *
     * <code>.dstore.values.DecimalValue tax_rate = 10004;</code>
     */
    public function setTaxRate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->tax_rate = $var;
    }

    /**
     * <pre>
     * Die ID eines Steuersatzes
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
     * Die ID eines Steuersatzes
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
     * Gibt an, ob dieser Steuersatz in speziellen Fällen, wo kein Steuersatz konfiguriert ist und auch nicht "künstlich bestimmt" werden kann, verwendet werden soll
     * </pre>
     *
     * <code>.dstore.values.BooleanValue use_as_fallback = 10006;</code>
     */
    public function getUseAsFallback()
    {
        return $this->use_as_fallback;
    }

    /**
     * <pre>
     * Gibt an, ob dieser Steuersatz in speziellen Fällen, wo kein Steuersatz konfiguriert ist und auch nicht "künstlich bestimmt" werden kann, verwendet werden soll
     * </pre>
     *
     * <code>.dstore.values.BooleanValue use_as_fallback = 10006;</code>
     */
    public function setUseAsFallback(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->use_as_fallback = $var;
    }

}

