<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_ModifyMemberSettings_Ad.proto

namespace Dstore\Engine\Co_ModifyMemberSettings_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_ModifyMemberSettings_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue community_id = 1;</code>
     */
    private $community_id = null;
    /**
     * <code>bool community_id_null = 1001;</code>
     */
    private $community_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue community_member_id = 2;</code>
     */
    private $community_member_id = null;
    /**
     * <code>bool community_member_id_null = 1002;</code>
     */
    private $community_member_id_null = false;
    /**
     * <code>.dstore.values.StringValue key_variable = 3;</code>
     */
    private $key_variable = null;
    /**
     * <code>bool key_variable_null = 1003;</code>
     */
    private $key_variable_null = false;
    /**
     * <code>.dstore.values.StringValue value = 4;</code>
     */
    private $value = null;
    /**
     * <code>bool value_null = 1004;</code>
     */
    private $value_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoModifyMemberSettingsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue community_id = 1;</code>
     */
    public function getCommunityId()
    {
        return $this->community_id;
    }

    /**
     * <code>.dstore.values.IntegerValue community_id = 1;</code>
     */
    public function setCommunityId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_id = $var;
    }

    /**
     * <code>bool community_id_null = 1001;</code>
     */
    public function getCommunityIdNull()
    {
        return $this->community_id_null;
    }

    /**
     * <code>bool community_id_null = 1001;</code>
     */
    public function setCommunityIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue community_member_id = 2;</code>
     */
    public function getCommunityMemberId()
    {
        return $this->community_member_id;
    }

    /**
     * <code>.dstore.values.IntegerValue community_member_id = 2;</code>
     */
    public function setCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_member_id = $var;
    }

    /**
     * <code>bool community_member_id_null = 1002;</code>
     */
    public function getCommunityMemberIdNull()
    {
        return $this->community_member_id_null;
    }

    /**
     * <code>bool community_member_id_null = 1002;</code>
     */
    public function setCommunityMemberIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_member_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue key_variable = 3;</code>
     */
    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    /**
     * <code>.dstore.values.StringValue key_variable = 3;</code>
     */
    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->key_variable = $var;
    }

    /**
     * <code>bool key_variable_null = 1003;</code>
     */
    public function getKeyVariableNull()
    {
        return $this->key_variable_null;
    }

    /**
     * <code>bool key_variable_null = 1003;</code>
     */
    public function setKeyVariableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->key_variable_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue value = 4;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>.dstore.values.StringValue value = 4;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <code>bool value_null = 1004;</code>
     */
    public function getValueNull()
    {
        return $this->value_null;
    }

    /**
     * <code>bool value_null = 1004;</code>
     */
    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

}

