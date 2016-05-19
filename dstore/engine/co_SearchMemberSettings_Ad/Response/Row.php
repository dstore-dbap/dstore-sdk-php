<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_SearchMemberSettings_Ad.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\co_SearchMemberSettings_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $identifying_value = null;
    
    /**  @var \dstore\values\stringValue */
    public $setting_value = null;
    
    /**  @var \dstore\values\integerValue */
    public $community_member_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_SearchMemberSettings_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE identifying_value = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "identifying_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE setting_value = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "setting_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE community_member_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "community_member_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
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
     * @return \dstore\engine\co_SearchMemberSettings_Ad\Response\Row
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
     * @return \dstore\engine\co_SearchMemberSettings_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <identifying_value> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingValue(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <identifying_value> value
     *
     * @return \dstore\engine\co_SearchMemberSettings_Ad\Response\Row
     */
    public function clearIdentifyingValue(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <identifying_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getIdentifyingValue(){
      return $this->_get(10001);
    }
    
    /**
     * Set <identifying_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_SearchMemberSettings_Ad\Response\Row
     */
    public function setIdentifyingValue(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <setting_value> has a value
     *
     * @return boolean
     */
    public function hasSettingValue(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <setting_value> value
     *
     * @return \dstore\engine\co_SearchMemberSettings_Ad\Response\Row
     */
    public function clearSettingValue(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <setting_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSettingValue(){
      return $this->_get(10002);
    }
    
    /**
     * Set <setting_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_SearchMemberSettings_Ad\Response\Row
     */
    public function setSettingValue(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <community_member_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityMemberId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <community_member_id> value
     *
     * @return \dstore\engine\co_SearchMemberSettings_Ad\Response\Row
     */
    public function clearCommunityMemberId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <community_member_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCommunityMemberId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <community_member_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_SearchMemberSettings_Ad\Response\Row
     */
    public function setCommunityMemberId(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
  }
}

