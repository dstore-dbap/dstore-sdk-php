<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/elastic/elastic.proto

namespace Dstore\Elastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.elastic.Query.SimpleQueryString</code>
 */
class Query_SimpleQueryString extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string query = 1;</code>
     */
    private $query = '';
    /**
     * <code>repeated string field = 2;</code>
     */
    private $field;
    /**
     * <code>bool use_and_as_default_operator = 3;</code>
     */
    private $use_and_as_default_operator = false;
    /**
     * <pre>
     * see: https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-minimum-should-match.html
     * </pre>
     *
     * <code>string minimum_should_match = 4;</code>
     */
    private $minimum_should_match = '';

    public function __construct() {
        \GPBMetadata\Dstore\Elastic\Elastic::initOnce();
        parent::__construct();
    }

    /**
     * <code>string query = 1;</code>
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * <code>string query = 1;</code>
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;
    }

    /**
     * <code>repeated string field = 2;</code>
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <code>repeated string field = 2;</code>
     */
    public function setField(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->field = $var;
    }

    /**
     * <code>bool use_and_as_default_operator = 3;</code>
     */
    public function getUseAndAsDefaultOperator()
    {
        return $this->use_and_as_default_operator;
    }

    /**
     * <code>bool use_and_as_default_operator = 3;</code>
     */
    public function setUseAndAsDefaultOperator($var)
    {
        GPBUtil::checkBool($var);
        $this->use_and_as_default_operator = $var;
    }

    /**
     * <pre>
     * see: https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-minimum-should-match.html
     * </pre>
     *
     * <code>string minimum_should_match = 4;</code>
     */
    public function getMinimumShouldMatch()
    {
        return $this->minimum_should_match;
    }

    /**
     * <pre>
     * see: https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-minimum-should-match.html
     * </pre>
     *
     * <code>string minimum_should_match = 4;</code>
     */
    public function setMinimumShouldMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->minimum_should_match = $var;
    }

}

