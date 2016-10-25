<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetSearchItems_Ad.proto

namespace Dstore\Engine\Mi_GetSearchItems_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $table_id = null;
    private $table_id_null = false;
    private $characteristic_id = null;
    private $characteristic_id_null = false;
    private $search_value = null;
    private $search_value_null = false;
    private $matching_value = null;
    private $matching_value_null = false;

    public function getTableId()
    {
        return $this->table_id;
    }

    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->table_id = $var;
    }

    public function getTableIdNull()
    {
        return $this->table_id_null;
    }

    public function setTableIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_id_null = $var;
    }

    public function getCharacteristicId()
    {
        return $this->characteristic_id;
    }

    public function setCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->characteristic_id = $var;
    }

    public function getCharacteristicIdNull()
    {
        return $this->characteristic_id_null;
    }

    public function setCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_null = $var;
    }

    public function getSearchValue()
    {
        return $this->search_value;
    }

    public function setSearchValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->search_value = $var;
    }

    public function getSearchValueNull()
    {
        return $this->search_value_null;
    }

    public function setSearchValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_value_null = $var;
    }

    public function getMatchingValue()
    {
        return $this->matching_value;
    }

    public function setMatchingValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->matching_value = $var;
    }

    public function getMatchingValueNull()
    {
        return $this->matching_value_null;
    }

    public function setMatchingValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->matching_value_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetSearchItems_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $table_id = null;
    private $search_value = null;
    private $matching_value = null;
    private $characteristic_id = null;
    private $use_like = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTableId()
    {
        return $this->table_id;
    }

    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->table_id = $var;
    }

    public function getSearchValue()
    {
        return $this->search_value;
    }

    public function setSearchValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->search_value = $var;
    }

    public function getMatchingValue()
    {
        return $this->matching_value;
    }

    public function setMatchingValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->matching_value = $var;
    }

    public function getCharacteristicId()
    {
        return $this->characteristic_id;
    }

    public function setCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->characteristic_id = $var;
    }

    public function getUseLike()
    {
        return $this->use_like;
    }

    public function setUseLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->use_like = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0abf080a336473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4765745365617263684974656d735f41642e70726f746f12226473" .
    "746f72652e656e67696e652e6d695f4765745365617263684974656d735f" .
    "41641a136473746f72652f76616c7565732e70726f746f1a1b6473746f72" .
    "652f656e67696e652f6d6573736167652e70726f746f1a236473746f7265" .
    "2f656e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22" .
    "cc020a0a506172616d6574657273122d0a087461626c655f696418012001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512160a0d7461626c655f69645f6e756c6c18e9072001280812360a1163" .
    "686172616374657269737469635f696418022001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565121f0a166368617261" .
    "6374657269737469635f69645f6e756c6c18ea072001280812300a0c7365" .
    "617263685f76616c756518032001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565121a0a117365617263685f76616c7565" .
    "5f6e756c6c18eb072001280812320a0e6d61746368696e675f76616c7565" .
    "18042001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565121c0a136d61746368696e675f76616c75655f6e756c6c18ec07" .
    "2001280822de030a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d657373616765123d0a03726f77180420" .
    "03280b32302e6473746f72652e656e67696e652e6d695f47657453656172" .
    "63684974656d735f41642e526573706f6e73652e526f771a97020a03526f" .
    "77120f0a06726f775f696418904e20012805122e0a087461626c655f6964" .
    "18914e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512310a0c7365617263685f76616c756518924e2001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c756512330a" .
    "0e6d61746368696e675f76616c756518934e2001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512370a11636861726163" .
    "74657269737469635f696418944e2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565122e0a087573655f6c696b6518" .
    "954e2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c756542550a1b696f2e6473746f72652e656e67696e652e70726f63" .
    "6564757265735a36676f73646b2e6473746f72652e64652f656e67696e65" .
    "2f70726f636564757265732f6d695f4765745365617263684974656d735f" .
    "4164620670726f746f33"
));

