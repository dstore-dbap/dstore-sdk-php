<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPostingCharacs_Ad.proto

namespace Dstore\Engine\Fo_GetPostingCharacs_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $posting_characteristic_id = null;
    private $posting_characteristic_id_null = false;
    private $get_assigned_forums_or_categories = null;
    private $get_assigned_forums_or_categories_null = false;
    private $characs_assigned_to_forum_id = null;
    private $characs_assigned_to_forum_id_null = false;
    private $characs_assigned_to_category_id = null;
    private $characs_assigned_to_category_id_null = false;

    public function getPostingCharacteristicId()
    {
        return $this->posting_characteristic_id;
    }

    public function setPostingCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_characteristic_id = $var;
    }

    public function getPostingCharacteristicIdNull()
    {
        return $this->posting_characteristic_id_null;
    }

    public function setPostingCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_characteristic_id_null = $var;
    }

    public function getGetAssignedForumsOrCategories()
    {
        return $this->get_assigned_forums_or_categories;
    }

    public function setGetAssignedForumsOrCategories(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->get_assigned_forums_or_categories = $var;
    }

    public function getGetAssignedForumsOrCategoriesNull()
    {
        return $this->get_assigned_forums_or_categories_null;
    }

    public function setGetAssignedForumsOrCategoriesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_assigned_forums_or_categories_null = $var;
    }

    public function getCharacsAssignedToForumId()
    {
        return $this->characs_assigned_to_forum_id;
    }

    public function setCharacsAssignedToForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->characs_assigned_to_forum_id = $var;
    }

    public function getCharacsAssignedToForumIdNull()
    {
        return $this->characs_assigned_to_forum_id_null;
    }

    public function setCharacsAssignedToForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characs_assigned_to_forum_id_null = $var;
    }

    public function getCharacsAssignedToCategoryId()
    {
        return $this->characs_assigned_to_category_id;
    }

    public function setCharacsAssignedToCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->characs_assigned_to_category_id = $var;
    }

    public function getCharacsAssignedToCategoryIdNull()
    {
        return $this->characs_assigned_to_category_id_null;
    }

    public function setCharacsAssignedToCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characs_assigned_to_category_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetPostingCharacs_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $characteristic_description = null;
    private $field_type_id = null;
    private $posting_characteristic_id = null;
    private $precision_value = null;
    private $common_characteristic = null;
    private $max_length = null;
    private $predefined_values = null;
    private $check_posting_visibility = null;
    private $format = null;
    private $basic_field_type = null;
    private $field_type_description = null;
    private $basic_field_type_id = null;
    private $property_modification_allowed = null;
    private $max_number_of_properties = null;
    private $forum_id = null;
    private $forum_name = null;
    private $forum_category_id = null;
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

    public function getCharacteristicDescription()
    {
        return $this->characteristic_description;
    }

    public function setCharacteristicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_description = $var;
    }

    public function getFieldTypeId()
    {
        return $this->field_type_id;
    }

    public function setFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->field_type_id = $var;
    }

    public function getPostingCharacteristicId()
    {
        return $this->posting_characteristic_id;
    }

    public function setPostingCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_characteristic_id = $var;
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

    public function getCommonCharacteristic()
    {
        return $this->common_characteristic;
    }

    public function setCommonCharacteristic(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->common_characteristic = $var;
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

    public function getPredefinedValues()
    {
        return $this->predefined_values;
    }

    public function setPredefinedValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->predefined_values = $var;
    }

    public function getCheckPostingVisibility()
    {
        return $this->check_posting_visibility;
    }

    public function setCheckPostingVisibility(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->check_posting_visibility = $var;
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

    public function getBasicFieldType()
    {
        return $this->basic_field_type;
    }

    public function setBasicFieldType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->basic_field_type = $var;
    }

    public function getFieldTypeDescription()
    {
        return $this->field_type_description;
    }

    public function setFieldTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->field_type_description = $var;
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

    public function getPropertyModificationAllowed()
    {
        return $this->property_modification_allowed;
    }

    public function setPropertyModificationAllowed(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->property_modification_allowed = $var;
    }

    public function getMaxNumberOfProperties()
    {
        return $this->max_number_of_properties;
    }

    public function setMaxNumberOfProperties(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_properties = $var;
    }

    public function getForumId()
    {
        return $this->forum_id;
    }

    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->forum_id = $var;
    }

    public function getForumName()
    {
        return $this->forum_name;
    }

    public function setForumName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->forum_name = $var;
    }

    public function getForumCategoryId()
    {
        return $this->forum_category_id;
    }

    public function setForumCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->forum_category_id = $var;
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
    "0ae00f0a366473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f476574506f7374696e67436861726163735f41642e70726f746f12" .
    "256473746f72652e656e67696e652e666f5f476574506f7374696e674368" .
    "61726163735f41641a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f22d2030a0a506172616d6574657273123e0a19706f7374696e" .
    "675f63686172616374657269737469635f696418012001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512270a1e706f" .
    "7374696e675f63686172616374657269737469635f69645f6e756c6c18e9" .
    "072001280812460a216765745f61737369676e65645f666f72756d735f6f" .
    "725f63617465676f7269657318022001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565122f0a266765745f6173736967" .
    "6e65645f666f72756d735f6f725f63617465676f726965735f6e756c6c18" .
    "ea072001280812410a1c636861726163735f61737369676e65645f746f5f" .
    "666f72756d5f696418032001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565122a0a21636861726163735f6173736967" .
    "6e65645f746f5f666f72756d5f69645f6e756c6c18eb072001280812440a" .
    "1f636861726163735f61737369676e65645f746f5f63617465676f72795f" .
    "696418042001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565122d0a24636861726163735f61737369676e65645f746f" .
    "5f63617465676f72795f69645f6e756c6c18ec072001280822f0090a0852" .
    "6573706f6e736512480a106d6574615f696e666f726d6174696f6e180220" .
    "03280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d" .
    "6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d65737361" .
    "676518032003280b321e2e6473746f72652e656e67696e652e6d65737361" .
    "67652e4d65737361676512400a03726f7718042003280b32332e6473746f" .
    "72652e656e67696e652e666f5f476574506f7374696e6743686172616373" .
    "5f41642e526573706f6e73652e526f771aa6080a03526f77120f0a06726f" .
    "775f696418904e20012805123f0a1a63686172616374657269737469635f" .
    "6465736372697074696f6e18914e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512330a0d6669656c645f74797065" .
    "5f696418924e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565123f0a19706f7374696e675f636861726163746572" .
    "69737469635f696418934e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512350a0f707265636973696f6e5f7661" .
    "6c756518944e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565123b0a15636f6d6d6f6e5f63686172616374657269" .
    "7374696318954e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512300a0a6d61785f6c656e67746818964e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12370a11707265646566696e65645f76616c75657318974e2001280b321b" .
    "2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565123e0a" .
    "18636865636b5f706f7374696e675f7669736962696c69747918984e2001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "65122b0a06666f726d617418994e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512350a1062617369635f6669656c" .
    "645f74797065189a4e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565123b0a166669656c645f747970655f64657363" .
    "72697074696f6e189b4e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c756512390a1362617369635f6669656c645f7479" .
    "70655f6964189c4e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512430a1d70726f70657274795f6d6f64696669" .
    "636174696f6e5f616c6c6f776564189d4e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c7565123e0a186d61785f6e75" .
    "6d6265725f6f665f70726f70657274696573189e4e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565122f0a08666f" .
    "72756d5f696418c3b8022001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512300a0a666f72756d5f6e616d6518c4b8" .
    "022001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512380a11666f72756d5f63617465676f72795f696418db86032001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65123a0a1463617465676f72795f6465736372697074696f6e18de860320" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6542580a1b696f2e6473746f72652e656e67696e652e70726f6365647572" .
    "65735a39676f73646b2e6473746f72652e64652f656e67696e652f70726f" .
    "636564757265732f666f5f476574506f7374696e67436861726163735f41" .
    "64620670726f746f33"
));

