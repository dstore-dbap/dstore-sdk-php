<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonCharacteristics_Pu.proto

namespace Dstore\Engine\Pm_GetPersonCharacteristics_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $language_id = null;
    private $language_id_null = false;
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $person_charac_category_id = null;
    private $person_charac_category_id_null = false;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersonCharacteristics_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $description = null;
    private $precision_value = null;
    private $modify = null;
    private $max_length = null;
    private $sort_no = null;
    private $predefined_values = null;
    private $read_access_restriction_pattern = null;
    private $format = null;
    private $required = null;
    private $basic_field_type = null;
    private $visible = null;
    private $basic_field_type_id = null;
    private $id = null;
    private $required_for_create = null;
    private $language_id = null;
    private $person_charac_category_id = null;
    private $category_description = null;

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

    public function getPrecisionValue()
    {
        return $this->precision_value;
    }

    public function setPrecisionValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->precision_value = $var;
    }

    public function getModify()
    {
        return $this->modify;
    }

    public function setModify(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->modify = $var;
    }

    public function getMaxLength()
    {
        return $this->max_length;
    }

    public function setMaxLength(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_length = $var;
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

    public function getPredefinedValues()
    {
        return $this->predefined_values;
    }

    public function setPredefinedValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->predefined_values = $var;
    }

    public function getReadAccessRestrictionPattern()
    {
        return $this->read_access_restriction_pattern;
    }

    public function setReadAccessRestrictionPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->read_access_restriction_pattern = $var;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->format = $var;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function setRequired(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->required = $var;
    }

    public function getBasicFieldType()
    {
        return $this->basic_field_type;
    }

    public function setBasicFieldType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->basic_field_type = $var;
    }

    public function getVisible()
    {
        return $this->visible;
    }

    public function setVisible(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->visible = $var;
    }

    public function getBasicFieldTypeId()
    {
        return $this->basic_field_type_id;
    }

    public function setBasicFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->basic_field_type_id = $var;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->id = $var;
    }

    public function getRequiredForCreate()
    {
        return $this->required_for_create;
    }

    public function setRequiredForCreate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->required_for_create = $var;
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

    public function getPersonCharacCategoryId()
    {
        return $this->person_charac_category_id;
    }

    public function setPersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_charac_category_id = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aba0d0a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e4368617261637465726973746963735f5075" .
    "2e70726f746f122c6473746f72652e656e67696e652e706d5f4765745065" .
    "72736f6e4368617261637465726973746963735f50751a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f2295020a0a506172616d65" .
    "7465727312300a0b6c616e67756167655f696418012001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512190a106c61" .
    "6e67756167655f69645f6e756c6c18e9072001280812330a0e706572736f" .
    "6e5f747970655f696418022001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565121c0a13706572736f6e5f747970655f" .
    "69645f6e756c6c18ea0720012808123e0a19706572736f6e5f6368617261" .
    "635f63617465676f72795f696418032001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512270a1e706572736f6e5f63" .
    "68617261635f63617465676f72795f69645f6e756c6c18eb072001280822" .
    "f2080a08526573706f6e736512480a106d6574615f696e666f726d617469" .
    "6f6e18022003280b322e2e6473746f72652e656e67696e652e6d65746169" .
    "6e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a07" .
    "6d65737361676518032003280b321e2e6473746f72652e656e67696e652e" .
    "6d6573736167652e4d65737361676512470a03726f7718042003280b323a" .
    "2e6473746f72652e656e67696e652e706d5f476574506572736f6e436861" .
    "7261637465726973746963735f50752e526573706f6e73652e526f771aa1" .
    "070a03526f77120f0a06726f775f696418904e2001280512300a0b646573" .
    "6372697074696f6e18914e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c756512350a0f707265636973696f6e5f76616c" .
    "756518924e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565122c0a066d6f6469667918934e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512300a0a6d61" .
    "785f6c656e67746818944e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565122d0a07736f72745f6e6f18954e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512370a11707265646566696e65645f76616c75657318964e2001280b32" .
    "1b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75651244" .
    "0a1f726561645f6163636573735f7265737472696374696f6e5f70617474" .
    "65726e18974e2001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c7565122b0a06666f726d617418984e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565122e0a08726571" .
    "756972656418994e2001280b321b2e6473746f72652e76616c7565732e62" .
    "6f6f6c65616e56616c756512350a1062617369635f6669656c645f747970" .
    "65189a4e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565122d0a0776697369626c65189b4e2001280b321b2e647374" .
    "6f72652e76616c7565732e626f6f6c65616e56616c756512390a13626173" .
    "69635f6669656c645f747970655f6964189c4e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512280a026964189d" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512390a1372657175697265645f666f725f637265617465189e4e" .
    "2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e5661" .
    "6c756512310a0b6c616e67756167655f6964189f4e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512400a197065" .
    "72736f6e5f6368617261635f63617465676f72795f696418a79c01200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "123a0a1463617465676f72795f6465736372697074696f6e18ae9c012001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "425f0a1b696f2e6473746f72652e656e67696e652e70726f636564757265" .
    "735a40676f73646b2e6473746f72652e64652f656e67696e652f70726f63" .
    "6564757265732f706d5f476574506572736f6e4368617261637465726973" .
    "746963735f5075620670726f746f33"
));
