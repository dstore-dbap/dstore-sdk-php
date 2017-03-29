<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignBonusItems_Pu.proto

namespace Dstore\Engine\Om_GetCampaignBonusItems_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCampaignBonusItems_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue benefit_id = 1;</code>
     */
    private $benefit_id = null;
    /**
     * <code>bool benefit_id_null = 1001;</code>
     */
    private $benefit_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue only_definition = 2;</code>
     */
    private $only_definition = null;
    /**
     * <code>bool only_definition_null = 1002;</code>
     */
    private $only_definition_null = false;
    /**
     * <code>.dstore.values.StringValue sort_by_characteristic_id_list = 3;</code>
     */
    private $sort_by_characteristic_id_list = null;
    /**
     * <code>bool sort_by_characteristic_id_list_null = 1003;</code>
     */
    private $sort_by_characteristic_id_list_null = false;
    /**
     * <code>.dstore.values.StringValue sort_option_list = 4;</code>
     */
    private $sort_option_list = null;
    /**
     * <code>bool sort_option_list_null = 1004;</code>
     */
    private $sort_option_list_null = false;
    /**
     * <code>.dstore.values.StringValue inherit_depth_option_list = 5;</code>
     */
    private $inherit_depth_option_list = null;
    /**
     * <code>bool inherit_depth_option_list_null = 1005;</code>
     */
    private $inherit_depth_option_list_null = false;
    /**
     * <code>.dstore.values.StringValue recursive_evaluation_option_list = 6;</code>
     */
    private $recursive_evaluation_option_list = null;
    /**
     * <code>bool recursive_evaluation_option_list_null = 1006;</code>
     */
    private $recursive_evaluation_option_list_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_values_for_sort_by_characs = 7;</code>
     */
    private $get_values_for_sort_by_characs = null;
    /**
     * <code>bool get_values_for_sort_by_characs_null = 1007;</code>
     */
    private $get_values_for_sort_by_characs_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCampaignBonusItemsPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue benefit_id = 1;</code>
     */
    public function getBenefitId()
    {
        return $this->benefit_id;
    }

    /**
     * <code>.dstore.values.IntegerValue benefit_id = 1;</code>
     */
    public function setBenefitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->benefit_id = $var;
    }

    /**
     * <code>bool benefit_id_null = 1001;</code>
     */
    public function getBenefitIdNull()
    {
        return $this->benefit_id_null;
    }

    /**
     * <code>bool benefit_id_null = 1001;</code>
     */
    public function setBenefitIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->benefit_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue only_definition = 2;</code>
     */
    public function getOnlyDefinition()
    {
        return $this->only_definition;
    }

    /**
     * <code>.dstore.values.IntegerValue only_definition = 2;</code>
     */
    public function setOnlyDefinition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->only_definition = $var;
    }

    /**
     * <code>bool only_definition_null = 1002;</code>
     */
    public function getOnlyDefinitionNull()
    {
        return $this->only_definition_null;
    }

    /**
     * <code>bool only_definition_null = 1002;</code>
     */
    public function setOnlyDefinitionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_definition_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue sort_by_characteristic_id_list = 3;</code>
     */
    public function getSortByCharacteristicIdList()
    {
        return $this->sort_by_characteristic_id_list;
    }

    /**
     * <code>.dstore.values.StringValue sort_by_characteristic_id_list = 3;</code>
     */
    public function setSortByCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->sort_by_characteristic_id_list = $var;
    }

    /**
     * <code>bool sort_by_characteristic_id_list_null = 1003;</code>
     */
    public function getSortByCharacteristicIdListNull()
    {
        return $this->sort_by_characteristic_id_list_null;
    }

    /**
     * <code>bool sort_by_characteristic_id_list_null = 1003;</code>
     */
    public function setSortByCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_by_characteristic_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue sort_option_list = 4;</code>
     */
    public function getSortOptionList()
    {
        return $this->sort_option_list;
    }

    /**
     * <code>.dstore.values.StringValue sort_option_list = 4;</code>
     */
    public function setSortOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->sort_option_list = $var;
    }

    /**
     * <code>bool sort_option_list_null = 1004;</code>
     */
    public function getSortOptionListNull()
    {
        return $this->sort_option_list_null;
    }

    /**
     * <code>bool sort_option_list_null = 1004;</code>
     */
    public function setSortOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_option_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue inherit_depth_option_list = 5;</code>
     */
    public function getInheritDepthOptionList()
    {
        return $this->inherit_depth_option_list;
    }

    /**
     * <code>.dstore.values.StringValue inherit_depth_option_list = 5;</code>
     */
    public function setInheritDepthOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->inherit_depth_option_list = $var;
    }

    /**
     * <code>bool inherit_depth_option_list_null = 1005;</code>
     */
    public function getInheritDepthOptionListNull()
    {
        return $this->inherit_depth_option_list_null;
    }

    /**
     * <code>bool inherit_depth_option_list_null = 1005;</code>
     */
    public function setInheritDepthOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->inherit_depth_option_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue recursive_evaluation_option_list = 6;</code>
     */
    public function getRecursiveEvaluationOptionList()
    {
        return $this->recursive_evaluation_option_list;
    }

    /**
     * <code>.dstore.values.StringValue recursive_evaluation_option_list = 6;</code>
     */
    public function setRecursiveEvaluationOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->recursive_evaluation_option_list = $var;
    }

    /**
     * <code>bool recursive_evaluation_option_list_null = 1006;</code>
     */
    public function getRecursiveEvaluationOptionListNull()
    {
        return $this->recursive_evaluation_option_list_null;
    }

    /**
     * <code>bool recursive_evaluation_option_list_null = 1006;</code>
     */
    public function setRecursiveEvaluationOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->recursive_evaluation_option_list_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_values_for_sort_by_characs = 7;</code>
     */
    public function getGetValuesForSortByCharacs()
    {
        return $this->get_values_for_sort_by_characs;
    }

    /**
     * <code>.dstore.values.BooleanValue get_values_for_sort_by_characs = 7;</code>
     */
    public function setGetValuesForSortByCharacs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_values_for_sort_by_characs = $var;
    }

    /**
     * <code>bool get_values_for_sort_by_characs_null = 1007;</code>
     */
    public function getGetValuesForSortByCharacsNull()
    {
        return $this->get_values_for_sort_by_characs_null;
    }

    /**
     * <code>bool get_values_for_sort_by_characs_null = 1007;</code>
     */
    public function setGetValuesForSortByCharacsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_values_for_sort_by_characs_null = $var;
    }

}

