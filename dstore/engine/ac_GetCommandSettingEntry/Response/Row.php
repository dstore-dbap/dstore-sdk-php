<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/ac_GetCommandSettingEntry.proto
//   Date: 2016-05-19 08:07:39

namespace dstore\engine\ac_GetCommandSettingEntry\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.ac_GetCommandSettingEntry.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "value";
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
     * @return \dstore\engine\ac_GetCommandSettingEntry\Response\Row
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
     * @return \dstore\engine\ac_GetCommandSettingEntry\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\ac_GetCommandSettingEntry\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue(){
      return $this->_get(10001);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\ac_GetCommandSettingEntry\Response\Row
     */
    public function setValue(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
  }
}

