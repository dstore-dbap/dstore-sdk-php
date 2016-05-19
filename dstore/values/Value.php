<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/values.proto
//   Date: 2016-05-19 08:08:10

namespace dstore\values {

  class Value extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $integer_value = null;
    
    /**  @var \dstore\values\stringValue */
    public $string_value = null;
    
    /**  @var \dstore\values\bytesValue */
    public $byte_value = null;
    
    /**  @var \dstore\values\doubleValue */
    public $double_value = null;
    
    /**  @var \dstore\values\booleanValue */
    public $boolean_value = null;
    
    /**  @var \dstore\values\decimalValue */
    public $decimal_value = null;
    
    /**  @var \dstore\values\timestampValue */
    public $timestamp_value = null;
    
    /**  @var \dstore\values\longValue */
    public $long_value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.values.Value');

      // OPTIONAL MESSAGE integer_value = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "integer_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE string_value = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "string_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE byte_value = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "byte_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\bytesValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE double_value = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "double_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\doubleValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE boolean_value = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "boolean_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE decimal_value = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "decimal_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE timestamp_value = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "timestamp_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE long_value = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "long_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\longValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <integer_value> has a value
     *
     * @return boolean
     */
    public function hasIntegerValue(){
      return $this->_has(10);
    }
    
    /**
     * Clear <integer_value> value
     *
     * @return \dstore\values\Value
     */
    public function clearIntegerValue(){
      return $this->_clear(10);
    }
    
    /**
     * Get <integer_value> value
     *
     * @return \dstore\values\integerValue
     */
    public function getIntegerValue(){
      return $this->_get(10);
    }
    
    /**
     * Set <integer_value> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\values\Value
     */
    public function setIntegerValue(\dstore\values\integerValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <string_value> has a value
     *
     * @return boolean
     */
    public function hasStringValue(){
      return $this->_has(11);
    }
    
    /**
     * Clear <string_value> value
     *
     * @return \dstore\values\Value
     */
    public function clearStringValue(){
      return $this->_clear(11);
    }
    
    /**
     * Get <string_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getStringValue(){
      return $this->_get(11);
    }
    
    /**
     * Set <string_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\values\Value
     */
    public function setStringValue(\dstore\values\stringValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <byte_value> has a value
     *
     * @return boolean
     */
    public function hasByteValue(){
      return $this->_has(12);
    }
    
    /**
     * Clear <byte_value> value
     *
     * @return \dstore\values\Value
     */
    public function clearByteValue(){
      return $this->_clear(12);
    }
    
    /**
     * Get <byte_value> value
     *
     * @return \dstore\values\bytesValue
     */
    public function getByteValue(){
      return $this->_get(12);
    }
    
    /**
     * Set <byte_value> value
     *
     * @param \dstore\values\bytesValue $value
     * @return \dstore\values\Value
     */
    public function setByteValue(\dstore\values\bytesValue $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <double_value> has a value
     *
     * @return boolean
     */
    public function hasDoubleValue(){
      return $this->_has(13);
    }
    
    /**
     * Clear <double_value> value
     *
     * @return \dstore\values\Value
     */
    public function clearDoubleValue(){
      return $this->_clear(13);
    }
    
    /**
     * Get <double_value> value
     *
     * @return \dstore\values\doubleValue
     */
    public function getDoubleValue(){
      return $this->_get(13);
    }
    
    /**
     * Set <double_value> value
     *
     * @param \dstore\values\doubleValue $value
     * @return \dstore\values\Value
     */
    public function setDoubleValue(\dstore\values\doubleValue $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <boolean_value> has a value
     *
     * @return boolean
     */
    public function hasBooleanValue(){
      return $this->_has(14);
    }
    
    /**
     * Clear <boolean_value> value
     *
     * @return \dstore\values\Value
     */
    public function clearBooleanValue(){
      return $this->_clear(14);
    }
    
    /**
     * Get <boolean_value> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getBooleanValue(){
      return $this->_get(14);
    }
    
    /**
     * Set <boolean_value> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\values\Value
     */
    public function setBooleanValue(\dstore\values\booleanValue $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <decimal_value> has a value
     *
     * @return boolean
     */
    public function hasDecimalValue(){
      return $this->_has(15);
    }
    
    /**
     * Clear <decimal_value> value
     *
     * @return \dstore\values\Value
     */
    public function clearDecimalValue(){
      return $this->_clear(15);
    }
    
    /**
     * Get <decimal_value> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getDecimalValue(){
      return $this->_get(15);
    }
    
    /**
     * Set <decimal_value> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\values\Value
     */
    public function setDecimalValue(\dstore\values\decimalValue $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <timestamp_value> has a value
     *
     * @return boolean
     */
    public function hasTimestampValue(){
      return $this->_has(16);
    }
    
    /**
     * Clear <timestamp_value> value
     *
     * @return \dstore\values\Value
     */
    public function clearTimestampValue(){
      return $this->_clear(16);
    }
    
    /**
     * Get <timestamp_value> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getTimestampValue(){
      return $this->_get(16);
    }
    
    /**
     * Set <timestamp_value> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\values\Value
     */
    public function setTimestampValue(\dstore\values\timestampValue $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <long_value> has a value
     *
     * @return boolean
     */
    public function hasLongValue(){
      return $this->_has(17);
    }
    
    /**
     * Clear <long_value> value
     *
     * @return \dstore\values\Value
     */
    public function clearLongValue(){
      return $this->_clear(17);
    }
    
    /**
     * Get <long_value> value
     *
     * @return \dstore\values\longValue
     */
    public function getLongValue(){
      return $this->_get(17);
    }
    
    /**
     * Set <long_value> value
     *
     * @param \dstore\values\longValue $value
     * @return \dstore\values\Value
     */
    public function setLongValue(\dstore\values\longValue $value){
      return $this->_set(17, $value);
    }
  }
}

