<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_ExportLogins_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_ExportLogins_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\booleanValue */
    public $include_special_user = null;
    
    /**  @var boolean */
    public $include_special_user_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_ExportLogins_Ad.Parameters');

      // OPTIONAL MESSAGE include_special_user = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "include_special_user";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_special_user_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "include_special_user_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <include_special_user> has a value
     *
     * @return boolean
     */
    public function hasIncludeSpecialUser(){
      return $this->_has(1);
    }
    
    /**
     * Clear <include_special_user> value
     *
     * @return \dstore\engine\mi_ExportLogins_Ad\Parameters
     */
    public function clearIncludeSpecialUser(){
      return $this->_clear(1);
    }
    
    /**
     * Get <include_special_user> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludeSpecialUser(){
      return $this->_get(1);
    }
    
    /**
     * Set <include_special_user> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ExportLogins_Ad\Parameters
     */
    public function setIncludeSpecialUser(\dstore\engine\values\booleanValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <include_special_user_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeSpecialUserNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <include_special_user_null> value
     *
     * @return \dstore\engine\mi_ExportLogins_Ad\Parameters
     */
    public function clearIncludeSpecialUserNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <include_special_user_null> value
     *
     * @return boolean
     */
    public function getIncludeSpecialUserNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <include_special_user_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ExportLogins_Ad\Parameters
     */
    public function setIncludeSpecialUserNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

