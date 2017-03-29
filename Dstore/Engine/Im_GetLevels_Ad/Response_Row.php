<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetLevels_Ad.proto

namespace Dstore\Engine\Im_GetLevels_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetLevels_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Nummer einer Hierarchie. Eine höhere Nummer bedeutet eine niedrigere Hierarchie. Das "Root"-Element hat die Nummer "1". Im Artikelbaum muß die Hierarchie-Nummer eines Nachfolger-Elementes immer höher als die seines Vorgängers sein.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10001;</code>
     */
    private $level_no = null;
    /**
     * <pre>
     * Bezeichnung der Hierarchie
     * </pre>
     *
     * <code>.dstore.values.StringValue level_description = 10002;</code>
     */
    private $level_description = null;
    /**
     * <pre>
     * ID eines Templates, das Elemente auf dieser Hierarchie per default zugewiesen bekommen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue default_template_id = 10003;</code>
     */
    private $default_template_id = null;
    /**
     * <pre>
     * ID eines Symbols, das Elemente auf dieser Hierarchie per default zugewiesen bekommen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue default_symbol_id = 10004;</code>
     */
    private $default_symbol_id = null;
    /**
     * <pre>
     * ID einer Hierarchie
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_id = 10005;</code>
     */
    private $level_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetLevelsAd::initOnce();
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
     * Nummer einer Hierarchie. Eine höhere Nummer bedeutet eine niedrigere Hierarchie. Das "Root"-Element hat die Nummer "1". Im Artikelbaum muß die Hierarchie-Nummer eines Nachfolger-Elementes immer höher als die seines Vorgängers sein.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10001;</code>
     */
    public function getLevelNo()
    {
        return $this->level_no;
    }

    /**
     * <pre>
     * Nummer einer Hierarchie. Eine höhere Nummer bedeutet eine niedrigere Hierarchie. Das "Root"-Element hat die Nummer "1". Im Artikelbaum muß die Hierarchie-Nummer eines Nachfolger-Elementes immer höher als die seines Vorgängers sein.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_no = 10001;</code>
     */
    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->level_no = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Hierarchie
     * </pre>
     *
     * <code>.dstore.values.StringValue level_description = 10002;</code>
     */
    public function getLevelDescription()
    {
        return $this->level_description;
    }

    /**
     * <pre>
     * Bezeichnung der Hierarchie
     * </pre>
     *
     * <code>.dstore.values.StringValue level_description = 10002;</code>
     */
    public function setLevelDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->level_description = $var;
    }

    /**
     * <pre>
     * ID eines Templates, das Elemente auf dieser Hierarchie per default zugewiesen bekommen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue default_template_id = 10003;</code>
     */
    public function getDefaultTemplateId()
    {
        return $this->default_template_id;
    }

    /**
     * <pre>
     * ID eines Templates, das Elemente auf dieser Hierarchie per default zugewiesen bekommen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue default_template_id = 10003;</code>
     */
    public function setDefaultTemplateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->default_template_id = $var;
    }

    /**
     * <pre>
     * ID eines Symbols, das Elemente auf dieser Hierarchie per default zugewiesen bekommen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue default_symbol_id = 10004;</code>
     */
    public function getDefaultSymbolId()
    {
        return $this->default_symbol_id;
    }

    /**
     * <pre>
     * ID eines Symbols, das Elemente auf dieser Hierarchie per default zugewiesen bekommen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue default_symbol_id = 10004;</code>
     */
    public function setDefaultSymbolId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->default_symbol_id = $var;
    }

    /**
     * <pre>
     * ID einer Hierarchie
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_id = 10005;</code>
     */
    public function getLevelId()
    {
        return $this->level_id;
    }

    /**
     * <pre>
     * ID einer Hierarchie
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_id = 10005;</code>
     */
    public function setLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->level_id = $var;
    }

}

