<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetBinary_Ad.proto

namespace Dstore\Engine\Im_GetBinary_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetBinary_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue binary_code_id = 1;</code>
     */
    private $binary_code_id = null;
    /**
     * <code>bool binary_code_id_null = 1001;</code>
     */
    private $binary_code_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetBinaryAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue binary_code_id = 1;</code>
     */
    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    /**
     * <code>.dstore.values.IntegerValue binary_code_id = 1;</code>
     */
    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_code_id = $var;
    }

    /**
     * <code>bool binary_code_id_null = 1001;</code>
     */
    public function getBinaryCodeIdNull()
    {
        return $this->binary_code_id_null;
    }

    /**
     * <code>bool binary_code_id_null = 1001;</code>
     */
    public function setBinaryCodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_code_id_null = $var;
    }

}
