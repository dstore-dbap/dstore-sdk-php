<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampOrderSurchDisc_Ad.proto
//   Date: 2016-05-19 08:07:51

namespace dstore\engine\om_ModifyCampOrderSurchDisc_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $apply_to_surcharge_type_id = null;
    
    /**  @var boolean */
    public $apply_to_surcharge_type_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $discount_surcharge_type_id = null;
    
    /**  @var boolean */
    public $discount_surcharge_type_id_null = null;
    
    /**  @var \dstore\values\decimalValue */
    public $discount_value = null;
    
    /**  @var boolean */
    public $discount_value_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $delete_benefit = null;
    
    /**  @var boolean */
    public $delete_benefit_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampOrderSurchDisc_Ad.Parameters');

      // OPTIONAL MESSAGE apply_to_surcharge_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "apply_to_surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL apply_to_surcharge_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "apply_to_surcharge_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE discount_surcharge_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "discount_surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL discount_surcharge_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "discount_surcharge_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE discount_value = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "discount_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL discount_value_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "discount_value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_benefit = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete_benefit";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_benefit_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_benefit_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <apply_to_surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasApplyToSurchargeTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <apply_to_surcharge_type_id> value
     *
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function clearApplyToSurchargeTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <apply_to_surcharge_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getApplyToSurchargeTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <apply_to_surcharge_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function setApplyToSurchargeTypeId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <apply_to_surcharge_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasApplyToSurchargeTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <apply_to_surcharge_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function clearApplyToSurchargeTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <apply_to_surcharge_type_id_null> value
     *
     * @return boolean
     */
    public function getApplyToSurchargeTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <apply_to_surcharge_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function setApplyToSurchargeTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <discount_surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasDiscountSurchargeTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <discount_surcharge_type_id> value
     *
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function clearDiscountSurchargeTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <discount_surcharge_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getDiscountSurchargeTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <discount_surcharge_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function setDiscountSurchargeTypeId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <discount_surcharge_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasDiscountSurchargeTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <discount_surcharge_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function clearDiscountSurchargeTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <discount_surcharge_type_id_null> value
     *
     * @return boolean
     */
    public function getDiscountSurchargeTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <discount_surcharge_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function setDiscountSurchargeTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <discount_value> has a value
     *
     * @return boolean
     */
    public function hasDiscountValue(){
      return $this->_has(3);
    }
    
    /**
     * Clear <discount_value> value
     *
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function clearDiscountValue(){
      return $this->_clear(3);
    }
    
    /**
     * Get <discount_value> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getDiscountValue(){
      return $this->_get(3);
    }
    
    /**
     * Set <discount_value> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function setDiscountValue(\dstore\values\decimalValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <discount_value_null> has a value
     *
     * @return boolean
     */
    public function hasDiscountValueNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <discount_value_null> value
     *
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function clearDiscountValueNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <discount_value_null> value
     *
     * @return boolean
     */
    public function getDiscountValueNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <discount_value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function setDiscountValueNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete_benefit> has a value
     *
     * @return boolean
     */
    public function hasDeleteBenefit(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete_benefit> value
     *
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function clearDeleteBenefit(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete_benefit> value
     *
     * @return \dstore\values\integerValue
     */
    public function getDeleteBenefit(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete_benefit> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function setDeleteBenefit(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_benefit_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteBenefitNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_benefit_null> value
     *
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function clearDeleteBenefitNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_benefit_null> value
     *
     * @return boolean
     */
    public function getDeleteBenefitNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_benefit_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampOrderSurchDisc_Ad\Parameters
     */
    public function setDeleteBenefitNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

