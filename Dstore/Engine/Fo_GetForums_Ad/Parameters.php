<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetForums_Ad.proto

namespace Dstore\Engine\Fo_GetForums_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_GetForums_Ad.Parameters</code>
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
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1002;</code>
     */
    private $language_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue forum_category_id = 3;</code>
     */
    private $forum_category_id = null;
    /**
     * <code>bool forum_category_id_null = 1003;</code>
     */
    private $forum_category_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue only_forum_categories_in_one_id = 4;</code>
     */
    private $only_forum_categories_in_one_id = null;
    /**
     * <code>bool only_forum_categories_in_one_id_null = 1004;</code>
     */
    private $only_forum_categories_in_one_id_null = false;
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
        \GPBMetadata\Dstore\Engine\Procedures\FoGetForumsAd::initOnce();
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
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue forum_category_id = 3;</code>
     */
    public function getForumCategoryId()
    {
        return $this->forum_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue forum_category_id = 3;</code>
     */
    public function setForumCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->forum_category_id = $var;
    }

    /**
     * <code>bool forum_category_id_null = 1003;</code>
     */
    public function getForumCategoryIdNull()
    {
        return $this->forum_category_id_null;
    }

    /**
     * <code>bool forum_category_id_null = 1003;</code>
     */
    public function setForumCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue only_forum_categories_in_one_id = 4;</code>
     */
    public function getOnlyForumCategoriesInOneId()
    {
        return $this->only_forum_categories_in_one_id;
    }

    /**
     * <code>.dstore.values.BooleanValue only_forum_categories_in_one_id = 4;</code>
     */
    public function setOnlyForumCategoriesInOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->only_forum_categories_in_one_id = $var;
    }

    /**
     * <code>bool only_forum_categories_in_one_id_null = 1004;</code>
     */
    public function getOnlyForumCategoriesInOneIdNull()
    {
        return $this->only_forum_categories_in_one_id_null;
    }

    /**
     * <code>bool only_forum_categories_in_one_id_null = 1004;</code>
     */
    public function setOnlyForumCategoriesInOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_forum_categories_in_one_id_null = $var;
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
