<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetNodeSymbols_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetNodeSymbols_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $symbol_id = null;
    
    /**  @var boolean */
    public $symbol_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetNodeSymbols_Ad.Parameters');

      // OPTIONAL MESSAGE symbol_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "symbol_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL symbol_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "symbol_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <symbol_id> has a value
     *
     * @return boolean
     */
    public function hasSymbolId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <symbol_id> value
     *
     * @return \dstore\engine\im_GetNodeSymbols_Ad\Parameters
     */
    public function clearSymbolId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <symbol_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSymbolId(){
      return $this->_get(1);
    }
    
    /**
     * Set <symbol_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetNodeSymbols_Ad\Parameters
     */
    public function setSymbolId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <symbol_id_null> has a value
     *
     * @return boolean
     */
    public function hasSymbolIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <symbol_id_null> value
     *
     * @return \dstore\engine\im_GetNodeSymbols_Ad\Parameters
     */
    public function clearSymbolIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <symbol_id_null> value
     *
     * @return boolean
     */
    public function getSymbolIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <symbol_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeSymbols_Ad\Parameters
     */
    public function setSymbolIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

