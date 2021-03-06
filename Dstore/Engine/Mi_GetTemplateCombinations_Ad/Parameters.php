<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTemplateCombinations_Ad.proto

namespace Dstore\Engine\Mi_GetTemplateCombinations_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetTemplateCombinations_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue source_template_id = 1;</code>
     */
    private $source_template_id = null;
    /**
     * <code>bool source_template_id_null = 1001;</code>
     */
    private $source_template_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetTemplateCombinationsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue source_template_id = 1;</code>
     */
    public function getSourceTemplateId()
    {
        return $this->source_template_id;
    }

    /**
     * <code>.dstore.values.IntegerValue source_template_id = 1;</code>
     */
    public function setSourceTemplateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->source_template_id = $var;
    }

    /**
     * <code>bool source_template_id_null = 1001;</code>
     */
    public function getSourceTemplateIdNull()
    {
        return $this->source_template_id_null;
    }

    /**
     * <code>bool source_template_id_null = 1001;</code>
     */
    public function setSourceTemplateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->source_template_id_null = $var;
    }

}

