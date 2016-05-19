<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetRelationshipSettings_Ad.proto
//   Date: 2016-05-19 08:07:55

namespace dstore\engine\pm_GetRelationshipSettings_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $relationship_id = null;
    
    /**  @var boolean */
    public $relationship_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $from_person_type_id = null;
    
    /**  @var boolean */
    public $from_person_type_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $to_person_type_id = null;
    
    /**  @var boolean */
    public $to_person_type_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $key_variable = null;
    
    /**  @var boolean */
    public $key_variable_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetRelationshipSettings_Ad.Parameters');

      // OPTIONAL MESSAGE relationship_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "relationship_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL relationship_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "relationship_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_person_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "from_person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_person_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "from_person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_person_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "to_person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_person_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "to_person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_variable = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "key_variable";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL key_variable_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "key_variable_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <relationship_id> has a value
     *
     * @return boolean
     */
    public function hasRelationshipId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <relationship_id> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function clearRelationshipId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <relationship_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getRelationshipId(){
      return $this->_get(1);
    }
    
    /**
     * Set <relationship_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function setRelationshipId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <relationship_id_null> has a value
     *
     * @return boolean
     */
    public function hasRelationshipIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <relationship_id_null> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function clearRelationshipIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <relationship_id_null> value
     *
     * @return boolean
     */
    public function getRelationshipIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <relationship_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function setRelationshipIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <from_person_type_id> has a value
     *
     * @return boolean
     */
    public function hasFromPersonTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <from_person_type_id> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function clearFromPersonTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <from_person_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getFromPersonTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <from_person_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function setFromPersonTypeId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <from_person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasFromPersonTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <from_person_type_id_null> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function clearFromPersonTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <from_person_type_id_null> value
     *
     * @return boolean
     */
    public function getFromPersonTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <from_person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function setFromPersonTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <to_person_type_id> has a value
     *
     * @return boolean
     */
    public function hasToPersonTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <to_person_type_id> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function clearToPersonTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <to_person_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getToPersonTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <to_person_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function setToPersonTypeId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <to_person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasToPersonTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <to_person_type_id_null> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function clearToPersonTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <to_person_type_id_null> value
     *
     * @return boolean
     */
    public function getToPersonTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <to_person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function setToPersonTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <key_variable> has a value
     *
     * @return boolean
     */
    public function hasKeyVariable(){
      return $this->_has(4);
    }
    
    /**
     * Clear <key_variable> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function clearKeyVariable(){
      return $this->_clear(4);
    }
    
    /**
     * Get <key_variable> value
     *
     * @return \dstore\values\stringValue
     */
    public function getKeyVariable(){
      return $this->_get(4);
    }
    
    /**
     * Set <key_variable> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function setKeyVariable(\dstore\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <key_variable_null> has a value
     *
     * @return boolean
     */
    public function hasKeyVariableNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <key_variable_null> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function clearKeyVariableNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <key_variable_null> value
     *
     * @return boolean
     */
    public function getKeyVariableNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <key_variable_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Parameters
     */
    public function setKeyVariableNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

