<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyTaxes_Ad.proto

namespace Dstore\Engine\Om_ModifyTaxes_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $tax_type_id = null;
    private $tax_type_id_null = false;
    private $tax_rate = null;
    private $tax_rate_null = false;
    private $valid_from = null;
    private $valid_from_null = false;
    private $valid_to = null;
    private $valid_to_null = false;

    public function getTaxTypeId()
    {
        return $this->tax_type_id;
    }

    public function setTaxTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tax_type_id = $var;
    }

    public function getTaxTypeIdNull()
    {
        return $this->tax_type_id_null;
    }

    public function setTaxTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tax_type_id_null = $var;
    }

    public function getTaxRate()
    {
        return $this->tax_rate;
    }

    public function setTaxRate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->tax_rate = $var;
    }

    public function getTaxRateNull()
    {
        return $this->tax_rate_null;
    }

    public function setTaxRateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tax_rate_null = $var;
    }

    public function getValidFrom()
    {
        return $this->valid_from;
    }

    public function setValidFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->valid_from = $var;
    }

    public function getValidFromNull()
    {
        return $this->valid_from_null;
    }

    public function setValidFromNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_from_null = $var;
    }

    public function getValidTo()
    {
        return $this->valid_to;
    }

    public function setValidTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->valid_to = $var;
    }

    public function getValidToNull()
    {
        return $this->valid_to_null;
    }

    public function setValidToNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_to_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyTaxes_Ad\Response_Row::class);
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
    "0a9b060a306473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f6469667954617865735f41642e70726f746f121f6473746f72" .
    "652e656e67696e652e6f6d5f4d6f6469667954617865735f41641a136473" .
    "746f72652f76616c7565732e70726f746f1a1b6473746f72652f656e6769" .
    "6e652f6d6573736167652e70726f746f1a236473746f72652f656e67696e" .
    "652f6d657461696e666f726d6174696f6e2e70726f746f22b6020a0a5061" .
    "72616d657465727312300a0b7461785f747970655f696418012001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651219" .
    "0a107461785f747970655f69645f6e756c6c18e90720012808122d0a0874" .
    "61785f7261746518022001280b321b2e6473746f72652e76616c7565732e" .
    "646563696d616c56616c756512160a0d7461785f726174655f6e756c6c18" .
    "ea072001280812310a0a76616c69645f66726f6d18032001280b321d2e64" .
    "73746f72652e76616c7565732e74696d657374616d7056616c756512180a" .
    "0f76616c69645f66726f6d5f6e756c6c18eb0720012808122f0a0876616c" .
    "69645f746f18042001280b321d2e6473746f72652e76616c7565732e7469" .
    "6d657374616d7056616c756512160a0d76616c69645f746f5f6e756c6c18" .
    "ec072001280822d9010a08526573706f6e736512480a106d6574615f696e" .
    "666f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e" .
    "652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174" .
    "696f6e122f0a076d65737361676518032003280b321e2e6473746f72652e" .
    "656e67696e652e6d6573736167652e4d657373616765123a0a03726f7718" .
    "042003280b322d2e6473746f72652e656e67696e652e6f6d5f4d6f646966" .
    "7954617865735f41642e526573706f6e73652e526f771a160a03526f7712" .
    "0f0a06726f775f696418904e2001280542520a1b696f2e6473746f72652e" .
    "656e67696e652e70726f636564757265735a33676f73646b2e6473746f72" .
    "652e64652f656e67696e652f70726f636564757265732f6f6d5f4d6f6469" .
    "667954617865735f4164620670726f746f33"
));
