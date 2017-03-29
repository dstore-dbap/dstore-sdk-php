<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyOrderContentInfo_Ad.proto

namespace Dstore\Engine\Om_ModifyOrderContentInfo_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyOrderContentInfo_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.BooleanValue change_all_or_nothing = 1;</code>
     */
    private $change_all_or_nothing = null;
    /**
     * <code>bool change_all_or_nothing_null = 1001;</code>
     */
    private $change_all_or_nothing_null = false;
    /**
     * <code>.dstore.values.BooleanValue only_new_data = 2;</code>
     */
    private $only_new_data = null;
    /**
     * <code>bool only_new_data_null = 1002;</code>
     */
    private $only_new_data_null = false;
    /**
     * <code>.dstore.values.StringValue country = 3;</code>
     */
    private $country = null;
    /**
     * <code>bool country_null = 1003;</code>
     */
    private $country_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyOrderContentInfoAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.BooleanValue change_all_or_nothing = 1;</code>
     */
    public function getChangeAllOrNothing()
    {
        return $this->change_all_or_nothing;
    }

    /**
     * <code>.dstore.values.BooleanValue change_all_or_nothing = 1;</code>
     */
    public function setChangeAllOrNothing(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->change_all_or_nothing = $var;
    }

    /**
     * <code>bool change_all_or_nothing_null = 1001;</code>
     */
    public function getChangeAllOrNothingNull()
    {
        return $this->change_all_or_nothing_null;
    }

    /**
     * <code>bool change_all_or_nothing_null = 1001;</code>
     */
    public function setChangeAllOrNothingNull($var)
    {
        GPBUtil::checkBool($var);
        $this->change_all_or_nothing_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue only_new_data = 2;</code>
     */
    public function getOnlyNewData()
    {
        return $this->only_new_data;
    }

    /**
     * <code>.dstore.values.BooleanValue only_new_data = 2;</code>
     */
    public function setOnlyNewData(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->only_new_data = $var;
    }

    /**
     * <code>bool only_new_data_null = 1002;</code>
     */
    public function getOnlyNewDataNull()
    {
        return $this->only_new_data_null;
    }

    /**
     * <code>bool only_new_data_null = 1002;</code>
     */
    public function setOnlyNewDataNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_new_data_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue country = 3;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <code>.dstore.values.StringValue country = 3;</code>
     */
    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->country = $var;
    }

    /**
     * <code>bool country_null = 1003;</code>
     */
    public function getCountryNull()
    {
        return $this->country_null;
    }

    /**
     * <code>bool country_null = 1003;</code>
     */
    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

}

