<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_CheckFieldTypeOfValues_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $field_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $error_code = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $altered_value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_CheckFieldTypeOfValues_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE error_code = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "error_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE altered_value = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "altered_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
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
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response\Row
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
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <field_type_id> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <field_type_id> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response\Row
     */
    public function clearFieldTypeId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <field_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFieldTypeId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <field_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response\Row
     */
    public function setFieldTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(10002);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response\Row
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <error_code> has a value
     *
     * @return boolean
     */
    public function hasErrorCode(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <error_code> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response\Row
     */
    public function clearErrorCode(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <error_code> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getErrorCode(){
      return $this->_get(10003);
    }
    
    /**
     * Set <error_code> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response\Row
     */
    public function setErrorCode(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <altered_value> has a value
     *
     * @return boolean
     */
    public function hasAlteredValue(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <altered_value> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response\Row
     */
    public function clearAlteredValue(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <altered_value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getAlteredValue(){
      return $this->_get(10004);
    }
    
    /**
     * Set <altered_value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Response\Row
     */
    public function setAlteredValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
  }
}
