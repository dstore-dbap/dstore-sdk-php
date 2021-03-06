<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetDirectSuccessors_Tree_Pu.proto

namespace Dstore\Engine\Im_GetDirectSuccessors_Tree_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetDirectSuccessors_Tree_Pu.Parameters</code>
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
    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1002;</code>
     */
    private $language_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue filter_by_characteristic_id = 3;</code>
     */
    private $filter_by_characteristic_id = null;
    /**
     * <code>bool filter_by_characteristic_id_null = 1003;</code>
     */
    private $filter_by_characteristic_id_null = false;
    /**
     * <code>.dstore.values.StringValue filter_by_charac_value = 4;</code>
     */
    private $filter_by_charac_value = null;
    /**
     * <code>bool filter_by_charac_value_null = 1004;</code>
     */
    private $filter_by_charac_value_null = false;
    /**
     * <code>.dstore.values.BooleanValue apply_filter_for_all_nodes = 5;</code>
     */
    private $apply_filter_for_all_nodes = null;
    /**
     * <code>bool apply_filter_for_all_nodes_null = 1005;</code>
     */
    private $apply_filter_for_all_nodes_null = false;
    /**
     * <code>.dstore.values.BooleanValue negate_filter_by_params = 6;</code>
     */
    private $negate_filter_by_params = null;
    /**
     * <code>bool negate_filter_by_params_null = 1006;</code>
     */
    private $negate_filter_by_params_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetDirectSuccessorsTreePu::initOnce();
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

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue filter_by_characteristic_id = 3;</code>
     */
    public function getFilterByCharacteristicId()
    {
        return $this->filter_by_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue filter_by_characteristic_id = 3;</code>
     */
    public function setFilterByCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->filter_by_characteristic_id = $var;
    }

    /**
     * <code>bool filter_by_characteristic_id_null = 1003;</code>
     */
    public function getFilterByCharacteristicIdNull()
    {
        return $this->filter_by_characteristic_id_null;
    }

    /**
     * <code>bool filter_by_characteristic_id_null = 1003;</code>
     */
    public function setFilterByCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue filter_by_charac_value = 4;</code>
     */
    public function getFilterByCharacValue()
    {
        return $this->filter_by_charac_value;
    }

    /**
     * <code>.dstore.values.StringValue filter_by_charac_value = 4;</code>
     */
    public function setFilterByCharacValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->filter_by_charac_value = $var;
    }

    /**
     * <code>bool filter_by_charac_value_null = 1004;</code>
     */
    public function getFilterByCharacValueNull()
    {
        return $this->filter_by_charac_value_null;
    }

    /**
     * <code>bool filter_by_charac_value_null = 1004;</code>
     */
    public function setFilterByCharacValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_charac_value_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue apply_filter_for_all_nodes = 5;</code>
     */
    public function getApplyFilterForAllNodes()
    {
        return $this->apply_filter_for_all_nodes;
    }

    /**
     * <code>.dstore.values.BooleanValue apply_filter_for_all_nodes = 5;</code>
     */
    public function setApplyFilterForAllNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->apply_filter_for_all_nodes = $var;
    }

    /**
     * <code>bool apply_filter_for_all_nodes_null = 1005;</code>
     */
    public function getApplyFilterForAllNodesNull()
    {
        return $this->apply_filter_for_all_nodes_null;
    }

    /**
     * <code>bool apply_filter_for_all_nodes_null = 1005;</code>
     */
    public function setApplyFilterForAllNodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->apply_filter_for_all_nodes_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue negate_filter_by_params = 6;</code>
     */
    public function getNegateFilterByParams()
    {
        return $this->negate_filter_by_params;
    }

    /**
     * <code>.dstore.values.BooleanValue negate_filter_by_params = 6;</code>
     */
    public function setNegateFilterByParams(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->negate_filter_by_params = $var;
    }

    /**
     * <code>bool negate_filter_by_params_null = 1006;</code>
     */
    public function getNegateFilterByParamsNull()
    {
        return $this->negate_filter_by_params_null;
    }

    /**
     * <code>bool negate_filter_by_params_null = 1006;</code>
     */
    public function setNegateFilterByParamsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->negate_filter_by_params_null = $var;
    }

}

