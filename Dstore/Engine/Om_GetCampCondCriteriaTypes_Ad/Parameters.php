<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampCondCriteriaTypes_Ad.proto

namespace Dstore\Engine\Om_GetCampCondCriteriaTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCampCondCriteriaTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue criteria_type_id = 1;</code>
     */
    private $criteria_type_id = null;
    /**
     * <code>bool criteria_type_id_null = 1001;</code>
     */
    private $criteria_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCampCondCriteriaTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue criteria_type_id = 1;</code>
     */
    public function getCriteriaTypeId()
    {
        return $this->criteria_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue criteria_type_id = 1;</code>
     */
    public function setCriteriaTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->criteria_type_id = $var;
    }

    /**
     * <code>bool criteria_type_id_null = 1001;</code>
     */
    public function getCriteriaTypeIdNull()
    {
        return $this->criteria_type_id_null;
    }

    /**
     * <code>bool criteria_type_id_null = 1001;</code>
     */
    public function setCriteriaTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->criteria_type_id_null = $var;
    }

}
