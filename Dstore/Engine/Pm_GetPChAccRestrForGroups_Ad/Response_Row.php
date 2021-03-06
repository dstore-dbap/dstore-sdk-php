<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPChAccRestrForGroups_Ad.proto

namespace Dstore\Engine\Pm_GetPChAccRestrForGroups_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPChAccRestrForGroups_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Welcher Teil der Eigensch. (wenn "AccessRestriction &amp; 8 = 8") zurückgeg. wird:- "#left(&lt;n&gt;)#" : die ERSTEN n Zeichen ("n = 0" mögl.)- "#right(&lt;n&gt;)#" : die LETZTEN n Zeichen ("n = 0" mögl.)- NULL : Datensätze zu "PersonCharacteristicID" fehlen ganz
     * </pre>
     *
     * <code>.dstore.values.StringValue read_access_restriction_pattern = 10001;</code>
     */
    private $read_access_restriction_pattern = null;
    /**
     * <pre>
     * Welche Beschr. gelten. Summe folg. mögl. Werte :- "1" : Neu-Anlage v. Eigensch./Details verb.- "2" : Ändern v. Eigensch./Details verb.- "4" : Löschen v. Eigensch./Details verb.- "8" : Lesen v. Eigensch. verb./eingeschr. UND Lesen v. Details verb.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue access_restriction = 10002;</code>
     */
    private $access_restriction = null;
    /**
     * <pre>
     * Die ID des Merkmals für dessen Eigenschaften/Details die Beschränkung gilt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10003;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <pre>
     * Die ID einer "dStore"-Benutzer-Gruppe (s. "mi_GetUserGroups_Ad") für die die Beschränkung gilt. Entspricht natürlich "&#64;UserGroupID" wenn angegeben.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue restriction_for_user_group_id = 10004;</code>
     */
    private $restriction_for_user_group_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPChAccRestrForGroupsAd::initOnce();
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
     * Welcher Teil der Eigensch. (wenn "AccessRestriction &amp; 8 = 8") zurückgeg. wird:- "#left(&lt;n&gt;)#" : die ERSTEN n Zeichen ("n = 0" mögl.)- "#right(&lt;n&gt;)#" : die LETZTEN n Zeichen ("n = 0" mögl.)- NULL : Datensätze zu "PersonCharacteristicID" fehlen ganz
     * </pre>
     *
     * <code>.dstore.values.StringValue read_access_restriction_pattern = 10001;</code>
     */
    public function getReadAccessRestrictionPattern()
    {
        return $this->read_access_restriction_pattern;
    }

    /**
     * <pre>
     * Welcher Teil der Eigensch. (wenn "AccessRestriction &amp; 8 = 8") zurückgeg. wird:- "#left(&lt;n&gt;)#" : die ERSTEN n Zeichen ("n = 0" mögl.)- "#right(&lt;n&gt;)#" : die LETZTEN n Zeichen ("n = 0" mögl.)- NULL : Datensätze zu "PersonCharacteristicID" fehlen ganz
     * </pre>
     *
     * <code>.dstore.values.StringValue read_access_restriction_pattern = 10001;</code>
     */
    public function setReadAccessRestrictionPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->read_access_restriction_pattern = $var;
    }

    /**
     * <pre>
     * Welche Beschr. gelten. Summe folg. mögl. Werte :- "1" : Neu-Anlage v. Eigensch./Details verb.- "2" : Ändern v. Eigensch./Details verb.- "4" : Löschen v. Eigensch./Details verb.- "8" : Lesen v. Eigensch. verb./eingeschr. UND Lesen v. Details verb.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue access_restriction = 10002;</code>
     */
    public function getAccessRestriction()
    {
        return $this->access_restriction;
    }

    /**
     * <pre>
     * Welche Beschr. gelten. Summe folg. mögl. Werte :- "1" : Neu-Anlage v. Eigensch./Details verb.- "2" : Ändern v. Eigensch./Details verb.- "4" : Löschen v. Eigensch./Details verb.- "8" : Lesen v. Eigensch. verb./eingeschr. UND Lesen v. Details verb.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue access_restriction = 10002;</code>
     */
    public function setAccessRestriction(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->access_restriction = $var;
    }

    /**
     * <pre>
     * Die ID des Merkmals für dessen Eigenschaften/Details die Beschränkung gilt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10003;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <pre>
     * Die ID des Merkmals für dessen Eigenschaften/Details die Beschränkung gilt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10003;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <pre>
     * Die ID einer "dStore"-Benutzer-Gruppe (s. "mi_GetUserGroups_Ad") für die die Beschränkung gilt. Entspricht natürlich "&#64;UserGroupID" wenn angegeben.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue restriction_for_user_group_id = 10004;</code>
     */
    public function getRestrictionForUserGroupId()
    {
        return $this->restriction_for_user_group_id;
    }

    /**
     * <pre>
     * Die ID einer "dStore"-Benutzer-Gruppe (s. "mi_GetUserGroups_Ad") für die die Beschränkung gilt. Entspricht natürlich "&#64;UserGroupID" wenn angegeben.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue restriction_for_user_group_id = 10004;</code>
     */
    public function setRestrictionForUserGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->restriction_for_user_group_id = $var;
    }

}

