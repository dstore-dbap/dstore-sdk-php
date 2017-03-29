<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetHTreeNodeIDs_Ad.proto

namespace Dstore\Engine\Im_GetHTreeNodeIDs_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetHTreeNodeIDs_Ad.Response.Row</code>
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
     * ID des Vorgängers von "TreeNodeID" (im Zeitraum "FromDate" bis "ToDate")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessor_tree_node_id = 10002;</code>
     */
    private $predecessor_tree_node_id = null;
    /**
     * <pre>
     * Bezeichnung des Vorgängers "PredecessorTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue predecessor_description = 10003;</code>
     */
    private $predecessor_description = null;
    /**
     * <pre>
     * ID eines zur "TreeNodeID" zugehörigen Elementes aus "HistoryTreeView", in der die Historie des gesamten Artikelbaums abgebildet wird
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10004;</code>
     */
    private $h_tree_node_id = null;
    /**
     * <pre>
     * Bezeichnung des Vor-Vorgängers "PrePredecessorTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue pre_predecessor_description = 10005;</code>
     */
    private $pre_predecessor_description = null;
    /**
     * <pre>
     * ID des zum Zeitpunkt "FromDate" gültigen Vorgängers von "PredecessorTreeNodeID" (siehe auch Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessor_tree_node_id = 10006;</code>
     */
    private $pre_predecessor_tree_node_id = null;
    /**
     * <pre>
     * Falls "&#64;IsTreeNodeID = 1" ist, entspricht der Wert der "&#64;NodeID" bzw. einer in "tempdb.dbo.OneID" übergebenen ID, ansonsten handelt es sich um ein Element im Artikelbaum, das "NodeID" als Artikel-Element zugewiesen hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10007;</code>
     */
    private $tree_node_id = null;
    /**
     * <pre>
     * Falls "&#64;IsTreeNodeID = 0" ist, entspricht der Wert der "&#64;NodeID" bzw. einer in "tempdb.dbo.OneID" übergebenen ID, ansonsten ist es die ID des zur "TreeNodeID" zugehörigen Artikel-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10008;</code>
     */
    private $node_id = null;
    /**
     * <pre>
     * Beginn des Gültigkeitszeitraums der "HTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue from_date = 10009;</code>
     */
    private $from_date = null;
    /**
     * <pre>
     * Ende des Gültigkeitszeitraums der "HTreeNodeID" - falls "NULL", ist "HTreeNodeID" aktuell noch gültig
     * </pre>
     *
     * <code>.dstore.values.TimestampValue to_date = 10010;</code>
     */
    private $to_date = null;
    /**
     * <pre>
     * "ToDate" als "String" im Format "05.08.2000 18:45:22"
     * </pre>
     *
     * <code>.dstore.values.StringValue to_date_char = 10011;</code>
     */
    private $to_date_char = null;
    /**
     * <pre>
     * "FromDate" als "String" im Format "05.08.2000 18:45:22"
     * </pre>
     *
     * <code>.dstore.values.StringValue from_date_char = 10012;</code>
     */
    private $from_date_char = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetHTreeNodeIDsAd::initOnce();
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
     * ID des Vorgängers von "TreeNodeID" (im Zeitraum "FromDate" bis "ToDate")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessor_tree_node_id = 10002;</code>
     */
    public function getPredecessorTreeNodeId()
    {
        return $this->predecessor_tree_node_id;
    }

    /**
     * <pre>
     * ID des Vorgängers von "TreeNodeID" (im Zeitraum "FromDate" bis "ToDate")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessor_tree_node_id = 10002;</code>
     */
    public function setPredecessorTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->predecessor_tree_node_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Vorgängers "PredecessorTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue predecessor_description = 10003;</code>
     */
    public function getPredecessorDescription()
    {
        return $this->predecessor_description;
    }

    /**
     * <pre>
     * Bezeichnung des Vorgängers "PredecessorTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue predecessor_description = 10003;</code>
     */
    public function setPredecessorDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->predecessor_description = $var;
    }

    /**
     * <pre>
     * ID eines zur "TreeNodeID" zugehörigen Elementes aus "HistoryTreeView", in der die Historie des gesamten Artikelbaums abgebildet wird
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10004;</code>
     */
    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    /**
     * <pre>
     * ID eines zur "TreeNodeID" zugehörigen Elementes aus "HistoryTreeView", in der die Historie des gesamten Artikelbaums abgebildet wird
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10004;</code>
     */
    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->h_tree_node_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Vor-Vorgängers "PrePredecessorTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue pre_predecessor_description = 10005;</code>
     */
    public function getPrePredecessorDescription()
    {
        return $this->pre_predecessor_description;
    }

    /**
     * <pre>
     * Bezeichnung des Vor-Vorgängers "PrePredecessorTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue pre_predecessor_description = 10005;</code>
     */
    public function setPrePredecessorDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->pre_predecessor_description = $var;
    }

    /**
     * <pre>
     * ID des zum Zeitpunkt "FromDate" gültigen Vorgängers von "PredecessorTreeNodeID" (siehe auch Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessor_tree_node_id = 10006;</code>
     */
    public function getPrePredecessorTreeNodeId()
    {
        return $this->pre_predecessor_tree_node_id;
    }

    /**
     * <pre>
     * ID des zum Zeitpunkt "FromDate" gültigen Vorgängers von "PredecessorTreeNodeID" (siehe auch Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessor_tree_node_id = 10006;</code>
     */
    public function setPrePredecessorTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->pre_predecessor_tree_node_id = $var;
    }

    /**
     * <pre>
     * Falls "&#64;IsTreeNodeID = 1" ist, entspricht der Wert der "&#64;NodeID" bzw. einer in "tempdb.dbo.OneID" übergebenen ID, ansonsten handelt es sich um ein Element im Artikelbaum, das "NodeID" als Artikel-Element zugewiesen hat
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
     * Falls "&#64;IsTreeNodeID = 1" ist, entspricht der Wert der "&#64;NodeID" bzw. einer in "tempdb.dbo.OneID" übergebenen ID, ansonsten handelt es sich um ein Element im Artikelbaum, das "NodeID" als Artikel-Element zugewiesen hat
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
     * Falls "&#64;IsTreeNodeID = 0" ist, entspricht der Wert der "&#64;NodeID" bzw. einer in "tempdb.dbo.OneID" übergebenen ID, ansonsten ist es die ID des zur "TreeNodeID" zugehörigen Artikel-Elementes
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
     * Falls "&#64;IsTreeNodeID = 0" ist, entspricht der Wert der "&#64;NodeID" bzw. einer in "tempdb.dbo.OneID" übergebenen ID, ansonsten ist es die ID des zur "TreeNodeID" zugehörigen Artikel-Elementes
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
     * Beginn des Gültigkeitszeitraums der "HTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue from_date = 10009;</code>
     */
    public function getFromDate()
    {
        return $this->from_date;
    }

    /**
     * <pre>
     * Beginn des Gültigkeitszeitraums der "HTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue from_date = 10009;</code>
     */
    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_date = $var;
    }

    /**
     * <pre>
     * Ende des Gültigkeitszeitraums der "HTreeNodeID" - falls "NULL", ist "HTreeNodeID" aktuell noch gültig
     * </pre>
     *
     * <code>.dstore.values.TimestampValue to_date = 10010;</code>
     */
    public function getToDate()
    {
        return $this->to_date;
    }

    /**
     * <pre>
     * Ende des Gültigkeitszeitraums der "HTreeNodeID" - falls "NULL", ist "HTreeNodeID" aktuell noch gültig
     * </pre>
     *
     * <code>.dstore.values.TimestampValue to_date = 10010;</code>
     */
    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_date = $var;
    }

    /**
     * <pre>
     * "ToDate" als "String" im Format "05.08.2000 18:45:22"
     * </pre>
     *
     * <code>.dstore.values.StringValue to_date_char = 10011;</code>
     */
    public function getToDateChar()
    {
        return $this->to_date_char;
    }

    /**
     * <pre>
     * "ToDate" als "String" im Format "05.08.2000 18:45:22"
     * </pre>
     *
     * <code>.dstore.values.StringValue to_date_char = 10011;</code>
     */
    public function setToDateChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->to_date_char = $var;
    }

    /**
     * <pre>
     * "FromDate" als "String" im Format "05.08.2000 18:45:22"
     * </pre>
     *
     * <code>.dstore.values.StringValue from_date_char = 10012;</code>
     */
    public function getFromDateChar()
    {
        return $this->from_date_char;
    }

    /**
     * <pre>
     * "FromDate" als "String" im Format "05.08.2000 18:45:22"
     * </pre>
     *
     * <code>.dstore.values.StringValue from_date_char = 10012;</code>
     */
    public function setFromDateChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->from_date_char = $var;
    }

}
