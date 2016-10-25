<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/elastic/item/facetednavigation.proto

namespace Dstore\Elastic\Facetednavigation;

require_once('dstore/elastic/elastic.pb.php');
require_once('dstore/elastic/item/item.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Request extends \Google\Protobuf\Internal\Message
{
    private $base_query = null;
    private $post_query = null;
    private $facet;
    private $range_facet;
    private $date_range_facet;
    private $onlyMatchingVariants = false;
    private $from = 0;
    private $size = 0;
    private $include_field_pattern;
    private $exclude_field_pattern;
    private $sort;

    public function getBaseQuery()
    {
        return $this->base_query;
    }

    public function setBaseQuery(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Elastic\BoolQuery::class);
        $this->base_query = $var;
    }

    public function getPostQuery()
    {
        return $this->post_query;
    }

    public function setPostQuery(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Elastic\BoolQuery::class);
        $this->post_query = $var;
    }

    public function getFacet()
    {
        return $this->facet;
    }

    public function setFacet(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Elastic\Facetednavigation\Request_Facet::class);
        $this->facet = $var;
    }

    public function getRangeFacet()
    {
        return $this->range_facet;
    }

    public function setRangeFacet(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Elastic\Facetednavigation\Request_RangeFacet::class);
        $this->range_facet = $var;
    }

    public function getDateRangeFacet()
    {
        return $this->date_range_facet;
    }

    public function setDateRangeFacet(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Elastic\Facetednavigation\Request_RangeFacet::class);
        $this->date_range_facet = $var;
    }

    public function getOnlyMatchingVariants()
    {
        return $this->onlyMatchingVariants;
    }

    public function setOnlyMatchingVariants($var)
    {
        GPBUtil::checkBool($var);
        $this->onlyMatchingVariants = $var;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function setFrom($var)
    {
        GPBUtil::checkInt32($var);
        $this->from = $var;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;
    }

    public function getIncludeFieldPattern()
    {
        return $this->include_field_pattern;
    }

    public function setIncludeFieldPattern(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->include_field_pattern = $var;
    }

    public function getExcludeFieldPattern()
    {
        return $this->exclude_field_pattern;
    }

    public function setExcludeFieldPattern(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->exclude_field_pattern = $var;
    }

    public function getSort()
    {
        return $this->sort;
    }

    public function setSort(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Elastic\Sort::class);
        $this->sort = $var;
    }

}

class Request_RangeFacet extends \Google\Protobuf\Internal\Message
{
    private $field_name = '';
    private $range;

    public function getFieldName()
    {
        return $this->field_name;
    }

    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;
    }

    public function getRange()
    {
        return $this->range;
    }

    public function setRange(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Elastic\Range::class);
        $this->range = $var;
    }

}

class Request_Facet extends \Google\Protobuf\Internal\Message
{
    private $field_name = '';
    protected $sort_by;

    public function getFieldName()
    {
        return $this->field_name;
    }

    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;
    }

    public function getSortNoSort()
    {
        return $this->readOneof(2);
    }

    public function setSortNoSort(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Elastic\Facetednavigation\Request_Facet_SortNoSort::class);
        $this->writeOneof(2, $var);
    }

    public function getFieldSort()
    {
        return $this->readOneof(3);
    }

    public function setFieldSort(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Elastic\Facetednavigation\Request_Facet_FieldSort::class);
        $this->writeOneof(3, $var);
    }

    public function getSortBy()
    {
        return $this->sort_by;
    }

}

class Request_Facet_SortNoSort extends \Google\Protobuf\Internal\Message
{
    private $sort_order = 0;

    public function getSortOrder()
    {
        return $this->sort_order;
    }

    public function setSortOrder($var)
    {
        GPBUtil::checkEnum($var, \Dstore\Elastic\Sort_Order::class);
        $this->sort_order = $var;
    }

}

class Request_Facet_FieldSort extends \Google\Protobuf\Internal\Message
{
    private $field_name = '';
    private $sort_order = 0;
    private $sort_mode = 0;

