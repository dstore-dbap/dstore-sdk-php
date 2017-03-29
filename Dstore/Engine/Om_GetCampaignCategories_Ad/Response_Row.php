<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignCategories_Ad.proto

namespace Dstore\Engine\Om_GetCampaignCategories_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCampaignCategories_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Die Bezeichnung der Kategorie "CampaignCategoryID"
     * </pre>
     *
     * <code>.dstore.values.StringValue category_description = 10001;</code>
     */
    private $category_description = null;
    /**
     * <pre>
     * Die ID einer Kategorie für Verkaufsaktionen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue campaign_category_id = 10002;</code>
     */
    private $campaign_category_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCampaignCategoriesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function getRowId()
    {
        return $this->row_id;
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    /**
     * <pre>
     * Die Bezeichnung der Kategorie "CampaignCategoryID"
     * </pre>
     *
     * <code>.dstore.values.StringValue category_description = 10001;</code>
     */
    public function getCategoryDescription()
    {
        return $this->category_description;
    }

    /**
     * <pre>
     * Die Bezeichnung der Kategorie "CampaignCategoryID"
     * </pre>
     *
     * <code>.dstore.values.StringValue category_description = 10001;</code>
     */
    public function setCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->category_description = $var;
    }

    /**
     * <pre>
     * Die ID einer Kategorie für Verkaufsaktionen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue campaign_category_id = 10002;</code>
     */
    public function getCampaignCategoryId()
    {
        return $this->campaign_category_id;
    }

    /**
     * <pre>
     * Die ID einer Kategorie für Verkaufsaktionen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue campaign_category_id = 10002;</code>
     */
    public function setCampaignCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->campaign_category_id = $var;
    }

}
