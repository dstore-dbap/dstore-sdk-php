<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_SearchBinaries_Ad.proto

namespace Dstore\Engine\Mi_SearchBinaries_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_SearchBinaries_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines gefundenen Binaries
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10001;</code>
     */
    private $binary_code_id = null;
    /**
     * <pre>
     * Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;OutputBinaryCharacID1"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_value1 = 10002;</code>
     */
    private $binary_value1 = null;
    /**
     * <pre>
     * Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;OutputBinaryCharacID3"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_value3 = 10003;</code>
     */
    private $binary_value3 = null;
    /**
     * <pre>
     * Das sogenannte "Thumbnail" zur "BinaryCodeID"
     * </pre>
     *
     * <code>.dstore.values.BytesValue thumbnail_code = 10004;</code>
     */
    private $thumbnail_code = null;
    /**
     * <pre>
     * Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;OutputBinaryCharacID2"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_value2 = 10005;</code>
     */
    private $binary_value2 = null;
    /**
     * <pre>
     * Wo "BinaryCodeID" referenziert wird. Summe folgeder Werte :- "1" : "NodePresentations" (Artikel-Elemente)- "2" : "BinariesForValues" (Artikel-Eigenschaften)- "4" : "BinariesForPersons" (Personen)- "8" : "AuctionItems" (Auktionen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue used_in_table_bitmap = 10006;</code>
     */
    private $used_in_table_bitmap = null;
    /**
     * <pre>
     * Die Binärdaten selbst
     * </pre>
     *
     * <code>.dstore.values.BytesValue binary_code = 10007;</code>
     */
    private $binary_code = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiSearchBinariesAd::initOnce();
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
     * ID eines gefundenen Binaries
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10001;</code>
     */
    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    /**
     * <pre>
     * ID eines gefundenen Binaries
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10001;</code>
     */
    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_code_id = $var;
    }

    /**
     * <pre>
     * Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;OutputBinaryCharacID1"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_value1 = 10002;</code>
     */
    public function getBinaryValue1()
    {
        return $this->binary_value1;
    }

    /**
     * <pre>
     * Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;OutputBinaryCharacID1"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_value1 = 10002;</code>
     */
    public function setBinaryValue1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->binary_value1 = $var;
    }

    /**
     * <pre>
     * Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;OutputBinaryCharacID3"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_value3 = 10003;</code>
     */
    public function getBinaryValue3()
    {
        return $this->binary_value3;
    }

    /**
     * <pre>
     * Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;OutputBinaryCharacID3"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_value3 = 10003;</code>
     */
    public function setBinaryValue3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->binary_value3 = $var;
    }

    /**
     * <pre>
     * Das sogenannte "Thumbnail" zur "BinaryCodeID"
     * </pre>
     *
     * <code>.dstore.values.BytesValue thumbnail_code = 10004;</code>
     */
    public function getThumbnailCode()
    {
        return $this->thumbnail_code;
    }

    /**
     * <pre>
     * Das sogenannte "Thumbnail" zur "BinaryCodeID"
     * </pre>
     *
     * <code>.dstore.values.BytesValue thumbnail_code = 10004;</code>
     */
    public function setThumbnailCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BytesValue::class);
        $this->thumbnail_code = $var;
    }

    /**
     * <pre>
     * Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;OutputBinaryCharacID2"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_value2 = 10005;</code>
     */
    public function getBinaryValue2()
    {
        return $this->binary_value2;
    }

    /**
     * <pre>
     * Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;OutputBinaryCharacID2"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_value2 = 10005;</code>
     */
    public function setBinaryValue2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->binary_value2 = $var;
    }

    /**
     * <pre>
     * Wo "BinaryCodeID" referenziert wird. Summe folgeder Werte :- "1" : "NodePresentations" (Artikel-Elemente)- "2" : "BinariesForValues" (Artikel-Eigenschaften)- "4" : "BinariesForPersons" (Personen)- "8" : "AuctionItems" (Auktionen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue used_in_table_bitmap = 10006;</code>
     */
    public function getUsedInTableBitmap()
    {
        return $this->used_in_table_bitmap;
    }

    /**
     * <pre>
     * Wo "BinaryCodeID" referenziert wird. Summe folgeder Werte :- "1" : "NodePresentations" (Artikel-Elemente)- "2" : "BinariesForValues" (Artikel-Eigenschaften)- "4" : "BinariesForPersons" (Personen)- "8" : "AuctionItems" (Auktionen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue used_in_table_bitmap = 10006;</code>
     */
    public function setUsedInTableBitmap(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->used_in_table_bitmap = $var;
    }

    /**
     * <pre>
     * Die Binärdaten selbst
     * </pre>
     *
     * <code>.dstore.values.BytesValue binary_code = 10007;</code>
     */
    public function getBinaryCode()
    {
        return $this->binary_code;
    }

    /**
     * <pre>
     * Die Binärdaten selbst
     * </pre>
     *
     * <code>.dstore.values.BytesValue binary_code = 10007;</code>
     */
    public function setBinaryCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BytesValue::class);
        $this->binary_code = $var;
    }

}
