<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetBinary_Pu.proto

namespace Dstore\Engine\Im_GetBinary_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetBinary_Pu.Parameters</code>
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
    /**
     * <code>.dstore.values.BooleanValue return_thumbnail_code = 2;</code>
     */
    private $return_thumbnail_code = null;
    /**
     * <code>bool return_thumbnail_code_null = 1002;</code>
     */
    private $return_thumbnail_code_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetBinaryPu::initOnce();
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

    /**
     * <code>.dstore.values.BooleanValue return_thumbnail_code = 2;</code>
     */
    public function getReturnThumbnailCode()
    {
        return $this->return_thumbnail_code;
    }

    /**
     * <code>.dstore.values.BooleanValue return_thumbnail_code = 2;</code>
     */
    public function setReturnThumbnailCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->return_thumbnail_code = $var;
    }

    /**
     * <code>bool return_thumbnail_code_null = 1002;</code>
     */
    public function getReturnThumbnailCodeNull()
    {
        return $this->return_thumbnail_code_null;
    }

    /**
     * <code>bool return_thumbnail_code_null = 1002;</code>
     */
    public function setReturnThumbnailCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->return_thumbnail_code_null = $var;
    }

}

