<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPersonTypes_Ad.proto

namespace Dstore\Engine\Pm_ModifyPersonTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_ModifyPersonTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue person_type_description = 2;</code>
     */
    private $person_type_description = null;
    /**
     * <code>bool person_type_description_null = 1002;</code>
     */
    private $person_type_description_null = false;
    /**
     * <code>.dstore.values.IntegerValue country_id = 3;</code>
     */
    private $country_id = null;
    /**
     * <code>bool country_id_null = 1003;</code>
     */
    private $country_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue sort_no = 4;</code>
     */
    private $sort_no = null;
    /**
     * <code>bool sort_no_null = 1004;</code>
     */
    private $sort_no_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_person_type = 5;</code>
     */
    private $delete_person_type = null;
    /**
     * <code>bool delete_person_type_null = 1005;</code>
     */
    private $delete_person_type_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmModifyPersonTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue person_type_description = 2;</code>
     */
    public function getPersonTypeDescription()
    {
        return $this->person_type_description;
    }

    /**
     * <code>.dstore.values.StringValue person_type_description = 2;</code>
     */
    public function setPersonTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->person_type_description = $var;
    }

    /**
     * <code>bool person_type_description_null = 1002;</code>
     */
    public function getPersonTypeDescriptionNull()
    {
        return $this->person_type_description_null;
    }

    /**
     * <code>bool person_type_description_null = 1002;</code>
     */
    public function setPersonTypeDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_description_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue country_id = 3;</code>
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * <code>.dstore.values.IntegerValue country_id = 3;</code>
     */
    public function setCountryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->country_id = $var;
    }

    /**
     * <code>bool country_id_null = 1003;</code>
     */
    public function getCountryIdNull()
    {
        return $this->country_id_null;
    }

    /**
     * <code>bool country_id_null = 1003;</code>
     */
    public function setCountryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_id_null = $var;
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
     * <code>.dstore.values.BooleanValue delete_person_type = 5;</code>
     */
    public function getDeletePersonType()
    {
        return $this->delete_person_type;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_person_type = 5;</code>
     */
    public function setDeletePersonType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_person_type = $var;
    }

    /**
     * <code>bool delete_person_type_null = 1005;</code>
     */
    public function getDeletePersonTypeNull()
    {
        return $this->delete_person_type_null;
    }

    /**
     * <code>bool delete_person_type_null = 1005;</code>
     */
    public function setDeletePersonTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_person_type_null = $var;
    }

}

