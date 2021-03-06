<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetForumStatistics_Ad.proto

namespace Dstore\Engine\Fo_GetForumStatistics_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_GetForumStatistics_Ad.Parameters</code>
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
     * <code>.dstore.values.StringValue list_of_statistic_information_ids = 2;</code>
     */
    private $list_of_statistic_information_ids = null;
    /**
     * <code>bool list_of_statistic_information_ids_null = 1002;</code>
     */
    private $list_of_statistic_information_ids_null = false;
    /**
     * <code>.dstore.values.TimestampValue from_date = 3;</code>
     */
    private $from_date = null;
    /**
     * <code>bool from_date_null = 1003;</code>
     */
    private $from_date_null = false;
    /**
     * <code>.dstore.values.TimestampValue to_date = 4;</code>
     */
    private $to_date = null;
    /**
     * <code>bool to_date_null = 1004;</code>
     */
    private $to_date_null = false;
    /**
     * <code>.dstore.values.StringValue date_format = 5;</code>
     */
    private $date_format = null;
    /**
     * <code>bool date_format_null = 1005;</code>
     */
    private $date_format_null = false;
    /**
     * <code>.dstore.values.IntegerValue visibility = 6;</code>
     */
    private $visibility = null;
    /**
     * <code>bool visibility_null = 1006;</code>
     */
    private $visibility_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoGetForumStatisticsAd::initOnce();
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
     * <code>.dstore.values.StringValue list_of_statistic_information_ids = 2;</code>
     */
    public function getListOfStatisticInformationIds()
    {
        return $this->list_of_statistic_information_ids;
    }

    /**
     * <code>.dstore.values.StringValue list_of_statistic_information_ids = 2;</code>
     */
    public function setListOfStatisticInformationIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->list_of_statistic_information_ids = $var;
    }

    /**
     * <code>bool list_of_statistic_information_ids_null = 1002;</code>
     */
    public function getListOfStatisticInformationIdsNull()
    {
        return $this->list_of_statistic_information_ids_null;
    }

    /**
     * <code>bool list_of_statistic_information_ids_null = 1002;</code>
     */
    public function setListOfStatisticInformationIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->list_of_statistic_information_ids_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 3;</code>
     */
    public function getFromDate()
    {
        return $this->from_date;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 3;</code>
     */
    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_date = $var;
    }

    /**
     * <code>bool from_date_null = 1003;</code>
     */
    public function getFromDateNull()
    {
        return $this->from_date_null;
    }

    /**
     * <code>bool from_date_null = 1003;</code>
     */
    public function setFromDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 4;</code>
     */
    public function getToDate()
    {
        return $this->to_date;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 4;</code>
     */
    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_date = $var;
    }

    /**
     * <code>bool to_date_null = 1004;</code>
     */
    public function getToDateNull()
    {
        return $this->to_date_null;
    }

    /**
     * <code>bool to_date_null = 1004;</code>
     */
    public function setToDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 5;</code>
     */
    public function getDateFormat()
    {
        return $this->date_format;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 5;</code>
     */
    public function setDateFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->date_format = $var;
    }

    /**
     * <code>bool date_format_null = 1005;</code>
     */
    public function getDateFormatNull()
    {
        return $this->date_format_null;
    }

    /**
     * <code>bool date_format_null = 1005;</code>
     */
    public function setDateFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_format_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue visibility = 6;</code>
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * <code>.dstore.values.IntegerValue visibility = 6;</code>
     */
    public function setVisibility(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->visibility = $var;
    }

    /**
     * <code>bool visibility_null = 1006;</code>
     */
    public function getVisibilityNull()
    {
        return $this->visibility_null;
    }

    /**
     * <code>bool visibility_null = 1006;</code>
     */
    public function setVisibilityNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visibility_null = $var;
    }

}

