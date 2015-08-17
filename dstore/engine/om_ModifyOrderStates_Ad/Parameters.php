<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyOrderStates_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\om_ModifyOrderStates_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $order_state_id = null;
    
    /**  @var boolean */
    public $order_state_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $order_state = null;
    
    /**  @var boolean */
    public $order_state_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $public_description = null;
    
    /**  @var boolean */
    public $public_description_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $insert_update_or_delete = null;
    
    /**  @var boolean */
    public $insert_update_or_delete_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $active = null;
    
    /**  @var boolean */
    public $active_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $change_order_state_trigger_id = null;
    
    /**  @var boolean */
    public $change_order_state_trigger_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyOrderStates_Ad.Parameters');

      // OPTIONAL MESSAGE order_state_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "order_state_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_state_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "order_state_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "order_state";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_state_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "order_state_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE public_description = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "public_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL public_description_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "public_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE insert_update_or_delete = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "insert_update_or_delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL insert_update_or_delete_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "insert_update_or_delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE active = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL active_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "active_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE change_order_state_trigger_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "change_order_state_trigger_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL change_order_state_trigger_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "change_order_state_trigger_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <order_state_id> has a value
     *
     * @return boolean
     */
    public function hasOrderStateId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <order_state_id> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearOrderStateId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <order_state_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOrderStateId(){
      return $this->_get(1);
    }
    
    /**
     * Set <order_state_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setOrderStateId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <order_state_id_null> has a value
     *
     * @return boolean
     */
    public function hasOrderStateIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <order_state_id_null> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearOrderStateIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <order_state_id_null> value
     *
     * @return boolean
     */
    public function getOrderStateIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <order_state_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setOrderStateIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <order_state> has a value
     *
     * @return boolean
     */
    public function hasOrderState(){
      return $this->_has(2);
    }
    
    /**
     * Clear <order_state> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearOrderState(){
      return $this->_clear(2);
    }
    
    /**
     * Get <order_state> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOrderState(){
      return $this->_get(2);
    }
    
    /**
     * Set <order_state> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setOrderState(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <order_state_null> has a value
     *
     * @return boolean
     */
    public function hasOrderStateNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <order_state_null> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearOrderStateNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <order_state_null> value
     *
     * @return boolean
     */
    public function getOrderStateNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <order_state_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setOrderStateNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <public_description> has a value
     *
     * @return boolean
     */
    public function hasPublicDescription(){
      return $this->_has(3);
    }
    
    /**
     * Clear <public_description> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearPublicDescription(){
      return $this->_clear(3);
    }
    
    /**
     * Get <public_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPublicDescription(){
      return $this->_get(3);
    }
    
    /**
     * Set <public_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setPublicDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <public_description_null> has a value
     *
     * @return boolean
     */
    public function hasPublicDescriptionNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <public_description_null> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearPublicDescriptionNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <public_description_null> value
     *
     * @return boolean
     */
    public function getPublicDescriptionNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <public_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setPublicDescriptionNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <insert_update_or_delete> has a value
     *
     * @return boolean
     */
    public function hasInsertUpdateOrDelete(){
      return $this->_has(4);
    }
    
    /**
     * Clear <insert_update_or_delete> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearInsertUpdateOrDelete(){
      return $this->_clear(4);
    }
    
    /**
     * Get <insert_update_or_delete> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInsertUpdateOrDelete(){
      return $this->_get(4);
    }
    
    /**
     * Set <insert_update_or_delete> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setInsertUpdateOrDelete(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <insert_update_or_delete_null> has a value
     *
     * @return boolean
     */
    public function hasInsertUpdateOrDeleteNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <insert_update_or_delete_null> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearInsertUpdateOrDeleteNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <insert_update_or_delete_null> value
     *
     * @return boolean
     */
    public function getInsertUpdateOrDeleteNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <insert_update_or_delete_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setInsertUpdateOrDeleteNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(5);
    }
    
    /**
     * Clear <active> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearActive(){
      return $this->_clear(5);
    }
    
    /**
     * Get <active> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getActive(){
      return $this->_get(5);
    }
    
    /**
     * Set <active> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setActive(\dstore\engine\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <active_null> has a value
     *
     * @return boolean
     */
    public function hasActiveNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <active_null> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearActiveNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <active_null> value
     *
     * @return boolean
     */
    public function getActiveNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <active_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setActiveNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <change_order_state_trigger_id> has a value
     *
     * @return boolean
     */
    public function hasChangeOrderStateTriggerId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <change_order_state_trigger_id> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearChangeOrderStateTriggerId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <change_order_state_trigger_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getChangeOrderStateTriggerId(){
      return $this->_get(6);
    }
    
    /**
     * Set <change_order_state_trigger_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setChangeOrderStateTriggerId(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <change_order_state_trigger_id_null> has a value
     *
     * @return boolean
     */
    public function hasChangeOrderStateTriggerIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <change_order_state_trigger_id_null> value
     *
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function clearChangeOrderStateTriggerIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <change_order_state_trigger_id_null> value
     *
     * @return boolean
     */
    public function getChangeOrderStateTriggerIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <change_order_state_trigger_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrderStates_Ad\Parameters
     */
    public function setChangeOrderStateTriggerIdNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

