<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyNodeProperties_Ad.proto

namespace Dstore\Engine\Im_ModifyNodeProperties_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_ModifyNodeProperties_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines der in der Input-Schnittstelle übergebenen Artikel-Elemente
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10001;</code>
     */
    private $node_id = null;
    /**
     * <pre>
     * ID des Merkmals, zu dem eine Eigenschaft von "NodeID" geändert werden sollte, es aber einen Fehler gab
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10002;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <pre>
     * Fehler-Ursache :- "1" : Die Eigenschaft entspricht nicht dem Feldtyp- "2" : Die Eigenschaft existiert nicht, es sind aber nur vordefinierte Werte erlaubt- "3" : Der Wert der relativen Änderung ist ungültig- "4" : Fehlende Berechtigung(en)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10003;</code>
     */
    private $error_code = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImModifyNodePropertiesAd::initOnce();
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
     * ID eines der in der Input-Schnittstelle übergebenen Artikel-Elemente
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10001;</code>
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * <pre>
     * ID eines der in der Input-Schnittstelle übergebenen Artikel-Elemente
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10001;</code>
     */
    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_id = $var;
    }

    /**
     * <pre>
     * ID des Merkmals, zu dem eine Eigenschaft von "NodeID" geändert werden sollte, es aber einen Fehler gab
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10002;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <pre>
     * ID des Merkmals, zu dem eine Eigenschaft von "NodeID" geändert werden sollte, es aber einen Fehler gab
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10002;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <pre>
     * Fehler-Ursache :- "1" : Die Eigenschaft entspricht nicht dem Feldtyp- "2" : Die Eigenschaft existiert nicht, es sind aber nur vordefinierte Werte erlaubt- "3" : Der Wert der relativen Änderung ist ungültig- "4" : Fehlende Berechtigung(en)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10003;</code>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * <pre>
     * Fehler-Ursache :- "1" : Die Eigenschaft entspricht nicht dem Feldtyp- "2" : Die Eigenschaft existiert nicht, es sind aber nur vordefinierte Werte erlaubt- "3" : Der Wert der relativen Änderung ist ungültig- "4" : Fehlende Berechtigung(en)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10003;</code>
     */
    public function setErrorCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->error_code = $var;
    }

}

