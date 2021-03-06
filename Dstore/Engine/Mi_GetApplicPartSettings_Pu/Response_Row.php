<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetApplicPartSettings_Pu.proto

namespace Dstore\Engine\Mi_GetApplicPartSettings_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetApplicPartSettings_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Der Wert, der zum Schlüssel "KeyVariable" für den Benutzer , der diese Prozedur aufruft (bzw. für den "globalen" Benutzer) hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10001;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Ein Schlüssel, zu dem der Wert "Value" für den Benutzer, der diese Prozedur aufruft (bzw. für den "globalen" Benutzer) hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 10002;</code>
     */
    private $key_variable = null;
    /**
     * <pre>
     * ID eines Teils einer "dStore"-Anwendung, zu dem die Einstellung "Value" hinterlegt ist (entspricht entweder "&#64;ApplicationID" oder einer ID, die via "tempdb.dbo.OneID" übergeben wurde)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue application_part_id = 10003;</code>
     */
    private $application_part_id = null;
    /**
     * <pre>
     * "1", falls "Value" zur "UserID = -1" gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.BooleanValue value_derived_from_global_user = 10004;</code>
     */
    private $value_derived_from_global_user = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetApplicPartSettingsPu::initOnce();
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
     * Der Wert, der zum Schlüssel "KeyVariable" für den Benutzer , der diese Prozedur aufruft (bzw. für den "globalen" Benutzer) hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10001;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Der Wert, der zum Schlüssel "KeyVariable" für den Benutzer , der diese Prozedur aufruft (bzw. für den "globalen" Benutzer) hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10001;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * Ein Schlüssel, zu dem der Wert "Value" für den Benutzer, der diese Prozedur aufruft (bzw. für den "globalen" Benutzer) hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 10002;</code>
     */
    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    /**
     * <pre>
     * Ein Schlüssel, zu dem der Wert "Value" für den Benutzer, der diese Prozedur aufruft (bzw. für den "globalen" Benutzer) hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 10002;</code>
     */
    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->key_variable = $var;
    }

    /**
     * <pre>
     * ID eines Teils einer "dStore"-Anwendung, zu dem die Einstellung "Value" hinterlegt ist (entspricht entweder "&#64;ApplicationID" oder einer ID, die via "tempdb.dbo.OneID" übergeben wurde)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue application_part_id = 10003;</code>
     */
    public function getApplicationPartId()
    {
        return $this->application_part_id;
    }

    /**
     * <pre>
     * ID eines Teils einer "dStore"-Anwendung, zu dem die Einstellung "Value" hinterlegt ist (entspricht entweder "&#64;ApplicationID" oder einer ID, die via "tempdb.dbo.OneID" übergeben wurde)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue application_part_id = 10003;</code>
     */
    public function setApplicationPartId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->application_part_id = $var;
    }

    /**
     * <pre>
     * "1", falls "Value" zur "UserID = -1" gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.BooleanValue value_derived_from_global_user = 10004;</code>
     */
    public function getValueDerivedFromGlobalUser()
    {
        return $this->value_derived_from_global_user;
    }

    /**
     * <pre>
     * "1", falls "Value" zur "UserID = -1" gespeichert ist
     * </pre>
     *
     * <code>.dstore.values.BooleanValue value_derived_from_global_user = 10004;</code>
     */
    public function setValueDerivedFromGlobalUser(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->value_derived_from_global_user = $var;
    }

}

