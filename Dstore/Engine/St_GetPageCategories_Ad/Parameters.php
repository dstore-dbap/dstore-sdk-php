<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetPageCategories_Ad.proto

namespace Dstore\Engine\St_GetPageCategories_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_GetPageCategories_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue page_category_id = 1;</code>
     */
    private $page_category_id = null;
    /**
     * <code>bool page_category_id_null = 1001;</code>
     */
    private $page_category_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StGetPageCategoriesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue page_category_id = 1;</code>
     */
    public function getPageCategoryId()
    {
        return $this->page_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue page_category_id = 1;</code>
     */
    public function setPageCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->page_category_id = $var;
    }

    /**
     * <code>bool page_category_id_null = 1001;</code>
     */
    public function getPageCategoryIdNull()
    {
        return $this->page_category_id_null;
    }

    /**
     * <code>bool page_category_id_null = 1001;</code>
     */
    public function setPageCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->page_category_id_null = $var;
    }

}

