<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetOrderStateCategories_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetOrderStateCategories_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $order_state_category_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $order_state_category_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $order_state_category = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetOrderStateCategories_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state_category_description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "order_state_category_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state_category_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "order_state_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state_category = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "order_state_category";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
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
     * @return \dstore\engine\om_GetOrderStateCategories_Ad\Response\Row
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
     * @return \dstore\engine\om_GetOrderStateCategories_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <order_state_category_description> has a value
     *
     * @return boolean
     */
    public function hasOrderStateCategoryDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <order_state_category_description> value
     *
     * @return \dstore\engine\om_GetOrderStateCategories_Ad\Response\Row
     */
    public function clearOrderStateCategoryDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <order_state_category_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOrderStateCategoryDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <order_state_category_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetOrderStateCategories_Ad\Response\Row
     */
    public function setOrderStateCategoryDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <order_state_category_id> has a value
     *
     * @return boolean
     */
    public function hasOrderStateCategoryId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <order_state_category_id> value
     *
     * @return \dstore\engine\om_GetOrderStateCategories_Ad\Response\Row
     */
    public function clearOrderStateCategoryId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <order_state_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOrderStateCategoryId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <order_state_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOrderStateCategories_Ad\Response\Row
     */
    public function setOrderStateCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <order_state_category> has a value
     *
     * @return boolean
     */
    public function hasOrderStateCategory(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <order_state_category> value
     *
     * @return \dstore\engine\om_GetOrderStateCategories_Ad\Response\Row
     */
    public function clearOrderStateCategory(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <order_state_category> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOrderStateCategory(){
      return $this->_get(10003);
    }
    
    /**
     * Set <order_state_category> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetOrderStateCategories_Ad\Response\Row
     */
    public function setOrderStateCategory(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
  }
}

