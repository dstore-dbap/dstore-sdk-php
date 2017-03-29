<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_DumpDatabase_Ad.proto

namespace Dstore\Engine\Mi_DumpDatabase_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_DumpDatabase_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue database_name = 1;</code>
     */
    private $database_name = null;
    /**
     * <code>bool database_name_null = 1001;</code>
     */
    private $database_name_null = false;
    /**
     * <code>.dstore.values.IntegerValue max_size_per_dump_file_mb = 2;</code>
     */
    private $max_size_per_dump_file_mb = null;
    /**
     * <code>bool max_size_per_dump_file_mb_null = 1002;</code>
     */
    private $max_size_per_dump_file_mb_null = false;
    /**
     * <code>.dstore.values.StringValue use_predefined_devices_pattern = 3;</code>
     */
    private $use_predefined_devices_pattern = null;
    /**
     * <code>bool use_predefined_devices_pattern_null = 1003;</code>
     */
    private $use_predefined_devices_pattern_null = false;
    /**
     * <code>.dstore.values.BooleanValue truncate_transaction_log = 4;</code>
     */
    private $truncate_transaction_log = null;
    /**
     * <code>bool truncate_transaction_log_null = 1004;</code>
     */
    private $truncate_transaction_log_null = false;
    /**
     * <code>.dstore.values.IntegerValue compress_level = 5;</code>
     */
    private $compress_level = null;
    /**
     * <code>bool compress_level_null = 1005;</code>
     */
    private $compress_level_null = false;
    /**
     * <code>.dstore.values.IntegerValue number_of_devices = 6;</code>
     */
    private $number_of_devices = null;
    /**
     * <code>bool number_of_devices_null = 1006;</code>
     */
    private $number_of_devices_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiDumpDatabaseAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue database_name = 1;</code>
     */
    public function getDatabaseName()
    {
        return $this->database_name;
    }

    /**
     * <code>.dstore.values.StringValue database_name = 1;</code>
     */
    public function setDatabaseName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->database_name = $var;
    }

    /**
     * <code>bool database_name_null = 1001;</code>
     */
    public function getDatabaseNameNull()
    {
        return $this->database_name_null;
    }

    /**
     * <code>bool database_name_null = 1001;</code>
     */
    public function setDatabaseNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->database_name_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue max_size_per_dump_file_mb = 2;</code>
     */
    public function getMaxSizePerDumpFileMb()
    {
        return $this->max_size_per_dump_file_mb;
    }

    /**
     * <code>.dstore.values.IntegerValue max_size_per_dump_file_mb = 2;</code>
     */
    public function setMaxSizePerDumpFileMb(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->max_size_per_dump_file_mb = $var;
    }

    /**
     * <code>bool max_size_per_dump_file_mb_null = 1002;</code>
     */
    public function getMaxSizePerDumpFileMbNull()
    {
        return $this->max_size_per_dump_file_mb_null;
    }

    /**
     * <code>bool max_size_per_dump_file_mb_null = 1002;</code>
     */
    public function setMaxSizePerDumpFileMbNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_size_per_dump_file_mb_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue use_predefined_devices_pattern = 3;</code>
     */
    public function getUsePredefinedDevicesPattern()
    {
        return $this->use_predefined_devices_pattern;
    }

    /**
     * <code>.dstore.values.StringValue use_predefined_devices_pattern = 3;</code>
     */
    public function setUsePredefinedDevicesPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->use_predefined_devices_pattern = $var;
    }

    /**
     * <code>bool use_predefined_devices_pattern_null = 1003;</code>
     */
    public function getUsePredefinedDevicesPatternNull()
    {
        return $this->use_predefined_devices_pattern_null;
    }

    /**
     * <code>bool use_predefined_devices_pattern_null = 1003;</code>
     */
    public function setUsePredefinedDevicesPatternNull($var)
    {
        GPBUtil::checkBool($var);
        $this->use_predefined_devices_pattern_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue truncate_transaction_log = 4;</code>
     */
    public function getTruncateTransactionLog()
    {
        return $this->truncate_transaction_log;
    }

    /**
     * <code>.dstore.values.BooleanValue truncate_transaction_log = 4;</code>
     */
    public function setTruncateTransactionLog(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->truncate_transaction_log = $var;
    }

    /**
     * <code>bool truncate_transaction_log_null = 1004;</code>
     */
    public function getTruncateTransactionLogNull()
    {
        return $this->truncate_transaction_log_null;
    }

    /**
     * <code>bool truncate_transaction_log_null = 1004;</code>
     */
    public function setTruncateTransactionLogNull($var)
    {
        GPBUtil::checkBool($var);
        $this->truncate_transaction_log_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue compress_level = 5;</code>
     */
    public function getCompressLevel()
    {
        return $this->compress_level;
    }

    /**
     * <code>.dstore.values.IntegerValue compress_level = 5;</code>
     */
    public function setCompressLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->compress_level = $var;
    }

    /**
     * <code>bool compress_level_null = 1005;</code>
     */
    public function getCompressLevelNull()
    {
        return $this->compress_level_null;
    }

    /**
     * <code>bool compress_level_null = 1005;</code>
     */
    public function setCompressLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->compress_level_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_devices = 6;</code>
     */
    public function getNumberOfDevices()
    {
        return $this->number_of_devices;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_devices = 6;</code>
     */
    public function setNumberOfDevices(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->number_of_devices = $var;
    }

    /**
     * <code>bool number_of_devices_null = 1006;</code>
     */
    public function getNumberOfDevicesNull()
    {
        return $this->number_of_devices_null;
    }

    /**
     * <code>bool number_of_devices_null = 1006;</code>
     */
    public function setNumberOfDevicesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->number_of_devices_null = $var;
    }

}

