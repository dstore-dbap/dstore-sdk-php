<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_ModifyCharacsForForums_Ad.proto

namespace Dstore\Engine\Fo_ModifyCharacsForForums_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_ModifyCharacsForForums_Ad.Parameters</code>
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
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 2;</code>
     */
    private $posting_characteristic_id = null;
    /**
     * <code>bool posting_characteristic_id_null = 1002;</code>
     */
    private $posting_characteristic_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_relation = 3;</code>
     */
    private $delete_relation = null;
    /**
     * <code>bool delete_relation_null = 1003;</code>
     */
    private $delete_relation_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoModifyCharacsForForumsAd::initOnce();
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
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 2;</code>
     */
    public function getPostingCharacteristicId()
    {
        return $this->posting_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 2;</code>
     */
    public function setPostingCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->posting_characteristic_id = $var;
    }

    /**
     * <code>bool posting_characteristic_id_null = 1002;</code>
     */
    public function getPostingCharacteristicIdNull()
    {
        return $this->posting_characteristic_id_null;
    }

    /**
     * <code>bool posting_characteristic_id_null = 1002;</code>
     */
    public function setPostingCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_relation = 3;</code>
     */
    public function getDeleteRelation()
    {
        return $this->delete_relation;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_relation = 3;</code>
     */
    public function setDeleteRelation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_relation = $var;
    }

    /**
     * <code>bool delete_relation_null = 1003;</code>
     */
    public function getDeleteRelationNull()
    {
        return $this->delete_relation_null;
    }

    /**
     * <code>bool delete_relation_null = 1003;</code>
     */
    public function setDeleteRelationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_relation_null = $var;
    }

}
