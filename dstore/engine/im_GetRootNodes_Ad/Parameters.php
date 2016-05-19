<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetRootNodes_Ad.proto
//   Date: 2016-05-19 08:07:42

namespace dstore\engine\im_GetRootNodes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\booleanValue */
    public $only_active = null;
    
    /**  @var boolean */
    public $only_active_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $only_not_deleted = null;
    
    /**  @var boolean */
    public $only_not_deleted_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetRootNodes_Ad.Parameters');

      // OPTIONAL MESSAGE only_active = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "only_active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_active_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "only_active_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_not_deleted = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "only_not_deleted";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_not_deleted_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "only_not_deleted_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <only_active> has a value
     *
     * @return boolean
     */
    public function hasOnlyActive(){
      return $this->_has(1);
    }
    
    /**
     * Clear <only_active> value
     *
     * @return \dstore\engine\im_GetRootNodes_Ad\Parameters
     */
    public function clearOnlyActive(){
      return $this->_clear(1);
    }
    
    /**
     * Get <only_active> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getOnlyActive(){
      return $this->_get(1);
    }
    
    /**
     * Set <only_active> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetRootNodes_Ad\Parameters
     */
    public function setOnlyActive(\dstore\values\booleanValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <only_active_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyActiveNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <only_active_null> value
     *
     * @return \dstore\engine\im_GetRootNodes_Ad\Parameters
     */
    public function clearOnlyActiveNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <only_active_null> value
     *
     * @return boolean
     */
    public function getOnlyActiveNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <only_active_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetRootNodes_Ad\Parameters
     */
    public function setOnlyActiveNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <only_not_deleted> has a value
     *
     * @return boolean
     */
    public function hasOnlyNotDeleted(){
      return $this->_has(2);
    }
    
    /**
     * Clear <only_not_deleted> value
     *
     * @return \dstore\engine\im_GetRootNodes_Ad\Parameters
     */
    public function clearOnlyNotDeleted(){
      return $this->_clear(2);
    }
    
    /**
     * Get <only_not_deleted> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getOnlyNotDeleted(){
      return $this->_get(2);
    }
    
    /**
     * Set <only_not_deleted> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetRootNodes_Ad\Parameters
     */
    public function setOnlyNotDeleted(\dstore\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <only_not_deleted_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyNotDeletedNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <only_not_deleted_null> value
     *
     * @return \dstore\engine\im_GetRootNodes_Ad\Parameters
     */
    public function clearOnlyNotDeletedNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <only_not_deleted_null> value
     *
     * @return boolean
     */
    public function getOnlyNotDeletedNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <only_not_deleted_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetRootNodes_Ad\Parameters
     */
    public function setOnlyNotDeletedNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

