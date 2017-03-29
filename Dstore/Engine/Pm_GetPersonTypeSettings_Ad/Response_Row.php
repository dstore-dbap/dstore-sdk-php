<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonTypeSettings_Ad.proto

namespace Dstore\Engine\Pm_GetPersonTypeSettings_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonTypeSettings_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Bezeichnung des Personen-Typs "PersonTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue person_type_description = 10001;</code>
     */
    private $person_type_description = null;
    /**
     * <pre>
     * Der für den Personen-Typ "PersonTypeID" zum Schlüssel "KeyVariable" hinterlegte Wert
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Ein Schlüssel (z.B. "PersonIdentificationIDs"). Mögliche Werte : siehe Rückgabemenge von " do_GetSettingsDescriptions_Ad 'PersonTypeSettings' "
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 10003;</code>
     */
    private $key_variable = null;
    /**
     * <pre>
     * ID eines Personen-Typs
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_type_id = 10004;</code>
     */
    private $person_type_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonTypeSettingsAd::initOnce();
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
     * Bezeichnung des Personen-Typs "PersonTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue person_type_description = 10001;</code>
     */
    public function getPersonTypeDescription()
    {
        return $this->person_type_description;
    }

    /**
     * <pre>
     * Bezeichnung des Personen-Typs "PersonTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue person_type_description = 10001;</code>
     */
    public function setPersonTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->person_type_description = $var;
    }

    /**
     * <pre>
     * Der für den Personen-Typ "PersonTypeID" zum Schlüssel "KeyVariable" hinterlegte Wert
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Der für den Personen-Typ "PersonTypeID" zum Schlüssel "KeyVariable" hinterlegte Wert
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * Ein Schlüssel (z.B. "PersonIdentificationIDs"). Mögliche Werte : siehe Rückgabemenge von " do_GetSettingsDescriptions_Ad 'PersonTypeSettings' "
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 10003;</code>
     */
    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    /**
     * <pre>
     * Ein Schlüssel (z.B. "PersonIdentificationIDs"). Mögliche Werte : siehe Rückgabemenge von " do_GetSettingsDescriptions_Ad 'PersonTypeSettings' "
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 10003;</code>
     */
    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->key_variable = $var;
    }

    /**
     * <pre>
     * ID eines Personen-Typs
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_type_id = 10004;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <pre>
     * ID eines Personen-Typs
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_type_id = 10004;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

}
