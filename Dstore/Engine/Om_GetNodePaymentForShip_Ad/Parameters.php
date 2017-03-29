<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetNodePaymentForShip_Ad.proto

namespace Dstore\Engine\Om_GetNodePaymentForShip_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetNodePaymentForShip_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue tree_node_id = 1;</code>
     */
    private $tree_node_id = null;
    /**
     * <code>bool tree_node_id_null = 1001;</code>
     */
    private $tree_node_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetNodePaymentForShipAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue tree_node_id = 1;</code>
     */
    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    /**
     * <code>.dstore.values.IntegerValue tree_node_id = 1;</code>
     */
    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tree_node_id = $var;
    }

    /**
     * <code>bool tree_node_id_null = 1001;</code>
     */
    public function getTreeNodeIdNull()
    {
        return $this->tree_node_id_null;
    }

    /**
     * <code>bool tree_node_id_null = 1001;</code>
     */
    public function setTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_id_null = $var;
    }

}
