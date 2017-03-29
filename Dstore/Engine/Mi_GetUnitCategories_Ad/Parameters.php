<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetUnitCategories_Ad.proto

namespace Dstore\Engine\Mi_GetUnitCategories_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetUnitCategories_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue unit_category_id = 1;</code>
     */
    private $unit_category_id = null;
    /**
     * <code>bool unit_category_id_null = 1001;</code>
     */
    private $unit_category_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1002;</code>
     */
    private $language_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetUnitCategoriesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue unit_category_id = 1;</code>
     */
    public function getUnitCategoryId()
    {
        return $this->unit_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue unit_category_id = 1;</code>
     */
    public function setUnitCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->unit_category_id = $var;
    }

    /**
     * <code>bool unit_category_id_null = 1001;</code>
     */
    public function getUnitCategoryIdNull()
    {
        return $this->unit_category_id_null;
    }

    /**
     * <code>bool unit_category_id_null = 1001;</code>
     */
    public function setUnitCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unit_category_id_null = $var;
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

}

