<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_ModifyCommunities_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\co_ModifyCommunities_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $community_id = null;
    
    /**  @var boolean */
    public $community_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $community_name = null;
    
    /**  @var boolean */
    public $community_name_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_community = null;
    
    /**  @var boolean */
    public $delete_community_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_ModifyCommunities_Ad.Parameters');

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

      // OPTIONAL MESSAGE community_name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "community_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_name_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "community_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_community = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "delete_community";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_community_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "delete_community_null";
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
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
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
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
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
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
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
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
     */
    public function setCommunityIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <community_name> has a value
     *
     * @return boolean
     */
    public function hasCommunityName(){
      return $this->_has(2);
    }
    
    /**
     * Clear <community_name> value
     *
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
     */
    public function clearCommunityName(){
      return $this->_clear(2);
    }
    
    /**
     * Get <community_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCommunityName(){
      return $this->_get(2);
    }
    
    /**
     * Set <community_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
     */
    public function setCommunityName(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <community_name_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityNameNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <community_name_null> value
     *
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
     */
    public function clearCommunityNameNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <community_name_null> value
     *
     * @return boolean
     */
    public function getCommunityNameNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <community_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
     */
    public function setCommunityNameNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <delete_community> has a value
     *
     * @return boolean
     */
    public function hasDeleteCommunity(){
      return $this->_has(3);
    }
    
    /**
     * Clear <delete_community> value
     *
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
     */
    public function clearDeleteCommunity(){
      return $this->_clear(3);
    }
    
    /**
     * Get <delete_community> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteCommunity(){
      return $this->_get(3);
    }
    
    /**
     * Set <delete_community> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
     */
    public function setDeleteCommunity(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <delete_community_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteCommunityNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <delete_community_null> value
     *
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
     */
    public function clearDeleteCommunityNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <delete_community_null> value
     *
     * @return boolean
     */
    public function getDeleteCommunityNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <delete_community_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_ModifyCommunities_Ad\Parameters
     */
    public function setDeleteCommunityNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

