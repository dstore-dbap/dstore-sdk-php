<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetProcExecRights_User_Ad.proto

namespace Dstore\Engine\Mi_GetProcExecRights_User_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetProcExecRights_User_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * "0" : Ausführungsverbot"1" : Generelles Ausführungsrecht"2" : Prozedur darf nur in einer anderen Prozedur ausgeführt werden"3" : Prozedur darf nur in einer Prozedur ausgeführt werden, die wiederum in einer Prozedur ausgeführt wirdusw.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue execution_right = 10001;</code>
     */
    private $execution_right = null;
    /**
     * <pre>
     * ID einer registrierten Prozedur
     * </pre>
     *
     * <code>.dstore.values.IntegerValue procedure_id = 10002;</code>
     */
    private $procedure_id = null;
    /**
     * <pre>
     * Name des Benutzers "UserID"
     * </pre>
     *
     * <code>.dstore.values.StringValue user_name = 10003;</code>
     */
    private $user_name = null;
    /**
     * <pre>
     * Name der Prozedur "ProcedureID"
     * </pre>
     *
     * <code>.dstore.values.StringValue procedure_name = 10004;</code>
     */
    private $procedure_name = null;
    /**
     * <pre>
     * ID eines "dStore"-Benutzers, der in "UserInfo" registriert ist, für den das Recht "ExecutionRight" für die Prozedur "ProcedureID" konfiguriert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10005;</code>
     */
    private $user_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetProcExecRightsUserAd::initOnce();
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
     * "0" : Ausführungsverbot"1" : Generelles Ausführungsrecht"2" : Prozedur darf nur in einer anderen Prozedur ausgeführt werden"3" : Prozedur darf nur in einer Prozedur ausgeführt werden, die wiederum in einer Prozedur ausgeführt wirdusw.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue execution_right = 10001;</code>
     */
    public function getExecutionRight()
    {
        return $this->execution_right;
    }

    /**
     * <pre>
     * "0" : Ausführungsverbot"1" : Generelles Ausführungsrecht"2" : Prozedur darf nur in einer anderen Prozedur ausgeführt werden"3" : Prozedur darf nur in einer Prozedur ausgeführt werden, die wiederum in einer Prozedur ausgeführt wirdusw.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue execution_right = 10001;</code>
     */
    public function setExecutionRight(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->execution_right = $var;
    }

    /**
     * <pre>
     * ID einer registrierten Prozedur
     * </pre>
     *
     * <code>.dstore.values.IntegerValue procedure_id = 10002;</code>
     */
    public function getProcedureId()
    {
        return $this->procedure_id;
    }

    /**
     * <pre>
     * ID einer registrierten Prozedur
     * </pre>
     *
     * <code>.dstore.values.IntegerValue procedure_id = 10002;</code>
     */
    public function setProcedureId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->procedure_id = $var;
    }

    /**
     * <pre>
     * Name des Benutzers "UserID"
     * </pre>
     *
     * <code>.dstore.values.StringValue user_name = 10003;</code>
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * <pre>
     * Name des Benutzers "UserID"
     * </pre>
     *
     * <code>.dstore.values.StringValue user_name = 10003;</code>
     */
    public function setUserName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->user_name = $var;
    }

    /**
     * <pre>
     * Name der Prozedur "ProcedureID"
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
     * Name der Prozedur "ProcedureID"
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
     * ID eines "dStore"-Benutzers, der in "UserInfo" registriert ist, für den das Recht "ExecutionRight" für die Prozedur "ProcedureID" konfiguriert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10005;</code>
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * <pre>
     * ID eines "dStore"-Benutzers, der in "UserInfo" registriert ist, für den das Recht "ExecutionRight" für die Prozedur "ProcedureID" konfiguriert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10005;</code>
     */
    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_id = $var;
    }

}
