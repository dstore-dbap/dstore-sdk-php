<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetSQLFunctMetaProps_Ad.proto

namespace Dstore\Engine\Mi_GetSQLFunctMetaProps_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $s_q_l_function_name = null;
    private $s_q_l_function_name_null = false;
    private $meta_info_type = null;
    private $meta_info_type_null = false;

    public function getSQLFunctionName()
    {
        return $this->s_q_l_function_name;
    }

    public function setSQLFunctionName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->s_q_l_function_name = $var;
    }

    public function getSQLFunctionNameNull()
    {
        return $this->s_q_l_function_name_null;
    }

    public function setSQLFunctionNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->s_q_l_function_name_null = $var;
    }

    public function getMetaInfoType()
    {
        return $this->meta_info_type;
    }

    public function setMetaInfoType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->meta_info_type = $var;
    }

    public function getMetaInfoTypeNull()
    {
        return $this->meta_info_type_null;
    }

    public function setMetaInfoTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->meta_info_type_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetSQLFunctMetaProps_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $code_line_number = null;
    private $meta_info_type = null;
    private $information = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getCodeLineNumber()
    {
        return $this->code_line_number;
    }

    public function setCodeLineNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->code_line_number = $var;
    }

    public function getMetaInfoType()
    {
        return $this->meta_info_type;
    }

    public function setMetaInfoType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->meta_info_type = $var;
    }

    public function getInformation()
    {
        return $this->information;
    }

    public function setInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->information = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae3060a396473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f47657453514c46756e63744d65746150726f70735f41642e70726f" .
    "746f12286473746f72652e656e67696e652e6d695f47657453514c46756e" .
    "63744d65746150726f70735f41641a136473746f72652f76616c7565732e" .
    "70726f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70" .
    "726f746f1a236473746f72652f656e67696e652f6d657461696e666f726d" .
    "6174696f6e2e70726f746f22ba010a0a506172616d657465727312370a13" .
    "735f715f6c5f66756e6374696f6e5f6e616d6518012001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c756512210a18735f71" .
    "5f6c5f66756e6374696f6e5f6e616d655f6e756c6c18e907200128081232" .
    "0a0e6d6574615f696e666f5f7479706518022001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c7565121c0a136d6574615f69" .
    "6e666f5f747970655f6e756c6c18ea07200128082282030a08526573706f" .
    "6e736512480a106d6574615f696e666f726d6174696f6e18022003280b32" .
    "2e2e6473746f72652e656e67696e652e6d657461696e666f726d6174696f" .
    "6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167651803" .
    "2003280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d" .
    "65737361676512430a03726f7718042003280b32362e6473746f72652e65" .
    "6e67696e652e6d695f47657453514c46756e63744d65746150726f70735f" .
    "41642e526573706f6e73652e526f771ab5010a03526f77120f0a06726f77" .
    "5f696418904e2001280512360a10636f64655f6c696e655f6e756d626572" .
    "18914e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512330a0e6d6574615f696e666f5f7479706518924e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "300a0b696e666f726d6174696f6e18934e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565425b0a1b696f2e6473746f" .
    "72652e656e67696e652e70726f636564757265735a3c676f73646b2e6473" .
    "746f72652e64652f656e67696e652f70726f636564757265732f6d695f47" .
    "657453514c46756e63744d65746150726f70735f4164620670726f746f33"
));
