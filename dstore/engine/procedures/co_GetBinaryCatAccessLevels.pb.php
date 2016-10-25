<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetBinaryCatAccessLevels.proto

namespace Dstore\Engine\Co_GetBinaryCatAccessLevels;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $community_binary_category_id = null;
    private $community_binary_category_id_null = false;

    public function getCommunityBinaryCategoryId()
    {
        return $this->community_binary_category_id;
    }

    public function setCommunityBinaryCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->community_binary_category_id = $var;
    }

    public function getCommunityBinaryCategoryIdNull()
    {
        return $this->community_binary_category_id_null;
    }

    public function setCommunityBinaryCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_binary_category_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Co_GetBinaryCatAccessLevels\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $access_level_id = null;
    private $description = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getAccessLevelId()
    {
        return $this->access_level_id;
    }

    public function setAccessLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->access_level_id = $var;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->description = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af0050a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "636f5f47657442696e6172794361744163636573734c6576656c732e7072" .
    "6f746f12296473746f72652e656e67696e652e636f5f47657442696e6172" .
    "794361744163636573734c6576656c731a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f227b0a0a506172616d657465727312410a" .
    "1c636f6d6d756e6974795f62696e6172795f63617465676f72795f696418" .
    "012001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565122a0a21636f6d6d756e6974795f62696e6172795f6361746567" .
    "6f72795f69645f6e756c6c18e9072001280822cc020a08526573706f6e73" .
    "6512480a106d6574615f696e666f726d6174696f6e18022003280b322e2e" .
    "6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e" .
    "4d657461496e666f726d6174696f6e122f0a076d65737361676518032003" .
    "280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d6573" .
    "7361676512440a03726f7718042003280b32372e6473746f72652e656e67" .
    "696e652e636f5f47657442696e6172794361744163636573734c6576656c" .
    "732e526573706f6e73652e526f771a7f0a03526f77120f0a06726f775f69" .
    "6418904e2001280512350a0f6163636573735f6c6576656c5f696418914e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512300a0b6465736372697074696f6e18924e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565425c0a1b696f2e" .
    "6473746f72652e656e67696e652e70726f636564757265735a3d676f7364" .
    "6b2e6473746f72652e64652f656e67696e652f70726f636564757265732f" .
    "636f5f47657442696e6172794361744163636573734c6576656c73620670" .
    "726f746f33"
));
