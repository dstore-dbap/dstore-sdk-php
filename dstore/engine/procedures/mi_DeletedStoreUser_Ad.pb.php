<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_DeletedStoreUser_Ad.proto

namespace Dstore\Engine\Mi_DeletedStoreUser_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_name = null;
    private $user_name_null = false;
    private $invalidate_user_in_user_info = null;
    private $invalidate_user_in_user_info_null = false;
    private $only_delete_user_from_this_engine = null;
    private $only_delete_user_from_this_engine_null = false;
    private $drop_login_when_d_b_is_not_available = null;
    private $drop_login_when_d_b_is_not_available_null = false;
    private $kill_processes_for_user_first = null;
    private $kill_processes_for_user_first_null = false;

    public function getUserName()
    {
        return $this->user_name;
    }

    public function setUserName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->user_name = $var;
    }

    public function getUserNameNull()
    {
        return $this->user_name_null;
    }

    public function setUserNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_name_null = $var;
    }

    public function getInvalidateUserInUserInfo()
    {
        return $this->invalidate_user_in_user_info;
    }

    public function setInvalidateUserInUserInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->invalidate_user_in_user_info = $var;
    }

    public function getInvalidateUserInUserInfoNull()
    {
        return $this->invalidate_user_in_user_info_null;
    }

    public function setInvalidateUserInUserInfoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->invalidate_user_in_user_info_null = $var;
    }

    public function getOnlyDeleteUserFromThisEngine()
    {
        return $this->only_delete_user_from_this_engine;
    }

    public function setOnlyDeleteUserFromThisEngine(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->only_delete_user_from_this_engine = $var;
    }

    public function getOnlyDeleteUserFromThisEngineNull()
    {
        return $this->only_delete_user_from_this_engine_null;
    }

    public function setOnlyDeleteUserFromThisEngineNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_delete_user_from_this_engine_null = $var;
    }

    public function getDropLoginWhenDBIsNotAvailable()
    {
        return $this->drop_login_when_d_b_is_not_available;
    }

    public function setDropLoginWhenDBIsNotAvailable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->drop_login_when_d_b_is_not_available = $var;
    }

    public function getDropLoginWhenDBIsNotAvailableNull()
    {
        return $this->drop_login_when_d_b_is_not_available_null;
    }

    public function setDropLoginWhenDBIsNotAvailableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->drop_login_when_d_b_is_not_available_null = $var;
    }

    public function getKillProcessesForUserFirst()
    {
        return $this->kill_processes_for_user_first;
    }

    public function setKillProcessesForUserFirst(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->kill_processes_for_user_first = $var;
    }

    public function getKillProcessesForUserFirstNull()
    {
        return $this->kill_processes_for_user_first_null;
    }

    public function setKillProcessesForUserFirstNull($var)
    {
        GPBUtil::checkBool($var);
        $this->kill_processes_for_user_first_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_DeletedStoreUser_Ad\Response_Row::class);
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
    "0aa5080a356473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f44656c6574656453746f7265557365725f41642e70726f746f1224" .
    "6473746f72652e656e67696e652e6d695f44656c6574656453746f726555" .
    "7365725f41641a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22ac040a0a506172616d6574657273122d0a09757365725f6e616d" .
    "6518012001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512170a0e757365725f6e616d655f6e756c6c18e90720012808" .
    "12410a1c696e76616c69646174655f757365725f696e5f757365725f696e" .
    "666f18022001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c7565122a0a21696e76616c69646174655f757365725f696e5f" .
    "757365725f696e666f5f6e756c6c18ea072001280812460a216f6e6c795f" .
    "64656c6574655f757365725f66726f6d5f746869735f656e67696e651803" .
    "2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e5661" .
    "6c7565122f0a266f6e6c795f64656c6574655f757365725f66726f6d5f74" .
    "6869735f656e67696e655f6e756c6c18eb072001280812490a2464726f70" .
    "5f6c6f67696e5f7768656e5f645f625f69735f6e6f745f617661696c6162" .
    "6c6518042001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c756512320a2964726f705f6c6f67696e5f7768656e5f645f62" .
    "5f69735f6e6f745f617661696c61626c655f6e756c6c18ec072001280812" .
    "420a1d6b696c6c5f70726f6365737365735f666f725f757365725f666972" .
    "737418052001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c7565122b0a226b696c6c5f70726f6365737365735f666f725f" .
    "757365725f66697273745f6e756c6c18ed072001280822de010a08526573" .
    "706f6e736512480a106d6574615f696e666f726d6174696f6e1802200328" .
    "0b322e2e6473746f72652e656e67696e652e6d657461696e666f726d6174" .
    "696f6e2e4d657461496e666f726d6174696f6e122f0a076d657373616765" .
    "18032003280b321e2e6473746f72652e656e67696e652e6d657373616765" .
    "2e4d657373616765123f0a03726f7718042003280b32322e6473746f7265" .
    "2e656e67696e652e6d695f44656c6574656453746f7265557365725f4164" .
    "2e526573706f6e73652e526f771a160a03526f77120f0a06726f775f6964" .
    "18904e2001280542570a1b696f2e6473746f72652e656e67696e652e7072" .
    "6f636564757265735a38676f73646b2e6473746f72652e64652f656e6769" .
    "6e652f70726f636564757265732f6d695f44656c6574656453746f726555" .
    "7365725f4164620670726f746f33"
));
