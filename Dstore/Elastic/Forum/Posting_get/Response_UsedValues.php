<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/elastic/forum/posting_get.proto

namespace Dstore\Elastic\Forum\Posting_get;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.elastic.forum.posting_get.Response.UsedValues</code>
 */
class Response_UsedValues extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string field_name = 1;</code>
     */
    private $field_name = '';
    /**
     * <code>repeated .dstore.elastic.forum.posting_get.Response.UsedValues.UsedValue value = 2;</code>
     */
    private $value;

    public function __construct() {
        \GPBMetadata\Dstore\Elastic\Forum\PostingGet::initOnce();
        parent::__construct();
    }

    /**
     * <code>string field_name = 1;</code>
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * <code>string field_name = 1;</code>
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;
    }

    /**
     * <code>repeated .dstore.elastic.forum.posting_get.Response.UsedValues.UsedValue value = 2;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>repeated .dstore.elastic.forum.posting_get.Response.UsedValues.UsedValue value = 2;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Elastic\Forum\Posting_get\Response_UsedValues_UsedValue::class);
        $this->value = $var;
    }

}

