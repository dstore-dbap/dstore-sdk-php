<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_ModifyPagesInCategories_Ad.proto

namespace Dstore\Engine\St_ModifyPagesInCategories_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_ModifyPagesInCategories_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue page_no = 1;</code>
     */
    private $page_no = null;
    /**
     * <code>bool page_no_null = 1001;</code>
     */
    private $page_no_null = false;
    /**
     * <code>.dstore.values.IntegerValue page_category_id = 2;</code>
     */
    private $page_category_id = null;
    /**
     * <code>bool page_category_id_null = 1002;</code>
     */
    private $page_category_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete = 3;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1003;</code>
     */
    private $delete_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StModifyPagesInCategoriesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue page_no = 1;</code>
     */
    public function getPageNo()
    {
        return $this->page_no;
    }

    /**
     * <code>.dstore.values.IntegerValue page_no = 1;</code>
     */
    public function setPageNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->page_no = $var;
    }

    /**
     * <code>bool page_no_null = 1001;</code>
     */
    public function getPageNoNull()
    {
        return $this->page_no_null;
    }

    /**
     * <code>bool page_no_null = 1001;</code>
     */
    public function setPageNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->page_no_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue page_category_id = 2;</code>
     */
    public function getPageCategoryId()
    {
        return $this->page_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue page_category_id = 2;</code>
     */
    public function setPageCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->page_category_id = $var;
    }

    /**
     * <code>bool page_category_id_null = 1002;</code>
     */
    public function getPageCategoryIdNull()
    {
        return $this->page_category_id_null;
    }

    /**
     * <code>bool page_category_id_null = 1002;</code>
     */
    public function setPageCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->page_category_id_null = $var;
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

