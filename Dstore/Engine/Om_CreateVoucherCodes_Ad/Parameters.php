<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_CreateVoucherCodes_Ad.proto

namespace Dstore\Engine\Om_CreateVoucherCodes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_CreateVoucherCodes_Ad.Parameters</code>
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
     * <code>.dstore.values.IntegerValue number_of_codes = 2;</code>
     */
    private $number_of_codes = null;
    /**
     * <code>bool number_of_codes_null = 1002;</code>
     */
    private $number_of_codes_null = false;
    /**
     * <code>.dstore.values.TimestampValue valid_until = 3;</code>
     */
    private $valid_until = null;
    /**
     * <code>bool valid_until_null = 1003;</code>
     */
    private $valid_until_null = false;
    /**
     * <code>.dstore.values.StringValue new_voucher_code = 4;</code>
     */
    private $new_voucher_code = null;
    /**
     * <code>bool new_voucher_code_null = 1004;</code>
     */
    private $new_voucher_code_null = false;
    /**
     * <code>.dstore.values.TimestampValue creation_date = 5;</code>
     */
    private $creation_date = null;
    /**
     * <code>bool creation_date_null = 1005;</code>
     */
    private $creation_date_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmCreateVoucherCodesAd::initOnce();
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
     * <code>.dstore.values.IntegerValue number_of_codes = 2;</code>
     */
    public function getNumberOfCodes()
    {
        return $this->number_of_codes;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_codes = 2;</code>
     */
    public function setNumberOfCodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->number_of_codes = $var;
    }

    /**
     * <code>bool number_of_codes_null = 1002;</code>
     */
    public function getNumberOfCodesNull()
    {
        return $this->number_of_codes_null;
    }

    /**
     * <code>bool number_of_codes_null = 1002;</code>
     */
    public function setNumberOfCodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->number_of_codes_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_until = 3;</code>
     */
    public function getValidUntil()
    {
        return $this->valid_until;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_until = 3;</code>
     */
    public function setValidUntil(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_until = $var;
    }

    /**
     * <code>bool valid_until_null = 1003;</code>
     */
    public function getValidUntilNull()
    {
        return $this->valid_until_null;
    }

    /**
     * <code>bool valid_until_null = 1003;</code>
     */
    public function setValidUntilNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_until_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue new_voucher_code = 4;</code>
     */
    public function getNewVoucherCode()
    {
        return $this->new_voucher_code;
    }

    /**
     * <code>.dstore.values.StringValue new_voucher_code = 4;</code>
     */
    public function setNewVoucherCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->new_voucher_code = $var;
    }

    /**
     * <code>bool new_voucher_code_null = 1004;</code>
     */
    public function getNewVoucherCodeNull()
    {
        return $this->new_voucher_code_null;
    }

    /**
     * <code>bool new_voucher_code_null = 1004;</code>
     */
    public function setNewVoucherCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->new_voucher_code_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue creation_date = 5;</code>
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * <code>.dstore.values.TimestampValue creation_date = 5;</code>
     */
    public function setCreationDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->creation_date = $var;
    }

    /**
     * <code>bool creation_date_null = 1005;</code>
     */
    public function getCreationDateNull()
    {
        return $this->creation_date_null;
    }

    /**
     * <code>bool creation_date_null = 1005;</code>
     */
    public function setCreationDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->creation_date_null = $var;
    }

}

