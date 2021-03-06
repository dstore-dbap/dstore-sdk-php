<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTrolleyInfoTypes_Ad.proto

namespace Dstore\Engine\Om_GetTrolleyInfoTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetTrolleyInfoTypes_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines "Feld-Typs", von dem alle Informationen des Typs "TrolleyInformationTypeID" sein müssen (z.B. "Text mit maximal 20 Zeichen")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue field_type_id = 10001;</code>
     */
    private $field_type_id = null;
    /**
     * <pre>
     * ID eines Typs von Informationen zu Aufträgen (s. "om_GetOrderInformationTypes_Ad"). Stellt das "Pendant" zur "TrolleyInformationTypeID" und ist für den Parameter "&#64;AddOrderInformation" von "om_CopyFromTrolleyToOrder_Pu" relevant.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue corresponding_order_info_type_id = 10002;</code>
     */
    private $corresponding_order_info_type_id = null;
    /**
     * <pre>
     * ID eines Informations-Typs
     * </pre>
     *
     * <code>.dstore.values.IntegerValue trolley_information_type_id = 10003;</code>
     */
    private $trolley_information_type_id = null;
    /**
     * <pre>
     * Bezeichnung des Informations-Typs "TrolleyInformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10004;</code>
     */
    private $information_type = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetTrolleyInfoTypesAd::initOnce();
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
     * ID eines "Feld-Typs", von dem alle Informationen des Typs "TrolleyInformationTypeID" sein müssen (z.B. "Text mit maximal 20 Zeichen")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue field_type_id = 10001;</code>
     */
    public function getFieldTypeId()
    {
        return $this->field_type_id;
    }

    /**
     * <pre>
     * ID eines "Feld-Typs", von dem alle Informationen des Typs "TrolleyInformationTypeID" sein müssen (z.B. "Text mit maximal 20 Zeichen")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue field_type_id = 10001;</code>
     */
    public function setFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->field_type_id = $var;
    }

    /**
     * <pre>
     * ID eines Typs von Informationen zu Aufträgen (s. "om_GetOrderInformationTypes_Ad"). Stellt das "Pendant" zur "TrolleyInformationTypeID" und ist für den Parameter "&#64;AddOrderInformation" von "om_CopyFromTrolleyToOrder_Pu" relevant.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue corresponding_order_info_type_id = 10002;</code>
     */
    public function getCorrespondingOrderInfoTypeId()
    {
        return $this->corresponding_order_info_type_id;
    }

    /**
     * <pre>
     * ID eines Typs von Informationen zu Aufträgen (s. "om_GetOrderInformationTypes_Ad"). Stellt das "Pendant" zur "TrolleyInformationTypeID" und ist für den Parameter "&#64;AddOrderInformation" von "om_CopyFromTrolleyToOrder_Pu" relevant.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue corresponding_order_info_type_id = 10002;</code>
     */
    public function setCorrespondingOrderInfoTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->corresponding_order_info_type_id = $var;
    }

    /**
     * <pre>
     * ID eines Informations-Typs
     * </pre>
     *
     * <code>.dstore.values.IntegerValue trolley_information_type_id = 10003;</code>
     */
    public function getTrolleyInformationTypeId()
    {
        return $this->trolley_information_type_id;
    }

    /**
     * <pre>
     * ID eines Informations-Typs
     * </pre>
     *
     * <code>.dstore.values.IntegerValue trolley_information_type_id = 10003;</code>
     */
    public function setTrolleyInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->trolley_information_type_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Informations-Typs "TrolleyInformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10004;</code>
     */
    public function getInformationType()
    {
        return $this->information_type;
    }

    /**
     * <pre>
     * Bezeichnung des Informations-Typs "TrolleyInformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10004;</code>
     */
    public function setInformationType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->information_type = $var;
    }

}

