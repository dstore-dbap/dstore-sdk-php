<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetPagesInCategories_Ad.proto
//   Date: 2016-05-19 08:07:56

namespace dstore\engine\st_GetPagesInCategories_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $filename = null;
    
    /**  @var \dstore\values\integerValue */
    public $page_category_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $page_no = null;
    
    /**  @var \dstore\values\stringValue */
    public $page = null;
    
    /**  @var \dstore\values\stringValue */
    public $page_category_description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetPagesInCategories_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE filename = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "filename";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE page_category_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "page_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE page_no = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "page_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE page = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "page";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE page_category_description = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "page_category_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
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
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
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
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <filename> has a value
     *
     * @return boolean
     */
    public function hasFilename(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <filename> value
     *
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function clearFilename(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <filename> value
     *
     * @return \dstore\values\stringValue
     */
    public function getFilename(){
      return $this->_get(10001);
    }
    
    /**
     * Set <filename> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function setFilename(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <page_category_id> has a value
     *
     * @return boolean
     */
    public function hasPageCategoryId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <page_category_id> value
     *
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function clearPageCategoryId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <page_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPageCategoryId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <page_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function setPageCategoryId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <page_no> has a value
     *
     * @return boolean
     */
    public function hasPageNo(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <page_no> value
     *
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function clearPageNo(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <page_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPageNo(){
      return $this->_get(10003);
    }
    
    /**
     * Set <page_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function setPageNo(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <page> has a value
     *
     * @return boolean
     */
    public function hasPage(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <page> value
     *
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function clearPage(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <page> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPage(){
      return $this->_get(10004);
    }
    
    /**
     * Set <page> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function setPage(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <page_category_description> has a value
     *
     * @return boolean
     */
    public function hasPageCategoryDescription(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <page_category_description> value
     *
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function clearPageCategoryDescription(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <page_category_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPageCategoryDescription(){
      return $this->_get(10005);
    }
    
    /**
     * Set <page_category_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\st_GetPagesInCategories_Ad\Response\Row
     */
    public function setPageCategoryDescription(\dstore\values\stringValue $value){
      return $this->_set(10005, $value);
    }
  }
}

