<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetImportErrors_Ad.proto

namespace Dstore\Engine\Im_GetImportErrors_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetImportErrors_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Die "Artikelnummer" des Produkts oder der Variante bei deren Bearbeitung der Fehler aufgetreten ist
     * </pre>
     *
     * <code>.dstore.values.StringValue variant_or_item_no = 10001;</code>
     */
    private $variant_or_item_no = null;
    /**
     * <pre>
     * Die MerkmalID in deren Zusammenhang der Fehler aufgetreten ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10002;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <pre>
     * Der Wert zur "NodeCharacteristicID", in dessen Zusammenhang der Fehler aufgetreten ist
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10003;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Der Zeitpunkt an dem der Fehler aufgetreten ist
     * </pre>
     *
     * <code>.dstore.values.TimestampValue date_and_time = 10004;</code>
     */
    private $date_and_time = null;
    /**
     * <pre>
     * Der aufgetretene ErrorCode (s. Beschreibung von "im_ImportItemData_Ad")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10005;</code>
     */
    private $error_code = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetImportErrorsAd::initOnce();
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
     * Die "Artikelnummer" des Produkts oder der Variante bei deren Bearbeitung der Fehler aufgetreten ist
     * </pre>
     *
     * <code>.dstore.values.StringValue variant_or_item_no = 10001;</code>
     */
    public function getVariantOrItemNo()
    {
        return $this->variant_or_item_no;
    }

    /**
     * <pre>
     * Die "Artikelnummer" des Produkts oder der Variante bei deren Bearbeitung der Fehler aufgetreten ist
     * </pre>
     *
     * <code>.dstore.values.StringValue variant_or_item_no = 10001;</code>
     */
    public function setVariantOrItemNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->variant_or_item_no = $var;
    }

    /**
     * <pre>
     * Die MerkmalID in deren Zusammenhang der Fehler aufgetreten ist
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
     * Die MerkmalID in deren Zusammenhang der Fehler aufgetreten ist
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
     * Der Wert zur "NodeCharacteristicID", in dessen Zusammenhang der Fehler aufgetreten ist
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
     * Der Wert zur "NodeCharacteristicID", in dessen Zusammenhang der Fehler aufgetreten ist
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
     * Der Zeitpunkt an dem der Fehler aufgetreten ist
     * </pre>
     *
     * <code>.dstore.values.TimestampValue date_and_time = 10004;</code>
     */
    public function getDateAndTime()
    {
        return $this->date_and_time;
    }

    /**
     * <pre>
     * Der Zeitpunkt an dem der Fehler aufgetreten ist
     * </pre>
     *
     * <code>.dstore.values.TimestampValue date_and_time = 10004;</code>
     */
    public function setDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->date_and_time = $var;
    }

    /**
     * <pre>
     * Der aufgetretene ErrorCode (s. Beschreibung von "im_ImportItemData_Ad")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10005;</code>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * <pre>
     * Der aufgetretene ErrorCode (s. Beschreibung von "im_ImportItemData_Ad")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10005;</code>
     */
    public function setErrorCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->error_code = $var;
    }

}
