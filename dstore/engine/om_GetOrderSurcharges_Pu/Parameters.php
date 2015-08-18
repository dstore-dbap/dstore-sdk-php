<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetOrderSurcharges_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetOrderSurcharges_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $order_id = null;
    
    /**  @var boolean */
    public $order_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_additional_info = null;
    
    /**  @var boolean */
    public $get_additional_info_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $split_by_taxes = null;
    
    /**  @var boolean */
    public $split_by_taxes_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetOrderSurcharges_Pu.Parameters');

      // OPTIONAL MESSAGE order_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "order_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "order_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_identification_values = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_additional_info = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "get_additional_info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_additional_info_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "get_additional_info_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE split_by_taxes = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "split_by_taxes";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL split_by_taxes_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "split_by_taxes_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <order_id> has a value
     *
     * @return boolean
     */
    public function hasOrderId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <order_id> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function clearOrderId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <order_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOrderId(){
      return $this->_get(1);
    }
    
    /**
     * Set <order_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function setOrderId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <order_id_null> has a value
     *
     * @return boolean
     */
    public function hasOrderIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <order_id_null> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function clearOrderIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <order_id_null> value
     *
     * @return boolean
     */
    public function getOrderIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <order_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function setOrderIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <get_additional_info> has a value
     *
     * @return boolean
     */
    public function hasGetAdditionalInfo(){
      return $this->_has(4);
    }
    
    /**
     * Clear <get_additional_info> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function clearGetAdditionalInfo(){
      return $this->_clear(4);
    }
    
    /**
     * Get <get_additional_info> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetAdditionalInfo(){
      return $this->_get(4);
    }
    
    /**
     * Set <get_additional_info> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function setGetAdditionalInfo(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <get_additional_info_null> has a value
     *
     * @return boolean
     */
    public function hasGetAdditionalInfoNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <get_additional_info_null> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function clearGetAdditionalInfoNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <get_additional_info_null> value
     *
     * @return boolean
     */
    public function getGetAdditionalInfoNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <get_additional_info_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function setGetAdditionalInfoNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <split_by_taxes> has a value
     *
     * @return boolean
     */
    public function hasSplitByTaxes(){
      return $this->_has(5);
    }
    
    /**
     * Clear <split_by_taxes> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function clearSplitByTaxes(){
      return $this->_clear(5);
    }
    
    /**
     * Get <split_by_taxes> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSplitByTaxes(){
      return $this->_get(5);
    }
    
    /**
     * Set <split_by_taxes> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function setSplitByTaxes(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <split_by_taxes_null> has a value
     *
     * @return boolean
     */
    public function hasSplitByTaxesNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <split_by_taxes_null> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function clearSplitByTaxesNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <split_by_taxes_null> value
     *
     * @return boolean
     */
    public function getSplitByTaxesNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <split_by_taxes_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Parameters
     */
    public function setSplitByTaxesNull( $value){
      return $this->_set(1005, $value);
    }
  }
}
