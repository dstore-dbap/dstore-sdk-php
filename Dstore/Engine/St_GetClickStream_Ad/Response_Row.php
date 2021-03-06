<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetClickStream_Ad.proto

namespace Dstore\Engine\St_GetClickStream_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_GetClickStream_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * "0" : "Value" ist zur "VisitorOrPersonID" gespeichert"1" : "Value" ist zur "RelatedID" gespeichert
     * </pre>
     *
     * <code>.dstore.values.BooleanValue value_belongs_to_related_id = 10001;</code>
     */
    private $value_belongs_to_related_id = null;
    /**
     * <pre>
     * Bezeichnung von "NodeID". Entweder die Produktbezeichnung in der Standardsprache zum Zeitpunkt "DateAndTime" oder (falls nicht vorhanden) die "NodeDescription" (aus der Tabelle "dStore").
     * </pre>
     *
     * <code>.dstore.values.StringValue node_description = 10002;</code>
     */
    private $node_description = null;
    /**
     * <pre>
     * Falls "&#64;VisitorOrPersonIDsInOneID = 0" ist, steht hier die "&#64;PersonID" bzw. die "&#64;VisitorID", sonst eine der IDs, die in "tempdb.dbo.OneID" übergeben wurden
     * </pre>
     *
     * <code>.dstore.values.IntegerValue visitor_or_person_id = 10003;</code>
     */
    private $visitor_or_person_id = null;
    /**
     * <pre>
     * "DateAndTime" als "string" im Format "15.04.2001 14:32:55:250"
     * </pre>
     *
     * <code>.dstore.values.StringValue date_and_time_char = 10004;</code>
     */
    private $date_and_time_char = null;
    /**
     * <pre>
     * Kurzbezeichnung der Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.StringValue basic_characteristic = 10005;</code>
     */
    private $basic_characteristic = null;
    /**
     * <pre>
     * "1", falls zum Zeitpunkt "DateAndTime" zwischen "VisitorOrPersonID" und "RelatedID" eine Zuordnung bestand
     * </pre>
     *
     * <code>.dstore.values.BooleanValue relation_exists_at_date_and_time = 10006;</code>
     */
    private $relation_exists_at_date_and_time = null;
    /**
     * <pre>
     * ID eines Elementes aus "HistoryTreeView" (in dieser ist die Historie des gesamten Artikelbaums abgebildet), zu dem die statistische Information "Value" (zum Zeitpunkt "DateAndTime" in der Tabelle "DSS_StatisticData") gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10007;</code>
     */
    private $h_tree_node_id = null;
    /**
     * <pre>
     * ID des zur "HTreeNodeID" zugehörigen Artikel-Elementes (auf das sich die statistische Information bezieht)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10008;</code>
     */
    private $node_id = null;
    /**
     * <pre>
     * Die gespeicherte statistische Information zur Basis-Kennzahl "BasicCharacteristicNumber", z.Zt. entweder eine Anzahl (für die Basis-Kennzahl "Views" z.B.) oder ein Betrag in der Standardwährung (für die Basis-Kennzahl "Bestellumsatz")
     * </pre>
     *
     * <code>.dstore.values.DecimalValue value = 10009;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Zeitpunkt der statistischen Information "Value" zur Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue date_and_time = 10010;</code>
     */
    private $date_and_time = null;
    /**
     * <pre>
     * Immer "NULL", wenn "ValueBelongsToRelatedID = 0" ist. Ansonsten steht hier die ID des zugeordneten Besuchers bzw. der zugeordneten Person, zu der die statistische Information "Value" gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue related_id = 10011;</code>
     */
    private $related_id = null;
    /**
     * <pre>
     * Nummer der Basis-Kennzahl, auf die sich die Information "Value" bezieht (mögliche Werte : siehe "st_GetBasicCharacteristics_Ad")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 10012;</code>
     */
    private $basic_characteristic_number = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StGetClickStreamAd::initOnce();
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
     * "0" : "Value" ist zur "VisitorOrPersonID" gespeichert"1" : "Value" ist zur "RelatedID" gespeichert
     * </pre>
     *
     * <code>.dstore.values.BooleanValue value_belongs_to_related_id = 10001;</code>
     */
    public function getValueBelongsToRelatedId()
    {
        return $this->value_belongs_to_related_id;
    }

    /**
     * <pre>
     * "0" : "Value" ist zur "VisitorOrPersonID" gespeichert"1" : "Value" ist zur "RelatedID" gespeichert
     * </pre>
     *
     * <code>.dstore.values.BooleanValue value_belongs_to_related_id = 10001;</code>
     */
    public function setValueBelongsToRelatedId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->value_belongs_to_related_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung von "NodeID". Entweder die Produktbezeichnung in der Standardsprache zum Zeitpunkt "DateAndTime" oder (falls nicht vorhanden) die "NodeDescription" (aus der Tabelle "dStore").
     * </pre>
     *
     * <code>.dstore.values.StringValue node_description = 10002;</code>
     */
    public function getNodeDescription()
    {
        return $this->node_description;
    }

    /**
     * <pre>
     * Bezeichnung von "NodeID". Entweder die Produktbezeichnung in der Standardsprache zum Zeitpunkt "DateAndTime" oder (falls nicht vorhanden) die "NodeDescription" (aus der Tabelle "dStore").
     * </pre>
     *
     * <code>.dstore.values.StringValue node_description = 10002;</code>
     */
    public function setNodeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->node_description = $var;
    }

    /**
     * <pre>
     * Falls "&#64;VisitorOrPersonIDsInOneID = 0" ist, steht hier die "&#64;PersonID" bzw. die "&#64;VisitorID", sonst eine der IDs, die in "tempdb.dbo.OneID" übergeben wurden
     * </pre>
     *
     * <code>.dstore.values.IntegerValue visitor_or_person_id = 10003;</code>
     */
    public function getVisitorOrPersonId()
    {
        return $this->visitor_or_person_id;
    }

    /**
     * <pre>
     * Falls "&#64;VisitorOrPersonIDsInOneID = 0" ist, steht hier die "&#64;PersonID" bzw. die "&#64;VisitorID", sonst eine der IDs, die in "tempdb.dbo.OneID" übergeben wurden
     * </pre>
     *
     * <code>.dstore.values.IntegerValue visitor_or_person_id = 10003;</code>
     */
    public function setVisitorOrPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->visitor_or_person_id = $var;
    }

    /**
     * <pre>
     * "DateAndTime" als "string" im Format "15.04.2001 14:32:55:250"
     * </pre>
     *
     * <code>.dstore.values.StringValue date_and_time_char = 10004;</code>
     */
    public function getDateAndTimeChar()
    {
        return $this->date_and_time_char;
    }

    /**
     * <pre>
     * "DateAndTime" als "string" im Format "15.04.2001 14:32:55:250"
     * </pre>
     *
     * <code>.dstore.values.StringValue date_and_time_char = 10004;</code>
     */
    public function setDateAndTimeChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->date_and_time_char = $var;
    }

    /**
     * <pre>
     * Kurzbezeichnung der Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.StringValue basic_characteristic = 10005;</code>
     */
    public function getBasicCharacteristic()
    {
        return $this->basic_characteristic;
    }

    /**
     * <pre>
     * Kurzbezeichnung der Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.StringValue basic_characteristic = 10005;</code>
     */
    public function setBasicCharacteristic(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->basic_characteristic = $var;
    }

    /**
     * <pre>
     * "1", falls zum Zeitpunkt "DateAndTime" zwischen "VisitorOrPersonID" und "RelatedID" eine Zuordnung bestand
     * </pre>
     *
     * <code>.dstore.values.BooleanValue relation_exists_at_date_and_time = 10006;</code>
     */
    public function getRelationExistsAtDateAndTime()
    {
        return $this->relation_exists_at_date_and_time;
    }

    /**
     * <pre>
     * "1", falls zum Zeitpunkt "DateAndTime" zwischen "VisitorOrPersonID" und "RelatedID" eine Zuordnung bestand
     * </pre>
     *
     * <code>.dstore.values.BooleanValue relation_exists_at_date_and_time = 10006;</code>
     */
    public function setRelationExistsAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->relation_exists_at_date_and_time = $var;
    }

    /**
     * <pre>
     * ID eines Elementes aus "HistoryTreeView" (in dieser ist die Historie des gesamten Artikelbaums abgebildet), zu dem die statistische Information "Value" (zum Zeitpunkt "DateAndTime" in der Tabelle "DSS_StatisticData") gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10007;</code>
     */
    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    /**
     * <pre>
     * ID eines Elementes aus "HistoryTreeView" (in dieser ist die Historie des gesamten Artikelbaums abgebildet), zu dem die statistische Information "Value" (zum Zeitpunkt "DateAndTime" in der Tabelle "DSS_StatisticData") gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10007;</code>
     */
    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->h_tree_node_id = $var;
    }

    /**
     * <pre>
     * ID des zur "HTreeNodeID" zugehörigen Artikel-Elementes (auf das sich die statistische Information bezieht)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10008;</code>
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * <pre>
     * ID des zur "HTreeNodeID" zugehörigen Artikel-Elementes (auf das sich die statistische Information bezieht)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10008;</code>
     */
    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_id = $var;
    }

    /**
     * <pre>
     * Die gespeicherte statistische Information zur Basis-Kennzahl "BasicCharacteristicNumber", z.Zt. entweder eine Anzahl (für die Basis-Kennzahl "Views" z.B.) oder ein Betrag in der Standardwährung (für die Basis-Kennzahl "Bestellumsatz")
     * </pre>
     *
     * <code>.dstore.values.DecimalValue value = 10009;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Die gespeicherte statistische Information zur Basis-Kennzahl "BasicCharacteristicNumber", z.Zt. entweder eine Anzahl (für die Basis-Kennzahl "Views" z.B.) oder ein Betrag in der Standardwährung (für die Basis-Kennzahl "Bestellumsatz")
     * </pre>
     *
     * <code>.dstore.values.DecimalValue value = 10009;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * Zeitpunkt der statistischen Information "Value" zur Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue date_and_time = 10010;</code>
     */
    public function getDateAndTime()
    {
        return $this->date_and_time;
    }

    /**
     * <pre>
     * Zeitpunkt der statistischen Information "Value" zur Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue date_and_time = 10010;</code>
     */
    public function setDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->date_and_time = $var;
    }

    /**
     * <pre>
     * Immer "NULL", wenn "ValueBelongsToRelatedID = 0" ist. Ansonsten steht hier die ID des zugeordneten Besuchers bzw. der zugeordneten Person, zu der die statistische Information "Value" gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue related_id = 10011;</code>
     */
    public function getRelatedId()
    {
        return $this->related_id;
    }

    /**
     * <pre>
     * Immer "NULL", wenn "ValueBelongsToRelatedID = 0" ist. Ansonsten steht hier die ID des zugeordneten Besuchers bzw. der zugeordneten Person, zu der die statistische Information "Value" gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue related_id = 10011;</code>
     */
    public function setRelatedId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->related_id = $var;
    }

    /**
     * <pre>
     * Nummer der Basis-Kennzahl, auf die sich die Information "Value" bezieht (mögliche Werte : siehe "st_GetBasicCharacteristics_Ad")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 10012;</code>
     */
    public function getBasicCharacteristicNumber()
    {
        return $this->basic_characteristic_number;
    }

    /**
     * <pre>
     * Nummer der Basis-Kennzahl, auf die sich die Information "Value" bezieht (mögliche Werte : siehe "st_GetBasicCharacteristics_Ad")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 10012;</code>
     */
    public function setBasicCharacteristicNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->basic_characteristic_number = $var;
    }

}

