<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetReturnCodes_Ad.proto

namespace Dstore\Engine\Do_GetReturnCodes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.do_GetReturnCodes_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Ein Return-Code, der von "dStore"-Prozeduren oder -Triggern zurückgegeben werden kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue return_code = 10001;</code>
     */
    private $return_code = null;
    /**
     * <pre>
     * Kurz-Beschreibung des "ReturnCode"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10002;</code>
     */
    private $description = null;
    /**
     * <pre>
     * ID der Kategorie, der "ReturnCode" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue return_code_category_id = 10003;</code>
     */
    private $return_code_category_id = null;
    /**
     * <pre>
     * Ausführliche Beschreibung des "ReturnCode"
     * </pre>
     *
     * <code>.dstore.values.StringValue detailed_description = 10004;</code>
     */
    private $detailed_description = null;
    /**
     * <pre>
     * Bezeichnung der Kategorie "ReturnCodeCategoryID"
     * </pre>
     *
     * <code>.dstore.values.StringValue return_code_category = 10005;</code>
     */
    private $return_code_category = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\DoGetReturnCodesAd::initOnce();
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
     * Ein Return-Code, der von "dStore"-Prozeduren oder -Triggern zurückgegeben werden kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue return_code = 10001;</code>
     */
    public function getReturnCode()
    {
        return $this->return_code;
    }

    /**
     * <pre>
     * Ein Return-Code, der von "dStore"-Prozeduren oder -Triggern zurückgegeben werden kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue return_code = 10001;</code>
     */
    public function setReturnCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->return_code = $var;
    }

    /**
     * <pre>
     * Kurz-Beschreibung des "ReturnCode"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10002;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Kurz-Beschreibung des "ReturnCode"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10002;</code>
     */
    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description = $var;
    }

    /**
     * <pre>
     * ID der Kategorie, der "ReturnCode" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue return_code_category_id = 10003;</code>
     */
    public function getReturnCodeCategoryId()
    {
        return $this->return_code_category_id;
    }

    /**
     * <pre>
     * ID der Kategorie, der "ReturnCode" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue return_code_category_id = 10003;</code>
     */
    public function setReturnCodeCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->return_code_category_id = $var;
    }

    /**
     * <pre>
     * Ausführliche Beschreibung des "ReturnCode"
     * </pre>
     *
     * <code>.dstore.values.StringValue detailed_description = 10004;</code>
     */
    public function getDetailedDescription()
    {
        return $this->detailed_description;
    }

    /**
     * <pre>
     * Ausführliche Beschreibung des "ReturnCode"
     * </pre>
     *
     * <code>.dstore.values.StringValue detailed_description = 10004;</code>
     */
    public function setDetailedDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->detailed_description = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Kategorie "ReturnCodeCategoryID"
     * </pre>
     *
     * <code>.dstore.values.StringValue return_code_category = 10005;</code>
     */
    public function getReturnCodeCategory()
    {
        return $this->return_code_category;
    }

    /**
     * <pre>
     * Bezeichnung der Kategorie "ReturnCodeCategoryID"
     * </pre>
     *
     * <code>.dstore.values.StringValue return_code_category = 10005;</code>
     */
    public function setReturnCodeCategory(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->return_code_category = $var;
    }

}
