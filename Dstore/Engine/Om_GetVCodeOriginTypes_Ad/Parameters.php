<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetVCodeOriginTypes_Ad.proto

namespace Dstore\Engine\Om_GetVCodeOriginTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetVCodeOriginTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue voucher_code_origin_type_id = 1;</code>
     */
    private $voucher_code_origin_type_id = null;
    /**
     * <code>bool voucher_code_origin_type_id_null = 1001;</code>
     */
    private $voucher_code_origin_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetVCodeOriginTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue voucher_code_origin_type_id = 1;</code>
     */
    public function getVoucherCodeOriginTypeId()
    {
        return $this->voucher_code_origin_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue voucher_code_origin_type_id = 1;</code>
     */
    public function setVoucherCodeOriginTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->voucher_code_origin_type_id = $var;
    }

    /**
     * <code>bool voucher_code_origin_type_id_null = 1001;</code>
     */
    public function getVoucherCodeOriginTypeIdNull()
    {
        return $this->voucher_code_origin_type_id_null;
    }

    /**
     * <code>bool voucher_code_origin_type_id_null = 1001;</code>
     */
    public function setVoucherCodeOriginTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->voucher_code_origin_type_id_null = $var;
    }

}

