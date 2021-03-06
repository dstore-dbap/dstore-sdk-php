<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetSentMessages_Pu.proto

namespace Dstore\Engine\Co_GetSentMessages_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_GetSentMessages_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Status der Nachricht "Message". Bedeutung(en) :* 0 bis 99 : neu (ungelesen)   (z.B könnte "1" bedeuten, "Schicke es auch als SMS")* 100 bis 199 : alt (gelesen)* 200 bis 254 : &lt;undefiniert&gt;* 255 : gelöscht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_status = 10001;</code>
     */
    private $message_status = null;
    /**
     * <pre>
     * Adressat der Nachricht "Message"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_community_member_id = 10002;</code>
     */
    private $to_community_member_id = null;
    /**
     * <pre>
     * Die Nachricht an "ToCommunityMemberID" (des durch "&#64;PersonIdentificationValues" identifizierte Community-Mitglieds)
     * </pre>
     *
     * <code>.dstore.values.StringValue message = 10003;</code>
     */
    private $message = null;
    /**
     * <pre>
     * Nummer der Nachricht "Message". Gibt an, um die wievielte Nachricht es sich für das Mitglied "ToCommunityMemberID" handelt. ACHTUNG : es werden negative Werte zurückgegeben (s. Beschreibung) !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_no = 10004;</code>
     */
    private $message_no = null;
    /**
     * <pre>
     * Wann wurde die Nachricht "Message" geschickt
     * </pre>
     *
     * <code>.dstore.values.TimestampValue message_date_and_time = 10005;</code>
     */
    private $message_date_and_time = null;
    /**
     * <pre>
     * Eigenschaft des Mitglieds "ToCommunityMemberID" zu dem Merkmal, anhand dessen die Communitymitglieder sich untereinander unterscheiden bzw. erkennen können. (Eintrag in "CommunitySettings" zum Schlüssel "IdentifyingCharacteristicID")
     * </pre>
     *
     * <code>.dstore.values.StringValue to_community_member_nickname = 10006;</code>
     */
    private $to_community_member_nickname = null;
    /**
     * <pre>
     * "MessageDateAndTime" als String. Falls "&#64;DateAndTimeFormat = NULL" übergeben wurde, ist das Format "07.02.2000 17:30:21". Ansonsten wird "&#64;DateAndTimeFormat" für die "style"-Option der ASE-Funktion "convert" verwendet (siehe Beschreibung).
     * </pre>
     *
     * <code>.dstore.values.StringValue message_date_and_time_char = 10007;</code>
     */
    private $message_date_and_time_char = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoGetSentMessagesPu::initOnce();
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
     * Status der Nachricht "Message". Bedeutung(en) :* 0 bis 99 : neu (ungelesen)   (z.B könnte "1" bedeuten, "Schicke es auch als SMS")* 100 bis 199 : alt (gelesen)* 200 bis 254 : &lt;undefiniert&gt;* 255 : gelöscht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_status = 10001;</code>
     */
    public function getMessageStatus()
    {
        return $this->message_status;
    }

    /**
     * <pre>
     * Status der Nachricht "Message". Bedeutung(en) :* 0 bis 99 : neu (ungelesen)   (z.B könnte "1" bedeuten, "Schicke es auch als SMS")* 100 bis 199 : alt (gelesen)* 200 bis 254 : &lt;undefiniert&gt;* 255 : gelöscht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_status = 10001;</code>
     */
    public function setMessageStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->message_status = $var;
    }

    /**
     * <pre>
     * Adressat der Nachricht "Message"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_community_member_id = 10002;</code>
     */
    public function getToCommunityMemberId()
    {
        return $this->to_community_member_id;
    }

    /**
     * <pre>
     * Adressat der Nachricht "Message"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_community_member_id = 10002;</code>
     */
    public function setToCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->to_community_member_id = $var;
    }

    /**
     * <pre>
     * Die Nachricht an "ToCommunityMemberID" (des durch "&#64;PersonIdentificationValues" identifizierte Community-Mitglieds)
     * </pre>
     *
     * <code>.dstore.values.StringValue message = 10003;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <pre>
     * Die Nachricht an "ToCommunityMemberID" (des durch "&#64;PersonIdentificationValues" identifizierte Community-Mitglieds)
     * </pre>
     *
     * <code>.dstore.values.StringValue message = 10003;</code>
     */
    public function setMessage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->message = $var;
    }

    /**
     * <pre>
     * Nummer der Nachricht "Message". Gibt an, um die wievielte Nachricht es sich für das Mitglied "ToCommunityMemberID" handelt. ACHTUNG : es werden negative Werte zurückgegeben (s. Beschreibung) !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_no = 10004;</code>
     */
    public function getMessageNo()
    {
        return $this->message_no;
    }

    /**
     * <pre>
     * Nummer der Nachricht "Message". Gibt an, um die wievielte Nachricht es sich für das Mitglied "ToCommunityMemberID" handelt. ACHTUNG : es werden negative Werte zurückgegeben (s. Beschreibung) !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_no = 10004;</code>
     */
    public function setMessageNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->message_no = $var;
    }

    /**
     * <pre>
     * Wann wurde die Nachricht "Message" geschickt
     * </pre>
     *
     * <code>.dstore.values.TimestampValue message_date_and_time = 10005;</code>
     */
    public function getMessageDateAndTime()
    {
        return $this->message_date_and_time;
    }

    /**
     * <pre>
     * Wann wurde die Nachricht "Message" geschickt
     * </pre>
     *
     * <code>.dstore.values.TimestampValue message_date_and_time = 10005;</code>
     */
    public function setMessageDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->message_date_and_time = $var;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "ToCommunityMemberID" zu dem Merkmal, anhand dessen die Communitymitglieder sich untereinander unterscheiden bzw. erkennen können. (Eintrag in "CommunitySettings" zum Schlüssel "IdentifyingCharacteristicID")
     * </pre>
     *
     * <code>.dstore.values.StringValue to_community_member_nickname = 10006;</code>
     */
    public function getToCommunityMemberNickname()
    {
        return $this->to_community_member_nickname;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "ToCommunityMemberID" zu dem Merkmal, anhand dessen die Communitymitglieder sich untereinander unterscheiden bzw. erkennen können. (Eintrag in "CommunitySettings" zum Schlüssel "IdentifyingCharacteristicID")
     * </pre>
     *
     * <code>.dstore.values.StringValue to_community_member_nickname = 10006;</code>
     */
    public function setToCommunityMemberNickname(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->to_community_member_nickname = $var;
    }

    /**
     * <pre>
     * "MessageDateAndTime" als String. Falls "&#64;DateAndTimeFormat = NULL" übergeben wurde, ist das Format "07.02.2000 17:30:21". Ansonsten wird "&#64;DateAndTimeFormat" für die "style"-Option der ASE-Funktion "convert" verwendet (siehe Beschreibung).
     * </pre>
     *
     * <code>.dstore.values.StringValue message_date_and_time_char = 10007;</code>
     */
    public function getMessageDateAndTimeChar()
    {
        return $this->message_date_and_time_char;
    }

    /**
     * <pre>
     * "MessageDateAndTime" als String. Falls "&#64;DateAndTimeFormat = NULL" übergeben wurde, ist das Format "07.02.2000 17:30:21". Ansonsten wird "&#64;DateAndTimeFormat" für die "style"-Option der ASE-Funktion "convert" verwendet (siehe Beschreibung).
     * </pre>
     *
     * <code>.dstore.values.StringValue message_date_and_time_char = 10007;</code>
     */
    public function setMessageDateAndTimeChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->message_date_and_time_char = $var;
    }

}

