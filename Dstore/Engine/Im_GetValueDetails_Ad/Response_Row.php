<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetValueDetails_Ad.proto

namespace Dstore\Engine\Im_GetValueDetails_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetValueDetails_Ad.Response.Row</code>
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
     * ID eines Merkmals. Entspricht entweder "&#64;NodeCharacteristicID" oder es ist die ID des zur "&#64;ValueID" zugehörigen Merkmals.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10002;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <pre>
     * Eigenschaft zum Merkmal "NodeCharacteristicID". Entspricht entweder "&#64;Value" oder ist der "Klartext" für die durch "&#64;ValueID" angegebene Eigenschaft.
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10003;</code>
     */
    private $value = null;
    /**
     * <pre>
     * ID einer Eigenschaft. Entspricht entweder "&#64;ValueID" oder es ist die zugehörige ID der durch "&#64;NodeCharacteristicID" und "&#64;Value" angegebenen Eigenschaft.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10004;</code>
     */
    private $value_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetValueDetailsAd::initOnce();
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
     * ID eines Merkmals. Entspricht entweder "&#64;NodeCharacteristicID" oder es ist die ID des zur "&#64;ValueID" zugehörigen Merkmals.
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
     * ID eines Merkmals. Entspricht entweder "&#64;NodeCharacteristicID" oder es ist die ID des zur "&#64;ValueID" zugehörigen Merkmals.
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
     * Eigenschaft zum Merkmal "NodeCharacteristicID". Entspricht entweder "&#64;Value" oder ist der "Klartext" für die durch "&#64;ValueID" angegebene Eigenschaft.
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10003;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Eigenschaft zum Merkmal "NodeCharacteristicID". Entspricht entweder "&#64;Value" oder ist der "Klartext" für die durch "&#64;ValueID" angegebene Eigenschaft.
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10003;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * ID einer Eigenschaft. Entspricht entweder "&#64;ValueID" oder es ist die zugehörige ID der durch "&#64;NodeCharacteristicID" und "&#64;Value" angegebenen Eigenschaft.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10004;</code>
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * <pre>
     * ID einer Eigenschaft. Entspricht entweder "&#64;ValueID" oder es ist die zugehörige ID der durch "&#64;NodeCharacteristicID" und "&#64;Value" angegebenen Eigenschaft.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10004;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

}

