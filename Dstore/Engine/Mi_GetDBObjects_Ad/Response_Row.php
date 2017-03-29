<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetDBObjects_Ad.proto

namespace Dstore\Engine\Mi_GetDBObjects_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetDBObjects_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Um welche "Art" von Objekt es sich bei "DependentObjectID" handelt ("NULL", wenn "&#64;GetDependentObjects = 0"). Derzeit mögliche Werte :- "Trigger"- "Index"
     * </pre>
     *
     * <code>.dstore.values.StringValue dependent_object_type = 10001;</code>
     */
    private $dependent_object_type = null;
    /**
     * <pre>
     * Objekt-"Typ", mögl. Werte :"StoredProc" (Prozeduren)"UserTable" (Tabellen, KEINE "System"-Tab.)"SystemTable" ("System"-Tabellen)"Trigger""User" (Datenbank-Benutzer)"SQLFunct" (SQL-Funktionen)&lt;type&gt; : Wert i. d. Spalte "type" v. "sysobjects"
     * </pre>
     *
     * <code>.dstore.values.StringValue object_type = 10002;</code>
     */
    private $object_type = null;
    /**
     * <pre>
     * ID des Objekts in der durch "DefinedInSystemTable" angegebenen "System"-Tabelle der Datenbank
     * </pre>
     *
     * <code>.dstore.values.IntegerValue object_id = 10003;</code>
     */
    private $object_id = null;
    /**
     * <pre>
     * Name der Datenbank, in der "ObjectName" gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.StringValue database_name = 10004;</code>
     */
    private $database_name = null;
    /**
     * <pre>
     * Wann das Objekt zuletzt neu erstellt wurde. ACHTUNG : Kann "NULL" sein, falls nicht bekannt (z.B. wenn "ObjectType" den Wert "User" enthält)
     * </pre>
     *
     * <code>.dstore.values.TimestampValue object_last_created_at = 10005;</code>
     */
    private $object_last_created_at = null;
    /**
     * <pre>
     * In welcher "System"-Tabelle der Datenbank das Objekt definiert ist
     * </pre>
     *
     * <code>.dstore.values.StringValue defined_in_system_table = 10006;</code>
     */
    private $defined_in_system_table = null;
    /**
     * <pre>
     * Name des Objekts "DependentObjectID" ("NULL", wenn "&#64;GetDependentObjects = 0")
     * </pre>
     *
     * <code>.dstore.values.StringValue dependent_object_name = 10007;</code>
     */
    private $dependent_object_name = null;
    /**
     * <pre>
     * Name des Datenbank-Objektes
     * </pre>
     *
     * <code>.dstore.values.StringValue object_name = 10008;</code>
     */
    private $object_name = null;
    /**
     * <pre>
     * ID eines Objekts, das vom Objekt "ObjectID" in der Form abhängt, daß es ohne "ObjectID" nicht in der Datenbank existieren kann. Wird nur gefüllt, wenn "&#64;GetDependentObjects = 1" angegeben wird (sonst steht hier "NULL"). s. a. Beschreibung.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue dependent_object_id = 10009;</code>
     */
    private $dependent_object_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetDBObjectsAd::initOnce();
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
     * Um welche "Art" von Objekt es sich bei "DependentObjectID" handelt ("NULL", wenn "&#64;GetDependentObjects = 0"). Derzeit mögliche Werte :- "Trigger"- "Index"
     * </pre>
     *
     * <code>.dstore.values.StringValue dependent_object_type = 10001;</code>
     */
    public function getDependentObjectType()
    {
        return $this->dependent_object_type;
    }

    /**
     * <pre>
     * Um welche "Art" von Objekt es sich bei "DependentObjectID" handelt ("NULL", wenn "&#64;GetDependentObjects = 0"). Derzeit mögliche Werte :- "Trigger"- "Index"
     * </pre>
     *
     * <code>.dstore.values.StringValue dependent_object_type = 10001;</code>
     */
    public function setDependentObjectType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->dependent_object_type = $var;
    }

    /**
     * <pre>
     * Objekt-"Typ", mögl. Werte :"StoredProc" (Prozeduren)"UserTable" (Tabellen, KEINE "System"-Tab.)"SystemTable" ("System"-Tabellen)"Trigger""User" (Datenbank-Benutzer)"SQLFunct" (SQL-Funktionen)&lt;type&gt; : Wert i. d. Spalte "type" v. "sysobjects"
     * </pre>
     *
     * <code>.dstore.values.StringValue object_type = 10002;</code>
     */
    public function getObjectType()
    {
        return $this->object_type;
    }

    /**
     * <pre>
     * Objekt-"Typ", mögl. Werte :"StoredProc" (Prozeduren)"UserTable" (Tabellen, KEINE "System"-Tab.)"SystemTable" ("System"-Tabellen)"Trigger""User" (Datenbank-Benutzer)"SQLFunct" (SQL-Funktionen)&lt;type&gt; : Wert i. d. Spalte "type" v. "sysobjects"
     * </pre>
     *
     * <code>.dstore.values.StringValue object_type = 10002;</code>
     */
    public function setObjectType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->object_type = $var;
    }

    /**
     * <pre>
     * ID des Objekts in der durch "DefinedInSystemTable" angegebenen "System"-Tabelle der Datenbank
     * </pre>
     *
     * <code>.dstore.values.IntegerValue object_id = 10003;</code>
     */
    public function getObjectId()
    {
        return $this->object_id;
    }

    /**
     * <pre>
     * ID des Objekts in der durch "DefinedInSystemTable" angegebenen "System"-Tabelle der Datenbank
     * </pre>
     *
     * <code>.dstore.values.IntegerValue object_id = 10003;</code>
     */
    public function setObjectId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->object_id = $var;
    }

    /**
     * <pre>
     * Name der Datenbank, in der "ObjectName" gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.StringValue database_name = 10004;</code>
     */
    public function getDatabaseName()
    {
        return $this->database_name;
    }

    /**
     * <pre>
     * Name der Datenbank, in der "ObjectName" gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.StringValue database_name = 10004;</code>
     */
    public function setDatabaseName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->database_name = $var;
    }

    /**
     * <pre>
     * Wann das Objekt zuletzt neu erstellt wurde. ACHTUNG : Kann "NULL" sein, falls nicht bekannt (z.B. wenn "ObjectType" den Wert "User" enthält)
     * </pre>
     *
     * <code>.dstore.values.TimestampValue object_last_created_at = 10005;</code>
     */
    public function getObjectLastCreatedAt()
    {
        return $this->object_last_created_at;
    }

    /**
     * <pre>
     * Wann das Objekt zuletzt neu erstellt wurde. ACHTUNG : Kann "NULL" sein, falls nicht bekannt (z.B. wenn "ObjectType" den Wert "User" enthält)
     * </pre>
     *
     * <code>.dstore.values.TimestampValue object_last_created_at = 10005;</code>
     */
    public function setObjectLastCreatedAt(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->object_last_created_at = $var;
    }

    /**
     * <pre>
     * In welcher "System"-Tabelle der Datenbank das Objekt definiert ist
     * </pre>
     *
     * <code>.dstore.values.StringValue defined_in_system_table = 10006;</code>
     */
    public function getDefinedInSystemTable()
    {
        return $this->defined_in_system_table;
    }

    /**
     * <pre>
     * In welcher "System"-Tabelle der Datenbank das Objekt definiert ist
     * </pre>
     *
     * <code>.dstore.values.StringValue defined_in_system_table = 10006;</code>
     */
    public function setDefinedInSystemTable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->defined_in_system_table = $var;
    }

    /**
     * <pre>
     * Name des Objekts "DependentObjectID" ("NULL", wenn "&#64;GetDependentObjects = 0")
     * </pre>
     *
     * <code>.dstore.values.StringValue dependent_object_name = 10007;</code>
     */
    public function getDependentObjectName()
    {
        return $this->dependent_object_name;
    }

    /**
     * <pre>
     * Name des Objekts "DependentObjectID" ("NULL", wenn "&#64;GetDependentObjects = 0")
     * </pre>
     *
     * <code>.dstore.values.StringValue dependent_object_name = 10007;</code>
     */
    public function setDependentObjectName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->dependent_object_name = $var;
    }

    /**
     * <pre>
     * Name des Datenbank-Objektes
     * </pre>
     *
     * <code>.dstore.values.StringValue object_name = 10008;</code>
     */
    public function getObjectName()
    {
        return $this->object_name;
    }

    /**
     * <pre>
     * Name des Datenbank-Objektes
     * </pre>
     *
     * <code>.dstore.values.StringValue object_name = 10008;</code>
     */
    public function setObjectName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->object_name = $var;
    }

    /**
     * <pre>
     * ID eines Objekts, das vom Objekt "ObjectID" in der Form abhängt, daß es ohne "ObjectID" nicht in der Datenbank existieren kann. Wird nur gefüllt, wenn "&#64;GetDependentObjects = 1" angegeben wird (sonst steht hier "NULL"). s. a. Beschreibung.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue dependent_object_id = 10009;</code>
     */
    public function getDependentObjectId()
    {
        return $this->dependent_object_id;
    }

    /**
     * <pre>
     * ID eines Objekts, das vom Objekt "ObjectID" in der Form abhängt, daß es ohne "ObjectID" nicht in der Datenbank existieren kann. Wird nur gefüllt, wenn "&#64;GetDependentObjects = 1" angegeben wird (sonst steht hier "NULL"). s. a. Beschreibung.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue dependent_object_id = 10009;</code>
     */
    public function setDependentObjectId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->dependent_object_id = $var;
    }

}

