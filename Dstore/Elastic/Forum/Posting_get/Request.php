<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/elastic/forum/posting_get.proto

namespace Dstore\Elastic\Forum\Posting_get;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.elastic.forum.posting_get.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Danach wird das Suchergebnis gefiltert
     * </pre>
     *
     * <code>.dstore.elastic.BoolQuery query = 1;</code>
     */
    private $query = null;
    /**
     * <pre>
     * Paginierung GET /_search?size=5&amp;from=5
     * </pre>
     *
     * <code>int32 from = 10;</code>
     */
    private $from = 0;
    /**
     * <code>int32 size = 11;</code>
     */
    private $size = 0;
    /**
     * <code>repeated string include_field_pattern = 15;</code>
     */
    private $include_field_pattern;
    /**
     * <code>repeated string exclude_field_pattern = 16;</code>
     */
    private $exclude_field_pattern;
    /**
     * <code>repeated .dstore.elastic.Sort sort = 20;</code>
     */
    private $sort;
    /**
     * <code>repeated string used_values_field = 22;</code>
     */
    private $used_values_field;

    public function __construct() {
        \GPBMetadata\Dstore\Elastic\Forum\PostingGet::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Danach wird das Suchergebnis gefiltert
     * </pre>
     *
     * <code>.dstore.elastic.BoolQuery query = 1;</code>
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * <pre>
     * Danach wird das Suchergebnis gefiltert
     * </pre>
     *
     * <code>.dstore.elastic.BoolQuery query = 1;</code>
     */
    public function setQuery(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Elastic\BoolQuery::class);
        $this->query = $var;
    }

    /**
     * <pre>
     * Paginierung GET /_search?size=5&amp;from=5
     * </pre>
     *
     * <code>int32 from = 10;</code>
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * <pre>
     * Paginierung GET /_search?size=5&amp;from=5
     * </pre>
     *
     * <code>int32 from = 10;</code>
     */
    public function setFrom($var)
    {
        GPBUtil::checkInt32($var);
        $this->from = $var;
    }

    /**
     * <code>int32 size = 11;</code>
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * <code>int32 size = 11;</code>
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;
    }

    /**
     * <code>repeated string include_field_pattern = 15;</code>
     */
    public function getIncludeFieldPattern()
    {
        return $this->include_field_pattern;
    }

    /**
     * <code>repeated string include_field_pattern = 15;</code>
     */
    public function setIncludeFieldPattern(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_field_pattern = $var;
    }

    /**
     * <code>repeated string exclude_field_pattern = 16;</code>
     */
    public function getExcludeFieldPattern()
    {
        return $this->exclude_field_pattern;
    }

    /**
     * <code>repeated string exclude_field_pattern = 16;</code>
     */
    public function setExcludeFieldPattern(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->exclude_field_pattern = $var;
    }

    /**
     * <code>repeated .dstore.elastic.Sort sort = 20;</code>
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * <code>repeated .dstore.elastic.Sort sort = 20;</code>
     */
    public function setSort(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Elastic\Sort::class);
        $this->sort = $var;
    }

    /**
     * <code>repeated string used_values_field = 22;</code>
     */
    public function getUsedValuesField()
    {
        return $this->used_values_field;
    }

    /**
     * <code>repeated string used_values_field = 22;</code>
     */
    public function setUsedValuesField(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->used_values_field = $var;
    }

}

