<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampBundlePricing_Ad.proto
//   Date: 2016-05-19 08:07:51

namespace dstore\engine\om_ModifyCampBundlePricing_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $abs_discount_surcharge_type_id = null;
    
    /**  @var boolean */
    public $abs_discount_surcharge_type_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $bundle_pricing_type_id = null;
    
    /**  @var boolean */
    public $bundle_pricing_type_id_null = null;
    
    /**  @var \dstore\values\decimalValue */
    public $bundle_price_or_discount = null;
    
    /**  @var boolean */
    public $bundle_price_or_discount_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $net_based_pricing = null;
    
    /**  @var boolean */
    public $net_based_pricing_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $delete_benefit = null;
    
    /**  @var boolean */
    public $delete_benefit_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampBundlePricing_Ad.Parameters');

      // OPTIONAL MESSAGE abs_discount_surcharge_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "abs_discount_surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL abs_discount_surcharge_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "abs_discount_surcharge_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE bundle_pricing_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "bundle_pricing_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL bundle_pricing_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "bundle_pricing_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE bundle_price_or_discount = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "bundle_price_or_discount";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL bundle_price_or_discount_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "bundle_price_or_discount_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE net_based_pricing = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "net_based_pricing";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL net_based_pricing_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "net_based_pricing_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_benefit = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "delete_benefit";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_benefit_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
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
     * Check if <abs_discount_surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasAbsDiscountSurchargeTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <abs_discount_surcharge_type_id> value
     *
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function clearAbsDiscountSurchargeTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <abs_discount_surcharge_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getAbsDiscountSurchargeTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <abs_discount_surcharge_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function setAbsDiscountSurchargeTypeId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <abs_discount_surcharge_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasAbsDiscountSurchargeTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <abs_discount_surcharge_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function clearAbsDiscountSurchargeTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <abs_discount_surcharge_type_id_null> value
     *
     * @return boolean
     */
    public function getAbsDiscountSurchargeTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <abs_discount_surcharge_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function setAbsDiscountSurchargeTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <bundle_pricing_type_id> has a value
     *
     * @return boolean
     */
    public function hasBundlePricingTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <bundle_pricing_type_id> value
     *
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function clearBundlePricingTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <bundle_pricing_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBundlePricingTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <bundle_pricing_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function setBundlePricingTypeId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <bundle_pricing_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasBundlePricingTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <bundle_pricing_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function clearBundlePricingTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <bundle_pricing_type_id_null> value
     *
     * @return boolean
     */
    public function getBundlePricingTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <bundle_pricing_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function setBundlePricingTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <bundle_price_or_discount> has a value
     *
     * @return boolean
     */
    public function hasBundlePriceOrDiscount(){
      return $this->_has(3);
    }
    
    /**
     * Clear <bundle_price_or_discount> value
     *
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function clearBundlePriceOrDiscount(){
      return $this->_clear(3);
    }
    
    /**
     * Get <bundle_price_or_discount> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getBundlePriceOrDiscount(){
      return $this->_get(3);
    }
    
    /**
     * Set <bundle_price_or_discount> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function setBundlePriceOrDiscount(\dstore\values\decimalValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <bundle_price_or_discount_null> has a value
     *
     * @return boolean
     */
    public function hasBundlePriceOrDiscountNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <bundle_price_or_discount_null> value
     *
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function clearBundlePriceOrDiscountNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <bundle_price_or_discount_null> value
     *
     * @return boolean
     */
    public function getBundlePriceOrDiscountNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <bundle_price_or_discount_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function setBundlePriceOrDiscountNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <net_based_pricing> has a value
     *
     * @return boolean
     */
    public function hasNetBasedPricing(){
      return $this->_has(4);
    }
    
    /**
     * Clear <net_based_pricing> value
     *
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function clearNetBasedPricing(){
      return $this->_clear(4);
    }
    
    /**
     * Get <net_based_pricing> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getNetBasedPricing(){
      return $this->_get(4);
    }
    
    /**
     * Set <net_based_pricing> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function setNetBasedPricing(\dstore\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <net_based_pricing_null> has a value
     *
     * @return boolean
     */
    public function hasNetBasedPricingNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <net_based_pricing_null> value
     *
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function clearNetBasedPricingNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <net_based_pricing_null> value
     *
     * @return boolean
     */
    public function getNetBasedPricingNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <net_based_pricing_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function setNetBasedPricingNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <delete_benefit> has a value
     *
     * @return boolean
     */
    public function hasDeleteBenefit(){
      return $this->_has(5);
    }
    
    /**
     * Clear <delete_benefit> value
     *
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function clearDeleteBenefit(){
      return $this->_clear(5);
    }
    
    /**
     * Get <delete_benefit> value
     *
     * @return \dstore\values\integerValue
     */
    public function getDeleteBenefit(){
      return $this->_get(5);
    }
    
    /**
     * Set <delete_benefit> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function setDeleteBenefit(\dstore\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <delete_benefit_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteBenefitNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <delete_benefit_null> value
     *
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function clearDeleteBenefitNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <delete_benefit_null> value
     *
     * @return boolean
     */
    public function getDeleteBenefitNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <delete_benefit_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampBundlePricing_Ad\Parameters
     */
    public function setDeleteBenefitNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

