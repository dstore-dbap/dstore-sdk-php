<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetSurchargeTypes_Ad.proto

namespace Dstore\Engine\Om_GetSurchargeTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetSurchargeTypes_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Redundante Information (s. "IsAbsoluteValue"), aufgrund der Abwärtskompatibilität beibehalten. Gibt an, ob "Surcharge"-Werte absolut ("0") oder relativ/prozentual ("1") zu verstehen sind.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue relative = 10001;</code>
     */
    private $relative = null;
    /**
     * <pre>
     * ID einer Währungs-Einheit (wenn "IsAbsoluteValue &gt; 0") oder der Prozent-Einheit (wenn "IsAbsoluteValue = 0" ist) - also die Einheit, in der die konkreten Rabatte/Aufschläge (wie z.B. in "PersonSurcharges") zu verstehen sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_id = 10002;</code>
     */
    private $unit_id = null;
    /**
     * <pre>
     * Gibt die Priorität der Kategorie "SurchargeTypeCategoryID" innerhalb aller Kategorien an. Eine kleinere "PriorityNo" bedeutet, daß "Surcharges" dieser Kategorie früher angewendet werden. Besonderheit : "0" bedeutet, daß die Kategorie ignoriert wird.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue category_priority_no = 10003;</code>
     */
    private $category_priority_no = null;
    /**
     * <pre>
     * Übersetzung von "SurchargeTypeDescription" in der durch "&#64;LanguageID" angegebenen Sprache ("NULL", falls keine Übersetzung existiert)
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_description = 10004;</code>
     */
    private $translated_description = null;
    /**
     * <pre>
     * Redundante Information (s. "IsAbsoluteValue"), aufgrund der Abwärtskompatibilität beibehalten. Gibt an, ob absolute "Surcharge"-Werte (nur relevant im Fall "Relative = 1" also) Netto ("0") oder Brutto ("1") zu verstehen sind.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue brutto = 10005;</code>
     */
    private $brutto = null;
    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) der Einheit "UnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_symbol = 10006;</code>
     */
    private $unit_symbol = null;
    /**
     * <pre>
     * Bezeichnung von "SurchargeTypeCategoryID"
     * </pre>
     *
     * <code>.dstore.values.StringValue category_description = 10007;</code>
     */
    private $category_description = null;
    /**
     * <pre>
     * Bezeichnung der "SurchargeTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_type_description = 10008;</code>
     */
    private $surcharge_type_description = null;
    /**
     * <pre>
     * Fasst "Relative" und "Brutto" in einer Einstellung zusammen, wie die Werte also zu verstehen sind :- "0" : relativ (prozentual)- "1" : absolute Netto-Werte- "2" : absolute Brutto-Werte
     * </pre>
     *
     * <code>.dstore.values.IntegerValue is_absolute_value = 10009;</code>
     */
    private $is_absolute_value = null;
    /**
     * <pre>
     * ID einer Preis-Aufschlags/Rabatt-Art, wie z.B. "Versandkosten", "Rabatt", "Nachnahmegebühr" o.ä.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_id = 10010;</code>
     */
    private $surcharge_type_id = null;
    /**
     * <pre>
     * ID einer Kategorie von "Surcharges", der "SurchargeTypeID" zugeordnet ist Anmerkung : Es ist eine 1:1-Zuordnung, d.h. die "SurchargeTypeID" muß einer Kategorie zugeordnet sein, sie kann aber auch nicht mehreren Kategorien zugeordnet sein !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_category_id = 10011;</code>
     */
    private $surcharge_type_category_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetSurchargeTypesAd::initOnce();
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
     * Redundante Information (s. "IsAbsoluteValue"), aufgrund der Abwärtskompatibilität beibehalten. Gibt an, ob "Surcharge"-Werte absolut ("0") oder relativ/prozentual ("1") zu verstehen sind.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue relative = 10001;</code>
     */
    public function getRelative()
    {
        return $this->relative;
    }

    /**
     * <pre>
     * Redundante Information (s. "IsAbsoluteValue"), aufgrund der Abwärtskompatibilität beibehalten. Gibt an, ob "Surcharge"-Werte absolut ("0") oder relativ/prozentual ("1") zu verstehen sind.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue relative = 10001;</code>
     */
    public function setRelative(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->relative = $var;
    }

    /**
     * <pre>
     * ID einer Währungs-Einheit (wenn "IsAbsoluteValue &gt; 0") oder der Prozent-Einheit (wenn "IsAbsoluteValue = 0" ist) - also die Einheit, in der die konkreten Rabatte/Aufschläge (wie z.B. in "PersonSurcharges") zu verstehen sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_id = 10002;</code>
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    /**
     * <pre>
     * ID einer Währungs-Einheit (wenn "IsAbsoluteValue &gt; 0") oder der Prozent-Einheit (wenn "IsAbsoluteValue = 0" ist) - also die Einheit, in der die konkreten Rabatte/Aufschläge (wie z.B. in "PersonSurcharges") zu verstehen sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_id = 10002;</code>
     */
    public function setUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->unit_id = $var;
    }

    /**
     * <pre>
     * Gibt die Priorität der Kategorie "SurchargeTypeCategoryID" innerhalb aller Kategorien an. Eine kleinere "PriorityNo" bedeutet, daß "Surcharges" dieser Kategorie früher angewendet werden. Besonderheit : "0" bedeutet, daß die Kategorie ignoriert wird.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue category_priority_no = 10003;</code>
     */
    public function getCategoryPriorityNo()
    {
        return $this->category_priority_no;
    }

    /**
     * <pre>
     * Gibt die Priorität der Kategorie "SurchargeTypeCategoryID" innerhalb aller Kategorien an. Eine kleinere "PriorityNo" bedeutet, daß "Surcharges" dieser Kategorie früher angewendet werden. Besonderheit : "0" bedeutet, daß die Kategorie ignoriert wird.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue category_priority_no = 10003;</code>
     */
    public function setCategoryPriorityNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->category_priority_no = $var;
    }

    /**
     * <pre>
     * Übersetzung von "SurchargeTypeDescription" in der durch "&#64;LanguageID" angegebenen Sprache ("NULL", falls keine Übersetzung existiert)
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_description = 10004;</code>
     */
    public function getTranslatedDescription()
    {
        return $this->translated_description;
    }

    /**
     * <pre>
     * Übersetzung von "SurchargeTypeDescription" in der durch "&#64;LanguageID" angegebenen Sprache ("NULL", falls keine Übersetzung existiert)
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_description = 10004;</code>
     */
    public function setTranslatedDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->translated_description = $var;
    }

    /**
     * <pre>
     * Redundante Information (s. "IsAbsoluteValue"), aufgrund der Abwärtskompatibilität beibehalten. Gibt an, ob absolute "Surcharge"-Werte (nur relevant im Fall "Relative = 1" also) Netto ("0") oder Brutto ("1") zu verstehen sind.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue brutto = 10005;</code>
     */
    public function getBrutto()
    {
        return $this->brutto;
    }

    /**
     * <pre>
     * Redundante Information (s. "IsAbsoluteValue"), aufgrund der Abwärtskompatibilität beibehalten. Gibt an, ob absolute "Surcharge"-Werte (nur relevant im Fall "Relative = 1" also) Netto ("0") oder Brutto ("1") zu verstehen sind.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue brutto = 10005;</code>
     */
    public function setBrutto(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->brutto = $var;
    }

    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) der Einheit "UnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_symbol = 10006;</code>
     */
    public function getUnitSymbol()
    {
        return $this->unit_symbol;
    }

    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) der Einheit "UnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_symbol = 10006;</code>
     */
    public function setUnitSymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unit_symbol = $var;
    }

    /**
     * <pre>
     * Bezeichnung von "SurchargeTypeCategoryID"
     * </pre>
     *
     * <code>.dstore.values.StringValue category_description = 10007;</code>
     */
    public function getCategoryDescription()
    {
        return $this->category_description;
    }

    /**
     * <pre>
     * Bezeichnung von "SurchargeTypeCategoryID"
     * </pre>
     *
     * <code>.dstore.values.StringValue category_description = 10007;</code>
     */
    public function setCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->category_description = $var;
    }

    /**
     * <pre>
     * Bezeichnung der "SurchargeTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_type_description = 10008;</code>
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
     * <code>.dstore.values.StringValue surcharge_type_description = 10008;</code>
     */
    public function setSurchargeTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->surcharge_type_description = $var;
    }

    /**
     * <pre>
     * Fasst "Relative" und "Brutto" in einer Einstellung zusammen, wie die Werte also zu verstehen sind :- "0" : relativ (prozentual)- "1" : absolute Netto-Werte- "2" : absolute Brutto-Werte
     * </pre>
     *
     * <code>.dstore.values.IntegerValue is_absolute_value = 10009;</code>
     */
    public function getIsAbsoluteValue()
    {
        return $this->is_absolute_value;
    }

    /**
     * <pre>
     * Fasst "Relative" und "Brutto" in einer Einstellung zusammen, wie die Werte also zu verstehen sind :- "0" : relativ (prozentual)- "1" : absolute Netto-Werte- "2" : absolute Brutto-Werte
     * </pre>
     *
     * <code>.dstore.values.IntegerValue is_absolute_value = 10009;</code>
     */
    public function setIsAbsoluteValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->is_absolute_value = $var;
    }

    /**
     * <pre>
     * ID einer Preis-Aufschlags/Rabatt-Art, wie z.B. "Versandkosten", "Rabatt", "Nachnahmegebühr" o.ä.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_id = 10010;</code>
     */
    public function getSurchargeTypeId()
    {
        return $this->surcharge_type_id;
    }

    /**
     * <pre>
     * ID einer Preis-Aufschlags/Rabatt-Art, wie z.B. "Versandkosten", "Rabatt", "Nachnahmegebühr" o.ä.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_id = 10010;</code>
     */
    public function setSurchargeTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->surcharge_type_id = $var;
    }

    /**
     * <pre>
     * ID einer Kategorie von "Surcharges", der "SurchargeTypeID" zugeordnet ist Anmerkung : Es ist eine 1:1-Zuordnung, d.h. die "SurchargeTypeID" muß einer Kategorie zugeordnet sein, sie kann aber auch nicht mehreren Kategorien zugeordnet sein !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_category_id = 10011;</code>
     */
    public function getSurchargeTypeCategoryId()
    {
        return $this->surcharge_type_category_id;
    }

    /**
     * <pre>
     * ID einer Kategorie von "Surcharges", der "SurchargeTypeID" zugeordnet ist Anmerkung : Es ist eine 1:1-Zuordnung, d.h. die "SurchargeTypeID" muß einer Kategorie zugeordnet sein, sie kann aber auch nicht mehreren Kategorien zugeordnet sein !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue surcharge_type_category_id = 10011;</code>
     */
    public function setSurchargeTypeCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->surcharge_type_category_id = $var;
    }

}

