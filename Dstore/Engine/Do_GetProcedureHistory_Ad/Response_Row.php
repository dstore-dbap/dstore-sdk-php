<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcedureHistory_Ad.proto

namespace Dstore\Engine\Do_GetProcedureHistory_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.do_GetProcedureHistory_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * (Optionaler) Änderungskommentar (bzw. ein Hinweis auf die erstmalige Erstellung) für (von) "ProcedureName"
     * </pre>
     *
     * <code>.dstore.values.StringValue comment = 10001;</code>
     */
    private $comment = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge von "dStoreVersion" innerhalb aller dStore-Versionen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue version_sort_no = 10002;</code>
     */
    private $version_sort_no = null;
    /**
     * <pre>
     * dStore-Version, in der "ProcedureName" erstellt/geändert wurde
     * </pre>
     *
     * <code>.dstore.values.StringValue dstore_version = 10003;</code>
     */
    private $dstore_version = null;
    /**
     * <pre>
     * Name einer Prozedur (natürlich identisch mit "&#64;ProcedureName" wenn angegeben)
     * </pre>
     *
     * <code>.dstore.values.StringValue procedure_name = 10004;</code>
     */
    private $procedure_name = null;
    /**
     * <pre>
     * Gibt an, ob auch die (Haupt-)Doku von "ProcedureName" in der Version "dStoreVersion" aktualisiert wurde ("1") oder nicht ("0")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue main_docu_updated = 10005;</code>
     */
    private $main_docu_updated = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\DoGetProcedureHistoryAd::initOnce();
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
     * (Optionaler) Änderungskommentar (bzw. ein Hinweis auf die erstmalige Erstellung) für (von) "ProcedureName"
     * </pre>
     *
     * <code>.dstore.values.StringValue comment = 10001;</code>
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * <pre>
     * (Optionaler) Änderungskommentar (bzw. ein Hinweis auf die erstmalige Erstellung) für (von) "ProcedureName"
     * </pre>
     *
     * <code>.dstore.values.StringValue comment = 10001;</code>
     */
    public function setComment(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->comment = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "dStoreVersion" innerhalb aller dStore-Versionen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue version_sort_no = 10002;</code>
     */
    public function getVersionSortNo()
    {
        return $this->version_sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "dStoreVersion" innerhalb aller dStore-Versionen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue version_sort_no = 10002;</code>
     */
    public function setVersionSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->version_sort_no = $var;
    }

    /**
     * <pre>
     * dStore-Version, in der "ProcedureName" erstellt/geändert wurde
     * </pre>
     *
     * <code>.dstore.values.StringValue dstore_version = 10003;</code>
     */
    public function getDstoreVersion()
    {
        return $this->dstore_version;
    }

    /**
     * <pre>
     * dStore-Version, in der "ProcedureName" erstellt/geändert wurde
     * </pre>
     *
     * <code>.dstore.values.StringValue dstore_version = 10003;</code>
     */
    public function setDstoreVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->dstore_version = $var;
    }

    /**
     * <pre>
     * Name einer Prozedur (natürlich identisch mit "&#64;ProcedureName" wenn angegeben)
     * </pre>
     *
     * <code>.dstore.values.StringValue procedure_name = 10004;</code>
     */
    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    /**
     * <pre>
     * Name einer Prozedur (natürlich identisch mit "&#64;ProcedureName" wenn angegeben)
     * </pre>
     *
     * <code>.dstore.values.StringValue procedure_name = 10004;</code>
     */
    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->procedure_name = $var;
    }

    /**
     * <pre>
     * Gibt an, ob auch die (Haupt-)Doku von "ProcedureName" in der Version "dStoreVersion" aktualisiert wurde ("1") oder nicht ("0")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue main_docu_updated = 10005;</code>
     */
    public function getMainDocuUpdated()
    {
        return $this->main_docu_updated;
    }

    /**
     * <pre>
     * Gibt an, ob auch die (Haupt-)Doku von "ProcedureName" in der Version "dStoreVersion" aktualisiert wurde ("1") oder nicht ("0")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue main_docu_updated = 10005;</code>
     */
    public function setMainDocuUpdated(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->main_docu_updated = $var;
    }

}
