<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ChangeOrderState_Pu.proto
//   Date: 2016-05-19 08:07:47

namespace dstore\engine\om_ChangeOrderState_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $result = null;
    
    /**  @var boolean */
    public $result_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $case_sensitive = null;
    
    /**  @var boolean */
    public $case_sensitive_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $order_content_ids = null;
    
    /**  @var boolean */
    public $order_content_ids_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $is_order_id = null;
    
    /**  @var boolean */
    public $is_order_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $order_state_id = null;
    
    /**  @var boolean */
    public $order_state_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $select_denied_orders = null;
    
    /**  @var boolean */
    public $select_denied_orders_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ChangeOrderState_Pu.Parameters');

      // OPTIONAL MESSAGE result = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "result";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL result_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "result_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_identification_values = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE case_sensitive = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "case_sensitive";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL case_sensitive_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "case_sensitive_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_content_ids = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "order_content_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_content_ids_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "order_content_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_order_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "is_order_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL is_order_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "is_order_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state_id = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "order_state_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_state_id_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "order_state_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE select_denied_orders = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "select_denied_orders";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL select_denied_orders_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
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
     * Check if <result> has a value
     *
     * @return boolean
     */
    public function hasResult(){
      return $this->_has(1);
    }
    
    /**
     * Clear <result> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearResult(){
      return $this->_clear(1);
    }
    
    /**
     * Get <result> value
     *
     * @return \dstore\values\integerValue
     */
    public function getResult(){
      return $this->_get(1);
    }
    
    /**
     * Set <result> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setResult(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <result_null> has a value
     *
     * @return boolean
     */
    public function hasResultNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <result_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearResultNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <result_null> value
     *
     * @return boolean
     */
    public function getResultNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <result_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setResultNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <case_sensitive> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitive(){
      return $this->_has(4);
    }
    
    /**
     * Clear <case_sensitive> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearCaseSensitive(){
      return $this->_clear(4);
    }
    
    /**
     * Get <case_sensitive> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getCaseSensitive(){
      return $this->_get(4);
    }
    
    /**
     * Set <case_sensitive> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setCaseSensitive(\dstore\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <case_sensitive_null> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitiveNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <case_sensitive_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearCaseSensitiveNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <case_sensitive_null> value
     *
     * @return boolean
     */
    public function getCaseSensitiveNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <case_sensitive_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setCaseSensitiveNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <order_content_ids> has a value
     *
     * @return boolean
     */
    public function hasOrderContentIds(){
      return $this->_has(5);
    }
    
    /**
     * Clear <order_content_ids> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearOrderContentIds(){
      return $this->_clear(5);
    }
    
    /**
     * Get <order_content_ids> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOrderContentIds(){
      return $this->_get(5);
    }
    
    /**
     * Set <order_content_ids> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setOrderContentIds(\dstore\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <order_content_ids_null> has a value
     *
     * @return boolean
     */
    public function hasOrderContentIdsNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <order_content_ids_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearOrderContentIdsNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <order_content_ids_null> value
     *
     * @return boolean
     */
    public function getOrderContentIdsNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <order_content_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setOrderContentIdsNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <is_order_id> has a value
     *
     * @return boolean
     */
    public function hasIsOrderId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <is_order_id> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearIsOrderId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <is_order_id> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getIsOrderId(){
      return $this->_get(6);
    }
    
    /**
     * Set <is_order_id> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setIsOrderId(\dstore\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <is_order_id_null> has a value
     *
     * @return boolean
     */
    public function hasIsOrderIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <is_order_id_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearIsOrderIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <is_order_id_null> value
     *
     * @return boolean
     */
    public function getIsOrderIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <is_order_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setIsOrderIdNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <order_state_id> has a value
     *
     * @return boolean
     */
    public function hasOrderStateId(){
      return $this->_has(7);
    }
    
    /**
     * Clear <order_state_id> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearOrderStateId(){
      return $this->_clear(7);
    }
    
    /**
     * Get <order_state_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrderStateId(){
      return $this->_get(7);
    }
    
    /**
     * Set <order_state_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setOrderStateId(\dstore\values\integerValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <order_state_id_null> has a value
     *
     * @return boolean
     */
    public function hasOrderStateIdNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <order_state_id_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearOrderStateIdNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <order_state_id_null> value
     *
     * @return boolean
     */
    public function getOrderStateIdNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <order_state_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setOrderStateIdNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <select_denied_orders> has a value
     *
     * @return boolean
     */
    public function hasSelectDeniedOrders(){
      return $this->_has(8);
    }
    
    /**
     * Clear <select_denied_orders> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearSelectDeniedOrders(){
      return $this->_clear(8);
    }
    
    /**
     * Get <select_denied_orders> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getSelectDeniedOrders(){
      return $this->_get(8);
    }
    
    /**
     * Set <select_denied_orders> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setSelectDeniedOrders(\dstore\values\booleanValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <select_denied_orders_null> has a value
     *
     * @return boolean
     */
    public function hasSelectDeniedOrdersNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <select_denied_orders_null> value
     *
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function clearSelectDeniedOrdersNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <select_denied_orders_null> value
     *
     * @return boolean
     */
    public function getSelectDeniedOrdersNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <select_denied_orders_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ChangeOrderState_Pu\Parameters
     */
    public function setSelectDeniedOrdersNull( $value){
      return $this->_set(1008, $value);
    }
  }
}

