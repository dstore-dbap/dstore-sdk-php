<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetSettings_Ad.proto
//   Date: 2016-05-19 08:07:45

namespace dstore\engine\mi_GetSettings_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $user_name = null;
    
    /**  @var \dstore\values\integerValue */
    public $user_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\values\stringValue */
    public $key_variable = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetSettings_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE user_name = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "user_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE user_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_variable = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "key_variable";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
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
     * @return \dstore\engine\mi_GetSettings_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetSettings_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <user_name> has a value
     *
     * @return boolean
     */
    public function hasUserName(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <user_name> value
     *
     * @return \dstore\engine\mi_GetSettings_Ad\Response\Row
     */
    public function clearUserName(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <user_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUserName(){
      return $this->_get(10001);
    }
    
    /**
     * Set <user_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetSettings_Ad\Response\Row
     */
    public function setUserName(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <user_id> has a value
     *
     * @return boolean
     */
    public function hasUserId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <user_id> value
     *
     * @return \dstore\engine\mi_GetSettings_Ad\Response\Row
     */
    public function clearUserId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <user_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getUserId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <user_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetSettings_Ad\Response\Row
     */
    public function setUserId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\mi_GetSettings_Ad\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue(){
      return $this->_get(10003);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetSettings_Ad\Response\Row
     */
    public function setValue(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <key_variable> has a value
     *
     * @return boolean
     */
    public function hasKeyVariable(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <key_variable> value
     *
     * @return \dstore\engine\mi_GetSettings_Ad\Response\Row
     */
    public function clearKeyVariable(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <key_variable> value
     *
     * @return \dstore\values\stringValue
     */
    public function getKeyVariable(){
      return $this->_get(10004);
    }
    
    /**
     * Set <key_variable> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetSettings_Ad\Response\Row
     */
    public function setKeyVariable(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
  }
}

