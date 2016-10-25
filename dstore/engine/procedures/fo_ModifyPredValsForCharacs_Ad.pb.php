<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_ModifyPredValsForCharacs_Ad.proto

namespace Dstore\Engine\Fo_ModifyPredValsForCharacs_Ad;

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
    private $old_value = null;
    private $old_value_null = false;
    private $value = null;
    private $value_null = false;
    private $only_valid_for_forum_id = null;
    private $only_valid_for_forum_id_null = false;
    private $country = null;
    private $country_null = false;

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

    public function getOldValue()
    {
        return $this->old_value;
    }

    public function setOldValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->old_value = $var;
    }

    public function getOldValueNull()
    {
        return $this->old_value_null;
    }

    public function setOldValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->old_value_null = $var;
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

    public function getOnlyValidForForumId()
    {
        return $this->only_valid_for_forum_id;
    }

    public function setOnlyValidForForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->only_valid_for_forum_id = $var;
    }

    public function getOnlyValidForForumIdNull()
    {
        return $this->only_valid_for_forum_id_null;
    }

    public function setOnlyValidForForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_valid_for_forum_id_null = $var;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->country = $var;
    }

    public function getCountryNull()
    {
        return $this->country_null;
    }

    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_ModifyPredValsForCharacs_Ad\Response_Row::class);
        $this->row = $var;
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
    "0abf070a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f4d6f646966795072656456616c73466f72436861726163735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e666f5f4d6f646966" .
    "795072656456616c73466f72436861726163735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22a6030a0a506172616d65" .
    "74657273123e0a19706f7374696e675f6368617261637465726973746963" .
    "5f696418012001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512270a1e706f7374696e675f63686172616374657269" .
    "737469635f69645f6e756c6c18e90720012808122d0a096f6c645f76616c" .
    "756518022001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512170a0e6f6c645f76616c75655f6e756c6c18ea07200128" .
    "0812290a0576616c756518032001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512130a0a76616c75655f6e756c6c18eb" .
    "0720012808123c0a176f6e6c795f76616c69645f666f725f666f72756d5f" .
    "696418042001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512250a1c6f6e6c795f76616c69645f666f725f666f7275" .
    "6d5f69645f6e756c6c18ec0720012808122b0a07636f756e747279180520" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512150a0c636f756e7472795f6e756c6c18ed072001280822e6010a0852" .
    "6573706f6e736512480a106d6574615f696e666f726d6174696f6e180220" .
    "03280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d" .
    "6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d65737361" .
    "676518032003280b321e2e6473746f72652e656e67696e652e6d65737361" .
    "67652e4d65737361676512470a03726f7718042003280b323a2e6473746f" .
    "72652e656e67696e652e666f5f4d6f646966795072656456616c73466f72" .
    "436861726163735f41642e526573706f6e73652e526f771a160a03526f77" .
    "120f0a06726f775f696418904e20012805425f0a1b696f2e6473746f7265" .
    "2e656e67696e652e70726f636564757265735a40676f73646b2e6473746f" .
    "72652e64652f656e67696e652f70726f636564757265732f666f5f4d6f64" .
    "6966795072656456616c73466f72436861726163735f4164620670726f74" .
    "6f33"
));

