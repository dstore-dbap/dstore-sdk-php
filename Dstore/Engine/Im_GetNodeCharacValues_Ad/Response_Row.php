<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacValues_Ad.proto

namespace Dstore\Engine\Im_GetNodeCharacValues_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetNodeCharacValues_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Sind zur "ValueID" sogenannte "ValueDetails" hinterlegt ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_details = 10001;</code>
     */
    private $has_details = null;
    /**
     * <pre>
     * ID des Merkmals, zu dem die Eigenschaft "ValueID" gehört
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10002;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <pre>
     * Eine Eigenschaft zum Merkmal "NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10003;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Sind zur "ValueID" "Binaries" gespeichert ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_binaries = 10004;</code>
     */
    private $has_binaries = null;
    /**
     * <pre>
     * Wird "ValueID" (evtl. auch/nur in der Historie) verwendet ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_used = 10005;</code>
     */
    private $is_used = null;
    /**
     * <pre>
     * ID einer Eigenschaft zum Merkmal "NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10006;</code>
     */
    private $value_id = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge der Eigenschaft "ValueID" innerhalb aller Eigenschaften zum Merkmal "NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10007;</code>
     */
    private $sort_no = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetNodeCharacValuesAd::initOnce();
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
     * Sind zur "ValueID" sogenannte "ValueDetails" hinterlegt ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_details = 10001;</code>
     */
    public function getHasDetails()
    {
        return $this->has_details;
    }

    /**
     * <pre>
     * Sind zur "ValueID" sogenannte "ValueDetails" hinterlegt ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_details = 10001;</code>
     */
    public function setHasDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->has_details = $var;
    }

    /**
     * <pre>
     * ID des Merkmals, zu dem die Eigenschaft "ValueID" gehört
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
     * ID des Merkmals, zu dem die Eigenschaft "ValueID" gehört
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
     * Eine Eigenschaft zum Merkmal "NodeCharacteristicID"
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
     * Eine Eigenschaft zum Merkmal "NodeCharacteristicID"
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
     * Sind zur "ValueID" "Binaries" gespeichert ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_binaries = 10004;</code>
     */
    public function getHasBinaries()
    {
        return $this->has_binaries;
    }

    /**
     * <pre>
     * Sind zur "ValueID" "Binaries" gespeichert ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_binaries = 10004;</code>
     */
    public function setHasBinaries(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->has_binaries = $var;
    }

    /**
     * <pre>
     * Wird "ValueID" (evtl. auch/nur in der Historie) verwendet ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_used = 10005;</code>
     */
    public function getIsUsed()
    {
        return $this->is_used;
    }

    /**
     * <pre>
     * Wird "ValueID" (evtl. auch/nur in der Historie) verwendet ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_used = 10005;</code>
     */
    public function setIsUsed(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->is_used = $var;
    }

    /**
     * <pre>
     * ID einer Eigenschaft zum Merkmal "NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10006;</code>
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * <pre>
     * ID einer Eigenschaft zum Merkmal "NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10006;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge der Eigenschaft "ValueID" innerhalb aller Eigenschaften zum Merkmal "NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10007;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge der Eigenschaft "ValueID" innerhalb aller Eigenschaften zum Merkmal "NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10007;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

}

