<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ValidateVoucherCode_Pu.proto

namespace Dstore\Engine\Om_ValidateVoucherCode_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $unique_id = null;
    private $unique_id_null = false;
    private $voucher_code = null;
    private $voucher_code_null = false;
    private $person_id = null;
    private $person_id_null = false;

    public function getUniqueId()
    {
        return $this->unique_id;
    }

    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unique_id = $var;
    }

    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    public function getVoucherCode()
    {
        return $this->voucher_code;
    }

    public function setVoucherCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->voucher_code = $var;
    }

    public function getVoucherCodeNull()
    {
        return $this->voucher_code_null;
    }

    public function setVoucherCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->voucher_code_null = $var;
    }

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ValidateVoucherCode_Pu\Response_Row::class);
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
    "0af0050a386473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f56616c6964617465566f7563686572436f64655f50752e70726f74" .
    "6f12276473746f72652e656e67696e652e6f6d5f56616c6964617465566f" .
    "7563686572436f64655f50751a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22eb010a0a506172616d6574657273122d0a09756e" .
    "697175655f696418012001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c756512170a0e756e697175655f69645f6e756c6c18" .
    "e9072001280812300a0c766f75636865725f636f646518022001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c7565121a0a11" .
    "766f75636865725f636f64655f6e756c6c18ea0720012808122e0a097065" .
    "72736f6e5f696418032001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756512170a0e706572736f6e5f69645f6e756c6c" .
    "18eb072001280822e1010a08526573706f6e736512480a106d6574615f69" .
    "6e666f726d6174696f6e18022003280b322e2e6473746f72652e656e6769" .
    "6e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d61" .
    "74696f6e122f0a076d65737361676518032003280b321e2e6473746f7265" .
    "2e656e67696e652e6d6573736167652e4d65737361676512420a03726f77" .
    "18042003280b32352e6473746f72652e656e67696e652e6f6d5f56616c69" .
    "64617465566f7563686572436f64655f50752e526573706f6e73652e526f" .
    "771a160a03526f77120f0a06726f775f696418904e20012805425a0a1b69" .
    "6f2e6473746f72652e656e67696e652e70726f636564757265735a3b676f" .
    "73646b2e6473746f72652e64652f656e67696e652f70726f636564757265" .
    "732f6f6d5f56616c6964617465566f7563686572436f64655f5075620670" .
    "726f746f33"
));
