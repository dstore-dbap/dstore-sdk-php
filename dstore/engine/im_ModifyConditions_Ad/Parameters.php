<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_ModifyConditions_Ad.proto
//   Date: 2016-05-19 08:07:43

namespace dstore\engine\im_ModifyConditions_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $condition_description = null;
    
    /**  @var boolean */
    public $condition_description_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $combine_groups_with_a_n_d_operator = null;
    
    /**  @var boolean */
    public $combine_groups_with_a_n_d_operator_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete_condition = null;
    
    /**  @var boolean */
    public $delete_condition_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_ModifyConditions_Ad.Parameters');

      // OPTIONAL MESSAGE condition_description = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "condition_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_description_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "condition_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE combine_groups_with_a_n_d_operator = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "combine_groups_with_a_n_d_operator";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL combine_groups_with_a_n_d_operator_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "combine_groups_with_a_n_d_operator_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_condition = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "delete_condition";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_condition_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "delete_condition_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <condition_description> has a value
     *
     * @return boolean
     */
    public function hasConditionDescription(){
      return $this->_has(1);
    }
    
    /**
     * Clear <condition_description> value
     *
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function clearConditionDescription(){
      return $this->_clear(1);
    }
    
    /**
     * Get <condition_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getConditionDescription(){
      return $this->_get(1);
    }
    
    /**
     * Set <condition_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function setConditionDescription(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <condition_description_null> has a value
     *
     * @return boolean
     */
    public function hasConditionDescriptionNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <condition_description_null> value
     *
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function clearConditionDescriptionNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <condition_description_null> value
     *
     * @return boolean
     */
    public function getConditionDescriptionNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <condition_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function setConditionDescriptionNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <combine_groups_with_a_n_d_operator> has a value
     *
     * @return boolean
     */
    public function hasCombineGroupsWithANDOperator(){
      return $this->_has(2);
    }
    
    /**
     * Clear <combine_groups_with_a_n_d_operator> value
     *
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function clearCombineGroupsWithANDOperator(){
      return $this->_clear(2);
    }
    
    /**
     * Get <combine_groups_with_a_n_d_operator> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getCombineGroupsWithANDOperator(){
      return $this->_get(2);
    }
    
    /**
     * Set <combine_groups_with_a_n_d_operator> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function setCombineGroupsWithANDOperator(\dstore\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <combine_groups_with_a_n_d_operator_null> has a value
     *
     * @return boolean
     */
    public function hasCombineGroupsWithANDOperatorNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <combine_groups_with_a_n_d_operator_null> value
     *
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function clearCombineGroupsWithANDOperatorNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <combine_groups_with_a_n_d_operator_null> value
     *
     * @return boolean
     */
    public function getCombineGroupsWithANDOperatorNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <combine_groups_with_a_n_d_operator_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function setCombineGroupsWithANDOperatorNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <delete_condition> has a value
     *
     * @return boolean
     */
    public function hasDeleteCondition(){
      return $this->_has(3);
    }
    
    /**
     * Clear <delete_condition> value
     *
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function clearDeleteCondition(){
      return $this->_clear(3);
    }
    
    /**
     * Get <delete_condition> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDeleteCondition(){
      return $this->_get(3);
    }
    
    /**
     * Set <delete_condition> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function setDeleteCondition(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <delete_condition_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteConditionNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <delete_condition_null> value
     *
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function clearDeleteConditionNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <delete_condition_null> value
     *
     * @return boolean
     */
    public function getDeleteConditionNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <delete_condition_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditions_Ad\Parameters
     */
    public function setDeleteConditionNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

