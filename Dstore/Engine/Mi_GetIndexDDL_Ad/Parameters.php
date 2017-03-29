<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetIndexDDL_Ad.proto

namespace Dstore\Engine\Mi_GetIndexDDL_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetIndexDDL_Ad.Parameters</code>
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
     * <code>.dstore.values.StringValue index_name = 2;</code>
     */
    private $index_name = null;
    /**
     * <code>bool index_name_null = 1002;</code>
     */
    private $index_name_null = false;
    /**
     * <code>.dstore.values.StringValue database_name = 3;</code>
     */
    private $database_name = null;
    /**
     * <code>bool database_name_null = 1003;</code>
     */
    private $database_name_null = false;
    /**
     * <code>.dstore.values.BooleanValue fully_qualified_name_in_output = 4;</code>
     */
    private $fully_qualified_name_in_output = null;
    /**
     * <code>bool fully_qualified_name_in_output_null = 1004;</code>
     */
    private $fully_qualified_name_in_output_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetIndexDDLAd::initOnce();
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
     * <code>.dstore.values.StringValue index_name = 2;</code>
     */
    public function getIndexName()
    {
        return $this->index_name;
    }

    /**
     * <code>.dstore.values.StringValue index_name = 2;</code>
     */
    public function setIndexName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->index_name = $var;
    }

    /**
     * <code>bool index_name_null = 1002;</code>
     */
    public function getIndexNameNull()
    {
        return $this->index_name_null;
    }

    /**
     * <code>bool index_name_null = 1002;</code>
     */
    public function setIndexNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->index_name_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue database_name = 3;</code>
     */
    public function getDatabaseName()
    {
        return $this->database_name;
    }

    /**
     * <code>.dstore.values.StringValue database_name = 3;</code>
     */
    public function setDatabaseName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->database_name = $var;
    }

    /**
     * <code>bool database_name_null = 1003;</code>
     */
    public function getDatabaseNameNull()
    {
        return $this->database_name_null;
    }

    /**
     * <code>bool database_name_null = 1003;</code>
     */
    public function setDatabaseNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->database_name_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue fully_qualified_name_in_output = 4;</code>
     */
    public function getFullyQualifiedNameInOutput()
    {
        return $this->fully_qualified_name_in_output;
    }

    /**
     * <code>.dstore.values.BooleanValue fully_qualified_name_in_output = 4;</code>
     */
    public function setFullyQualifiedNameInOutput(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->fully_qualified_name_in_output = $var;
    }

    /**
     * <code>bool fully_qualified_name_in_output_null = 1004;</code>
     */
    public function getFullyQualifiedNameInOutputNull()
    {
        return $this->fully_qualified_name_in_output_null;
    }

    /**
     * <code>bool fully_qualified_name_in_output_null = 1004;</code>
     */
    public function setFullyQualifiedNameInOutputNull($var)
    {
        GPBUtil::checkBool($var);
        $this->fully_qualified_name_in_output_null = $var;
    }

}
