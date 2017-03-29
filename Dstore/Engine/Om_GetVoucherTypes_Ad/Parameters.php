<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetVoucherTypes_Ad.proto

namespace Dstore\Engine\Om_GetVoucherTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetVoucherTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue voucher_type_id = 1;</code>
     */
    private $voucher_type_id = null;
    /**
     * <code>bool voucher_type_id_null = 1001;</code>
     */
    private $voucher_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue v_code_origin_type_id = 2;</code>
     */
    private $v_code_origin_type_id = null;
    /**
     * <code>bool v_code_origin_type_id_null = 1002;</code>
     */
    private $v_code_origin_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue code_status = 3;</code>
     */
    private $code_status = null;
    /**
     * <code>bool code_status_null = 1003;</code>
     */
    private $code_status_null = false;
    /**
     * <code>.dstore.values.BooleanValue sort_by_code_creation_date = 4;</code>
     */
    private $sort_by_code_creation_date = null;
    /**
     * <code>bool sort_by_code_creation_date_null = 1004;</code>
     */
    private $sort_by_code_creation_date_null = false;
    /**
     * <code>.dstore.values.IntegerValue output_into_one_id = 5;</code>
     */
    private $output_into_one_id = null;
    /**
     * <code>bool output_into_one_id_null = 1005;</code>
     */
    private $output_into_one_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetVoucherTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue voucher_type_id = 1;</code>
     */
    public function getVoucherTypeId()
    {
        return $this->voucher_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue voucher_type_id = 1;</code>
     */
    public function setVoucherTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->voucher_type_id = $var;
    }

    /**
     * <code>bool voucher_type_id_null = 1001;</code>
     */
    public function getVoucherTypeIdNull()
    {
        return $this->voucher_type_id_null;
    }

    /**
     * <code>bool voucher_type_id_null = 1001;</code>
     */
    public function setVoucherTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->voucher_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue v_code_origin_type_id = 2;</code>
     */
    public function getVCodeOriginTypeId()
    {
        return $this->v_code_origin_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue v_code_origin_type_id = 2;</code>
     */
    public function setVCodeOriginTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->v_code_origin_type_id = $var;
    }

    /**
     * <code>bool v_code_origin_type_id_null = 1002;</code>
     */
    public function getVCodeOriginTypeIdNull()
    {
        return $this->v_code_origin_type_id_null;
    }

    /**
     * <code>bool v_code_origin_type_id_null = 1002;</code>
     */
    public function setVCodeOriginTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->v_code_origin_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue code_status = 3;</code>
     */
    public function getCodeStatus()
    {
        return $this->code_status;
    }

    /**
     * <code>.dstore.values.IntegerValue code_status = 3;</code>
     */
    public function setCodeStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->code_status = $var;
    }

    /**
     * <code>bool code_status_null = 1003;</code>
     */
    public function getCodeStatusNull()
    {
        return $this->code_status_null;
    }

    /**
     * <code>bool code_status_null = 1003;</code>
     */
    public function setCodeStatusNull($var)
    {
        GPBUtil::checkBool($var);
        $this->code_status_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue sort_by_code_creation_date = 4;</code>
     */
    public function getSortByCodeCreationDate()
    {
        return $this->sort_by_code_creation_date;
    }

    /**
     * <code>.dstore.values.BooleanValue sort_by_code_creation_date = 4;</code>
     */
    public function setSortByCodeCreationDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->sort_by_code_creation_date = $var;
    }

    /**
     * <code>bool sort_by_code_creation_date_null = 1004;</code>
     */
    public function getSortByCodeCreationDateNull()
    {
        return $this->sort_by_code_creation_date_null;
    }

    /**
     * <code>bool sort_by_code_creation_date_null = 1004;</code>
     */
    public function setSortByCodeCreationDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_by_code_creation_date_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue output_into_one_id = 5;</code>
     */
    public function getOutputIntoOneId()
    {
        return $this->output_into_one_id;
    }

    /**
     * <code>.dstore.values.IntegerValue output_into_one_id = 5;</code>
     */
    public function setOutputIntoOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->output_into_one_id = $var;
    }

    /**
     * <code>bool output_into_one_id_null = 1005;</code>
     */
    public function getOutputIntoOneIdNull()
    {
        return $this->output_into_one_id_null;
    }

    /**
     * <code>bool output_into_one_id_null = 1005;</code>
     */
    public function setOutputIntoOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_into_one_id_null = $var;
    }

}

