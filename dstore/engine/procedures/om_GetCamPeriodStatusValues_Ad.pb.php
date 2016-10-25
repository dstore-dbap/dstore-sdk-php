<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCamPeriodStatusValues_Ad.proto

namespace Dstore\Engine\Om_GetCamPeriodStatusValues_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCamPeriodStatusValues_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $period_status_description = null;
    private $period_status_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getPeriodStatusDescription()
    {
        return $this->period_status_description;
    }

    public function setPeriodStatusDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->period_status_description = $var;
    }

    public function getPeriodStatusId()
    {
        return $this->period_status_id;
    }

    public function setPeriodStatusId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->period_status_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9d050a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657443616d506572696f6453746174757356616c7565735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4765744361" .
    "6d506572696f6453746174757356616c7565735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f220c0a0a506172616d6574" .
    "65727322df020a08526573706f6e736512480a106d6574615f696e666f72" .
    "6d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d" .
    "657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e" .
    "122f0a076d65737361676518032003280b321e2e6473746f72652e656e67" .
    "696e652e6d6573736167652e4d65737361676512470a03726f7718042003" .
    "280b323a2e6473746f72652e656e67696e652e6f6d5f47657443616d5065" .
    "72696f6453746174757356616c7565735f41642e526573706f6e73652e52" .
    "6f771a8e010a03526f77120f0a06726f775f696418904e20012805123e0a" .
    "19706572696f645f7374617475735f6465736372697074696f6e18914e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512360a10706572696f645f7374617475735f696418924e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565425f0a" .
    "1b696f2e6473746f72652e656e67696e652e70726f636564757265735a40" .
    "676f73646b2e6473746f72652e64652f656e67696e652f70726f63656475" .
    "7265732f6f6d5f47657443616d506572696f6453746174757356616c7565" .
    "735f4164620670726f746f33"
));
