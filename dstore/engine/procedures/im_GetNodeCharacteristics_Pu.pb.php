<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacteristics_Pu.proto

namespace Dstore\Engine\Im_GetNodeCharacteristics_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $node_characteristic_id = null;
    private $node_characteristic_id_null = false;
    private $language_id_for_charac_descript = null;
    private $language_id_for_charac_descript_null = false;
    private $node_charac_category_id = null;
    private $node_charac_category_id_null = false;
    private $order_by_sort_no = null;
    private $order_by_sort_no_null = false;

    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id = $var;
    }

    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
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

    public function getNodeCharacCategoryId()
    {
        return $this->node_charac_category_id;
    }

    public function setNodeCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_charac_category_id = $var;
    }

    public function getNodeCharacCategoryIdNull()
    {
        return $this->node_charac_category_id_null;
    }

    public function setNodeCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_charac_category_id_null = $var;
    }

    public function getOrderBySortNo()
    {
        return $this->order_by_sort_no;
    }

    public function setOrderBySortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->order_by_sort_no = $var;
    }

    public function getOrderBySortNoNull()
    {
        return $this->order_by_sort_no_null;
    }

    public function setOrderBySortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_by_sort_no_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetNodeCharacteristics_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $unit_id = null;
    private $characteristic_description = null;
    private $field_type_id = null;
    private $node_characteristic_id = null;
    private $value_language_id = null;
    private $sort_no = null;
    private $recursive = null;
    private $predefined_values = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getFieldTypeId()
    {
        return $this->field_type_id;
    }

    public function setFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->field_type_id = $var;
    }

    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id = $var;
    }

    public function getValueLanguageId()
    {
        return $this->value_language_id;
    }

    public function setValueLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->value_language_id = $var;
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

    public function getRecursive()
    {
        return $this->recursive;
    }

    public function setRecursive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->recursive = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae70a0a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4765744e6f64654368617261637465726973746963735f50752e70" .
    "726f746f122a6473746f72652e656e67696e652e696d5f4765744e6f6465" .
    "4368617261637465726973746963735f50751a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22a0030a0a506172616d6574657273" .
    "123b0a166e6f64655f63686172616374657269737469635f696418012001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512240a1b6e6f64655f63686172616374657269737469635f69645f6e75" .
    "6c6c18e9072001280812440a1f6c616e67756167655f69645f666f725f63" .
    "68617261635f646573637269707418022001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565122d0a246c616e67756167" .
    "655f69645f666f725f6368617261635f64657363726970745f6e756c6c18" .
    "ea0720012808123c0a176e6f64655f6368617261635f63617465676f7279" .
    "5f696418032001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512250a1c6e6f64655f6368617261635f63617465676f" .
    "72795f69645f6e756c6c18eb072001280812350a106f726465725f62795f" .
    "736f72745f6e6f18042001280b321b2e6473746f72652e76616c7565732e" .
    "626f6f6c65616e56616c7565121e0a156f726465725f62795f736f72745f" .
    "6e6f5f6e756c6c18ec0720012808229a050a08526573706f6e736512480a" .
    "106d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f" .
    "72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461" .
    "496e666f726d6174696f6e122f0a076d65737361676518032003280b321e" .
    "2e6473746f72652e656e67696e652e6d6573736167652e4d657373616765" .
    "12450a03726f7718042003280b32382e6473746f72652e656e67696e652e" .
    "696d5f4765744e6f64654368617261637465726973746963735f50752e52" .
    "6573706f6e73652e526f771acb030a03526f77120f0a06726f775f696418" .
    "904e20012805122d0a07756e69745f696418914e2001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565123f0a1a636861" .
    "72616374657269737469635f6465736372697074696f6e18924e2001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75651233" .
    "0a0d6669656c645f747970655f696418934e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565123c0a166e6f64655f" .
    "63686172616374657269737469635f696418944e2001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512370a1176616c" .
    "75655f6c616e67756167655f696418954e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c7565122d0a07736f72745f6e" .
    "6f18964e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565122f0a0972656375727369766518974e2001280b321b2e" .
    "6473746f72652e76616c7565732e626f6f6c65616e56616c756512370a11" .
    "707265646566696e65645f76616c75657318984e2001280b321b2e647374" .
    "6f72652e76616c7565732e626f6f6c65616e56616c7565425d0a1b696f2e" .
    "6473746f72652e656e67696e652e70726f636564757265735a3e676f7364" .
    "6b2e6473746f72652e64652f656e67696e652f70726f636564757265732f" .
    "696d5f4765744e6f64654368617261637465726973746963735f50756206" .
    "70726f746f33"
));

