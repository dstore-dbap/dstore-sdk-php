<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetItemConditionGroups_Ad.proto
//   Date: 2016-05-19 08:07:42

namespace dstore\engine\im_GetItemConditionGroups_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $condition_group_id = null;
    
    /**  @var boolean */
    public $condition_group_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $condition_group_description_like = null;
    
    /**  @var boolean */
    public $condition_group_description_like_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $get_unused_condition_groups = null;
    
    /**  @var boolean */
    public $get_unused_condition_groups_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $order_by = null;
    
    /**  @var boolean */
    public $order_by_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $row_count = null;
    
    /**  @var boolean */
    public $row_count_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $filter_by_cond_part_ids_in_one_id = null;
    
    /**  @var boolean */
    public $filter_by_cond_part_ids_in_one_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetItemConditionGroups_Ad.Parameters');

      // OPTIONAL MESSAGE condition_group_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "condition_group_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_group_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "condition_group_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition_group_description_like = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "condition_group_description_like";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_group_description_like_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "condition_group_description_like_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_unused_condition_groups = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "get_unused_condition_groups";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_unused_condition_groups_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "get_unused_condition_groups_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_by = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "order_by";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_by_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "order_by_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE row_count = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "row_count";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL row_count_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "row_count_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE filter_by_cond_part_ids_in_one_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "filter_by_cond_part_ids_in_one_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL filter_by_cond_part_ids_in_one_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "filter_by_cond_part_ids_in_one_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <condition_group_id> has a value
     *
     * @return boolean
     */
    public function hasConditionGroupId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <condition_group_id> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearConditionGroupId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <condition_group_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getConditionGroupId(){
      return $this->_get(1);
    }
    
    /**
     * Set <condition_group_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setConditionGroupId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <condition_group_id_null> has a value
     *
     * @return boolean
     */
    public function hasConditionGroupIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <condition_group_id_null> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearConditionGroupIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <condition_group_id_null> value
     *
     * @return boolean
     */
    public function getConditionGroupIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <condition_group_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setConditionGroupIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <condition_group_description_like> has a value
     *
     * @return boolean
     */
    public function hasConditionGroupDescriptionLike(){
      return $this->_has(2);
    }
    
    /**
     * Clear <condition_group_description_like> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearConditionGroupDescriptionLike(){
      return $this->_clear(2);
    }
    
    /**
     * Get <condition_group_description_like> value
     *
     * @return \dstore\values\stringValue
     */
    public function getConditionGroupDescriptionLike(){
      return $this->_get(2);
    }
    
    /**
     * Set <condition_group_description_like> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setConditionGroupDescriptionLike(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <condition_group_description_like_null> has a value
     *
     * @return boolean
     */
    public function hasConditionGroupDescriptionLikeNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <condition_group_description_like_null> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearConditionGroupDescriptionLikeNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <condition_group_description_like_null> value
     *
     * @return boolean
     */
    public function getConditionGroupDescriptionLikeNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <condition_group_description_like_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setConditionGroupDescriptionLikeNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <get_unused_condition_groups> has a value
     *
     * @return boolean
     */
    public function hasGetUnusedConditionGroups(){
      return $this->_has(3);
    }
    
    /**
     * Clear <get_unused_condition_groups> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearGetUnusedConditionGroups(){
      return $this->_clear(3);
    }
    
    /**
     * Get <get_unused_condition_groups> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getGetUnusedConditionGroups(){
      return $this->_get(3);
    }
    
    /**
     * Set <get_unused_condition_groups> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setGetUnusedConditionGroups(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <get_unused_condition_groups_null> has a value
     *
     * @return boolean
     */
    public function hasGetUnusedConditionGroupsNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <get_unused_condition_groups_null> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearGetUnusedConditionGroupsNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <get_unused_condition_groups_null> value
     *
     * @return boolean
     */
    public function getGetUnusedConditionGroupsNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <get_unused_condition_groups_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setGetUnusedConditionGroupsNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <order_by> has a value
     *
     * @return boolean
     */
    public function hasOrderBy(){
      return $this->_has(4);
    }
    
    /**
     * Clear <order_by> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearOrderBy(){
      return $this->_clear(4);
    }
    
    /**
     * Get <order_by> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrderBy(){
      return $this->_get(4);
    }
    
    /**
     * Set <order_by> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setOrderBy(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <order_by_null> has a value
     *
     * @return boolean
     */
    public function hasOrderByNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <order_by_null> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearOrderByNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <order_by_null> value
     *
     * @return boolean
     */
    public function getOrderByNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <order_by_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setOrderByNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <row_count> has a value
     *
     * @return boolean
     */
    public function hasRowCount(){
      return $this->_has(5);
    }
    
    /**
     * Clear <row_count> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearRowCount(){
      return $this->_clear(5);
    }
    
    /**
     * Get <row_count> value
     *
     * @return \dstore\values\integerValue
     */
    public function getRowCount(){
      return $this->_get(5);
    }
    
    /**
     * Set <row_count> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setRowCount(\dstore\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <row_count_null> has a value
     *
     * @return boolean
     */
    public function hasRowCountNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <row_count_null> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearRowCountNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <row_count_null> value
     *
     * @return boolean
     */
    public function getRowCountNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <row_count_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setRowCountNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <filter_by_cond_part_ids_in_one_id> has a value
     *
     * @return boolean
     */
    public function hasFilterByCondPartIdsInOneId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <filter_by_cond_part_ids_in_one_id> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearFilterByCondPartIdsInOneId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <filter_by_cond_part_ids_in_one_id> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getFilterByCondPartIdsInOneId(){
      return $this->_get(6);
    }
    
    /**
     * Set <filter_by_cond_part_ids_in_one_id> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setFilterByCondPartIdsInOneId(\dstore\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <filter_by_cond_part_ids_in_one_id_null> has a value
     *
     * @return boolean
     */
    public function hasFilterByCondPartIdsInOneIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <filter_by_cond_part_ids_in_one_id_null> value
     *
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function clearFilterByCondPartIdsInOneIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <filter_by_cond_part_ids_in_one_id_null> value
     *
     * @return boolean
     */
    public function getFilterByCondPartIdsInOneIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <filter_by_cond_part_ids_in_one_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetItemConditionGroups_Ad\Parameters
     */
    public function setFilterByCondPartIdsInOneIdNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

