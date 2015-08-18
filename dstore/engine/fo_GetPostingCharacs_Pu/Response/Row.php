<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_GetPostingCharacs_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\fo_GetPostingCharacs_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $field_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $posting_characteristic_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $precision_value = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $common_characteristic = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_length = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $predefined_values = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $check_posting_visibility = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $format = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $basic_field_type = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $field_type_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $basic_field_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $property_modification_allowed = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_number_of_properties = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_GetPostingCharacs_Pu.Response.Row');

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
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE posting_characteristic_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "posting_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precision_value = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "precision_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE common_characteristic = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "common_characteristic";
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

      // OPTIONAL MESSAGE predefined_values = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "predefined_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE check_posting_visibility = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "check_posting_visibility";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE format = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "format";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_field_type = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "basic_field_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_description = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "field_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_field_type_id = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "basic_field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE property_modification_allowed = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "property_modification_allowed";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_number_of_properties = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "max_number_of_properties";
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
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
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
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
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
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearCharacteristicDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <characteristic_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <characteristic_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setCharacteristicDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <field_type_id> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <field_type_id> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearFieldTypeId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <field_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFieldTypeId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <field_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setFieldTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <posting_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPostingCharacteristicId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <posting_characteristic_id> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearPostingCharacteristicId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <posting_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPostingCharacteristicId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <posting_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setPostingCharacteristicId(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
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
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setPrecisionValue(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <common_characteristic> has a value
     *
     * @return boolean
     */
    public function hasCommonCharacteristic(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <common_characteristic> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearCommonCharacteristic(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <common_characteristic> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCommonCharacteristic(){
      return $this->_get(10005);
    }
    
    /**
     * Set <common_characteristic> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setCommonCharacteristic(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
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
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setMaxLength(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <predefined_values> has a value
     *
     * @return boolean
     */
    public function hasPredefinedValues(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <predefined_values> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearPredefinedValues(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <predefined_values> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getPredefinedValues(){
      return $this->_get(10007);
    }
    
    /**
     * Set <predefined_values> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setPredefinedValues(\dstore\engine\values\booleanValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <check_posting_visibility> has a value
     *
     * @return boolean
     */
    public function hasCheckPostingVisibility(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <check_posting_visibility> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearCheckPostingVisibility(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <check_posting_visibility> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCheckPostingVisibility(){
      return $this->_get(10008);
    }
    
    /**
     * Set <check_posting_visibility> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setCheckPostingVisibility(\dstore\engine\values\booleanValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <format> has a value
     *
     * @return boolean
     */
    public function hasFormat(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <format> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearFormat(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <format> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFormat(){
      return $this->_get(10009);
    }
    
    /**
     * Set <format> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setFormat(\dstore\engine\values\stringValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <basic_field_type> has a value
     *
     * @return boolean
     */
    public function hasBasicFieldType(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <basic_field_type> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearBasicFieldType(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <basic_field_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getBasicFieldType(){
      return $this->_get(10010);
    }
    
    /**
     * Set <basic_field_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setBasicFieldType(\dstore\engine\values\stringValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <field_type_description> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeDescription(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <field_type_description> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearFieldTypeDescription(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <field_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFieldTypeDescription(){
      return $this->_get(10011);
    }
    
    /**
     * Set <field_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setFieldTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <basic_field_type_id> has a value
     *
     * @return boolean
     */
    public function hasBasicFieldTypeId(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <basic_field_type_id> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearBasicFieldTypeId(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <basic_field_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBasicFieldTypeId(){
      return $this->_get(10012);
    }
    
    /**
     * Set <basic_field_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setBasicFieldTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <property_modification_allowed> has a value
     *
     * @return boolean
     */
    public function hasPropertyModificationAllowed(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <property_modification_allowed> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearPropertyModificationAllowed(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <property_modification_allowed> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPropertyModificationAllowed(){
      return $this->_get(10013);
    }
    
    /**
     * Set <property_modification_allowed> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setPropertyModificationAllowed(\dstore\engine\values\integerValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <max_number_of_properties> has a value
     *
     * @return boolean
     */
    public function hasMaxNumberOfProperties(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <max_number_of_properties> value
     *
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function clearMaxNumberOfProperties(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <max_number_of_properties> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMaxNumberOfProperties(){
      return $this->_get(10014);
    }
    
    /**
     * Set <max_number_of_properties> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingCharacs_Pu\Response\Row
     */
    public function setMaxNumberOfProperties(\dstore\engine\values\integerValue $value){
      return $this->_set(10014, $value);
    }
  }
}
