<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetUnits_Ad.proto
//   Date: 2016-05-19 08:07:46

namespace dstore\engine\mi_GetUnits_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $active = null;
    
    /**  @var \dstore\values\integerValue */
    public $unit_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $unit_symbol = null;
    
    /**  @var \dstore\values\stringValue */
    public $unit_description = null;
    
    /**  @var \dstore\values\integerValue */
    public $unit_category_id = null;
    
    /**  @var \dstore\values\booleanValue */
    public $triangle_convert = null;
    
    /**  @var \dstore\values\stringValue */
    public $unit_category_description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetUnits_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE active = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "unit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_symbol = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "unit_symbol";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_description = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "unit_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_category_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "unit_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE triangle_convert = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "triangle_convert";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_category_description = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "unit_category_description";
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
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <active> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function clearActive(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <active> value
     *
     * @return \dstore\values\integerValue
     */
    public function getActive(){
      return $this->_get(10001);
    }
    
    /**
     * Set <active> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function setActive(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <unit_id> has a value
     *
     * @return boolean
     */
    public function hasUnitId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <unit_id> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function clearUnitId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <unit_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getUnitId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <unit_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function setUnitId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <unit_symbol> has a value
     *
     * @return boolean
     */
    public function hasUnitSymbol(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <unit_symbol> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function clearUnitSymbol(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <unit_symbol> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUnitSymbol(){
      return $this->_get(10003);
    }
    
    /**
     * Set <unit_symbol> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function setUnitSymbol(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <unit_description> has a value
     *
     * @return boolean
     */
    public function hasUnitDescription(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <unit_description> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function clearUnitDescription(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <unit_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUnitDescription(){
      return $this->_get(10004);
    }
    
    /**
     * Set <unit_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function setUnitDescription(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <unit_category_id> has a value
     *
     * @return boolean
     */
    public function hasUnitCategoryId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <unit_category_id> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function clearUnitCategoryId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <unit_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getUnitCategoryId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <unit_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function setUnitCategoryId(\dstore\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <triangle_convert> has a value
     *
     * @return boolean
     */
    public function hasTriangleConvert(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <triangle_convert> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function clearTriangleConvert(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <triangle_convert> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getTriangleConvert(){
      return $this->_get(10006);
    }
    
    /**
     * Set <triangle_convert> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function setTriangleConvert(\dstore\values\booleanValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <unit_category_description> has a value
     *
     * @return boolean
     */
    public function hasUnitCategoryDescription(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <unit_category_description> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function clearUnitCategoryDescription(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <unit_category_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUnitCategoryDescription(){
      return $this->_get(10007);
    }
    
    /**
     * Set <unit_category_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetUnits_Ad\Response\Row
     */
    public function setUnitCategoryDescription(\dstore\values\stringValue $value){
      return $this->_set(10007, $value);
    }
  }
}

