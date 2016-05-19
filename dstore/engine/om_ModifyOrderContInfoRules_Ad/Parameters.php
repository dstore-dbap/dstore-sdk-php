<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyOrderContInfoRules_Ad.proto
//   Date: 2016-05-19 08:07:52

namespace dstore\engine\om_ModifyOrderContInfoRules_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $information_type_id = null;
    
    /**  @var boolean */
    public $information_type_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $user_id = null;
    
    /**  @var boolean */
    public $user_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $order_state_id = null;
    
    /**  @var boolean */
    public $order_state_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $modification_allowed = null;
    
    /**  @var boolean */
    public $modification_allowed_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyOrderContInfoRules_Ad.Parameters');

      // OPTIONAL MESSAGE information_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "information_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE user_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL user_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "user_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_state_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "order_state_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_state_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "order_state_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE modification_allowed = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "modification_allowed";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL modification_allowed_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "modification_allowed_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function clearInformationTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function setInformationTypeId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <information_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <information_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function clearInformationTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <information_type_id_null> value
     *
     * @return boolean
     */
    public function getInformationTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <information_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function setInformationTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <user_id> has a value
     *
     * @return boolean
     */
    public function hasUserId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <user_id> value
     *
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function clearUserId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <user_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getUserId(){
      return $this->_get(2);
    }
    
    /**
     * Set <user_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function setUserId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <user_id_null> has a value
     *
     * @return boolean
     */
    public function hasUserIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <user_id_null> value
     *
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function clearUserIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <user_id_null> value
     *
     * @return boolean
     */
    public function getUserIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <user_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function setUserIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <order_state_id> has a value
     *
     * @return boolean
     */
    public function hasOrderStateId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <order_state_id> value
     *
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function clearOrderStateId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <order_state_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrderStateId(){
      return $this->_get(3);
    }
    
    /**
     * Set <order_state_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function setOrderStateId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <order_state_id_null> has a value
     *
     * @return boolean
     */
    public function hasOrderStateIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <order_state_id_null> value
     *
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function clearOrderStateIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <order_state_id_null> value
     *
     * @return boolean
     */
    public function getOrderStateIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <order_state_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function setOrderStateIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <modification_allowed> has a value
     *
     * @return boolean
     */
    public function hasModificationAllowed(){
      return $this->_has(4);
    }
    
    /**
     * Clear <modification_allowed> value
     *
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function clearModificationAllowed(){
      return $this->_clear(4);
    }
    
    /**
     * Get <modification_allowed> value
     *
     * @return \dstore\values\integerValue
     */
    public function getModificationAllowed(){
      return $this->_get(4);
    }
    
    /**
     * Set <modification_allowed> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function setModificationAllowed(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <modification_allowed_null> has a value
     *
     * @return boolean
     */
    public function hasModificationAllowedNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <modification_allowed_null> value
     *
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function clearModificationAllowedNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <modification_allowed_null> value
     *
     * @return boolean
     */
    public function getModificationAllowedNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <modification_allowed_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrderContInfoRules_Ad\Parameters
     */
    public function setModificationAllowedNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

