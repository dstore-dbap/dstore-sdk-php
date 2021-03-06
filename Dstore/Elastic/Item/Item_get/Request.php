<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/elastic/item/item_get.proto

namespace Dstore\Elastic\Item\Item_get;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.elastic.item.item_get.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Danach wird das Suchergebnis und alle Aggregationen gefiltert
     * </pre>
     *
     * <code>.dstore.elastic.BoolQuery base_query = 1;</code>
     */
    private $base_query = null;
    /**
     * <pre>
     * Danach wird das Suchergebnis nachträglich gefiltert und es wird jeweils eine zusätzliche FilteredAggregation geliefert
     * </pre>
     *
     * <code>.dstore.elastic.BoolQuery post_query = 2;</code>
     */
    private $post_query = null;
    /**
     * <code>repeated .dstore.elastic.item.item_get.Request.Facet facet = 3;</code>
     */
    private $facet;
    /**
     * <code>repeated .dstore.elastic.item.item_get.Request.RangeFacet range_facet = 5;</code>
     */
    private $range_facet;
    /**
     * <code>repeated .dstore.elastic.item.item_get.Request.RangeFacet date_range_facet = 6;</code>
     */
    private $date_range_facet;
    /**
     * <code>bool only_matching_variants = 7;</code>
     */
    private $only_matching_variants = false;
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

    public function __construct() {
        \GPBMetadata\Dstore\Elastic\Item\ItemGet::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Danach wird das Suchergebnis und alle Aggregationen gefiltert
     * </pre>
     *
     * <code>.dstore.elastic.BoolQuery base_query = 1;</code>
     */
    public function getBaseQuery()
    {
        return $this->base_query;
    }

    /**
     * <pre>
     * Danach wird das Suchergebnis und alle Aggregationen gefiltert
     * </pre>
     *
     * <code>.dstore.elastic.BoolQuery base_query = 1;</code>
     */
    public function setBaseQuery(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Elastic\BoolQuery::class);
        $this->base_query = $var;
    }

    /**
     * <pre>
     * Danach wird das Suchergebnis nachträglich gefiltert und es wird jeweils eine zusätzliche FilteredAggregation geliefert
     * </pre>
     *
     * <code>.dstore.elastic.BoolQuery post_query = 2;</code>
     */
    public function getPostQuery()
    {
        return $this->post_query;
    }

    /**
     * <pre>
     * Danach wird das Suchergebnis nachträglich gefiltert und es wird jeweils eine zusätzliche FilteredAggregation geliefert
     * </pre>
     *
     * <code>.dstore.elastic.BoolQuery post_query = 2;</code>
     */
    public function setPostQuery(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Elastic\BoolQuery::class);
        $this->post_query = $var;
    }

    /**
     * <code>repeated .dstore.elastic.item.item_get.Request.Facet facet = 3;</code>
     */
    public function getFacet()
    {
        return $this->facet;
    }

    /**
     * <code>repeated .dstore.elastic.item.item_get.Request.Facet facet = 3;</code>
     */
    public function setFacet(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Elastic\Item\Item_get\Request_Facet::class);
        $this->facet = $var;
    }

    /**
     * <code>repeated .dstore.elastic.item.item_get.Request.RangeFacet range_facet = 5;</code>
     */
    public function getRangeFacet()
    {
        return $this->range_facet;
    }

    /**
     * <code>repeated .dstore.elastic.item.item_get.Request.RangeFacet range_facet = 5;</code>
     */
    public function setRangeFacet(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Elastic\Item\Item_get\Request_RangeFacet::class);
        $this->range_facet = $var;
    }

    /**
     * <code>repeated .dstore.elastic.item.item_get.Request.RangeFacet date_range_facet = 6;</code>
     */
    public function getDateRangeFacet()
    {
        return $this->date_range_facet;
    }

    /**
     * <code>repeated .dstore.elastic.item.item_get.Request.RangeFacet date_range_facet = 6;</code>
     */
    public function setDateRangeFacet(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Elastic\Item\Item_get\Request_RangeFacet::class);
        $this->date_range_facet = $var;
    }

    /**
     * <code>bool only_matching_variants = 7;</code>
     */
    public function getOnlyMatchingVariants()
    {
        return $this->only_matching_variants;
    }

    /**
     * <code>bool only_matching_variants = 7;</code>
     */
    public function setOnlyMatchingVariants($var)
    {
        GPBUtil::checkBool($var);
        $this->only_matching_variants = $var;
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

}

