<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_GetForumAccessMatrix_Ad.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\fo_GetForumAccessMatrix_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $forum_id = null;
    
    /**  @var boolean */
    public $forum_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $check_person_access = null;
    
    /**  @var boolean */
    public $check_person_access_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $group_or_person_id = null;
    
    /**  @var boolean */
    public $group_or_person_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_GetForumAccessMatrix_Ad.Parameters');

      // OPTIONAL MESSAGE forum_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "forum_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL forum_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "forum_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE check_person_access = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "check_person_access";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL check_person_access_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "check_person_access_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE group_or_person_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "group_or_person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL group_or_person_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "group_or_person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <forum_id> has a value
     *
     * @return boolean
     */
    public function hasForumId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <forum_id> value
     *
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function clearForumId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <forum_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getForumId(){
      return $this->_get(1);
    }
    
    /**
     * Set <forum_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function setForumId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <forum_id_null> has a value
     *
     * @return boolean
     */
    public function hasForumIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <forum_id_null> value
     *
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function clearForumIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <forum_id_null> value
     *
     * @return boolean
     */
    public function getForumIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <forum_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function setForumIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <check_person_access> has a value
     *
     * @return boolean
     */
    public function hasCheckPersonAccess(){
      return $this->_has(2);
    }
    
    /**
     * Clear <check_person_access> value
     *
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function clearCheckPersonAccess(){
      return $this->_clear(2);
    }
    
    /**
     * Get <check_person_access> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getCheckPersonAccess(){
      return $this->_get(2);
    }
    
    /**
     * Set <check_person_access> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function setCheckPersonAccess(\dstore\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <check_person_access_null> has a value
     *
     * @return boolean
     */
    public function hasCheckPersonAccessNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <check_person_access_null> value
     *
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function clearCheckPersonAccessNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <check_person_access_null> value
     *
     * @return boolean
     */
    public function getCheckPersonAccessNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <check_person_access_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function setCheckPersonAccessNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <group_or_person_id> has a value
     *
     * @return boolean
     */
    public function hasGroupOrPersonId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <group_or_person_id> value
     *
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function clearGroupOrPersonId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <group_or_person_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getGroupOrPersonId(){
      return $this->_get(3);
    }
    
    /**
     * Set <group_or_person_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function setGroupOrPersonId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <group_or_person_id_null> has a value
     *
     * @return boolean
     */
    public function hasGroupOrPersonIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <group_or_person_id_null> value
     *
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function clearGroupOrPersonIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <group_or_person_id_null> value
     *
     * @return boolean
     */
    public function getGroupOrPersonIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <group_or_person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumAccessMatrix_Ad\Parameters
     */
    public function setGroupOrPersonIdNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

