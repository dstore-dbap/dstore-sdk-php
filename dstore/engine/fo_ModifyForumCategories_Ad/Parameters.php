<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_ModifyForumCategories_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\fo_ModifyForumCategories_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $forum_category_id = null;
    
    /**  @var boolean */
    public $forum_category_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $category_description = null;
    
    /**  @var boolean */
    public $category_description_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $predecessor_category_id = null;
    
    /**  @var boolean */
    public $predecessor_category_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $move_sort_no = null;
    
    /**  @var boolean */
    public $move_sort_no_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_category = null;
    
    /**  @var boolean */
    public $delete_category_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_ModifyForumCategories_Ad.Parameters');

      // OPTIONAL MESSAGE forum_category_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "forum_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL forum_category_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "forum_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE category_description = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "category_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL category_description_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "category_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predecessor_category_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "predecessor_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL predecessor_category_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "predecessor_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE move_sort_no = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "move_sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL move_sort_no_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "move_sort_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_category = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "delete_category";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_category_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "delete_category_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <forum_category_id> has a value
     *
     * @return boolean
     */
    public function hasForumCategoryId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <forum_category_id> value
     *
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function clearForumCategoryId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <forum_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getForumCategoryId(){
      return $this->_get(1);
    }
    
    /**
     * Set <forum_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function setForumCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <forum_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasForumCategoryIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <forum_category_id_null> value
     *
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function clearForumCategoryIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <forum_category_id_null> value
     *
     * @return boolean
     */
    public function getForumCategoryIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <forum_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function setForumCategoryIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <category_description> has a value
     *
     * @return boolean
     */
    public function hasCategoryDescription(){
      return $this->_has(2);
    }
    
    /**
     * Clear <category_description> value
     *
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function clearCategoryDescription(){
      return $this->_clear(2);
    }
    
    /**
     * Get <category_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCategoryDescription(){
      return $this->_get(2);
    }
    
    /**
     * Set <category_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function setCategoryDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <category_description_null> has a value
     *
     * @return boolean
     */
    public function hasCategoryDescriptionNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <category_description_null> value
     *
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function clearCategoryDescriptionNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <category_description_null> value
     *
     * @return boolean
     */
    public function getCategoryDescriptionNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <category_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function setCategoryDescriptionNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <predecessor_category_id> has a value
     *
     * @return boolean
     */
    public function hasPredecessorCategoryId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <predecessor_category_id> value
     *
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function clearPredecessorCategoryId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <predecessor_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPredecessorCategoryId(){
      return $this->_get(3);
    }
    
    /**
     * Set <predecessor_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function setPredecessorCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <predecessor_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasPredecessorCategoryIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <predecessor_category_id_null> value
     *
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function clearPredecessorCategoryIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <predecessor_category_id_null> value
     *
     * @return boolean
     */
    public function getPredecessorCategoryIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <predecessor_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function setPredecessorCategoryIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <move_sort_no> has a value
     *
     * @return boolean
     */
    public function hasMoveSortNo(){
      return $this->_has(4);
    }
    
    /**
     * Clear <move_sort_no> value
     *
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function clearMoveSortNo(){
      return $this->_clear(4);
    }
    
    /**
     * Get <move_sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMoveSortNo(){
      return $this->_get(4);
    }
    
    /**
     * Set <move_sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function setMoveSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <move_sort_no_null> has a value
     *
     * @return boolean
     */
    public function hasMoveSortNoNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <move_sort_no_null> value
     *
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function clearMoveSortNoNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <move_sort_no_null> value
     *
     * @return boolean
     */
    public function getMoveSortNoNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <move_sort_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function setMoveSortNoNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <delete_category> has a value
     *
     * @return boolean
     */
    public function hasDeleteCategory(){
      return $this->_has(5);
    }
    
    /**
     * Clear <delete_category> value
     *
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function clearDeleteCategory(){
      return $this->_clear(5);
    }
    
    /**
     * Get <delete_category> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteCategory(){
      return $this->_get(5);
    }
    
    /**
     * Set <delete_category> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function setDeleteCategory(\dstore\engine\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <delete_category_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteCategoryNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <delete_category_null> value
     *
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function clearDeleteCategoryNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <delete_category_null> value
     *
     * @return boolean
     */
    public function getDeleteCategoryNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <delete_category_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyForumCategories_Ad\Parameters
     */
    public function setDeleteCategoryNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

