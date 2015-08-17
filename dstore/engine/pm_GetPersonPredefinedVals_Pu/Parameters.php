<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonPredefinedVals_Pu.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetPersonPredefinedVals_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $person_characteristic_id = null;
    
    /**  @var boolean */
    public $person_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $only_values_currently_valid = null;
    
    /**  @var boolean */
    public $only_values_currently_valid_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $get_references_for_table_id = null;
    
    /**  @var boolean */
    public $get_references_for_table_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonPredefinedVals_Pu.Parameters');

      // OPTIONAL MESSAGE person_characteristic_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_characteristic_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_values_currently_valid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "only_values_currently_valid";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_values_currently_valid_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "only_values_currently_valid_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_references_for_table_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "get_references_for_table_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_references_for_table_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "get_references_for_table_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_characteristic_id> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function clearPersonCharacteristicId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacteristicId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function setPersonCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function clearPersonCharacteristicIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacteristicIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function setPersonCharacteristicIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(2);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <only_values_currently_valid> has a value
     *
     * @return boolean
     */
    public function hasOnlyValuesCurrentlyValid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <only_values_currently_valid> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function clearOnlyValuesCurrentlyValid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <only_values_currently_valid> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getOnlyValuesCurrentlyValid(){
      return $this->_get(3);
    }
    
    /**
     * Set <only_values_currently_valid> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function setOnlyValuesCurrentlyValid(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <only_values_currently_valid_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyValuesCurrentlyValidNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <only_values_currently_valid_null> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function clearOnlyValuesCurrentlyValidNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <only_values_currently_valid_null> value
     *
     * @return boolean
     */
    public function getOnlyValuesCurrentlyValidNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <only_values_currently_valid_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function setOnlyValuesCurrentlyValidNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <get_references_for_table_id> has a value
     *
     * @return boolean
     */
    public function hasGetReferencesForTableId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <get_references_for_table_id> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function clearGetReferencesForTableId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <get_references_for_table_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getGetReferencesForTableId(){
      return $this->_get(4);
    }
    
    /**
     * Set <get_references_for_table_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function setGetReferencesForTableId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <get_references_for_table_id_null> has a value
     *
     * @return boolean
     */
    public function hasGetReferencesForTableIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <get_references_for_table_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function clearGetReferencesForTableIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <get_references_for_table_id_null> value
     *
     * @return boolean
     */
    public function getGetReferencesForTableIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <get_references_for_table_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Parameters
     */
    public function setGetReferencesForTableIdNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

