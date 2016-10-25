<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetTreeNodeInformation_Ad.proto

namespace Dstore\Engine\Im_GetTreeNodeInformation_Ad;

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
    private $get_additional_information = null;
    private $get_additional_information_null = false;

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

    public function getGetAdditionalInformation()
    {
        return $this->get_additional_information;
    }

    public function setGetAdditionalInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_additional_information = $var;
    }

    public function getGetAdditionalInformationNull()
    {
        return $this->get_additional_information_null;
    }

    public function setGetAdditionalInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_additional_information_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetTreeNodeInformation_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $predecessor = null;
    private $level_no = null;
    private $sort_no = null;
    private $count_active_successors = null;
    private $count_deleted_successors = null;
    private $node_description = null;
    private $active = null;
    private $node_id = null;
    private $tree_node_id = null;
    private $count_successors = null;
    private $deleted = null;
    private $inherits_from = null;
    private $level_id = null;
    private $symbol_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getPredecessor()
    {
        return $this->predecessor;
    }

    public function setPredecessor(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->predecessor = $var;
    }

    public function getLevelNo()
    {
        return $this->level_no;
    }

    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_no = $var;
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

    public function getCountActiveSuccessors()
    {
        return $this->count_active_successors;
    }

    public function setCountActiveSuccessors(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->count_active_successors = $var;
    }

    public function getCountDeletedSuccessors()
    {
        return $this->count_deleted_successors;
    }

    public function setCountDeletedSuccessors(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->count_deleted_successors = $var;
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

    public function getActive()
    {
        return $this->active;
    }

    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->active = $var;
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

    public function getCountSuccessors()
    {
        return $this->count_successors;
    }

    public function setCountSuccessors(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->count_successors = $var;
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

    public function getInheritsFrom()
    {
        return $this->inherits_from;
    }

    public function setInheritsFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->inherits_from = $var;
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

    public function getSymbolId()
    {
        return $this->symbol_id;
    }

    public function setSymbolId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->symbol_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0afb0b0a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f476574547265654e6f6465496e666f726d6174696f6e5f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e696d5f47657454726565" .
    "4e6f6465496e666f726d6174696f6e5f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f2293020a0a506172616d6574657273" .
    "12310a0c747265655f6e6f64655f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565121a0a11747265655f" .
    "6e6f64655f69645f6e756c6c18e9072001280812300a0b6c616e67756167" .
    "655f696418022001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c756512190a106c616e67756167655f69645f6e756c6c18" .
    "ea0720012808123f0a1a6765745f6164646974696f6e616c5f696e666f72" .
    "6d6174696f6e18032001280b321b2e6473746f72652e76616c7565732e62" .
    "6f6f6c65616e56616c756512280a1f6765745f6164646974696f6e616c5f" .
    "696e666f726d6174696f6e5f6e756c6c18eb072001280822bb070a085265" .
    "73706f6e736512480a106d6574615f696e666f726d6174696f6e18022003" .
    "280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d61" .
    "74696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167" .
    "6518032003280b321e2e6473746f72652e656e67696e652e6d6573736167" .
    "652e4d65737361676512450a03726f7718042003280b32382e6473746f72" .
    "652e656e67696e652e696d5f476574547265654e6f6465496e666f726d61" .
    "74696f6e5f41642e526573706f6e73652e526f771aec050a03526f77120f" .
    "0a06726f775f696418904e2001280512310a0b7072656465636573736f72" .
    "18914e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565122e0a086c6576656c5f6e6f18924e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565122d0a07736f" .
    "72745f6e6f18934e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565123d0a17636f756e745f6163746976655f7375" .
    "63636573736f727318944e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565123e0a18636f756e745f64656c657465" .
    "645f737563636573736f727318954e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512350a106e6f64655f646573" .
    "6372697074696f6e18964e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c7565122c0a0661637469766518974e2001280b" .
    "321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512" .
    "2d0a076e6f64655f696418984e2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512320a0c747265655f6e6f64655f" .
    "696418994e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512360a10636f756e745f737563636573736f7273189a" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565122d0a0764656c65746564189b4e2001280b321b2e6473746f72" .
    "652e76616c7565732e626f6f6c65616e56616c756512330a0d696e686572" .
    "6974735f66726f6d189c4e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565122e0a086c6576656c5f6964189d4e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565122f0a0973796d626f6c5f6964189e4e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565425d0a1b696f2e6473" .
    "746f72652e656e67696e652e70726f636564757265735a3e676f73646b2e" .
    "6473746f72652e64652f656e67696e652f70726f636564757265732f696d" .
    "5f476574547265654e6f6465496e666f726d6174696f6e5f416462067072" .
    "6f746f33"
));

