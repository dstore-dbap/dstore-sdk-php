<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetSuccessors_Pu.proto

namespace Dstore\Engine\Im_GetSuccessors_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetSuccessors_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue tree_node_list = 1;</code>
     */
    private $tree_node_list = null;
    /**
     * <code>bool tree_node_list_null = 1001;</code>
     */
    private $tree_node_list_null = false;
    /**
     * <code>.dstore.values.IntegerValue level_no = 2;</code>
     */
    private $level_no = null;
    /**
     * <code>bool level_no_null = 1002;</code>
     */
    private $level_no_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_tree_node_list = 3;</code>
     */
    private $include_tree_node_list = null;
    /**
     * <code>bool include_tree_node_list_null = 1003;</code>
     */
    private $include_tree_node_list_null = false;
    /**
     * <code>.dstore.values.BooleanValue output_into_one_id = 4;</code>
     */
    private $output_into_one_id = null;
    /**
     * <code>bool output_into_one_id_null = 1004;</code>
     */
    private $output_into_one_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue filter_by_characteristic_id = 5;</code>
     */
    private $filter_by_characteristic_id = null;
    /**
     * <code>bool filter_by_characteristic_id_null = 1005;</code>
     */
    private $filter_by_characteristic_id_null = false;
    /**
     * <code>.dstore.values.StringValue filter_by_charac_value = 6;</code>
     */
    private $filter_by_charac_value = null;
    /**
     * <code>bool filter_by_charac_value_null = 1006;</code>
     */
    private $filter_by_charac_value_null = false;
    /**
     * <code>.dstore.values.IntegerValue binary_characteristic_value_id = 7;</code>
     */
    private $binary_characteristic_value_id = null;
    /**
     * <code>bool binary_characteristic_value_id_null = 1007;</code>
     */
    private $binary_characteristic_value_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue negate_filter_by_params = 8;</code>
     */
    private $negate_filter_by_params = null;
    /**
     * <code>bool negate_filter_by_params_null = 1008;</code>
     */
    private $negate_filter_by_params_null = false;
    /**
     * <code>.dstore.values.StringValue sort_by_characteristic_id_list = 9;</code>
     */
    private $sort_by_characteristic_id_list = null;
    /**
     * <code>bool sort_by_characteristic_id_list_null = 1009;</code>
     */
    private $sort_by_characteristic_id_list_null = false;
    /**
     * <code>.dstore.values.StringValue sort_option_list = 10;</code>
     */
    private $sort_option_list = null;
    /**
     * <code>bool sort_option_list_null = 1010;</code>
     */
    private $sort_option_list_null = false;
    /**
     * <code>.dstore.values.StringValue inherit_depth_option_list = 11;</code>
     */
    private $inherit_depth_option_list = null;
    /**
     * <code>bool inherit_depth_option_list_null = 1011;</code>
     */
    private $inherit_depth_option_list_null = false;
    /**
     * <code>.dstore.values.StringValue recursive_evaluation_option_list = 12;</code>
     */
    private $recursive_evaluation_option_list = null;
    /**
     * <code>bool recursive_evaluation_option_list_null = 1012;</code>
     */
    private $recursive_evaluation_option_list_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_values_for_sort_by_characs = 13;</code>
     */
    private $get_values_for_sort_by_characs = null;
    /**
     * <code>bool get_values_for_sort_by_characs_null = 1013;</code>
     */
    private $get_values_for_sort_by_characs_null = false;
    /**
     * <code>.dstore.values.IntegerValue from_row_number = 14;</code>
     */
    private $from_row_number = null;
    /**
     * <code>bool from_row_number_null = 1014;</code>
     */
    private $from_row_number_null = false;
    /**
     * <code>.dstore.values.IntegerValue max_number_of_nodes = 15;</code>
     */
    private $max_number_of_nodes = null;
    /**
     * <code>bool max_number_of_nodes_null = 1015;</code>
     */
    private $max_number_of_nodes_null = false;
    /**
     * <code>.dstore.values.IntegerValue count = 16;</code>
     */
    private $count = null;
    /**
     * <code>bool count_null = 1016;</code>
     */
    private $count_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetSuccessorsPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue tree_node_list = 1;</code>
     */
    public function getTreeNodeList()
    {
        return $this->tree_node_list;
    }

    /**
     * <code>.dstore.values.StringValue tree_node_list = 1;</code>
     */
    public function setTreeNodeList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->tree_node_list = $var;
    }

    /**
     * <code>bool tree_node_list_null = 1001;</code>
     */
    public function getTreeNodeListNull()
    {
        return $this->tree_node_list_null;
    }

    /**
     * <code>bool tree_node_list_null = 1001;</code>
     */
    public function setTreeNodeListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_list_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue level_no = 2;</code>
     */
    public function getLevelNo()
    {
        return $this->level_no;
    }

    /**
     * <code>.dstore.values.IntegerValue level_no = 2;</code>
     */
    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->level_no = $var;
    }

    /**
     * <code>bool level_no_null = 1002;</code>
     */
    public function getLevelNoNull()
    {
        return $this->level_no_null;
    }

    /**
     * <code>bool level_no_null = 1002;</code>
     */
    public function setLevelNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->level_no_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_tree_node_list = 3;</code>
     */
    public function getIncludeTreeNodeList()
    {
        return $this->include_tree_node_list;
    }

    /**
     * <code>.dstore.values.BooleanValue include_tree_node_list = 3;</code>
     */
    public function setIncludeTreeNodeList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_tree_node_list = $var;
    }

    /**
     * <code>bool include_tree_node_list_null = 1003;</code>
     */
    public function getIncludeTreeNodeListNull()
    {
        return $this->include_tree_node_list_null;
    }

    /**
     * <code>bool include_tree_node_list_null = 1003;</code>
     */
    public function setIncludeTreeNodeListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_tree_node_list_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue output_into_one_id = 4;</code>
     */
    public function getOutputIntoOneId()
    {
        return $this->output_into_one_id;
    }

    /**
     * <code>.dstore.values.BooleanValue output_into_one_id = 4;</code>
     */
    public function setOutputIntoOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->output_into_one_id = $var;
    }

    /**
     * <code>bool output_into_one_id_null = 1004;</code>
     */
    public function getOutputIntoOneIdNull()
    {
        return $this->output_into_one_id_null;
    }

    /**
     * <code>bool output_into_one_id_null = 1004;</code>
     */
    public function setOutputIntoOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_into_one_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue filter_by_characteristic_id = 5;</code>
     */
    public function getFilterByCharacteristicId()
    {
        return $this->filter_by_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue filter_by_characteristic_id = 5;</code>
     */
    public function setFilterByCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->filter_by_characteristic_id = $var;
    }

    /**
     * <code>bool filter_by_characteristic_id_null = 1005;</code>
     */
    public function getFilterByCharacteristicIdNull()
    {
        return $this->filter_by_characteristic_id_null;
    }

    /**
     * <code>bool filter_by_characteristic_id_null = 1005;</code>
     */
    public function setFilterByCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue filter_by_charac_value = 6;</code>
     */
    public function getFilterByCharacValue()
    {
        return $this->filter_by_charac_value;
    }

    /**
     * <code>.dstore.values.StringValue filter_by_charac_value = 6;</code>
     */
    public function setFilterByCharacValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->filter_by_charac_value = $var;
    }

    /**
     * <code>bool filter_by_charac_value_null = 1006;</code>
     */
    public function getFilterByCharacValueNull()
    {
        return $this->filter_by_charac_value_null;
    }

    /**
     * <code>bool filter_by_charac_value_null = 1006;</code>
     */
    public function setFilterByCharacValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_charac_value_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue binary_characteristic_value_id = 7;</code>
     */
    public function getBinaryCharacteristicValueId()
    {
        return $this->binary_characteristic_value_id;
    }

    /**
     * <code>.dstore.values.IntegerValue binary_characteristic_value_id = 7;</code>
     */
    public function setBinaryCharacteristicValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_characteristic_value_id = $var;
    }

    /**
     * <code>bool binary_characteristic_value_id_null = 1007;</code>
     */
    public function getBinaryCharacteristicValueIdNull()
    {
        return $this->binary_characteristic_value_id_null;
    }

    /**
     * <code>bool binary_characteristic_value_id_null = 1007;</code>
     */
    public function setBinaryCharacteristicValueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_characteristic_value_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue negate_filter_by_params = 8;</code>
     */
    public function getNegateFilterByParams()
    {
        return $this->negate_filter_by_params;
    }

    /**
     * <code>.dstore.values.BooleanValue negate_filter_by_params = 8;</code>
     */
    public function setNegateFilterByParams(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->negate_filter_by_params = $var;
    }

    /**
     * <code>bool negate_filter_by_params_null = 1008;</code>
     */
    public function getNegateFilterByParamsNull()
    {
        return $this->negate_filter_by_params_null;
    }

    /**
     * <code>bool negate_filter_by_params_null = 1008;</code>
     */
    public function setNegateFilterByParamsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->negate_filter_by_params_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue sort_by_characteristic_id_list = 9;</code>
     */
    public function getSortByCharacteristicIdList()
    {
        return $this->sort_by_characteristic_id_list;
    }

    /**
     * <code>.dstore.values.StringValue sort_by_characteristic_id_list = 9;</code>
     */
    public function setSortByCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->sort_by_characteristic_id_list = $var;
    }

    /**
     * <code>bool sort_by_characteristic_id_list_null = 1009;</code>
     */
    public function getSortByCharacteristicIdListNull()
    {
        return $this->sort_by_characteristic_id_list_null;
    }

    /**
     * <code>bool sort_by_characteristic_id_list_null = 1009;</code>
     */
    public function setSortByCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_by_characteristic_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue sort_option_list = 10;</code>
     */
    public function getSortOptionList()
    {
        return $this->sort_option_list;
    }

    /**
     * <code>.dstore.values.StringValue sort_option_list = 10;</code>
     */
    public function setSortOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->sort_option_list = $var;
    }

    /**
     * <code>bool sort_option_list_null = 1010;</code>
     */
    public function getSortOptionListNull()
    {
        return $this->sort_option_list_null;
    }

    /**
     * <code>bool sort_option_list_null = 1010;</code>
     */
    public function setSortOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_option_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue inherit_depth_option_list = 11;</code>
     */
    public function getInheritDepthOptionList()
    {
        return $this->inherit_depth_option_list;
    }

    /**
     * <code>.dstore.values.StringValue inherit_depth_option_list = 11;</code>
     */
    public function setInheritDepthOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->inherit_depth_option_list = $var;
    }

    /**
     * <code>bool inherit_depth_option_list_null = 1011;</code>
     */
    public function getInheritDepthOptionListNull()
    {
        return $this->inherit_depth_option_list_null;
    }

    /**
     * <code>bool inherit_depth_option_list_null = 1011;</code>
     */
    public function setInheritDepthOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->inherit_depth_option_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue recursive_evaluation_option_list = 12;</code>
     */
    public function getRecursiveEvaluationOptionList()
    {
        return $this->recursive_evaluation_option_list;
    }

    /**
     * <code>.dstore.values.StringValue recursive_evaluation_option_list = 12;</code>
     */
    public function setRecursiveEvaluationOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->recursive_evaluation_option_list = $var;
    }

    /**
     * <code>bool recursive_evaluation_option_list_null = 1012;</code>
     */
    public function getRecursiveEvaluationOptionListNull()
    {
        return $this->recursive_evaluation_option_list_null;
    }

    /**
     * <code>bool recursive_evaluation_option_list_null = 1012;</code>
     */
    public function setRecursiveEvaluationOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->recursive_evaluation_option_list_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_values_for_sort_by_characs = 13;</code>
     */
    public function getGetValuesForSortByCharacs()
    {
        return $this->get_values_for_sort_by_characs;
    }

    /**
     * <code>.dstore.values.BooleanValue get_values_for_sort_by_characs = 13;</code>
     */
    public function setGetValuesForSortByCharacs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_values_for_sort_by_characs = $var;
    }

    /**
     * <code>bool get_values_for_sort_by_characs_null = 1013;</code>
     */
    public function getGetValuesForSortByCharacsNull()
    {
        return $this->get_values_for_sort_by_characs_null;
    }

    /**
     * <code>bool get_values_for_sort_by_characs_null = 1013;</code>
     */
    public function setGetValuesForSortByCharacsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_values_for_sort_by_characs_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue from_row_number = 14;</code>
     */
    public function getFromRowNumber()
    {
        return $this->from_row_number;
    }

    /**
     * <code>.dstore.values.IntegerValue from_row_number = 14;</code>
     */
    public function setFromRowNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_row_number = $var;
    }

    /**
     * <code>bool from_row_number_null = 1014;</code>
     */
    public function getFromRowNumberNull()
    {
        return $this->from_row_number_null;
    }

    /**
     * <code>bool from_row_number_null = 1014;</code>
     */
    public function setFromRowNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_row_number_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue max_number_of_nodes = 15;</code>
     */
    public function getMaxNumberOfNodes()
    {
        return $this->max_number_of_nodes;
    }

    /**
     * <code>.dstore.values.IntegerValue max_number_of_nodes = 15;</code>
     */
    public function setMaxNumberOfNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->max_number_of_nodes = $var;
    }

    /**
     * <code>bool max_number_of_nodes_null = 1015;</code>
     */
    public function getMaxNumberOfNodesNull()
    {
        return $this->max_number_of_nodes_null;
    }

    /**
     * <code>bool max_number_of_nodes_null = 1015;</code>
     */
    public function setMaxNumberOfNodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_nodes_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue count = 16;</code>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <code>.dstore.values.IntegerValue count = 16;</code>
     */
    public function setCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->count = $var;
    }

    /**
     * <code>bool count_null = 1016;</code>
     */
    public function getCountNull()
    {
        return $this->count_null;
    }

    /**
     * <code>bool count_null = 1016;</code>
     */
    public function setCountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->count_null = $var;
    }

}

