<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/elastic/elastic.proto

namespace Dstore\Elastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.elastic.Sort.FieldSort</code>
 */
class Sort_FieldSort extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string field_name = 1;</code>
     */
    private $field_name = '';
    /**
     * <code>.dstore.elastic.Sort.Order sort_order = 2;</code>
     */
    private $sort_order = 0;
    /**
     * <code>.dstore.elastic.Sort.Missing missing_treatment = 3;</code>
     */
    private $missing_treatment = 0;
    /**
     * <code>.dstore.elastic.Sort.Mode sort_mode = 4;</code>
     */
    private $sort_mode = 0;
    /**
     * <pre>
     * Not yet supported: A filter that the inner objects inside the nested path should match with in order for its field values to be taken into account by sorting
     * </pre>
     *
     * <code>repeated .dstore.elastic.Query nested_filter = 5;</code>
     */
    private $nested_filter;

    public function __construct() {
        \GPBMetadata\Dstore\Elastic\Elastic::initOnce();
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
     * <code>.dstore.elastic.Sort.Order sort_order = 2;</code>
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * <code>.dstore.elastic.Sort.Order sort_order = 2;</code>
     */
    public function setSortOrder($var)
    {
        GPBUtil::checkEnum($var, \Dstore\Elastic\Sort_Order::class);
        $this->sort_order = $var;
    }

    /**
     * <code>.dstore.elastic.Sort.Missing missing_treatment = 3;</code>
     */
    public function getMissingTreatment()
    {
        return $this->missing_treatment;
    }

    /**
     * <code>.dstore.elastic.Sort.Missing missing_treatment = 3;</code>
     */
    public function setMissingTreatment($var)
    {
        GPBUtil::checkEnum($var, \Dstore\Elastic\Sort_Missing::class);
        $this->missing_treatment = $var;
    }

    /**
     * <code>.dstore.elastic.Sort.Mode sort_mode = 4;</code>
     */
    public function getSortMode()
    {
        return $this->sort_mode;
    }

    /**
     * <code>.dstore.elastic.Sort.Mode sort_mode = 4;</code>
     */
    public function setSortMode($var)
    {
        GPBUtil::checkEnum($var, \Dstore\Elastic\Sort_Mode::class);
        $this->sort_mode = $var;
    }

    /**
     * <pre>
     * Not yet supported: A filter that the inner objects inside the nested path should match with in order for its field values to be taken into account by sorting
     * </pre>
     *
     * <code>repeated .dstore.elastic.Query nested_filter = 5;</code>
     */
    public function getNestedFilter()
    {
        return $this->nested_filter;
    }

    /**
     * <pre>
     * Not yet supported: A filter that the inner objects inside the nested path should match with in order for its field values to be taken into account by sorting
     * </pre>
     *
     * <code>repeated .dstore.elastic.Query nested_filter = 5;</code>
     */
    public function setNestedFilter(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Elastic\Query::class);
        $this->nested_filter = $var;
    }

}

