<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonDetails_Ad.proto

namespace Dstore\Engine\Pm_GetPersonDetails_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_id = null;
    private $person_id_null = false;
    private $characteristic_id_list = null;
    private $characteristic_id_list_null = false;
    private $sorted_result = null;
    private $sorted_result_null = false;
    private $include_characs_with_no_details = null;
    private $include_characs_with_no_details_null = false;

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_id = $var;
    }

    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    public function getCharacteristicIdList()
    {
        return $this->characteristic_id_list;
    }

    public function setCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_id_list = $var;
    }

    public function getCharacteristicIdListNull()
    {
        return $this->characteristic_id_list_null;
    }

    public function setCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list_null = $var;
    }

    public function getSortedResult()
    {
        return $this->sorted_result;
    }

    public function setSortedResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->sorted_result = $var;
    }

    public function getSortedResultNull()
    {
        return $this->sorted_result_null;
    }

    public function setSortedResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sorted_result_null = $var;
    }

    public function getIncludeCharacsWithNoDetails()
    {
        return $this->include_characs_with_no_details;
    }

    public function setIncludeCharacsWithNoDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_characs_with_no_details = $var;
    }

    public function getIncludeCharacsWithNoDetailsNull()
    {
        return $this->include_characs_with_no_details_null;
    }

    public function setIncludeCharacsWithNoDetailsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_characs_with_no_details_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersonDetails_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $details = null;
    private $characteristic_description = null;
    private $characteristic_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->details = $var;
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

    public function getCharacteristicId()
    {
        return $this->characteristic_id;
    }

    public function setCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->characteristic_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9f080a356473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e44657461696c735f41642e70726f746f1224" .
    "6473746f72652e656e67696e652e706d5f476574506572736f6e44657461" .
    "696c735f41641a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22fd020a0a506172616d6574657273122e0a09706572736f6e5f69" .
    "6418012001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512170a0e706572736f6e5f69645f6e756c6c18e907200128" .
    "08123a0a1663686172616374657269737469635f69645f6c697374180220" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512240a1b63686172616374657269737469635f69645f6c6973745f6e75" .
    "6c6c18ea072001280812320a0d736f727465645f726573756c7418032001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "65121b0a12736f727465645f726573756c745f6e756c6c18eb0720012808" .
    "12440a1f696e636c7564655f636861726163735f776974685f6e6f5f6465" .
    "7461696c7318042001280b321b2e6473746f72652e76616c7565732e626f" .
    "6f6c65616e56616c7565122d0a24696e636c7564655f636861726163735f" .
    "776974685f6e6f5f64657461696c735f6e756c6c18ec0720012808228703" .
    "0a08526573706f6e736512480a106d6574615f696e666f726d6174696f6e" .
    "18022003280b322e2e6473746f72652e656e67696e652e6d657461696e66" .
    "6f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d65" .
    "737361676518032003280b321e2e6473746f72652e656e67696e652e6d65" .
    "73736167652e4d657373616765123f0a03726f7718042003280b32322e64" .
    "73746f72652e656e67696e652e706d5f476574506572736f6e4465746169" .
    "6c735f41642e526573706f6e73652e526f771abe010a03526f77120f0a06" .
    "726f775f696418904e20012805122c0a0764657461696c7318914e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "3f0a1a63686172616374657269737469635f6465736372697074696f6e18" .
    "924e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512370a1163686172616374657269737469635f696418934e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6542570a1b696f2e6473746f72652e656e67696e652e70726f6365647572" .
    "65735a38676f73646b2e6473746f72652e64652f656e67696e652f70726f" .
    "636564757265732f706d5f476574506572736f6e44657461696c735f4164" .
    "620670726f746f33"
));

