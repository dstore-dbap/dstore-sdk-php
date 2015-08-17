<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_ModifyPersonCharacsInCat_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_ModifyPersonCharacsInCat_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $person_charac_category_id = null;
    
    /**  @var boolean */
    public $person_charac_category_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_characteristic_id = null;
    
    /**  @var boolean */
    public $person_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $required = null;
    
    /**  @var boolean */
    public $required_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete = null;
    
    /**  @var boolean */
    public $delete_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $keep_properties_history_in_days = null;
    
    /**  @var boolean */
    public $keep_properties_history_in_days_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $default_value = null;
    
    /**  @var boolean */
    public $default_value_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_ModifyPersonCharacsInCat_Ad.Parameters');

      // OPTIONAL MESSAGE person_charac_category_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_charac_category_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_charac_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_characteristic_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_characteristic_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE required = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "required";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL required_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "required_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE keep_properties_history_in_days = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "keep_properties_history_in_days";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL keep_properties_history_in_days_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "keep_properties_history_in_days_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE default_value = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "default_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL default_value_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "default_value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "country_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_charac_category_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearPersonCharacCategoryId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_charac_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacCategoryId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_charac_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setPersonCharacCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_charac_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_charac_category_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearPersonCharacCategoryIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_charac_category_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacCategoryIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_charac_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setPersonCharacCategoryIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_characteristic_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearPersonCharacteristicId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacteristicId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setPersonCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearPersonCharacteristicIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacteristicIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setPersonCharacteristicIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <required> has a value
     *
     * @return boolean
     */
    public function hasRequired(){
      return $this->_has(3);
    }
    
    /**
     * Clear <required> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearRequired(){
      return $this->_clear(3);
    }
    
    /**
     * Get <required> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getRequired(){
      return $this->_get(3);
    }
    
    /**
     * Set <required> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setRequired(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <required_null> has a value
     *
     * @return boolean
     */
    public function hasRequiredNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <required_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearRequiredNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <required_null> value
     *
     * @return boolean
     */
    public function getRequiredNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <required_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setRequiredNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete> has a value
     *
     * @return boolean
     */
    public function hasDelete(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearDelete(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDelete(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setDelete(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearDeleteNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_null> value
     *
     * @return boolean
     */
    public function getDeleteNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setDeleteNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <keep_properties_history_in_days> has a value
     *
     * @return boolean
     */
    public function hasKeepPropertiesHistoryInDays(){
      return $this->_has(5);
    }
    
    /**
     * Clear <keep_properties_history_in_days> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearKeepPropertiesHistoryInDays(){
      return $this->_clear(5);
    }
    
    /**
     * Get <keep_properties_history_in_days> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getKeepPropertiesHistoryInDays(){
      return $this->_get(5);
    }
    
    /**
     * Set <keep_properties_history_in_days> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setKeepPropertiesHistoryInDays(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <keep_properties_history_in_days_null> has a value
     *
     * @return boolean
     */
    public function hasKeepPropertiesHistoryInDaysNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <keep_properties_history_in_days_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearKeepPropertiesHistoryInDaysNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <keep_properties_history_in_days_null> value
     *
     * @return boolean
     */
    public function getKeepPropertiesHistoryInDaysNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <keep_properties_history_in_days_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setKeepPropertiesHistoryInDaysNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <default_value> has a value
     *
     * @return boolean
     */
    public function hasDefaultValue(){
      return $this->_has(6);
    }
    
    /**
     * Clear <default_value> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearDefaultValue(){
      return $this->_clear(6);
    }
    
    /**
     * Get <default_value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDefaultValue(){
      return $this->_get(6);
    }
    
    /**
     * Set <default_value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setDefaultValue(\dstore\engine\values\stringValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <default_value_null> has a value
     *
     * @return boolean
     */
    public function hasDefaultValueNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <default_value_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearDefaultValueNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <default_value_null> value
     *
     * @return boolean
     */
    public function getDefaultValueNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <default_value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setDefaultValueNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(7);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearCountry(){
      return $this->_clear(7);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCountry(){
      return $this->_get(7);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setCountry(\dstore\engine\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacsInCat_Ad\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1007, $value);
    }
  }
}

