<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetLockDependencies_Ad.proto

namespace Dstore\Engine\Mi_GetLockDependencies_Ad;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetLockDependencies_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $table_name = null;
    private $blocking_process_id = null;
    private $command = null;
    private $server_process_id = null;
    private $database_name = null;
    private $lock_type = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTableName()
    {
        return $this->table_name;
    }

    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->table_name = $var;
    }

    public function getBlockingProcessId()
    {
        return $this->blocking_process_id;
    }

    public function setBlockingProcessId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->blocking_process_id = $var;
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

    public function getServerProcessId()
    {
        return $this->server_process_id;
    }

    public function setServerProcessId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->server_process_id = $var;
    }

    public function getDatabaseName()
    {
        return $this->database_name;
    }

    public function setDatabaseName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->database_name = $var;
    }

    public function getLockType()
    {
        return $this->lock_type;
    }

    public function setLockType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->lock_type = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ac8060a386473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4765744c6f636b446570656e64656e636965735f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e6d695f4765744c6f636b446570" .
    "656e64656e636965735f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f220c0a0a506172616d65746572732299040a085265" .
    "73706f6e736512480a106d6574615f696e666f726d6174696f6e18022003" .
    "280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d61" .
    "74696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167" .
    "6518032003280b321e2e6473746f72652e656e67696e652e6d6573736167" .
    "652e4d65737361676512420a03726f7718042003280b32352e6473746f72" .
    "652e656e67696e652e6d695f4765744c6f636b446570656e64656e636965" .
    "735f41642e526573706f6e73652e526f771acd020a03526f77120f0a0672" .
    "6f775f696418904e20012805122f0a0a7461626c655f6e616d6518914e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512390a13626c6f636b696e675f70726f636573735f696418924e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "122c0a07636f6d6d616e6418934e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512370a117365727665725f70726f" .
    "636573735f696418944e2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512320a0d64617461626173655f6e616d65" .
    "18954e2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c7565122e0a096c6f636b5f7479706518964e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565425a0a1b696f2e" .
    "6473746f72652e656e67696e652e70726f636564757265735a3b676f7364" .
    "6b2e6473746f72652e64652f656e67696e652f70726f636564757265732f" .
    "6d695f4765744c6f636b446570656e64656e636965735f4164620670726f" .
    "746f33"
));

