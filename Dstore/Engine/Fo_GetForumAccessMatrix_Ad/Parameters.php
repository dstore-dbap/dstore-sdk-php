<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetForumAccessMatrix_Ad.proto

namespace Dstore\Engine\Fo_GetForumAccessMatrix_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_GetForumAccessMatrix_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue forum_id = 1;</code>
     */
    private $forum_id = null;
    /**
     * <code>bool forum_id_null = 1001;</code>
     */
    private $forum_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue check_person_access = 2;</code>
     */
    private $check_person_access = null;
    /**
     * <code>bool check_person_access_null = 1002;</code>
     */
    private $check_person_access_null = false;
    /**
     * <code>.dstore.values.IntegerValue group_or_person_id = 3;</code>
     */
    private $group_or_person_id = null;
    /**
     * <code>bool group_or_person_id_null = 1003;</code>
     */
    private $group_or_person_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoGetForumAccessMatrixAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue forum_id = 1;</code>
     */
    public function getForumId()
    {
        return $this->forum_id;
    }

    /**
     * <code>.dstore.values.IntegerValue forum_id = 1;</code>
     */
    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->forum_id = $var;
    }

    /**
     * <code>bool forum_id_null = 1001;</code>
     */
    public function getForumIdNull()
    {
        return $this->forum_id_null;
    }

    /**
     * <code>bool forum_id_null = 1001;</code>
     */
    public function setForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue check_person_access = 2;</code>
     */
    public function getCheckPersonAccess()
    {
        return $this->check_person_access;
    }

    /**
     * <code>.dstore.values.BooleanValue check_person_access = 2;</code>
     */
    public function setCheckPersonAccess(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->check_person_access = $var;
    }

    /**
     * <code>bool check_person_access_null = 1002;</code>
     */
    public function getCheckPersonAccessNull()
    {
        return $this->check_person_access_null;
    }

    /**
     * <code>bool check_person_access_null = 1002;</code>
     */
    public function setCheckPersonAccessNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_person_access_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue group_or_person_id = 3;</code>
     */
    public function getGroupOrPersonId()
    {
        return $this->group_or_person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue group_or_person_id = 3;</code>
     */
    public function setGroupOrPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->group_or_person_id = $var;
    }

    /**
     * <code>bool group_or_person_id_null = 1003;</code>
     */
    public function getGroupOrPersonIdNull()
    {
        return $this->group_or_person_id_null;
    }

    /**
     * <code>bool group_or_person_id_null = 1003;</code>
     */
    public function setGroupOrPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->group_or_person_id_null = $var;
    }

}

