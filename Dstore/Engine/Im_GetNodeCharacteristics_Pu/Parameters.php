<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacteristics_Pu.proto

namespace Dstore\Engine\Im_GetNodeCharacteristics_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetNodeCharacteristics_Pu.Parameters</code>
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
     * <code>.dstore.values.IntegerValue language_id_for_charac_descript = 2;</code>
     */
    private $language_id_for_charac_descript = null;
    /**
     * <code>bool language_id_for_charac_descript_null = 1002;</code>
     */
    private $language_id_for_charac_descript_null = false;
    /**
     * <code>.dstore.values.IntegerValue node_charac_category_id = 3;</code>
     */
    private $node_charac_category_id = null;
    /**
     * <code>bool node_charac_category_id_null = 1003;</code>
     */
    private $node_charac_category_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue order_by_sort_no = 4;</code>
     */
    private $order_by_sort_no = null;
    /**
     * <code>bool order_by_sort_no_null = 1004;</code>
     */
    private $order_by_sort_no_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetNodeCharacteristicsPu::initOnce();
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
     * <code>.dstore.values.IntegerValue language_id_for_charac_descript = 2;</code>
     */
    public function getLanguageIdForCharacDescript()
    {
        return $this->language_id_for_charac_descript;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id_for_charac_descript = 2;</code>
     */
    public function setLanguageIdForCharacDescript(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id_for_charac_descript = $var;
    }

    /**
     * <code>bool language_id_for_charac_descript_null = 1002;</code>
     */
    public function getLanguageIdForCharacDescriptNull()
    {
        return $this->language_id_for_charac_descript_null;
    }

    /**
     * <code>bool language_id_for_charac_descript_null = 1002;</code>
     */
    public function setLanguageIdForCharacDescriptNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_for_charac_descript_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue node_charac_category_id = 3;</code>
     */
    public function getNodeCharacCategoryId()
    {
        return $this->node_charac_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_charac_category_id = 3;</code>
     */
    public function setNodeCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_charac_category_id = $var;
    }

    /**
     * <code>bool node_charac_category_id_null = 1003;</code>
     */
    public function getNodeCharacCategoryIdNull()
    {
        return $this->node_charac_category_id_null;
    }

    /**
     * <code>bool node_charac_category_id_null = 1003;</code>
     */
    public function setNodeCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_charac_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue order_by_sort_no = 4;</code>
     */
    public function getOrderBySortNo()
    {
        return $this->order_by_sort_no;
    }

    /**
     * <code>.dstore.values.BooleanValue order_by_sort_no = 4;</code>
     */
    public function setOrderBySortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->order_by_sort_no = $var;
    }

    /**
     * <code>bool order_by_sort_no_null = 1004;</code>
     */
    public function getOrderBySortNoNull()
    {
        return $this->order_by_sort_no_null;
    }

    /**
     * <code>bool order_by_sort_no_null = 1004;</code>
     */
    public function setOrderBySortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_by_sort_no_null = $var;
    }

}

