<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifySetsForBonItBenefs_Ad.proto

namespace Dstore\Engine\Om_ModifySetsForBonItBenefs_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $benefit_id = null;
    private $benefit_id_null = false;
    private $item_set_id = null;
    private $item_set_id_null = false;
    private $sort_no = null;
    private $sort_no_null = false;
    private $delete_combination = null;
    private $delete_combination_null = false;

    public function getBenefitId()
    {
        return $this->benefit_id;
    }

    public function setBenefitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->benefit_id = $var;
    }

    public function getBenefitIdNull()
    {
        return $this->benefit_id_null;
    }

    public function setBenefitIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->benefit_id_null = $var;
    }

    public function getItemSetId()
    {
        return $this->item_set_id;
    }

    public function setItemSetId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_set_id = $var;
    }

    public function getItemSetIdNull()
    {
        return $this->item_set_id_null;
    }

    public function setItemSetIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->item_set_id_null = $var;
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

    public function getSortNoNull()
    {
        return $this->sort_no_null;
    }

    public function setSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_no_null = $var;
    }

    public function getDeleteCombination()
    {
        return $this->delete_combination;
    }

    public function setDeleteCombination(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_combination = $var;
    }

    public function getDeleteCombinationNull()
    {
        return $this->delete_combination_null;
    }

    public function setDeleteCombinationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_combination_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifySetsForBonItBenefs_Ad\Response_Row::class);
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
    "0add060a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f6469667953657473466f72426f6e497442656e6566735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4d6f646966" .
    "7953657473466f72426f6e497442656e6566735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22c4020a0a506172616d65" .
    "74657273122f0a0a62656e656669745f696418012001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512180a0f62656e" .
    "656669745f69645f6e756c6c18e9072001280812300a0b6974656d5f7365" .
    "745f696418022001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c756512190a106974656d5f7365745f69645f6e756c6c18" .
    "ea0720012808122c0a07736f72745f6e6f18032001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512150a0c736f7274" .
    "5f6e6f5f6e756c6c18eb072001280812370a1264656c6574655f636f6d62" .
    "696e6174696f6e18042001280b321b2e6473746f72652e76616c7565732e" .
    "626f6f6c65616e56616c756512200a1764656c6574655f636f6d62696e61" .
    "74696f6e5f6e756c6c18ec072001280822e6010a08526573706f6e736512" .
    "480a106d6574615f696e666f726d6174696f6e18022003280b322e2e6473" .
    "746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65" .
    "7461496e666f726d6174696f6e122f0a076d65737361676518032003280b" .
    "321e2e6473746f72652e656e67696e652e6d6573736167652e4d65737361" .
    "676512470a03726f7718042003280b323a2e6473746f72652e656e67696e" .
    "652e6f6d5f4d6f6469667953657473466f72426f6e497442656e6566735f" .
    "41642e526573706f6e73652e526f771a160a03526f77120f0a06726f775f" .
    "696418904e20012805425f0a1b696f2e6473746f72652e656e67696e652e" .
    "70726f636564757265735a40676f73646b2e6473746f72652e64652f656e" .
    "67696e652f70726f636564757265732f6f6d5f4d6f646966795365747346" .
    "6f72426f6e497442656e6566735f4164620670726f746f33"
));

