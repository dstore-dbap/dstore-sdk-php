<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcedureParameters_Ad.proto

namespace Dstore\Engine\Do_GetProcedureParameters_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.do_GetProcedureParameters_Ad.Response.Row</code>
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
     * Seit welcher dStore-Version die Beschreibung "Description" gilt
     * </pre>
     *
     * <code>.dstore.values.StringValue description_valid_since_version = 10002;</code>
     */
    private $description_valid_since_version = null;
    /**
     * <pre>
     * Beschreibung der Bedeutung und Funktionsweise des Parameters "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10003;</code>
     */
    private $description = null;
    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die maximale Anzahl Stellen an, die ein Wert für den Parameter "ParameterName" enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue precision_value = 10004;</code>
     */
    private $precision_value = null;
    /**
     * <pre>
     * Parameter der Prozedur "ProcedureName"
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 10005;</code>
     */
    private $parameter_name = null;
    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die Genauigkeit, sprich die maximale Anzahl an Nachkomma-Stellen an, die ein Wert für den Parameter "ParameterName" enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue scale = 10006;</code>
     */
    private $scale = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge des Parameters "ParameterName" innerhalb aller Parameter der Prozedur "ProcedureName". "0" bedeutet, daß der Parameter nicht verwendet wird, also zwar in einer älteren Version vorhanden war, aber aktuell nicht mehr gültig ist.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10007;</code>
     */
    private $sort_no = null;
    /**
     * <pre>
     * Der Wert, mit dem der Parameter "ParameterName" vorbelegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue default_value = 10008;</code>
     */
    private $default_value = null;
    /**
     * <pre>
     * Wieviel Byte können Werte, die für den Parameter "ParameterName" übergeben werden, maximal enthalten. Bei vielen Daten-Typen ist die Speicherbelegung immer so groß wie dieser Wert (bei numerischen Daten-Typen z.B.).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue length = 10009;</code>
     */
    private $length = null;
    /**
     * <pre>
     * Wann die Beschreibung "Description" zuletzt geändert wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue description_last_edited = 10010;</code>
     */
    private $description_last_edited = null;
    /**
     * <pre>
     * Name einer Prozedur (derzeit gleich "&#64;ProcedureName", aber evtl. ist es in einer späteren Version möglich, die Parameter für mehrere Prozeduren auszugeben...)
     * </pre>
     *
     * <code>.dstore.values.StringValue procedure_name = 10011;</code>
     */
    private $procedure_name = null;
    /**
     * <pre>
     * Seit welcher Version gibt es den Parameter "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue introduced_indstore_version = 10012;</code>
     */
    private $introduced_indstore_version = null;
    /**
     * <pre>
     * Gibt den Daten-Typ des Parameters "ParameterName" an ("varchar", "tinyint", etc.)
     * </pre>
     *
     * <code>.dstore.values.StringValue data_type = 10013;</code>
     */
    private $data_type = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\DoGetProcedureParametersAd::initOnce();
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
     * Seit welcher dStore-Version die Beschreibung "Description" gilt
     * </pre>
     *
     * <code>.dstore.values.StringValue description_valid_since_version = 10002;</code>
     */
    public function getDescriptionValidSinceVersion()
    {
        return $this->description_valid_since_version;
    }

    /**
     * <pre>
     * Seit welcher dStore-Version die Beschreibung "Description" gilt
     * </pre>
     *
     * <code>.dstore.values.StringValue description_valid_since_version = 10002;</code>
     */
    public function setDescriptionValidSinceVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description_valid_since_version = $var;
    }

    /**
     * <pre>
     * Beschreibung der Bedeutung und Funktionsweise des Parameters "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10003;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Beschreibung der Bedeutung und Funktionsweise des Parameters "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10003;</code>
     */
    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description = $var;
    }

    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die maximale Anzahl Stellen an, die ein Wert für den Parameter "ParameterName" enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue precision_value = 10004;</code>
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
     * <code>.dstore.values.IntegerValue precision_value = 10004;</code>
     */
    public function setPrecisionValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->precision_value = $var;
    }

    /**
     * <pre>
     * Parameter der Prozedur "ProcedureName"
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 10005;</code>
     */
    public function getParameterName()
    {
        return $this->parameter_name;
    }

    /**
     * <pre>
     * Parameter der Prozedur "ProcedureName"
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 10005;</code>
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
     * <code>.dstore.values.IntegerValue scale = 10006;</code>
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
     * <code>.dstore.values.IntegerValue scale = 10006;</code>
     */
    public function setScale(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->scale = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge des Parameters "ParameterName" innerhalb aller Parameter der Prozedur "ProcedureName". "0" bedeutet, daß der Parameter nicht verwendet wird, also zwar in einer älteren Version vorhanden war, aber aktuell nicht mehr gültig ist.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10007;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge des Parameters "ParameterName" innerhalb aller Parameter der Prozedur "ProcedureName". "0" bedeutet, daß der Parameter nicht verwendet wird, also zwar in einer älteren Version vorhanden war, aber aktuell nicht mehr gültig ist.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10007;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

    /**
     * <pre>
     * Der Wert, mit dem der Parameter "ParameterName" vorbelegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue default_value = 10008;</code>
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * <pre>
     * Der Wert, mit dem der Parameter "ParameterName" vorbelegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue default_value = 10008;</code>
     */
    public function setDefaultValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->default_value = $var;
    }

    /**
     * <pre>
     * Wieviel Byte können Werte, die für den Parameter "ParameterName" übergeben werden, maximal enthalten. Bei vielen Daten-Typen ist die Speicherbelegung immer so groß wie dieser Wert (bei numerischen Daten-Typen z.B.).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue length = 10009;</code>
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
     * <code>.dstore.values.IntegerValue length = 10009;</code>
     */
    public function setLength(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->length = $var;
    }

    /**
     * <pre>
     * Wann die Beschreibung "Description" zuletzt geändert wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue description_last_edited = 10010;</code>
     */
    public function getDescriptionLastEdited()
    {
        return $this->description_last_edited;
    }

    /**
     * <pre>
     * Wann die Beschreibung "Description" zuletzt geändert wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue description_last_edited = 10010;</code>
     */
    public function setDescriptionLastEdited(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->description_last_edited = $var;
    }

    /**
     * <pre>
     * Name einer Prozedur (derzeit gleich "&#64;ProcedureName", aber evtl. ist es in einer späteren Version möglich, die Parameter für mehrere Prozeduren auszugeben...)
     * </pre>
     *
     * <code>.dstore.values.StringValue procedure_name = 10011;</code>
     */
    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    /**
     * <pre>
     * Name einer Prozedur (derzeit gleich "&#64;ProcedureName", aber evtl. ist es in einer späteren Version möglich, die Parameter für mehrere Prozeduren auszugeben...)
     * </pre>
     *
     * <code>.dstore.values.StringValue procedure_name = 10011;</code>
     */
    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->procedure_name = $var;
    }

    /**
     * <pre>
     * Seit welcher Version gibt es den Parameter "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue introduced_indstore_version = 10012;</code>
     */
    public function getIntroducedIndstoreVersion()
    {
        return $this->introduced_indstore_version;
    }

    /**
     * <pre>
     * Seit welcher Version gibt es den Parameter "ParameterName"
     * </pre>
     *
     * <code>.dstore.values.StringValue introduced_indstore_version = 10012;</code>
     */
    public function setIntroducedIndstoreVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->introduced_indstore_version = $var;
    }

    /**
     * <pre>
     * Gibt den Daten-Typ des Parameters "ParameterName" an ("varchar", "tinyint", etc.)
     * </pre>
     *
     * <code>.dstore.values.StringValue data_type = 10013;</code>
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * <pre>
     * Gibt den Daten-Typ des Parameters "ParameterName" an ("varchar", "tinyint", etc.)
     * </pre>
     *
     * <code>.dstore.values.StringValue data_type = 10013;</code>
     */
    public function setDataType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->data_type = $var;
    }

}
