<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetSettingEntry.proto

namespace Dstore\Engine\Mi_GetSettingEntry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetSettingEntry.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Der für den Benutzer "&#64;UserID" zum Schlüssel "&#64;KeyVariable" hinterlegte Wert
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10001;</code>
     */
    private $value = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetSettingEntry::initOnce();
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
     * Der für den Benutzer "&#64;UserID" zum Schlüssel "&#64;KeyVariable" hinterlegte Wert
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
     * Der für den Benutzer "&#64;UserID" zum Schlüssel "&#64;KeyVariable" hinterlegte Wert
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10001;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

}

