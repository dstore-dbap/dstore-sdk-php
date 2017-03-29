<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetLockedNodeCharacs_Ad.proto

namespace Dstore\Engine\Im_GetLockedNodeCharacs_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetLockedNodeCharacs_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Name des Benutzers "UserID"
     * </pre>
     *
     * <code>.dstore.values.StringValue user_name = 10001;</code>
     */
    private $user_name = null;
    /**
     * <pre>
     * Bezeichnung des Merkmals "NodeCharacteristicID" (in der Standardsprache)
     * </pre>
     *
     * <code>.dstore.values.StringValue characteristic_description = 10002;</code>
     */
    private $characteristic_description = null;
    /**
     * <pre>
     * ID eines im "dStore" registrierten Benutzers (aus der Tabelle "UserInfo"), der nur lesenden oder gar keinen Zugriff auf das Merkmal "NodeCharacteristicID" hat.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10003;</code>
     */
    private $user_id = null;
    /**
     * <pre>
     * Summe folgender Optionen (s.a. Beschreibung !) :- "1" : Neu-Anlage von Eigenschaften ist nicht möglich- "2" : Ändern von Eigenschaften ist verboten- "4" : Löschen von Eigenschaften ist nicht erlaubt- "8" : Ermitteln von Eigenschaften ist verboten
     * </pre>
     *
     * <code>.dstore.values.IntegerValue lock_status = 10004;</code>
     */
    private $lock_status = null;
    /**
     * <pre>
     * ID eines Merkmals auf das der Benutzer "UserID" nur lesenden oder gar keinen Zugriff hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10005;</code>
     */
    private $node_characteristic_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetLockedNodeCharacsAd::initOnce();
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
     * Name des Benutzers "UserID"
     * </pre>
     *
     * <code>.dstore.values.StringValue user_name = 10001;</code>
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
     * <code>.dstore.values.StringValue user_name = 10001;</code>
     */
    public function setUserName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->user_name = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Merkmals "NodeCharacteristicID" (in der Standardsprache)
     * </pre>
     *
     * <code>.dstore.values.StringValue characteristic_description = 10002;</code>
     */
    public function getCharacteristicDescription()
    {
        return $this->characteristic_description;
    }

    /**
     * <pre>
     * Bezeichnung des Merkmals "NodeCharacteristicID" (in der Standardsprache)
     * </pre>
     *
     * <code>.dstore.values.StringValue characteristic_description = 10002;</code>
     */
    public function setCharacteristicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->characteristic_description = $var;
    }

    /**
     * <pre>
     * ID eines im "dStore" registrierten Benutzers (aus der Tabelle "UserInfo"), der nur lesenden oder gar keinen Zugriff auf das Merkmal "NodeCharacteristicID" hat.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10003;</code>
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * <pre>
     * ID eines im "dStore" registrierten Benutzers (aus der Tabelle "UserInfo"), der nur lesenden oder gar keinen Zugriff auf das Merkmal "NodeCharacteristicID" hat.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue user_id = 10003;</code>
     */
    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_id = $var;
    }

    /**
     * <pre>
     * Summe folgender Optionen (s.a. Beschreibung !) :- "1" : Neu-Anlage von Eigenschaften ist nicht möglich- "2" : Ändern von Eigenschaften ist verboten- "4" : Löschen von Eigenschaften ist nicht erlaubt- "8" : Ermitteln von Eigenschaften ist verboten
     * </pre>
     *
     * <code>.dstore.values.IntegerValue lock_status = 10004;</code>
     */
    public function getLockStatus()
    {
        return $this->lock_status;
    }

    /**
     * <pre>
     * Summe folgender Optionen (s.a. Beschreibung !) :- "1" : Neu-Anlage von Eigenschaften ist nicht möglich- "2" : Ändern von Eigenschaften ist verboten- "4" : Löschen von Eigenschaften ist nicht erlaubt- "8" : Ermitteln von Eigenschaften ist verboten
     * </pre>
     *
     * <code>.dstore.values.IntegerValue lock_status = 10004;</code>
     */
    public function setLockStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->lock_status = $var;
    }

    /**
     * <pre>
     * ID eines Merkmals auf das der Benutzer "UserID" nur lesenden oder gar keinen Zugriff hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10005;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <pre>
     * ID eines Merkmals auf das der Benutzer "UserID" nur lesenden oder gar keinen Zugriff hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10005;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

}

