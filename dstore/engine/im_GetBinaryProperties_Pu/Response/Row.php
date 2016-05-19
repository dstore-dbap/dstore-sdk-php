<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetBinaryProperties_Pu.proto
//   Date: 2016-05-19 08:07:42

namespace dstore\engine\im_GetBinaryProperties_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $characteristic_description = null;
    
    /**  @var \dstore\values\integerValue */
    public $binary_characteristic_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\values\integerValue */
    public $value_id = null;
    
    /**  @var \dstore\values\booleanValue */
    public $modify = null;
    
    /**  @var \dstore\values\booleanValue */
    public $predefined_values = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetBinaryProperties_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "characteristic_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_characteristic_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "binary_characteristic_id";
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

      // OPTIONAL MESSAGE value_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE modify = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "modify";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predefined_values = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "predefined_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
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
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
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
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <characteristic_description> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <characteristic_description> value
     *
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function clearCharacteristicDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <characteristic_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCharacteristicDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <characteristic_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function setCharacteristicDescription(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <binary_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryCharacteristicId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <binary_characteristic_id> value
     *
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function clearBinaryCharacteristicId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <binary_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBinaryCharacteristicId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <binary_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function setBinaryCharacteristicId(\dstore\values\integerValue $value){
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
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
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
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function setValue(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function clearValueId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getValueId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function setValueId(\dstore\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <modify> has a value
     *
     * @return boolean
     */
    public function hasModify(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <modify> value
     *
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function clearModify(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <modify> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getModify(){
      return $this->_get(10005);
    }
    
    /**
     * Set <modify> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function setModify(\dstore\values\booleanValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <predefined_values> has a value
     *
     * @return boolean
     */
    public function hasPredefinedValues(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <predefined_values> value
     *
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function clearPredefinedValues(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <predefined_values> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getPredefinedValues(){
      return $this->_get(10006);
    }
    
    /**
     * Set <predefined_values> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetBinaryProperties_Pu\Response\Row
     */
    public function setPredefinedValues(\dstore\values\booleanValue $value){
      return $this->_set(10006, $value);
    }
  }
}

