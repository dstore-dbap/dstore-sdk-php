<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacValues_Pu.proto

namespace Dstore\Engine\Im_GetNodeCharacValues_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetNodeCharacValues_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 1;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <code>bool node_characteristic_id_null = 1001;</code>
     */
    private $node_characteristic_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue value_category_id = 2;</code>
     */
    private $value_category_id = null;
    /**
     * <code>bool value_category_id_null = 1002;</code>
     */
    private $value_category_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetNodeCharacValuesPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 1;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 1;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <code>bool node_characteristic_id_null = 1001;</code>
     */
    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    /**
     * <code>bool node_characteristic_id_null = 1001;</code>
     */
    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue value_category_id = 2;</code>
     */
    public function getValueCategoryId()
    {
        return $this->value_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue value_category_id = 2;</code>
     */
    public function setValueCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_category_id = $var;
    }

    /**
     * <code>bool value_category_id_null = 1002;</code>
     */
    public function getValueCategoryIdNull()
    {
        return $this->value_category_id_null;
    }

    /**
     * <code>bool value_category_id_null = 1002;</code>
     */
    public function setValueCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_category_id_null = $var;
    }

}
