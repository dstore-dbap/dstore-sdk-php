<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetUserInfo_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetUserInfo_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $user_id = null;
    
    /**  @var boolean */
    public $user_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $include_special_user = null;
    
    /**  @var boolean */
    public $include_special_user_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_assigned_groups = null;
    
    /**  @var boolean */
    public $get_assigned_groups_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetUserInfo_Ad.Parameters');

      // OPTIONAL MESSAGE user_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL user_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "user_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_special_user = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "include_special_user";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_special_user_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "include_special_user_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_assigned_groups = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "get_assigned_groups";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_assigned_groups_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "get_assigned_groups_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <user_id> has a value
     *
     * @return boolean
     */
    public function hasUserId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <user_id> value
     *
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function clearUserId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <user_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUserId(){
      return $this->_get(1);
    }
    
    /**
     * Set <user_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function setUserId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <user_id_null> has a value
     *
     * @return boolean
     */
    public function hasUserIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <user_id_null> value
     *
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function clearUserIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <user_id_null> value
     *
     * @return boolean
     */
    public function getUserIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <user_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function setUserIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <include_special_user> has a value
     *
     * @return boolean
     */
    public function hasIncludeSpecialUser(){
      return $this->_has(2);
    }
    
    /**
     * Clear <include_special_user> value
     *
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function clearIncludeSpecialUser(){
      return $this->_clear(2);
    }
    
    /**
     * Get <include_special_user> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludeSpecialUser(){
      return $this->_get(2);
    }
    
    /**
     * Set <include_special_user> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function setIncludeSpecialUser(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <include_special_user_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeSpecialUserNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <include_special_user_null> value
     *
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function clearIncludeSpecialUserNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <include_special_user_null> value
     *
     * @return boolean
     */
    public function getIncludeSpecialUserNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <include_special_user_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function setIncludeSpecialUserNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <get_assigned_groups> has a value
     *
     * @return boolean
     */
    public function hasGetAssignedGroups(){
      return $this->_has(3);
    }
    
    /**
     * Clear <get_assigned_groups> value
     *
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function clearGetAssignedGroups(){
      return $this->_clear(3);
    }
    
    /**
     * Get <get_assigned_groups> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetAssignedGroups(){
      return $this->_get(3);
    }
    
    /**
     * Set <get_assigned_groups> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function setGetAssignedGroups(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <get_assigned_groups_null> has a value
     *
     * @return boolean
     */
    public function hasGetAssignedGroupsNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <get_assigned_groups_null> value
     *
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function clearGetAssignedGroupsNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <get_assigned_groups_null> value
     *
     * @return boolean
     */
    public function getGetAssignedGroupsNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <get_assigned_groups_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetUserInfo_Ad\Parameters
     */
    public function setGetAssignedGroupsNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

