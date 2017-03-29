<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTaxTypes.proto

namespace Dstore\Engine\Om_GetTaxTypes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetTaxTypes.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Bezeichnung der "TaxTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue tax_type = 10001;</code>
     */
    private $tax_type = null;
    /**
     * <pre>
     * ID einer Steuerart - es sind nur fest codierte Werte (wg. Abwärtskompatibilität) möglich :- "1" : Steuersatz-Art für "Zahlungskosten"- "2" : Steuersatz-Art für "Versandkosten"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tax_type_id = 10002;</code>
     */
    private $tax_type_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetTaxTypes::initOnce();
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
     * Bezeichnung der "TaxTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue tax_type = 10001;</code>
     */
    public function getTaxType()
    {
        return $this->tax_type;
    }

    /**
     * <pre>
     * Bezeichnung der "TaxTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue tax_type = 10001;</code>
     */
    public function setTaxType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->tax_type = $var;
    }

    /**
     * <pre>
     * ID einer Steuerart - es sind nur fest codierte Werte (wg. Abwärtskompatibilität) möglich :- "1" : Steuersatz-Art für "Zahlungskosten"- "2" : Steuersatz-Art für "Versandkosten"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tax_type_id = 10002;</code>
     */
    public function getTaxTypeId()
    {
        return $this->tax_type_id;
    }

    /**
     * <pre>
     * ID einer Steuerart - es sind nur fest codierte Werte (wg. Abwärtskompatibilität) möglich :- "1" : Steuersatz-Art für "Zahlungskosten"- "2" : Steuersatz-Art für "Versandkosten"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tax_type_id = 10002;</code>
     */
    public function setTaxTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tax_type_id = $var;
    }

}

