<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPeriodsForPredVals_Ad.proto

namespace Dstore\Engine\Pm_ModifyPeriodsForPredVals_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $value_id = null;
    private $value_id_null = false;
    private $valid_from = null;
    private $valid_from_null = false;
    private $valid_to = null;
    private $valid_to_null = false;
    private $delete = null;
    private $delete_null = false;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_ModifyPeriodsForPredVals_Ad\Response_Row::class);
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
    "0ac5060a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4d6f64696679506572696f6473466f725072656456616c735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e706d5f4d6f646966" .
    "79506572696f6473466f725072656456616c735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22ac020a0a506172616d65" .
    "74657273122d0a0876616c75655f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512160a0d76616c7565" .
    "5f69645f6e756c6c18e9072001280812310a0a76616c69645f66726f6d18" .
    "022001280b321d2e6473746f72652e76616c7565732e74696d657374616d" .
    "7056616c756512180a0f76616c69645f66726f6d5f6e756c6c18ea072001" .
    "2808122f0a0876616c69645f746f18032001280b321d2e6473746f72652e" .
    "76616c7565732e74696d657374616d7056616c756512160a0d76616c6964" .
    "5f746f5f6e756c6c18eb0720012808122b0a0664656c6574651804200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "12140a0b64656c6574655f6e756c6c18ec072001280822e6010a08526573" .
    "706f6e736512480a106d6574615f696e666f726d6174696f6e1802200328" .
    "0b322e2e6473746f72652e656e67696e652e6d657461696e666f726d6174" .
    "696f6e2e4d657461496e666f726d6174696f6e122f0a076d657373616765" .
    "18032003280b321e2e6473746f72652e656e67696e652e6d657373616765" .
    "2e4d65737361676512470a03726f7718042003280b323a2e6473746f7265" .
    "2e656e67696e652e706d5f4d6f64696679506572696f6473466f72507265" .
    "6456616c735f41642e526573706f6e73652e526f771a160a03526f77120f" .
    "0a06726f775f696418904e20012805425f0a1b696f2e6473746f72652e65" .
    "6e67696e652e70726f636564757265735a40676f73646b2e6473746f7265" .
    "2e64652f656e67696e652f70726f636564757265732f706d5f4d6f646966" .
    "79506572696f6473466f725072656456616c735f4164620670726f746f33"
));
