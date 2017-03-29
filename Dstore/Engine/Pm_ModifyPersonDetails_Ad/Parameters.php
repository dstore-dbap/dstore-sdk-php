<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPersonDetails_Ad.proto

namespace Dstore\Engine\Pm_ModifyPersonDetails_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_ModifyPersonDetails_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    private $person_id = null;
    /**
     * <code>bool person_id_null = 1001;</code>
     */
    private $person_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 2;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <code>bool person_characteristic_id_null = 1002;</code>
     */
    private $person_characteristic_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue sort_no = 3;</code>
     */
    private $sort_no = null;
    /**
     * <code>bool sort_no_null = 1003;</code>
     */
    private $sort_no_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmModifyPersonDetailsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <code>bool person_id_null = 1001;</code>
     */
    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    /**
     * <code>bool person_id_null = 1001;</code>
     */
    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 2;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 2;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <code>bool person_characteristic_id_null = 1002;</code>
     */
    public function getPersonCharacteristicIdNull()
    {
        return $this->person_characteristic_id_null;
    }

    /**
     * <code>bool person_characteristic_id_null = 1002;</code>
     */
    public function setPersonCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_characteristic_id_null = $var;
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

}

