<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetTableCategories_Ad.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\do_GetTableCategories_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $table_category_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $description = null;
    
    /**  @var \dstore\values\stringValue */
    public $table_category = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetTableCategories_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_category_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "table_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_category = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "table_category";
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
     * @return \dstore\engine\do_GetTableCategories_Ad\Response\Row
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
     * @return \dstore\engine\do_GetTableCategories_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <table_category_id> has a value
     *
     * @return boolean
     */
    public function hasTableCategoryId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <table_category_id> value
     *
     * @return \dstore\engine\do_GetTableCategories_Ad\Response\Row
     */
    public function clearTableCategoryId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <table_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTableCategoryId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <table_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetTableCategories_Ad\Response\Row
     */
    public function setTableCategoryId(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <description> value
     *
     * @return \dstore\engine\do_GetTableCategories_Ad\Response\Row
     */
    public function clearDescription(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDescription(){
      return $this->_get(10002);
    }
    
    /**
     * Set <description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetTableCategories_Ad\Response\Row
     */
    public function setDescription(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <table_category> has a value
     *
     * @return boolean
     */
    public function hasTableCategory(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <table_category> value
     *
     * @return \dstore\engine\do_GetTableCategories_Ad\Response\Row
     */
    public function clearTableCategory(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <table_category> value
     *
     * @return \dstore\values\stringValue
     */
    public function getTableCategory(){
      return $this->_get(10003);
    }
    
    /**
     * Set <table_category> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetTableCategories_Ad\Response\Row
     */
    public function setTableCategory(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
  }
}

