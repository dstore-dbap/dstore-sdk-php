<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_ModifyPredValsForCharacs_Ad.proto

namespace Dstore\Engine\Fo_ModifyPredValsForCharacs_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_ModifyPredValsForCharacs_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 1;</code>
     */
    private $posting_characteristic_id = null;
    /**
     * <code>bool posting_characteristic_id_null = 1001;</code>
     */
    private $posting_characteristic_id_null = false;
    /**
     * <code>.dstore.values.StringValue old_value = 2;</code>
     */
    private $old_value = null;
    /**
     * <code>bool old_value_null = 1002;</code>
     */
    private $old_value_null = false;
    /**
     * <code>.dstore.values.StringValue value = 3;</code>
     */
    private $value = null;
    /**
     * <code>bool value_null = 1003;</code>
     */
    private $value_null = false;
    /**
     * <code>.dstore.values.IntegerValue only_valid_for_forum_id = 4;</code>
     */
    private $only_valid_for_forum_id = null;
    /**
     * <code>bool only_valid_for_forum_id_null = 1004;</code>
     */
    private $only_valid_for_forum_id_null = false;
    /**
     * <code>.dstore.values.StringValue country = 5;</code>
     */
    private $country = null;
    /**
     * <code>bool country_null = 1005;</code>
     */
    private $country_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoModifyPredValsForCharacsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 1;</code>
     */
    public function getPostingCharacteristicId()
    {
        return $this->posting_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 1;</code>
     */
    public function setPostingCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->posting_characteristic_id = $var;
    }

    /**
     * <code>bool posting_characteristic_id_null = 1001;</code>
     */
    public function getPostingCharacteristicIdNull()
    {
        return $this->posting_characteristic_id_null;
    }

    /**
     * <code>bool posting_characteristic_id_null = 1001;</code>
     */
    public function setPostingCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue old_value = 2;</code>
     */
    public function getOldValue()
    {
        return $this->old_value;
    }

    /**
     * <code>.dstore.values.StringValue old_value = 2;</code>
     */
    public function setOldValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->old_value = $var;
    }

    /**
     * <code>bool old_value_null = 1002;</code>
     */
    public function getOldValueNull()
    {
        return $this->old_value_null;
    }

    /**
     * <code>bool old_value_null = 1002;</code>
     */
    public function setOldValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->old_value_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue value = 3;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>.dstore.values.StringValue value = 3;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <code>bool value_null = 1003;</code>
     */
    public function getValueNull()
    {
        return $this->value_null;
    }

    /**
     * <code>bool value_null = 1003;</code>
     */
    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue only_valid_for_forum_id = 4;</code>
     */
    public function getOnlyValidForForumId()
    {
        return $this->only_valid_for_forum_id;
    }

    /**
     * <code>.dstore.values.IntegerValue only_valid_for_forum_id = 4;</code>
     */
    public function setOnlyValidForForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->only_valid_for_forum_id = $var;
    }

    /**
     * <code>bool only_valid_for_forum_id_null = 1004;</code>
     */
    public function getOnlyValidForForumIdNull()
    {
        return $this->only_valid_for_forum_id_null;
    }

    /**
     * <code>bool only_valid_for_forum_id_null = 1004;</code>
     */
    public function setOnlyValidForForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_valid_for_forum_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue country = 5;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <code>.dstore.values.StringValue country = 5;</code>
     */
    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->country = $var;
    }

    /**
     * <code>bool country_null = 1005;</code>
     */
    public function getCountryNull()
    {
        return $this->country_null;
    }

    /**
     * <code>bool country_null = 1005;</code>
     */
    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

}

