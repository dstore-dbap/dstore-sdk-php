<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetValueDetails_Pu.proto

namespace Dstore\Engine\Im_GetValueDetails_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetValueDetails_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Details zur Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.StringValue details = 10001;</code>
     */
    private $details = null;
    /**
     * <pre>
     * Die aktuelle Eigenschaft des Elementes "&#64;TreeNodeID" zum Merkmal "&#64;NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    private $value = null;
    /**
     * <pre>
     * ID der aktuellen Eigenschaft ("Value") des Elementes "&#64;TreeNodeID" zum Merkmal "&#64;NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10003;</code>
     */
    private $value_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetValueDetailsPu::initOnce();
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
     * Details zur Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.StringValue details = 10001;</code>
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * <pre>
     * Details zur Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.StringValue details = 10001;</code>
     */
    public function setDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->details = $var;
    }

    /**
     * <pre>
     * Die aktuelle Eigenschaft des Elementes "&#64;TreeNodeID" zum Merkmal "&#64;NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Die aktuelle Eigenschaft des Elementes "&#64;TreeNodeID" zum Merkmal "&#64;NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * ID der aktuellen Eigenschaft ("Value") des Elementes "&#64;TreeNodeID" zum Merkmal "&#64;NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10003;</code>
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * <pre>
     * ID der aktuellen Eigenschaft ("Value") des Elementes "&#64;TreeNodeID" zum Merkmal "&#64;NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10003;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

}

