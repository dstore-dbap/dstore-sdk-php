<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_PrioritizeARelationship_Pu.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_PrioritizeARelationship_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $related_person_id = null;
    
    /**  @var boolean */
    public $related_person_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $relationship_id = null;
    
    /**  @var boolean */
    public $relationship_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $move_priority_by_x = null;
    
    /**  @var boolean */
    public $move_priority_by_x_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $increase_priority = null;
    
    /**  @var boolean */
    public $increase_priority_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $separator_in_ident_vals = null;
    
    /**  @var boolean */
    public $separator_in_ident_vals_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_PrioritizeARelationship_Pu.Parameters');

      // OPTIONAL MESSAGE person_identification_values = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unique_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE related_person_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "related_person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL related_person_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "related_person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE relationship_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "relationship_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL relationship_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "relationship_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE move_priority_by_x = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "move_priority_by_x";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL move_priority_by_x_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "move_priority_by_x_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE increase_priority = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "increase_priority";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL increase_priority_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "increase_priority_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_ident_vals = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "separator_in_ident_vals";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_ident_vals_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "separator_in_ident_vals_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(3);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setUniqueId(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <related_person_id> has a value
     *
     * @return boolean
     */
    public function hasRelatedPersonId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <related_person_id> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearRelatedPersonId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <related_person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRelatedPersonId(){
      return $this->_get(4);
    }
    
    /**
     * Set <related_person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setRelatedPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <related_person_id_null> has a value
     *
     * @return boolean
     */
    public function hasRelatedPersonIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <related_person_id_null> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearRelatedPersonIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <related_person_id_null> value
     *
     * @return boolean
     */
    public function getRelatedPersonIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <related_person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setRelatedPersonIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <relationship_id> has a value
     *
     * @return boolean
     */
    public function hasRelationshipId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <relationship_id> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearRelationshipId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <relationship_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRelationshipId(){
      return $this->_get(5);
    }
    
    /**
     * Set <relationship_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setRelationshipId(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <relationship_id_null> has a value
     *
     * @return boolean
     */
    public function hasRelationshipIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <relationship_id_null> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearRelationshipIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <relationship_id_null> value
     *
     * @return boolean
     */
    public function getRelationshipIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <relationship_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setRelationshipIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <move_priority_by_x> has a value
     *
     * @return boolean
     */
    public function hasMovePriorityByX(){
      return $this->_has(6);
    }
    
    /**
     * Clear <move_priority_by_x> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearMovePriorityByX(){
      return $this->_clear(6);
    }
    
    /**
     * Get <move_priority_by_x> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMovePriorityByX(){
      return $this->_get(6);
    }
    
    /**
     * Set <move_priority_by_x> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setMovePriorityByX(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <move_priority_by_x_null> has a value
     *
     * @return boolean
     */
    public function hasMovePriorityByXNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <move_priority_by_x_null> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearMovePriorityByXNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <move_priority_by_x_null> value
     *
     * @return boolean
     */
    public function getMovePriorityByXNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <move_priority_by_x_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setMovePriorityByXNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <increase_priority> has a value
     *
     * @return boolean
     */
    public function hasIncreasePriority(){
      return $this->_has(7);
    }
    
    /**
     * Clear <increase_priority> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearIncreasePriority(){
      return $this->_clear(7);
    }
    
    /**
     * Get <increase_priority> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncreasePriority(){
      return $this->_get(7);
    }
    
    /**
     * Set <increase_priority> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setIncreasePriority(\dstore\engine\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <increase_priority_null> has a value
     *
     * @return boolean
     */
    public function hasIncreasePriorityNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <increase_priority_null> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearIncreasePriorityNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <increase_priority_null> value
     *
     * @return boolean
     */
    public function getIncreasePriorityNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <increase_priority_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setIncreasePriorityNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentVals(){
      return $this->_has(8);
    }
    
    /**
     * Clear <separator_in_ident_vals> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearSeparatorInIdentVals(){
      return $this->_clear(8);
    }
    
    /**
     * Get <separator_in_ident_vals> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSeparatorInIdentVals(){
      return $this->_get(8);
    }
    
    /**
     * Set <separator_in_ident_vals> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setSeparatorInIdentVals(\dstore\engine\values\stringValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentValsNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <separator_in_ident_vals_null> value
     *
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function clearSeparatorInIdentValsNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <separator_in_ident_vals_null> value
     *
     * @return boolean
     */
    public function getSeparatorInIdentValsNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <separator_in_ident_vals_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PrioritizeARelationship_Pu\Parameters
     */
    public function setSeparatorInIdentValsNull( $value){
      return $this->_set(1008, $value);
    }
  }
}

