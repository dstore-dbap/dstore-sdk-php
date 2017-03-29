<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/elastic/elastic.proto

namespace Dstore\Elastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * see: https://www.elastic.co/guide/en/elasticsearch/reference/current/search-request-sort.html
 * </pre>
 *
 * Protobuf type <code>dstore.elastic.Sort</code>
 */
class Sort extends \Google\Protobuf\Internal\Message
{
    protected $sort_by;

    public function __construct() {
        \GPBMetadata\Dstore\Elastic\Elastic::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.elastic.Sort.FieldSort field_sort = 1;</code>
     */
    public function getFieldSort()
    {
        return $this->readOneof(1);
    }

    /**
     * <code>.dstore.elastic.Sort.FieldSort field_sort = 1;</code>
     */
    public function setFieldSort(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Elastic\Sort_FieldSort::class);
        $this->writeOneof(1, $var);
    }

    /**
     * <code>.dstore.elastic.Sort.ScoreSort score_sort = 2;</code>
     */
    public function getScoreSort()
    {
        return $this->readOneof(2);
    }

    /**
     * <code>.dstore.elastic.Sort.ScoreSort score_sort = 2;</code>
     */
    public function setScoreSort(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Elastic\Sort_ScoreSort::class);
        $this->writeOneof(2, $var);
    }

    public function getSortBy()
    {
        return $this->sort_by;
    }

}

