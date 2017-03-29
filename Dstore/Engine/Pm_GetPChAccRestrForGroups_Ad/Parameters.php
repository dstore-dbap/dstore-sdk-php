<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPChAccRestrForGroups_Ad.proto

namespace Dstore\Engine\Pm_GetPChAccRestrForGroups_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPChAccRestrForGroups_Ad.Parameters</code>
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
     * <code>.dstore.values.IntegerValue person_characteristic_id = 2;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <code>bool person_characteristic_id_null = 1002;</code>
     */
    private $person_characteristic_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPChAccRestrForGroupsAd::initOnce();
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
     * <code>.dstore.values.IntegerValue person_characteristic_id = 2;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 2;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <code>bool person_characteristic_id_null = 1002;</code>
     */
    public function getPersonCharacteristicIdNull()
    {
        return $this->person_characteristic_id_null;
    }

    /**
     * <code>bool person_characteristic_id_null = 1002;</code>
     */
    public function setPersonCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_characteristic_id_null = $var;
    }

}

