<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_ModifyConditionGroups_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_ModifyConditionGroups_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $condition_group_description = null;
    
    /**  @var boolean */
    public $condition_group_description_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $combine_parts_with_a_n_d_operator = null;
    
    /**  @var boolean */
    public $combine_parts_with_a_n_d_operator_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_condition_group = null;
    
    /**  @var boolean */
    public $delete_condition_group_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_ModifyConditionGroups_Ad.Parameters');

      // OPTIONAL MESSAGE condition_group_description = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "condition_group_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_group_description_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "condition_group_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE combine_parts_with_a_n_d_operator = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "combine_parts_with_a_n_d_operator";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL combine_parts_with_a_n_d_operator_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "combine_parts_with_a_n_d_operator_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_condition_group = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "delete_condition_group";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_condition_group_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "delete_condition_group_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <condition_group_description> has a value
     *
     * @return boolean
     */
    public function hasConditionGroupDescription(){
      return $this->_has(1);
    }
    
    /**
     * Clear <condition_group_description> value
     *
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function clearConditionGroupDescription(){
      return $this->_clear(1);
    }
    
    /**
     * Get <condition_group_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getConditionGroupDescription(){
      return $this->_get(1);
    }
    
    /**
     * Set <condition_group_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function setConditionGroupDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <condition_group_description_null> has a value
     *
     * @return boolean
     */
    public function hasConditionGroupDescriptionNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <condition_group_description_null> value
     *
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function clearConditionGroupDescriptionNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <condition_group_description_null> value
     *
     * @return boolean
     */
    public function getConditionGroupDescriptionNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <condition_group_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function setConditionGroupDescriptionNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <combine_parts_with_a_n_d_operator> has a value
     *
     * @return boolean
     */
    public function hasCombinePartsWithANDOperator(){
      return $this->_has(2);
    }
    
    /**
     * Clear <combine_parts_with_a_n_d_operator> value
     *
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function clearCombinePartsWithANDOperator(){
      return $this->_clear(2);
    }
    
    /**
     * Get <combine_parts_with_a_n_d_operator> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCombinePartsWithANDOperator(){
      return $this->_get(2);
    }
    
    /**
     * Set <combine_parts_with_a_n_d_operator> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function setCombinePartsWithANDOperator(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <combine_parts_with_a_n_d_operator_null> has a value
     *
     * @return boolean
     */
    public function hasCombinePartsWithANDOperatorNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <combine_parts_with_a_n_d_operator_null> value
     *
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function clearCombinePartsWithANDOperatorNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <combine_parts_with_a_n_d_operator_null> value
     *
     * @return boolean
     */
    public function getCombinePartsWithANDOperatorNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <combine_parts_with_a_n_d_operator_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function setCombinePartsWithANDOperatorNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <delete_condition_group> has a value
     *
     * @return boolean
     */
    public function hasDeleteConditionGroup(){
      return $this->_has(3);
    }
    
    /**
     * Clear <delete_condition_group> value
     *
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function clearDeleteConditionGroup(){
      return $this->_clear(3);
    }
    
    /**
     * Get <delete_condition_group> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteConditionGroup(){
      return $this->_get(3);
    }
    
    /**
     * Set <delete_condition_group> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function setDeleteConditionGroup(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <delete_condition_group_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteConditionGroupNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <delete_condition_group_null> value
     *
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function clearDeleteConditionGroupNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <delete_condition_group_null> value
     *
     * @return boolean
     */
    public function getDeleteConditionGroupNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <delete_condition_group_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionGroups_Ad\Parameters
     */
    public function setDeleteConditionGroupNull( $value){
      return $this->_set(1003, $value);
    }
  }
}
