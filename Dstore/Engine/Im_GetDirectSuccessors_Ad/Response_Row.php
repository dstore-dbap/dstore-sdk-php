<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetDirectSuccessors_Ad.proto

namespace Dstore\Engine\Im_GetDirectSuccessors_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetDirectSuccessors_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Bezeichnung der "NodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue node_description = 10001;</code>
     */
    private $node_description = null;
    /**
     * <pre>
     * Ist "TreeNodeID" z.Zt. aktiviert ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10002;</code>
     */
    private $active = null;
    /**
     * <pre>
     * Nummer der Hierarchie der "NodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10003;</code>
     */
    private $level_no = null;
    /**
     * <pre>
     * ID eines "Binaries", das der "NodeID" zugeordnet ist, und das "&#64;BinaryCharacteristicValueID" als Eigenschaft besitzt. Da es prinzipiell mehrere "Binaries" mit dieser Eigenschaft geben könnte, wird immer das Binärobjekt mit der KLEINSTEN ID zurückgegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10004;</code>
     */
    private $binary_code_id = null;
    /**
     * <pre>
     * ID des zur "TreeNodeID" zugehörigen Artikel-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10005;</code>
     */
    private $node_id = null;
    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das Nachfolger von "&#64;TreeNodeID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10006;</code>
     */
    private $tree_node_id = null;
    /**
     * <pre>
     * Wieviele Nachfolger hat "TreeNodeID"; es werden nur die "&#64;OnlyActive" bzw. "&#64;OnlyNotDeleted" entsprechenden Elemente berücksichtigt !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue count_successors = 10007;</code>
     */
    private $count_successors = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge von "TreeNodeID" innerhalb aller Nachfolger von "&#64;TreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10008;</code>
     */
    private $sort_no = null;
    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, VON dem "TreeNodeID" Eigenschaften erbt (im Regelfall ist dies das Vorgänger-Element, also "&#64;TreeNodeID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue inherits_from = 10009;</code>
     */
    private $inherits_from = null;
    /**
     * <pre>
     * ID eines Symbols, das der "NodeID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue symbol_id = 10010;</code>
     */
    private $symbol_id = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge von "Value" innerhalb aller Eigenschaften zum Merkmal "&#64;GroupByCharacteristicID". Enthält "-1", wenn "TreeNodeID" KEINE Eigenschaft zum Merkmal "&#64;GroupByCharacteristicID" besitzt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_sort_no = 20003;</code>
     */
    private $value_sort_no = null;
    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 20004;</code>
     */
    private $value_id = null;
    /**
     * <pre>
     * (Direkte !) Eigenschaft der "TreeNodeID" zum Merkmal "&#64;GroupByCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 20010;</code>
     */
    private $value = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetDirectSuccessorsAd::initOnce();
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
     * Bezeichnung der "NodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue node_description = 10001;</code>
     */
    public function getNodeDescription()
    {
        return $this->node_description;
    }

    /**
     * <pre>
     * Bezeichnung der "NodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue node_description = 10001;</code>
     */
    public function setNodeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->node_description = $var;
    }

    /**
     * <pre>
     * Ist "TreeNodeID" z.Zt. aktiviert ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10002;</code>
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * <pre>
     * Ist "TreeNodeID" z.Zt. aktiviert ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10002;</code>
     */
    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->active = $var;
    }

    /**
     * <pre>
     * Nummer der Hierarchie der "NodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10003;</code>
     */
    public function getLevelNo()
    {
        return $this->level_no;
    }

    /**
     * <pre>
     * Nummer der Hierarchie der "NodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10003;</code>
     */
    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->level_no = $var;
    }

    /**
     * <pre>
     * ID eines "Binaries", das der "NodeID" zugeordnet ist, und das "&#64;BinaryCharacteristicValueID" als Eigenschaft besitzt. Da es prinzipiell mehrere "Binaries" mit dieser Eigenschaft geben könnte, wird immer das Binärobjekt mit der KLEINSTEN ID zurückgegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10004;</code>
     */
    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    /**
     * <pre>
     * ID eines "Binaries", das der "NodeID" zugeordnet ist, und das "&#64;BinaryCharacteristicValueID" als Eigenschaft besitzt. Da es prinzipiell mehrere "Binaries" mit dieser Eigenschaft geben könnte, wird immer das Binärobjekt mit der KLEINSTEN ID zurückgegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10004;</code>
     */
    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_code_id = $var;
    }

    /**
     * <pre>
     * ID des zur "TreeNodeID" zugehörigen Artikel-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10005;</code>
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * <pre>
     * ID des zur "TreeNodeID" zugehörigen Artikel-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10005;</code>
     */
    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_id = $var;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das Nachfolger von "&#64;TreeNodeID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10006;</code>
     */
    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das Nachfolger von "&#64;TreeNodeID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10006;</code>
     */
    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tree_node_id = $var;
    }

    /**
     * <pre>
     * Wieviele Nachfolger hat "TreeNodeID"; es werden nur die "&#64;OnlyActive" bzw. "&#64;OnlyNotDeleted" entsprechenden Elemente berücksichtigt !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue count_successors = 10007;</code>
     */
    public function getCountSuccessors()
    {
        return $this->count_successors;
    }

    /**
     * <pre>
     * Wieviele Nachfolger hat "TreeNodeID"; es werden nur die "&#64;OnlyActive" bzw. "&#64;OnlyNotDeleted" entsprechenden Elemente berücksichtigt !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue count_successors = 10007;</code>
     */
    public function setCountSuccessors(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->count_successors = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "TreeNodeID" innerhalb aller Nachfolger von "&#64;TreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10008;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "TreeNodeID" innerhalb aller Nachfolger von "&#64;TreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10008;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, VON dem "TreeNodeID" Eigenschaften erbt (im Regelfall ist dies das Vorgänger-Element, also "&#64;TreeNodeID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue inherits_from = 10009;</code>
     */
    public function getInheritsFrom()
    {
        return $this->inherits_from;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, VON dem "TreeNodeID" Eigenschaften erbt (im Regelfall ist dies das Vorgänger-Element, also "&#64;TreeNodeID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue inherits_from = 10009;</code>
     */
    public function setInheritsFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->inherits_from = $var;
    }

    /**
     * <pre>
     * ID eines Symbols, das der "NodeID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue symbol_id = 10010;</code>
     */
    public function getSymbolId()
    {
        return $this->symbol_id;
    }

    /**
     * <pre>
     * ID eines Symbols, das der "NodeID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue symbol_id = 10010;</code>
     */
    public function setSymbolId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->symbol_id = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "Value" innerhalb aller Eigenschaften zum Merkmal "&#64;GroupByCharacteristicID". Enthält "-1", wenn "TreeNodeID" KEINE Eigenschaft zum Merkmal "&#64;GroupByCharacteristicID" besitzt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_sort_no = 20003;</code>
     */
    public function getValueSortNo()
    {
        return $this->value_sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "Value" innerhalb aller Eigenschaften zum Merkmal "&#64;GroupByCharacteristicID". Enthält "-1", wenn "TreeNodeID" KEINE Eigenschaft zum Merkmal "&#64;GroupByCharacteristicID" besitzt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_sort_no = 20003;</code>
     */
    public function setValueSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_sort_no = $var;
    }

    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 20004;</code>
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
     * <code>.dstore.values.IntegerValue value_id = 20004;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

    /**
     * <pre>
     * (Direkte !) Eigenschaft der "TreeNodeID" zum Merkmal "&#64;GroupByCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 20010;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * (Direkte !) Eigenschaft der "TreeNodeID" zum Merkmal "&#64;GroupByCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 20010;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

}

