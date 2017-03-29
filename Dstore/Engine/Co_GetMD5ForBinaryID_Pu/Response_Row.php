<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetMD5ForBinaryID_Pu.proto

namespace Dstore\Engine\Co_GetMD5ForBinaryID_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_GetMD5ForBinaryID_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Der "MD5-Hash" der durch "&#64;BinaryID" angegebenen Datei
     * </pre>
     *
     * <code>.dstore.values.StringValue m_d5_hash = 10001;</code>
     */
    private $m_d5_hash = null;
    /**
     * <pre>
     * Das Format der Datei (z.B. "gif" oder "jpg")
     * </pre>
     *
     * <code>.dstore.values.StringValue content_type = 20001;</code>
     */
    private $content_type = null;
    /**
     * <pre>
     * Erstellungsdatum der Datei
     * </pre>
     *
     * <code>.dstore.values.TimestampValue file_date_and_time = 20002;</code>
     */
    private $file_date_and_time = null;
    /**
     * <pre>
     * Größe der Datei in KiloBytes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue filesize_in_k_b = 20004;</code>
     */
    private $filesize_in_k_b = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoGetMD5ForBinaryIDPu::initOnce();
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
     * Der "MD5-Hash" der durch "&#64;BinaryID" angegebenen Datei
     * </pre>
     *
     * <code>.dstore.values.StringValue m_d5_hash = 10001;</code>
     */
    public function getMD5Hash()
    {
        return $this->m_d5_hash;
    }

    /**
     * <pre>
     * Der "MD5-Hash" der durch "&#64;BinaryID" angegebenen Datei
     * </pre>
     *
     * <code>.dstore.values.StringValue m_d5_hash = 10001;</code>
     */
    public function setMD5Hash(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->m_d5_hash = $var;
    }

    /**
     * <pre>
     * Das Format der Datei (z.B. "gif" oder "jpg")
     * </pre>
     *
     * <code>.dstore.values.StringValue content_type = 20001;</code>
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * <pre>
     * Das Format der Datei (z.B. "gif" oder "jpg")
     * </pre>
     *
     * <code>.dstore.values.StringValue content_type = 20001;</code>
     */
    public function setContentType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->content_type = $var;
    }

    /**
     * <pre>
     * Erstellungsdatum der Datei
     * </pre>
     *
     * <code>.dstore.values.TimestampValue file_date_and_time = 20002;</code>
     */
    public function getFileDateAndTime()
    {
        return $this->file_date_and_time;
    }

    /**
     * <pre>
     * Erstellungsdatum der Datei
     * </pre>
     *
     * <code>.dstore.values.TimestampValue file_date_and_time = 20002;</code>
     */
    public function setFileDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->file_date_and_time = $var;
    }

    /**
     * <pre>
     * Größe der Datei in KiloBytes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue filesize_in_k_b = 20004;</code>
     */
    public function getFilesizeInKB()
    {
        return $this->filesize_in_k_b;
    }

    /**
     * <pre>
     * Größe der Datei in KiloBytes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue filesize_in_k_b = 20004;</code>
     */
    public function setFilesizeInKB(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->filesize_in_k_b = $var;
    }

}

