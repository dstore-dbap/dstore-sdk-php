<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/ac_GetActions_Ad.proto

namespace Dstore\Engine\Ac_GetActions_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.ac_GetActions_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Status der "Action"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue status = 10001;</code>
     */
    private $status = null;
    /**
     * <pre>
     * ID einer "Action"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue action_id = 10002;</code>
     */
    private $action_id = null;
    /**
     * <pre>
     * Aufruf (Kommando) des Programms, mit dem die "Action" abgearbeitet werden soll (z.B. "/usr/bin/mail")
     * </pre>
     *
     * <code>.dstore.values.StringValue command = 10003;</code>
     */
    private $command = null;
    /**
     * <pre>
     * Zeitpunkt der Erstellung der "Action"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue date_and_time = 10004;</code>
     */
    private $date_and_time = null;
    /**
     * <pre>
     * ID des Kommandos (bzw. Programms), mit dem die "Action" abgearbeitet werden soll
     * </pre>
     *
     * <code>.dstore.values.IntegerValue command_id = 10005;</code>
     */
    private $command_id = null;
    /**
     * <pre>
     * Wert zum "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_value = 20003;</code>
     */
    private $parameter_value = null;
    /**
     * <pre>
     * Name eines Parameters, der zur Abarbeitung benötigt wird (z.B. "OrderID" bei einer Bestell-Bestätigung per Mail)
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 20006;</code>
     */
    private $parameter_name = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\AcGetActionsAd::initOnce();
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
     * Status der "Action"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue status = 10001;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <pre>
     * Status der "Action"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue status = 10001;</code>
     */
    public function setStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->status = $var;
    }

    /**
     * <pre>
     * ID einer "Action"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue action_id = 10002;</code>
     */
    public function getActionId()
    {
        return $this->action_id;
    }

    /**
     * <pre>
     * ID einer "Action"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue action_id = 10002;</code>
     */
    public function setActionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->action_id = $var;
    }

    /**
     * <pre>
     * Aufruf (Kommando) des Programms, mit dem die "Action" abgearbeitet werden soll (z.B. "/usr/bin/mail")
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
     * Aufruf (Kommando) des Programms, mit dem die "Action" abgearbeitet werden soll (z.B. "/usr/bin/mail")
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
     * Zeitpunkt der Erstellung der "Action"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue date_and_time = 10004;</code>
     */
    public function getDateAndTime()
    {
        return $this->date_and_time;
    }

    /**
     * <pre>
     * Zeitpunkt der Erstellung der "Action"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue date_and_time = 10004;</code>
     */
    public function setDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->date_and_time = $var;
    }

    /**
     * <pre>
     * ID des Kommandos (bzw. Programms), mit dem die "Action" abgearbeitet werden soll
     * </pre>
     *
     * <code>.dstore.values.IntegerValue command_id = 10005;</code>
     */
    public function getCommandId()
    {
        return $this->command_id;
    }

    /**
     * <pre>
     * ID des Kommandos (bzw. Programms), mit dem die "Action" abgearbeitet werden soll
     * </pre>
     *
     * <code>.dstore.values.IntegerValue command_id = 10005;</code>
     */
    public function setCommandId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->command_id = $var;
    }

    /**
     * <pre>
     * Wert zum "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_value = 20003;</code>
     */
    public function getParameterValue()
    {
        return $this->parameter_value;
    }

    /**
     * <pre>
     * Wert zum "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_value = 20003;</code>
     */
    public function setParameterValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->parameter_value = $var;
    }

    /**
     * <pre>
     * Name eines Parameters, der zur Abarbeitung benötigt wird (z.B. "OrderID" bei einer Bestell-Bestätigung per Mail)
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 20006;</code>
     */
    public function getParameterName()
    {
        return $this->parameter_name;
    }

    /**
     * <pre>
     * Name eines Parameters, der zur Abarbeitung benötigt wird (z.B. "OrderID" bei einer Bestell-Bestätigung per Mail)
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 20006;</code>
     */
    public function setParameterName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->parameter_name = $var;
    }

}
