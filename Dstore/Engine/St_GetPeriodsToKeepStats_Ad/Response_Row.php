<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetPeriodsToKeepStats_Ad.proto

namespace Dstore\Engine\St_GetPeriodsToKeepStats_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_GetPeriodsToKeepStats_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Name einer Statistik-Tabelle. Mögliche Werte : siehe Beschreibung.
     * </pre>
     *
     * <code>.dstore.values.StringValue table_name = 10001;</code>
     */
    private $table_name = null;
    /**
     * <pre>
     * Nummer einer Hierarchie. Falls hier "NULL" steht, gilt der Aufbewahrungszeitraum "KeepStatistics" für Daten zu Elementen mit einer beliebigen Hierarchie. Allerdings hat ein konfigurierter Wert für eine bestimmte Hierarchie Vorrang !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10002;</code>
     */
    private $level_no = null;
    /**
     * <pre>
     * Bezeichnung der Hierarchie "LevelNo"
     * </pre>
     *
     * <code>.dstore.values.StringValue level_description = 10003;</code>
     */
    private $level_description = null;
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
     * Anzahl Einheiten ("TimeUnit"), die die Daten zur Basis-Kennzahl "BasicCharacteristicNumber" für Elemente der Hierarchie "LevelNo" aufbewahrt werden sollen (also z.B. 30 Tage)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue keep_statistics = 10005;</code>
     */
    private $keep_statistics = null;
    /**
     * <pre>
     * Einheit, in der "KeepStatistics" angegeben ist. Mögliche Werte sind : "Days", "Months" und "Weeks".
     * </pre>
     *
     * <code>.dstore.values.StringValue time_unit = 10006;</code>
     */
    private $time_unit = null;
    /**
     * <pre>
     * Nummer einer Basis-Kennzahl. Falls hier "NULL" steht, gilt der Aufbewahrungszeitraum "KeepStatistics" für Daten zu beliebigen Basis-Kennzahlen. Allerdings hat ein konfigurierter Wert für eine bestimmte Basis-Kennzahl Vorrang !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 10007;</code>
     */
    private $basic_characteristic_number = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StGetPeriodsToKeepStatsAd::initOnce();
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
     * Name einer Statistik-Tabelle. Mögliche Werte : siehe Beschreibung.
     * </pre>
     *
     * <code>.dstore.values.StringValue table_name = 10001;</code>
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * <pre>
     * Name einer Statistik-Tabelle. Mögliche Werte : siehe Beschreibung.
     * </pre>
     *
     * <code>.dstore.values.StringValue table_name = 10001;</code>
     */
    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->table_name = $var;
    }

    /**
     * <pre>
     * Nummer einer Hierarchie. Falls hier "NULL" steht, gilt der Aufbewahrungszeitraum "KeepStatistics" für Daten zu Elementen mit einer beliebigen Hierarchie. Allerdings hat ein konfigurierter Wert für eine bestimmte Hierarchie Vorrang !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10002;</code>
     */
    public function getLevelNo()
    {
        return $this->level_no;
    }

    /**
     * <pre>
     * Nummer einer Hierarchie. Falls hier "NULL" steht, gilt der Aufbewahrungszeitraum "KeepStatistics" für Daten zu Elementen mit einer beliebigen Hierarchie. Allerdings hat ein konfigurierter Wert für eine bestimmte Hierarchie Vorrang !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10002;</code>
     */
    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->level_no = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Hierarchie "LevelNo"
     * </pre>
     *
     * <code>.dstore.values.StringValue level_description = 10003;</code>
     */
    public function getLevelDescription()
    {
        return $this->level_description;
    }

    /**
     * <pre>
     * Bezeichnung der Hierarchie "LevelNo"
     * </pre>
     *
     * <code>.dstore.values.StringValue level_description = 10003;</code>
     */
    public function setLevelDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->level_description = $var;
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
     * Anzahl Einheiten ("TimeUnit"), die die Daten zur Basis-Kennzahl "BasicCharacteristicNumber" für Elemente der Hierarchie "LevelNo" aufbewahrt werden sollen (also z.B. 30 Tage)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue keep_statistics = 10005;</code>
     */
    public function getKeepStatistics()
    {
        return $this->keep_statistics;
    }

    /**
     * <pre>
     * Anzahl Einheiten ("TimeUnit"), die die Daten zur Basis-Kennzahl "BasicCharacteristicNumber" für Elemente der Hierarchie "LevelNo" aufbewahrt werden sollen (also z.B. 30 Tage)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue keep_statistics = 10005;</code>
     */
    public function setKeepStatistics(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->keep_statistics = $var;
    }

    /**
     * <pre>
     * Einheit, in der "KeepStatistics" angegeben ist. Mögliche Werte sind : "Days", "Months" und "Weeks".
     * </pre>
     *
     * <code>.dstore.values.StringValue time_unit = 10006;</code>
     */
    public function getTimeUnit()
    {
        return $this->time_unit;
    }

    /**
     * <pre>
     * Einheit, in der "KeepStatistics" angegeben ist. Mögliche Werte sind : "Days", "Months" und "Weeks".
     * </pre>
     *
     * <code>.dstore.values.StringValue time_unit = 10006;</code>
     */
    public function setTimeUnit(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->time_unit = $var;
    }

    /**
     * <pre>
     * Nummer einer Basis-Kennzahl. Falls hier "NULL" steht, gilt der Aufbewahrungszeitraum "KeepStatistics" für Daten zu beliebigen Basis-Kennzahlen. Allerdings hat ein konfigurierter Wert für eine bestimmte Basis-Kennzahl Vorrang !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 10007;</code>
     */
    public function getBasicCharacteristicNumber()
    {
        return $this->basic_characteristic_number;
    }

    /**
     * <pre>
     * Nummer einer Basis-Kennzahl. Falls hier "NULL" steht, gilt der Aufbewahrungszeitraum "KeepStatistics" für Daten zu beliebigen Basis-Kennzahlen. Allerdings hat ein konfigurierter Wert für eine bestimmte Basis-Kennzahl Vorrang !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 10007;</code>
     */
    public function setBasicCharacteristicNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->basic_characteristic_number = $var;
    }

}

