<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPaymentTypes_Ad.proto

namespace Dstore\Engine\Om_GetPaymentTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetPaymentTypes_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Nicht verwenden, stattdessen : "GrossSumTo"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue brutto_sum_to = 10001;</code>
     */
    private $brutto_sum_to = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge bei der Berechnung aller "PaymentTypeID" zugeordneten "Surcharges"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue priority_no = 10002;</code>
     */
    private $priority_no = null;
    /**
     * <pre>
     * Symbol/Abkürzung der Einheit "SurchargeUnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_unit_symbol = 10003;</code>
     */
    private $surcharge_unit_symbol = null;
    /**
     * <pre>
     * Nicht verwenden, stattdessen : "GrossSumFrom"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue brutto_sum_from = 10004;</code>
     */
    private $brutto_sum_from = null;
    /**
     * <pre>
     * Aufschlag/Rabatt, der bei Wahl der "PaymentTypeID" in einem Auftrag berechnet/gewährt wird
     * </pre>
     *
     * <code>.dstore.values.DecimalValue surcharge_value = 10005;</code>
     */
    private $surcharge_value = null;
    /**
     * <pre>
     * Nicht verwenden, stattdessen : "SurchargeValue"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue cost = 10006;</code>
     */
    private $cost = null;
    /**
     * <pre>
     * "om_GetPaymentAndShipping_Pu" bietet die Zahlungsart "PaymentTypeID" nur dann an, wenn der Brutto-Bestellwert (in der Einheit "CurrencyID") höchstens so hoch wie dieser Betrag ist
     * </pre>
     *
     * <code>.dstore.values.DecimalValue gross_sum_to = 10007;</code>
     */
    private $gross_sum_to = null;
    /**
     * <pre>
     * ID einer Währung, in der "GrossSumFrom" und "GrossSumTo" angegeben sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue currency_id = 10008;</code>
     */
    private $currency_id = null;
    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) der Einheit "CurrencyID"
     * </pre>
     *
     * <code>.dstore.values.StringValue currency_symbol = 10009;</code>
     */
    private $currency_symbol = null;
    /**
     * <pre>
     * Wann wurde die Zahlungsart angelegt. Anmerkung : Kann "NULL" sein, da diese Spalte erst seit Version 5.0.2 der Tabelle "PaymentTypes" hinzugefügt wurde !
     * </pre>
     *
     * <code>.dstore.values.TimestampValue created_at_date_and_time = 10010;</code>
     */
    private $created_at_date_and_time = null;
    /**
     * <pre>
     * "0" : Die Zahlungsart ist nicht mehr aktiv, d.h. kann für neue Aufträge nicht mehr verwendet werden (wird aber noch in alten Aufträgen referenziert und kann daher nicht gelöscht werden)"1" : "PaymentTypeID" ist aktiv, also aktuell auswählbar
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10011;</code>
     */
    private $active = null;
    /**
     * <pre>
     * Nicht verwenden, stattdessen : "SurchargeUnitID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue cost_currency_id = 10012;</code>
     */
    private $cost_currency_id = null;
    /**
     * <pre>
     * Bezeichnung der Zahlungsart "PaymentTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue payment_type_description = 10013;</code>
     */
    private $payment_type_description = null;
    /**
     * <pre>
     * Übersetzung von "PaymentTypeDescription" in der durch "&#64;LanguageID" angegebenen Sprache. Immer "NULL", wenn "&#64;LanguageID" "0" oder "NULL" ist, oder ein Wert für "&#64;ValidAtDateAndTime" gesetzt ist (da es für die Übersetzungen KEINE Historie gibt) !
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_description = 10014;</code>
     */
    private $translated_description = null;
    /**
     * <pre>
     * "om_GetPaymentAndShipping_Pu" bietet die Zahlungsart "PaymentTypeID" nur dann an, wenn der Brutto-Bestellwert (in der Einheit "CurrencyID") mindestens so hoch wie dieser Betrag ist
     * </pre>
     *
     * <code>.dstore.values.DecimalValue gross_sum_from = 10015;</code>
     */
    private $gross_sum_from = null;
    /**
     * <pre>
     * Bezeichnung der Region "RegionID"
     * </pre>
     *
     * <code>.dstore.values.StringValue region = 10016;</code>
     */
    private $region = null;
    /**
     * <pre>
     * Gibt an, wie "SurchargeValue" zu verstehen ist :"0" : Es ist eine relative (d.h. prozentuale) Angabe"1" : Es ist eine absolute Währungs-Angabe in der Einheit SurchargeUnitID, und zwar ein als NETTO-Wert"2" : Wie "1" nur als BRUTTO-Wert zu verstehen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_is_absolute_value = 10017;</code>
     */
    private $surcharge_is_absolute_value = null;
    /**
     * <pre>
     * Nicht verwenden, stattdessen : "SurchargeUnitSymbol"
     * </pre>
     *
     * <code>.dstore.values.StringValue cost_currency_symbol = 10018;</code>
     */
    private $cost_currency_symbol = null;
    /**
     * <pre>
     * ID einer Region, die bestimmte Länder ("Countries") zusammenfaßt. "om_GetPaymentAndShipping_Pu" bietet die Zahlungsart "PaymentTypeID" nur dann an, wenn der Auftraggeber aus einem Land kommt, das dieser Region angehört.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue region_id = 10019;</code>
     */
    private $region_id = null;
    /**
     * <pre>
     * Bezeichnung der "SurchargeTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_type_description = 10020;</code>
     */
    private $surcharge_type_description = null;
    /**
     * <pre>
     * ID einer Zahlungsart
     * </pre>
     *
     * <code>.dstore.values.IntegerValue payment_type_id = 10021;</code>
     */
    private $payment_type_id = null;
    /**
     * <pre>
     * ID einer Preis-Aufschlags/Rabatt-Art, die bei der Zahlungsart "PaymentTypeID" anfällt, wie z.B. "Nachnahmegebühr" o.ä.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_id = 10022;</code>
     */
    private $surcharge_type_id = null;
    /**
     * <pre>
     * ID der Einheit, in der "SurchargeValue" angegeben ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_unit_id = 10023;</code>
     */
    private $surcharge_unit_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetPaymentTypesAd::initOnce();
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
     * Nicht verwenden, stattdessen : "GrossSumTo"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue brutto_sum_to = 10001;</code>
     */
    public function getBruttoSumTo()
    {
        return $this->brutto_sum_to;
    }

    /**
     * <pre>
     * Nicht verwenden, stattdessen : "GrossSumTo"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue brutto_sum_to = 10001;</code>
     */
    public function setBruttoSumTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->brutto_sum_to = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge bei der Berechnung aller "PaymentTypeID" zugeordneten "Surcharges"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue priority_no = 10002;</code>
     */
    public function getPriorityNo()
    {
        return $this->priority_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge bei der Berechnung aller "PaymentTypeID" zugeordneten "Surcharges"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue priority_no = 10002;</code>
     */
    public function setPriorityNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->priority_no = $var;
    }

    /**
     * <pre>
     * Symbol/Abkürzung der Einheit "SurchargeUnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_unit_symbol = 10003;</code>
     */
    public function getSurchargeUnitSymbol()
    {
        return $this->surcharge_unit_symbol;
    }

    /**
     * <pre>
     * Symbol/Abkürzung der Einheit "SurchargeUnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_unit_symbol = 10003;</code>
     */
    public function setSurchargeUnitSymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->surcharge_unit_symbol = $var;
    }

    /**
     * <pre>
     * Nicht verwenden, stattdessen : "GrossSumFrom"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue brutto_sum_from = 10004;</code>
     */
    public function getBruttoSumFrom()
    {
        return $this->brutto_sum_from;
    }

    /**
     * <pre>
     * Nicht verwenden, stattdessen : "GrossSumFrom"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue brutto_sum_from = 10004;</code>
     */
    public function setBruttoSumFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->brutto_sum_from = $var;
    }

    /**
     * <pre>
     * Aufschlag/Rabatt, der bei Wahl der "PaymentTypeID" in einem Auftrag berechnet/gewährt wird
     * </pre>
     *
     * <code>.dstore.values.DecimalValue surcharge_value = 10005;</code>
     */
    public function getSurchargeValue()
    {
        return $this->surcharge_value;
    }

    /**
     * <pre>
     * Aufschlag/Rabatt, der bei Wahl der "PaymentTypeID" in einem Auftrag berechnet/gewährt wird
     * </pre>
     *
     * <code>.dstore.values.DecimalValue surcharge_value = 10005;</code>
     */
    public function setSurchargeValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->surcharge_value = $var;
    }

    /**
     * <pre>
     * Nicht verwenden, stattdessen : "SurchargeValue"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue cost = 10006;</code>
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * <pre>
     * Nicht verwenden, stattdessen : "SurchargeValue"
     * </pre>
     *
     * <code>.dstore.values.DecimalValue cost = 10006;</code>
     */
    public function setCost(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->cost = $var;
    }

    /**
     * <pre>
     * "om_GetPaymentAndShipping_Pu" bietet die Zahlungsart "PaymentTypeID" nur dann an, wenn der Brutto-Bestellwert (in der Einheit "CurrencyID") höchstens so hoch wie dieser Betrag ist
     * </pre>
     *
     * <code>.dstore.values.DecimalValue gross_sum_to = 10007;</code>
     */
    public function getGrossSumTo()
    {
        return $this->gross_sum_to;
    }

    /**
     * <pre>
     * "om_GetPaymentAndShipping_Pu" bietet die Zahlungsart "PaymentTypeID" nur dann an, wenn der Brutto-Bestellwert (in der Einheit "CurrencyID") höchstens so hoch wie dieser Betrag ist
     * </pre>
     *
     * <code>.dstore.values.DecimalValue gross_sum_to = 10007;</code>
     */
    public function setGrossSumTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->gross_sum_to = $var;
    }

    /**
     * <pre>
     * ID einer Währung, in der "GrossSumFrom" und "GrossSumTo" angegeben sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue currency_id = 10008;</code>
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * <pre>
     * ID einer Währung, in der "GrossSumFrom" und "GrossSumTo" angegeben sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue currency_id = 10008;</code>
     */
    public function setCurrencyId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->currency_id = $var;
    }

    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) der Einheit "CurrencyID"
     * </pre>
     *
     * <code>.dstore.values.StringValue currency_symbol = 10009;</code>
     */
    public function getCurrencySymbol()
    {
        return $this->currency_symbol;
    }

    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) der Einheit "CurrencyID"
     * </pre>
     *
     * <code>.dstore.values.StringValue currency_symbol = 10009;</code>
     */
    public function setCurrencySymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->currency_symbol = $var;
    }

    /**
     * <pre>
     * Wann wurde die Zahlungsart angelegt. Anmerkung : Kann "NULL" sein, da diese Spalte erst seit Version 5.0.2 der Tabelle "PaymentTypes" hinzugefügt wurde !
     * </pre>
     *
     * <code>.dstore.values.TimestampValue created_at_date_and_time = 10010;</code>
     */
    public function getCreatedAtDateAndTime()
    {
        return $this->created_at_date_and_time;
    }

    /**
     * <pre>
     * Wann wurde die Zahlungsart angelegt. Anmerkung : Kann "NULL" sein, da diese Spalte erst seit Version 5.0.2 der Tabelle "PaymentTypes" hinzugefügt wurde !
     * </pre>
     *
     * <code>.dstore.values.TimestampValue created_at_date_and_time = 10010;</code>
     */
    public function setCreatedAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->created_at_date_and_time = $var;
    }

    /**
     * <pre>
     * "0" : Die Zahlungsart ist nicht mehr aktiv, d.h. kann für neue Aufträge nicht mehr verwendet werden (wird aber noch in alten Aufträgen referenziert und kann daher nicht gelöscht werden)"1" : "PaymentTypeID" ist aktiv, also aktuell auswählbar
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10011;</code>
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * <pre>
     * "0" : Die Zahlungsart ist nicht mehr aktiv, d.h. kann für neue Aufträge nicht mehr verwendet werden (wird aber noch in alten Aufträgen referenziert und kann daher nicht gelöscht werden)"1" : "PaymentTypeID" ist aktiv, also aktuell auswählbar
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10011;</code>
     */
    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->active = $var;
    }

    /**
     * <pre>
     * Nicht verwenden, stattdessen : "SurchargeUnitID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue cost_currency_id = 10012;</code>
     */
    public function getCostCurrencyId()
    {
        return $this->cost_currency_id;
    }

    /**
     * <pre>
     * Nicht verwenden, stattdessen : "SurchargeUnitID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue cost_currency_id = 10012;</code>
     */
    public function setCostCurrencyId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->cost_currency_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Zahlungsart "PaymentTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue payment_type_description = 10013;</code>
     */
    public function getPaymentTypeDescription()
    {
        return $this->payment_type_description;
    }

    /**
     * <pre>
     * Bezeichnung der Zahlungsart "PaymentTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue payment_type_description = 10013;</code>
     */
    public function setPaymentTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->payment_type_description = $var;
    }

    /**
     * <pre>
     * Übersetzung von "PaymentTypeDescription" in der durch "&#64;LanguageID" angegebenen Sprache. Immer "NULL", wenn "&#64;LanguageID" "0" oder "NULL" ist, oder ein Wert für "&#64;ValidAtDateAndTime" gesetzt ist (da es für die Übersetzungen KEINE Historie gibt) !
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_description = 10014;</code>
     */
    public function getTranslatedDescription()
    {
        return $this->translated_description;
    }

    /**
     * <pre>
     * Übersetzung von "PaymentTypeDescription" in der durch "&#64;LanguageID" angegebenen Sprache. Immer "NULL", wenn "&#64;LanguageID" "0" oder "NULL" ist, oder ein Wert für "&#64;ValidAtDateAndTime" gesetzt ist (da es für die Übersetzungen KEINE Historie gibt) !
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_description = 10014;</code>
     */
    public function setTranslatedDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->translated_description = $var;
    }

    /**
     * <pre>
     * "om_GetPaymentAndShipping_Pu" bietet die Zahlungsart "PaymentTypeID" nur dann an, wenn der Brutto-Bestellwert (in der Einheit "CurrencyID") mindestens so hoch wie dieser Betrag ist
     * </pre>
     *
     * <code>.dstore.values.DecimalValue gross_sum_from = 10015;</code>
     */
    public function getGrossSumFrom()
    {
        return $this->gross_sum_from;
    }

    /**
     * <pre>
     * "om_GetPaymentAndShipping_Pu" bietet die Zahlungsart "PaymentTypeID" nur dann an, wenn der Brutto-Bestellwert (in der Einheit "CurrencyID") mindestens so hoch wie dieser Betrag ist
     * </pre>
     *
     * <code>.dstore.values.DecimalValue gross_sum_from = 10015;</code>
     */
    public function setGrossSumFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->gross_sum_from = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Region "RegionID"
     * </pre>
     *
     * <code>.dstore.values.StringValue region = 10016;</code>
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * <pre>
     * Bezeichnung der Region "RegionID"
     * </pre>
     *
     * <code>.dstore.values.StringValue region = 10016;</code>
     */
    public function setRegion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->region = $var;
    }

    /**
     * <pre>
     * Gibt an, wie "SurchargeValue" zu verstehen ist :"0" : Es ist eine relative (d.h. prozentuale) Angabe"1" : Es ist eine absolute Währungs-Angabe in der Einheit SurchargeUnitID, und zwar ein als NETTO-Wert"2" : Wie "1" nur als BRUTTO-Wert zu verstehen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_is_absolute_value = 10017;</code>
     */
    public function getSurchargeIsAbsoluteValue()
    {
        return $this->surcharge_is_absolute_value;
    }

    /**
     * <pre>
     * Gibt an, wie "SurchargeValue" zu verstehen ist :"0" : Es ist eine relative (d.h. prozentuale) Angabe"1" : Es ist eine absolute Währungs-Angabe in der Einheit SurchargeUnitID, und zwar ein als NETTO-Wert"2" : Wie "1" nur als BRUTTO-Wert zu verstehen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_is_absolute_value = 10017;</code>
     */
    public function setSurchargeIsAbsoluteValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->surcharge_is_absolute_value = $var;
    }

    /**
     * <pre>
     * Nicht verwenden, stattdessen : "SurchargeUnitSymbol"
     * </pre>
     *
     * <code>.dstore.values.StringValue cost_currency_symbol = 10018;</code>
     */
    public function getCostCurrencySymbol()
    {
        return $this->cost_currency_symbol;
    }

    /**
     * <pre>
     * Nicht verwenden, stattdessen : "SurchargeUnitSymbol"
     * </pre>
     *
     * <code>.dstore.values.StringValue cost_currency_symbol = 10018;</code>
     */
    public function setCostCurrencySymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->cost_currency_symbol = $var;
    }

    /**
     * <pre>
     * ID einer Region, die bestimmte Länder ("Countries") zusammenfaßt. "om_GetPaymentAndShipping_Pu" bietet die Zahlungsart "PaymentTypeID" nur dann an, wenn der Auftraggeber aus einem Land kommt, das dieser Region angehört.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue region_id = 10019;</code>
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * <pre>
     * ID einer Region, die bestimmte Länder ("Countries") zusammenfaßt. "om_GetPaymentAndShipping_Pu" bietet die Zahlungsart "PaymentTypeID" nur dann an, wenn der Auftraggeber aus einem Land kommt, das dieser Region angehört.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue region_id = 10019;</code>
     */
    public function setRegionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->region_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der "SurchargeTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_type_description = 10020;</code>
     */
    public function getSurchargeTypeDescription()
    {
        return $this->surcharge_type_description;
    }

    /**
     * <pre>
     * Bezeichnung der "SurchargeTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_type_description = 10020;</code>
     */
    public function setSurchargeTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->surcharge_type_description = $var;
    }

    /**
     * <pre>
     * ID einer Zahlungsart
     * </pre>
     *
     * <code>.dstore.values.IntegerValue payment_type_id = 10021;</code>
     */
    public function getPaymentTypeId()
    {
        return $this->payment_type_id;
    }

    /**
     * <pre>
     * ID einer Zahlungsart
     * </pre>
     *
     * <code>.dstore.values.IntegerValue payment_type_id = 10021;</code>
     */
    public function setPaymentTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->payment_type_id = $var;
    }

    /**
     * <pre>
     * ID einer Preis-Aufschlags/Rabatt-Art, die bei der Zahlungsart "PaymentTypeID" anfällt, wie z.B. "Nachnahmegebühr" o.ä.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_id = 10022;</code>
     */
    public function getSurchargeTypeId()
    {
        return $this->surcharge_type_id;
    }

    /**
     * <pre>
     * ID einer Preis-Aufschlags/Rabatt-Art, die bei der Zahlungsart "PaymentTypeID" anfällt, wie z.B. "Nachnahmegebühr" o.ä.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_id = 10022;</code>
     */
    public function setSurchargeTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->surcharge_type_id = $var;
    }

    /**
     * <pre>
     * ID der Einheit, in der "SurchargeValue" angegeben ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_unit_id = 10023;</code>
     */
    public function getSurchargeUnitId()
    {
        return $this->surcharge_unit_id;
    }

    /**
     * <pre>
     * ID der Einheit, in der "SurchargeValue" angegeben ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_unit_id = 10023;</code>
     */
    public function setSurchargeUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->surcharge_unit_id = $var;
    }

}

