<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetMetaInformationTypes_Ad.proto

namespace Dstore\Engine\Mi_GetMetaInformationTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetMetaInformationTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue table_id = 1;</code>
     */
    private $table_id = null;
    /**
     * <code>bool table_id_null = 1001;</code>
     */
    private $table_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetMetaInformationTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue table_id = 1;</code>
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * <code>.dstore.values.IntegerValue table_id = 1;</code>
     */
    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->table_id = $var;
    }

    /**
     * <code>bool table_id_null = 1001;</code>
     */
    public function getTableIdNull()
    {
        return $this->table_id_null;
    }

    /**
     * <code>bool table_id_null = 1001;</code>
     */
    public function setTableIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_id_null = $var;
    }

}
