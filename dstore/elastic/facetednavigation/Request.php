<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/elastic/item/facetednavigation.proto
//   Date: 2016-05-19 08:08:10

namespace dstore\elastic\facetednavigation {

  class Request extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\elastic\BoolQuery */
    public $base_query = null;
    
    /**  @var \dstore\elastic\BoolQuery */
    public $post_query = null;
    
    /**  @var \dstore\elastic\facetednavigation\Request\Facet[]  */
    public $facet = array();
    
    /**  @var \dstore\elastic\facetednavigation\Request\RangeFacet[]  */
    public $range_facet = array();
    
    /**  @var \dstore\elastic\facetednavigation\Request\RangeFacet[]  */
    public $date_range_facet = array();
    
    /**  @var int */
    public $from = null;
    
    /**  @var int */
    public $size = null;
    
    /**  @var \dstore\elastic\Sort[]  */
    public $sort = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.elastic.facetednavigation.Request');

      // OPTIONAL MESSAGE base_query = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "base_query";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\elastic\BoolQuery';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE post_query = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "post_query";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\elastic\BoolQuery';
      $descriptor->addField($f);

      // REPEATED MESSAGE facet = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "facet";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\elastic\facetednavigation\Request\Facet';
      $descriptor->addField($f);

      // REPEATED MESSAGE range_facet = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "range_facet";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\elastic\facetednavigation\Request\RangeFacet';
      $descriptor->addField($f);

      // REPEATED MESSAGE date_range_facet = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "date_range_facet";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\elastic\facetednavigation\Request\RangeFacet';
      $descriptor->addField($f);

      // OPTIONAL INT32 from = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "from";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 size = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "size";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE sort = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "sort";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\elastic\Sort';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <base_query> has a value
     *
     * @return boolean
     */
    public function hasBaseQuery(){
      return $this->_has(1);
    }
    
    /**
     * Clear <base_query> value
     *
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function clearBaseQuery(){
      return $this->_clear(1);
    }
    
    /**
     * Get <base_query> value
     *
     * @return \dstore\elastic\BoolQuery
     */
    public function getBaseQuery(){
      return $this->_get(1);
    }
    
    /**
     * Set <base_query> value
     *
     * @param \dstore\elastic\BoolQuery $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function setBaseQuery(\dstore\elastic\BoolQuery $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <post_query> has a value
     *
     * @return boolean
     */
    public function hasPostQuery(){
      return $this->_has(2);
    }
    
    /**
     * Clear <post_query> value
     *
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function clearPostQuery(){
      return $this->_clear(2);
    }
    
    /**
     * Get <post_query> value
     *
     * @return \dstore\elastic\BoolQuery
     */
    public function getPostQuery(){
      return $this->_get(2);
    }
    
    /**
     * Set <post_query> value
     *
     * @param \dstore\elastic\BoolQuery $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function setPostQuery(\dstore\elastic\BoolQuery $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <facet> has a value
     *
     * @return boolean
     */
    public function hasFacet(){
      return $this->_has(3);
    }
    
