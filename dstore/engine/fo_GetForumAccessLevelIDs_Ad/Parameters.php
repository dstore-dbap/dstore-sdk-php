<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_GetForumAccessLevelIDs_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\fo_GetForumAccessLevelIDs_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $person_or_group_id = null;
    
    /**  @var boolean */
    public $person_or_group_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $forum_id = null;
    
    /**  @var boolean */
    public $forum_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $is_person_id = null;
    
    /**  @var boolean */
    public $is_person_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_GetForumAccessLevelIDs_Ad.Parameters');

      // OPTIONAL MESSAGE person_or_group_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_or_group_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_or_group_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_or_group_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE forum_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "forum_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL forum_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "forum_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_person_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "is_person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL is_person_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "is_person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_or_group_id> has a value
     *
     * @return boolean
     */
    public function hasPersonOrGroupId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_or_group_id> value
     *
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function clearPersonOrGroupId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_or_group_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonOrGroupId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_or_group_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function setPersonOrGroupId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_or_group_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonOrGroupIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_or_group_id_null> value
     *
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function clearPersonOrGroupIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_or_group_id_null> value
     *
     * @return boolean
     */
    public function getPersonOrGroupIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_or_group_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function setPersonOrGroupIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <forum_id> has a value
     *
     * @return boolean
     */
    public function hasForumId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <forum_id> value
     *
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function clearForumId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <forum_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getForumId(){
      return $this->_get(2);
    }
    
    /**
     * Set <forum_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function setForumId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <forum_id_null> has a value
     *
     * @return boolean
     */
    public function hasForumIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <forum_id_null> value
     *
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function clearForumIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <forum_id_null> value
     *
     * @return boolean
     */
    public function getForumIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <forum_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function setForumIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <is_person_id> has a value
     *
     * @return boolean
     */
    public function hasIsPersonId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <is_person_id> value
     *
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function clearIsPersonId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <is_person_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIsPersonId(){
      return $this->_get(3);
    }
    
    /**
     * Set <is_person_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function setIsPersonId(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <is_person_id_null> has a value
     *
     * @return boolean
     */
    public function hasIsPersonIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <is_person_id_null> value
     *
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function clearIsPersonIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <is_person_id_null> value
     *
     * @return boolean
     */
    public function getIsPersonIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <is_person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumAccessLevelIDs_Ad\Parameters
     */
    public function setIsPersonIdNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

