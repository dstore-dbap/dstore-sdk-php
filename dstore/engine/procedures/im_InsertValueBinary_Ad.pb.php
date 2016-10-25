<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_InsertValueBinary_Ad.proto

namespace Dstore\Engine\Im_InsertValueBinary_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $value_ids = null;
    private $value_ids_null = false;
    private $binary_description = null;
    private $binary_description_null = false;

    public function getValueIds()
    {
        return $this->value_ids;
    }

    public function setValueIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value_ids = $var;
    }

    public function getValueIdsNull()
    {
        return $this->value_ids_null;
    }

    public function setValueIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_ids_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_InsertValueBinary_Ad\Response_Row::class);
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
    "0aab050a366473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f496e7365727456616c756542696e6172795f41642e70726f746f12" .
    "256473746f72652e656e67696e652e696d5f496e7365727456616c756542" .
    "696e6172795f41641a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f22ae010a0a506172616d6574657273122d0a0976616c75655f" .
    "69647318012001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c756512170a0e76616c75655f6964735f6e756c6c18e9072001" .
    "280812360a1262696e6172795f6465736372697074696f6e18022001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75651220" .
    "0a1762696e6172795f6465736372697074696f6e5f6e756c6c18ea072001" .
    "280822df010a08526573706f6e736512480a106d6574615f696e666f726d" .
    "6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d65" .
    "7461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e12" .
    "2f0a076d65737361676518032003280b321e2e6473746f72652e656e6769" .
    "6e652e6d6573736167652e4d65737361676512400a03726f771804200328" .
    "0b32332e6473746f72652e656e67696e652e696d5f496e7365727456616c" .
    "756542696e6172795f41642e526573706f6e73652e526f771a160a03526f" .
    "77120f0a06726f775f696418904e2001280542580a1b696f2e6473746f72" .
    "652e656e67696e652e70726f636564757265735a39676f73646b2e647374" .
    "6f72652e64652f656e67696e652f70726f636564757265732f696d5f496e" .
    "7365727456616c756542696e6172795f4164620670726f746f33"
));

