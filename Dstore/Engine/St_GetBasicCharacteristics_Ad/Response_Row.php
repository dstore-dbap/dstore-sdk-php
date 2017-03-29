<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetBasicCharacteristics_Ad.proto

namespace Dstore\Engine\St_GetBasicCharacteristics_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_GetBasicCharacteristics_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Es gibt Personen- und Artikel-Elemente-bezogene Statistiken. Hier wird angegeben, ob beim Erstellen von Statistiken (-&gt; "st_UpdateStatistics_Ad") Daten zu dieser Kennzahl in den Personen-bezogenen Statistiken gespeichert werden ("1") oder nicht ("0").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue evaluate_for_persons = 10001;</code>
     */
    private $evaluate_for_persons = null;
    /**
     * <pre>
     * Es gibt Personen- und Artikel-Elemente-bezogene Statistiken. Hier wird angegeben, ob beim Erstellen von Statistiken (-&gt; "st_UpdateStatistics_Ad") Daten zu dieser Kennzahl in den Elemente-bezogenen Statistiken gespeichert werden ("1") oder nicht ("0").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue evaluate_for_nodes = 10002;</code>
     */
    private $evaluate_for_nodes = null;
    /**
     * <pre>
     * Beschreibung der Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10003;</code>
     */
    private $description = null;
    /**
     * <pre>
     * Kurzbezeichnung der Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.StringValue basic_characteristic = 10004;</code>
     */
    private $basic_characteristic = null;
    /**
     * <pre>
     * Daten in "DSS_StatisticData" enthalten sowohl Besucher- als auch Personen-bezogene Statistiken (-&gt; "VisitorOrPersonID"). Pro Kennzahl ist hierdurch festgelegt, ob die Daten von Besuchern ("0") erzeugt werden oder nur von identifizierten Personen ("1").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue person_id_required = 10005;</code>
     */
    private $person_id_required = null;
    /**
     * <pre>
     * Nummer einer Basis-Kennzahl
     * </pre>
     *
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 10006;</code>
     */
    private $basic_characteristic_number = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StGetBasicCharacteristicsAd::initOnce();
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
     * Es gibt Personen- und Artikel-Elemente-bezogene Statistiken. Hier wird angegeben, ob beim Erstellen von Statistiken (-&gt; "st_UpdateStatistics_Ad") Daten zu dieser Kennzahl in den Personen-bezogenen Statistiken gespeichert werden ("1") oder nicht ("0").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue evaluate_for_persons = 10001;</code>
     */
    public function getEvaluateForPersons()
    {
        return $this->evaluate_for_persons;
    }

    /**
     * <pre>
     * Es gibt Personen- und Artikel-Elemente-bezogene Statistiken. Hier wird angegeben, ob beim Erstellen von Statistiken (-&gt; "st_UpdateStatistics_Ad") Daten zu dieser Kennzahl in den Personen-bezogenen Statistiken gespeichert werden ("1") oder nicht ("0").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue evaluate_for_persons = 10001;</code>
     */
    public function setEvaluateForPersons(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->evaluate_for_persons = $var;
    }

    /**
     * <pre>
     * Es gibt Personen- und Artikel-Elemente-bezogene Statistiken. Hier wird angegeben, ob beim Erstellen von Statistiken (-&gt; "st_UpdateStatistics_Ad") Daten zu dieser Kennzahl in den Elemente-bezogenen Statistiken gespeichert werden ("1") oder nicht ("0").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue evaluate_for_nodes = 10002;</code>
     */
    public function getEvaluateForNodes()
    {
        return $this->evaluate_for_nodes;
    }

    /**
     * <pre>
     * Es gibt Personen- und Artikel-Elemente-bezogene Statistiken. Hier wird angegeben, ob beim Erstellen von Statistiken (-&gt; "st_UpdateStatistics_Ad") Daten zu dieser Kennzahl in den Elemente-bezogenen Statistiken gespeichert werden ("1") oder nicht ("0").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue evaluate_for_nodes = 10002;</code>
     */
    public function setEvaluateForNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->evaluate_for_nodes = $var;
    }

    /**
     * <pre>
     * Beschreibung der Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10003;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Beschreibung der Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10003;</code>
     */
    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description = $var;
    }

    /**
     * <pre>
     * Kurzbezeichnung der Basis-Kennzahl "BasicCharacteristicNumber"
     * </pre>
     *
     * <code>.dstore.values.StringValue basic_characteristic = 10004;</code>
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
     * <code>.dstore.values.StringValue basic_characteristic = 10004;</code>
     */
    public function setBasicCharacteristic(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->basic_characteristic = $var;
    }

    /**
     * <pre>
     * Daten in "DSS_StatisticData" enthalten sowohl Besucher- als auch Personen-bezogene Statistiken (-&gt; "VisitorOrPersonID"). Pro Kennzahl ist hierdurch festgelegt, ob die Daten von Besuchern ("0") erzeugt werden oder nur von identifizierten Personen ("1").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue person_id_required = 10005;</code>
     */
    public function getPersonIdRequired()
    {
        return $this->person_id_required;
    }

    /**
     * <pre>
     * Daten in "DSS_StatisticData" enthalten sowohl Besucher- als auch Personen-bezogene Statistiken (-&gt; "VisitorOrPersonID"). Pro Kennzahl ist hierdurch festgelegt, ob die Daten von Besuchern ("0") erzeugt werden oder nur von identifizierten Personen ("1").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue person_id_required = 10005;</code>
     */
    public function setPersonIdRequired(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->person_id_required = $var;
    }

    /**
     * <pre>
     * Nummer einer Basis-Kennzahl
     * </pre>
     *
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 10006;</code>
     */
    public function getBasicCharacteristicNumber()
    {
        return $this->basic_characteristic_number;
    }

    /**
     * <pre>
     * Nummer einer Basis-Kennzahl
     * </pre>
     *
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 10006;</code>
     */
    public function setBasicCharacteristicNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->basic_characteristic_number = $var;
    }

}
