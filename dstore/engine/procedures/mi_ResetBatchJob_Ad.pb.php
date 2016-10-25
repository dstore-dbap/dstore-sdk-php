<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ResetBatchJob_Ad.proto

namespace Dstore\Engine\Mi_ResetBatchJob_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $procedure_name = null;
    private $procedure_name_null = false;

    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->procedure_name = $var;
    }

    public function getProcedureNameNull()
    {
        return $this->procedure_name_null;
    }

    public function setProcedureNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_name_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_ResetBatchJob_Ad\Response_Row::class);
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
    "0aca040a326473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f526573657442617463684a6f625f41642e70726f746f1221647374" .
    "6f72652e656e67696e652e6d695f526573657442617463684a6f625f4164" .
    "1a136473746f72652f76616c7565732e70726f746f1a1b6473746f72652f" .
    "656e67696e652f6d6573736167652e70726f746f1a236473746f72652f65" .
    "6e67696e652f6d657461696e666f726d6174696f6e2e70726f746f225e0a" .
    "0a506172616d657465727312320a0e70726f6365647572655f6e616d6518" .
    "012001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c7565121c0a1370726f6365647572655f6e616d655f6e756c6c18e90720" .
    "01280822db010a08526573706f6e736512480a106d6574615f696e666f72" .
    "6d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d" .
    "657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e" .
    "122f0a076d65737361676518032003280b321e2e6473746f72652e656e67" .
    "696e652e6d6573736167652e4d657373616765123c0a03726f7718042003" .
    "280b322f2e6473746f72652e656e67696e652e6d695f5265736574426174" .
    "63684a6f625f41642e526573706f6e73652e526f771a160a03526f77120f" .
    "0a06726f775f696418904e2001280542540a1b696f2e6473746f72652e65" .
    "6e67696e652e70726f636564757265735a35676f73646b2e6473746f7265" .
    "2e64652f656e67696e652f70726f636564757265732f6d695f5265736574" .
    "42617463684a6f625f4164620670726f746f33"
));

