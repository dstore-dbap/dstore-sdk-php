<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTemplates_Ad.proto

namespace Dstore\Engine\Mi_GetTemplates_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetTemplates_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Bezeichnung des Templates "TemplateID"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10001;</code>
     */
    private $description = null;
    /**
     * <pre>
     * Bezeichnung des "Frames" (oder auch : des "Fensters"), in der das Template geladen wird (also eine Einstellung, die eher an Web-Applikationen gedacht ist)
     * </pre>
     *
     * <code>.dstore.values.StringValue frame_name = 10002;</code>
     */
    private $frame_name = null;
    /**
     * <pre>
     * Dateiname des Templates (in dem quasi der Source-Code des Templates gespeichert ist)
     * </pre>
     *
     * <code>.dstore.values.StringValue file_name = 10003;</code>
     */
    private $file_name = null;
    /**
     * <pre>
     * Handelt es sich um ein "SourceTemplate" ? Damit ist eine Art "Kontext" gemeint, unter der ein "Element" dargestellt werden soll. Z.B. soll die Produktansicht eines Artikel-Elementes in einem Suchergebnis anders sein als in der "Normalansicht".
     * </pre>
     *
     * <code>.dstore.values.BooleanValue can_be_source_template = 10004;</code>
     */
    private $can_be_source_template = null;
    /**
     * <pre>
     * Gibt an, ob die Daten, die in dem Template angezeigt werden, in der Client-Anwendung ge"cache"d werden dürfen oder ob die Daten immer "RealTime" dargestellt werden müssen
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_real_time_template = 10005;</code>
     */
    private $is_real_time_template = null;
    /**
     * <pre>
     * ID eines Templates (Näheres zu "Templates" : siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue template_id = 10006;</code>
     */
    private $template_id = null;
    /**
     * <pre>
     * ID einer Sprache. Da ein Template u.U. Text-Informationen enthält, entsteht eine Sprachabhängigkeit. Falls keine sprachabhängigen Informationen im Template vorhanden sind, kann die Sprache des Templates auch "Sprachunabhängig" (ID "0") sein.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10007;</code>
     */
    private $language_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetTemplatesAd::initOnce();
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
     * Bezeichnung des Templates "TemplateID"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10001;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Bezeichnung des Templates "TemplateID"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10001;</code>
     */
    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description = $var;
    }

    /**
     * <pre>
     * Bezeichnung des "Frames" (oder auch : des "Fensters"), in der das Template geladen wird (also eine Einstellung, die eher an Web-Applikationen gedacht ist)
     * </pre>
     *
     * <code>.dstore.values.StringValue frame_name = 10002;</code>
     */
    public function getFrameName()
    {
        return $this->frame_name;
    }

    /**
     * <pre>
     * Bezeichnung des "Frames" (oder auch : des "Fensters"), in der das Template geladen wird (also eine Einstellung, die eher an Web-Applikationen gedacht ist)
     * </pre>
     *
     * <code>.dstore.values.StringValue frame_name = 10002;</code>
     */
    public function setFrameName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->frame_name = $var;
    }

    /**
     * <pre>
     * Dateiname des Templates (in dem quasi der Source-Code des Templates gespeichert ist)
     * </pre>
     *
     * <code>.dstore.values.StringValue file_name = 10003;</code>
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * <pre>
     * Dateiname des Templates (in dem quasi der Source-Code des Templates gespeichert ist)
     * </pre>
     *
     * <code>.dstore.values.StringValue file_name = 10003;</code>
     */
    public function setFileName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->file_name = $var;
    }

    /**
     * <pre>
     * Handelt es sich um ein "SourceTemplate" ? Damit ist eine Art "Kontext" gemeint, unter der ein "Element" dargestellt werden soll. Z.B. soll die Produktansicht eines Artikel-Elementes in einem Suchergebnis anders sein als in der "Normalansicht".
     * </pre>
     *
     * <code>.dstore.values.BooleanValue can_be_source_template = 10004;</code>
     */
    public function getCanBeSourceTemplate()
    {
        return $this->can_be_source_template;
    }

    /**
     * <pre>
     * Handelt es sich um ein "SourceTemplate" ? Damit ist eine Art "Kontext" gemeint, unter der ein "Element" dargestellt werden soll. Z.B. soll die Produktansicht eines Artikel-Elementes in einem Suchergebnis anders sein als in der "Normalansicht".
     * </pre>
     *
     * <code>.dstore.values.BooleanValue can_be_source_template = 10004;</code>
     */
    public function setCanBeSourceTemplate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->can_be_source_template = $var;
    }

    /**
     * <pre>
     * Gibt an, ob die Daten, die in dem Template angezeigt werden, in der Client-Anwendung ge"cache"d werden dürfen oder ob die Daten immer "RealTime" dargestellt werden müssen
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_real_time_template = 10005;</code>
     */
    public function getIsRealTimeTemplate()
    {
        return $this->is_real_time_template;
    }

    /**
     * <pre>
     * Gibt an, ob die Daten, die in dem Template angezeigt werden, in der Client-Anwendung ge"cache"d werden dürfen oder ob die Daten immer "RealTime" dargestellt werden müssen
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_real_time_template = 10005;</code>
     */
    public function setIsRealTimeTemplate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->is_real_time_template = $var;
    }

    /**
     * <pre>
     * ID eines Templates (Näheres zu "Templates" : siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue template_id = 10006;</code>
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }

    /**
     * <pre>
     * ID eines Templates (Näheres zu "Templates" : siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue template_id = 10006;</code>
     */
    public function setTemplateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->template_id = $var;
    }

    /**
     * <pre>
     * ID einer Sprache. Da ein Template u.U. Text-Informationen enthält, entsteht eine Sprachabhängigkeit. Falls keine sprachabhängigen Informationen im Template vorhanden sind, kann die Sprache des Templates auch "Sprachunabhängig" (ID "0") sein.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10007;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <pre>
     * ID einer Sprache. Da ein Template u.U. Text-Informationen enthält, entsteht eine Sprachabhängigkeit. Falls keine sprachabhängigen Informationen im Template vorhanden sind, kann die Sprache des Templates auch "Sprachunabhängig" (ID "0") sein.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10007;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

}

