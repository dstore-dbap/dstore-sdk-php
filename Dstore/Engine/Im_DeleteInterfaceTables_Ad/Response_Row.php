<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_DeleteInterfaceTables_Ad.proto

namespace Dstore\Engine\Im_DeleteInterfaceTables_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_DeleteInterfaceTables_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Name der erzeugten Tabelle inkl. Datenbank- und Owner-Information falls nötig (wenn sie also nicht in der Datenbank, in der diese Prozedur hier gespeichert ist, existiert)
     * </pre>
     *
     * <code>.dstore.values.StringValue created_table_name = 10001;</code>
     */
    private $created_table_name = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImDeleteInterfaceTablesAd::initOnce();
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
     * Name der erzeugten Tabelle inkl. Datenbank- und Owner-Information falls nötig (wenn sie also nicht in der Datenbank, in der diese Prozedur hier gespeichert ist, existiert)
     * </pre>
     *
     * <code>.dstore.values.StringValue created_table_name = 10001;</code>
     */
    public function getCreatedTableName()
    {
        return $this->created_table_name;
    }

    /**
     * <pre>
     * Name der erzeugten Tabelle inkl. Datenbank- und Owner-Information falls nötig (wenn sie also nicht in der Datenbank, in der diese Prozedur hier gespeichert ist, existiert)
     * </pre>
     *
     * <code>.dstore.values.StringValue created_table_name = 10001;</code>
     */
    public function setCreatedTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->created_table_name = $var;
    }

}

