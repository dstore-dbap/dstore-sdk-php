<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_SearchProductTreeNodes_Pu.proto

namespace Dstore\Engine\Im_SearchProductTreeNodes_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $domain_tree_node_id = null;
    private $domain_tree_node_id_null = false;
    private $node_characteristic_ids = null;
    private $node_characteristic_ids_null = false;
    private $value = null;
    private $value_null = false;
    private $is_like = null;
    private $is_like_null = false;
    private $include_inherited = null;
    private $include_inherited_null = false;
    private $start_at_row_no = null;
    private $start_at_row_no_null = false;
    private $row_count = null;
    private $row_count_null = false;
    private $include_value_details = null;
    private $include_value_details_null = false;
    private $include_variants = null;
    private $include_variants_null = false;
    private $maintain_search_item_lacks = null;
    private $maintain_search_item_lacks_null = false;
    private $binary_characteristic_value_id = null;
    private $binary_characteristic_value_id_null = false;
    private $filter_by_characteristic_id = null;
    private $filter_by_characteristic_id_null = false;
    private $filter_by_charac_value = null;
    private $filter_by_charac_value_null = false;
    private $country = null;
    private $country_null = false;
    private $negate_filter_by_params = null;
    private $negate_filter_by_params_null = false;
    private $count = null;
    private $count_null = false;
    private $sort_by_characteristic_id_list = null;
    private $sort_by_characteristic_id_list_null = false;
    private $sort_option_list = null;
    private $sort_option_list_null = false;
    private $inherit_depth_option_list = null;
    private $inherit_depth_option_list_null = false;
    private $recursive_evaluation_option_list = null;
    private $recursive_evaluation_option_list_null = false;
    private $get_values_for_sort_by_characs = null;
    private $get_values_for_sort_by_characs_null = false;
    private $output_into_one_id = null;
    private $output_into_one_id_null = false;

    public function getDomainTreeNodeId()
    {
        return $this->domain_tree_node_id;
    }

    public function setDomainTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->domain_tree_node_id = $var;
    }

    public function getDomainTreeNodeIdNull()
    {
        return $this->domain_tree_node_id_null;
    }

    public function setDomainTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->domain_tree_node_id_null = $var;
    }

    public function getNodeCharacteristicIds()
    {
        return $this->node_characteristic_ids;
    }

    public function setNodeCharacteristicIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_characteristic_ids = $var;
    }

    public function getNodeCharacteristicIdsNull()
    {
        return $this->node_characteristic_ids_null;
    }

    public function setNodeCharacteristicIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_ids_null = $var;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getValueNull()
    {
        return $this->value_null;
    }

    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

    public function getIsLike()
    {
        return $this->is_like;
    }

    public function setIsLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_like = $var;
    }

    public function getIsLikeNull()
    {
        return $this->is_like_null;
    }

    public function setIsLikeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_like_null = $var;
    }

    public function getIncludeInherited()
    {
        return $this->include_inherited;
    }

    public function setIncludeInherited(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_inherited = $var;
    }

    public function getIncludeInheritedNull()
    {
        return $this->include_inherited_null;
    }

    public function setIncludeInheritedNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_inherited_null = $var;
    }

    public function getStartAtRowNo()
    {
        return $this->start_at_row_no;
    }

    public function setStartAtRowNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->start_at_row_no = $var;
    }

    public function getStartAtRowNoNull()
    {
        return $this->start_at_row_no_null;
    }

    public function setStartAtRowNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->start_at_row_no_null = $var;
    }

    public function getRowCount()
    {
        return $this->row_count;
    }

    public function setRowCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->row_count = $var;
    }

    public function getRowCountNull()
    {
        return $this->row_count_null;
    }

    public function setRowCountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->row_count_null = $var;
    }

    public function getIncludeValueDetails()
    {
        return $this->include_value_details;
    }

    public function setIncludeValueDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_value_details = $var;
    }

    public function getIncludeValueDetailsNull()
    {
        return $this->include_value_details_null;
    }

    public function setIncludeValueDetailsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_value_details_null = $var;
    }

    public function getIncludeVariants()
    {
        return $this->include_variants;
    }

    public function setIncludeVariants(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_variants = $var;
    }

    public function getIncludeVariantsNull()
    {
        return $this->include_variants_null;
    }

    public function setIncludeVariantsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_variants_null = $var;
    }

    public function getMaintainSearchItemLacks()
    {
        return $this->maintain_search_item_lacks;
    }

    public function setMaintainSearchItemLacks(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->maintain_search_item_lacks = $var;
    }

    public function getMaintainSearchItemLacksNull()
    {
        return $this->maintain_search_item_lacks_null;
    }

    public function setMaintainSearchItemLacksNull($var)
    {
        GPBUtil::checkBool($var);
        $this->maintain_search_item_lacks_null = $var;
    }

    public function getBinaryCharacteristicValueId()
    {
        return $this->binary_characteristic_value_id;
    }

    public function setBinaryCharacteristicValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_characteristic_value_id = $var;
    }

    public function getBinaryCharacteristicValueIdNull()
    {
        return $this->binary_characteristic_value_id_null;
    }

    public function setBinaryCharacteristicValueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_characteristic_value_id_null = $var;
    }

    public function getFilterByCharacteristicId()
    {
        return $this->filter_by_characteristic_id;
    }

    public function setFilterByCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->filter_by_characteristic_id = $var;
    }

    public function getFilterByCharacteristicIdNull()
    {
        return $this->filter_by_characteristic_id_null;
    }

    public function setFilterByCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_characteristic_id_null = $var;
    }

    public function getFilterByCharacValue()
    {
        return $this->filter_by_charac_value;
    }

    public function setFilterByCharacValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->filter_by_charac_value = $var;
    }

    public function getFilterByCharacValueNull()
    {
        return $this->filter_by_charac_value_null;
    }

    public function setFilterByCharacValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_charac_value_null = $var;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->country = $var;
    }

    public function getCountryNull()
    {
        return $this->country_null;
    }

    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

    public function getNegateFilterByParams()
    {
        return $this->negate_filter_by_params;
    }

    public function setNegateFilterByParams(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->negate_filter_by_params = $var;
    }

    public function getNegateFilterByParamsNull()
    {
        return $this->negate_filter_by_params_null;
    }

    public function setNegateFilterByParamsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->negate_filter_by_params_null = $var;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->count = $var;
    }

    public function getCountNull()
    {
        return $this->count_null;
    }

    public function setCountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->count_null = $var;
    }

    public function getSortByCharacteristicIdList()
    {
        return $this->sort_by_characteristic_id_list;
    }

    public function setSortByCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->sort_by_characteristic_id_list = $var;
    }

    public function getSortByCharacteristicIdListNull()
    {
        return $this->sort_by_characteristic_id_list_null;
    }

    public function setSortByCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_by_characteristic_id_list_null = $var;
    }

    public function getSortOptionList()
    {
        return $this->sort_option_list;
    }

    public function setSortOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->sort_option_list = $var;
    }

    public function getSortOptionListNull()
    {
        return $this->sort_option_list_null;
    }

    public function setSortOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_option_list_null = $var;
    }

    public function getInheritDepthOptionList()
    {
        return $this->inherit_depth_option_list;
    }

    public function setInheritDepthOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->inherit_depth_option_list = $var;
    }

    public function getInheritDepthOptionListNull()
    {
        return $this->inherit_depth_option_list_null;
    }

    public function setInheritDepthOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->inherit_depth_option_list_null = $var;
    }

    public function getRecursiveEvaluationOptionList()
    {
        return $this->recursive_evaluation_option_list;
    }

    public function setRecursiveEvaluationOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->recursive_evaluation_option_list = $var;
    }

    public function getRecursiveEvaluationOptionListNull()
    {
        return $this->recursive_evaluation_option_list_null;
    }

    public function setRecursiveEvaluationOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->recursive_evaluation_option_list_null = $var;
    }

    public function getGetValuesForSortByCharacs()
    {
        return $this->get_values_for_sort_by_characs;
    }

    public function setGetValuesForSortByCharacs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_values_for_sort_by_characs = $var;
    }

    public function getGetValuesForSortByCharacsNull()
    {
        return $this->get_values_for_sort_by_characs_null;
    }

    public function setGetValuesForSortByCharacsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_values_for_sort_by_characs_null = $var;
    }

    public function getOutputIntoOneId()
    {
        return $this->output_into_one_id;
    }

    public function setOutputIntoOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->output_into_one_id = $var;
    }

    public function getOutputIntoOneIdNull()
    {
        return $this->output_into_one_id_null;
    }

    public function setOutputIntoOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_into_one_id_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $count = null;

    public function getMetaInformation()
    {
        return $this->meta_information;
    }

    public function setMetaInformation(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Metainformation\MetaInformation::class);
        $this->meta_information = $var;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Message\Message::class);
        $this->message = $var;
    }

    public function getRow()
    {
        return $this->row;
    }

    public function setRow(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_SearchProductTreeNodes_Pu\Response_Row::class);
        $this->row = $var;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->count = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $value2 = null;
    private $value3 = null;
    private $value1 = null;
    private $matching_value = null;
    private $binary_code_id = null;
    private $tree_node_id = null;
    private $node_id = null;
    private $pre_predecessors_description = null;
    private $product = null;
    private $pre_predecessors_tree_node_id = null;
    private $predecessors_tree_node_id = null;
    private $predecessors_description = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getValue2()
    {
        return $this->value2;
    }

    public function setValue2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value2 = $var;
    }

    public function getValue3()
    {
        return $this->value3;
    }

    public function setValue3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value3 = $var;
    }

    public function getValue1()
    {
        return $this->value1;
    }

    public function setValue1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value1 = $var;
    }

    public function getMatchingValue()
    {
        return $this->matching_value;
    }

    public function setMatchingValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->matching_value = $var;
    }

    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_code_id = $var;
    }

    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_node_id = $var;
    }

    public function getNodeId()
    {
        return $this->node_id;
    }

    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_id = $var;
    }

    public function getPrePredecessorsDescription()
    {
        return $this->pre_predecessors_description;
    }

    public function setPrePredecessorsDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->pre_predecessors_description = $var;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->product = $var;
    }

    public function getPrePredecessorsTreeNodeId()
    {
        return $this->pre_predecessors_tree_node_id;
    }

    public function setPrePredecessorsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->pre_predecessors_tree_node_id = $var;
    }

    public function getPredecessorsTreeNodeId()
    {
        return $this->predecessors_tree_node_id;
    }

    public function setPredecessorsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->predecessors_tree_node_id = $var;
    }

    public function getPredecessorsDescription()
    {
        return $this->predecessors_description;
    }

    public function setPredecessorsDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->predecessors_description = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad5190a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f53656172636850726f64756374547265654e6f6465735f50752e70" .
    "726f746f122a6473746f72652e656e67696e652e696d5f53656172636850" .
    "726f64756374547265654e6f6465735f50751a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f228c100a0a506172616d6574657273" .
    "12380a13646f6d61696e5f747265655f6e6f64655f696418012001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651221" .
    "0a18646f6d61696e5f747265655f6e6f64655f69645f6e756c6c18e90720" .
    "012808123b0a176e6f64655f63686172616374657269737469635f696473" .
    "18022001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512250a1c6e6f64655f63686172616374657269737469635f6964" .
    "735f6e756c6c18ea072001280812290a0576616c756518032001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512130a0a" .
    "76616c75655f6e756c6c18eb0720012808122c0a0769735f6c696b651804" .
    "2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e5661" .
    "6c756512150a0c69735f6c696b655f6e756c6c18ec072001280812360a11" .
    "696e636c7564655f696e6865726974656418052001280b321b2e6473746f" .
    "72652e76616c7565732e626f6f6c65616e56616c7565121f0a16696e636c" .
    "7564655f696e686572697465645f6e756c6c18ed072001280812340a0f73" .
    "746172745f61745f726f775f6e6f18062001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565121d0a1473746172745f61" .
    "745f726f775f6e6f5f6e756c6c18ee0720012808122e0a09726f775f636f" .
    "756e7418072001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512170a0e726f775f636f756e745f6e756c6c18ef0720" .
    "012808123a0a15696e636c7564655f76616c75655f64657461696c731808" .
    "2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e5661" .
    "6c756512230a1a696e636c7564655f76616c75655f64657461696c735f6e" .
    "756c6c18f0072001280812350a10696e636c7564655f76617269616e7473" .
    "18092001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c7565121e0a15696e636c7564655f76617269616e74735f6e756c6c" .
    "18f10720012808123f0a1a6d61696e7461696e5f7365617263685f697465" .
    "6d5f6c61636b73180a2001280b321b2e6473746f72652e76616c7565732e" .
    "626f6f6c65616e56616c756512280a1f6d61696e7461696e5f7365617263" .
    "685f6974656d5f6c61636b735f6e756c6c18f2072001280812430a1e6269" .
    "6e6172795f63686172616374657269737469635f76616c75655f6964180b" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565122c0a2362696e6172795f63686172616374657269737469635f76" .
    "616c75655f69645f6e756c6c18f3072001280812400a1b66696c7465725f" .
    "62795f63686172616374657269737469635f6964180c2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512290a2066" .
    "696c7465725f62795f63686172616374657269737469635f69645f6e756c" .
    "6c18f40720012808123a0a1666696c7465725f62795f6368617261635f76" .
    "616c7565180d2001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c756512240a1b66696c7465725f62795f6368617261635f76" .
    "616c75655f6e756c6c18f50720012808122b0a07636f756e747279180e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512150a0c636f756e7472795f6e756c6c18f60720012808123c0a176e65" .
    "676174655f66696c7465725f62795f706172616d73180f2001280b321b2e" .
    "6473746f72652e76616c7565732e626f6f6c65616e56616c756512250a1c" .
    "6e65676174655f66696c7465725f62795f706172616d735f6e756c6c18f7" .
    "0720012808122a0a05636f756e7418102001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512130a0a636f756e745f6e" .
    "756c6c18f8072001280812420a1e736f72745f62795f6368617261637465" .
    "7269737469635f69645f6c69737418112001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c7565122c0a23736f72745f62795f" .
    "63686172616374657269737469635f69645f6c6973745f6e756c6c18f907" .
    "2001280812340a10736f72745f6f7074696f6e5f6c69737418122001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c7565121e" .
    "0a15736f72745f6f7074696f6e5f6c6973745f6e756c6c18fa0720012808" .
    "123d0a19696e68657269745f64657074685f6f7074696f6e5f6c69737418" .
    "132001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512270a1e696e68657269745f64657074685f6f7074696f6e5f6c69" .
    "73745f6e756c6c18fb072001280812440a207265637572736976655f6576" .
    "616c756174696f6e5f6f7074696f6e5f6c69737418142001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565122e0a257265" .
    "637572736976655f6576616c756174696f6e5f6f7074696f6e5f6c697374" .
    "5f6e756c6c18fc072001280812430a1e6765745f76616c7565735f666f72" .
    "5f736f72745f62795f6368617261637318152001280b321b2e6473746f72" .
    "652e76616c7565732e626f6f6c65616e56616c7565122c0a236765745f76" .
    "616c7565735f666f725f736f72745f62795f636861726163735f6e756c6c" .
    "18fd072001280812370a126f75747075745f696e746f5f6f6e655f696418" .
    "162001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512200a176f75747075745f696e746f5f6f6e655f69645f6e756c" .
    "6c18fe0720012808229c070a08526573706f6e736512480a106d6574615f" .
    "696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e67" .
    "696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d" .
    "6174696f6e122f0a076d65737361676518032003280b321e2e6473746f72" .
    "652e656e67696e652e6d6573736167652e4d65737361676512450a03726f" .
    "7718042003280b32382e6473746f72652e656e67696e652e696d5f536561" .
    "72636850726f64756374547265654e6f6465735f50752e526573706f6e73" .
    "652e526f77122a0a05636f756e7418652001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c75651aa1050a03526f77120f0a" .
    "06726f775f696418904e20012805122b0a0676616c75653218914e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "2b0a0676616c75653318924e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122b0a0676616c75653118934e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "330a0e6d61746368696e675f76616c756518944e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c756512340a0e62696e61" .
    "72795f636f64655f696418954e2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512320a0c747265655f6e6f64655f" .
    "696418964e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565122d0a076e6f64655f696418974e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512410a1c70" .
    "72655f7072656465636573736f72735f6465736372697074696f6e18984e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565122c0a0770726f6475637418994e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756512430a1d7072655f70726564" .
    "65636573736f72735f747265655f6e6f64655f6964189a4e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565123f0a" .
    "197072656465636573736f72735f747265655f6e6f64655f6964189b4e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565123d0a187072656465636573736f72735f6465736372697074696f6e" .
    "189c4e2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c7565425d0a1b696f2e6473746f72652e656e67696e652e70726f63" .
    "6564757265735a3e676f73646b2e6473746f72652e64652f656e67696e65" .
    "2f70726f636564757265732f696d5f53656172636850726f647563745472" .
    "65654e6f6465735f5075620670726f746f33"
));
