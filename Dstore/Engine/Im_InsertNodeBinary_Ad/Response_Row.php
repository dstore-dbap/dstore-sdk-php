<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_InsertNodeBinary_Ad.proto

namespace Dstore\Engine\Im_InsertNodeBinary_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_InsertNodeBinary_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID des neu angelegten Binärobjektes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10001;</code>
     */
    private $binary_code_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImInsertNodeBinaryAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function getRowId()
    {
        return $this->row_id;
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    /**
     * <pre>
     * ID des neu angelegten Binärobjektes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10001;</code>
     */
    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    /**
     * <pre>
     * ID des neu angelegten Binärobjektes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10001;</code>
     */
    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_code_id = $var;
    }

}