    /**
     * Clear <facet> value
     *
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function clearFacet(){
      return $this->_clear(3);
    }
    
    /**
     * Get <facet> value
     *
     * @param int $idx
     * @return \dstore\elastic\facetednavigation\Request\Facet
     */
    public function getFacet($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <facet> value
     *
     * @param \dstore\elastic\facetednavigation\Request\Facet $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function setFacet(\dstore\elastic\facetednavigation\Request\Facet $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <facet>
     *
     * @return \dstore\elastic\facetednavigation\Request\Facet[]
     */
    public function getFacetList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <facet>
     *
     * @param \dstore\elastic\facetednavigation\Request\Facet $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function addFacet(\dstore\elastic\facetednavigation\Request\Facet $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <range_facet> has a value
     *
     * @return boolean
     */
    public function hasRangeFacet(){
      return $this->_has(5);
    }
    
    /**
     * Clear <range_facet> value
     *
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function clearRangeFacet(){
      return $this->_clear(5);
    }
    
    /**
     * Get <range_facet> value
     *
     * @param int $idx
     * @return \dstore\elastic\facetednavigation\Request\RangeFacet
     */
    public function getRangeFacet($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <range_facet> value
     *
     * @param \dstore\elastic\facetednavigation\Request\RangeFacet $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function setRangeFacet(\dstore\elastic\facetednavigation\Request\RangeFacet $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <range_facet>
     *
     * @return \dstore\elastic\facetednavigation\Request\RangeFacet[]
     */
    public function getRangeFacetList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <range_facet>
     *
     * @param \dstore\elastic\facetednavigation\Request\RangeFacet $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function addRangeFacet(\dstore\elastic\facetednavigation\Request\RangeFacet $value){
     return $this->_add(5, $value);
    }
    
    /**
     * Check if <date_range_facet> has a value
     *
     * @return boolean
     */
    public function hasDateRangeFacet(){
      return $this->_has(6);
    }
    
    /**
     * Clear <date_range_facet> value
     *
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function clearDateRangeFacet(){
      return $this->_clear(6);
    }
    
    /**
     * Get <date_range_facet> value
     *
     * @param int $idx
     * @return \dstore\elastic\facetednavigation\Request\RangeFacet
     */
    public function getDateRangeFacet($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <date_range_facet> value
     *
     * @param \dstore\elastic\facetednavigation\Request\RangeFacet $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function setDateRangeFacet(\dstore\elastic\facetednavigation\Request\RangeFacet $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <date_range_facet>
     *
     * @return \dstore\elastic\facetednavigation\Request\RangeFacet[]
     */
    public function getDateRangeFacetList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <date_range_facet>
     *
     * @param \dstore\elastic\facetednavigation\Request\RangeFacet $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function addDateRangeFacet(\dstore\elastic\facetednavigation\Request\RangeFacet $value){
     return $this->_add(6, $value);
    }
    
    /**
     * Check if <from> has a value
     *
     * @return boolean
     */
    public function hasFrom(){
      return $this->_has(10);
    }
    
    /**
     * Clear <from> value
     *
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function clearFrom(){
      return $this->_clear(10);
    }
    
    /**
     * Get <from> value
     *
     * @return int
     */
    public function getFrom(){
      return $this->_get(10);
    }
    
    /**
     * Set <from> value
     *
     * @param int $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function setFrom( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <size> has a value
     *
     * @return boolean
     */
    public function hasSize(){
      return $this->_has(11);
    }
    
    /**
     * Clear <size> value
     *
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function clearSize(){
      return $this->_clear(11);
    }
    
    /**
     * Get <size> value
     *
     * @return int
     */
    public function getSize(){
      return $this->_get(11);
    }
    
    /**
     * Set <size> value
     *
     * @param int $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function setSize( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <sort> has a value
     *
     * @return boolean
     */
    public function hasSort(){
      return $this->_has(20);
    }
    
    /**
     * Clear <sort> value
     *
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function clearSort(){
      return $this->_clear(20);
    }
    
    /**
     * Get <sort> value
     *
     * @param int $idx
     * @return \dstore\elastic\Sort
     */
    public function getSort($idx = NULL){
      return $this->_get(20, $idx);
    }
    
    /**
     * Set <sort> value
     *
     * @param \dstore\elastic\Sort $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function setSort(\dstore\elastic\Sort $value, $idx = NULL){
      return $this->_set(20, $value, $idx);
    }
    
    /**
     * Get all elements of <sort>
     *
     * @return \dstore\elastic\Sort[]
     */
    public function getSortList(){
     return $this->_get(20);
    }
    
    /**
     * Add a new element to <sort>
     *
     * @param \dstore\elastic\Sort $value
     * @return \dstore\elastic\facetednavigation\Request
     */
    public function addSort(\dstore\elastic\Sort $value){
     return $this->_add(20, $value);
    }
  }
}

