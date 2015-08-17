<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_DeleteUsersOnlineTime_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\co_DeleteUsersOnlineTime_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $community_id = null;
    
    /**  @var boolean */
    public $community_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $community_member_id = null;
    
    /**  @var boolean */
    public $community_member_id_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $max_out_date = null;
    
    /**  @var boolean */
    public $max_out_date_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_DeleteUsersOnlineTime_Ad.Parameters');

      // OPTIONAL MESSAGE community_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "community_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "community_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE community_member_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "community_member_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_member_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "community_member_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_out_date = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "max_out_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL max_out_date_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "max_out_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <community_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <community_id> value
     *
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function clearCommunityId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <community_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCommunityId(){
      return $this->_get(1);
    }
    
    /**
     * Set <community_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function setCommunityId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <community_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <community_id_null> value
     *
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function clearCommunityIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <community_id_null> value
     *
     * @return boolean
     */
    public function getCommunityIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <community_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function setCommunityIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <community_member_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityMemberId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <community_member_id> value
     *
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function clearCommunityMemberId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <community_member_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCommunityMemberId(){
      return $this->_get(2);
    }
    
    /**
     * Set <community_member_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function setCommunityMemberId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <community_member_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityMemberIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <community_member_id_null> value
     *
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function clearCommunityMemberIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <community_member_id_null> value
     *
     * @return boolean
     */
    public function getCommunityMemberIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <community_member_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function setCommunityMemberIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <max_out_date> has a value
     *
     * @return boolean
     */
    public function hasMaxOutDate(){
      return $this->_has(3);
    }
    
    /**
     * Clear <max_out_date> value
     *
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function clearMaxOutDate(){
      return $this->_clear(3);
    }
    
    /**
     * Get <max_out_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getMaxOutDate(){
      return $this->_get(3);
    }
    
    /**
     * Set <max_out_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function setMaxOutDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <max_out_date_null> has a value
     *
     * @return boolean
     */
    public function hasMaxOutDateNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <max_out_date_null> value
     *
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function clearMaxOutDateNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <max_out_date_null> value
     *
     * @return boolean
     */
    public function getMaxOutDateNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <max_out_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteUsersOnlineTime_Ad\Parameters
     */
    public function setMaxOutDateNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

