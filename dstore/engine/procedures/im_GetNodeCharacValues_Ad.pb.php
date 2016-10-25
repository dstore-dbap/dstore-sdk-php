<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacValues_Ad.proto

namespace Dstore\Engine\Im_GetNodeCharacValues_Ad;

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
    private $value_category_id = null;
    private $value_category_id_null = false;
    private $recursive_evaluation = null;
    private $recursive_evaluation_null = false;
    private $value = null;
    private $value_null = false;
    private $value_id = null;
    private $value_id_null = false;
    private $get_values_like = null;
    private $get_values_like_null = false;

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

    public function getValueCategoryId()
    {
        return $this->value_category_id;
    }

    public function setValueCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->value_category_id = $var;
    }

    public function getValueCategoryIdNull()
    {
        return $this->value_category_id_null;
    }

    public function setValueCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_category_id_null = $var;
    }

    public function getRecursiveEvaluation()
    {
        return $this->recursive_evaluation;
    }

    public function setRecursiveEvaluation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getValueNull()
    {
        return $this->value_null;
    }

    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
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

    public function getValueIdNull()
    {
        return $this->value_id_null;
    }

    public function setValueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_id_null = $var;
    }

    public function getGetValuesLike()
    {
        return $this->get_values_like;
    }

    public function setGetValuesLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->get_values_like = $var;
    }

    public function getGetValuesLikeNull()
    {
        return $this->get_values_like_null;
    }

    public function setGetValuesLikeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_values_like_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetNodeCharacValues_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $has_details = null;
    private $node_characteristic_id = null;
    private $value = null;
    private $has_binaries = null;
    private $is_used = null;
    private $value_id = null;
    private $sort_no = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getHasDetails()
    {
        return $this->has_details;
    }

    public function setHasDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->has_details = $var;
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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getHasBinaries()
    {
        return $this->has_binaries;
    }

    public function setHasBinaries(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->has_binaries = $var;
    }

    public function getIsUsed()
    {
        return $this->is_used;
    }

    public function setIsUsed(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_used = $var;
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

    public function getSortNo()
    {
        return $this->sort_no;
    }

    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_no = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae70a0a386473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4765744e6f646543686172616356616c7565735f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e696d5f4765744e6f6465436861" .
    "72616356616c7565735f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f2282040a0a506172616d6574657273123b0a166e6f" .
    "64655f63686172616374657269737469635f696418012001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512240a1b6e" .
    "6f64655f63686172616374657269737469635f69645f6e756c6c18e90720" .
    "01280812360a1176616c75655f63617465676f72795f696418022001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "1f0a1676616c75655f63617465676f72795f69645f6e756c6c18ea072001" .
    "280812390a147265637572736976655f6576616c756174696f6e18032001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "6512220a197265637572736976655f6576616c756174696f6e5f6e756c6c" .
    "18eb072001280812290a0576616c756518042001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512130a0a76616c75655f" .
    "6e756c6c18ec0720012808122d0a0876616c75655f696418052001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651216" .
    "0a0d76616c75655f69645f6e756c6c18ed072001280812330a0f6765745f" .
    "76616c7565735f6c696b6518062001280b321a2e6473746f72652e76616c" .
    "7565732e737472696e6756616c7565121d0a146765745f76616c7565735f" .
    "6c696b655f6e756c6c18ee072001280822c1040a08526573706f6e736512" .
    "480a106d6574615f696e666f726d6174696f6e18022003280b322e2e6473" .
    "746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65" .
    "7461496e666f726d6174696f6e122f0a076d65737361676518032003280b" .
    "321e2e6473746f72652e656e67696e652e6d6573736167652e4d65737361" .
    "676512420a03726f7718042003280b32352e6473746f72652e656e67696e" .
    "652e696d5f4765744e6f646543686172616356616c7565735f41642e5265" .
    "73706f6e73652e526f771af5020a03526f77120f0a06726f775f69641890" .
    "4e2001280512310a0b6861735f64657461696c7318914e2001280b321b2e" .
    "6473746f72652e76616c7565732e626f6f6c65616e56616c7565123c0a16" .
    "6e6f64655f63686172616374657269737469635f696418924e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565122a" .
    "0a0576616c756518934e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c756512320a0c6861735f62696e61726965731894" .
    "4e2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56" .
    "616c7565122d0a0769735f7573656418954e2001280b321b2e6473746f72" .
    "652e76616c7565732e626f6f6c65616e56616c7565122e0a0876616c7565" .
    "5f696418964e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565122d0a07736f72745f6e6f18974e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c7565425a0a1b" .
    "696f2e6473746f72652e656e67696e652e70726f636564757265735a3b67" .
    "6f73646b2e6473746f72652e64652f656e67696e652f70726f6365647572" .
    "65732f696d5f4765744e6f646543686172616356616c7565735f41646206" .
    "70726f746f33"
));

