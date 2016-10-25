<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyBinariesForPersons_Ad.proto

namespace Dstore\Engine\Pm_ModifyBinariesForPersons_Ad;

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
    private $binary_code_id = null;
    private $binary_code_id_null = false;
    private $delete = null;
    private $delete_null = false;
    private $binary_description = null;
    private $binary_description_null = false;

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

    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_code_id = $var;
    }

    public function getBinaryCodeIdNull()
    {
        return $this->binary_code_id_null;
    }

    public function setBinaryCodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_code_id_null = $var;
    }

    public function getDelete()
    {
        return $this->delete;
    }

    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete = $var;
    }

    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

    public function getBinaryDescription()
    {
        return $this->binary_description;
    }

    public function setBinaryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->binary_description = $var;
    }

    public function getBinaryDescriptionNull()
    {
        return $this->binary_description_null;
    }

    public function setBinaryDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_description_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_ModifyBinariesForPersons_Ad\Response_Row::class);
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
    "0ade060a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4d6f6469667942696e6172696573466f72506572736f6e735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e706d5f4d6f646966" .
    "7942696e6172696573466f72506572736f6e735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22c5020a0a506172616d65" .
    "74657273122e0a09706572736f6e5f696418012001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512170a0e70657273" .
    "6f6e5f69645f6e756c6c18e9072001280812330a0e62696e6172795f636f" .
    "64655f696418022001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565121c0a1362696e6172795f636f64655f69645f6e" .
    "756c6c18ea0720012808122b0a0664656c65746518032001280b321b2e64" .
    "73746f72652e76616c7565732e626f6f6c65616e56616c756512140a0b64" .
    "656c6574655f6e756c6c18eb072001280812360a1262696e6172795f6465" .
    "736372697074696f6e18042001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c756512200a1762696e6172795f646573637269" .
    "7074696f6e5f6e756c6c18ec072001280822e6010a08526573706f6e7365" .
    "12480a106d6574615f696e666f726d6174696f6e18022003280b322e2e64" .
    "73746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d" .
    "657461496e666f726d6174696f6e122f0a076d6573736167651803200328" .
    "0b321e2e6473746f72652e656e67696e652e6d6573736167652e4d657373" .
    "61676512470a03726f7718042003280b323a2e6473746f72652e656e6769" .
    "6e652e706d5f4d6f6469667942696e6172696573466f72506572736f6e73" .
    "5f41642e526573706f6e73652e526f771a160a03526f77120f0a06726f77" .
    "5f696418904e20012805425f0a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a40676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f706d5f4d6f6469667942696e61" .
    "72696573466f72506572736f6e735f4164620670726f746f33"
));
