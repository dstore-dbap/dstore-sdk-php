<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_ModifyApplicationParts_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_ModifyApplicationParts_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $application_id = null;
    
    /**  @var boolean */
    public $application_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $user_id = null;
    
    /**  @var boolean */
    public $user_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $application_part = null;
    
    /**  @var boolean */
    public $application_part_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete = null;
    
    /**  @var boolean */
    public $delete_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_ModifyApplicationParts_Ad.Parameters');

      // OPTIONAL MESSAGE application_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "application_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL application_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "application_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE user_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL user_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "user_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE application_part = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "application_part";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL application_part_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "application_part_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <application_id> has a value
     *
     * @return boolean
     */
    public function hasApplicationId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <application_id> value
     *
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function clearApplicationId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <application_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getApplicationId(){
      return $this->_get(1);
    }
    
    /**
     * Set <application_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function setApplicationId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <application_id_null> has a value
     *
     * @return boolean
     */
    public function hasApplicationIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <application_id_null> value
     *
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function clearApplicationIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <application_id_null> value
     *
     * @return boolean
     */
    public function getApplicationIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <application_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function setApplicationIdNull( $value){
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
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function clearUserId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <user_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUserId(){
      return $this->_get(2);
    }
    
    /**
     * Set <user_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function setUserId(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
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
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function setUserIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <application_part> has a value
     *
     * @return boolean
     */
    public function hasApplicationPart(){
      return $this->_has(3);
    }
    
    /**
     * Clear <application_part> value
     *
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function clearApplicationPart(){
      return $this->_clear(3);
    }
    
    /**
     * Get <application_part> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getApplicationPart(){
      return $this->_get(3);
    }
    
    /**
     * Set <application_part> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function setApplicationPart(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <application_part_null> has a value
     *
     * @return boolean
     */
    public function hasApplicationPartNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <application_part_null> value
     *
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function clearApplicationPartNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <application_part_null> value
     *
     * @return boolean
     */
    public function getApplicationPartNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <application_part_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function setApplicationPartNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete> has a value
     *
     * @return boolean
     */
    public function hasDelete(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete> value
     *
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function clearDelete(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDelete(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function setDelete(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_null> value
     *
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function clearDeleteNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_null> value
     *
     * @return boolean
     */
    public function getDeleteNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyApplicationParts_Ad\Parameters
     */
    public function setDeleteNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

