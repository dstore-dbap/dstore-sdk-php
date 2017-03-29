<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetSurchargeTypeCategories.proto

namespace Dstore\Engine\Om_GetSurchargeTypeCategories;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetSurchargeTypeCategories.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue category_id = 1;</code>
     */
    private $category_id = null;
    /**
     * <code>bool category_id_null = 1001;</code>
     */
    private $category_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetSurchargeTypeCategories::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue category_id = 1;</code>
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue category_id = 1;</code>
     */
    public function setCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->category_id = $var;
    }

    /**
     * <code>bool category_id_null = 1001;</code>
     */
    public function getCategoryIdNull()
    {
        return $this->category_id_null;
    }

    /**
     * <code>bool category_id_null = 1001;</code>
     */
    public function setCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->category_id_null = $var;
    }

}

