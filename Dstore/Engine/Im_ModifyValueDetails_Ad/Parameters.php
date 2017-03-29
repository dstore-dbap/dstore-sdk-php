<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyValueDetails_Ad.proto

namespace Dstore\Engine\Im_ModifyValueDetails_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_ModifyValueDetails_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue value_id = 1;</code>
     */
    private $value_id = null;
    /**
     * <code>bool value_id_null = 1001;</code>
     */
    private $value_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue sort_no = 2;</code>
     */
    private $sort_no = null;
    /**
     * <code>bool sort_no_null = 1002;</code>
     */
    private $sort_no_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImModifyValueDetailsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue value_id = 1;</code>
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * <code>.dstore.values.IntegerValue value_id = 1;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

    /**
     * <code>bool value_id_null = 1001;</code>
     */
    public function getValueIdNull()
    {
        return $this->value_id_null;
    }

    /**
     * <code>bool value_id_null = 1001;</code>
     */
    public function setValueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_no = 2;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_no = 2;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

    /**
     * <code>bool sort_no_null = 1002;</code>
     */
    public function getSortNoNull()
    {
        return $this->sort_no_null;
    }

    /**
     * <code>bool sort_no_null = 1002;</code>
     */
    public function setSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_no_null = $var;
    }

}

