<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonCharacCats_Ad.proto

namespace Dstore\Engine\Pm_GetPersonCharacCats_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_charac_category_id = null;
    private $person_charac_category_id_null = false;
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $person_characteristic_id = null;
    private $person_characteristic_id_null = false;

    public function getPersonCharacCategoryId()
    {
        return $this->person_charac_category_id;
    }

    public function setPersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_charac_category_id = $var;
    }

    public function getPersonCharacCategoryIdNull()
    {
        return $this->person_charac_category_id_null;
    }

    public function setPersonCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_charac_category_id_null = $var;
    }

    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_type_id = $var;
    }

    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_characteristic_id = $var;
    }

    public function getPersonCharacteristicIdNull()
    {
        return $this->person_characteristic_id_null;
    }

    public function setPersonCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_characteristic_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersonCharacCats_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $person_type_description = null;
    private $contains_required_characs = null;
    private $category_description = null;
    private $person_type_id = null;
    private $person_charac_category_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getPersonTypeDescription()
    {
        return $this->person_type_description;
    }

    public function setPersonTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->person_type_description = $var;
    }

    public function getContainsRequiredCharacs()
    {
        return $this->contains_required_characs;
    }

    public function setContainsRequiredCharacs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->contains_required_characs = $var;
    }

    public function getCategoryDescription()
    {
        return $this->category_description;
    }

    public function setCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->category_description = $var;
    }

    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_type_id = $var;
    }

    public function getPersonCharacCategoryId()
    {
        return $this->person_charac_category_id;
    }

    public function setPersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_charac_category_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae6080a386473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e436861726163436174735f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e706d5f476574506572736f6e43" .
    "6861726163436174735f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22af020a0a506172616d6574657273123e0a197065" .
    "72736f6e5f6368617261635f63617465676f72795f696418012001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651227" .
    "0a1e706572736f6e5f6368617261635f63617465676f72795f69645f6e75" .
    "6c6c18e9072001280812330a0e706572736f6e5f747970655f6964180220" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565121c0a13706572736f6e5f747970655f69645f6e756c6c18ea072001" .
    "2808123d0a18706572736f6e5f63686172616374657269737469635f6964" .
    "18032001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512260a1d706572736f6e5f6368617261637465726973746963" .
    "5f69645f6e756c6c18eb07200128082293040a08526573706f6e73651248" .
    "0a106d6574615f696e666f726d6174696f6e18022003280b322e2e647374" .
    "6f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d6574" .
    "61496e666f726d6174696f6e122f0a076d65737361676518032003280b32" .
    "1e2e6473746f72652e656e67696e652e6d6573736167652e4d6573736167" .
    "6512420a03726f7718042003280b32352e6473746f72652e656e67696e65" .
    "2e706d5f476574506572736f6e436861726163436174735f41642e526573" .
    "706f6e73652e526f771ac7020a03526f77120f0a06726f775f696418904e" .
    "20012805123c0a17706572736f6e5f747970655f6465736372697074696f" .
    "6e18914e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565123f0a19636f6e7461696e735f72657175697265645f6368" .
    "617261637318924e2001280b321b2e6473746f72652e76616c7565732e62" .
    "6f6f6c65616e56616c756512390a1463617465676f72795f646573637269" .
    "7074696f6e18934e2001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756512340a0e706572736f6e5f747970655f69641894" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565123f0a19706572736f6e5f6368617261635f63617465676f7279" .
    "5f696418954e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565425a0a1b696f2e6473746f72652e656e67696e652e" .
    "70726f636564757265735a3b676f73646b2e6473746f72652e64652f656e" .
    "67696e652f70726f636564757265732f706d5f476574506572736f6e4368" .
    "61726163436174735f4164620670726f746f33"
));

