<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_DeleteNodeCharacValue_Ad.proto
//   Date: 2016-05-19 08:07:41

namespace dstore\engine\im_DeleteNodeCharacValue_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $value_id = null;
    
    /**  @var boolean */
    public $value_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_DeleteNodeCharacValue_Ad.Parameters');

      // OPTIONAL MESSAGE value_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "value_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\im_DeleteNodeCharacValue_Ad\Parameters
     */
    public function clearValueId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getValueId(){
      return $this->_get(1);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_DeleteNodeCharacValue_Ad\Parameters
     */
    public function setValueId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value_id_null> has a value
     *
     * @return boolean
     */
    public function hasValueIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <value_id_null> value
     *
     * @return \dstore\engine\im_DeleteNodeCharacValue_Ad\Parameters
     */
    public function clearValueIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <value_id_null> value
     *
     * @return boolean
     */
    public function getValueIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <value_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_DeleteNodeCharacValue_Ad\Parameters
     */
    public function setValueIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

