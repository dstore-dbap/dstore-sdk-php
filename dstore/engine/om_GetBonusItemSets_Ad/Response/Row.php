<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetBonusItemSets_Ad.proto
//   Date: 2016-05-19 08:07:48

namespace dstore\engine\om_GetBonusItemSets_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $item_group_sort_no = null;
    
    /**  @var \dstore\values\stringValue */
    public $operator1 = null;
    
    /**  @var \dstore\values\stringValue */
    public $condition1 = null;
    
    /**  @var \dstore\values\stringValue */
    public $condition2 = null;
    
    /**  @var \dstore\values\stringValue */
    public $operator2 = null;
    
    /**  @var \dstore\values\stringValue */
    public $item_condition_group_description = null;
    
    /**  @var \dstore\values\booleanValue */
    public $combine_parts_with_a_n_d_operator = null;
    
    /**  @var \dstore\values\integerValue */
    public $recursive_evaluation = null;
    
    /**  @var \dstore\values\integerValue */
    public $item_part_sort_no = null;
    
    /**  @var \dstore\values\integerValue */
    public $item_set_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $domain_tree_node_ids = null;
    
    /**  @var \dstore\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $item_condition_part_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $item_condition_id = null;
    
    /**  @var \dstore\values\booleanValue */
    public $combine_groups_with_a_n_d_operator = null;
    
    /**  @var \dstore\values\stringValue */
    public $item_condition_part_description = null;
    
    /**  @var \dstore\values\stringValue */
    public $level_ids = null;
    
    /**  @var \dstore\values\integerValue */
    public $item_condition_group_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $max_quantity = null;
    
    /**  @var \dstore\values\stringValue */
    public $item_condition_description = null;
    
    /**  @var \dstore\values\integerValue */
    public $inherit_depth = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetBonusItemSets_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_group_sort_no = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "item_group_sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE operator1 = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "operator1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition1 = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "condition1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition2 = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "condition2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE operator2 = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "operator2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_group_description = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "item_condition_group_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE combine_parts_with_a_n_d_operator = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "combine_parts_with_a_n_d_operator";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE recursive_evaluation = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "recursive_evaluation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_part_sort_no = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "item_part_sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_set_id = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "item_set_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE domain_tree_node_ids = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "domain_tree_node_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_part_id = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "item_condition_part_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_id = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "item_condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE combine_groups_with_a_n_d_operator = 10015
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10015;
      $f->name      = "combine_groups_with_a_n_d_operator";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_part_description = 10016
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10016;
      $f->name      = "item_condition_part_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_ids = 10017
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10017;
      $f->name      = "level_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_group_id = 10018
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10018;
      $f->name      = "item_condition_group_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_quantity = 10019
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10019;
      $f->name      = "max_quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_description = 10020
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10020;
      $f->name      = "item_condition_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE inherit_depth = 10021
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10021;
      $f->name      = "inherit_depth";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <row_id> has a value
     *
     * @return boolean
     */
    public function hasRowId(){
      return $this->_has(10000);
    }
    
    /**
     * Clear <row_id> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearRowId(){
      return $this->_clear(10000);
    }
    
    /**
     * Get <row_id> value
     *
     * @return int
     */
    public function getRowId(){
      return $this->_get(10000);
    }
    
    /**
     * Set <row_id> value
     *
     * @param int $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <item_group_sort_no> has a value
     *
     * @return boolean
     */
    public function hasItemGroupSortNo(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <item_group_sort_no> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearItemGroupSortNo(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <item_group_sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getItemGroupSortNo(){
      return $this->_get(10001);
    }
    
    /**
     * Set <item_group_sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setItemGroupSortNo(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <operator1> has a value
     *
     * @return boolean
     */
    public function hasOperator1(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <operator1> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearOperator1(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <operator1> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOperator1(){
      return $this->_get(10002);
    }
    
    /**
     * Set <operator1> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setOperator1(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <condition1> has a value
     *
     * @return boolean
     */
    public function hasCondition1(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <condition1> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearCondition1(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <condition1> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCondition1(){
      return $this->_get(10003);
    }
    
    /**
     * Set <condition1> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setCondition1(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <condition2> has a value
     *
     * @return boolean
     */
    public function hasCondition2(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <condition2> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearCondition2(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <condition2> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCondition2(){
      return $this->_get(10004);
    }
    
    /**
     * Set <condition2> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setCondition2(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <operator2> has a value
     *
     * @return boolean
     */
    public function hasOperator2(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <operator2> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearOperator2(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <operator2> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOperator2(){
      return $this->_get(10005);
    }
    
    /**
     * Set <operator2> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setOperator2(\dstore\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <item_condition_group_description> has a value
     *
     * @return boolean
     */
    public function hasItemConditionGroupDescription(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <item_condition_group_description> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearItemConditionGroupDescription(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <item_condition_group_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getItemConditionGroupDescription(){
      return $this->_get(10006);
    }
    
    /**
     * Set <item_condition_group_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setItemConditionGroupDescription(\dstore\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <combine_parts_with_a_n_d_operator> has a value
     *
     * @return boolean
     */
    public function hasCombinePartsWithANDOperator(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <combine_parts_with_a_n_d_operator> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearCombinePartsWithANDOperator(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <combine_parts_with_a_n_d_operator> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getCombinePartsWithANDOperator(){
      return $this->_get(10007);
    }
    
    /**
     * Set <combine_parts_with_a_n_d_operator> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setCombinePartsWithANDOperator(\dstore\values\booleanValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <recursive_evaluation> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluation(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <recursive_evaluation> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearRecursiveEvaluation(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <recursive_evaluation> value
     *
     * @return \dstore\values\integerValue
     */
    public function getRecursiveEvaluation(){
      return $this->_get(10008);
    }
    
    /**
     * Set <recursive_evaluation> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setRecursiveEvaluation(\dstore\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <item_part_sort_no> has a value
     *
     * @return boolean
     */
    public function hasItemPartSortNo(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <item_part_sort_no> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearItemPartSortNo(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <item_part_sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getItemPartSortNo(){
      return $this->_get(10009);
    }
    
    /**
     * Set <item_part_sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setItemPartSortNo(\dstore\values\integerValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <item_set_id> has a value
     *
     * @return boolean
     */
    public function hasItemSetId(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <item_set_id> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearItemSetId(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <item_set_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getItemSetId(){
      return $this->_get(10010);
    }
    
    /**
     * Set <item_set_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setItemSetId(\dstore\values\integerValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <domain_tree_node_ids> has a value
     *
     * @return boolean
     */
    public function hasDomainTreeNodeIds(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <domain_tree_node_ids> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearDomainTreeNodeIds(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <domain_tree_node_ids> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDomainTreeNodeIds(){
      return $this->_get(10011);
    }
    
    /**
     * Set <domain_tree_node_ids> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setDomainTreeNodeIds(\dstore\values\stringValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(10012);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setNodeCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <item_condition_part_id> has a value
     *
     * @return boolean
     */
    public function hasItemConditionPartId(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <item_condition_part_id> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearItemConditionPartId(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <item_condition_part_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getItemConditionPartId(){
      return $this->_get(10013);
    }
    
    /**
     * Set <item_condition_part_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setItemConditionPartId(\dstore\values\integerValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <item_condition_id> has a value
     *
     * @return boolean
     */
    public function hasItemConditionId(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <item_condition_id> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearItemConditionId(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <item_condition_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getItemConditionId(){
      return $this->_get(10014);
    }
    
    /**
     * Set <item_condition_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setItemConditionId(\dstore\values\integerValue $value){
      return $this->_set(10014, $value);
    }
    
    /**
     * Check if <combine_groups_with_a_n_d_operator> has a value
     *
     * @return boolean
     */
    public function hasCombineGroupsWithANDOperator(){
      return $this->_has(10015);
    }
    
    /**
     * Clear <combine_groups_with_a_n_d_operator> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearCombineGroupsWithANDOperator(){
      return $this->_clear(10015);
    }
    
    /**
     * Get <combine_groups_with_a_n_d_operator> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getCombineGroupsWithANDOperator(){
      return $this->_get(10015);
    }
    
    /**
     * Set <combine_groups_with_a_n_d_operator> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setCombineGroupsWithANDOperator(\dstore\values\booleanValue $value){
      return $this->_set(10015, $value);
    }
    
    /**
     * Check if <item_condition_part_description> has a value
     *
     * @return boolean
     */
    public function hasItemConditionPartDescription(){
      return $this->_has(10016);
    }
    
    /**
     * Clear <item_condition_part_description> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearItemConditionPartDescription(){
      return $this->_clear(10016);
    }
    
    /**
     * Get <item_condition_part_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getItemConditionPartDescription(){
      return $this->_get(10016);
    }
    
    /**
     * Set <item_condition_part_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setItemConditionPartDescription(\dstore\values\stringValue $value){
      return $this->_set(10016, $value);
    }
    
    /**
     * Check if <level_ids> has a value
     *
     * @return boolean
     */
    public function hasLevelIds(){
      return $this->_has(10017);
    }
    
    /**
     * Clear <level_ids> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearLevelIds(){
      return $this->_clear(10017);
    }
    
    /**
     * Get <level_ids> value
     *
     * @return \dstore\values\stringValue
     */
    public function getLevelIds(){
      return $this->_get(10017);
    }
    
    /**
     * Set <level_ids> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setLevelIds(\dstore\values\stringValue $value){
      return $this->_set(10017, $value);
    }
    
    /**
     * Check if <item_condition_group_id> has a value
     *
     * @return boolean
     */
    public function hasItemConditionGroupId(){
      return $this->_has(10018);
    }
    
    /**
     * Clear <item_condition_group_id> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearItemConditionGroupId(){
      return $this->_clear(10018);
    }
    
    /**
     * Get <item_condition_group_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getItemConditionGroupId(){
      return $this->_get(10018);
    }
    
    /**
     * Set <item_condition_group_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setItemConditionGroupId(\dstore\values\integerValue $value){
      return $this->_set(10018, $value);
    }
    
    /**
     * Check if <max_quantity> has a value
     *
     * @return boolean
     */
    public function hasMaxQuantity(){
      return $this->_has(10019);
    }
    
    /**
     * Clear <max_quantity> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearMaxQuantity(){
      return $this->_clear(10019);
    }
    
    /**
     * Get <max_quantity> value
     *
     * @return \dstore\values\integerValue
     */
    public function getMaxQuantity(){
      return $this->_get(10019);
    }
    
    /**
     * Set <max_quantity> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setMaxQuantity(\dstore\values\integerValue $value){
      return $this->_set(10019, $value);
    }
    
    /**
     * Check if <item_condition_description> has a value
     *
     * @return boolean
     */
    public function hasItemConditionDescription(){
      return $this->_has(10020);
    }
    
    /**
     * Clear <item_condition_description> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearItemConditionDescription(){
      return $this->_clear(10020);
    }
    
    /**
     * Get <item_condition_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getItemConditionDescription(){
      return $this->_get(10020);
    }
    
    /**
     * Set <item_condition_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setItemConditionDescription(\dstore\values\stringValue $value){
      return $this->_set(10020, $value);
    }
    
    /**
     * Check if <inherit_depth> has a value
     *
     * @return boolean
     */
    public function hasInheritDepth(){
      return $this->_has(10021);
    }
    
    /**
     * Clear <inherit_depth> value
     *
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function clearInheritDepth(){
      return $this->_clear(10021);
    }
    
    /**
     * Get <inherit_depth> value
     *
     * @return \dstore\values\integerValue
     */
    public function getInheritDepth(){
      return $this->_get(10021);
    }
    
    /**
     * Set <inherit_depth> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetBonusItemSets_Ad\Response\Row
     */
    public function setInheritDepth(\dstore\values\integerValue $value){
      return $this->_set(10021, $value);
    }
  }
}

