<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyCampaignCategories_Ad.proto

namespace Dstore\Engine\Om_ModifyCampaignCategories_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyCampaignCategories_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue campaign_category_id = 1;</code>
     */
    private $campaign_category_id = null;
    /**
     * <code>bool campaign_category_id_null = 1001;</code>
     */
    private $campaign_category_id_null = false;
    /**
     * <code>.dstore.values.StringValue category_description = 2;</code>
     */
    private $category_description = null;
    /**
     * <code>bool category_description_null = 1002;</code>
     */
    private $category_description_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete = 3;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1003;</code>
     */
    private $delete_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyCampaignCategoriesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue campaign_category_id = 1;</code>
     */
    public function getCampaignCategoryId()
    {
        return $this->campaign_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue campaign_category_id = 1;</code>
     */
    public function setCampaignCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->campaign_category_id = $var;
    }

    /**
     * <code>bool campaign_category_id_null = 1001;</code>
     */
    public function getCampaignCategoryIdNull()
    {
        return $this->campaign_category_id_null;
    }

    /**
     * <code>bool campaign_category_id_null = 1001;</code>
     */
    public function setCampaignCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->campaign_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue category_description = 2;</code>
     */
    public function getCategoryDescription()
    {
        return $this->category_description;
    }

    /**
     * <code>.dstore.values.StringValue category_description = 2;</code>
     */
    public function setCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->category_description = $var;
    }

    /**
     * <code>bool category_description_null = 1002;</code>
     */
    public function getCategoryDescriptionNull()
    {
        return $this->category_description_null;
    }

    /**
     * <code>bool category_description_null = 1002;</code>
     */
    public function setCategoryDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->category_description_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 3;</code>
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 3;</code>
     */
    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete = $var;
    }

    /**
     * <code>bool delete_null = 1003;</code>
     */
    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    /**
     * <code>bool delete_null = 1003;</code>
     */
    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

}

