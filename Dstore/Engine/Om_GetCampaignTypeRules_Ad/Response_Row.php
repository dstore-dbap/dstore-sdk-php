<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignTypeRules_Ad.proto

namespace Dstore\Engine\Om_GetCampaignTypeRules_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCampaignTypeRules_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Name des Benutzers "UserID"
     * </pre>
     *
     * <code>.dstore.values.StringValue user_name = 10001;</code>
     */
    private $user_name = null;
    /**
     * <pre>
     * ID eines "Typs" (von Verkaufs-Aktionen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue campaign_type_id = 10002;</code>
     */
    private $campaign_type_id = null;
    /**
     * <pre>
     * ID eines "dStore"-Benutzers (der in "UserInfo" registriert ist). Dieser kann je nach "Allowed" Verkaufs-Aktionen des Typs "CampaignTypeID" nutzen oder nicht.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10003;</code>
     */
    private $user_id = null;
    /**
     * <pre>
     * Gibt an, ob der Benutzer "UserID" Verkaufs-Aktionen des Typs "CampaignTypeID" nutzen kann ("1") oder nicht ("0")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue allowed = 10004;</code>
     */
    private $allowed = null;
    /**
     * <pre>
     * Bezeichnung des Typs "CampaignTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue campaign_type = 10005;</code>
     */
    private $campaign_type = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCampaignTypeRulesAd::initOnce();
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
     * Name des Benutzers "UserID"
     * </pre>
     *
     * <code>.dstore.values.StringValue user_name = 10001;</code>
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * <pre>
     * Name des Benutzers "UserID"
     * </pre>
     *
     * <code>.dstore.values.StringValue user_name = 10001;</code>
     */
    public function setUserName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->user_name = $var;
    }

    /**
     * <pre>
     * ID eines "Typs" (von Verkaufs-Aktionen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue campaign_type_id = 10002;</code>
     */
    public function getCampaignTypeId()
    {
        return $this->campaign_type_id;
    }

    /**
     * <pre>
     * ID eines "Typs" (von Verkaufs-Aktionen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue campaign_type_id = 10002;</code>
     */
    public function setCampaignTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->campaign_type_id = $var;
    }

    /**
     * <pre>
     * ID eines "dStore"-Benutzers (der in "UserInfo" registriert ist). Dieser kann je nach "Allowed" Verkaufs-Aktionen des Typs "CampaignTypeID" nutzen oder nicht.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10003;</code>
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * <pre>
     * ID eines "dStore"-Benutzers (der in "UserInfo" registriert ist). Dieser kann je nach "Allowed" Verkaufs-Aktionen des Typs "CampaignTypeID" nutzen oder nicht.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10003;</code>
     */
    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_id = $var;
    }

    /**
     * <pre>
     * Gibt an, ob der Benutzer "UserID" Verkaufs-Aktionen des Typs "CampaignTypeID" nutzen kann ("1") oder nicht ("0")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue allowed = 10004;</code>
     */
    public function getAllowed()
    {
        return $this->allowed;
    }

    /**
     * <pre>
     * Gibt an, ob der Benutzer "UserID" Verkaufs-Aktionen des Typs "CampaignTypeID" nutzen kann ("1") oder nicht ("0")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue allowed = 10004;</code>
     */
    public function setAllowed(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->allowed = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Typs "CampaignTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue campaign_type = 10005;</code>
     */
    public function getCampaignType()
    {
        return $this->campaign_type;
    }

    /**
     * <pre>
     * Bezeichnung des Typs "CampaignTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue campaign_type = 10005;</code>
     */
    public function setCampaignType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->campaign_type = $var;
    }

}

