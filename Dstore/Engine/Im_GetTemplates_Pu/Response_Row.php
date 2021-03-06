<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetTemplates_Pu.proto

namespace Dstore\Engine\Im_GetTemplates_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetTemplates_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Bezeichnung des gefundenen Templates
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
     * Die ID des Elementes des Artikelbaums, das zum Wert in "&#64;Parameter" korrespondiert, zu dem also die Templates ermittelt wurden. (Falls "&#64;Type = 'TreeNodeID' steht hier natürlich das gleiche wie in "&#64;Parameter" !)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10004;</code>
     */
    private $tree_node_id = null;
    /**
     * <pre>
     * ID des zur "TreeNodeID" korrespondierenden Artikel-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10005;</code>
     */
    private $node_id = null;
    /**
     * <pre>
     * Falls diese Spalte den Wert "1" enthält, kann das Ergebnis der Ausführung des Templates NICHT ge"cache"t werden, d.h. alle verwendeten Prozeduraufrufe MÜSSEN bei jedem erneuten Laden des Templates ausgeführt werden.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_real_time_template = 10006;</code>
     */
    private $is_real_time_template = null;
    /**
     * <pre>
     * ID des gefundenen Templates
     * </pre>
     *
     * <code>.dstore.values.IntegerValue template_id = 10007;</code>
     */
    private $template_id = null;
    /**
     * <pre>
     * ID der Sprache, für die das Template gilt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10008;</code>
     */
    private $language_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetTemplatesPu::initOnce();
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
     * Bezeichnung des gefundenen Templates
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
     * Bezeichnung des gefundenen Templates
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
     * Die ID des Elementes des Artikelbaums, das zum Wert in "&#64;Parameter" korrespondiert, zu dem also die Templates ermittelt wurden. (Falls "&#64;Type = 'TreeNodeID' steht hier natürlich das gleiche wie in "&#64;Parameter" !)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10004;</code>
     */
    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    /**
     * <pre>
     * Die ID des Elementes des Artikelbaums, das zum Wert in "&#64;Parameter" korrespondiert, zu dem also die Templates ermittelt wurden. (Falls "&#64;Type = 'TreeNodeID' steht hier natürlich das gleiche wie in "&#64;Parameter" !)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10004;</code>
     */
    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tree_node_id = $var;
    }

    /**
     * <pre>
     * ID des zur "TreeNodeID" korrespondierenden Artikel-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10005;</code>
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * <pre>
     * ID des zur "TreeNodeID" korrespondierenden Artikel-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10005;</code>
     */
    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_id = $var;
    }

    /**
     * <pre>
     * Falls diese Spalte den Wert "1" enthält, kann das Ergebnis der Ausführung des Templates NICHT ge"cache"t werden, d.h. alle verwendeten Prozeduraufrufe MÜSSEN bei jedem erneuten Laden des Templates ausgeführt werden.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_real_time_template = 10006;</code>
     */
    public function getIsRealTimeTemplate()
    {
        return $this->is_real_time_template;
    }

    /**
     * <pre>
     * Falls diese Spalte den Wert "1" enthält, kann das Ergebnis der Ausführung des Templates NICHT ge"cache"t werden, d.h. alle verwendeten Prozeduraufrufe MÜSSEN bei jedem erneuten Laden des Templates ausgeführt werden.
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_real_time_template = 10006;</code>
     */
    public function setIsRealTimeTemplate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->is_real_time_template = $var;
    }

    /**
     * <pre>
     * ID des gefundenen Templates
     * </pre>
     *
     * <code>.dstore.values.IntegerValue template_id = 10007;</code>
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }

    /**
     * <pre>
     * ID des gefundenen Templates
     * </pre>
     *
     * <code>.dstore.values.IntegerValue template_id = 10007;</code>
     */
    public function setTemplateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->template_id = $var;
    }

    /**
     * <pre>
     * ID der Sprache, für die das Template gilt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10008;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <pre>
     * ID der Sprache, für die das Template gilt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10008;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

}

