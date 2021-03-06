<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyOrderContentInfo_Ad.proto

namespace Dstore\Engine\Om_ModifyOrderContentInfo_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyOrderContentInfo_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines Informationstyps, der übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10001;</code>
     */
    private $information_type_id = null;
    /**
     * <pre>
     * Welcher Fehler trat beim Versuch, eine Information des Typs "InformationTypeID" zur Position "OrderStateID" zu setzen/löschen auf ?- "1" : Der Status verbietet die Aktion- "2" : Das Format der Information ist ungültig
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10002;</code>
     */
    private $error_code = null;
    /**
     * <pre>
     * ID einer Auftrags-Position, die übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_content_id = 10003;</code>
     */
    private $order_content_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyOrderContentInfoAd::initOnce();
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
     * ID eines Informationstyps, der übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10001;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <pre>
     * ID eines Informationstyps, der übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10001;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <pre>
     * Welcher Fehler trat beim Versuch, eine Information des Typs "InformationTypeID" zur Position "OrderStateID" zu setzen/löschen auf ?- "1" : Der Status verbietet die Aktion- "2" : Das Format der Information ist ungültig
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10002;</code>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * <pre>
     * Welcher Fehler trat beim Versuch, eine Information des Typs "InformationTypeID" zur Position "OrderStateID" zu setzen/löschen auf ?- "1" : Der Status verbietet die Aktion- "2" : Das Format der Information ist ungültig
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10002;</code>
     */
    public function setErrorCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->error_code = $var;
    }

    /**
     * <pre>
     * ID einer Auftrags-Position, die übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_content_id = 10003;</code>
     */
    public function getOrderContentId()
    {
        return $this->order_content_id;
    }

    /**
     * <pre>
     * ID einer Auftrags-Position, die übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_content_id = 10003;</code>
     */
    public function setOrderContentId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_content_id = $var;
    }

}

