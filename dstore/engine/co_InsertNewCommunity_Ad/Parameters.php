<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_InsertNewCommunity_Ad.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\co_InsertNewCommunity_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $community_name = null;
    
    /**  @var boolean */
    public $community_name_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $community_members_person_type_id = null;
    
    /**  @var boolean */
    public $community_members_person_type_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $identifying_characteristic_id = null;
    
    /**  @var boolean */
    public $identifying_characteristic_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $password_characteristic_id = null;
    
    /**  @var boolean */
    public $password_characteristic_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $question_characteristic_id = null;
    
    /**  @var boolean */
    public $question_characteristic_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $answer_characteristic_id = null;
    
    /**  @var boolean */
    public $answer_characteristic_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $friend_relationship_id = null;
    
    /**  @var boolean */
    public $friend_relationship_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $keep_messages_in_days = null;
    
    /**  @var boolean */
    public $keep_messages_in_days_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $keep_users_online_time_in_days = null;
    
    /**  @var boolean */
    public $keep_users_online_time_in_days_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_InsertNewCommunity_Ad.Parameters');

      // OPTIONAL MESSAGE community_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "community_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_name_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "community_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE community_members_person_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "community_members_person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_members_person_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "community_members_person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE identifying_characteristic_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "identifying_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL identifying_characteristic_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "identifying_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE password_characteristic_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "password_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL password_characteristic_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "password_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE question_characteristic_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "question_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL question_characteristic_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "question_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE answer_characteristic_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "answer_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL answer_characteristic_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "answer_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE friend_relationship_id = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "friend_relationship_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL friend_relationship_id_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "friend_relationship_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE keep_messages_in_days = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "keep_messages_in_days";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL keep_messages_in_days_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "keep_messages_in_days_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE keep_users_online_time_in_days = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "keep_users_online_time_in_days";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL keep_users_online_time_in_days_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "keep_users_online_time_in_days_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <community_name> has a value
     *
     * @return boolean
     */
    public function hasCommunityName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <community_name> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearCommunityName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <community_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCommunityName(){
      return $this->_get(1);
    }
    
    /**
     * Set <community_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setCommunityName(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <community_name_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityNameNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <community_name_null> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearCommunityNameNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <community_name_null> value
     *
     * @return boolean
     */
    public function getCommunityNameNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <community_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setCommunityNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <community_members_person_type_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityMembersPersonTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <community_members_person_type_id> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearCommunityMembersPersonTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <community_members_person_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCommunityMembersPersonTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <community_members_person_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setCommunityMembersPersonTypeId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <community_members_person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityMembersPersonTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <community_members_person_type_id_null> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearCommunityMembersPersonTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <community_members_person_type_id_null> value
     *
     * @return boolean
     */
    public function getCommunityMembersPersonTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <community_members_person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setCommunityMembersPersonTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <identifying_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingCharacteristicId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <identifying_characteristic_id> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearIdentifyingCharacteristicId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <identifying_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getIdentifyingCharacteristicId(){
      return $this->_get(3);
    }
    
    /**
     * Set <identifying_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setIdentifyingCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <identifying_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingCharacteristicIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <identifying_characteristic_id_null> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearIdentifyingCharacteristicIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <identifying_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getIdentifyingCharacteristicIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <identifying_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setIdentifyingCharacteristicIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <password_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPasswordCharacteristicId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <password_characteristic_id> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearPasswordCharacteristicId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <password_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPasswordCharacteristicId(){
      return $this->_get(4);
    }
    
    /**
     * Set <password_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setPasswordCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <password_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPasswordCharacteristicIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <password_characteristic_id_null> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearPasswordCharacteristicIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <password_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPasswordCharacteristicIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <password_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setPasswordCharacteristicIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <question_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasQuestionCharacteristicId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <question_characteristic_id> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearQuestionCharacteristicId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <question_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getQuestionCharacteristicId(){
      return $this->_get(5);
    }
    
    /**
     * Set <question_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setQuestionCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <question_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasQuestionCharacteristicIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <question_characteristic_id_null> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearQuestionCharacteristicIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <question_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getQuestionCharacteristicIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <question_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setQuestionCharacteristicIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <answer_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasAnswerCharacteristicId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <answer_characteristic_id> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearAnswerCharacteristicId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <answer_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getAnswerCharacteristicId(){
      return $this->_get(6);
    }
    
    /**
     * Set <answer_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setAnswerCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <answer_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasAnswerCharacteristicIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <answer_characteristic_id_null> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearAnswerCharacteristicIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <answer_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getAnswerCharacteristicIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <answer_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setAnswerCharacteristicIdNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <friend_relationship_id> has a value
     *
     * @return boolean
     */
    public function hasFriendRelationshipId(){
      return $this->_has(7);
    }
    
    /**
     * Clear <friend_relationship_id> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearFriendRelationshipId(){
      return $this->_clear(7);
    }
    
    /**
     * Get <friend_relationship_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getFriendRelationshipId(){
      return $this->_get(7);
    }
    
    /**
     * Set <friend_relationship_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setFriendRelationshipId(\dstore\values\integerValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <friend_relationship_id_null> has a value
     *
     * @return boolean
     */
    public function hasFriendRelationshipIdNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <friend_relationship_id_null> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearFriendRelationshipIdNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <friend_relationship_id_null> value
     *
     * @return boolean
     */
    public function getFriendRelationshipIdNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <friend_relationship_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setFriendRelationshipIdNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <keep_messages_in_days> has a value
     *
     * @return boolean
     */
    public function hasKeepMessagesInDays(){
      return $this->_has(8);
    }
    
    /**
     * Clear <keep_messages_in_days> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearKeepMessagesInDays(){
      return $this->_clear(8);
    }
    
    /**
     * Get <keep_messages_in_days> value
     *
     * @return \dstore\values\integerValue
     */
    public function getKeepMessagesInDays(){
      return $this->_get(8);
    }
    
    /**
     * Set <keep_messages_in_days> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setKeepMessagesInDays(\dstore\values\integerValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <keep_messages_in_days_null> has a value
     *
     * @return boolean
     */
    public function hasKeepMessagesInDaysNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <keep_messages_in_days_null> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearKeepMessagesInDaysNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <keep_messages_in_days_null> value
     *
     * @return boolean
     */
    public function getKeepMessagesInDaysNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <keep_messages_in_days_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setKeepMessagesInDaysNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <keep_users_online_time_in_days> has a value
     *
     * @return boolean
     */
    public function hasKeepUsersOnlineTimeInDays(){
      return $this->_has(9);
    }
    
    /**
     * Clear <keep_users_online_time_in_days> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearKeepUsersOnlineTimeInDays(){
      return $this->_clear(9);
    }
    
    /**
     * Get <keep_users_online_time_in_days> value
     *
     * @return \dstore\values\integerValue
     */
    public function getKeepUsersOnlineTimeInDays(){
      return $this->_get(9);
    }
    
    /**
     * Set <keep_users_online_time_in_days> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setKeepUsersOnlineTimeInDays(\dstore\values\integerValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <keep_users_online_time_in_days_null> has a value
     *
     * @return boolean
     */
    public function hasKeepUsersOnlineTimeInDaysNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <keep_users_online_time_in_days_null> value
     *
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function clearKeepUsersOnlineTimeInDaysNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <keep_users_online_time_in_days_null> value
     *
     * @return boolean
     */
    public function getKeepUsersOnlineTimeInDaysNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <keep_users_online_time_in_days_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_InsertNewCommunity_Ad\Parameters
     */
    public function setKeepUsersOnlineTimeInDaysNull( $value){
      return $this->_set(1009, $value);
    }
  }
}

