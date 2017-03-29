<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetLanguageDescriptions_Ad.proto

namespace Dstore\Engine\Mi_GetLanguageDescriptions_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetLanguageDescriptions_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID der Sprache, in der Bezeichnung der durch "LanguageID" angegebenen Sprache übersetzt ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue translation_language_id = 10001;</code>
     */
    private $translation_language_id = null;
    /**
     * <pre>
     * Bezeichnung der Sprache "TranslationLanguageID" in der Standard-Sprache (-&gt; in "Settings" zum Schlüssel "DefaultLanguageID" konfiguriert)
     * </pre>
     *
     * <code>.dstore.values.StringValue translation_language_name = 10002;</code>
     */
    private $translation_language_name = null;
    /**
     * <pre>
     * Bezeichnung der Sprache "LanguageID" in der Standard-Sprache (-&gt; in "Settings" zum Schlüssel "DefaultLanguageID" konfiguriert)
     * </pre>
     *
     * <code>.dstore.values.StringValue language_name = 10003;</code>
     */
    private $language_name = null;
    /**
     * <pre>
     * Bezeichnung der durch "LanguageID" angegebenen Sprache in der durch "TranslationLanguageID" angegebenen Sprache
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_language_name = 10004;</code>
     */
    private $translated_language_name = null;
    /**
     * <pre>
     * ID einer Sprache
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10005;</code>
     */
    private $language_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetLanguageDescriptionsAd::initOnce();
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
     * ID der Sprache, in der Bezeichnung der durch "LanguageID" angegebenen Sprache übersetzt ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue translation_language_id = 10001;</code>
     */
    public function getTranslationLanguageId()
    {
        return $this->translation_language_id;
    }

    /**
     * <pre>
     * ID der Sprache, in der Bezeichnung der durch "LanguageID" angegebenen Sprache übersetzt ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue translation_language_id = 10001;</code>
     */
    public function setTranslationLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->translation_language_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Sprache "TranslationLanguageID" in der Standard-Sprache (-&gt; in "Settings" zum Schlüssel "DefaultLanguageID" konfiguriert)
     * </pre>
     *
     * <code>.dstore.values.StringValue translation_language_name = 10002;</code>
     */
    public function getTranslationLanguageName()
    {
        return $this->translation_language_name;
    }

    /**
     * <pre>
     * Bezeichnung der Sprache "TranslationLanguageID" in der Standard-Sprache (-&gt; in "Settings" zum Schlüssel "DefaultLanguageID" konfiguriert)
     * </pre>
     *
     * <code>.dstore.values.StringValue translation_language_name = 10002;</code>
     */
    public function setTranslationLanguageName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->translation_language_name = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Sprache "LanguageID" in der Standard-Sprache (-&gt; in "Settings" zum Schlüssel "DefaultLanguageID" konfiguriert)
     * </pre>
     *
     * <code>.dstore.values.StringValue language_name = 10003;</code>
     */
    public function getLanguageName()
    {
        return $this->language_name;
    }

    /**
     * <pre>
     * Bezeichnung der Sprache "LanguageID" in der Standard-Sprache (-&gt; in "Settings" zum Schlüssel "DefaultLanguageID" konfiguriert)
     * </pre>
     *
     * <code>.dstore.values.StringValue language_name = 10003;</code>
     */
    public function setLanguageName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->language_name = $var;
    }

    /**
     * <pre>
     * Bezeichnung der durch "LanguageID" angegebenen Sprache in der durch "TranslationLanguageID" angegebenen Sprache
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_language_name = 10004;</code>
     */
    public function getTranslatedLanguageName()
    {
        return $this->translated_language_name;
    }

    /**
     * <pre>
     * Bezeichnung der durch "LanguageID" angegebenen Sprache in der durch "TranslationLanguageID" angegebenen Sprache
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_language_name = 10004;</code>
     */
    public function setTranslatedLanguageName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->translated_language_name = $var;
    }

    /**
     * <pre>
     * ID einer Sprache
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10005;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <pre>
     * ID einer Sprache
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10005;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

}

