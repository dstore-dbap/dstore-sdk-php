<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodePropertiesHistory_Ad.proto

namespace Dstore\Engine\Im_GetNodePropertiesHistory_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetNodePropertiesHistory_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Ende des Gültigkeits-Zeitraums der Eigenschaft "Value" für "NodeID"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_to = 10001;</code>
     */
    private $valid_to = null;
    /**
     * <pre>
     * ID eines (übergebenen) Artikel-Elementes, das im Zeitraum "ValidFrom" bis "ValidTo" die Eigenschaft "Value" zum Merkmal "NodeCharacteristicID" besaß/besitzt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10002;</code>
     */
    private $node_id = null;
    /**
     * <pre>
     * ID des Merkmals, zu dem "NodeID" im Zeitraum "ValidFrom" bis "ValidTo" die Eigenschaft "Value" besaß/besitzt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10003;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <pre>
     * "ValidTo" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_to_char = 10004;</code>
     */
    private $valid_to_char = null;
    /**
     * <pre>
     * Eine Eigenschaft zum Merkmal "NodeCharacteristicID", die dem Element "NodeID" im Zeitraum "ValidFrom" bis "ValidTo"  zugewiesen ist / war
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10005;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Beginn des Gültigkeits-Zeitraums der Eigenschaft "Value" für "NodeID"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_from = 10006;</code>
     */
    private $valid_from = null;
    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10007;</code>
     */
    private $value_id = null;
    /**
     * <pre>
     * "ValidFrom" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_from_char = 10008;</code>
     */
    private $valid_from_char = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetNodePropertiesHistoryAd::initOnce();
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
     * Ende des Gültigkeits-Zeitraums der Eigenschaft "Value" für "NodeID"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_to = 10001;</code>
     */
    public function getValidTo()
    {
        return $this->valid_to;
    }

    /**
     * <pre>
     * Ende des Gültigkeits-Zeitraums der Eigenschaft "Value" für "NodeID"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_to = 10001;</code>
     */
    public function setValidTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_to = $var;
    }

    /**
     * <pre>
     * ID eines (übergebenen) Artikel-Elementes, das im Zeitraum "ValidFrom" bis "ValidTo" die Eigenschaft "Value" zum Merkmal "NodeCharacteristicID" besaß/besitzt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10002;</code>
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * <pre>
     * ID eines (übergebenen) Artikel-Elementes, das im Zeitraum "ValidFrom" bis "ValidTo" die Eigenschaft "Value" zum Merkmal "NodeCharacteristicID" besaß/besitzt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10002;</code>
     */
    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_id = $var;
    }

    /**
     * <pre>
     * ID des Merkmals, zu dem "NodeID" im Zeitraum "ValidFrom" bis "ValidTo" die Eigenschaft "Value" besaß/besitzt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10003;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <pre>
     * ID des Merkmals, zu dem "NodeID" im Zeitraum "ValidFrom" bis "ValidTo" die Eigenschaft "Value" besaß/besitzt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10003;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <pre>
     * "ValidTo" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_to_char = 10004;</code>
     */
    public function getValidToChar()
    {
        return $this->valid_to_char;
    }

    /**
     * <pre>
     * "ValidTo" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_to_char = 10004;</code>
     */
    public function setValidToChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->valid_to_char = $var;
    }

    /**
     * <pre>
     * Eine Eigenschaft zum Merkmal "NodeCharacteristicID", die dem Element "NodeID" im Zeitraum "ValidFrom" bis "ValidTo"  zugewiesen ist / war
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10005;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Eine Eigenschaft zum Merkmal "NodeCharacteristicID", die dem Element "NodeID" im Zeitraum "ValidFrom" bis "ValidTo"  zugewiesen ist / war
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10005;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * Beginn des Gültigkeits-Zeitraums der Eigenschaft "Value" für "NodeID"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_from = 10006;</code>
     */
    public function getValidFrom()
    {
        return $this->valid_from;
    }

    /**
     * <pre>
     * Beginn des Gültigkeits-Zeitraums der Eigenschaft "Value" für "NodeID"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_from = 10006;</code>
     */
    public function setValidFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_from = $var;
    }

    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10007;</code>
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10007;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

    /**
     * <pre>
     * "ValidFrom" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_from_char = 10008;</code>
     */
    public function getValidFromChar()
    {
        return $this->valid_from_char;
    }

    /**
     * <pre>
     * "ValidFrom" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_from_char = 10008;</code>
     */
    public function setValidFromChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->valid_from_char = $var;
    }

}
