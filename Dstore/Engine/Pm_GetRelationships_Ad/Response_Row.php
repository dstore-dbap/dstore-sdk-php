<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetRelationships_Ad.proto

namespace Dstore\Engine\Pm_GetRelationships_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetRelationships_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Handelt es sich um eine NUR vom "dStore" intern verwaltete Beziehung ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue system_relationship = 10001;</code>
     */
    private $system_relationship = null;
    /**
     * <pre>
     * ID einer Art von Beziehung
     * </pre>
     *
     * <code>.dstore.values.IntegerValue relationship_id = 10002;</code>
     */
    private $relationship_id = null;
    /**
     * <pre>
     * Bezeichnung der Beziehungsart "RelationshipID"
     * </pre>
     *
     * <code>.dstore.values.StringValue relationship = 10003;</code>
     */
    private $relationship = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetRelationshipsAd::initOnce();
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
     * Handelt es sich um eine NUR vom "dStore" intern verwaltete Beziehung ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue system_relationship = 10001;</code>
     */
    public function getSystemRelationship()
    {
        return $this->system_relationship;
    }

    /**
     * <pre>
     * Handelt es sich um eine NUR vom "dStore" intern verwaltete Beziehung ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue system_relationship = 10001;</code>
     */
    public function setSystemRelationship(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->system_relationship = $var;
    }

    /**
     * <pre>
     * ID einer Art von Beziehung
     * </pre>
     *
     * <code>.dstore.values.IntegerValue relationship_id = 10002;</code>
     */
    public function getRelationshipId()
    {
        return $this->relationship_id;
    }

    /**
     * <pre>
     * ID einer Art von Beziehung
     * </pre>
     *
     * <code>.dstore.values.IntegerValue relationship_id = 10002;</code>
     */
    public function setRelationshipId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->relationship_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Beziehungsart "RelationshipID"
     * </pre>
     *
     * <code>.dstore.values.StringValue relationship = 10003;</code>
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * <pre>
     * Bezeichnung der Beziehungsart "RelationshipID"
     * </pre>
     *
     * <code>.dstore.values.StringValue relationship = 10003;</code>
     */
    public function setRelationship(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->relationship = $var;
    }

}
