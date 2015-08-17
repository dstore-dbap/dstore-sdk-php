<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_GetForumCategories_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\fo_GetForumCategories_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $forum_category_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $category_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_no = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $contains_categories_or_forums = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_GetForumCategories_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE forum_category_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "forum_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE category_description = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "category_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE contains_categories_or_forums = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "contains_categories_or_forums";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
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
     * @return \dstore\engine\fo_GetForumCategories_Ad\Response\Row
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
     * @return \dstore\engine\fo_GetForumCategories_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <forum_category_id> has a value
     *
     * @return boolean
     */
    public function hasForumCategoryId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <forum_category_id> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Ad\Response\Row
     */
    public function clearForumCategoryId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <forum_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getForumCategoryId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <forum_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForumCategories_Ad\Response\Row
     */
    public function setForumCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <category_description> has a value
     *
     * @return boolean
     */
    public function hasCategoryDescription(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <category_description> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Ad\Response\Row
     */
    public function clearCategoryDescription(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <category_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCategoryDescription(){
      return $this->_get(10002);
    }
    
    /**
     * Set <category_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetForumCategories_Ad\Response\Row
     */
    public function setCategoryDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Ad\Response\Row
     */
    public function clearSortNo(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(10003);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForumCategories_Ad\Response\Row
     */
    public function setSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <contains_categories_or_forums> has a value
     *
     * @return boolean
     */
    public function hasContainsCategoriesOrForums(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <contains_categories_or_forums> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Ad\Response\Row
     */
    public function clearContainsCategoriesOrForums(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <contains_categories_or_forums> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getContainsCategoriesOrForums(){
      return $this->_get(10004);
    }
    
    /**
     * Set <contains_categories_or_forums> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForumCategories_Ad\Response\Row
     */
    public function setContainsCategoriesOrForums(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
  }
}

