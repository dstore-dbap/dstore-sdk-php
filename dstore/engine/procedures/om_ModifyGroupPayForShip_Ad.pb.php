<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyGroupPayForShip_Ad.proto

namespace Dstore\Engine\Om_ModifyGroupPayForShip_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $group_id = null;
    private $group_id_null = false;
    private $payment_for_shipping_id = null;
    private $payment_for_shipping_id_null = false;
    private $delete = null;
    private $delete_null = false;

    public function getGroupId()
    {
        return $this->group_id;
    }

    public function setGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->group_id = $var;
    }

    public function getGroupIdNull()
    {
        return $this->group_id_null;
    }

    public function setGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->group_id_null = $var;
    }

    public function getPaymentForShippingId()
    {
        return $this->payment_for_shipping_id;
    }

    public function setPaymentForShippingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->payment_for_shipping_id = $var;
    }

    public function getPaymentForShippingIdNull()
    {
        return $this->payment_for_shipping_id_null;
    }

    public function setPaymentForShippingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_for_shipping_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyGroupPayForShip_Ad\Response_Row::class);
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
    "0a88060a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f6469667947726f7570506179466f72536869705f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e6f6d5f4d6f646966794772" .
    "6f7570506179466f72536869705f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22fb010a0a506172616d6574657273122d" .
    "0a0867726f75705f696418012001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512160a0d67726f75705f69645f6e75" .
    "6c6c18e90720012808123c0a177061796d656e745f666f725f7368697070" .
    "696e675f696418022001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512250a1c7061796d656e745f666f725f736869" .
    "7070696e675f69645f6e756c6c18ea0720012808122b0a0664656c657465" .
    "18032001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c756512140a0b64656c6574655f6e756c6c18eb072001280822e301" .
    "0a08526573706f6e736512480a106d6574615f696e666f726d6174696f6e" .
    "18022003280b322e2e6473746f72652e656e67696e652e6d657461696e66" .
    "6f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d65" .
    "737361676518032003280b321e2e6473746f72652e656e67696e652e6d65" .
    "73736167652e4d65737361676512440a03726f7718042003280b32372e64" .
    "73746f72652e656e67696e652e6f6d5f4d6f6469667947726f7570506179" .
    "466f72536869705f41642e526573706f6e73652e526f771a160a03526f77" .
    "120f0a06726f775f696418904e20012805425c0a1b696f2e6473746f7265" .
    "2e656e67696e652e70726f636564757265735a3d676f73646b2e6473746f" .
    "72652e64652f656e67696e652f70726f636564757265732f6f6d5f4d6f64" .
    "69667947726f7570506179466f72536869705f4164620670726f746f33"
));

