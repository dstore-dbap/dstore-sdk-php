<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetGroupSurcharges_Ad.proto

namespace Dstore\Engine\Om_GetGroupSurcharges_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetGroupSurcharges_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue group_id = 1;</code>
     */
    private $group_id = null;
    /**
     * <code>bool group_id_null = 1001;</code>
     */
    private $group_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue tree_node_id = 2;</code>
     */
    private $tree_node_id = null;
    /**
     * <code>bool tree_node_id_null = 1002;</code>
     */
    private $tree_node_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetGroupSurchargesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue group_id = 1;</code>
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * <code>.dstore.values.IntegerValue group_id = 1;</code>
     */
    public function setGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->group_id = $var;
    }

    /**
     * <code>bool group_id_null = 1001;</code>
     */
    public function getGroupIdNull()
    {
        return $this->group_id_null;
    }

    /**
     * <code>bool group_id_null = 1001;</code>
     */
    public function setGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->group_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue tree_node_id = 2;</code>
     */
    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    /**
     * <code>.dstore.values.IntegerValue tree_node_id = 2;</code>
     */
    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tree_node_id = $var;
    }

    /**
     * <code>bool tree_node_id_null = 1002;</code>
     */
    public function getTreeNodeIdNull()
    {
        return $this->tree_node_id_null;
    }

    /**
     * <code>bool tree_node_id_null = 1002;</code>
     */
    public function setTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_id_null = $var;
    }

}

