<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetOrderStatesInCats_Ad.proto
//   Date: 2016-05-19 08:07:49

namespace dstore\engine\om_GetOrderStatesInCats_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $order_state_category_description = null;
    
    /**  @var \dstore\values\integerValue */
    public $active = null;
    
    /**  @var \dstore\values\integerValue */
    public $order_state_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $public_description = null;
    
    /**  @var \dstore\values\integerValue */
    public $order_state_category_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $order_state = null;
    
    /**  @var \dstore\values\stringValue */
    public $order_state_category = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetOrderStatesInCats_Ad.Response.Row');

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
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE active = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "order_state_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE public_description = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "public_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state_category_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "order_state_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "order_state";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state_category = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "order_state_category";
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
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
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
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
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
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function clearOrderStateCategoryDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <order_state_category_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOrderStateCategoryDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <order_state_category_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function setOrderStateCategoryDescription(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <active> value
     *
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function clearActive(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <active> value
     *
     * @return \dstore\values\integerValue
     */
    public function getActive(){
      return $this->_get(10002);
    }
    
    /**
     * Set <active> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function setActive(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <order_state_id> has a value
     *
     * @return boolean
     */
    public function hasOrderStateId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <order_state_id> value
     *
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function clearOrderStateId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <order_state_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrderStateId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <order_state_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function setOrderStateId(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <public_description> has a value
     *
     * @return boolean
     */
    public function hasPublicDescription(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <public_description> value
     *
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function clearPublicDescription(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <public_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPublicDescription(){
      return $this->_get(10004);
    }
    
    /**
     * Set <public_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function setPublicDescription(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <order_state_category_id> has a value
     *
     * @return boolean
     */
    public function hasOrderStateCategoryId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <order_state_category_id> value
     *
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function clearOrderStateCategoryId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <order_state_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrderStateCategoryId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <order_state_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function setOrderStateCategoryId(\dstore\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <order_state> has a value
     *
     * @return boolean
     */
    public function hasOrderState(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <order_state> value
     *
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function clearOrderState(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <order_state> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOrderState(){
      return $this->_get(10006);
    }
    
    /**
     * Set <order_state> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function setOrderState(\dstore\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <order_state_category> has a value
     *
     * @return boolean
     */
    public function hasOrderStateCategory(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <order_state_category> value
     *
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function clearOrderStateCategory(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <order_state_category> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOrderStateCategory(){
      return $this->_get(10007);
    }
    
    /**
     * Set <order_state_category> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderStatesInCats_Ad\Response\Row
     */
    public function setOrderStateCategory(\dstore\values\stringValue $value){
      return $this->_set(10007, $value);
    }
  }
}

