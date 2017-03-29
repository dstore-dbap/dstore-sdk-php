<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_TraverseTreeView_Pu.proto

namespace Dstore\Engine\Im_TraverseTreeView_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_TraverseTreeView_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID des benachbarten Elementes von "&#64;TreeNodeID". "-1", falls keines gefunden wurde.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue result_tree_node_id = 10001;</code>
     */
    private $result_tree_node_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImTraverseTreeViewPu::initOnce();
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
     * ID des benachbarten Elementes von "&#64;TreeNodeID". "-1", falls keines gefunden wurde.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue result_tree_node_id = 10001;</code>
     */
    public function getResultTreeNodeId()
    {
        return $this->result_tree_node_id;
    }

    /**
     * <pre>
     * ID des benachbarten Elementes von "&#64;TreeNodeID". "-1", falls keines gefunden wurde.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue result_tree_node_id = 10001;</code>
     */
    public function setResultTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->result_tree_node_id = $var;
    }

}

