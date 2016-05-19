<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_GetCurrentlyUsersOnline_Pu.proto
//   Date: 2016-05-19 08:07:39

namespace dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value1_restricted_by_pattern = null;
    
    /**  @var \dstore\values\integerValue */
    public $binary_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $online_time_in_seconds = null;
    
    /**  @var \dstore\values\stringValue */
    public $value2_restricted_by_pattern = null;
    
    /**  @var \dstore\values\integerValue */
    public $community_member_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value3 = null;
    
    /**  @var \dstore\values\integerValue */
    public $online_status = null;
    
    /**  @var \dstore\values\stringValue */
    public $value1 = null;
    
    /**  @var \dstore\values\stringValue */
    public $value2 = null;
    
    /**  @var \dstore\values\stringValue */
    public $value3_restricted_by_pattern = null;
    
    /**  @var \dstore\values\stringValue */
    public $nickname = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_GetCurrentlyUsersOnline_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value1_restricted_by_pattern = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "value1_restricted_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "binary_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE online_time_in_seconds = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "online_time_in_seconds";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value2_restricted_by_pattern = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "value2_restricted_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE community_member_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "community_member_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value3 = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "value3";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE online_status = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "online_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value1 = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "value1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value2 = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "value2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value3_restricted_by_pattern = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "value3_restricted_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE nickname = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "nickname";
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
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
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
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <value1_restricted_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasValue1RestrictedByPattern(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <value1_restricted_by_pattern> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearValue1RestrictedByPattern(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <value1_restricted_by_pattern> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue1RestrictedByPattern(){
      return $this->_get(10001);
    }
    
    /**
     * Set <value1_restricted_by_pattern> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setValue1RestrictedByPattern(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <binary_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <binary_id> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearBinaryId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <binary_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBinaryId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <binary_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setBinaryId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <online_time_in_seconds> has a value
     *
     * @return boolean
     */
    public function hasOnlineTimeInSeconds(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <online_time_in_seconds> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearOnlineTimeInSeconds(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <online_time_in_seconds> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOnlineTimeInSeconds(){
      return $this->_get(10003);
    }
    
    /**
     * Set <online_time_in_seconds> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setOnlineTimeInSeconds(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <value2_restricted_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasValue2RestrictedByPattern(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <value2_restricted_by_pattern> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearValue2RestrictedByPattern(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <value2_restricted_by_pattern> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue2RestrictedByPattern(){
      return $this->_get(10004);
    }
    
    /**
     * Set <value2_restricted_by_pattern> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setValue2RestrictedByPattern(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <community_member_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityMemberId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <community_member_id> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearCommunityMemberId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <community_member_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCommunityMemberId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <community_member_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setCommunityMemberId(\dstore\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <value3> has a value
     *
     * @return boolean
     */
    public function hasValue3(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <value3> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearValue3(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <value3> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue3(){
      return $this->_get(10006);
    }
    
    /**
     * Set <value3> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setValue3(\dstore\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <online_status> has a value
     *
     * @return boolean
     */
    public function hasOnlineStatus(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <online_status> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearOnlineStatus(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <online_status> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOnlineStatus(){
      return $this->_get(10007);
    }
    
    /**
     * Set <online_status> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setOnlineStatus(\dstore\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <value1> has a value
     *
     * @return boolean
     */
    public function hasValue1(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <value1> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearValue1(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <value1> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue1(){
      return $this->_get(10008);
    }
    
    /**
     * Set <value1> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setValue1(\dstore\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <value2> has a value
     *
     * @return boolean
     */
    public function hasValue2(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <value2> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearValue2(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <value2> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue2(){
      return $this->_get(10009);
    }
    
    /**
     * Set <value2> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setValue2(\dstore\values\stringValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <value3_restricted_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasValue3RestrictedByPattern(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <value3_restricted_by_pattern> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearValue3RestrictedByPattern(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <value3_restricted_by_pattern> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue3RestrictedByPattern(){
      return $this->_get(10010);
    }
    
    /**
     * Set <value3_restricted_by_pattern> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setValue3RestrictedByPattern(\dstore\values\stringValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <nickname> has a value
     *
     * @return boolean
     */
    public function hasNickname(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <nickname> value
     *
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function clearNickname(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <nickname> value
     *
     * @return \dstore\values\stringValue
     */
    public function getNickname(){
      return $this->_get(10011);
    }
    
    /**
     * Set <nickname> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetCurrentlyUsersOnline_Pu\Response\Row
     */
    public function setNickname(\dstore\values\stringValue $value){
      return $this->_set(10011, $value);
    }
  }
}

