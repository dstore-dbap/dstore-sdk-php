<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderSurchInfoTypes_Ad.proto

namespace Dstore\Engine\Om_GetOrderSurchInfoTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetOrderSurchInfoTypes_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID einer Informations-Art
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10001;</code>
     */
    private $information_type_id = null;
    /**
     * <pre>
     * ID eines "Feld-Typs", von dem alle Informationen des Typs "InformationTypeID" sein müssen (z.B. "Text mit maximal 20 Zeichen")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue field_type_id = 10002;</code>
     */
    private $field_type_id = null;
    /**
     * <pre>
     * Bezeichnung der "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10003;</code>
     */
    private $information_type = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetOrderSurchInfoTypesAd::initOnce();
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
     * ID einer Informations-Art
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
     * ID einer Informations-Art
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
     * ID eines "Feld-Typs", von dem alle Informationen des Typs "InformationTypeID" sein müssen (z.B. "Text mit maximal 20 Zeichen")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue field_type_id = 10002;</code>
     */
    public function getFieldTypeId()
    {
        return $this->field_type_id;
    }

    /**
     * <pre>
     * ID eines "Feld-Typs", von dem alle Informationen des Typs "InformationTypeID" sein müssen (z.B. "Text mit maximal 20 Zeichen")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue field_type_id = 10002;</code>
     */
    public function setFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->field_type_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10003;</code>
     */
    public function getInformationType()
    {
        return $this->information_type;
    }

    /**
     * <pre>
     * Bezeichnung der "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10003;</code>
     */
    public function setInformationType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->information_type = $var;
    }

}

