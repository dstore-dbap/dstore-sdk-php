<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTaxes.proto

namespace Dstore\Engine\Om_GetTaxes;

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
    private $date = null;
    private $date_null = false;

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

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->date = $var;
    }

    public function getDateNull()
    {
        return $this->date_null;
    }

    public function setDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetTaxes\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $tax_type = null;
    private $tax_type_id = null;
    private $valid_to = null;
    private $tax_rate = null;
    private $valid_from = null;
    private $surcharge_type_id = null;
    private $surcharge_type_category_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTaxType()
    {
        return $this->tax_type;
    }

    public function setTaxType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->tax_type = $var;
    }

    public function getTaxTypeId()
    {
        return $this->tax_type_id;
    }

    public function setTaxTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tax_type_id = $var;
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

    public function getTaxRate()
    {
        return $this->tax_rate;
    }

    public function setTaxRate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->tax_rate = $var;
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

    public function getSurchargeTypeId()
    {
        return $this->surcharge_type_id;
    }

    public function setSurchargeTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->surcharge_type_id = $var;
    }

    public function getSurchargeTypeCategoryId()
    {
        return $this->surcharge_type_category_id;
    }

    public function setSurchargeTypeCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->surcharge_type_category_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0adb070a2a6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657454617865732e70726f746f12196473746f72652e656e6769" .
    "6e652e6f6d5f47657454617865731a136473746f72652f76616c7565732e" .
    "70726f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70" .
    "726f746f1a236473746f72652f656e67696e652f6d657461696e666f726d" .
    "6174696f6e2e70726f746f229a010a0a506172616d657465727312300a0b" .
    "7461785f747970655f696418012001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512190a107461785f747970655f69" .
    "645f6e756c6c18e90720012808122b0a046461746518022001280b321d2e" .
    "6473746f72652e76616c7565732e74696d657374616d7056616c75651212" .
    "0a09646174655f6e756c6c18ea072001280822c7040a08526573706f6e73" .
    "6512480a106d6574615f696e666f726d6174696f6e18022003280b322e2e" .
    "6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e" .
    "4d657461496e666f726d6174696f6e122f0a076d65737361676518032003" .
    "280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d6573" .
    "7361676512340a03726f7718042003280b32272e6473746f72652e656e67" .
    "696e652e6f6d5f47657454617865732e526573706f6e73652e526f771a89" .
    "030a03526f77120f0a06726f775f696418904e20012805122d0a08746178" .
    "5f7479706518914e2001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756512310a0b7461785f747970655f696418924e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512300a0876616c69645f746f18934e2001280b321d2e6473746f72652e" .
    "76616c7565732e74696d657374616d7056616c7565122e0a087461785f72" .
    "61746518944e2001280b321b2e6473746f72652e76616c7565732e646563" .
    "696d616c56616c756512320a0a76616c69645f66726f6d18954e2001280b" .
    "321d2e6473746f72652e76616c7565732e74696d657374616d7056616c75" .
    "6512370a117375726368617267655f747970655f696418964e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651240" .
    "0a1a7375726368617267655f747970655f63617465676f72795f69641897" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565424c0a1b696f2e6473746f72652e656e67696e652e70726f6365" .
    "64757265735a2d676f73646b2e6473746f72652e64652f656e67696e652f" .
    "70726f636564757265732f6f6d5f4765745461786573620670726f746f33"
));

