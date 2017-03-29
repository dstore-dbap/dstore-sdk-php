<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetCommunityForums_Ad.proto

namespace Dstore\Engine\Co_GetCommunityForums_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_GetCommunityForums_Ad.Parameters</code>
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

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoGetCommunityForumsAd::initOnce();
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

}

