<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_ModifyPostingProperties_Pu.proto

namespace Dstore\Engine\Fo_ModifyPostingProperties_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_ModifyPostingProperties_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines Posting-Merkmals, auf das sich die fehlerhafte Eigenschaft "Value" bezieht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 10001;</code>
     */
    private $posting_characteristic_id = null;
    /**
     * <pre>
     * Fehlerhafte Eigenschaft zum Merkmal "PostingCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Gibt die Ursache des Fehlers an, also warum die Eigenschaft nicht übernommen werden konnte. Mögliche Werte : s. Beschreibung !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10003;</code>
     */
    private $error_code = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoModifyPostingPropertiesPu::initOnce();
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
     * ID eines Posting-Merkmals, auf das sich die fehlerhafte Eigenschaft "Value" bezieht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 10001;</code>
     */
    public function getPostingCharacteristicId()
    {
        return $this->posting_characteristic_id;
    }

    /**
     * <pre>
     * ID eines Posting-Merkmals, auf das sich die fehlerhafte Eigenschaft "Value" bezieht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 10001;</code>
     */
    public function setPostingCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->posting_characteristic_id = $var;
    }

    /**
     * <pre>
     * Fehlerhafte Eigenschaft zum Merkmal "PostingCharacteristicID"
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
     * Fehlerhafte Eigenschaft zum Merkmal "PostingCharacteristicID"
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
     * Gibt die Ursache des Fehlers an, also warum die Eigenschaft nicht übernommen werden konnte. Mögliche Werte : s. Beschreibung !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10003;</code>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * <pre>
     * Gibt die Ursache des Fehlers an, also warum die Eigenschaft nicht übernommen werden konnte. Mögliche Werte : s. Beschreibung !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10003;</code>
     */
    public function setErrorCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->error_code = $var;
    }

}

