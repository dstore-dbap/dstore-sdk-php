<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetLevelForNode_Pu.proto

namespace Dstore\Engine\Im_GetLevelForNode_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetLevelForNode_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Nummer der Hierarchie, der "&#64;NodeID" angehört. Eine höhere Nummer bedeutet eine niedrigere Hierarchie. Das "Root"-Element hat die Nummer "1". Im Artikelbaum muß die Hierarchie-Nummer eines Nachfolger-Elementes immer höher als die seines Vorgängers sein.
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
     * ID der Hierarchie "LevelNo"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_id = 10003;</code>
     */
    private $level_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetLevelForNodePu::initOnce();
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
     * Nummer der Hierarchie, der "&#64;NodeID" angehört. Eine höhere Nummer bedeutet eine niedrigere Hierarchie. Das "Root"-Element hat die Nummer "1". Im Artikelbaum muß die Hierarchie-Nummer eines Nachfolger-Elementes immer höher als die seines Vorgängers sein.
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
     * Nummer der Hierarchie, der "&#64;NodeID" angehört. Eine höhere Nummer bedeutet eine niedrigere Hierarchie. Das "Root"-Element hat die Nummer "1". Im Artikelbaum muß die Hierarchie-Nummer eines Nachfolger-Elementes immer höher als die seines Vorgängers sein.
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
     * ID der Hierarchie "LevelNo"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_id = 10003;</code>
     */
    public function getLevelId()
    {
        return $this->level_id;
    }

    /**
     * <pre>
     * ID der Hierarchie "LevelNo"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue level_id = 10003;</code>
     */
    public function setLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->level_id = $var;
    }

}

