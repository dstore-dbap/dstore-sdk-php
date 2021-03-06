<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyUnitsInCategories_Ad.proto

namespace Dstore\Engine\Mi_ModifyUnitsInCategories_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_ModifyUnitsInCategories_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue unit_id = 1;</code>
     */
    private $unit_id = null;
    /**
     * <code>bool unit_id_null = 1001;</code>
     */
    private $unit_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue unit_category_id = 2;</code>
     */
    private $unit_category_id = null;
    /**
     * <code>bool unit_category_id_null = 1002;</code>
     */
    private $unit_category_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_unit_in_category = 3;</code>
     */
    private $delete_unit_in_category = null;
    /**
     * <code>bool delete_unit_in_category_null = 1003;</code>
     */
    private $delete_unit_in_category_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiModifyUnitsInCategoriesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue unit_id = 1;</code>
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    /**
     * <code>.dstore.values.IntegerValue unit_id = 1;</code>
     */
    public function setUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->unit_id = $var;
    }

    /**
     * <code>bool unit_id_null = 1001;</code>
     */
    public function getUnitIdNull()
    {
        return $this->unit_id_null;
    }

    /**
     * <code>bool unit_id_null = 1001;</code>
     */
    public function setUnitIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unit_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue unit_category_id = 2;</code>
     */
    public function getUnitCategoryId()
    {
        return $this->unit_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue unit_category_id = 2;</code>
     */
    public function setUnitCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->unit_category_id = $var;
    }

    /**
     * <code>bool unit_category_id_null = 1002;</code>
     */
    public function getUnitCategoryIdNull()
    {
        return $this->unit_category_id_null;
    }

    /**
     * <code>bool unit_category_id_null = 1002;</code>
     */
    public function setUnitCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unit_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_unit_in_category = 3;</code>
     */
    public function getDeleteUnitInCategory()
    {
        return $this->delete_unit_in_category;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_unit_in_category = 3;</code>
     */
    public function setDeleteUnitInCategory(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_unit_in_category = $var;
    }

    /**
     * <code>bool delete_unit_in_category_null = 1003;</code>
     */
    public function getDeleteUnitInCategoryNull()
    {
        return $this->delete_unit_in_category_null;
    }

    /**
     * <code>bool delete_unit_in_category_null = 1003;</code>
     */
    public function setDeleteUnitInCategoryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_unit_in_category_null = $var;
    }

}

