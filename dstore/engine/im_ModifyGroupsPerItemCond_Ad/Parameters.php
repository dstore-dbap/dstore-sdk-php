<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_ModifyGroupsPerItemCond_Ad.proto
//   Date: 2016-05-19 08:07:43

namespace dstore\engine\im_ModifyGroupsPerItemCond_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $condition_id = null;
    
    /**  @var boolean */
    public $condition_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $condition_group_id = null;
    
    /**  @var boolean */
    public $condition_group_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $sort_no = null;
    
    /**  @var boolean */
    public $sort_no_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete_combination = null;
    
    /**  @var boolean */
    public $delete_combination_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_ModifyGroupsPerItemCond_Ad.Parameters');

      // OPTIONAL MESSAGE condition_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "condition_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition_group_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "condition_group_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_group_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "condition_group_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_no_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "sort_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_combination = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete_combination";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_combination_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_combination_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <condition_id> has a value
     *
     * @return boolean
     */
    public function hasConditionId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <condition_id> value
     *
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function clearConditionId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <condition_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getConditionId(){
      return $this->_get(1);
    }
    
    /**
     * Set <condition_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function setConditionId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <condition_id_null> has a value
     *
     * @return boolean
     */
    public function hasConditionIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <condition_id_null> value
     *
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function clearConditionIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <condition_id_null> value
     *
     * @return boolean
     */
    public function getConditionIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <condition_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function setConditionIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <condition_group_id> has a value
     *
     * @return boolean
     */
    public function hasConditionGroupId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <condition_group_id> value
     *
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function clearConditionGroupId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <condition_group_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getConditionGroupId(){
      return $this->_get(2);
    }
    
    /**
     * Set <condition_group_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function setConditionGroupId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <condition_group_id_null> has a value
     *
     * @return boolean
     */
    public function hasConditionGroupIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <condition_group_id_null> value
     *
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function clearConditionGroupIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <condition_group_id_null> value
     *
     * @return boolean
     */
    public function getConditionGroupIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <condition_group_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function setConditionGroupIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(3);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function clearSortNo(){
      return $this->_clear(3);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(3);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function setSortNo(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sort_no_null> has a value
     *
     * @return boolean
     */
    public function hasSortNoNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <sort_no_null> value
     *
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function clearSortNoNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <sort_no_null> value
     *
     * @return boolean
     */
    public function getSortNoNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <sort_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function setSortNoNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete_combination> has a value
     *
     * @return boolean
     */
    public function hasDeleteCombination(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete_combination> value
     *
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function clearDeleteCombination(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete_combination> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDeleteCombination(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete_combination> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function setDeleteCombination(\dstore\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_combination_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteCombinationNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_combination_null> value
     *
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function clearDeleteCombinationNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_combination_null> value
     *
     * @return boolean
     */
    public function getDeleteCombinationNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_combination_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyGroupsPerItemCond_Ad\Parameters
     */
    public function setDeleteCombinationNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

