<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetTemplates_Ad.proto

namespace Dstore\Engine\Im_GetTemplates_Ad;

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
    private $source_template_id = null;
    private $source_template_id_null = false;
    private $date_and_time = null;
    private $date_and_time_null = false;

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

    public function getSourceTemplateId()
    {
        return $this->source_template_id;
    }

    public function setSourceTemplateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->source_template_id = $var;
    }

    public function getSourceTemplateIdNull()
    {
        return $this->source_template_id_null;
    }

    public function setSourceTemplateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->source_template_id_null = $var;
    }

    public function getDateAndTime()
    {
        return $this->date_and_time;
    }

    public function setDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->date_and_time = $var;
    }

    public function getDateAndTimeNull()
    {
        return $this->date_and_time_null;
    }

    public function setDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_and_time_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetTemplates_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $description = null;
    private $inherited = null;
    private $frame_name = null;
    private $language_id = null;
    private $template_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getInherited()
    {
        return $this->inherited;
    }

    public function setInherited(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->inherited = $var;
    }

    public function getFrameName()
    {
        return $this->frame_name;
    }

    public function setFrameName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->frame_name = $var;
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

    public function getTemplateId()
    {
        return $this->template_id;
    }

    public function setTemplateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->template_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aba080a316473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f47657454656d706c617465735f41642e70726f746f12206473746f" .
    "72652e656e67696e652e696d5f47657454656d706c617465735f41641a13" .
    "6473746f72652f76616c7565732e70726f746f1a1b6473746f72652f656e" .
    "67696e652f6d6573736167652e70726f746f1a236473746f72652f656e67" .
    "696e652f6d657461696e666f726d6174696f6e2e70726f746f22d6020a0a" .
    "506172616d657465727312310a0c747265655f6e6f64655f696418012001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65121a0a11747265655f6e6f64655f69645f6e756c6c18e9072001280812" .
    "300a0b6c616e67756167655f696418022001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512190a106c616e67756167" .
    "655f69645f6e756c6c18ea072001280812370a12736f757263655f74656d" .
    "706c6174655f696418032001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512200a17736f757263655f74656d706c61" .
    "74655f69645f6e756c6c18eb072001280812340a0d646174655f616e645f" .
    "74696d6518042001280b321d2e6473746f72652e76616c7565732e74696d" .
    "657374616d7056616c7565121b0a12646174655f616e645f74696d655f6e" .
    "756c6c18ec072001280822d5030a08526573706f6e736512480a106d6574" .
    "615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e65" .
    "6e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f" .
    "726d6174696f6e122f0a076d65737361676518032003280b321e2e647374" .
    "6f72652e656e67696e652e6d6573736167652e4d657373616765123b0a03" .
    "726f7718042003280b322e2e6473746f72652e656e67696e652e696d5f47" .
    "657454656d706c617465735f41642e526573706f6e73652e526f771a9002" .
    "0a03526f77120f0a06726f775f696418904e2001280512300a0b64657363" .
    "72697074696f6e18914e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c7565122f0a09696e6865726974656418924e2001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "65122f0a0a6672616d655f6e616d6518934e2001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512310a0b6c616e677561" .
    "67655f696418944e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512310a0b74656d706c6174655f696418954e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756542530a1b696f2e6473746f72652e656e67696e652e70726f63656475" .
    "7265735a34676f73646b2e6473746f72652e64652f656e67696e652f7072" .
    "6f636564757265732f696d5f47657454656d706c617465735f4164620670" .
    "726f746f33"
));

