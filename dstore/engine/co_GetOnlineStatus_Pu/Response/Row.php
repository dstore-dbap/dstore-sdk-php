<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_GetOnlineStatus_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\co_GetOnlineStatus_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $community_member_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $online_status = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_GetOnlineStatus_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE community_member_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "community_member_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE online_status = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "online_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
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
     * @return \dstore\engine\co_GetOnlineStatus_Pu\Response\Row
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
     * @return \dstore\engine\co_GetOnlineStatus_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <community_member_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityMemberId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <community_member_id> value
     *
     * @return \dstore\engine\co_GetOnlineStatus_Pu\Response\Row
     */
    public function clearCommunityMemberId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <community_member_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCommunityMemberId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <community_member_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\co_GetOnlineStatus_Pu\Response\Row
     */
    public function setCommunityMemberId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <online_status> has a value
     *
     * @return boolean
     */
    public function hasOnlineStatus(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <online_status> value
     *
     * @return \dstore\engine\co_GetOnlineStatus_Pu\Response\Row
     */
    public function clearOnlineStatus(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <online_status> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOnlineStatus(){
      return $this->_get(10002);
    }
    
    /**
     * Set <online_status> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\co_GetOnlineStatus_Pu\Response\Row
     */
    public function setOnlineStatus(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
  }
}

