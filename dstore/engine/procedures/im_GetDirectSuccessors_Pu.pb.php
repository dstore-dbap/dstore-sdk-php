<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetDirectSuccessors_Pu.proto

namespace Dstore\Engine\Im_GetDirectSuccessors_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $tree_node_id = null;
    private $tree_node_id_null = false;
    private $language_id = null;
    private $language_id_null = false;
    private $group_by_characteristic_id = null;
    private $group_by_characteristic_id_null = false;
    private $binary_characteristic_value_id = null;
    private $binary_characteristic_value_id_null = false;
    private $filter_by_characteristic_id = null;
    private $filter_by_characteristic_id_null = false;
    private $filter_by_charac_value = null;
    private $filter_by_charac_value_null = false;
    private $output_into_one_id = null;
    private $output_into_one_id_null = false;
    private $negate_filter_by_params = null;
    private $negate_filter_by_params_null = false;
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
    private $from_row_number = null;
    private $from_row_number_null = false;
    private $max_number_of_nodes = null;
    private $max_number_of_nodes_null = false;
    private $count = null;
    private $count_null = false;

    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_node_id = $var;
    }

    public function getTreeNodeIdNull()
    {
        return $this->tree_node_id_null;
    }

    public function setTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_id_null = $var;
    }

    public function getLanguageId()
    {
        return $this->language_id;
    }

    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id = $var;
    }

    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    public function getGroupByCharacteristicId()
    {
        return $this->group_by_characteristic_id;
    }

    public function setGroupByCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->group_by_characteristic_id = $var;
    }

    public function getGroupByCharacteristicIdNull()
    {
        return $this->group_by_characteristic_id_null;
    }

    public function setGroupByCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->group_by_characteristic_id_null = $var;
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

    public function getFromRowNumber()
    {
        return $this->from_row_number;
    }

    public function setFromRowNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_row_number = $var;
    }

    public function getFromRowNumberNull()
    {
        return $this->from_row_number_null;
    }

    public function setFromRowNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_row_number_null = $var;
    }

    public function getMaxNumberOfNodes()
    {
        return $this->max_number_of_nodes;
    }

    public function setMaxNumberOfNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_nodes = $var;
    }

    public function getMaxNumberOfNodesNull()
    {
        return $this->max_number_of_nodes_null;
    }

    public function setMaxNumberOfNodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_nodes_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetDirectSuccessors_Pu\Response_Row::class);
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
    private $node_description = null;
    private $value2 = null;
    private $value3 = null;
    private $value1 = null;
    private $binary_code_id = null;
    private $node_id = null;
    private $tree_node_id = null;
    private $sort_no = null;
    private $level_id = null;
    private $value = null;
    private $value_sort_no = null;
    private $value_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getNodeDescription()
    {
        return $this->node_description;
    }

    public function setNodeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_description = $var;
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

    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_code_id = $var;
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

    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_node_id = $var;
    }

    public function getSortNo()
    {
        return $this->sort_no;
    }

    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_no = $var;
    }

    public function getLevelId()
    {
        return $this->level_id;
    }

    public function setLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_id = $var;
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

    public function getValueSortNo()
    {
        return $this->value_sort_no;
    }

    public function setValueSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->value_sort_no = $var;
    }

    public function getValueId()
    {
        return $this->value_id;
    }

    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->value_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9d150a386473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f476574446972656374537563636573736f72735f50752e70726f74" .
    "6f12276473746f72652e656e67696e652e696d5f47657444697265637453" .
    "7563636573736f72735f50751a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22a10c0a0a506172616d657465727312310a0c7472" .
    "65655f6e6f64655f696418012001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565121a0a11747265655f6e6f64655f69" .
    "645f6e756c6c18e9072001280812300a0b6c616e67756167655f69641802" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512190a106c616e67756167655f69645f6e756c6c18ea0720012808" .
    "123f0a1a67726f75705f62795f63686172616374657269737469635f6964" .
    "18032001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512280a1f67726f75705f62795f636861726163746572697374" .
    "69635f69645f6e756c6c18eb072001280812430a1e62696e6172795f6368" .
    "6172616374657269737469635f76616c75655f696418042001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c7565122c0a23" .
    "62696e6172795f63686172616374657269737469635f76616c75655f6964" .
    "5f6e756c6c18ec072001280812400a1b66696c7465725f62795f63686172" .
    "616374657269737469635f696418052001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512290a2066696c7465725f62" .
    "795f63686172616374657269737469635f69645f6e756c6c18ed07200128" .
    "08123a0a1666696c7465725f62795f6368617261635f76616c7565180620" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512240a1b66696c7465725f62795f6368617261635f76616c75655f6e75" .
    "6c6c18ee072001280812370a126f75747075745f696e746f5f6f6e655f69" .
    "6418072001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512200a176f75747075745f696e746f5f6f6e655f69645f6e" .
    "756c6c18ef0720012808123c0a176e65676174655f66696c7465725f6279" .
    "5f706172616d7318082001280b321b2e6473746f72652e76616c7565732e" .
    "626f6f6c65616e56616c756512250a1c6e65676174655f66696c7465725f" .
    "62795f706172616d735f6e756c6c18f0072001280812420a1e736f72745f" .
    "62795f63686172616374657269737469635f69645f6c6973741809200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "2c0a23736f72745f62795f63686172616374657269737469635f69645f6c" .
    "6973745f6e756c6c18f1072001280812340a10736f72745f6f7074696f6e" .
    "5f6c697374180a2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565121e0a15736f72745f6f7074696f6e5f6c6973745f" .
    "6e756c6c18f20720012808123d0a19696e68657269745f64657074685f6f" .
    "7074696f6e5f6c697374180b2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512270a1e696e68657269745f64657074" .
    "685f6f7074696f6e5f6c6973745f6e756c6c18f3072001280812440a2072" .
    "65637572736976655f6576616c756174696f6e5f6f7074696f6e5f6c6973" .
    "74180c2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c7565122e0a257265637572736976655f6576616c756174696f6e5f" .
    "6f7074696f6e5f6c6973745f6e756c6c18f4072001280812430a1e676574" .
    "5f76616c7565735f666f725f736f72745f62795f63686172616373180d20" .
    "01280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c" .
    "7565122c0a236765745f76616c7565735f666f725f736f72745f62795f63" .
    "6861726163735f6e756c6c18f5072001280812340a0f66726f6d5f726f77" .
    "5f6e756d626572180e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565121d0a1466726f6d5f726f775f6e756d6265" .
    "725f6e756c6c18f6072001280812380a136d61785f6e756d6265725f6f66" .
    "5f6e6f646573180f2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512210a186d61785f6e756d6265725f6f665f6e" .
    "6f6465735f6e756c6c18f70720012808122a0a05636f756e741810200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12130a0a636f756e745f6e756c6c18f8072001280822d8060a0852657370" .
    "6f6e736512480a106d6574615f696e666f726d6174696f6e18022003280b" .
    "322e2e6473746f72652e656e67696e652e6d657461696e666f726d617469" .
    "6f6e2e4d657461496e666f726d6174696f6e122f0a076d65737361676518" .
    "032003280b321e2e6473746f72652e656e67696e652e6d6573736167652e" .
    "4d65737361676512420a03726f7718042003280b32352e6473746f72652e" .
    "656e67696e652e696d5f476574446972656374537563636573736f72735f" .
    "50752e526573706f6e73652e526f77122a0a05636f756e7418652001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c75651a" .
    "e0040a03526f77120f0a06726f775f696418904e2001280512350a106e6f" .
    "64655f6465736372697074696f6e18914e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565122b0a0676616c75653218" .
    "924e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565122b0a0676616c75653318934e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565122b0a0676616c75653118" .
    "944e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512340a0e62696e6172795f636f64655f696418954e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565122d" .
    "0a076e6f64655f696418964e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512320a0c747265655f6e6f64655f69" .
    "6418974e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565122d0a07736f72745f6e6f18984e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565122e0a086c65" .
    "76656c5f696418994e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565122b0a0576616c756518a59c012001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c756512340a" .
    "0d76616c75655f736f72745f6e6f18a69c012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565122f0a0876616c7565" .
    "5f696418a79c012001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565425a0a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a3b676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f696d5f47657444697265637453" .
    "7563636573736f72735f5075620670726f746f33"
));

