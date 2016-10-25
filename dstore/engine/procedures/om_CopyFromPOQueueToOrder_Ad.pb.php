<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_CopyFromPOQueueToOrder_Ad.proto

namespace Dstore\Engine\Om_CopyFromPOQueueToOrder_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $supplier_id = null;
    private $supplier_id_null = false;
    private $order_type_id = null;
    private $order_type_id_null = false;
    private $order_deadline = null;
    private $order_deadline_null = false;
    private $delivery_person_id = null;
    private $delivery_person_id_null = false;
    private $shipping_type_id = null;
    private $shipping_type_id_null = false;
    private $payment_type_id = null;
    private $payment_type_id_null = false;
    private $delivery_date_and_time = null;
    private $delivery_date_and_time_null = false;

    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    public function setSupplierId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->supplier_id = $var;
    }

    public function getSupplierIdNull()
    {
        return $this->supplier_id_null;
    }

    public function setSupplierIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->supplier_id_null = $var;
    }

    public function getOrderTypeId()
    {
        return $this->order_type_id;
    }

    public function setOrderTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_type_id = $var;
    }

    public function getOrderTypeIdNull()
    {
        return $this->order_type_id_null;
    }

    public function setOrderTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_type_id_null = $var;
    }

    public function getOrderDeadline()
    {
        return $this->order_deadline;
    }

    public function setOrderDeadline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->order_deadline = $var;
    }

    public function getOrderDeadlineNull()
    {
        return $this->order_deadline_null;
    }

    public function setOrderDeadlineNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_deadline_null = $var;
    }

    public function getDeliveryPersonId()
    {
        return $this->delivery_person_id;
    }

    public function setDeliveryPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->delivery_person_id = $var;
    }

    public function getDeliveryPersonIdNull()
    {
        return $this->delivery_person_id_null;
    }

    public function setDeliveryPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delivery_person_id_null = $var;
    }

    public function getShippingTypeId()
    {
        return $this->shipping_type_id;
    }

    public function setShippingTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->shipping_type_id = $var;
    }

    public function getShippingTypeIdNull()
    {
        return $this->shipping_type_id_null;
    }

    public function setShippingTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_type_id_null = $var;
    }

    public function getPaymentTypeId()
    {
        return $this->payment_type_id;
    }

    public function setPaymentTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->payment_type_id = $var;
    }

    public function getPaymentTypeIdNull()
    {
        return $this->payment_type_id_null;
    }

    public function setPaymentTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_type_id_null = $var;
    }

    public function getDeliveryDateAndTime()
    {
        return $this->delivery_date_and_time;
    }

    public function setDeliveryDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->delivery_date_and_time = $var;
    }

    public function getDeliveryDateAndTimeNull()
    {
        return $this->delivery_date_and_time_null;
    }

    public function setDeliveryDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delivery_date_and_time_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_CopyFromPOQueueToOrder_Ad\Response_Row::class);
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
    "0afc080a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f436f707946726f6d504f5175657565546f4f726465725f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e6f6d5f436f707946726f" .
    "6d504f5175657565546f4f726465725f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22eb040a0a506172616d6574657273" .
    "12300a0b737570706c6965725f696418012001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512190a10737570706c69" .
    "65725f69645f6e756c6c18e9072001280812320a0d6f726465725f747970" .
    "655f696418022001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565121b0a126f726465725f747970655f69645f6e756c" .
    "6c18ea072001280812350a0e6f726465725f646561646c696e6518032001" .
    "280b321d2e6473746f72652e76616c7565732e74696d657374616d705661" .
    "6c7565121c0a136f726465725f646561646c696e655f6e756c6c18eb0720" .
    "01280812370a1264656c69766572795f706572736f6e5f69641804200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12200a1764656c69766572795f706572736f6e5f69645f6e756c6c18ec07" .
    "2001280812350a107368697070696e675f747970655f696418052001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "1e0a157368697070696e675f747970655f69645f6e756c6c18ed07200128" .
    "0812340a0f7061796d656e745f747970655f696418062001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565121d0a1470" .
    "61796d656e745f747970655f69645f6e756c6c18ee0720012808123d0a16" .
    "64656c69766572795f646174655f616e645f74696d6518072001280b321d" .
    "2e6473746f72652e76616c7565732e74696d657374616d7056616c756512" .
    "240a1b64656c69766572795f646174655f616e645f74696d655f6e756c6c" .
    "18ef072001280822e4010a08526573706f6e736512480a106d6574615f69" .
    "6e666f726d6174696f6e18022003280b322e2e6473746f72652e656e6769" .
    "6e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d61" .
    "74696f6e122f0a076d65737361676518032003280b321e2e6473746f7265" .
    "2e656e67696e652e6d6573736167652e4d65737361676512450a03726f77" .
    "18042003280b32382e6473746f72652e656e67696e652e6f6d5f436f7079" .
    "46726f6d504f5175657565546f4f726465725f41642e526573706f6e7365" .
    "2e526f771a160a03526f77120f0a06726f775f696418904e20012805425d" .
    "0a1b696f2e6473746f72652e656e67696e652e70726f636564757265735a" .
    "3e676f73646b2e6473746f72652e64652f656e67696e652f70726f636564" .
    "757265732f6f6d5f436f707946726f6d504f5175657565546f4f72646572" .
    "5f4164620670726f746f33"
));
