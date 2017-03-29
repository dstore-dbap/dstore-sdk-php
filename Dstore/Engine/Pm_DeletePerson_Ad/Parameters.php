<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_DeletePerson_Ad.proto

namespace Dstore\Engine\Pm_DeletePerson_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_DeletePerson_Ad.Parameters</code>
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
     * <code>.dstore.values.IntegerValue force_delete = 2;</code>
     */
    private $force_delete = null;
    /**
     * <code>bool force_delete_null = 1002;</code>
     */
    private $force_delete_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmDeletePersonAd::initOnce();
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
     * <code>.dstore.values.IntegerValue force_delete = 2;</code>
     */
    public function getForceDelete()
    {
        return $this->force_delete;
    }

    /**
     * <code>.dstore.values.IntegerValue force_delete = 2;</code>
     */
    public function setForceDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->force_delete = $var;
    }

    /**
     * <code>bool force_delete_null = 1002;</code>
     */
    public function getForceDeleteNull()
    {
        return $this->force_delete_null;
    }

    /**
     * <code>bool force_delete_null = 1002;</code>
     */
    public function setForceDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->force_delete_null = $var;
    }

}

