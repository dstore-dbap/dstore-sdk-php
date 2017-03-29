<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetProcedureParameters.proto

namespace Dstore\Engine\Mi_GetProcedureParameters;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetProcedureParameters.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Handelt es sich bei dem Parameter "ParameterName" um einen Ausgabeparameter ("0" : Nein, "1" : Ja) ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_output_parameter = 10001;</code>
     */
    private $is_output_parameter = null;
    /**
     * <pre>
     * Wieviel Byte können Werte, die für den Parameter "ParameterName" übergeben werden, maximal enthalten. Bei vielen Daten-Typen ist die Speicherbelegung immer so groß wie dieser Wert (bei numerischen Daten-Typen z.B.).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue length = 10002;</code>
     */
    private $length = null;
    /**
     * <pre>
     * Nur relevant für numerische Daten-Typen (immer "0" sonst), wie z.B. "decimal" (aber auch "datetime" s. Beschreibung !) und gibt die Genauigkeit, sprich die maximale Anzahl an Nachkomma-Stellen, für Werte des Typs "JDBC_DatatypeID" an
     * </pre>
     *
     * <code>.dstore.values.LongValue j_d_b_c_scale = 10003;</code>
     */
    private $j_d_b_c_scale = null;
    /**
     * <pre>
     * Gibt bei numerischen Datentypen die maximale Anzahl Stellen an, die ein Wert für den Datentyp "JDBC_DatatypeID" haben kann, sonst die maximale Anzahl Bytes (z.B. beim "text"-Datentyp)
     * </pre>
     *
     * <code>.dstore.values.LongValue j_d_b_c_precision = 10004;</code>
     */
    private $j_d_b_c_precision = null;
    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die maximale Anzahl Stellen an, die ein Wert für den Parameter "ParameterName" enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue precision_value = 10005;</code>
     */
    private $precision_value = null;
    /**
     * <pre>
     * Name eines Parameters der Prozedur "&#64;ProcedureName"
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 10006;</code>
     */
    private $parameter_name = null;
    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die Genauigkeit, sprich die maximale Anzahl an Nachkomma-Stellen an, die ein Wert für den Parameter "ParameterName" enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue scale = 10007;</code>
     */
    private $scale = null;
    /**
     * <pre>
     * Entsprechung von "Datatype" im JDBC-Treiber
     * </pre>
     *
     * <code>.dstore.values.IntegerValue j_d_b_c_datatype_id = 10008;</code>
     */
    private $j_d_b_c_datatype_id = null;
    /**
     * <pre>
     * Daten-Typ des Parameters "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue datatype = 10009;</code>
     */
    private $datatype = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetProcedureParameters::initOnce();
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
     * Handelt es sich bei dem Parameter "ParameterName" um einen Ausgabeparameter ("0" : Nein, "1" : Ja) ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_output_parameter = 10001;</code>
     */
    public function getIsOutputParameter()
    {
        return $this->is_output_parameter;
    }

    /**
     * <pre>
     * Handelt es sich bei dem Parameter "ParameterName" um einen Ausgabeparameter ("0" : Nein, "1" : Ja) ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_output_parameter = 10001;</code>
     */
    public function setIsOutputParameter(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->is_output_parameter = $var;
    }

    /**
     * <pre>
     * Wieviel Byte können Werte, die für den Parameter "ParameterName" übergeben werden, maximal enthalten. Bei vielen Daten-Typen ist die Speicherbelegung immer so groß wie dieser Wert (bei numerischen Daten-Typen z.B.).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue length = 10002;</code>
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * <pre>
     * Wieviel Byte können Werte, die für den Parameter "ParameterName" übergeben werden, maximal enthalten. Bei vielen Daten-Typen ist die Speicherbelegung immer so groß wie dieser Wert (bei numerischen Daten-Typen z.B.).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue length = 10002;</code>
     */
    public function setLength(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->length = $var;
    }

    /**
     * <pre>
     * Nur relevant für numerische Daten-Typen (immer "0" sonst), wie z.B. "decimal" (aber auch "datetime" s. Beschreibung !) und gibt die Genauigkeit, sprich die maximale Anzahl an Nachkomma-Stellen, für Werte des Typs "JDBC_DatatypeID" an
     * </pre>
     *
     * <code>.dstore.values.LongValue j_d_b_c_scale = 10003;</code>
     */
    public function getJDBCScale()
    {
        return $this->j_d_b_c_scale;
    }

    /**
     * <pre>
     * Nur relevant für numerische Daten-Typen (immer "0" sonst), wie z.B. "decimal" (aber auch "datetime" s. Beschreibung !) und gibt die Genauigkeit, sprich die maximale Anzahl an Nachkomma-Stellen, für Werte des Typs "JDBC_DatatypeID" an
     * </pre>
     *
     * <code>.dstore.values.LongValue j_d_b_c_scale = 10003;</code>
     */
    public function setJDBCScale(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\LongValue::class);
        $this->j_d_b_c_scale = $var;
    }

    /**
     * <pre>
     * Gibt bei numerischen Datentypen die maximale Anzahl Stellen an, die ein Wert für den Datentyp "JDBC_DatatypeID" haben kann, sonst die maximale Anzahl Bytes (z.B. beim "text"-Datentyp)
     * </pre>
     *
     * <code>.dstore.values.LongValue j_d_b_c_precision = 10004;</code>
     */
    public function getJDBCPrecision()
    {
        return $this->j_d_b_c_precision;
    }

    /**
     * <pre>
     * Gibt bei numerischen Datentypen die maximale Anzahl Stellen an, die ein Wert für den Datentyp "JDBC_DatatypeID" haben kann, sonst die maximale Anzahl Bytes (z.B. beim "text"-Datentyp)
     * </pre>
     *
     * <code>.dstore.values.LongValue j_d_b_c_precision = 10004;</code>
     */
    public function setJDBCPrecision(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\LongValue::class);
        $this->j_d_b_c_precision = $var;
    }

    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die maximale Anzahl Stellen an, die ein Wert für den Parameter "ParameterName" enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue precision_value = 10005;</code>
     */
    public function getPrecisionValue()
    {
        return $this->precision_value;
    }

    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die maximale Anzahl Stellen an, die ein Wert für den Parameter "ParameterName" enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue precision_value = 10005;</code>
     */
    public function setPrecisionValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->precision_value = $var;
    }

    /**
     * <pre>
     * Name eines Parameters der Prozedur "&#64;ProcedureName"
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 10006;</code>
     */
    public function getParameterName()
    {
        return $this->parameter_name;
    }

    /**
     * <pre>
     * Name eines Parameters der Prozedur "&#64;ProcedureName"
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 10006;</code>
     */
    public function setParameterName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->parameter_name = $var;
    }

    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die Genauigkeit, sprich die maximale Anzahl an Nachkomma-Stellen an, die ein Wert für den Parameter "ParameterName" enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue scale = 10007;</code>
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die Genauigkeit, sprich die maximale Anzahl an Nachkomma-Stellen an, die ein Wert für den Parameter "ParameterName" enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue scale = 10007;</code>
     */
    public function setScale(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->scale = $var;
    }

    /**
     * <pre>
     * Entsprechung von "Datatype" im JDBC-Treiber
     * </pre>
     *
     * <code>.dstore.values.IntegerValue j_d_b_c_datatype_id = 10008;</code>
     */
    public function getJDBCDatatypeId()
    {
        return $this->j_d_b_c_datatype_id;
    }

    /**
     * <pre>
     * Entsprechung von "Datatype" im JDBC-Treiber
     * </pre>
     *
     * <code>.dstore.values.IntegerValue j_d_b_c_datatype_id = 10008;</code>
     */
    public function setJDBCDatatypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->j_d_b_c_datatype_id = $var;
    }

    /**
     * <pre>
     * Daten-Typ des Parameters "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue datatype = 10009;</code>
     */
    public function getDatatype()
    {
        return $this->datatype;
    }

    /**
     * <pre>
     * Daten-Typ des Parameters "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue datatype = 10009;</code>
     */
    public function setDatatype(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->datatype = $var;
    }

}

