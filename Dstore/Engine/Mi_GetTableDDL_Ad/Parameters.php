<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTableDDL_Ad.proto

namespace Dstore\Engine\Mi_GetTableDDL_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetTableDDL_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue only_table_name = 1;</code>
     */
    private $only_table_name = null;
    /**
     * <code>bool only_table_name_null = 1001;</code>
     */
    private $only_table_name_null = false;
    /**
     * <code>.dstore.values.StringValue database_name = 2;</code>
     */
    private $database_name = null;
    /**
     * <code>bool database_name_null = 1002;</code>
     */
    private $database_name_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_only_column_def_as_result = 3;</code>
     */
    private $get_only_column_def_as_result = null;
    /**
     * <code>bool get_only_column_def_as_result_null = 1003;</code>
     */
    private $get_only_column_def_as_result_null = false;
    /**
     * <code>.dstore.values.BooleanValue fully_qualified_name_in_output = 4;</code>
     */
    private $fully_qualified_name_in_output = null;
    /**
     * <code>bool fully_qualified_name_in_output_null = 1004;</code>
     */
    private $fully_qualified_name_in_output_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetTableDDLAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue only_table_name = 1;</code>
     */
    public function getOnlyTableName()
    {
        return $this->only_table_name;
    }

    /**
     * <code>.dstore.values.StringValue only_table_name = 1;</code>
     */
    public function setOnlyTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->only_table_name = $var;
    }

    /**
     * <code>bool only_table_name_null = 1001;</code>
     */
    public function getOnlyTableNameNull()
    {
        return $this->only_table_name_null;
    }

    /**
     * <code>bool only_table_name_null = 1001;</code>
     */
    public function setOnlyTableNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_table_name_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue database_name = 2;</code>
     */
    public function getDatabaseName()
    {
        return $this->database_name;
    }

    /**
     * <code>.dstore.values.StringValue database_name = 2;</code>
     */
    public function setDatabaseName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->database_name = $var;
    }

    /**
     * <code>bool database_name_null = 1002;</code>
     */
    public function getDatabaseNameNull()
    {
        return $this->database_name_null;
    }

    /**
     * <code>bool database_name_null = 1002;</code>
     */
    public function setDatabaseNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->database_name_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_only_column_def_as_result = 3;</code>
     */
    public function getGetOnlyColumnDefAsResult()
    {
        return $this->get_only_column_def_as_result;
    }

    /**
     * <code>.dstore.values.BooleanValue get_only_column_def_as_result = 3;</code>
     */
    public function setGetOnlyColumnDefAsResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_only_column_def_as_result = $var;
    }

    /**
     * <code>bool get_only_column_def_as_result_null = 1003;</code>
     */
    public function getGetOnlyColumnDefAsResultNull()
    {
        return $this->get_only_column_def_as_result_null;
    }

    /**
     * <code>bool get_only_column_def_as_result_null = 1003;</code>
     */
    public function setGetOnlyColumnDefAsResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_only_column_def_as_result_null = $var;
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
