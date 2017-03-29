<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_UpdateTrolley_Pu.proto

namespace Dstore\Engine\Om_UpdateTrolley_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_UpdateTrolley_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID der Informations-Art bei der es einen Fehler gab (-&gt; "ErrorCode")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10001;</code>
     */
    private $information_type_id = null;
    /**
     * <pre>
     * ID eines Elementes im historischen Artikelbaum, die im Warenkorb liegt und geändert wurde - z.Zt. also "&#64;HTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10002;</code>
     */
    private $h_tree_node_id = null;
    /**
     * <pre>
     * Dieser Code gibt Auskunft über die Ursache des Fehlers. Folgende Werte sind möglich :"1" : Die "Information" entspricht nicht der zur "InformationTypeID" konfigurierten "FieldTypeID", d.h. das Format des Wertes ist ungültig
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10003;</code>
     */
    private $error_code = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmUpdateTrolleyPu::initOnce();
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
     * ID der Informations-Art bei der es einen Fehler gab (-&gt; "ErrorCode")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10001;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <pre>
     * ID der Informations-Art bei der es einen Fehler gab (-&gt; "ErrorCode")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10001;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <pre>
     * ID eines Elementes im historischen Artikelbaum, die im Warenkorb liegt und geändert wurde - z.Zt. also "&#64;HTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10002;</code>
     */
    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    /**
     * <pre>
     * ID eines Elementes im historischen Artikelbaum, die im Warenkorb liegt und geändert wurde - z.Zt. also "&#64;HTreeNodeID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10002;</code>
     */
    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->h_tree_node_id = $var;
    }

    /**
     * <pre>
     * Dieser Code gibt Auskunft über die Ursache des Fehlers. Folgende Werte sind möglich :"1" : Die "Information" entspricht nicht der zur "InformationTypeID" konfigurierten "FieldTypeID", d.h. das Format des Wertes ist ungültig
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10003;</code>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * <pre>
     * Dieser Code gibt Auskunft über die Ursache des Fehlers. Folgende Werte sind möglich :"1" : Die "Information" entspricht nicht der zur "InformationTypeID" konfigurierten "FieldTypeID", d.h. das Format des Wertes ist ungültig
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10003;</code>
     */
    public function setErrorCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->error_code = $var;
    }

}

