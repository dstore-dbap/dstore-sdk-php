<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetUserGroups_Ad.proto

namespace Dstore\Engine\Mi_GetUserGroups_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_group_id = null;
    private $user_group_id_null = false;
    private $get_assigned_users = null;
    private $get_assigned_users_null = false;

    public function getUserGroupId()
    {
        return $this->user_group_id;
    }

    public function setUserGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_group_id = $var;
    }

    public function getUserGroupIdNull()
    {
        return $this->user_group_id_null;
    }

    public function setUserGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_group_id_null = $var;
    }

    public function getGetAssignedUsers()
    {
        return $this->get_assigned_users;
    }

    public function setGetAssignedUsers(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_assigned_users = $var;
    }

    public function getGetAssignedUsersNull()
    {
        return $this->get_assigned_users_null;
    }

    public function setGetAssignedUsersNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_assigned_users_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetUserGroups_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $group_name = null;
    private $group_description = null;
    private $user_group_id = null;
    private $user_name = null;
    private $user_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getGroupName()
    {
        return $this->group_name;
    }

    public function setGroupName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->group_name = $var;
    }

    public function getGroupDescription()
    {
        return $this->group_description;
    }

    public function setGroupDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->group_description = $var;
    }

    public function getUserGroupId()
    {
        return $this->user_group_id;
    }

    public function setUserGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_group_id = $var;
    }

    public function getUserName()
    {
        return $this->user_name;
    }

    public function setUserName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->user_name = $var;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa5070a326473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4765745573657247726f7570735f41642e70726f746f1221647374" .
    "6f72652e656e67696e652e6d695f4765745573657247726f7570735f4164" .
    "1a136473746f72652f76616c7565732e70726f746f1a1b6473746f72652f" .
    "656e67696e652f6d6573736167652e70726f746f1a236473746f72652f65" .
    "6e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22b801" .
    "0a0a506172616d657465727312320a0d757365725f67726f75705f696418" .
    "012001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565121b0a12757365725f67726f75705f69645f6e756c6c18e90720" .
    "01280812370a126765745f61737369676e65645f75736572731802200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "12200a176765745f61737369676e65645f75736572735f6e756c6c18ea07" .
    "2001280822db030a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d657373616765123c0a03726f77180420" .
    "03280b322f2e6473746f72652e656e67696e652e6d695f47657455736572" .
    "47726f7570735f41642e526573706f6e73652e526f771a95020a03526f77" .
    "120f0a06726f775f696418904e20012805122f0a0a67726f75705f6e616d" .
    "6518914e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512360a1167726f75705f6465736372697074696f6e18924e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "756512330a0d757365725f67726f75705f696418934e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565122f0a0975" .
    "7365725f6e616d6518a39c012001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122e0a07757365725f696418a49c0120" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756542540a1b696f2e6473746f72652e656e67696e652e70726f63656475" .
    "7265735a35676f73646b2e6473746f72652e64652f656e67696e652f7072" .
    "6f636564757265732f6d695f4765745573657247726f7570735f41646206" .
    "70726f746f33"
));

