<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/elastic/elastic.proto
//   Date: 2016-05-19 08:08:10

namespace dstore\elastic {

  class Field extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var boolean */
    public $multi_field = null;
    
    /**  @var \dstore\values\Value[]  */
    public $value = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.elastic.Field');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL multi_field = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "multi_field";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE value = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\values\Value';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \dstore\elastic\Field
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \dstore\elastic\Field
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <multi_field> has a value
     *
     * @return boolean
     */
    public function hasMultiField(){
      return $this->_has(2);
    }
    
    /**
     * Clear <multi_field> value
     *
     * @return \dstore\elastic\Field
     */
    public function clearMultiField(){
      return $this->_clear(2);
    }
    
    /**
     * Get <multi_field> value
     *
     * @return boolean
     */
    public function getMultiField(){
      return $this->_get(2);
    }
    
    /**
     * Set <multi_field> value
     *
     * @param boolean $value
     * @return \dstore\elastic\Field
     */
    public function setMultiField( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(3);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\elastic\Field
     */
    public function clearValue(){
      return $this->_clear(3);
    }
    
    /**
     * Get <value> value
     *
     * @param int $idx
     * @return \dstore\values\Value
     */
    public function getValue($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\values\Value $value
     * @return \dstore\elastic\Field
     */
    public function setValue(\dstore\values\Value $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <value>
     *
     * @return \dstore\values\Value[]
     */
    public function getValueList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <value>
     *
     * @param \dstore\values\Value $value
     * @return \dstore\elastic\Field
     */
    public function addValue(\dstore\values\Value $value){
     return $this->_add(3, $value);
    }
  }
}
