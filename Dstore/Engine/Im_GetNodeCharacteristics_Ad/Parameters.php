<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacteristics_Ad.proto

namespace Dstore\Engine\Im_GetNodeCharacteristics_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetNodeCharacteristics_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.BooleanValue include_currency_information = 1;</code>
     */
    private $include_currency_information = null;
    /**
     * <code>bool include_currency_information_null = 1001;</code>
     */
    private $include_currency_information_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_currency_informations = 2;</code>
     */
    private $include_currency_informations = null;
    /**
     * <code>bool include_currency_informations_null = 1002;</code>
     */
    private $include_currency_informations_null = false;
    /**
     * <code>.dstore.values.BooleanValue only_ids_in_table_one_id = 3;</code>
     */
    private $only_ids_in_table_one_id = null;
    /**
     * <code>bool only_ids_in_table_one_id_null = 1003;</code>
     */
    private $only_ids_in_table_one_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue node_charac_category_id = 4;</code>
     */
    private $node_charac_category_id = null;
    /**
     * <code>bool node_charac_category_id_null = 1004;</code>
     */
    private $node_charac_category_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue sort_order = 5;</code>
     */
    private $sort_order = null;
    /**
     * <code>bool sort_order_null = 1005;</code>
     */
    private $sort_order_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_category_information = 6;</code>
     */
    private $get_category_information = null;
    /**
     * <code>bool get_category_information_null = 1006;</code>
     */
    private $get_category_information_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetNodeCharacteristicsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.BooleanValue include_currency_information = 1;</code>
     */
    public function getIncludeCurrencyInformation()
    {
        return $this->include_currency_information;
    }

    /**
     * <code>.dstore.values.BooleanValue include_currency_information = 1;</code>
     */
    public function setIncludeCurrencyInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_currency_information = $var;
    }

    /**
     * <code>bool include_currency_information_null = 1001;</code>
     */
    public function getIncludeCurrencyInformationNull()
    {
        return $this->include_currency_information_null;
    }

    /**
     * <code>bool include_currency_information_null = 1001;</code>
     */
    public function setIncludeCurrencyInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_currency_information_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_currency_informations = 2;</code>
     */
    public function getIncludeCurrencyInformations()
    {
        return $this->include_currency_informations;
    }

    /**
     * <code>.dstore.values.BooleanValue include_currency_informations = 2;</code>
     */
    public function setIncludeCurrencyInformations(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_currency_informations = $var;
    }

    /**
     * <code>bool include_currency_informations_null = 1002;</code>
     */
    public function getIncludeCurrencyInformationsNull()
    {
        return $this->include_currency_informations_null;
    }

    /**
     * <code>bool include_currency_informations_null = 1002;</code>
     */
    public function setIncludeCurrencyInformationsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_currency_informations_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue only_ids_in_table_one_id = 3;</code>
     */
    public function getOnlyIdsInTableOneId()
    {
        return $this->only_ids_in_table_one_id;
    }

    /**
     * <code>.dstore.values.BooleanValue only_ids_in_table_one_id = 3;</code>
     */
    public function setOnlyIdsInTableOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->only_ids_in_table_one_id = $var;
    }

    /**
     * <code>bool only_ids_in_table_one_id_null = 1003;</code>
     */
    public function getOnlyIdsInTableOneIdNull()
    {
        return $this->only_ids_in_table_one_id_null;
    }

    /**
     * <code>bool only_ids_in_table_one_id_null = 1003;</code>
     */
    public function setOnlyIdsInTableOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_ids_in_table_one_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue node_charac_category_id = 4;</code>
     */
    public function getNodeCharacCategoryId()
    {
        return $this->node_charac_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_charac_category_id = 4;</code>
     */
    public function setNodeCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_charac_category_id = $var;
    }

    /**
     * <code>bool node_charac_category_id_null = 1004;</code>
     */
    public function getNodeCharacCategoryIdNull()
    {
        return $this->node_charac_category_id_null;
    }

    /**
     * <code>bool node_charac_category_id_null = 1004;</code>
     */
    public function setNodeCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_charac_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_order = 5;</code>
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_order = 5;</code>
     */
    public function setSortOrder(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_order = $var;
    }

    /**
     * <code>bool sort_order_null = 1005;</code>
     */
    public function getSortOrderNull()
    {
        return $this->sort_order_null;
    }

    /**
     * <code>bool sort_order_null = 1005;</code>
     */
    public function setSortOrderNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_order_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_category_information = 6;</code>
     */
    public function getGetCategoryInformation()
    {
        return $this->get_category_information;
    }

    /**
     * <code>.dstore.values.BooleanValue get_category_information = 6;</code>
     */
    public function setGetCategoryInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_category_information = $var;
    }

    /**
     * <code>bool get_category_information_null = 1006;</code>
     */
    public function getGetCategoryInformationNull()
    {
        return $this->get_category_information_null;
    }

    /**
     * <code>bool get_category_information_null = 1006;</code>
     */
    public function setGetCategoryInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_category_information_null = $var;
    }

}

