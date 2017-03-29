<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignPeriodDefs_Ad.proto

namespace Dstore\Engine\Om_GetCampaignPeriodDefs_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCampaignPeriodDefs_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue campaign_id = 1;</code>
     */
    private $campaign_id = null;
    /**
     * <code>bool campaign_id_null = 1001;</code>
     */
    private $campaign_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCampaignPeriodDefsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue campaign_id = 1;</code>
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * <code>.dstore.values.IntegerValue campaign_id = 1;</code>
     */
    public function setCampaignId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->campaign_id = $var;
    }

    /**
     * <code>bool campaign_id_null = 1001;</code>
     */
    public function getCampaignIdNull()
    {
        return $this->campaign_id_null;
    }

    /**
     * <code>bool campaign_id_null = 1001;</code>
     */
    public function setCampaignIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->campaign_id_null = $var;
    }

}

