<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_CreatedStoreUser_Ad.proto
//   Date: 2016-05-19 08:07:44

namespace dstore\engine\mi_CreatedStoreUser_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $user_name = null;
    
    /**  @var boolean */
    public $user_name_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $d_b_login = null;
    
    /**  @var boolean */
    public $d_b_login_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $d_b_password = null;
    
    /**  @var boolean */
    public $d_b_password_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $d_b_login_description = null;
    
    /**  @var boolean */
    public $d_b_login_description_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $d_b_group_admin = null;
    
    /**  @var boolean */
    public $d_b_group_admin_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $user_group_id = null;
    
    /**  @var boolean */
    public $user_group_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $create_person_with_password = null;
    
    /**  @var boolean */
    public $create_person_with_password_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $user_may_create_new_users = null;
    
    /**  @var boolean */
    public $user_may_create_new_users_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $abort_if_login_already_exists = null;
    
    /**  @var boolean */
    public $abort_if_login_already_exists_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_CreatedStoreUser_Ad.Parameters');

      // OPTIONAL MESSAGE user_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "user_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL user_name_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "user_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE d_b_login = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "d_b_login";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL d_b_login_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "d_b_login_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE d_b_password = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "d_b_password";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL d_b_password_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "d_b_password_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE d_b_login_description = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "d_b_login_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL d_b_login_description_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "d_b_login_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE d_b_group_admin = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "d_b_group_admin";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL d_b_group_admin_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "d_b_group_admin_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE user_group_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "user_group_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL user_group_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "user_group_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE create_person_with_password = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "create_person_with_password";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL create_person_with_password_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "create_person_with_password_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE user_may_create_new_users = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "user_may_create_new_users";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL user_may_create_new_users_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "user_may_create_new_users_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE abort_if_login_already_exists = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "abort_if_login_already_exists";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL abort_if_login_already_exists_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "abort_if_login_already_exists_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <user_name> has a value
     *
     * @return boolean
     */
    public function hasUserName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <user_name> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearUserName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <user_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUserName(){
      return $this->_get(1);
    }
    
    /**
     * Set <user_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setUserName(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <user_name_null> has a value
     *
     * @return boolean
     */
    public function hasUserNameNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <user_name_null> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearUserNameNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <user_name_null> value
     *
     * @return boolean
     */
    public function getUserNameNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <user_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setUserNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <d_b_login> has a value
     *
     * @return boolean
     */
    public function hasDBLogin(){
      return $this->_has(2);
    }
    
    /**
     * Clear <d_b_login> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearDBLogin(){
      return $this->_clear(2);
    }
    
    /**
     * Get <d_b_login> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDBLogin(){
      return $this->_get(2);
    }
    
    /**
     * Set <d_b_login> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setDBLogin(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <d_b_login_null> has a value
     *
     * @return boolean
     */
    public function hasDBLoginNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <d_b_login_null> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearDBLoginNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <d_b_login_null> value
     *
     * @return boolean
     */
    public function getDBLoginNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <d_b_login_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setDBLoginNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <d_b_password> has a value
     *
     * @return boolean
     */
    public function hasDBPassword(){
      return $this->_has(3);
    }
    
    /**
     * Clear <d_b_password> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearDBPassword(){
      return $this->_clear(3);
    }
    
    /**
     * Get <d_b_password> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDBPassword(){
      return $this->_get(3);
    }
    
    /**
     * Set <d_b_password> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setDBPassword(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <d_b_password_null> has a value
     *
     * @return boolean
     */
    public function hasDBPasswordNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <d_b_password_null> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearDBPasswordNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <d_b_password_null> value
     *
     * @return boolean
     */
    public function getDBPasswordNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <d_b_password_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setDBPasswordNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <d_b_login_description> has a value
     *
     * @return boolean
     */
    public function hasDBLoginDescription(){
      return $this->_has(4);
    }
    
    /**
     * Clear <d_b_login_description> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearDBLoginDescription(){
      return $this->_clear(4);
    }
    
    /**
     * Get <d_b_login_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDBLoginDescription(){
      return $this->_get(4);
    }
    
    /**
     * Set <d_b_login_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setDBLoginDescription(\dstore\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <d_b_login_description_null> has a value
     *
     * @return boolean
     */
    public function hasDBLoginDescriptionNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <d_b_login_description_null> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearDBLoginDescriptionNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <d_b_login_description_null> value
     *
     * @return boolean
     */
    public function getDBLoginDescriptionNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <d_b_login_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setDBLoginDescriptionNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <d_b_group_admin> has a value
     *
     * @return boolean
     */
    public function hasDBGroupAdmin(){
      return $this->_has(5);
    }
    
    /**
     * Clear <d_b_group_admin> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearDBGroupAdmin(){
      return $this->_clear(5);
    }
    
    /**
     * Get <d_b_group_admin> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDBGroupAdmin(){
      return $this->_get(5);
    }
    
    /**
     * Set <d_b_group_admin> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setDBGroupAdmin(\dstore\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <d_b_group_admin_null> has a value
     *
     * @return boolean
     */
    public function hasDBGroupAdminNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <d_b_group_admin_null> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearDBGroupAdminNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <d_b_group_admin_null> value
     *
     * @return boolean
     */
    public function getDBGroupAdminNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <d_b_group_admin_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setDBGroupAdminNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <user_group_id> has a value
     *
     * @return boolean
     */
    public function hasUserGroupId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <user_group_id> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearUserGroupId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <user_group_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getUserGroupId(){
      return $this->_get(6);
    }
    
    /**
     * Set <user_group_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setUserGroupId(\dstore\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <user_group_id_null> has a value
     *
     * @return boolean
     */
    public function hasUserGroupIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <user_group_id_null> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearUserGroupIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <user_group_id_null> value
     *
     * @return boolean
     */
    public function getUserGroupIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <user_group_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setUserGroupIdNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <create_person_with_password> has a value
     *
     * @return boolean
     */
    public function hasCreatePersonWithPassword(){
      return $this->_has(7);
    }
    
    /**
     * Clear <create_person_with_password> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearCreatePersonWithPassword(){
      return $this->_clear(7);
    }
    
    /**
     * Get <create_person_with_password> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCreatePersonWithPassword(){
      return $this->_get(7);
    }
    
    /**
     * Set <create_person_with_password> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setCreatePersonWithPassword(\dstore\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <create_person_with_password_null> has a value
     *
     * @return boolean
     */
    public function hasCreatePersonWithPasswordNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <create_person_with_password_null> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearCreatePersonWithPasswordNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <create_person_with_password_null> value
     *
     * @return boolean
     */
    public function getCreatePersonWithPasswordNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <create_person_with_password_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setCreatePersonWithPasswordNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <user_may_create_new_users> has a value
     *
     * @return boolean
     */
    public function hasUserMayCreateNewUsers(){
      return $this->_has(8);
    }
    
    /**
     * Clear <user_may_create_new_users> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearUserMayCreateNewUsers(){
      return $this->_clear(8);
    }
    
    /**
     * Get <user_may_create_new_users> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getUserMayCreateNewUsers(){
      return $this->_get(8);
    }
    
    /**
     * Set <user_may_create_new_users> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setUserMayCreateNewUsers(\dstore\values\booleanValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <user_may_create_new_users_null> has a value
     *
     * @return boolean
     */
    public function hasUserMayCreateNewUsersNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <user_may_create_new_users_null> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearUserMayCreateNewUsersNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <user_may_create_new_users_null> value
     *
     * @return boolean
     */
    public function getUserMayCreateNewUsersNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <user_may_create_new_users_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setUserMayCreateNewUsersNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <abort_if_login_already_exists> has a value
     *
     * @return boolean
     */
    public function hasAbortIfLoginAlreadyExists(){
      return $this->_has(9);
    }
    
    /**
     * Clear <abort_if_login_already_exists> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearAbortIfLoginAlreadyExists(){
      return $this->_clear(9);
    }
    
    /**
     * Get <abort_if_login_already_exists> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getAbortIfLoginAlreadyExists(){
      return $this->_get(9);
    }
    
    /**
     * Set <abort_if_login_already_exists> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setAbortIfLoginAlreadyExists(\dstore\values\booleanValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <abort_if_login_already_exists_null> has a value
     *
     * @return boolean
     */
    public function hasAbortIfLoginAlreadyExistsNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <abort_if_login_already_exists_null> value
     *
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function clearAbortIfLoginAlreadyExistsNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <abort_if_login_already_exists_null> value
     *
     * @return boolean
     */
    public function getAbortIfLoginAlreadyExistsNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <abort_if_login_already_exists_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CreatedStoreUser_Ad\Parameters
     */
    public function setAbortIfLoginAlreadyExistsNull( $value){
      return $this->_set(1009, $value);
    }
  }
}

