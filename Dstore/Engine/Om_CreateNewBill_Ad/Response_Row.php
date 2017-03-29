<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_CreateNewBill_Ad.proto

namespace Dstore\Engine\Om_CreateNewBill_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_CreateNewBill_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * "0" : Fehler bei einer Rechnungs-Information"1" : Fehler bei einer Rechnungs-Positions-Information"2" : Fehler bei einer Information zu einer "anderen" Rechnungs-Position
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_id = 10001;</code>
     */
    private $table_id = null;
    /**
     * <pre>
     * ID einer Informations-Art
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10002;</code>
     */
    private $information_type_id = null;
    /**
     * <pre>
     * Je nach "TableKeyID" steht hier entweder der Wert "0" (wenn "TableID = 0") oder die Nummer einer "Position" (wenn "TableID = 1" oder "TableID = 2"), zu der eine fehlerhafte Information vorliegt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_key_id = 10003;</code>
     */
    private $table_key_id = null;
    /**
     * <pre>
     * Fehler-Ursache. Mögliche Werte :"1" : Fehler aufgrund von Regeln (s. "om_GetBillInformationRules_Ad" bzw. "om_GetBillContentInfoRules_Ad")"2" : Fehler aufrund der "FieldTypeID" (Format des Wertes ist ungültig)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10004;</code>
     */
    private $error_code = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmCreateNewBillAd::initOnce();
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
     * "0" : Fehler bei einer Rechnungs-Information"1" : Fehler bei einer Rechnungs-Positions-Information"2" : Fehler bei einer Information zu einer "anderen" Rechnungs-Position
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_id = 10001;</code>
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * <pre>
     * "0" : Fehler bei einer Rechnungs-Information"1" : Fehler bei einer Rechnungs-Positions-Information"2" : Fehler bei einer Information zu einer "anderen" Rechnungs-Position
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_id = 10001;</code>
     */
    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->table_id = $var;
    }

    /**
     * <pre>
     * ID einer Informations-Art
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10002;</code>
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
     * <code>.dstore.values.IntegerValue information_type_id = 10002;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <pre>
     * Je nach "TableKeyID" steht hier entweder der Wert "0" (wenn "TableID = 0") oder die Nummer einer "Position" (wenn "TableID = 1" oder "TableID = 2"), zu der eine fehlerhafte Information vorliegt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_key_id = 10003;</code>
     */
    public function getTableKeyId()
    {
        return $this->table_key_id;
    }

    /**
     * <pre>
     * Je nach "TableKeyID" steht hier entweder der Wert "0" (wenn "TableID = 0") oder die Nummer einer "Position" (wenn "TableID = 1" oder "TableID = 2"), zu der eine fehlerhafte Information vorliegt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_key_id = 10003;</code>
     */
    public function setTableKeyId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->table_key_id = $var;
    }

    /**
     * <pre>
     * Fehler-Ursache. Mögliche Werte :"1" : Fehler aufgrund von Regeln (s. "om_GetBillInformationRules_Ad" bzw. "om_GetBillContentInfoRules_Ad")"2" : Fehler aufrund der "FieldTypeID" (Format des Wertes ist ungültig)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10004;</code>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * <pre>
     * Fehler-Ursache. Mögliche Werte :"1" : Fehler aufgrund von Regeln (s. "om_GetBillInformationRules_Ad" bzw. "om_GetBillContentInfoRules_Ad")"2" : Fehler aufrund der "FieldTypeID" (Format des Wertes ist ungültig)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 10004;</code>
     */
    public function setErrorCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->error_code = $var;
    }

}

