<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ChangeOrderState_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_ChangeOrderState_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\booleanValue */
    public $fireac_change_order_state = null;
    
    /**  @var boolean */
    public $fireac_change_order_state_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $result = null;
    
    /**  @var boolean */
    public $result_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $order_content_ids = null;
    
    /**  @var boolean */
    public $order_content_ids_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $is_order_id = null;
    
    /**  @var boolean */
    public $is_order_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $order_state_id = null;
    
    /**  @var boolean */
    public $order_state_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $accept_negative_stock = null;
    
    /**  @var boolean */
    public $accept_negative_stock_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $select_denied_orders = null;
    
    /**  @var boolean */
    public $select_denied_orders_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ChangeOrderState_Ad.Parameters');

      // OPTIONAL MESSAGE fireac_change_order_state = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "fireac_change_order_state";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL fireac_change_order_state_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "fireac_change_order_state_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE result = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "result";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL result_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "result_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_content_ids = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "order_content_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_content_ids_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "order_content_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_order_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "is_order_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL is_order_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "is_order_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "order_state_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_state_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "order_state_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE accept_negative_stock = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "accept_negative_stock";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL accept_negative_stock_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "accept_negative_stock_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE select_denied_orders = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "select_denied_orders";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL select_denied_orders_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "select_denied_orders_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <fireac_change_order_state> has a value
     *
     * @return boolean
     */
    public function hasFireacChangeOrderState(){
      return $this->_has(1);
    }
    
    /**
     * Clear <fireac_change_order_state> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearFireacChangeOrderState(){
      return $this->_clear(1);
    }
    
    /**
     * Get <fireac_change_order_state> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getFireacChangeOrderState(){
      return $this->_get(1);
    }
    
    /**
     * Set <fireac_change_order_state> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setFireacChangeOrderState(\dstore\engine\values\booleanValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <fireac_change_order_state_null> has a value
     *
     * @return boolean
     */
    public function hasFireacChangeOrderStateNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <fireac_change_order_state_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearFireacChangeOrderStateNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <fireac_change_order_state_null> value
     *
     * @return boolean
     */
    public function getFireacChangeOrderStateNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <fireac_change_order_state_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setFireacChangeOrderStateNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <result> has a value
     *
     * @return boolean
     */
    public function hasResult(){
      return $this->_has(2);
    }
    
    /**
     * Clear <result> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearResult(){
      return $this->_clear(2);
    }
    
    /**
     * Get <result> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getResult(){
      return $this->_get(2);
    }
    
    /**
     * Set <result> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setResult(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <result_null> has a value
     *
     * @return boolean
     */
    public function hasResultNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <result_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearResultNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <result_null> value
     *
     * @return boolean
     */
    public function getResultNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <result_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setResultNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <order_content_ids> has a value
     *
     * @return boolean
     */
    public function hasOrderContentIds(){
      return $this->_has(3);
    }
    
    /**
     * Clear <order_content_ids> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearOrderContentIds(){
      return $this->_clear(3);
    }
    
    /**
     * Get <order_content_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOrderContentIds(){
      return $this->_get(3);
    }
    
    /**
     * Set <order_content_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setOrderContentIds(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <order_content_ids_null> has a value
     *
     * @return boolean
     */
    public function hasOrderContentIdsNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <order_content_ids_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearOrderContentIdsNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <order_content_ids_null> value
     *
     * @return boolean
     */
    public function getOrderContentIdsNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <order_content_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setOrderContentIdsNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <is_order_id> has a value
     *
     * @return boolean
     */
    public function hasIsOrderId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <is_order_id> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearIsOrderId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <is_order_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIsOrderId(){
      return $this->_get(4);
    }
    
    /**
     * Set <is_order_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setIsOrderId(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <is_order_id_null> has a value
     *
     * @return boolean
     */
    public function hasIsOrderIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <is_order_id_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearIsOrderIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <is_order_id_null> value
     *
     * @return boolean
     */
    public function getIsOrderIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <is_order_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setIsOrderIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <order_state_id> has a value
     *
     * @return boolean
     */
    public function hasOrderStateId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <order_state_id> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearOrderStateId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <order_state_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOrderStateId(){
      return $this->_get(5);
    }
    
    /**
     * Set <order_state_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setOrderStateId(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <order_state_id_null> has a value
     *
     * @return boolean
     */
    public function hasOrderStateIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <order_state_id_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearOrderStateIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <order_state_id_null> value
     *
     * @return boolean
     */
    public function getOrderStateIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <order_state_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setOrderStateIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <accept_negative_stock> has a value
     *
     * @return boolean
     */
    public function hasAcceptNegativeStock(){
      return $this->_has(6);
    }
    
    /**
     * Clear <accept_negative_stock> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearAcceptNegativeStock(){
      return $this->_clear(6);
    }
    
    /**
     * Get <accept_negative_stock> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getAcceptNegativeStock(){
      return $this->_get(6);
    }
    
    /**
     * Set <accept_negative_stock> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setAcceptNegativeStock(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <accept_negative_stock_null> has a value
     *
     * @return boolean
     */
    public function hasAcceptNegativeStockNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <accept_negative_stock_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearAcceptNegativeStockNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <accept_negative_stock_null> value
     *
     * @return boolean
     */
    public function getAcceptNegativeStockNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <accept_negative_stock_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setAcceptNegativeStockNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <select_denied_orders> has a value
     *
     * @return boolean
     */
    public function hasSelectDeniedOrders(){
      return $this->_has(7);
    }
    
    /**
     * Clear <select_denied_orders> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearSelectDeniedOrders(){
      return $this->_clear(7);
    }
    
    /**
     * Get <select_denied_orders> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getSelectDeniedOrders(){
      return $this->_get(7);
    }
    
    /**
     * Set <select_denied_orders> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setSelectDeniedOrders(\dstore\engine\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <select_denied_orders_null> has a value
     *
     * @return boolean
     */
    public function hasSelectDeniedOrdersNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <select_denied_orders_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function clearSelectDeniedOrdersNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <select_denied_orders_null> value
     *
     * @return boolean
     */
    public function getSelectDeniedOrdersNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <select_denied_orders_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Ad\Parameters
     */
    public function setSelectDeniedOrdersNull( $value){
      return $this->_set(1007, $value);
    }
  }
}

