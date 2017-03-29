<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetPredecessors.proto

namespace Dstore\Engine\Im_GetPredecessors;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetPredecessors.Parameters</code>
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
     * <code>.dstore.values.BooleanValue include_root_level = 3;</code>
     */
    private $include_root_level = null;
    /**
     * <code>bool include_root_level_null = 1003;</code>
     */
    private $include_root_level_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_my_level = 4;</code>
     */
    private $include_my_level = null;
    /**
     * <code>bool include_my_level_null = 1004;</code>
     */
    private $include_my_level_null = false;
    /**
     * <code>.dstore.values.IntegerValue get_node_descriptions = 5;</code>
     */
    private $get_node_descriptions = null;
    /**
     * <code>bool get_node_descriptions_null = 1005;</code>
     */
    private $get_node_descriptions_null = false;
    /**
     * <code>.dstore.values.IntegerValue only_predecessor_on_level = 6;</code>
     */
    private $only_predecessor_on_level = null;
    /**
     * <code>bool only_predecessor_on_level_null = 1006;</code>
     */
    private $only_predecessor_on_level_null = false;
    /**
     * <code>.dstore.values.IntegerValue how_many_levels = 7;</code>
     */
    private $how_many_levels = null;
    /**
     * <code>bool how_many_levels_null = 1007;</code>
     */
    private $how_many_levels_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_level_no_info = 8;</code>
     */
    private $get_level_no_info = null;
    /**
     * <code>bool get_level_no_info_null = 1008;</code>
     */
    private $get_level_no_info_null = false;
    /**
     * <code>.dstore.values.BooleanValue order_desc_by_level_no = 9;</code>
     */
    private $order_desc_by_level_no = null;
    /**
     * <code>bool order_desc_by_level_no_null = 1009;</code>
     */
    private $order_desc_by_level_no_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetPredecessors::initOnce();
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
     * <code>.dstore.values.BooleanValue include_root_level = 3;</code>
     */
    public function getIncludeRootLevel()
    {
        return $this->include_root_level;
    }

    /**
     * <code>.dstore.values.BooleanValue include_root_level = 3;</code>
     */
    public function setIncludeRootLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_root_level = $var;
    }

    /**
     * <code>bool include_root_level_null = 1003;</code>
     */
    public function getIncludeRootLevelNull()
    {
        return $this->include_root_level_null;
    }

    /**
     * <code>bool include_root_level_null = 1003;</code>
     */
    public function setIncludeRootLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_root_level_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_my_level = 4;</code>
     */
    public function getIncludeMyLevel()
    {
        return $this->include_my_level;
    }

    /**
     * <code>.dstore.values.BooleanValue include_my_level = 4;</code>
     */
    public function setIncludeMyLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_my_level = $var;
    }

    /**
     * <code>bool include_my_level_null = 1004;</code>
     */
    public function getIncludeMyLevelNull()
    {
        return $this->include_my_level_null;
    }

    /**
     * <code>bool include_my_level_null = 1004;</code>
     */
    public function setIncludeMyLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_my_level_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue get_node_descriptions = 5;</code>
     */
    public function getGetNodeDescriptions()
    {
        return $this->get_node_descriptions;
    }

    /**
     * <code>.dstore.values.IntegerValue get_node_descriptions = 5;</code>
     */
    public function setGetNodeDescriptions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->get_node_descriptions = $var;
    }

    /**
     * <code>bool get_node_descriptions_null = 1005;</code>
     */
    public function getGetNodeDescriptionsNull()
    {
        return $this->get_node_descriptions_null;
    }

    /**
     * <code>bool get_node_descriptions_null = 1005;</code>
     */
    public function setGetNodeDescriptionsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_node_descriptions_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue only_predecessor_on_level = 6;</code>
     */
    public function getOnlyPredecessorOnLevel()
    {
        return $this->only_predecessor_on_level;
    }

    /**
     * <code>.dstore.values.IntegerValue only_predecessor_on_level = 6;</code>
     */
    public function setOnlyPredecessorOnLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->only_predecessor_on_level = $var;
    }

    /**
     * <code>bool only_predecessor_on_level_null = 1006;</code>
     */
    public function getOnlyPredecessorOnLevelNull()
    {
        return $this->only_predecessor_on_level_null;
    }

    /**
     * <code>bool only_predecessor_on_level_null = 1006;</code>
     */
    public function setOnlyPredecessorOnLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_predecessor_on_level_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue how_many_levels = 7;</code>
     */
    public function getHowManyLevels()
    {
        return $this->how_many_levels;
    }

    /**
     * <code>.dstore.values.IntegerValue how_many_levels = 7;</code>
     */
    public function setHowManyLevels(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->how_many_levels = $var;
    }

    /**
     * <code>bool how_many_levels_null = 1007;</code>
     */
    public function getHowManyLevelsNull()
    {
        return $this->how_many_levels_null;
    }

    /**
     * <code>bool how_many_levels_null = 1007;</code>
     */
    public function setHowManyLevelsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->how_many_levels_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_level_no_info = 8;</code>
     */
    public function getGetLevelNoInfo()
    {
        return $this->get_level_no_info;
    }

    /**
     * <code>.dstore.values.BooleanValue get_level_no_info = 8;</code>
     */
    public function setGetLevelNoInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_level_no_info = $var;
    }

    /**
     * <code>bool get_level_no_info_null = 1008;</code>
     */
    public function getGetLevelNoInfoNull()
    {
        return $this->get_level_no_info_null;
    }

    /**
     * <code>bool get_level_no_info_null = 1008;</code>
     */
    public function setGetLevelNoInfoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_level_no_info_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue order_desc_by_level_no = 9;</code>
     */
    public function getOrderDescByLevelNo()
    {
        return $this->order_desc_by_level_no;
    }

    /**
     * <code>.dstore.values.BooleanValue order_desc_by_level_no = 9;</code>
     */
    public function setOrderDescByLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->order_desc_by_level_no = $var;
    }

    /**
     * <code>bool order_desc_by_level_no_null = 1009;</code>
     */
    public function getOrderDescByLevelNoNull()
    {
        return $this->order_desc_by_level_no_null;
    }

    /**
     * <code>bool order_desc_by_level_no_null = 1009;</code>
     */
    public function setOrderDescByLevelNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_desc_by_level_no_null = $var;
    }

}
