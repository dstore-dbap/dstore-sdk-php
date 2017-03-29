<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyLockedNodeCharacs_Ad.proto

namespace Dstore\Engine\Im_ModifyLockedNodeCharacs_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_ModifyLockedNodeCharacs_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue user_id = 1;</code>
     */
    private $user_id = null;
    /**
     * <code>bool user_id_null = 1001;</code>
     */
    private $user_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 2;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <code>bool node_characteristic_id_null = 1002;</code>
     */
    private $node_characteristic_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue lock_status = 3;</code>
     */
    private $lock_status = null;
    /**
     * <code>bool lock_status_null = 1003;</code>
     */
    private $lock_status_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImModifyLockedNodeCharacsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue user_id = 1;</code>
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * <code>.dstore.values.IntegerValue user_id = 1;</code>
     */
    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_id = $var;
    }

    /**
     * <code>bool user_id_null = 1001;</code>
     */
    public function getUserIdNull()
    {
        return $this->user_id_null;
    }

    /**
     * <code>bool user_id_null = 1001;</code>
     */
    public function setUserIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 2;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 2;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <code>bool node_characteristic_id_null = 1002;</code>
     */
    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    /**
     * <code>bool node_characteristic_id_null = 1002;</code>
     */
    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue lock_status = 3;</code>
     */
    public function getLockStatus()
    {
        return $this->lock_status;
    }

    /**
     * <code>.dstore.values.IntegerValue lock_status = 3;</code>
     */
    public function setLockStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->lock_status = $var;
    }

    /**
     * <code>bool lock_status_null = 1003;</code>
     */
    public function getLockStatusNull()
    {
        return $this->lock_status_null;
    }

    /**
     * <code>bool lock_status_null = 1003;</code>
     */
    public function setLockStatusNull($var)
    {
        GPBUtil::checkBool($var);
        $this->lock_status_null = $var;
    }

}

