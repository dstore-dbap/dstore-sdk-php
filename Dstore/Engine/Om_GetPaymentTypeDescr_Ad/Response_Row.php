<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPaymentTypeDescr_Ad.proto

namespace Dstore\Engine\Om_GetPaymentTypeDescr_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetPaymentTypeDescr_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Bezeichnung der Sprache "LanguageID"
     * </pre>
     *
     * <code>.dstore.values.StringValue language = 10001;</code>
     */
    private $language = null;
    /**
     * <pre>
     * Bezeichnung der Zahlungsart "&#64;PaymentTypeID" in der durch "LanguageID" angegebenen Sprache
     * </pre>
     *
     * <code>.dstore.values.StringValue payment_type_description = 10002;</code>
     */
    private $payment_type_description = null;
    /**
     * <pre>
     * ID einer Sprache, in der die Bezeichnung "PaymentTypeDescription" angegeben ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10003;</code>
     */
    private $language_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetPaymentTypeDescrAd::initOnce();
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
     * Bezeichnung der Sprache "LanguageID"
     * </pre>
     *
     * <code>.dstore.values.StringValue language = 10001;</code>
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * <pre>
     * Bezeichnung der Sprache "LanguageID"
     * </pre>
     *
     * <code>.dstore.values.StringValue language = 10001;</code>
     */
    public function setLanguage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->language = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Zahlungsart "&#64;PaymentTypeID" in der durch "LanguageID" angegebenen Sprache
     * </pre>
     *
     * <code>.dstore.values.StringValue payment_type_description = 10002;</code>
     */
    public function getPaymentTypeDescription()
    {
        return $this->payment_type_description;
    }

    /**
     * <pre>
     * Bezeichnung der Zahlungsart "&#64;PaymentTypeID" in der durch "LanguageID" angegebenen Sprache
     * </pre>
     *
     * <code>.dstore.values.StringValue payment_type_description = 10002;</code>
     */
    public function setPaymentTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->payment_type_description = $var;
    }

    /**
     * <pre>
     * ID einer Sprache, in der die Bezeichnung "PaymentTypeDescription" angegeben ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10003;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <pre>
     * ID einer Sprache, in der die Bezeichnung "PaymentTypeDescription" angegeben ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10003;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

}
