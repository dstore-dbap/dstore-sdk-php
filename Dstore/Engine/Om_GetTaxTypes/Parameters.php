<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTaxTypes.proto

namespace Dstore\Engine\Om_GetTaxTypes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetTaxTypes.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue tax_type_id = 1;</code>
     */
    private $tax_type_id = null;
    /**
     * <code>bool tax_type_id_null = 1001;</code>
     */
    private $tax_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetTaxTypes::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue tax_type_id = 1;</code>
     */
    public function getTaxTypeId()
    {
        return $this->tax_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue tax_type_id = 1;</code>
     */
    public function setTaxTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tax_type_id = $var;
    }

    /**
     * <code>bool tax_type_id_null = 1001;</code>
     */
    public function getTaxTypeIdNull()
    {
        return $this->tax_type_id_null;
    }

    /**
     * <code>bool tax_type_id_null = 1001;</code>
     */
    public function setTaxTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tax_type_id_null = $var;
    }

}

