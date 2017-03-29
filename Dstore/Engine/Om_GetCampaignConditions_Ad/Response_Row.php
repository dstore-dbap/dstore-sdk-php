<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignConditions_Ad.proto

namespace Dstore\Engine\Om_GetCampaignConditions_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCampaignConditions_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID der Kriteriumsart der Bedingung (wie z.B. "erweiterte Artikel-Bedingung")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue criteria_type_id = 10001;</code>
     */
    private $criteria_type_id = null;
    /**
     * <pre>
     * Bezeichnung der Kriteriumsart
     * </pre>
     *
     * <code>.dstore.values.StringValue criteria_type = 10002;</code>
     */
    private $criteria_type = null;
    /**
     * <pre>
     * Die ID einer Bedingung zur "&#64;CampaignID".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_id = 10003;</code>
     */
    private $condition_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCampaignConditionsAd::initOnce();
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
     * ID der Kriteriumsart der Bedingung (wie z.B. "erweiterte Artikel-Bedingung")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue criteria_type_id = 10001;</code>
     */
    public function getCriteriaTypeId()
    {
        return $this->criteria_type_id;
    }

    /**
     * <pre>
     * ID der Kriteriumsart der Bedingung (wie z.B. "erweiterte Artikel-Bedingung")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue criteria_type_id = 10001;</code>
     */
    public function setCriteriaTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->criteria_type_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Kriteriumsart
     * </pre>
     *
     * <code>.dstore.values.StringValue criteria_type = 10002;</code>
     */
    public function getCriteriaType()
    {
        return $this->criteria_type;
    }

    /**
     * <pre>
     * Bezeichnung der Kriteriumsart
     * </pre>
     *
     * <code>.dstore.values.StringValue criteria_type = 10002;</code>
     */
    public function setCriteriaType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->criteria_type = $var;
    }

    /**
     * <pre>
     * Die ID einer Bedingung zur "&#64;CampaignID".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_id = 10003;</code>
     */
    public function getConditionId()
    {
        return $this->condition_id;
    }

    /**
     * <pre>
     * Die ID einer Bedingung zur "&#64;CampaignID".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_id = 10003;</code>
     */
    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_id = $var;
    }

}

