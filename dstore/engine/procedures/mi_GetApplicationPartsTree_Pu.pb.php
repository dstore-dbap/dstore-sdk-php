<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetApplicationPartsTree_Pu.proto

namespace Dstore\Engine\Mi_GetApplicationPartsTree_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $application_part_tree_id = null;
    private $application_part_tree_id_null = false;
    private $get_root_parts_for_application_id = null;
    private $get_root_parts_for_application_id_null = false;
    private $ids_in_one_id = null;
    private $ids_in_one_id_null = false;
    private $return_result_set = null;
    private $return_result_set_null = false;
    private $get_parts_tree_for_global_user = null;
    private $get_parts_tree_for_global_user_null = false;
    private $output_into_one_id = null;
    private $output_into_one_id_null = false;
    private $output_into_two_ids = null;
    private $output_into_two_ids_null = false;
    private $max_tree_level = null;
    private $max_tree_level_null = false;

    public function getApplicationPartTreeId()
    {
        return $this->application_part_tree_id;
    }

    public function setApplicationPartTreeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->application_part_tree_id = $var;
    }

    public function getApplicationPartTreeIdNull()
    {
        return $this->application_part_tree_id_null;
    }

    public function setApplicationPartTreeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->application_part_tree_id_null = $var;
    }

    public function getGetRootPartsForApplicationId()
    {
        return $this->get_root_parts_for_application_id;
    }

    public function setGetRootPartsForApplicationId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->get_root_parts_for_application_id = $var;
    }

    public function getGetRootPartsForApplicationIdNull()
    {
        return $this->get_root_parts_for_application_id_null;
    }

    public function setGetRootPartsForApplicationIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_root_parts_for_application_id_null = $var;
    }

    public function getIdsInOneId()
    {
        return $this->ids_in_one_id;
    }

    public function setIdsInOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->ids_in_one_id = $var;
    }

    public function getIdsInOneIdNull()
    {
        return $this->ids_in_one_id_null;
    }

    public function setIdsInOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->ids_in_one_id_null = $var;
    }

    public function getReturnResultSet()
    {
        return $this->return_result_set;
    }

    public function setReturnResultSet(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->return_result_set = $var;
    }

    public function getReturnResultSetNull()
    {
        return $this->return_result_set_null;
    }

    public function setReturnResultSetNull($var)
    {
        GPBUtil::checkBool($var);
        $this->return_result_set_null = $var;
    }

    public function getGetPartsTreeForGlobalUser()
    {
        return $this->get_parts_tree_for_global_user;
    }

    public function setGetPartsTreeForGlobalUser(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->get_parts_tree_for_global_user = $var;
    }

    public function getGetPartsTreeForGlobalUserNull()
    {
        return $this->get_parts_tree_for_global_user_null;
    }

    public function setGetPartsTreeForGlobalUserNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_parts_tree_for_global_user_null = $var;
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

    public function getOutputIntoTwoIds()
    {
        return $this->output_into_two_ids;
    }

    public function setOutputIntoTwoIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->output_into_two_ids = $var;
    }

    public function getOutputIntoTwoIdsNull()
    {
        return $this->output_into_two_ids_null;
    }

    public function setOutputIntoTwoIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_into_two_ids_null = $var;
    }

    public function getMaxTreeLevel()
    {
        return $this->max_tree_level;
    }

    public function setMaxTreeLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_tree_level = $var;
    }

    public function getMaxTreeLevelNull()
    {
        return $this->max_tree_level_null;
    }

    public function setMaxTreeLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_tree_level_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetApplicationPartsTree_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $successor_application_part_id = null;
    private $tree_level = null;
    private $successor_application_part = null;
    private $user_id = null;
    private $has_successors = null;
    private $successor_applic_part_tree_id = null;
    private $application_part_tree_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getSuccessorApplicationPartId()
    {
        return $this->successor_application_part_id;
    }

    public function setSuccessorApplicationPartId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->successor_application_part_id = $var;
    }

    public function getTreeLevel()
    {
        return $this->tree_level;
    }

    public function setTreeLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_level = $var;
    }

    public function getSuccessorApplicationPart()
    {
        return $this->successor_application_part;
    }

    public function setSuccessorApplicationPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->successor_application_part = $var;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_id = $var;
    }

    public function getHasSuccessors()
    {
        return $this->has_successors;
    }

    public function setHasSuccessors(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->has_successors = $var;
    }

    public function getSuccessorApplicPartTreeId()
    {
        return $this->successor_applic_part_tree_id;
    }

    public function setSuccessorApplicPartTreeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->successor_applic_part_tree_id = $var;
    }

    public function getApplicationPartTreeId()
    {
        return $this->application_part_tree_id;
    }

    public function setApplicationPartTreeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->application_part_tree_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0acc0d0a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4765744170706c69636174696f6e5061727473547265655f50752e" .
    "70726f746f122b6473746f72652e656e67696e652e6d695f476574417070" .
    "6c69636174696f6e5061727473547265655f50751a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f2294060a0a506172616d657465" .
    "7273123d0a186170706c69636174696f6e5f706172745f747265655f6964" .
    "18012001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512260a1d6170706c69636174696f6e5f706172745f74726565" .
    "5f69645f6e756c6c18e9072001280812460a216765745f726f6f745f7061" .
    "7274735f666f725f6170706c69636174696f6e5f696418022001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565122f0a" .
    "266765745f726f6f745f70617274735f666f725f6170706c69636174696f" .
    "6e5f69645f6e756c6c18ea072001280812320a0d6964735f696e5f6f6e65" .
    "5f696418032001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565121b0a126964735f696e5f6f6e655f69645f6e756c6c" .
    "18eb072001280812360a1172657475726e5f726573756c745f7365741804" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565121f0a1672657475726e5f726573756c745f7365745f6e756c6c18" .
    "ec072001280812430a1e6765745f70617274735f747265655f666f725f67" .
    "6c6f62616c5f7573657218052001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565122c0a236765745f70617274735f74" .
    "7265655f666f725f676c6f62616c5f757365725f6e756c6c18ed07200128" .
    "0812370a126f75747075745f696e746f5f6f6e655f696418062001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651220" .
    "0a176f75747075745f696e746f5f6f6e655f69645f6e756c6c18ee072001" .
    "280812380a136f75747075745f696e746f5f74776f5f6964731807200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "12210a186f75747075745f696e746f5f74776f5f6964735f6e756c6c18ef" .
    "072001280812330a0e6d61785f747265655f6c6576656c18082001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565121c" .
    "0a136d61785f747265655f6c6576656c5f6e756c6c18f007200128082288" .
    "050a08526573706f6e736512480a106d6574615f696e666f726d6174696f" .
    "6e18022003280b322e2e6473746f72652e656e67696e652e6d657461696e" .
    "666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d" .
    "65737361676518032003280b321e2e6473746f72652e656e67696e652e6d" .
    "6573736167652e4d65737361676512460a03726f7718042003280b32392e" .
    "6473746f72652e656e67696e652e6d695f4765744170706c69636174696f" .
    "6e5061727473547265655f50752e526573706f6e73652e526f771ab8030a" .
    "03526f77120f0a06726f775f696418904e2001280512430a1d7375636365" .
    "73736f725f6170706c69636174696f6e5f706172745f696418914e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12300a0a747265655f6c6576656c18924e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c7565123f0a1a737563636573" .
    "736f725f6170706c69636174696f6e5f7061727418934e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c7565122d0a0775" .
    "7365725f696418944e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756512340a0e6861735f737563636573736f7273" .
    "18954e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512430a1d737563636573736f725f6170706c69635f706172" .
    "745f747265655f696418964e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565123e0a186170706c69636174696f6e" .
    "5f706172745f747265655f696418974e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565425e0a1b696f2e6473746f" .
    "72652e656e67696e652e70726f636564757265735a3f676f73646b2e6473" .
    "746f72652e64652f656e67696e652f70726f636564757265732f6d695f47" .
    "65744170706c69636174696f6e5061727473547265655f5075620670726f" .
    "746f33"
));
