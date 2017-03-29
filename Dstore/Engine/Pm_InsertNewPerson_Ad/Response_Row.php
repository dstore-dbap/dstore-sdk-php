<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_InsertNewPerson_Ad.proto

namespace Dstore\Engine\Pm_InsertNewPerson_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_InsertNewPerson_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines Merkmals zu dem ein Fehler bzgl. der anzulegenden Eigenschaft auftrat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10001;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <pre>
     * Ein Code, der die Art bzw. Ursache des aufgetrenen Fehlers angibt (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue result_code = 10002;</code>
     */
    private $result_code = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmInsertNewPersonAd::initOnce();
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
     * ID eines Merkmals zu dem ein Fehler bzgl. der anzulegenden Eigenschaft auftrat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10001;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <pre>
     * ID eines Merkmals zu dem ein Fehler bzgl. der anzulegenden Eigenschaft auftrat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10001;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <pre>
     * Ein Code, der die Art bzw. Ursache des aufgetrenen Fehlers angibt (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue result_code = 10002;</code>
     */
    public function getResultCode()
    {
        return $this->result_code;
    }

    /**
     * <pre>
     * Ein Code, der die Art bzw. Ursache des aufgetrenen Fehlers angibt (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue result_code = 10002;</code>
     */
    public function setResultCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->result_code = $var;
    }

}

