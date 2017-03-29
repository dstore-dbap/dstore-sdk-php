<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetMessagesOfOneMember_Ad.proto

namespace Dstore\Engine\Co_GetMessagesOfOneMember_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_GetMessagesOfOneMember_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Eigenschaft des Mitglieds "ToCommunityMemberID" zum Merkmal mit der "IdentifyingCharacteristicID" (aus "CommunitySettings")
     * </pre>
     *
     * <code>.dstore.values.StringValue to_community_member = 10001;</code>
     */
    private $to_community_member = null;
    /**
     * <pre>
     * Status der Nachricht "Message", die von "FromCommunityMemberID" an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt wurde :* 0 bis 99 : neu (ungelesen)* 100 bis 199 : alt (gelesen)* 200 bis 254 : &lt;undefiniert&gt;* 255 : gelöscht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_status = 10002;</code>
     */
    private $message_status = null;
    /**
     * <pre>
     * ID des Mitglieds der Commuity "CommunityID", das die Nachricht von "FromCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") erhalten hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_community_member_id = 10003;</code>
     */
    private $to_community_member_id = null;
    /**
     * <pre>
     * Die Nachricht, die von "FromCommunityMemberID" an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt wurde
     * </pre>
     *
     * <code>.dstore.values.StringValue message = 10004;</code>
     */
    private $message = null;
    /**
     * <pre>
     * Eigenschaft des Mitglieds "FromCommunityMemberID" zum Merkmal mit der "IdentifyingCharacteristicID" (aus "CommunitySettings")
     * </pre>
     *
     * <code>.dstore.values.StringValue from_community_member = 10005;</code>
     */
    private $from_community_member = null;
    /**
     * <pre>
     * ID der Community, in der die Nachricht von "FromCommunityMemberID" an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue community_id = 10006;</code>
     */
    private $community_id = null;
    /**
     * <pre>
     * Name der Community "CommunityID"
     * </pre>
     *
     * <code>.dstore.values.StringValue community_name = 10007;</code>
     */
    private $community_name = null;
    /**
     * <pre>
     * Zeitpunkt an dem die Nachricht "Message" von "FromCommunityMemberID" an "ToCommunityMemberID" verschickt wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue message_date_and_time = 10008;</code>
     */
    private $message_date_and_time = null;
    /**
     * <pre>
     * ID des Mitglieds der Commuity "CommunityID", das die Nachricht an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_community_member_id = 10009;</code>
     */
    private $from_community_member_id = null;
    /**
     * <pre>
     * "MessageDateAndTime" als String (Format "15.04.2001 20:56:39")
     * </pre>
     *
     * <code>.dstore.values.StringValue message_date_and_time_char = 10010;</code>
     */
    private $message_date_and_time_char = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoGetMessagesOfOneMemberAd::initOnce();
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
     * Eigenschaft des Mitglieds "ToCommunityMemberID" zum Merkmal mit der "IdentifyingCharacteristicID" (aus "CommunitySettings")
     * </pre>
     *
     * <code>.dstore.values.StringValue to_community_member = 10001;</code>
     */
    public function getToCommunityMember()
    {
        return $this->to_community_member;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "ToCommunityMemberID" zum Merkmal mit der "IdentifyingCharacteristicID" (aus "CommunitySettings")
     * </pre>
     *
     * <code>.dstore.values.StringValue to_community_member = 10001;</code>
     */
    public function setToCommunityMember(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->to_community_member = $var;
    }

    /**
     * <pre>
     * Status der Nachricht "Message", die von "FromCommunityMemberID" an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt wurde :* 0 bis 99 : neu (ungelesen)* 100 bis 199 : alt (gelesen)* 200 bis 254 : &lt;undefiniert&gt;* 255 : gelöscht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_status = 10002;</code>
     */
    public function getMessageStatus()
    {
        return $this->message_status;
    }

    /**
     * <pre>
     * Status der Nachricht "Message", die von "FromCommunityMemberID" an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt wurde :* 0 bis 99 : neu (ungelesen)* 100 bis 199 : alt (gelesen)* 200 bis 254 : &lt;undefiniert&gt;* 255 : gelöscht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_status = 10002;</code>
     */
    public function setMessageStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->message_status = $var;
    }

    /**
     * <pre>
     * ID des Mitglieds der Commuity "CommunityID", das die Nachricht von "FromCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") erhalten hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_community_member_id = 10003;</code>
     */
    public function getToCommunityMemberId()
    {
        return $this->to_community_member_id;
    }

    /**
     * <pre>
     * ID des Mitglieds der Commuity "CommunityID", das die Nachricht von "FromCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") erhalten hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_community_member_id = 10003;</code>
     */
    public function setToCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->to_community_member_id = $var;
    }

    /**
     * <pre>
     * Die Nachricht, die von "FromCommunityMemberID" an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt wurde
     * </pre>
     *
     * <code>.dstore.values.StringValue message = 10004;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <pre>
     * Die Nachricht, die von "FromCommunityMemberID" an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt wurde
     * </pre>
     *
     * <code>.dstore.values.StringValue message = 10004;</code>
     */
    public function setMessage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->message = $var;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "FromCommunityMemberID" zum Merkmal mit der "IdentifyingCharacteristicID" (aus "CommunitySettings")
     * </pre>
     *
     * <code>.dstore.values.StringValue from_community_member = 10005;</code>
     */
    public function getFromCommunityMember()
    {
        return $this->from_community_member;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "FromCommunityMemberID" zum Merkmal mit der "IdentifyingCharacteristicID" (aus "CommunitySettings")
     * </pre>
     *
     * <code>.dstore.values.StringValue from_community_member = 10005;</code>
     */
    public function setFromCommunityMember(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->from_community_member = $var;
    }

    /**
     * <pre>
     * ID der Community, in der die Nachricht von "FromCommunityMemberID" an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue community_id = 10006;</code>
     */
    public function getCommunityId()
    {
        return $this->community_id;
    }

    /**
     * <pre>
     * ID der Community, in der die Nachricht von "FromCommunityMemberID" an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue community_id = 10006;</code>
     */
    public function setCommunityId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_id = $var;
    }

    /**
     * <pre>
     * Name der Community "CommunityID"
     * </pre>
     *
     * <code>.dstore.values.StringValue community_name = 10007;</code>
     */
    public function getCommunityName()
    {
        return $this->community_name;
    }

    /**
     * <pre>
     * Name der Community "CommunityID"
     * </pre>
     *
     * <code>.dstore.values.StringValue community_name = 10007;</code>
     */
    public function setCommunityName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->community_name = $var;
    }

    /**
     * <pre>
     * Zeitpunkt an dem die Nachricht "Message" von "FromCommunityMemberID" an "ToCommunityMemberID" verschickt wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue message_date_and_time = 10008;</code>
     */
    public function getMessageDateAndTime()
    {
        return $this->message_date_and_time;
    }

    /**
     * <pre>
     * Zeitpunkt an dem die Nachricht "Message" von "FromCommunityMemberID" an "ToCommunityMemberID" verschickt wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue message_date_and_time = 10008;</code>
     */
    public function setMessageDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->message_date_and_time = $var;
    }

    /**
     * <pre>
     * ID des Mitglieds der Commuity "CommunityID", das die Nachricht an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_community_member_id = 10009;</code>
     */
    public function getFromCommunityMemberId()
    {
        return $this->from_community_member_id;
    }

    /**
     * <pre>
     * ID des Mitglieds der Commuity "CommunityID", das die Nachricht an "ToCommunityMemberID" (zum Zeitpunkt "MessageDateAndTime") verschickt hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_community_member_id = 10009;</code>
     */
    public function setFromCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_community_member_id = $var;
    }

    /**
     * <pre>
     * "MessageDateAndTime" als String (Format "15.04.2001 20:56:39")
     * </pre>
     *
     * <code>.dstore.values.StringValue message_date_and_time_char = 10010;</code>
     */
    public function getMessageDateAndTimeChar()
    {
        return $this->message_date_and_time_char;
    }

    /**
     * <pre>
     * "MessageDateAndTime" als String (Format "15.04.2001 20:56:39")
     * </pre>
     *
     * <code>.dstore.values.StringValue message_date_and_time_char = 10010;</code>
     */
    public function setMessageDateAndTimeChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->message_date_and_time_char = $var;
    }

}
