<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetVisits_Ad.proto

namespace Dstore\Engine\St_GetVisits_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_GetVisits_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Anzahl Besuche am Tag "Day"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue counter = 10001;</code>
     */
    private $counter = null;
    /**
     * <pre>
     * Ein (Tages-)Datum im Zeitraum "&#64;FromDate" bis "&#64;ToDate"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue day = 10002;</code>
     */
    private $day = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StGetVisitsAd::initOnce();
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
     * Anzahl Besuche am Tag "Day"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue counter = 10001;</code>
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * <pre>
     * Anzahl Besuche am Tag "Day"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue counter = 10001;</code>
     */
    public function setCounter(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->counter = $var;
    }

    /**
     * <pre>
     * Ein (Tages-)Datum im Zeitraum "&#64;FromDate" bis "&#64;ToDate"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue day = 10002;</code>
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * <pre>
     * Ein (Tages-)Datum im Zeitraum "&#64;FromDate" bis "&#64;ToDate"
     * </pre>
     *
     * <code>.dstore.values.TimestampValue day = 10002;</code>
     */
    public function setDay(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->day = $var;
    }

}

