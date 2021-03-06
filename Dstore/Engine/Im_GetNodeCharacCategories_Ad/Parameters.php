<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacCategories_Ad.proto

namespace Dstore\Engine\Im_GetNodeCharacCategories_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetNodeCharacCategories_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue predecessor_category_id = 1;</code>
     */
    private $predecessor_category_id = null;
    /**
     * <code>bool predecessor_category_id_null = 1001;</code>
     */
    private $predecessor_category_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetNodeCharacCategoriesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue predecessor_category_id = 1;</code>
     */
    public function getPredecessorCategoryId()
    {
        return $this->predecessor_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue predecessor_category_id = 1;</code>
     */
    public function setPredecessorCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->predecessor_category_id = $var;
    }

    /**
     * <code>bool predecessor_category_id_null = 1001;</code>
     */
    public function getPredecessorCategoryIdNull()
    {
        return $this->predecessor_category_id_null;
    }

    /**
     * <code>bool predecessor_category_id_null = 1001;</code>
     */
    public function setPredecessorCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->predecessor_category_id_null = $var;
    }

}

