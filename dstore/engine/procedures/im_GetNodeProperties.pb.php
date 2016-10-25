<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeProperties.proto

namespace Dstore\Engine\Im_GetNodeProperties;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $node_list = null;
    private $node_list_null = false;
    private $tree_node_ids = null;
    private $tree_node_ids_null = false;
    private $language_id = null;
    private $language_id_null = false;
    private $inherit_depth = null;
    private $inherit_depth_null = false;
    private $recursive_evaluation = null;
    private $recursive_evaluation_null = false;
    private $characteristic_id_list = null;
    private $characteristic_id_list_null = false;
    private $use_distinct = null;
    private $use_distinct_null = false;
    private $date_format = null;
    private $date_format_null = false;
    private $include_inherits_from_info = null;
    private $include_inherits_from_info_null = false;
    private $language_id_for_charac_descript = null;
    private $language_id_for_charac_descript_null = false;
    private $check_nodes = null;
    private $check_nodes_null = false;
    private $get_details_for_charac_id_list = null;
    private $get_details_for_charac_id_list_null = false;

    public function getNodeList()
    {
        return $this->node_list;
    }

    public function setNodeList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_list = $var;
    }

    public function getNodeListNull()
    {
        return $this->node_list_null;
    }

    public function setNodeListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_list_null = $var;
    }

    public function getTreeNodeIds()
    {
        return $this->tree_node_ids;
    }

    public function setTreeNodeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->tree_node_ids = $var;
    }

    public function getTreeNodeIdsNull()
    {
        return $this->tree_node_ids_null;
    }

    public function setTreeNodeIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_ids_null = $var;
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

    public function getInheritDepth()
    {
        return $this->inherit_depth;
    }

    public function setInheritDepth(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->inherit_depth = $var;
    }

    public function getInheritDepthNull()
    {
        return $this->inherit_depth_null;
    }

    public function setInheritDepthNull($var)
    {
        GPBUtil::checkBool($var);
        $this->inherit_depth_null = $var;
    }

    public function getRecursiveEvaluation()
    {
        return $this->recursive_evaluation;
    }

    public function setRecursiveEvaluation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->recursive_evaluation = $var;
    }

    public function getRecursiveEvaluationNull()
    {
        return $this->recursive_evaluation_null;
    }

    public function setRecursiveEvaluationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->recursive_evaluation_null = $var;
    }

    public function getCharacteristicIdList()
    {
        return $this->characteristic_id_list;
    }

    public function setCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_id_list = $var;
    }

    public function getCharacteristicIdListNull()
    {
        return $this->characteristic_id_list_null;
    }

    public function setCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list_null = $var;
    }

    public function getUseDistinct()
    {
        return $this->use_distinct;
    }

    public function setUseDistinct(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->use_distinct = $var;
    }

    public function getUseDistinctNull()
    {
        return $this->use_distinct_null;
    }

    public function setUseDistinctNull($var)
    {
        GPBUtil::checkBool($var);
        $this->use_distinct_null = $var;
    }

    public function getDateFormat()
    {
        return $this->date_format;
    }

    public function setDateFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->date_format = $var;
    }

    public function getDateFormatNull()
    {
        return $this->date_format_null;
    }

    public function setDateFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_format_null = $var;
    }

    public function getIncludeInheritsFromInfo()
    {
        return $this->include_inherits_from_info;
    }

    public function setIncludeInheritsFromInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_inherits_from_info = $var;
    }

    public function getIncludeInheritsFromInfoNull()
    {
        return $this->include_inherits_from_info_null;
    }

    public function setIncludeInheritsFromInfoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_inherits_from_info_null = $var;
    }

    public function getLanguageIdForCharacDescript()
    {
        return $this->language_id_for_charac_descript;
    }

    public function setLanguageIdForCharacDescript(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id_for_charac_descript = $var;
    }

    public function getLanguageIdForCharacDescriptNull()
    {
        return $this->language_id_for_charac_descript_null;
    }

    public function setLanguageIdForCharacDescriptNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_for_charac_descript_null = $var;
    }

    public function getCheckNodes()
    {
        return $this->check_nodes;
    }

    public function setCheckNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->check_nodes = $var;
    }

    public function getCheckNodesNull()
    {
        return $this->check_nodes_null;
    }

    public function setCheckNodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_nodes_null = $var;
    }

    public function getGetDetailsForCharacIdList()
    {
        return $this->get_details_for_charac_id_list;
    }

    public function setGetDetailsForCharacIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->get_details_for_charac_id_list = $var;
    }

    public function getGetDetailsForCharacIdListNull()
    {
        return $this->get_details_for_charac_id_list_null;
    }

    public function setGetDetailsForCharacIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_details_for_charac_id_list_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetNodeProperties\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $active = null;
    private $details = null;
    private $unit_id = null;
    private $characteristic_description = null;
    private $tree_node_id = null;
    private $node_id = null;
    private $value = null;
    private $characteristic_id = null;
    private $value_id = null;
    private $unit_symbol = null;
    private $deleted = null;
    private $sort_no = null;
    private $valid_to_char = null;
    private $inherits_from_tree_node_id = null;
    private $valid_to = null;
    private $valid_from = null;
    private $inherits_from_node_id = null;
    private $valid_from_char = null;

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

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->details = $var;
    }

    public function getUnitId()
    {
        return $this->unit_id;
    }

    public function setUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->unit_id = $var;
    }

    public function getCharacteristicDescription()
    {
        return $this->characteristic_description;
    }

    public function setCharacteristicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_description = $var;
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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getCharacteristicId()
    {
        return $this->characteristic_id;
    }

    public function setCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->characteristic_id = $var;
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

    public function getUnitSymbol()
    {
        return $this->unit_symbol;
    }

    public function setUnitSymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unit_symbol = $var;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->deleted = $var;
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

    public function getValidToChar()
    {
        return $this->valid_to_char;
    }

    public function setValidToChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->valid_to_char = $var;
    }

    public function getInheritsFromTreeNodeId()
    {
        return $this->inherits_from_tree_node_id;
    }

    public function setInheritsFromTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->inherits_from_tree_node_id = $var;
    }

    public function getValidTo()
    {
        return $this->valid_to;
    }

    public function setValidTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->valid_to = $var;
    }

    public function getValidFrom()
    {
        return $this->valid_from;
    }

    public function setValidFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->valid_from = $var;
    }

    public function getInheritsFromNodeId()
    {
        return $this->inherits_from_node_id;
    }

    public function setInheritsFromNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->inherits_from_node_id = $var;
    }

    public function getValidFromChar()
    {
        return $this->valid_from_char;
    }

    public function setValidFromChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->valid_from_char = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad9130a336473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4765744e6f646550726f706572746965732e70726f746f12226473" .
    "746f72652e656e67696e652e696d5f4765744e6f646550726f7065727469" .
    "65731a136473746f72652f76616c7565732e70726f746f1a1b6473746f72" .
    "652f656e67696e652f6d6573736167652e70726f746f1a236473746f7265" .
    "2f656e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22" .
    "be080a0a506172616d6574657273122d0a096e6f64655f6c697374180120" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512170a0e6e6f64655f6c6973745f6e756c6c18e9072001280812320a0d" .
    "747265655f6e6f64655f69647318022001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c7565121b0a12747265655f6e6f64" .
    "655f6964735f6e756c6c18ea072001280812300a0b6c616e67756167655f" .
    "696418032001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512190a106c616e67756167655f69645f6e756c6c18eb07" .
    "2001280812320a0d696e68657269745f646570746818042001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c7565121b0a12" .
    "696e68657269745f64657074685f6e756c6c18ec072001280812390a1472" .
    "65637572736976655f6576616c756174696f6e18052001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512220a197265" .
    "637572736976655f6576616c756174696f6e5f6e756c6c18ed0720012808" .
    "123a0a1663686172616374657269737469635f69645f6c69737418062001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12240a1b63686172616374657269737469635f69645f6c6973745f6e756c" .
    "6c18ee072001280812310a0c7573655f64697374696e637418072001280b" .
    "321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512" .
    "1a0a117573655f64697374696e63745f6e756c6c18ef0720012808122f0a" .
    "0b646174655f666f726d617418082001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512190a10646174655f666f726d61" .
    "745f6e756c6c18f00720012808123f0a1a696e636c7564655f696e686572" .
    "6974735f66726f6d5f696e666f18092001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c756512280a1f696e636c7564655f" .
    "696e6865726974735f66726f6d5f696e666f5f6e756c6c18f10720012808" .
    "12440a1f6c616e67756167655f69645f666f725f6368617261635f646573" .
    "6372697074180a2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565122d0a246c616e67756167655f69645f666f725f" .
    "6368617261635f64657363726970745f6e756c6c18f2072001280812300a" .
    "0b636865636b5f6e6f646573180b2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512190a10636865636b5f6e6f64" .
    "65735f6e756c6c18f3072001280812420a1e6765745f64657461696c735f" .
    "666f725f6368617261635f69645f6c697374180c2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565122c0a236765745f" .
    "64657461696c735f666f725f6368617261635f69645f6c6973745f6e756c" .
    "6c18f407200128082286090a08526573706f6e736512480a106d6574615f" .
    "696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e67" .
    "696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d" .
    "6174696f6e122f0a076d65737361676518032003280b321e2e6473746f72" .
    "652e656e67696e652e6d6573736167652e4d657373616765123d0a03726f" .
    "7718042003280b32302e6473746f72652e656e67696e652e696d5f476574" .
    "4e6f646550726f706572746965732e526573706f6e73652e526f771abf07" .
    "0a03526f77120f0a06726f775f696418904e20012805122c0a0661637469" .
    "766518914e2001280b321b2e6473746f72652e76616c7565732e626f6f6c" .
    "65616e56616c7565122c0a0764657461696c7318924e2001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565122d0a07756e" .
    "69745f696418934e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565123f0a1a63686172616374657269737469635f" .
    "6465736372697074696f6e18944e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512320a0c747265655f6e6f64655f" .
    "696418954e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565122d0a076e6f64655f696418964e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565122a0a0576" .
    "616c756518974e2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c756512370a1163686172616374657269737469635f6964" .
    "18984e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565122e0a0876616c75655f696418994e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512300a0b756e" .
    "69745f73796d626f6c189a4e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122d0a0764656c65746564189b4e2001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "65122d0a07736f72745f6e6f189c4e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512330a0d76616c69645f746f" .
    "5f6368617218b2ea012001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c756512410a1a696e6865726974735f66726f6d5f74" .
    "7265655f6e6f64655f696418baea012001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512310a0876616c69645f746f" .
    "18bbea012001280b321d2e6473746f72652e76616c7565732e74696d6573" .
    "74616d7056616c756512330a0a76616c69645f66726f6d18bfea01200128" .
    "0b321d2e6473746f72652e76616c7565732e74696d657374616d7056616c" .
    "7565123c0a15696e6865726974735f66726f6d5f6e6f64655f696418c1ea" .
    "012001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512350a0f76616c69645f66726f6d5f6368617218c2ea01200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756542" .
    "550a1b696f2e6473746f72652e656e67696e652e70726f63656475726573" .
    "5a36676f73646b2e6473746f72652e64652f656e67696e652f70726f6365" .
    "64757265732f696d5f4765744e6f646550726f7065727469657362067072" .
    "6f746f33"
));
