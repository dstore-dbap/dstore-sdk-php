<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetdStoreTables_Ad.proto

namespace Dstore\Engine\Do_GetdStoreTables_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.do_GetdStoreTables_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue table_name = 1;</code>
     */
    private $table_name = null;
    /**
     * <code>bool table_name_null = 1001;</code>
     */
    private $table_name_null = false;
    /**
     * <code>.dstore.values.IntegerValue table_category_id = 2;</code>
     */
    private $table_category_id = null;
    /**
     * <code>bool table_category_id_null = 1002;</code>
     */
    private $table_category_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\DoGetdStoreTablesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue table_name = 1;</code>
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * <code>.dstore.values.StringValue table_name = 1;</code>
     */
    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->table_name = $var;
    }

    /**
     * <code>bool table_name_null = 1001;</code>
     */
    public function getTableNameNull()
    {
        return $this->table_name_null;
    }

    /**
     * <code>bool table_name_null = 1001;</code>
     */
    public function setTableNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_name_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue table_category_id = 2;</code>
     */
    public function getTableCategoryId()
    {
        return $this->table_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue table_category_id = 2;</code>
     */
    public function setTableCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->table_category_id = $var;
    }

    /**
     * <code>bool table_category_id_null = 1002;</code>
     */
    public function getTableCategoryIdNull()
    {
        return $this->table_category_id_null;
    }

    /**
     * <code>bool table_category_id_null = 1002;</code>
     */
    public function setTableCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_category_id_null = $var;
    }

}

