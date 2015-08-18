<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonBinaries_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetPersonBinaries_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $include_binary_code = null;
    
    /**  @var boolean */
    public $include_binary_code_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $binary_characteristic_id = null;
    
    /**  @var boolean */
    public $binary_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var boolean */
    public $value_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonBinaries_Ad.Parameters');

      // OPTIONAL MESSAGE person_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_binary_code = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "include_binary_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_binary_code_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "include_binary_code_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_characteristic_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "binary_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL binary_characteristic_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "binary_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <include_binary_code> has a value
     *
     * @return boolean
     */
    public function hasIncludeBinaryCode(){
      return $this->_has(2);
    }
    
    /**
     * Clear <include_binary_code> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function clearIncludeBinaryCode(){
      return $this->_clear(2);
    }
    
    /**
     * Get <include_binary_code> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getIncludeBinaryCode(){
      return $this->_get(2);
    }
    
    /**
     * Set <include_binary_code> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function setIncludeBinaryCode(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <include_binary_code_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeBinaryCodeNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <include_binary_code_null> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function clearIncludeBinaryCodeNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <include_binary_code_null> value
     *
     * @return boolean
     */
    public function getIncludeBinaryCodeNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <include_binary_code_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function setIncludeBinaryCodeNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <binary_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryCharacteristicId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <binary_characteristic_id> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function clearBinaryCharacteristicId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <binary_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBinaryCharacteristicId(){
      return $this->_get(3);
    }
    
    /**
     * Set <binary_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function setBinaryCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <binary_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasBinaryCharacteristicIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <binary_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function clearBinaryCharacteristicIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <binary_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getBinaryCharacteristicIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <binary_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function setBinaryCharacteristicIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(4);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function clearValue(){
      return $this->_clear(4);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(4);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <value_null> has a value
     *
     * @return boolean
     */
    public function hasValueNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <value_null> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function clearValueNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <value_null> value
     *
     * @return boolean
     */
    public function getValueNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Parameters
     */
    public function setValueNull( $value){
      return $this->_set(1004, $value);
    }
  }
}
