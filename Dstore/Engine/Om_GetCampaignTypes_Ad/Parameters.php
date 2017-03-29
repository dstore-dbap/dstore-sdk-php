<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignTypes_Ad.proto

namespace Dstore\Engine\Om_GetCampaignTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCampaignTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue campaign_type_id = 1;</code>
     */
    private $campaign_type_id = null;
    /**
     * <code>bool campaign_type_id_null = 1001;</code>
     */
    private $campaign_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCampaignTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue campaign_type_id = 1;</code>
     */
    public function getCampaignTypeId()
    {
        return $this->campaign_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue campaign_type_id = 1;</code>
     */
    public function setCampaignTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->campaign_type_id = $var;
    }

    /**
     * <code>bool campaign_type_id_null = 1001;</code>
     */
    public function getCampaignTypeIdNull()
    {
        return $this->campaign_type_id_null;
    }

    /**
     * <code>bool campaign_type_id_null = 1001;</code>
     */
    public function setCampaignTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->campaign_type_id_null = $var;
    }

}
