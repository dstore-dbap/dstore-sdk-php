<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_SetPropertyOfOnePerson_Pu.proto
//   Date: 2016-05-19 08:07:56

namespace dstore\engine\pm_SetPropertyOfOnePerson_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $identifying_characteristic_id = null;
    
    /**  @var boolean */
    public $identifying_characteristic_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $identifying_value = null;
    
    /**  @var boolean */
    public $identifying_value_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $case_sensitive = null;
    
    /**  @var boolean */
    public $case_sensitive_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $secret_key = null;
    
    /**  @var boolean */
    public $secret_key_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $set_value_for_characteristic_id = null;
    
    /**  @var boolean */
    public $set_value_for_characteristic_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $new_value = null;
    
    /**  @var boolean */
    public $new_value_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_SetPropertyOfOnePerson_Pu.Parameters');

      // OPTIONAL MESSAGE person_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE identifying_characteristic_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "identifying_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL identifying_characteristic_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "identifying_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE identifying_value = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "identifying_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL identifying_value_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "identifying_value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE case_sensitive = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "case_sensitive";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL case_sensitive_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "case_sensitive_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE secret_key = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "secret_key";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL secret_key_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "secret_key_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE set_value_for_characteristic_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "set_value_for_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL set_value_for_characteristic_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "set_value_for_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE new_value = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "new_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL new_value_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "new_value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
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
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <identifying_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingCharacteristicId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <identifying_characteristic_id> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearIdentifyingCharacteristicId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <identifying_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getIdentifyingCharacteristicId(){
      return $this->_get(2);
    }
    
    /**
     * Set <identifying_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setIdentifyingCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <identifying_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingCharacteristicIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <identifying_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearIdentifyingCharacteristicIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <identifying_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getIdentifyingCharacteristicIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <identifying_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setIdentifyingCharacteristicIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <identifying_value> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingValue(){
      return $this->_has(3);
    }
    
    /**
     * Clear <identifying_value> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearIdentifyingValue(){
      return $this->_clear(3);
    }
    
    /**
     * Get <identifying_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getIdentifyingValue(){
      return $this->_get(3);
    }
    
    /**
     * Set <identifying_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setIdentifyingValue(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <identifying_value_null> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingValueNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <identifying_value_null> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearIdentifyingValueNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <identifying_value_null> value
     *
     * @return boolean
     */
    public function getIdentifyingValueNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <identifying_value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setIdentifyingValueNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <case_sensitive> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitive(){
      return $this->_has(4);
    }
    
    /**
     * Clear <case_sensitive> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearCaseSensitive(){
      return $this->_clear(4);
    }
    
    /**
     * Get <case_sensitive> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getCaseSensitive(){
      return $this->_get(4);
    }
    
    /**
     * Set <case_sensitive> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setCaseSensitive(\dstore\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <case_sensitive_null> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitiveNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <case_sensitive_null> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearCaseSensitiveNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <case_sensitive_null> value
     *
     * @return boolean
     */
    public function getCaseSensitiveNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <case_sensitive_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setCaseSensitiveNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <secret_key> has a value
     *
     * @return boolean
     */
    public function hasSecretKey(){
      return $this->_has(5);
    }
    
    /**
     * Clear <secret_key> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearSecretKey(){
      return $this->_clear(5);
    }
    
    /**
     * Get <secret_key> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSecretKey(){
      return $this->_get(5);
    }
    
    /**
     * Set <secret_key> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setSecretKey(\dstore\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <secret_key_null> has a value
     *
     * @return boolean
     */
    public function hasSecretKeyNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <secret_key_null> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearSecretKeyNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <secret_key_null> value
     *
     * @return boolean
     */
    public function getSecretKeyNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <secret_key_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setSecretKeyNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <set_value_for_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasSetValueForCharacteristicId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <set_value_for_characteristic_id> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearSetValueForCharacteristicId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <set_value_for_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSetValueForCharacteristicId(){
      return $this->_get(6);
    }
    
    /**
     * Set <set_value_for_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setSetValueForCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <set_value_for_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasSetValueForCharacteristicIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <set_value_for_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearSetValueForCharacteristicIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <set_value_for_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getSetValueForCharacteristicIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <set_value_for_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setSetValueForCharacteristicIdNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <new_value> has a value
     *
     * @return boolean
     */
    public function hasNewValue(){
      return $this->_has(7);
    }
    
    /**
     * Clear <new_value> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearNewValue(){
      return $this->_clear(7);
    }
    
    /**
     * Get <new_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getNewValue(){
      return $this->_get(7);
    }
    
    /**
     * Set <new_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setNewValue(\dstore\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <new_value_null> has a value
     *
     * @return boolean
     */
    public function hasNewValueNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <new_value_null> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearNewValueNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <new_value_null> value
     *
     * @return boolean
     */
    public function getNewValueNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <new_value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setNewValueNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(8);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearCountry(){
      return $this->_clear(8);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCountry(){
      return $this->_get(8);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setCountry(\dstore\values\stringValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_SetPropertyOfOnePerson_Pu\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1008, $value);
    }
  }
}