    public function getFieldName()
    {
        return $this->field_name;
    }

    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;
    }

    public function getSortOrder()
    {
        return $this->sort_order;
    }

    public function setSortOrder($var)
    {
        GPBUtil::checkEnum($var, \Dstore\Elastic\Sort_Order::class);
        $this->sort_order = $var;
    }

    public function getSortMode()
    {
        return $this->sort_mode;
    }

    public function setSortMode($var)
    {
        GPBUtil::checkEnum($var, \Dstore\Elastic\Sort_Mode::class);
        $this->sort_mode = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $total_hits = 0;
    private $item;
    private $facet;
    private $elastic_query_string = '';

    public function getTotalHits()
    {
        return $this->total_hits;
    }

    public function setTotalHits($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_hits = $var;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Elastic\Item\Item::class);
        $this->item = $var;
    }

    public function getFacet()
    {
        return $this->facet;
    }

    public function setFacet(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Elastic\Item\Facet::class);
        $this->facet = $var;
    }

    public function getElasticQueryString()
    {
        return $this->elastic_query_string;
    }

    public function setElasticQueryString($var)
    {
        GPBUtil::checkString($var, True);
        $this->elastic_query_string = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aba0a0a2b6473746f72652f656c61737469632f6974656d2f6661636574" .
    "65646e617669676174696f6e2e70726f746f12206473746f72652e656c61" .
    "737469632e666163657465646e617669676174696f6e1a1c6473746f7265" .
    "2f656c61737469632f656c61737469632e70726f746f1a1e6473746f7265" .
    "2f656c61737469632f6974656d2f6974656d2e70726f746f22b1070a0752" .
    "657175657374122d0a0a626173655f717565727918012001280b32192e64" .
    "73746f72652e656c61737469632e426f6f6c5175657279122d0a0a706f73" .
    "745f717565727918022001280b32192e6473746f72652e656c6173746963" .
    "2e426f6f6c5175657279123e0a05666163657418032003280b322f2e6473" .
    "746f72652e656c61737469632e666163657465646e617669676174696f6e" .
    "2e526571756573742e466163657412490a0b72616e67655f666163657418" .
    "052003280b32342e6473746f72652e656c61737469632e66616365746564" .
    "6e617669676174696f6e2e526571756573742e52616e6765466163657412" .
    "4e0a10646174655f72616e67655f666163657418062003280b32342e6473" .
    "746f72652e656c61737469632e666163657465646e617669676174696f6e" .
    "2e526571756573742e52616e67654661636574121c0a146f6e6c794d6174" .
    "6368696e6756617269616e7473180720012808120c0a0466726f6d180a20" .
    "012805120c0a0473697a65180b20012805121d0a15696e636c7564655f66" .
    "69656c645f7061747465726e180f20032809121d0a156578636c7564655f" .
    "6669656c645f7061747465726e18102003280912220a04736f7274181420" .
    "03280b32142e6473746f72652e656c61737469632e536f72741a460a0a52" .
    "616e6765466163657412120a0a6669656c645f6e616d6518012001280912" .
    "240a0572616e676518022003280b32152e6473746f72652e656c61737469" .
    "632e52616e67651a88030a05466163657412120a0a6669656c645f6e616d" .
    "6518012001280912520a0c736f72745f6e6f5f736f727418022001280b32" .
    "3a2e6473746f72652e656c61737469632e666163657465646e6176696761" .
    "74696f6e2e526571756573742e46616365742e536f72744e6f536f727448" .
    "00124f0a0a6669656c645f736f727418032001280b32392e6473746f7265" .
    "2e656c61737469632e666163657465646e617669676174696f6e2e526571" .
    "756573742e46616365742e4669656c64536f727448001a3c0a0a536f7274" .
    "4e6f536f7274122e0a0a736f72745f6f7264657218012001280e321a2e64" .
    "73746f72652e656c61737469632e536f72742e4f726465721a7d0a094669" .
    "656c64536f727412120a0a6669656c645f6e616d65180120012809122e0a" .
    "0a736f72745f6f7264657218022001280e321a2e6473746f72652e656c61" .
    "737469632e536f72742e4f72646572122c0a09736f72745f6d6f64651803" .
    "2001280e32192e6473746f72652e656c61737469632e536f72742e4d6f64" .
    "6542090a07736f72745f62792290010a08526573706f6e736512120a0a74" .
    "6f74616c5f6869747318022001280512270a046974656d18032003280b32" .
    "192e6473746f72652e656c61737469632e6974656d2e4974656d12290a05" .
    "666163657418042003280b321a2e6473746f72652e656c61737469632e69" .
    "74656d2e4661636574121c0a14656c61737469635f71756572795f737472" .
    "696e67180520012809425c0a16696f2e6473746f72652e656c6173746963" .
    "2e6974656d4211466163657465644e617669676174696f6e5a2f676f7364" .
    "6b2e6473746f72652e64652f656c61737469632f6974656d2f6661636574" .
    "65645f6e617669676174696f6e620670726f746f33"
));

