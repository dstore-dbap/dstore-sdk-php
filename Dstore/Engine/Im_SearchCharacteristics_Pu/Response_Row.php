<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_SearchCharacteristics_Pu.proto

namespace Dstore\Engine\Im_SearchCharacteristics_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_SearchCharacteristics_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Besitzt "NodeID" die Eigenschaft "Value" direkt oder wurde diese vererbt ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue inherited = 10001;</code>
     */
    private $inherited = null;
    /**
     * <pre>
     * Nummer der Hierarchie der "NodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10002;</code>
     */
    private $level_no = null;
    /**
     * <pre>
     * ID des Merkmals, zu dem "NodeID" eine Eigenschaft besitzt, die zum Suchbegriff "&#64;Value" paßt. "-2147486548" bedeutet, daß der Suchbegriff über die Element-Bezeichnung ("NodeDescription") gefunden wurde.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10003;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10004;</code>
     */
    private $value_id = null;
    /**
     * <pre>
     * Bezeichnung der "NodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue node_description = 10005;</code>
     */
    private $node_description = null;
    /**
     * <pre>
     * ID eines zur "NodeID" zugehörigen Elementes aus "HistoryTreeView" (in dieser ist die Historie des gesamten Artikelbaums abgebildet)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10006;</code>
     */
    private $h_tree_node_id = null;
    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das "NodeID" als Artikel-Element zugewiesen hat - oder "0" (es gibt zu jeder "NodeID" eine "HTreeNodeID" mit einem offenen Gültigkeitszeitraum und "unbekannter TreeNodeID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10007;</code>
     */
    private $tree_node_id = null;
    /**
     * <pre>
     * ID eines Artikel-Elementes, das eine Eigenschaft besitzt, die zum Suchbegriff "&#64;Value" paßt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10008;</code>
     */
    private $node_id = null;
    /**
     * <pre>
     * Eigenschaft, die "NodeID" besitzt, die dem Suchbegriff "&#64;Value" entspricht
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10009;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Bezeichnung des Vor-Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue pre_predecessors_description = 10010;</code>
     */
    private $pre_predecessors_description = null;
    /**
     * <pre>
     * ID des Vor-Vorgänger-Elementes im Artikelbaum des gefundenen Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessors_tree_node_id = 10011;</code>
     */
    private $pre_predecessors_tree_node_id = null;
    /**
     * <pre>
     * ID des Vorgänger-Elementes im Artikelbaum des gefundenen Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessors_tree_node_id = 10012;</code>
     */
    private $predecessors_tree_node_id = null;
    /**
     * <pre>
     * Bezeichnung des Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue predecessors_description = 10013;</code>
     */
    private $predecessors_description = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImSearchCharacteristicsPu::initOnce();
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
     * Besitzt "NodeID" die Eigenschaft "Value" direkt oder wurde diese vererbt ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue inherited = 10001;</code>
     */
    public function getInherited()
    {
        return $this->inherited;
    }

    /**
     * <pre>
     * Besitzt "NodeID" die Eigenschaft "Value" direkt oder wurde diese vererbt ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue inherited = 10001;</code>
     */
    public function setInherited(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->inherited = $var;
    }

    /**
     * <pre>
     * Nummer der Hierarchie der "NodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10002;</code>
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
     * <code>.dstore.values.IntegerValue level_no = 10002;</code>
     */
    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->level_no = $var;
    }

    /**
     * <pre>
     * ID des Merkmals, zu dem "NodeID" eine Eigenschaft besitzt, die zum Suchbegriff "&#64;Value" paßt. "-2147486548" bedeutet, daß der Suchbegriff über die Element-Bezeichnung ("NodeDescription") gefunden wurde.
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
     * ID des Merkmals, zu dem "NodeID" eine Eigenschaft besitzt, die zum Suchbegriff "&#64;Value" paßt. "-2147486548" bedeutet, daß der Suchbegriff über die Element-Bezeichnung ("NodeDescription") gefunden wurde.
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
     * ID der Eigenschaft "Value"
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
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10004;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der "NodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue node_description = 10005;</code>
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
     * <code>.dstore.values.StringValue node_description = 10005;</code>
     */
    public function setNodeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->node_description = $var;
    }

    /**
     * <pre>
     * ID eines zur "NodeID" zugehörigen Elementes aus "HistoryTreeView" (in dieser ist die Historie des gesamten Artikelbaums abgebildet)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10006;</code>
     */
    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    /**
     * <pre>
     * ID eines zur "NodeID" zugehörigen Elementes aus "HistoryTreeView" (in dieser ist die Historie des gesamten Artikelbaums abgebildet)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10006;</code>
     */
    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->h_tree_node_id = $var;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das "NodeID" als Artikel-Element zugewiesen hat - oder "0" (es gibt zu jeder "NodeID" eine "HTreeNodeID" mit einem offenen Gültigkeitszeitraum und "unbekannter TreeNodeID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10007;</code>
     */
    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das "NodeID" als Artikel-Element zugewiesen hat - oder "0" (es gibt zu jeder "NodeID" eine "HTreeNodeID" mit einem offenen Gültigkeitszeitraum und "unbekannter TreeNodeID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10007;</code>
     */
    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tree_node_id = $var;
    }

    /**
     * <pre>
     * ID eines Artikel-Elementes, das eine Eigenschaft besitzt, die zum Suchbegriff "&#64;Value" paßt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10008;</code>
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * <pre>
     * ID eines Artikel-Elementes, das eine Eigenschaft besitzt, die zum Suchbegriff "&#64;Value" paßt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10008;</code>
     */
    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_id = $var;
    }

    /**
     * <pre>
     * Eigenschaft, die "NodeID" besitzt, die dem Suchbegriff "&#64;Value" entspricht
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10009;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Eigenschaft, die "NodeID" besitzt, die dem Suchbegriff "&#64;Value" entspricht
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10009;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Vor-Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue pre_predecessors_description = 10010;</code>
     */
    public function getPrePredecessorsDescription()
    {
        return $this->pre_predecessors_description;
    }

    /**
     * <pre>
     * Bezeichnung des Vor-Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue pre_predecessors_description = 10010;</code>
     */
    public function setPrePredecessorsDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->pre_predecessors_description = $var;
    }

    /**
     * <pre>
     * ID des Vor-Vorgänger-Elementes im Artikelbaum des gefundenen Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessors_tree_node_id = 10011;</code>
     */
    public function getPrePredecessorsTreeNodeId()
    {
        return $this->pre_predecessors_tree_node_id;
    }

    /**
     * <pre>
     * ID des Vor-Vorgänger-Elementes im Artikelbaum des gefundenen Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessors_tree_node_id = 10011;</code>
     */
    public function setPrePredecessorsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->pre_predecessors_tree_node_id = $var;
    }

    /**
     * <pre>
     * ID des Vorgänger-Elementes im Artikelbaum des gefundenen Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessors_tree_node_id = 10012;</code>
     */
    public function getPredecessorsTreeNodeId()
    {
        return $this->predecessors_tree_node_id;
    }

    /**
     * <pre>
     * ID des Vorgänger-Elementes im Artikelbaum des gefundenen Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessors_tree_node_id = 10012;</code>
     */
    public function setPredecessorsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->predecessors_tree_node_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue predecessors_description = 10013;</code>
     */
    public function getPredecessorsDescription()
    {
        return $this->predecessors_description;
    }

    /**
     * <pre>
     * Bezeichnung des Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue predecessors_description = 10013;</code>
     */
    public function setPredecessorsDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->predecessors_description = $var;
    }

}
