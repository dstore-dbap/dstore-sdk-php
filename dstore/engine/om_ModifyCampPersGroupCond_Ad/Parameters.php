<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampPersGroupCond_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_ModifyCampPersGroupCond_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $filter_by_person_group_ids = null;
    
    /**  @var boolean */
    public $filter_by_person_group_ids_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $any_id_in_filter = null;
    
    /**  @var boolean */
    public $any_id_in_filter_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $negate_filter = null;
    
    /**  @var boolean */
    public $negate_filter_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_person_group_condition = null;
    
    /**  @var boolean */
    public $delete_person_group_condition_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampPersGroupCond_Ad.Parameters');

      // OPTIONAL MESSAGE filter_by_person_group_ids = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "filter_by_person_group_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL filter_by_person_group_ids_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "filter_by_person_group_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE any_id_in_filter = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "any_id_in_filter";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL any_id_in_filter_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "any_id_in_filter_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE negate_filter = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "negate_filter";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL negate_filter_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "negate_filter_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_person_group_condition = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete_person_group_condition";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_person_group_condition_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_person_group_condition_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <filter_by_person_group_ids> has a value
     *
     * @return boolean
     */
    public function hasFilterByPersonGroupIds(){
      return $this->_has(1);
    }
    
    /**
     * Clear <filter_by_person_group_ids> value
     *
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function clearFilterByPersonGroupIds(){
      return $this->_clear(1);
    }
    
    /**
     * Get <filter_by_person_group_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFilterByPersonGroupIds(){
      return $this->_get(1);
    }
    
    /**
     * Set <filter_by_person_group_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function setFilterByPersonGroupIds(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <filter_by_person_group_ids_null> has a value
     *
     * @return boolean
     */
    public function hasFilterByPersonGroupIdsNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <filter_by_person_group_ids_null> value
     *
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function clearFilterByPersonGroupIdsNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <filter_by_person_group_ids_null> value
     *
     * @return boolean
     */
    public function getFilterByPersonGroupIdsNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <filter_by_person_group_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function setFilterByPersonGroupIdsNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <any_id_in_filter> has a value
     *
     * @return boolean
     */
    public function hasAnyIdInFilter(){
      return $this->_has(2);
    }
    
    /**
     * Clear <any_id_in_filter> value
     *
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function clearAnyIdInFilter(){
      return $this->_clear(2);
    }
    
    /**
     * Get <any_id_in_filter> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getAnyIdInFilter(){
      return $this->_get(2);
    }
    
    /**
     * Set <any_id_in_filter> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function setAnyIdInFilter(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <any_id_in_filter_null> has a value
     *
     * @return boolean
     */
    public function hasAnyIdInFilterNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <any_id_in_filter_null> value
     *
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function clearAnyIdInFilterNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <any_id_in_filter_null> value
     *
     * @return boolean
     */
    public function getAnyIdInFilterNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <any_id_in_filter_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function setAnyIdInFilterNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <negate_filter> has a value
     *
     * @return boolean
     */
    public function hasNegateFilter(){
      return $this->_has(3);
    }
    
    /**
     * Clear <negate_filter> value
     *
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function clearNegateFilter(){
      return $this->_clear(3);
    }
    
    /**
     * Get <negate_filter> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getNegateFilter(){
      return $this->_get(3);
    }
    
    /**
     * Set <negate_filter> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function setNegateFilter(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <negate_filter_null> has a value
     *
     * @return boolean
     */
    public function hasNegateFilterNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <negate_filter_null> value
     *
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function clearNegateFilterNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <negate_filter_null> value
     *
     * @return boolean
     */
    public function getNegateFilterNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <negate_filter_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function setNegateFilterNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete_person_group_condition> has a value
     *
     * @return boolean
     */
    public function hasDeletePersonGroupCondition(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete_person_group_condition> value
     *
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function clearDeletePersonGroupCondition(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete_person_group_condition> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeletePersonGroupCondition(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete_person_group_condition> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function setDeletePersonGroupCondition(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_person_group_condition_null> has a value
     *
     * @return boolean
     */
    public function hasDeletePersonGroupConditionNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_person_group_condition_null> value
     *
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function clearDeletePersonGroupConditionNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_person_group_condition_null> value
     *
     * @return boolean
     */
    public function getDeletePersonGroupConditionNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_person_group_condition_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampPersGroupCond_Ad\Parameters
     */
    public function setDeletePersonGroupConditionNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

