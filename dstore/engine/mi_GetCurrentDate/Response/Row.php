<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetCurrentDate.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetCurrentDate\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $current_date_char = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $timestamp = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $current_date = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetCurrentDate.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE current_date_char = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "current_date_char";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE timestamp = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "timestamp";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE current_date = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "current_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
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
     * @return \dstore\engine\mi_GetCurrentDate\Response\Row
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
     * @return \dstore\engine\mi_GetCurrentDate\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <current_date_char> has a value
     *
     * @return boolean
     */
    public function hasCurrentDateChar(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <current_date_char> value
     *
     * @return \dstore\engine\mi_GetCurrentDate\Response\Row
     */
    public function clearCurrentDateChar(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <current_date_char> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCurrentDateChar(){
      return $this->_get(10001);
    }
    
    /**
     * Set <current_date_char> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentDate\Response\Row
     */
    public function setCurrentDateChar(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <timestamp> has a value
     *
     * @return boolean
     */
    public function hasTimestamp(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <timestamp> value
     *
     * @return \dstore\engine\mi_GetCurrentDate\Response\Row
     */
    public function clearTimestamp(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <timestamp> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getTimestamp(){
      return $this->_get(10002);
    }
    
    /**
     * Set <timestamp> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\mi_GetCurrentDate\Response\Row
     */
    public function setTimestamp(\dstore\engine\values\decimalValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <current_date> has a value
     *
     * @return boolean
     */
    public function hasCurrentDate(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <current_date> value
     *
     * @return \dstore\engine\mi_GetCurrentDate\Response\Row
     */
    public function clearCurrentDate(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <current_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getCurrentDate(){
      return $this->_get(10003);
    }
    
    /**
     * Set <current_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\mi_GetCurrentDate\Response\Row
     */
    public function setCurrentDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(10003, $value);
    }
  }
}
