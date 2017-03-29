<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetUsedValues_Pu.proto

namespace Dstore\Engine\Im_GetUsedValues_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetUsedValues_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines "Binaries", das der Eigenschaft "Value" zugeordnet ist. Falls keine "&#64;BinaryCharacteristicValueID" angegeben ist, werden alle zugewiesenen "Binaries" ausgegeben, ansonsten nur das Binärobjekt mit der KLEINSTEN ID, das diese Eigenschaft besitzt.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10001;</code>
     */
    private $binary_code_id = null;
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
     * Eine momentan verwendete Eigenschaft
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10003;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Je nach "&#64;IncludeNumberOfNodesInResult" steht hier die Anzahl Elemente, die "ValueID" (indirekt) besitzen (s. Beschreibung !)"0" : Immer "-1""1" : Anzahl "TreeNodeID"s"2" : Anzahl "NodeID"s"3" : Anzahl "Predecesssor"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue number_of_nodes = 10004;</code>
     */
    private $number_of_nodes = null;
    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10005;</code>
     */
    private $value_id = null;
    /**
     * <pre>
     * Details zur Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.StringValue details = 20001;</code>
     */
    private $details = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetUsedValuesPu::initOnce();
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
     * ID eines "Binaries", das der Eigenschaft "Value" zugeordnet ist. Falls keine "&#64;BinaryCharacteristicValueID" angegeben ist, werden alle zugewiesenen "Binaries" ausgegeben, ansonsten nur das Binärobjekt mit der KLEINSTEN ID, das diese Eigenschaft besitzt.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10001;</code>
     */
    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    /**
     * <pre>
     * ID eines "Binaries", das der Eigenschaft "Value" zugeordnet ist. Falls keine "&#64;BinaryCharacteristicValueID" angegeben ist, werden alle zugewiesenen "Binaries" ausgegeben, ansonsten nur das Binärobjekt mit der KLEINSTEN ID, das diese Eigenschaft besitzt.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10001;</code>
     */
    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_code_id = $var;
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
     * Eine momentan verwendete Eigenschaft
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
     * Eine momentan verwendete Eigenschaft
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
     * Je nach "&#64;IncludeNumberOfNodesInResult" steht hier die Anzahl Elemente, die "ValueID" (indirekt) besitzen (s. Beschreibung !)"0" : Immer "-1""1" : Anzahl "TreeNodeID"s"2" : Anzahl "NodeID"s"3" : Anzahl "Predecesssor"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue number_of_nodes = 10004;</code>
     */
    public function getNumberOfNodes()
    {
        return $this->number_of_nodes;
    }

    /**
     * <pre>
     * Je nach "&#64;IncludeNumberOfNodesInResult" steht hier die Anzahl Elemente, die "ValueID" (indirekt) besitzen (s. Beschreibung !)"0" : Immer "-1""1" : Anzahl "TreeNodeID"s"2" : Anzahl "NodeID"s"3" : Anzahl "Predecesssor"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue number_of_nodes = 10004;</code>
     */
    public function setNumberOfNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->number_of_nodes = $var;
    }

    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10005;</code>
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
     * <code>.dstore.values.IntegerValue value_id = 10005;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

    /**
     * <pre>
     * Details zur Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.StringValue details = 20001;</code>
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
     * <code>.dstore.values.StringValue details = 20001;</code>
     */
    public function setDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->details = $var;
    }

}

