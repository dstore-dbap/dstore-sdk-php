<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetRelatedMembers_Pu.proto

namespace Dstore\Engine\Co_GetRelatedMembers_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_GetRelatedMembers_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Was enthält "Value1" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value1" ist dann NULL
     * </pre>
     *
     * <code>.dstore.values.StringValue value1_restricted_by_pattern = 10001;</code>
     */
    private $value1_restricted_by_pattern = null;
    /**
     * <pre>
     * Falls "&#64;CommunityBinaryCategoryID" angegeben wurde, steht hier die kleinste "BinaryID", die dem Mitglied "CommunityMemberID" in der Kategorie "&#64;CommunityBinaryCategoryID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_id = 10002;</code>
     */
    private $binary_id = null;
    /**
     * <pre>
     * Wie "Value1RestrictedByPattern" - nur eben auf "Value2" bezogen
     * </pre>
     *
     * <code>.dstore.values.StringValue value2_restricted_by_pattern = 10003;</code>
     */
    private $value2_restricted_by_pattern = null;
    /**
     * <pre>
     * Richtung der Beziehung aus Sicht des identifizierten Mitglieds :"0" : "ICH" habe die Beziehung erstellt"1" : "ANDERE" haben eine Beziehung zu "MIR" erstellt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue relationship_direction = 10004;</code>
     */
    private $relationship_direction = null;
    /**
     * <pre>
     * ID eines Community-Mitglieds, zu dem eine Beziehung besteht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue community_member_id = 10005;</code>
     */
    private $community_member_id = null;
    /**
     * <pre>
     * Dieser Wert gibt an, wo ein Mitglied sich gerade in der Community aufhält. Es sind nur der Status "0" [gerade angemeldet] und "255" [Community verlassen] vom "dStore" vorgegeben.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue online_status = 10006;</code>
     */
    private $online_status = null;
    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zum Merkmal "&#64;OutputCharacteristicID3"
     * </pre>
     *
     * <code>.dstore.values.StringValue value3 = 10007;</code>
     */
    private $value3 = null;
    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zum Merkmal "&#64;OutputCharacteristicID1"
     * </pre>
     *
     * <code>.dstore.values.StringValue value1 = 10008;</code>
     */
    private $value1 = null;
    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zum Merkmal "&#64;OutputCharacteristicID2"
     * </pre>
     *
     * <code>.dstore.values.StringValue value2 = 10009;</code>
     */
    private $value2 = null;
    /**
     * <pre>
     * Die "Priorität" der Beziehung
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10010;</code>
     */
    private $sort_no = null;
    /**
     * <pre>
     * Summe von Zugriffsrechten, die das Mitglied "CommunityMemberID" auf Daten des identifizierten Mitglieds hat bzw. umgekehrt (je nach "RelationshipDirection"). Mögliche Einzel-Zugriffsrechte : s. "pm_GetRelationAccessLevels".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue access_level = 10011;</code>
     */
    private $access_level = null;
    /**
     * <pre>
     * Was enthält "Value3" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value3" ist dann NULL
     * </pre>
     *
     * <code>.dstore.values.StringValue value3_restricted_by_pattern = 10012;</code>
     */
    private $value3_restricted_by_pattern = null;
    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zu dem Merkmal, anhand dessen die Community-Mitglieder sich untereinander unterscheiden bzw. erkennen können. (Eintrag in "CommunitySettings" zum Schlüssel "IdentifyingCharacteristicID")
     * </pre>
     *
     * <code>.dstore.values.StringValue nickname = 10013;</code>
     */
    private $nickname = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoGetRelatedMembersPu::initOnce();
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
     * Was enthält "Value1" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value1" ist dann NULL
     * </pre>
     *
     * <code>.dstore.values.StringValue value1_restricted_by_pattern = 10001;</code>
     */
    public function getValue1RestrictedByPattern()
    {
        return $this->value1_restricted_by_pattern;
    }

    /**
     * <pre>
     * Was enthält "Value1" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value1" ist dann NULL
     * </pre>
     *
     * <code>.dstore.values.StringValue value1_restricted_by_pattern = 10001;</code>
     */
    public function setValue1RestrictedByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value1_restricted_by_pattern = $var;
    }

    /**
     * <pre>
     * Falls "&#64;CommunityBinaryCategoryID" angegeben wurde, steht hier die kleinste "BinaryID", die dem Mitglied "CommunityMemberID" in der Kategorie "&#64;CommunityBinaryCategoryID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_id = 10002;</code>
     */
    public function getBinaryId()
    {
        return $this->binary_id;
    }

    /**
     * <pre>
     * Falls "&#64;CommunityBinaryCategoryID" angegeben wurde, steht hier die kleinste "BinaryID", die dem Mitglied "CommunityMemberID" in der Kategorie "&#64;CommunityBinaryCategoryID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_id = 10002;</code>
     */
    public function setBinaryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_id = $var;
    }

    /**
     * <pre>
     * Wie "Value1RestrictedByPattern" - nur eben auf "Value2" bezogen
     * </pre>
     *
     * <code>.dstore.values.StringValue value2_restricted_by_pattern = 10003;</code>
     */
    public function getValue2RestrictedByPattern()
    {
        return $this->value2_restricted_by_pattern;
    }

    /**
     * <pre>
     * Wie "Value1RestrictedByPattern" - nur eben auf "Value2" bezogen
     * </pre>
     *
     * <code>.dstore.values.StringValue value2_restricted_by_pattern = 10003;</code>
     */
    public function setValue2RestrictedByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value2_restricted_by_pattern = $var;
    }

    /**
     * <pre>
     * Richtung der Beziehung aus Sicht des identifizierten Mitglieds :"0" : "ICH" habe die Beziehung erstellt"1" : "ANDERE" haben eine Beziehung zu "MIR" erstellt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue relationship_direction = 10004;</code>
     */
    public function getRelationshipDirection()
    {
        return $this->relationship_direction;
    }

    /**
     * <pre>
     * Richtung der Beziehung aus Sicht des identifizierten Mitglieds :"0" : "ICH" habe die Beziehung erstellt"1" : "ANDERE" haben eine Beziehung zu "MIR" erstellt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue relationship_direction = 10004;</code>
     */
    public function setRelationshipDirection(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->relationship_direction = $var;
    }

    /**
     * <pre>
     * ID eines Community-Mitglieds, zu dem eine Beziehung besteht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue community_member_id = 10005;</code>
     */
    public function getCommunityMemberId()
    {
        return $this->community_member_id;
    }

    /**
     * <pre>
     * ID eines Community-Mitglieds, zu dem eine Beziehung besteht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue community_member_id = 10005;</code>
     */
    public function setCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_member_id = $var;
    }

    /**
     * <pre>
     * Dieser Wert gibt an, wo ein Mitglied sich gerade in der Community aufhält. Es sind nur der Status "0" [gerade angemeldet] und "255" [Community verlassen] vom "dStore" vorgegeben.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue online_status = 10006;</code>
     */
    public function getOnlineStatus()
    {
        return $this->online_status;
    }

    /**
     * <pre>
     * Dieser Wert gibt an, wo ein Mitglied sich gerade in der Community aufhält. Es sind nur der Status "0" [gerade angemeldet] und "255" [Community verlassen] vom "dStore" vorgegeben.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue online_status = 10006;</code>
     */
    public function setOnlineStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->online_status = $var;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zum Merkmal "&#64;OutputCharacteristicID3"
     * </pre>
     *
     * <code>.dstore.values.StringValue value3 = 10007;</code>
     */
    public function getValue3()
    {
        return $this->value3;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zum Merkmal "&#64;OutputCharacteristicID3"
     * </pre>
     *
     * <code>.dstore.values.StringValue value3 = 10007;</code>
     */
    public function setValue3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value3 = $var;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zum Merkmal "&#64;OutputCharacteristicID1"
     * </pre>
     *
     * <code>.dstore.values.StringValue value1 = 10008;</code>
     */
    public function getValue1()
    {
        return $this->value1;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zum Merkmal "&#64;OutputCharacteristicID1"
     * </pre>
     *
     * <code>.dstore.values.StringValue value1 = 10008;</code>
     */
    public function setValue1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value1 = $var;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zum Merkmal "&#64;OutputCharacteristicID2"
     * </pre>
     *
     * <code>.dstore.values.StringValue value2 = 10009;</code>
     */
    public function getValue2()
    {
        return $this->value2;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zum Merkmal "&#64;OutputCharacteristicID2"
     * </pre>
     *
     * <code>.dstore.values.StringValue value2 = 10009;</code>
     */
    public function setValue2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value2 = $var;
    }

    /**
     * <pre>
     * Die "Priorität" der Beziehung
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10010;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <pre>
     * Die "Priorität" der Beziehung
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10010;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

    /**
     * <pre>
     * Summe von Zugriffsrechten, die das Mitglied "CommunityMemberID" auf Daten des identifizierten Mitglieds hat bzw. umgekehrt (je nach "RelationshipDirection"). Mögliche Einzel-Zugriffsrechte : s. "pm_GetRelationAccessLevels".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue access_level = 10011;</code>
     */
    public function getAccessLevel()
    {
        return $this->access_level;
    }

    /**
     * <pre>
     * Summe von Zugriffsrechten, die das Mitglied "CommunityMemberID" auf Daten des identifizierten Mitglieds hat bzw. umgekehrt (je nach "RelationshipDirection"). Mögliche Einzel-Zugriffsrechte : s. "pm_GetRelationAccessLevels".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue access_level = 10011;</code>
     */
    public function setAccessLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->access_level = $var;
    }

    /**
     * <pre>
     * Was enthält "Value3" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value3" ist dann NULL
     * </pre>
     *
     * <code>.dstore.values.StringValue value3_restricted_by_pattern = 10012;</code>
     */
    public function getValue3RestrictedByPattern()
    {
        return $this->value3_restricted_by_pattern;
    }

    /**
     * <pre>
     * Was enthält "Value3" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value3" ist dann NULL
     * </pre>
     *
     * <code>.dstore.values.StringValue value3_restricted_by_pattern = 10012;</code>
     */
    public function setValue3RestrictedByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value3_restricted_by_pattern = $var;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zu dem Merkmal, anhand dessen die Community-Mitglieder sich untereinander unterscheiden bzw. erkennen können. (Eintrag in "CommunitySettings" zum Schlüssel "IdentifyingCharacteristicID")
     * </pre>
     *
     * <code>.dstore.values.StringValue nickname = 10013;</code>
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "CommunityMemberID" zu dem Merkmal, anhand dessen die Community-Mitglieder sich untereinander unterscheiden bzw. erkennen können. (Eintrag in "CommunitySettings" zum Schlüssel "IdentifyingCharacteristicID")
     * </pre>
     *
     * <code>.dstore.values.StringValue nickname = 10013;</code>
     */
    public function setNickname(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->nickname = $var;
    }

}
