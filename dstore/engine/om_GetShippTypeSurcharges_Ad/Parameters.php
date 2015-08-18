<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetShippTypeSurcharges_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetShippTypeSurcharges_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $shipping_type_id = null;
    
    /**  @var boolean */
    public $shipping_type_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $surcharge_type_id = null;
    
    /**  @var boolean */
    public $surcharge_type_id_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $valid_from = null;
    
    /**  @var boolean */
    public $valid_from_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $valid_to = null;
    
    /**  @var boolean */
    public $valid_to_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetShippTypeSurcharges_Ad.Parameters');

      // OPTIONAL MESSAGE shipping_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "shipping_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL shipping_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "shipping_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL surcharge_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "surcharge_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE valid_from = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "valid_from";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL valid_from_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "valid_from_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE valid_to = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "valid_to";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL valid_to_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "valid_to_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <shipping_type_id> has a value
     *
     * @return boolean
     */
    public function hasShippingTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <shipping_type_id> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function clearShippingTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <shipping_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getShippingTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <shipping_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function setShippingTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <shipping_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasShippingTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <shipping_type_id_null> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function clearShippingTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <shipping_type_id_null> value
     *
     * @return boolean
     */
    public function getShippingTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <shipping_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function setShippingTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <surcharge_type_id> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function clearSurchargeTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <surcharge_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSurchargeTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <surcharge_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function setSurchargeTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <surcharge_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <surcharge_type_id_null> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function clearSurchargeTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <surcharge_type_id_null> value
     *
     * @return boolean
     */
    public function getSurchargeTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <surcharge_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function setSurchargeTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <valid_from> has a value
     *
     * @return boolean
     */
    public function hasValidFrom(){
      return $this->_has(3);
    }
    
    /**
     * Clear <valid_from> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function clearValidFrom(){
      return $this->_clear(3);
    }
    
    /**
     * Get <valid_from> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getValidFrom(){
      return $this->_get(3);
    }
    
    /**
     * Set <valid_from> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function setValidFrom(\dstore\engine\values\timestampValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <valid_from_null> has a value
     *
     * @return boolean
     */
    public function hasValidFromNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <valid_from_null> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function clearValidFromNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <valid_from_null> value
     *
     * @return boolean
     */
    public function getValidFromNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <valid_from_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function setValidFromNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <valid_to> has a value
     *
     * @return boolean
     */
    public function hasValidTo(){
      return $this->_has(4);
    }
    
    /**
     * Clear <valid_to> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function clearValidTo(){
      return $this->_clear(4);
    }
    
    /**
     * Get <valid_to> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getValidTo(){
      return $this->_get(4);
    }
    
    /**
     * Set <valid_to> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function setValidTo(\dstore\engine\values\timestampValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <valid_to_null> has a value
     *
     * @return boolean
     */
    public function hasValidToNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <valid_to_null> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function clearValidToNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <valid_to_null> value
     *
     * @return boolean
     */
    public function getValidToNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <valid_to_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Parameters
     */
    public function setValidToNull( $value){
      return $this->_set(1004, $value);
    }
  }
}
