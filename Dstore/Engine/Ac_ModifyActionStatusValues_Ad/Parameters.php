<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/ac_ModifyActionStatusValues_Ad.proto

namespace Dstore\Engine\Ac_ModifyActionStatusValues_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.ac_ModifyActionStatusValues_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue command_id = 1;</code>
     */
    private $command_id = null;
    /**
     * <code>bool command_id_null = 1001;</code>
     */
    private $command_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue status = 2;</code>
     */
    private $status = null;
    /**
     * <code>bool status_null = 1002;</code>
     */
    private $status_null = false;
    /**
     * <code>.dstore.values.StringValue status_description = 3;</code>
     */
    private $status_description = null;
    /**
     * <code>bool status_description_null = 1003;</code>
     */
    private $status_description_null = false;
    /**
     * <code>.dstore.values.IntegerValue sort_no = 4;</code>
     */
    private $sort_no = null;
    /**
     * <code>bool sort_no_null = 1004;</code>
     */
    private $sort_no_null = false;
    /**
     * <code>.dstore.values.StringValue detailed_description = 5;</code>
     */
    private $detailed_description = null;
    /**
     * <code>bool detailed_description_null = 1005;</code>
     */
    private $detailed_description_null = false;
    /**
     * <code>.dstore.values.IntegerValue status_category_id = 6;</code>
     */
    private $status_category_id = null;
    /**
     * <code>bool status_category_id_null = 1006;</code>
     */
    private $status_category_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_status = 7;</code>
     */
    private $delete_status = null;
    /**
     * <code>bool delete_status_null = 1007;</code>
     */
    private $delete_status_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\AcModifyActionStatusValuesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue command_id = 1;</code>
     */
    public function getCommandId()
    {
        return $this->command_id;
    }

    /**
     * <code>.dstore.values.IntegerValue command_id = 1;</code>
     */
    public function setCommandId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->command_id = $var;
    }

    /**
     * <code>bool command_id_null = 1001;</code>
     */
    public function getCommandIdNull()
    {
        return $this->command_id_null;
    }

    /**
     * <code>bool command_id_null = 1001;</code>
     */
    public function setCommandIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->command_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue status = 2;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <code>.dstore.values.IntegerValue status = 2;</code>
     */
    public function setStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->status = $var;
    }

    /**
     * <code>bool status_null = 1002;</code>
     */
    public function getStatusNull()
    {
        return $this->status_null;
    }

    /**
     * <code>bool status_null = 1002;</code>
     */
    public function setStatusNull($var)
    {
        GPBUtil::checkBool($var);
        $this->status_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue status_description = 3;</code>
     */
    public function getStatusDescription()
    {
        return $this->status_description;
    }

    /**
     * <code>.dstore.values.StringValue status_description = 3;</code>
     */
    public function setStatusDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->status_description = $var;
    }

    /**
     * <code>bool status_description_null = 1003;</code>
     */
    public function getStatusDescriptionNull()
    {
        return $this->status_description_null;
    }

    /**
     * <code>bool status_description_null = 1003;</code>
     */
    public function setStatusDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->status_description_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_no = 4;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_no = 4;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

    /**
     * <code>bool sort_no_null = 1004;</code>
     */
    public function getSortNoNull()
    {
        return $this->sort_no_null;
    }

    /**
     * <code>bool sort_no_null = 1004;</code>
     */
    public function setSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_no_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue detailed_description = 5;</code>
     */
    public function getDetailedDescription()
    {
        return $this->detailed_description;
    }

    /**
     * <code>.dstore.values.StringValue detailed_description = 5;</code>
     */
    public function setDetailedDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->detailed_description = $var;
    }

    /**
     * <code>bool detailed_description_null = 1005;</code>
     */
    public function getDetailedDescriptionNull()
    {
        return $this->detailed_description_null;
    }

    /**
     * <code>bool detailed_description_null = 1005;</code>
     */
    public function setDetailedDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->detailed_description_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue status_category_id = 6;</code>
     */
    public function getStatusCategoryId()
    {
        return $this->status_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue status_category_id = 6;</code>
     */
    public function setStatusCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->status_category_id = $var;
    }

    /**
     * <code>bool status_category_id_null = 1006;</code>
     */
    public function getStatusCategoryIdNull()
    {
        return $this->status_category_id_null;
    }

    /**
     * <code>bool status_category_id_null = 1006;</code>
     */
    public function setStatusCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->status_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_status = 7;</code>
     */
    public function getDeleteStatus()
    {
        return $this->delete_status;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_status = 7;</code>
     */
    public function setDeleteStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_status = $var;
    }

    /**
     * <code>bool delete_status_null = 1007;</code>
     */
    public function getDeleteStatusNull()
    {
        return $this->delete_status_null;
    }

    /**
     * <code>bool delete_status_null = 1007;</code>
     */
    public function setDeleteStatusNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_status_null = $var;
    }

}

