<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ImportBinaries_Ad.proto

namespace Dstore\Engine\Im_ImportBinaries_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_ImportBinaries_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue value_or_item_binaries = 1;</code>
     */
    private $value_or_item_binaries = null;
    /**
     * <code>bool value_or_item_binaries_null = 1001;</code>
     */
    private $value_or_item_binaries_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImImportBinariesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue value_or_item_binaries = 1;</code>
     */
    public function getValueOrItemBinaries()
    {
        return $this->value_or_item_binaries;
    }

    /**
     * <code>.dstore.values.IntegerValue value_or_item_binaries = 1;</code>
     */
    public function setValueOrItemBinaries(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_or_item_binaries = $var;
    }

    /**
     * <code>bool value_or_item_binaries_null = 1001;</code>
     */
    public function getValueOrItemBinariesNull()
    {
        return $this->value_or_item_binaries_null;
    }

    /**
     * <code>bool value_or_item_binaries_null = 1001;</code>
     */
    public function setValueOrItemBinariesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_or_item_binaries_null = $var;
    }

}

