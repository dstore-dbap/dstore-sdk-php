<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_SearchProductTreeNodes_Ad.proto

namespace Dstore\Engine\Im_SearchProductTreeNodes_Ad;

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
    private $include_inactive_nodes = null;
    private $include_inactive_nodes_null = false;
    private $count = null;
    private $count_null = false;
    private $search_case_sensitive = null;
    private $search_case_sensitive_null = false;

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

    public function getIncludeInactiveNodes()
    {
        return $this->include_inactive_nodes;
    }

    public function setIncludeInactiveNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_inactive_nodes = $var;
    }

    public function getIncludeInactiveNodesNull()
    {
        return $this->include_inactive_nodes_null;
    }

    public function setIncludeInactiveNodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_inactive_nodes_null = $var;
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

    public function getSearchCaseSensitive()
    {
        return $this->search_case_sensitive;
    }

    public function setSearchCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->search_case_sensitive = $var;
    }

    public function getSearchCaseSensitiveNull()
    {
        return $this->search_case_sensitive_null;
    }

    public function setSearchCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_case_sensitive_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_SearchProductTreeNodes_Ad\Response_Row::class);
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
    private $active = null;
    private $predecessors_level_no = null;
    private $matching_value = null;
    private $pre_predecessors_level_no = null;
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

    public function getActive()
    {
        return $this->active;
    }

    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->active = $var;
    }

    public function getPredecessorsLevelNo()
    {
        return $this->predecessors_level_no;
    }

    public function setPredecessorsLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->predecessors_level_no = $var;
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

    public function getPrePredecessorsLevelNo()
    {
        return $this->pre_predecessors_level_no;
    }

    public function setPrePredecessorsLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->pre_predecessors_level_no = $var;
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
    "0abe110a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f53656172636850726f64756374547265654e6f6465735f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e696d5f53656172636850" .
    "726f64756374547265654e6f6465735f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f2286080a0a506172616d6574657273" .
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
    "18f10720012808123b0a16696e636c7564655f696e6163746976655f6e6f" .
    "646573180a2001280b321b2e6473746f72652e76616c7565732e626f6f6c" .
    "65616e56616c756512240a1b696e636c7564655f696e6163746976655f6e" .
    "6f6465735f6e756c6c18f20720012808122a0a05636f756e74180b200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12130a0a636f756e745f6e756c6c18f30720012808123a0a157365617263" .
    "685f636173655f73656e736974697665180c2001280b321b2e6473746f72" .
    "652e76616c7565732e626f6f6c65616e56616c756512230a1a7365617263" .
    "685f636173655f73656e7369746976655f6e756c6c18f40720012808228b" .
    "070a08526573706f6e736512480a106d6574615f696e666f726d6174696f" .
    "6e18022003280b322e2e6473746f72652e656e67696e652e6d657461696e" .
    "666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d" .
    "65737361676518032003280b321e2e6473746f72652e656e67696e652e6d" .
    "6573736167652e4d65737361676512450a03726f7718042003280b32382e" .
    "6473746f72652e656e67696e652e696d5f53656172636850726f64756374" .
    "547265654e6f6465735f41642e526573706f6e73652e526f77122a0a0563" .
    "6f756e7418652001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c75651a90050a03526f77120f0a06726f775f696418904e" .
    "20012805122c0a0661637469766518914e2001280b321b2e6473746f7265" .
    "2e76616c7565732e626f6f6c65616e56616c7565123b0a15707265646563" .
    "6573736f72735f6c6576656c5f6e6f18924e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512330a0e6d61746368" .
    "696e675f76616c756518934e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565123f0a197072655f7072656465636573" .
    "736f72735f6c6576656c5f6e6f18944e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512320a0c747265655f6e6f" .
    "64655f696418954e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565122d0a076e6f64655f696418964e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651241" .
    "0a1c7072655f7072656465636573736f72735f6465736372697074696f6e" .
    "18974e2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c7565122c0a0770726f6475637418984e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512430a1d7072655f70" .
    "72656465636573736f72735f747265655f6e6f64655f696418994e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "123f0a197072656465636573736f72735f747265655f6e6f64655f696418" .
    "9a4e2001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c7565123d0a187072656465636573736f72735f6465736372697074" .
    "696f6e189b4e2001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c7565425d0a1b696f2e6473746f72652e656e67696e652e70" .
    "726f636564757265735a3e676f73646b2e6473746f72652e64652f656e67" .
    "696e652f70726f636564757265732f696d5f53656172636850726f647563" .
    "74547265654e6f6465735f4164620670726f746f33"
));
