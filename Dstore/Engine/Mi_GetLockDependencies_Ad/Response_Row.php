<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetLockDependencies_Ad.proto

namespace Dstore\Engine\Mi_GetLockDependencies_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetLockDependencies_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Name der Tabelle, die gerade ge"locked" ist/wird, und somit Ursache für die "Blockade" sein kann
     * </pre>
     *
     * <code>.dstore.values.StringValue table_name = 10001;</code>
     */
    private $table_name = null;
    /**
     * <pre>
     * ID eines anderen Prozesses, durch den der Prozeß "ServerProcessID" ge"blocked" wird
     * </pre>
     *
     * <code>.dstore.values.IntegerValue blocking_process_id = 10002;</code>
     */
    private $blocking_process_id = null;
    /**
     * <pre>
     * Was für eine Art von Kommando wird vom Prozeß "ServerProcessID" gerade ausgeführt
     * </pre>
     *
     * <code>.dstore.values.StringValue command = 10003;</code>
     */
    private $command = null;
    /**
     * <pre>
     * Eine Server-Prozeß-ID
     * </pre>
     *
     * <code>.dstore.values.IntegerValue server_process_id = 10004;</code>
     */
    private $server_process_id = null;
    /**
     * <pre>
     * Name der Datenbank, in der die Tabelle "TableName" liegt
     * </pre>
     *
     * <code>.dstore.values.StringValue database_name = 10005;</code>
     */
    private $database_name = null;
    /**
     * <pre>
     * Art des Locks ("Sh_table", "Ex_page", etc.) auf "TableName"
     * </pre>
     *
     * <code>.dstore.values.StringValue lock_type = 10006;</code>
     */
    private $lock_type = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetLockDependenciesAd::initOnce();
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
     * Name der Tabelle, die gerade ge"locked" ist/wird, und somit Ursache für die "Blockade" sein kann
     * </pre>
     *
     * <code>.dstore.values.StringValue table_name = 10001;</code>
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * <pre>
     * Name der Tabelle, die gerade ge"locked" ist/wird, und somit Ursache für die "Blockade" sein kann
     * </pre>
     *
     * <code>.dstore.values.StringValue table_name = 10001;</code>
     */
    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->table_name = $var;
    }

    /**
     * <pre>
     * ID eines anderen Prozesses, durch den der Prozeß "ServerProcessID" ge"blocked" wird
     * </pre>
     *
     * <code>.dstore.values.IntegerValue blocking_process_id = 10002;</code>
     */
    public function getBlockingProcessId()
    {
        return $this->blocking_process_id;
    }

    /**
     * <pre>
     * ID eines anderen Prozesses, durch den der Prozeß "ServerProcessID" ge"blocked" wird
     * </pre>
     *
     * <code>.dstore.values.IntegerValue blocking_process_id = 10002;</code>
     */
    public function setBlockingProcessId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->blocking_process_id = $var;
    }

    /**
     * <pre>
     * Was für eine Art von Kommando wird vom Prozeß "ServerProcessID" gerade ausgeführt
     * </pre>
     *
     * <code>.dstore.values.StringValue command = 10003;</code>
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * <pre>
     * Was für eine Art von Kommando wird vom Prozeß "ServerProcessID" gerade ausgeführt
     * </pre>
     *
     * <code>.dstore.values.StringValue command = 10003;</code>
     */
    public function setCommand(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->command = $var;
    }

    /**
     * <pre>
     * Eine Server-Prozeß-ID
     * </pre>
     *
     * <code>.dstore.values.IntegerValue server_process_id = 10004;</code>
     */
    public function getServerProcessId()
    {
        return $this->server_process_id;
    }

    /**
     * <pre>
     * Eine Server-Prozeß-ID
     * </pre>
     *
     * <code>.dstore.values.IntegerValue server_process_id = 10004;</code>
     */
    public function setServerProcessId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->server_process_id = $var;
    }

    /**
     * <pre>
     * Name der Datenbank, in der die Tabelle "TableName" liegt
     * </pre>
     *
     * <code>.dstore.values.StringValue database_name = 10005;</code>
     */
    public function getDatabaseName()
    {
        return $this->database_name;
    }

    /**
     * <pre>
     * Name der Datenbank, in der die Tabelle "TableName" liegt
     * </pre>
     *
     * <code>.dstore.values.StringValue database_name = 10005;</code>
     */
    public function setDatabaseName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->database_name = $var;
    }

    /**
     * <pre>
     * Art des Locks ("Sh_table", "Ex_page", etc.) auf "TableName"
     * </pre>
     *
     * <code>.dstore.values.StringValue lock_type = 10006;</code>
     */
    public function getLockType()
    {
        return $this->lock_type;
    }

    /**
     * <pre>
     * Art des Locks ("Sh_table", "Ex_page", etc.) auf "TableName"
     * </pre>
     *
     * <code>.dstore.values.StringValue lock_type = 10006;</code>
     */
    public function setLockType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->lock_type = $var;
    }

}

