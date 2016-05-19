<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetShippingTypes_Ad.proto
//   Date: 2016-05-19 08:07:50

namespace dstore\engine\om_GetShippingTypes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $shipping_type_id = null;
    
    /**  @var boolean */
    public $shipping_type_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $only_active = null;
    
    /**  @var boolean */
    public $only_active_null = null;
    
    /**  @var \dstore\values\timestampValue */
    public $valid_at_date_and_time = null;
    
    /**  @var boolean */
    public $valid_at_date_and_time_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetShippingTypes_Ad.Parameters');

      // OPTIONAL MESSAGE language_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE shipping_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "shipping_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL shipping_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "shipping_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_active = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "only_active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_active_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "only_active_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE valid_at_date_and_time = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "valid_at_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL valid_at_date_and_time_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "valid_at_date_and_time_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(1);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function setLanguageId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <shipping_type_id> has a value
     *
     * @return boolean
     */
    public function hasShippingTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <shipping_type_id> value
     *
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function clearShippingTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <shipping_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getShippingTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <shipping_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function setShippingTypeId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <shipping_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasShippingTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <shipping_type_id_null> value
     *
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function clearShippingTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <shipping_type_id_null> value
     *
     * @return boolean
     */
    public function getShippingTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <shipping_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function setShippingTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <only_active> has a value
     *
     * @return boolean
     */
    public function hasOnlyActive(){
      return $this->_has(3);
    }
    
    /**
     * Clear <only_active> value
     *
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function clearOnlyActive(){
      return $this->_clear(3);
    }
    
    /**
     * Get <only_active> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getOnlyActive(){
      return $this->_get(3);
    }
    
    /**
     * Set <only_active> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function setOnlyActive(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <only_active_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyActiveNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <only_active_null> value
     *
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function clearOnlyActiveNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <only_active_null> value
     *
     * @return boolean
     */
    public function getOnlyActiveNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <only_active_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function setOnlyActiveNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <valid_at_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasValidAtDateAndTime(){
      return $this->_has(4);
    }
    
    /**
     * Clear <valid_at_date_and_time> value
     *
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function clearValidAtDateAndTime(){
      return $this->_clear(4);
    }
    
    /**
     * Get <valid_at_date_and_time> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getValidAtDateAndTime(){
      return $this->_get(4);
    }
    
    /**
     * Set <valid_at_date_and_time> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function setValidAtDateAndTime(\dstore\values\timestampValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <valid_at_date_and_time_null> has a value
     *
     * @return boolean
     */
    public function hasValidAtDateAndTimeNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <valid_at_date_and_time_null> value
     *
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function clearValidAtDateAndTimeNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <valid_at_date_and_time_null> value
     *
     * @return boolean
     */
    public function getValidAtDateAndTimeNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <valid_at_date_and_time_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetShippingTypes_Ad\Parameters
     */
    public function setValidAtDateAndTimeNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

