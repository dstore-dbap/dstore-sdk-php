<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/ac_ModifyCommands_Ad.proto

namespace Dstore\Engine\Ac_ModifyCommands_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $command_id = null;
    private $command_id_null = false;
    private $command = null;
    private $command_null = false;
    private $command_description = null;
    private $command_description_null = false;
    private $delete_command = null;
    private $delete_command_null = false;

    public function getCommandId()
    {
        return $this->command_id;
    }

    public function setCommandId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->command_id = $var;
    }

    public function getCommandIdNull()
    {
        return $this->command_id_null;
    }

    public function setCommandIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->command_id_null = $var;
    }

    public function getCommand()
    {
        return $this->command;
    }

    public function setCommand(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->command = $var;
    }

    public function getCommandNull()
    {
        return $this->command_null;
    }

    public function setCommandNull($var)
    {
        GPBUtil::checkBool($var);
        $this->command_null = $var;
    }

    public function getCommandDescription()
    {
        return $this->command_description;
    }

    public function setCommandDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->command_description = $var;
    }

    public function getCommandDescriptionNull()
    {
        return $this->command_description_null;
    }

    public function setCommandDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->command_description_null = $var;
    }

    public function getDeleteCommand()
    {
        return $this->delete_command;
    }

    public function setDeleteCommand(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_command = $var;
    }

    public function getDeleteCommandNull()
    {
        return $this->delete_command_null;
    }

    public function setDeleteCommandNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_command_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Ac_ModifyCommands_Ad\Response_Row::class);
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
    "0abb060a336473746f72652f656e67696e652f70726f636564757265732f" .
    "61635f4d6f64696679436f6d6d616e64735f41642e70726f746f12226473" .
    "746f72652e656e67696e652e61635f4d6f64696679436f6d6d616e64735f" .
    "41641a136473746f72652f76616c7565732e70726f746f1a1b6473746f72" .
    "652f656e67696e652f6d6573736167652e70726f746f1a236473746f7265" .
    "2f656e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22" .
    "ca020a0a506172616d6574657273122f0a0a636f6d6d616e645f69641801" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512180a0f636f6d6d616e645f69645f6e756c6c18e9072001280812" .
    "2b0a07636f6d6d616e6418022001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512150a0c636f6d6d616e645f6e756c6c" .
    "18ea072001280812370a13636f6d6d616e645f6465736372697074696f6e" .
    "18032001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512210a18636f6d6d616e645f6465736372697074696f6e5f6e75" .
    "6c6c18eb072001280812330a0e64656c6574655f636f6d6d616e64180420" .
    "01280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c" .
    "7565121c0a1364656c6574655f636f6d6d616e645f6e756c6c18ec072001" .
    "280822dc010a08526573706f6e736512480a106d6574615f696e666f726d" .
    "6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d65" .
    "7461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e12" .
    "2f0a076d65737361676518032003280b321e2e6473746f72652e656e6769" .
    "6e652e6d6573736167652e4d657373616765123d0a03726f771804200328" .
    "0b32302e6473746f72652e656e67696e652e61635f4d6f64696679436f6d" .
    "6d616e64735f41642e526573706f6e73652e526f771a160a03526f77120f" .
    "0a06726f775f696418904e2001280542550a1b696f2e6473746f72652e65" .
    "6e67696e652e70726f636564757265735a36676f73646b2e6473746f7265" .
    "2e64652f656e67696e652f70726f636564757265732f61635f4d6f646966" .
    "79436f6d6d616e64735f4164620670726f746f33"
));
