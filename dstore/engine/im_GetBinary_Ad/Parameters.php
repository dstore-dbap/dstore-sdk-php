<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetBinary_Ad.proto
//   Date: 2016-05-19 08:07:42

namespace dstore\engine\im_GetBinary_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $binary_code_id = null;
    
    /**  @var boolean */
    public $binary_code_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetBinary_Ad.Parameters');

      // OPTIONAL MESSAGE binary_code_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "binary_code_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL binary_code_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "binary_code_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <binary_code_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryCodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <binary_code_id> value
     *
     * @return \dstore\engine\im_GetBinary_Ad\Parameters
     */
    public function clearBinaryCodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <binary_code_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBinaryCodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <binary_code_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetBinary_Ad\Parameters
     */
    public function setBinaryCodeId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <binary_code_id_null> has a value
     *
     * @return boolean
     */
    public function hasBinaryCodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <binary_code_id_null> value
     *
     * @return \dstore\engine\im_GetBinary_Ad\Parameters
     */
    public function clearBinaryCodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <binary_code_id_null> value
     *
     * @return boolean
     */
    public function getBinaryCodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <binary_code_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetBinary_Ad\Parameters
     */
    public function setBinaryCodeIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

