<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyCountriesInRegions_Ad.proto

namespace Dstore\Engine\Mi_ModifyCountriesInRegions_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_ModifyCountriesInRegions_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue country_id = 1;</code>
     */
    private $country_id = null;
    /**
     * <code>bool country_id_null = 1001;</code>
     */
    private $country_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue region_id = 2;</code>
     */
    private $region_id = null;
    /**
     * <code>bool region_id_null = 1002;</code>
     */
    private $region_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue revoke = 3;</code>
     */
    private $revoke = null;
    /**
     * <code>bool revoke_null = 1003;</code>
     */
    private $revoke_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiModifyCountriesInRegionsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue country_id = 1;</code>
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * <code>.dstore.values.IntegerValue country_id = 1;</code>
     */
    public function setCountryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->country_id = $var;
    }

    /**
     * <code>bool country_id_null = 1001;</code>
     */
    public function getCountryIdNull()
    {
        return $this->country_id_null;
    }

    /**
     * <code>bool country_id_null = 1001;</code>
     */
    public function setCountryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue region_id = 2;</code>
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * <code>.dstore.values.IntegerValue region_id = 2;</code>
     */
    public function setRegionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->region_id = $var;
    }

    /**
     * <code>bool region_id_null = 1002;</code>
     */
    public function getRegionIdNull()
    {
        return $this->region_id_null;
    }

    /**
     * <code>bool region_id_null = 1002;</code>
     */
    public function setRegionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->region_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue revoke = 3;</code>
     */
    public function getRevoke()
    {
        return $this->revoke;
    }

    /**
     * <code>.dstore.values.BooleanValue revoke = 3;</code>
     */
    public function setRevoke(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->revoke = $var;
    }

    /**
     * <code>bool revoke_null = 1003;</code>
     */
    public function getRevokeNull()
    {
        return $this->revoke_null;
    }

    /**
     * <code>bool revoke_null = 1003;</code>
     */
    public function setRevokeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->revoke_null = $var;
    }

}

