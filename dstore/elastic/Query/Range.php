<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/elastic/elastic.proto
//   Date: 2016-05-19 08:08:10

namespace dstore\elastic\Query {

  class Range extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $field_name = null;
    
    /**  @var string */
    public $greater_than_or_eqal = null;
    
    /**  @var string */
    public $greater_than = null;
    
    /**  @var string */
    public $less_than_or_equal = null;
    
    /**  @var string */
    public $less_than = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.elastic.Query.Range');

      // OPTIONAL STRING field_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "field_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING greater_than_or_eqal = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "greater_than_or_eqal";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING greater_than = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "greater_than";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING less_than_or_equal = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "less_than_or_equal";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING less_than = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "less_than";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <field_name> has a value
     *
     * @return boolean
     */
    public function hasFieldName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <field_name> value
     *
     * @return \dstore\elastic\Query\Range
     */
    public function clearFieldName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <field_name> value
     *
     * @return string
     */
    public function getFieldName(){
      return $this->_get(1);
    }
    
    /**
     * Set <field_name> value
     *
     * @param string $value
     * @return \dstore\elastic\Query\Range
     */
    public function setFieldName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <greater_than_or_eqal> has a value
     *
     * @return boolean
     */
    public function hasGreaterThanOrEqal(){
      return $this->_has(2);
    }
    
    /**
     * Clear <greater_than_or_eqal> value
     *
     * @return \dstore\elastic\Query\Range
     */
    public function clearGreaterThanOrEqal(){
      return $this->_clear(2);
    }
    
    /**
     * Get <greater_than_or_eqal> value
     *
     * @return string
     */
    public function getGreaterThanOrEqal(){
      return $this->_get(2);
    }
    
    /**
     * Set <greater_than_or_eqal> value
     *
     * @param string $value
     * @return \dstore\elastic\Query\Range
     */
    public function setGreaterThanOrEqal( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <greater_than> has a value
     *
     * @return boolean
     */
    public function hasGreaterThan(){
      return $this->_has(3);
    }
    
    /**
     * Clear <greater_than> value
     *
     * @return \dstore\elastic\Query\Range
     */
    public function clearGreaterThan(){
      return $this->_clear(3);
    }
    
    /**
     * Get <greater_than> value
     *
     * @return string
     */
    public function getGreaterThan(){
      return $this->_get(3);
    }
    
    /**
     * Set <greater_than> value
     *
     * @param string $value
     * @return \dstore\elastic\Query\Range
     */
    public function setGreaterThan( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <less_than_or_equal> has a value
     *
     * @return boolean
     */
    public function hasLessThanOrEqual(){
      return $this->_has(4);
    }
    
    /**
     * Clear <less_than_or_equal> value
     *
     * @return \dstore\elastic\Query\Range
     */
    public function clearLessThanOrEqual(){
      return $this->_clear(4);
    }
    
    /**
     * Get <less_than_or_equal> value
     *
     * @return string
     */
    public function getLessThanOrEqual(){
      return $this->_get(4);
    }
    
    /**
     * Set <less_than_or_equal> value
     *
     * @param string $value
     * @return \dstore\elastic\Query\Range
     */
    public function setLessThanOrEqual( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <less_than> has a value
     *
     * @return boolean
     */
    public function hasLessThan(){
      return $this->_has(5);
    }
    
    /**
     * Clear <less_than> value
     *
     * @return \dstore\elastic\Query\Range
     */
    public function clearLessThan(){
      return $this->_clear(5);
    }
    
    /**
     * Get <less_than> value
     *
     * @return string
     */
    public function getLessThan(){
      return $this->_get(5);
    }
    
    /**
     * Set <less_than> value
     *
     * @param string $value
     * @return \dstore\elastic\Query\Range
     */
    public function setLessThan( $value){
      return $this->_set(5, $value);
    }
  }
}

