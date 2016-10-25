<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyApplicPartsTree_Ad.proto

namespace Dstore\Engine\Mi_ModifyApplicPartsTree_Ad;

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
    private $user_id = null;
    private $user_id_null = false;
    private $application_part_id = null;
    private $application_part_id_null = false;
    private $predecessor_applic_part_tree_id = null;
    private $predecessor_applic_part_tree_id_null = false;
    private $delete = null;
    private $delete_null = false;

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

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_id = $var;
    }

    public function getUserIdNull()
    {
        return $this->user_id_null;
    }

    public function setUserIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_id_null = $var;
    }

    public function getApplicationPartId()
    {
        return $this->application_part_id;
    }

    public function setApplicationPartId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->application_part_id = $var;
    }

    public function getApplicationPartIdNull()
    {
        return $this->application_part_id_null;
    }

    public function setApplicationPartIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->application_part_id_null = $var;
    }

    public function getPredecessorApplicPartTreeId()
    {
        return $this->predecessor_applic_part_tree_id;
    }

    public function setPredecessorApplicPartTreeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->predecessor_applic_part_tree_id = $var;
    }

    public function getPredecessorApplicPartTreeIdNull()
    {
        return $this->predecessor_applic_part_tree_id_null;
    }

    public function setPredecessorApplicPartTreeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->predecessor_applic_part_tree_id_null = $var;
    }

    public function getDelete()
    {
        return $this->delete;
    }

    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->delete = $var;
    }

    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $application_part_tree_id = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_ModifyApplicPartsTree_Ad\Response_Row::class);
        $this->row = $var;
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

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a99080a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4d6f646966794170706c69635061727473547265655f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e6d695f4d6f646966794170" .
    "706c69635061727473547265655f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22cd030a0a506172616d6574657273123d" .
    "0a186170706c69636174696f6e5f706172745f747265655f696418012001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512260a1d6170706c69636174696f6e5f706172745f747265655f69645f" .
    "6e756c6c18e90720012808122c0a07757365725f696418022001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512150a" .
    "0c757365725f69645f6e756c6c18ea072001280812380a136170706c6963" .
    "6174696f6e5f706172745f696418032001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512210a186170706c69636174" .
    "696f6e5f706172745f69645f6e756c6c18eb072001280812440a1f707265" .
    "6465636573736f725f6170706c69635f706172745f747265655f69641804" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565122d0a247072656465636573736f725f6170706c69635f70617274" .
    "5f747265655f69645f6e756c6c18ec0720012808122b0a0664656c657465" .
    "18052001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512140a0b64656c6574655f6e756c6c18ed072001280822a202" .
    "0a08526573706f6e736512480a106d6574615f696e666f726d6174696f6e" .
    "18022003280b322e2e6473746f72652e656e67696e652e6d657461696e66" .
    "6f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d65" .
    "737361676518032003280b321e2e6473746f72652e656e67696e652e6d65" .
    "73736167652e4d65737361676512440a03726f7718042003280b32372e64" .
    "73746f72652e656e67696e652e6d695f4d6f646966794170706c69635061" .
    "727473547265655f41642e526573706f6e73652e526f77123d0a18617070" .
    "6c69636174696f6e5f706172745f747265655f696418652001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c75651a160a03" .
    "526f77120f0a06726f775f696418904e20012805425c0a1b696f2e647374" .
    "6f72652e656e67696e652e70726f636564757265735a3d676f73646b2e64" .
    "73746f72652e64652f656e67696e652f70726f636564757265732f6d695f" .
    "4d6f646966794170706c69635061727473547265655f4164620670726f74" .
    "6f33"
));
