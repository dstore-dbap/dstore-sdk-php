<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTRITriggerWorkflow_Ad.proto

namespace Dstore\Engine\Mi_GetTRITriggerWorkflow_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $trigger_id = null;
    private $trigger_id_null = false;

    public function getTriggerId()
    {
        return $this->trigger_id;
    }

    public function setTriggerId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->trigger_id = $var;
    }

    public function getTriggerIdNull()
    {
        return $this->trigger_id_null;
    }

    public function setTriggerIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->trigger_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetTRITriggerWorkflow_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $iteration_list = null;
    private $work_step = null;
    private $description = null;
    private $work_step_no = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getIterationList()
    {
        return $this->iteration_list;
    }

    public function setIterationList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->iteration_list = $var;
    }

    public function getWorkStep()
    {
        return $this->work_step;
    }

    public function setWorkStep(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->work_step = $var;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->description = $var;
    }

    public function getWorkStepNo()
    {
        return $this->work_step_no;
    }

    public function setWorkStepNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->work_step_no = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aaf060a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f47657454524954726967676572576f726b666c6f775f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e6d695f4765745452495472" .
    "6967676572576f726b666c6f775f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22570a0a506172616d6574657273122f0a" .
    "0a747269676765725f696418012001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512180a0f747269676765725f6964" .
    "5f6e756c6c18e9072001280822af030a08526573706f6e736512480a106d" .
    "6574615f696e666f726d6174696f6e18022003280b322e2e6473746f7265" .
    "2e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e" .
    "666f726d6174696f6e122f0a076d65737361676518032003280b321e2e64" .
    "73746f72652e656e67696e652e6d6573736167652e4d6573736167651244" .
    "0a03726f7718042003280b32372e6473746f72652e656e67696e652e6d69" .
    "5f47657454524954726967676572576f726b666c6f775f41642e52657370" .
    "6f6e73652e526f771ae1010a03526f77120f0a06726f775f696418904e20" .
    "01280512330a0e697465726174696f6e5f6c69737418914e2001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c7565122e0a09" .
    "776f726b5f7374657018924e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512300a0b6465736372697074696f6e18" .
    "934e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512320a0c776f726b5f737465705f6e6f18944e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c7565425c0a1b" .
    "696f2e6473746f72652e656e67696e652e70726f636564757265735a3d67" .
    "6f73646b2e6473746f72652e64652f656e67696e652f70726f6365647572" .
    "65732f6d695f47657454524954726967676572576f726b666c6f775f4164" .
    "620670726f746f33"
));
