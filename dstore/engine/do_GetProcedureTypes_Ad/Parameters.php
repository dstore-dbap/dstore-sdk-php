<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetProcedureTypes_Ad.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\do_GetProcedureTypes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetProcedureTypes_Ad.Parameters');

      // OPTIONAL MESSAGE language_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\do_GetProcedureTypes_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(1);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureTypes_Ad\Parameters
     */
    public function setLanguageId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\do_GetProcedureTypes_Ad\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetProcedureTypes_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

