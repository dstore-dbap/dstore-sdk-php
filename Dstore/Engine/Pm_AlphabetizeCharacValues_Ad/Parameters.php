<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_AlphabetizeCharacValues_Ad.proto

namespace Dstore\Engine\Pm_AlphabetizeCharacValues_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_AlphabetizeCharacValues_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue characteristic_id = 1;</code>
     */
    private $characteristic_id = null;
    /**
     * <code>bool characteristic_id_null = 1001;</code>
     */
    private $characteristic_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue descending = 2;</code>
     */
    private $descending = null;
    /**
     * <code>bool descending_null = 1002;</code>
     */
    private $descending_null = false;
    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 3;</code>
     */
    private $case_sensitive = null;
    /**
     * <code>bool case_sensitive_null = 1003;</code>
     */
    private $case_sensitive_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmAlphabetizeCharacValuesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue characteristic_id = 1;</code>
     */
    public function getCharacteristicId()
    {
        return $this->characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue characteristic_id = 1;</code>
     */
    public function setCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->characteristic_id = $var;
    }

    /**
     * <code>bool characteristic_id_null = 1001;</code>
     */
    public function getCharacteristicIdNull()
    {
        return $this->characteristic_id_null;
    }

    /**
     * <code>bool characteristic_id_null = 1001;</code>
     */
    public function setCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue descending = 2;</code>
     */
    public function getDescending()
    {
        return $this->descending;
    }

    /**
     * <code>.dstore.values.BooleanValue descending = 2;</code>
     */
    public function setDescending(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->descending = $var;
    }

    /**
     * <code>bool descending_null = 1002;</code>
     */
    public function getDescendingNull()
    {
        return $this->descending_null;
    }

    /**
     * <code>bool descending_null = 1002;</code>
     */
    public function setDescendingNull($var)
    {
        GPBUtil::checkBool($var);
        $this->descending_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 3;</code>
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 3;</code>
     */
    public function setCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->case_sensitive = $var;
    }

    /**
     * <code>bool case_sensitive_null = 1003;</code>
     */
    public function getCaseSensitiveNull()
    {
        return $this->case_sensitive_null;
    }

    /**
     * <code>bool case_sensitive_null = 1003;</code>
     */
    public function setCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive_null = $var;
    }

}

