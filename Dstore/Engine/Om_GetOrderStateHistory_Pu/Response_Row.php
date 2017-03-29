<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderStateHistory_Pu.proto

namespace Dstore\Engine\Om_GetOrderStateHistory_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetOrderStateHistory_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Wann wurde der Status-Wechsel durchgeführt
     * </pre>
     *
     * <code>.dstore.values.TimestampValue changing_date_and_time = 10001;</code>
     */
    private $changing_date_and_time = null;
    /**
     * <pre>
     * ID eines Auftrags(-Positions)-Status AUF den die Position "OrderContentID" (vom Status "FromOrderStateID") gesetzt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_order_state_id = 10002;</code>
     */
    private $to_order_state_id = null;
    /**
     * <pre>
     * Name des "dStore"-Benutzers "UserID"
     * </pre>
     *
     * <code>.dstore.values.StringValue user_name = 10003;</code>
     */
    private $user_name = null;
    /**
     * <pre>
     * Beschreibung des Status "ToOrderStateID" für den Kunden. Wenn eine "&#64;LanguageID" übergeben wurde, dann wird versucht, eine Übersetzung diese Textes zu ermitteln.
     * </pre>
     *
     * <code>.dstore.values.StringValue to_order_state_id_public_descr = 10004;</code>
     */
    private $to_order_state_id_public_descr = null;
    /**
     * <pre>
     * ID des Auftrags, zu dem die Position "OrderContentID" gehört
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_id = 10005;</code>
     */
    private $order_id = null;
    /**
     * <pre>
     * Bezeichnung des Status "ToOrderStateID"
     * </pre>
     *
     * <code>.dstore.values.StringValue to_order_state = 10006;</code>
     */
    private $to_order_state = null;
    /**
     * <pre>
     * ID einer Position des Auftrags "OrderID", dessen Status von "FromOrderStateID" nach "ToOrderStateID" gewechselt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_content_id = 10007;</code>
     */
    private $order_content_id = null;
    /**
     * <pre>
     * Beschreibung des Status "FromOrderStateID" für den Kunden. Wenn eine "&#64;LanguageID" übergeben wurde, dann wird versucht, eine Übersetzung diese Textes zu ermitteln.
     * </pre>
     *
     * <code>.dstore.values.StringValue from_order_state_public_desc = 10008;</code>
     */
    private $from_order_state_public_desc = null;
    /**
     * <pre>
     * Bezeichnung des Status "FromOrderStateID"
     * </pre>
     *
     * <code>.dstore.values.StringValue from_order_state = 10009;</code>
     */
    private $from_order_state = null;
    /**
     * <pre>
     * ID des "dStore"-Benutzers (der in "UserInfo" registriert ist) der den Status-Wechsel vorgenommen hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10010;</code>
     */
    private $user_id = null;
    /**
     * <pre>
     * "0" : Es wurde nur der Status der Position "OrderContentID" des Auftrags "OrderID" geändert"1" : Der Status-Wechsel wurde für ALLE Positionen des Auftrags "OrderID" vorgenommen
     * </pre>
     *
     * <code>.dstore.values.BooleanValue complete_order = 10011;</code>
     */
    private $complete_order = null;
    /**
     * <pre>
     * ID eines Auftrags(-Positions)-Status VON dem die Position "OrderContentID" (in den Status "ToOrderStateID") gewechselt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_order_state_id = 10012;</code>
     */
    private $from_order_state_id = null;
    /**
     * <pre>
     * "ChangingDateAndTime" als String im Format : "15.03.2001 20:48:13"
     * </pre>
     *
     * <code>.dstore.values.StringValue changing_date_and_time_char = 10013;</code>
     */
    private $changing_date_and_time_char = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetOrderStateHistoryPu::initOnce();
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
     * Wann wurde der Status-Wechsel durchgeführt
     * </pre>
     *
     * <code>.dstore.values.TimestampValue changing_date_and_time = 10001;</code>
     */
    public function getChangingDateAndTime()
    {
        return $this->changing_date_and_time;
    }

    /**
     * <pre>
     * Wann wurde der Status-Wechsel durchgeführt
     * </pre>
     *
     * <code>.dstore.values.TimestampValue changing_date_and_time = 10001;</code>
     */
    public function setChangingDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->changing_date_and_time = $var;
    }

    /**
     * <pre>
     * ID eines Auftrags(-Positions)-Status AUF den die Position "OrderContentID" (vom Status "FromOrderStateID") gesetzt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_order_state_id = 10002;</code>
     */
    public function getToOrderStateId()
    {
        return $this->to_order_state_id;
    }

    /**
     * <pre>
     * ID eines Auftrags(-Positions)-Status AUF den die Position "OrderContentID" (vom Status "FromOrderStateID") gesetzt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_order_state_id = 10002;</code>
     */
    public function setToOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->to_order_state_id = $var;
    }

    /**
     * <pre>
     * Name des "dStore"-Benutzers "UserID"
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
     * Name des "dStore"-Benutzers "UserID"
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
     * Beschreibung des Status "ToOrderStateID" für den Kunden. Wenn eine "&#64;LanguageID" übergeben wurde, dann wird versucht, eine Übersetzung diese Textes zu ermitteln.
     * </pre>
     *
     * <code>.dstore.values.StringValue to_order_state_id_public_descr = 10004;</code>
     */
    public function getToOrderStateIdPublicDescr()
    {
        return $this->to_order_state_id_public_descr;
    }

    /**
     * <pre>
     * Beschreibung des Status "ToOrderStateID" für den Kunden. Wenn eine "&#64;LanguageID" übergeben wurde, dann wird versucht, eine Übersetzung diese Textes zu ermitteln.
     * </pre>
     *
     * <code>.dstore.values.StringValue to_order_state_id_public_descr = 10004;</code>
     */
    public function setToOrderStateIdPublicDescr(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->to_order_state_id_public_descr = $var;
    }

    /**
     * <pre>
     * ID des Auftrags, zu dem die Position "OrderContentID" gehört
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_id = 10005;</code>
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * <pre>
     * ID des Auftrags, zu dem die Position "OrderContentID" gehört
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_id = 10005;</code>
     */
    public function setOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Status "ToOrderStateID"
     * </pre>
     *
     * <code>.dstore.values.StringValue to_order_state = 10006;</code>
     */
    public function getToOrderState()
    {
        return $this->to_order_state;
    }

    /**
     * <pre>
     * Bezeichnung des Status "ToOrderStateID"
     * </pre>
     *
     * <code>.dstore.values.StringValue to_order_state = 10006;</code>
     */
    public function setToOrderState(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->to_order_state = $var;
    }

    /**
     * <pre>
     * ID einer Position des Auftrags "OrderID", dessen Status von "FromOrderStateID" nach "ToOrderStateID" gewechselt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_content_id = 10007;</code>
     */
    public function getOrderContentId()
    {
        return $this->order_content_id;
    }

    /**
     * <pre>
     * ID einer Position des Auftrags "OrderID", dessen Status von "FromOrderStateID" nach "ToOrderStateID" gewechselt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_content_id = 10007;</code>
     */
    public function setOrderContentId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_content_id = $var;
    }

    /**
     * <pre>
     * Beschreibung des Status "FromOrderStateID" für den Kunden. Wenn eine "&#64;LanguageID" übergeben wurde, dann wird versucht, eine Übersetzung diese Textes zu ermitteln.
     * </pre>
     *
     * <code>.dstore.values.StringValue from_order_state_public_desc = 10008;</code>
     */
    public function getFromOrderStatePublicDesc()
    {
        return $this->from_order_state_public_desc;
    }

    /**
     * <pre>
     * Beschreibung des Status "FromOrderStateID" für den Kunden. Wenn eine "&#64;LanguageID" übergeben wurde, dann wird versucht, eine Übersetzung diese Textes zu ermitteln.
     * </pre>
     *
     * <code>.dstore.values.StringValue from_order_state_public_desc = 10008;</code>
     */
    public function setFromOrderStatePublicDesc(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->from_order_state_public_desc = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Status "FromOrderStateID"
     * </pre>
     *
     * <code>.dstore.values.StringValue from_order_state = 10009;</code>
     */
    public function getFromOrderState()
    {
        return $this->from_order_state;
    }

    /**
     * <pre>
     * Bezeichnung des Status "FromOrderStateID"
     * </pre>
     *
     * <code>.dstore.values.StringValue from_order_state = 10009;</code>
     */
    public function setFromOrderState(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->from_order_state = $var;
    }

    /**
     * <pre>
     * ID des "dStore"-Benutzers (der in "UserInfo" registriert ist) der den Status-Wechsel vorgenommen hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10010;</code>
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * <pre>
     * ID des "dStore"-Benutzers (der in "UserInfo" registriert ist) der den Status-Wechsel vorgenommen hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10010;</code>
     */
    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_id = $var;
    }

    /**
     * <pre>
     * "0" : Es wurde nur der Status der Position "OrderContentID" des Auftrags "OrderID" geändert"1" : Der Status-Wechsel wurde für ALLE Positionen des Auftrags "OrderID" vorgenommen
     * </pre>
     *
     * <code>.dstore.values.BooleanValue complete_order = 10011;</code>
     */
    public function getCompleteOrder()
    {
        return $this->complete_order;
    }

    /**
     * <pre>
     * "0" : Es wurde nur der Status der Position "OrderContentID" des Auftrags "OrderID" geändert"1" : Der Status-Wechsel wurde für ALLE Positionen des Auftrags "OrderID" vorgenommen
     * </pre>
     *
     * <code>.dstore.values.BooleanValue complete_order = 10011;</code>
     */
    public function setCompleteOrder(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->complete_order = $var;
    }

    /**
     * <pre>
     * ID eines Auftrags(-Positions)-Status VON dem die Position "OrderContentID" (in den Status "ToOrderStateID") gewechselt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_order_state_id = 10012;</code>
     */
    public function getFromOrderStateId()
    {
        return $this->from_order_state_id;
    }

    /**
     * <pre>
     * ID eines Auftrags(-Positions)-Status VON dem die Position "OrderContentID" (in den Status "ToOrderStateID") gewechselt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_order_state_id = 10012;</code>
     */
    public function setFromOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_order_state_id = $var;
    }

    /**
     * <pre>
     * "ChangingDateAndTime" als String im Format : "15.03.2001 20:48:13"
     * </pre>
     *
     * <code>.dstore.values.StringValue changing_date_and_time_char = 10013;</code>
     */
    public function getChangingDateAndTimeChar()
    {
        return $this->changing_date_and_time_char;
    }

    /**
     * <pre>
     * "ChangingDateAndTime" als String im Format : "15.03.2001 20:48:13"
     * </pre>
     *
     * <code>.dstore.values.StringValue changing_date_and_time_char = 10013;</code>
     */
    public function setChangingDateAndTimeChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->changing_date_and_time_char = $var;
    }

}

