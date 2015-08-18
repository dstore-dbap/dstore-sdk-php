<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_ModifyConditionParts_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_ModifyConditionParts_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $condition_part_description = null;
    
    /**  @var boolean */
    public $condition_part_description_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $level_ids = null;
    
    /**  @var boolean */
    public $level_ids_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $domain_tree_node_ids = null;
    
    /**  @var boolean */
    public $domain_tree_node_ids_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var boolean */
    public $node_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $operator1 = null;
    
    /**  @var boolean */
    public $operator1_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $condition1 = null;
    
    /**  @var boolean */
    public $condition1_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $operator2 = null;
    
    /**  @var boolean */
    public $operator2_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $condition2 = null;
    
    /**  @var boolean */
    public $condition2_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $inherit_depth = null;
    
    /**  @var boolean */
    public $inherit_depth_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $recursive_evaluation = null;
    
    /**  @var boolean */
    public $recursive_evaluation_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_condition_part = null;
    
    /**  @var boolean */
    public $delete_condition_part_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_ModifyConditionParts_Ad.Parameters');

      // OPTIONAL MESSAGE condition_part_description = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "condition_part_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_part_description_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "condition_part_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_ids = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "level_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL level_ids_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "level_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE domain_tree_node_ids = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "domain_tree_node_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL domain_tree_node_ids_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "domain_tree_node_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_characteristic_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "node_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE operator1 = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "operator1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL operator1_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "operator1_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition1 = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "condition1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition1_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "condition1_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE operator2 = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "operator2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL operator2_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "operator2_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition2 = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "condition2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition2_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "condition2_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE inherit_depth = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "inherit_depth";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL inherit_depth_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "inherit_depth_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE recursive_evaluation = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "recursive_evaluation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL recursive_evaluation_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "recursive_evaluation_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_condition_part = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "delete_condition_part";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_condition_part_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "delete_condition_part_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1012;
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
     * Check if <condition_part_description> has a value
     *
     * @return boolean
     */
    public function hasConditionPartDescription(){
      return $this->_has(1);
    }
    
    /**
     * Clear <condition_part_description> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearConditionPartDescription(){
      return $this->_clear(1);
    }
    
    /**
     * Get <condition_part_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getConditionPartDescription(){
      return $this->_get(1);
    }
    
    /**
     * Set <condition_part_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setConditionPartDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <condition_part_description_null> has a value
     *
     * @return boolean
     */
    public function hasConditionPartDescriptionNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <condition_part_description_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearConditionPartDescriptionNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <condition_part_description_null> value
     *
     * @return boolean
     */
    public function getConditionPartDescriptionNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <condition_part_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setConditionPartDescriptionNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <level_ids> has a value
     *
     * @return boolean
     */
    public function hasLevelIds(){
      return $this->_has(2);
    }
    
    /**
     * Clear <level_ids> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearLevelIds(){
      return $this->_clear(2);
    }
    
    /**
     * Get <level_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLevelIds(){
      return $this->_get(2);
    }
    
    /**
     * Set <level_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setLevelIds(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <level_ids_null> has a value
     *
     * @return boolean
     */
    public function hasLevelIdsNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <level_ids_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearLevelIdsNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <level_ids_null> value
     *
     * @return boolean
     */
    public function getLevelIdsNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <level_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setLevelIdsNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <domain_tree_node_ids> has a value
     *
     * @return boolean
     */
    public function hasDomainTreeNodeIds(){
      return $this->_has(3);
    }
    
    /**
     * Clear <domain_tree_node_ids> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearDomainTreeNodeIds(){
      return $this->_clear(3);
    }
    
    /**
     * Get <domain_tree_node_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDomainTreeNodeIds(){
      return $this->_get(3);
    }
    
    /**
     * Set <domain_tree_node_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setDomainTreeNodeIds(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <domain_tree_node_ids_null> has a value
     *
     * @return boolean
     */
    public function hasDomainTreeNodeIdsNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <domain_tree_node_ids_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearDomainTreeNodeIdsNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <domain_tree_node_ids_null> value
     *
     * @return boolean
     */
    public function getDomainTreeNodeIdsNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <domain_tree_node_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setDomainTreeNodeIdsNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(4);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setNodeCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <node_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <node_characteristic_id_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearNodeCharacteristicIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <node_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getNodeCharacteristicIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <node_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setNodeCharacteristicIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <operator1> has a value
     *
     * @return boolean
     */
    public function hasOperator1(){
      return $this->_has(5);
    }
    
    /**
     * Clear <operator1> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearOperator1(){
      return $this->_clear(5);
    }
    
    /**
     * Get <operator1> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOperator1(){
      return $this->_get(5);
    }
    
    /**
     * Set <operator1> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setOperator1(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <operator1_null> has a value
     *
     * @return boolean
     */
    public function hasOperator1Null(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <operator1_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearOperator1Null(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <operator1_null> value
     *
     * @return boolean
     */
    public function getOperator1Null(){
      return $this->_get(1005);
    }
    
    /**
     * Set <operator1_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setOperator1Null( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <condition1> has a value
     *
     * @return boolean
     */
    public function hasCondition1(){
      return $this->_has(6);
    }
    
    /**
     * Clear <condition1> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearCondition1(){
      return $this->_clear(6);
    }
    
    /**
     * Get <condition1> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCondition1(){
      return $this->_get(6);
    }
    
    /**
     * Set <condition1> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setCondition1(\dstore\engine\values\stringValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <condition1_null> has a value
     *
     * @return boolean
     */
    public function hasCondition1Null(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <condition1_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearCondition1Null(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <condition1_null> value
     *
     * @return boolean
     */
    public function getCondition1Null(){
      return $this->_get(1006);
    }
    
    /**
     * Set <condition1_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setCondition1Null( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <operator2> has a value
     *
     * @return boolean
     */
    public function hasOperator2(){
      return $this->_has(7);
    }
    
    /**
     * Clear <operator2> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearOperator2(){
      return $this->_clear(7);
    }
    
    /**
     * Get <operator2> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOperator2(){
      return $this->_get(7);
    }
    
    /**
     * Set <operator2> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setOperator2(\dstore\engine\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <operator2_null> has a value
     *
     * @return boolean
     */
    public function hasOperator2Null(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <operator2_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearOperator2Null(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <operator2_null> value
     *
     * @return boolean
     */
    public function getOperator2Null(){
      return $this->_get(1007);
    }
    
    /**
     * Set <operator2_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setOperator2Null( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <condition2> has a value
     *
     * @return boolean
     */
    public function hasCondition2(){
      return $this->_has(8);
    }
    
    /**
     * Clear <condition2> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearCondition2(){
      return $this->_clear(8);
    }
    
    /**
     * Get <condition2> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCondition2(){
      return $this->_get(8);
    }
    
    /**
     * Set <condition2> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setCondition2(\dstore\engine\values\stringValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <condition2_null> has a value
     *
     * @return boolean
     */
    public function hasCondition2Null(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <condition2_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearCondition2Null(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <condition2_null> value
     *
     * @return boolean
     */
    public function getCondition2Null(){
      return $this->_get(1008);
    }
    
    /**
     * Set <condition2_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setCondition2Null( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <inherit_depth> has a value
     *
     * @return boolean
     */
    public function hasInheritDepth(){
      return $this->_has(9);
    }
    
    /**
     * Clear <inherit_depth> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearInheritDepth(){
      return $this->_clear(9);
    }
    
    /**
     * Get <inherit_depth> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInheritDepth(){
      return $this->_get(9);
    }
    
    /**
     * Set <inherit_depth> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setInheritDepth(\dstore\engine\values\integerValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <inherit_depth_null> has a value
     *
     * @return boolean
     */
    public function hasInheritDepthNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <inherit_depth_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearInheritDepthNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <inherit_depth_null> value
     *
     * @return boolean
     */
    public function getInheritDepthNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <inherit_depth_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setInheritDepthNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <recursive_evaluation> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluation(){
      return $this->_has(10);
    }
    
    /**
     * Clear <recursive_evaluation> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearRecursiveEvaluation(){
      return $this->_clear(10);
    }
    
    /**
     * Get <recursive_evaluation> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRecursiveEvaluation(){
      return $this->_get(10);
    }
    
    /**
     * Set <recursive_evaluation> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setRecursiveEvaluation(\dstore\engine\values\integerValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <recursive_evaluation_null> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluationNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <recursive_evaluation_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearRecursiveEvaluationNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <recursive_evaluation_null> value
     *
     * @return boolean
     */
    public function getRecursiveEvaluationNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <recursive_evaluation_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setRecursiveEvaluationNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <delete_condition_part> has a value
     *
     * @return boolean
     */
    public function hasDeleteConditionPart(){
      return $this->_has(11);
    }
    
    /**
     * Clear <delete_condition_part> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearDeleteConditionPart(){
      return $this->_clear(11);
    }
    
    /**
     * Get <delete_condition_part> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteConditionPart(){
      return $this->_get(11);
    }
    
    /**
     * Set <delete_condition_part> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setDeleteConditionPart(\dstore\engine\values\booleanValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <delete_condition_part_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteConditionPartNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <delete_condition_part_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearDeleteConditionPartNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <delete_condition_part_null> value
     *
     * @return boolean
     */
    public function getDeleteConditionPartNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <delete_condition_part_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setDeleteConditionPartNull( $value){
      return $this->_set(1011, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(12);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearCountry(){
      return $this->_clear(12);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCountry(){
      return $this->_get(12);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setCountry(\dstore\engine\values\stringValue $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1012);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1012);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1012);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyConditionParts_Ad\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1012, $value);
    }
  }
}
