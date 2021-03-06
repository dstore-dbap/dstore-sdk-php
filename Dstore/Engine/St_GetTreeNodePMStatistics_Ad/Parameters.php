<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetTreeNodePMStatistics_Ad.proto

namespace Dstore\Engine\St_GetTreeNodePMStatistics_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_GetTreeNodePMStatistics_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue from_month = 1;</code>
     */
    private $from_month = null;
    /**
     * <code>bool from_month_null = 1001;</code>
     */
    private $from_month_null = false;
    /**
     * <code>.dstore.values.IntegerValue from_year = 2;</code>
     */
    private $from_year = null;
    /**
     * <code>bool from_year_null = 1002;</code>
     */
    private $from_year_null = false;
    /**
     * <code>.dstore.values.IntegerValue to_month = 3;</code>
     */
    private $to_month = null;
    /**
     * <code>bool to_month_null = 1003;</code>
     */
    private $to_month_null = false;
    /**
     * <code>.dstore.values.IntegerValue to_year = 4;</code>
     */
    private $to_year = null;
    /**
     * <code>bool to_year_null = 1004;</code>
     */
    private $to_year_null = false;
    /**
     * <code>.dstore.values.StringValue basic_characteristic_numbers = 5;</code>
     */
    private $basic_characteristic_numbers = null;
    /**
     * <code>bool basic_characteristic_numbers_null = 1005;</code>
     */
    private $basic_characteristic_numbers_null = false;
    /**
     * <code>.dstore.values.StringValue h_tree_node_ids = 6;</code>
     */
    private $h_tree_node_ids = null;
    /**
     * <code>bool h_tree_node_ids_null = 1006;</code>
     */
    private $h_tree_node_ids_null = false;
    /**
     * <code>.dstore.values.BooleanValue summarize_months = 7;</code>
     */
    private $summarize_months = null;
    /**
     * <code>bool summarize_months_null = 1007;</code>
     */
    private $summarize_months_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StGetTreeNodePMStatisticsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue from_month = 1;</code>
     */
    public function getFromMonth()
    {
        return $this->from_month;
    }

    /**
     * <code>.dstore.values.IntegerValue from_month = 1;</code>
     */
    public function setFromMonth(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_month = $var;
    }

    /**
     * <code>bool from_month_null = 1001;</code>
     */
    public function getFromMonthNull()
    {
        return $this->from_month_null;
    }

    /**
     * <code>bool from_month_null = 1001;</code>
     */
    public function setFromMonthNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_month_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue from_year = 2;</code>
     */
    public function getFromYear()
    {
        return $this->from_year;
    }

    /**
     * <code>.dstore.values.IntegerValue from_year = 2;</code>
     */
    public function setFromYear(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_year = $var;
    }

    /**
     * <code>bool from_year_null = 1002;</code>
     */
    public function getFromYearNull()
    {
        return $this->from_year_null;
    }

    /**
     * <code>bool from_year_null = 1002;</code>
     */
    public function setFromYearNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_year_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue to_month = 3;</code>
     */
    public function getToMonth()
    {
        return $this->to_month;
    }

    /**
     * <code>.dstore.values.IntegerValue to_month = 3;</code>
     */
    public function setToMonth(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->to_month = $var;
    }

    /**
     * <code>bool to_month_null = 1003;</code>
     */
    public function getToMonthNull()
    {
        return $this->to_month_null;
    }

    /**
     * <code>bool to_month_null = 1003;</code>
     */
    public function setToMonthNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_month_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue to_year = 4;</code>
     */
    public function getToYear()
    {
        return $this->to_year;
    }

    /**
     * <code>.dstore.values.IntegerValue to_year = 4;</code>
     */
    public function setToYear(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->to_year = $var;
    }

    /**
     * <code>bool to_year_null = 1004;</code>
     */
    public function getToYearNull()
    {
        return $this->to_year_null;
    }

    /**
     * <code>bool to_year_null = 1004;</code>
     */
    public function setToYearNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_year_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue basic_characteristic_numbers = 5;</code>
     */
    public function getBasicCharacteristicNumbers()
    {
        return $this->basic_characteristic_numbers;
    }

    /**
     * <code>.dstore.values.StringValue basic_characteristic_numbers = 5;</code>
     */
    public function setBasicCharacteristicNumbers(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->basic_characteristic_numbers = $var;
    }

    /**
     * <code>bool basic_characteristic_numbers_null = 1005;</code>
     */
    public function getBasicCharacteristicNumbersNull()
    {
        return $this->basic_characteristic_numbers_null;
    }

    /**
     * <code>bool basic_characteristic_numbers_null = 1005;</code>
     */
    public function setBasicCharacteristicNumbersNull($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_characteristic_numbers_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue h_tree_node_ids = 6;</code>
     */
    public function getHTreeNodeIds()
    {
        return $this->h_tree_node_ids;
    }

    /**
     * <code>.dstore.values.StringValue h_tree_node_ids = 6;</code>
     */
    public function setHTreeNodeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->h_tree_node_ids = $var;
    }

    /**
     * <code>bool h_tree_node_ids_null = 1006;</code>
     */
    public function getHTreeNodeIdsNull()
    {
        return $this->h_tree_node_ids_null;
    }

    /**
     * <code>bool h_tree_node_ids_null = 1006;</code>
     */
    public function setHTreeNodeIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->h_tree_node_ids_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue summarize_months = 7;</code>
     */
    public function getSummarizeMonths()
    {
        return $this->summarize_months;
    }

    /**
     * <code>.dstore.values.BooleanValue summarize_months = 7;</code>
     */
    public function setSummarizeMonths(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->summarize_months = $var;
    }

    /**
     * <code>bool summarize_months_null = 1007;</code>
     */
    public function getSummarizeMonthsNull()
    {
        return $this->summarize_months_null;
    }

    /**
     * <code>bool summarize_months_null = 1007;</code>
     */
    public function setSummarizeMonthsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->summarize_months_null = $var;
    }

}

