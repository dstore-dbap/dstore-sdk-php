<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTrolleySurchargeInfo_Pu.proto

namespace Dstore\Engine\Om_GetTrolleySurchargeInfo_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetTrolleySurchargeInfo_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue unique_id = 1;</code>
     */
    private $unique_id = null;
    /**
     * <code>bool unique_id_null = 1001;</code>
     */
    private $unique_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue position_no = 2;</code>
     */
    private $position_no = null;
    /**
     * <code>bool position_no_null = 1002;</code>
     */
    private $position_no_null = false;
    /**
     * <code>.dstore.values.IntegerValue information_type_id = 3;</code>
     */
    private $information_type_id = null;
    /**
     * <code>bool information_type_id_null = 1003;</code>
     */
    private $information_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetTrolleySurchargeInfoPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 1;</code>
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 1;</code>
     */
    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unique_id = $var;
    }

    /**
     * <code>bool unique_id_null = 1001;</code>
     */
    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    /**
     * <code>bool unique_id_null = 1001;</code>
     */
    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue position_no = 2;</code>
     */
    public function getPositionNo()
    {
        return $this->position_no;
    }

    /**
     * <code>.dstore.values.IntegerValue position_no = 2;</code>
     */
    public function setPositionNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->position_no = $var;
    }

    /**
     * <code>bool position_no_null = 1002;</code>
     */
    public function getPositionNoNull()
    {
        return $this->position_no_null;
    }

    /**
     * <code>bool position_no_null = 1002;</code>
     */
    public function setPositionNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->position_no_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 3;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 3;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <code>bool information_type_id_null = 1003;</code>
     */
    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    /**
     * <code>bool information_type_id_null = 1003;</code>
     */
    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
    }

}

