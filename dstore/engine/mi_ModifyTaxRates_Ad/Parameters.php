<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_ModifyTaxRates_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_ModifyTaxRates_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $tax_rate_id = null;
    
    /**  @var boolean */
    public $tax_rate_id_null = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $tax_rate = null;
    
    /**  @var boolean */
    public $tax_rate_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $tax_rate_description = null;
    
    /**  @var boolean */
    public $tax_rate_description_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $use_as_fallback = null;
    
    /**  @var boolean */
    public $use_as_fallback_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $active = null;
    
    /**  @var boolean */
    public $active_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_tax_rate = null;
    
    /**  @var boolean */
    public $delete_tax_rate_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_ModifyTaxRates_Ad.Parameters');

      // OPTIONAL MESSAGE tax_rate_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "tax_rate_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL tax_rate_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "tax_rate_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tax_rate = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "tax_rate";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL tax_rate_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "tax_rate_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tax_rate_description = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "tax_rate_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL tax_rate_description_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "tax_rate_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE use_as_fallback = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "use_as_fallback";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL use_as_fallback_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "use_as_fallback_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE active = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL active_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "active_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_tax_rate = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "delete_tax_rate";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_tax_rate_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "delete_tax_rate_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <tax_rate_id> has a value
     *
     * @return boolean
     */
    public function hasTaxRateId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <tax_rate_id> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearTaxRateId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <tax_rate_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTaxRateId(){
      return $this->_get(1);
    }
    
    /**
     * Set <tax_rate_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setTaxRateId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <tax_rate_id_null> has a value
     *
     * @return boolean
     */
    public function hasTaxRateIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <tax_rate_id_null> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearTaxRateIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <tax_rate_id_null> value
     *
     * @return boolean
     */
    public function getTaxRateIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <tax_rate_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setTaxRateIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <tax_rate> has a value
     *
     * @return boolean
     */
    public function hasTaxRate(){
      return $this->_has(2);
    }
    
    /**
     * Clear <tax_rate> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearTaxRate(){
      return $this->_clear(2);
    }
    
    /**
     * Get <tax_rate> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getTaxRate(){
      return $this->_get(2);
    }
    
    /**
     * Set <tax_rate> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setTaxRate(\dstore\engine\values\decimalValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <tax_rate_null> has a value
     *
     * @return boolean
     */
    public function hasTaxRateNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <tax_rate_null> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearTaxRateNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <tax_rate_null> value
     *
     * @return boolean
     */
    public function getTaxRateNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <tax_rate_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setTaxRateNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <tax_rate_description> has a value
     *
     * @return boolean
     */
    public function hasTaxRateDescription(){
      return $this->_has(3);
    }
    
    /**
     * Clear <tax_rate_description> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearTaxRateDescription(){
      return $this->_clear(3);
    }
    
    /**
     * Get <tax_rate_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getTaxRateDescription(){
      return $this->_get(3);
    }
    
    /**
     * Set <tax_rate_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setTaxRateDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <tax_rate_description_null> has a value
     *
     * @return boolean
     */
    public function hasTaxRateDescriptionNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <tax_rate_description_null> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearTaxRateDescriptionNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <tax_rate_description_null> value
     *
     * @return boolean
     */
    public function getTaxRateDescriptionNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <tax_rate_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setTaxRateDescriptionNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <use_as_fallback> has a value
     *
     * @return boolean
     */
    public function hasUseAsFallback(){
      return $this->_has(4);
    }
    
    /**
     * Clear <use_as_fallback> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearUseAsFallback(){
      return $this->_clear(4);
    }
    
    /**
     * Get <use_as_fallback> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUseAsFallback(){
      return $this->_get(4);
    }
    
    /**
     * Set <use_as_fallback> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setUseAsFallback(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <use_as_fallback_null> has a value
     *
     * @return boolean
     */
    public function hasUseAsFallbackNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <use_as_fallback_null> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearUseAsFallbackNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <use_as_fallback_null> value
     *
     * @return boolean
     */
    public function getUseAsFallbackNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <use_as_fallback_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setUseAsFallbackNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(5);
    }
    
    /**
     * Clear <active> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearActive(){
      return $this->_clear(5);
    }
    
    /**
     * Get <active> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getActive(){
      return $this->_get(5);
    }
    
    /**
     * Set <active> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setActive(\dstore\engine\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <active_null> has a value
     *
     * @return boolean
     */
    public function hasActiveNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <active_null> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearActiveNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <active_null> value
     *
     * @return boolean
     */
    public function getActiveNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <active_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setActiveNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <delete_tax_rate> has a value
     *
     * @return boolean
     */
    public function hasDeleteTaxRate(){
      return $this->_has(6);
    }
    
    /**
     * Clear <delete_tax_rate> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearDeleteTaxRate(){
      return $this->_clear(6);
    }
    
    /**
     * Get <delete_tax_rate> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteTaxRate(){
      return $this->_get(6);
    }
    
    /**
     * Set <delete_tax_rate> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setDeleteTaxRate(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <delete_tax_rate_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteTaxRateNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <delete_tax_rate_null> value
     *
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function clearDeleteTaxRateNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <delete_tax_rate_null> value
     *
     * @return boolean
     */
    public function getDeleteTaxRateNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <delete_tax_rate_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTaxRates_Ad\Parameters
     */
    public function setDeleteTaxRateNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

