<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyOrderContInfoTypes_Ad.proto

namespace Dstore\Engine\Om_ModifyOrderContInfoTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyOrderContInfoTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue information_type_id = 1;</code>
     */
    private $information_type_id = null;
    /**
     * <code>bool information_type_id_null = 1001;</code>
     */
    private $information_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue information_type = 2;</code>
     */
    private $information_type = null;
    /**
     * <code>bool information_type_null = 1002;</code>
     */
    private $information_type_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete = 3;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1003;</code>
     */
    private $delete_null = false;
    /**
     * <code>.dstore.values.IntegerValue field_type_id = 4;</code>
     */
    private $field_type_id = null;
    /**
     * <code>bool field_type_id_null = 1004;</code>
     */
    private $field_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyOrderContInfoTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 1;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 1;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <code>bool information_type_id_null = 1001;</code>
     */
    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    /**
     * <code>bool information_type_id_null = 1001;</code>
     */
    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue information_type = 2;</code>
     */
    public function getInformationType()
    {
        return $this->information_type;
    }

    /**
     * <code>.dstore.values.StringValue information_type = 2;</code>
     */
    public function setInformationType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->information_type = $var;
    }

    /**
     * <code>bool information_type_null = 1002;</code>
     */
    public function getInformationTypeNull()
    {
        return $this->information_type_null;
    }

    /**
     * <code>bool information_type_null = 1002;</code>
     */
    public function setInformationTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_null = $var;
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

    /**
     * <code>.dstore.values.IntegerValue field_type_id = 4;</code>
     */
    public function getFieldTypeId()
    {
        return $this->field_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue field_type_id = 4;</code>
     */
    public function setFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->field_type_id = $var;
    }

    /**
     * <code>bool field_type_id_null = 1004;</code>
     */
    public function getFieldTypeIdNull()
    {
        return $this->field_type_id_null;
    }

    /**
     * <code>bool field_type_id_null = 1004;</code>
     */
    public function setFieldTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->field_type_id_null = $var;
    }

}

