<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetFieldTypes_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetFieldTypes_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $field_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $basic_field_type = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $field_type_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $precision_value = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $basic_field_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_length = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetFieldTypes_Ad.Response.Row');

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

      // OPTIONAL MESSAGE basic_field_type = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "basic_field_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_description = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "field_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precision_value = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "precision_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_field_type_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "basic_field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_length = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "max_length";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
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
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function setFieldTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <basic_field_type> has a value
     *
     * @return boolean
     */
    public function hasBasicFieldType(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <basic_field_type> value
     *
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function clearBasicFieldType(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <basic_field_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getBasicFieldType(){
      return $this->_get(10002);
    }
    
    /**
     * Set <basic_field_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function setBasicFieldType(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <field_type_description> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeDescription(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <field_type_description> value
     *
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function clearFieldTypeDescription(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <field_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFieldTypeDescription(){
      return $this->_get(10003);
    }
    
    /**
     * Set <field_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function setFieldTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <precision_value> has a value
     *
     * @return boolean
     */
    public function hasPrecisionValue(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <precision_value> value
     *
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function clearPrecisionValue(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <precision_value> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPrecisionValue(){
      return $this->_get(10004);
    }
    
    /**
     * Set <precision_value> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function setPrecisionValue(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <basic_field_type_id> has a value
     *
     * @return boolean
     */
    public function hasBasicFieldTypeId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <basic_field_type_id> value
     *
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function clearBasicFieldTypeId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <basic_field_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBasicFieldTypeId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <basic_field_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function setBasicFieldTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <max_length> has a value
     *
     * @return boolean
     */
    public function hasMaxLength(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <max_length> value
     *
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function clearMaxLength(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <max_length> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMaxLength(){
      return $this->_get(10006);
    }
    
    /**
     * Set <max_length> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetFieldTypes_Ad\Response\Row
     */
    public function setMaxLength(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
  }
}

