<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetUserGroups_Ad.proto

namespace Dstore\Engine\Mi_GetUserGroups_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetUserGroups_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue user_group_id = 1;</code>
     */
    private $user_group_id = null;
    /**
     * <code>bool user_group_id_null = 1001;</code>
     */
    private $user_group_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_assigned_users = 2;</code>
     */
    private $get_assigned_users = null;
    /**
     * <code>bool get_assigned_users_null = 1002;</code>
     */
    private $get_assigned_users_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetUserGroupsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue user_group_id = 1;</code>
     */
    public function getUserGroupId()
    {
        return $this->user_group_id;
    }

    /**
     * <code>.dstore.values.IntegerValue user_group_id = 1;</code>
     */
    public function setUserGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_group_id = $var;
    }

    /**
     * <code>bool user_group_id_null = 1001;</code>
     */
    public function getUserGroupIdNull()
    {
        return $this->user_group_id_null;
    }

    /**
     * <code>bool user_group_id_null = 1001;</code>
     */
    public function setUserGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_group_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_assigned_users = 2;</code>
     */
    public function getGetAssignedUsers()
    {
        return $this->get_assigned_users;
    }

    /**
     * <code>.dstore.values.BooleanValue get_assigned_users = 2;</code>
     */
    public function setGetAssignedUsers(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_assigned_users = $var;
    }

    /**
     * <code>bool get_assigned_users_null = 1002;</code>
     */
    public function getGetAssignedUsersNull()
    {
        return $this->get_assigned_users_null;
    }

    /**
     * <code>bool get_assigned_users_null = 1002;</code>
     */
    public function setGetAssignedUsersNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_assigned_users_null = $var;
    }

}
