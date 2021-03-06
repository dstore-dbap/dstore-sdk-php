<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyCondPartsInGroups_Ad.proto

namespace Dstore\Engine\Im_ModifyCondPartsInGroups_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_ModifyCondPartsInGroups_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue condition_group_id = 1;</code>
     */
    private $condition_group_id = null;
    /**
     * <code>bool condition_group_id_null = 1001;</code>
     */
    private $condition_group_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue condition_part_id = 2;</code>
     */
    private $condition_part_id = null;
    /**
     * <code>bool condition_part_id_null = 1002;</code>
     */
    private $condition_part_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue sort_no = 3;</code>
     */
    private $sort_no = null;
    /**
     * <code>bool sort_no_null = 1003;</code>
     */
    private $sort_no_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_combination = 4;</code>
     */
    private $delete_combination = null;
    /**
     * <code>bool delete_combination_null = 1004;</code>
     */
    private $delete_combination_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImModifyCondPartsInGroupsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue condition_group_id = 1;</code>
     */
    public function getConditionGroupId()
    {
        return $this->condition_group_id;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_group_id = 1;</code>
     */
    public function setConditionGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_group_id = $var;
    }

    /**
     * <code>bool condition_group_id_null = 1001;</code>
     */
    public function getConditionGroupIdNull()
    {
        return $this->condition_group_id_null;
    }

    /**
     * <code>bool condition_group_id_null = 1001;</code>
     */
    public function setConditionGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_group_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_part_id = 2;</code>
     */
    public function getConditionPartId()
    {
        return $this->condition_part_id;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_part_id = 2;</code>
     */
    public function setConditionPartId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_part_id = $var;
    }

    /**
     * <code>bool condition_part_id_null = 1002;</code>
     */
    public function getConditionPartIdNull()
    {
        return $this->condition_part_id_null;
    }

    /**
     * <code>bool condition_part_id_null = 1002;</code>
     */
    public function setConditionPartIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_part_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_no = 3;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_no = 3;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

    /**
     * <code>bool sort_no_null = 1003;</code>
     */
    public function getSortNoNull()
    {
        return $this->sort_no_null;
    }

    /**
     * <code>bool sort_no_null = 1003;</code>
     */
    public function setSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_no_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_combination = 4;</code>
     */
    public function getDeleteCombination()
    {
        return $this->delete_combination;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_combination = 4;</code>
     */
    public function setDeleteCombination(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_combination = $var;
    }

    /**
     * <code>bool delete_combination_null = 1004;</code>
     */
    public function getDeleteCombinationNull()
    {
        return $this->delete_combination_null;
    }

    /**
     * <code>bool delete_combination_null = 1004;</code>
     */
    public function setDeleteCombinationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_combination_null = $var;
    }

}

