<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonAccessCharacs_Pu.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetPersonAccessCharacs_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $precision_value = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $modify = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_length = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_no = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $predefined_values = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $read_access_restriction_pattern = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $format = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $required = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $basic_field_type = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $visible = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $basic_field_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonAccessCharacs_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precision_value = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "precision_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE modify = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "modify";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_length = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "max_length";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predefined_values = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "predefined_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE read_access_restriction_pattern = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "read_access_restriction_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE format = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "format";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE required = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "required";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_field_type = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "basic_field_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visible = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "visible";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_field_type_id = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "basic_field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE id = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "language_id";
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
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
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
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <description> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <precision_value> has a value
     *
     * @return boolean
     */
    public function hasPrecisionValue(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <precision_value> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearPrecisionValue(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <precision_value> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPrecisionValue(){
      return $this->_get(10002);
    }
    
    /**
     * Set <precision_value> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setPrecisionValue(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <modify> has a value
     *
     * @return boolean
     */
    public function hasModify(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <modify> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearModify(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <modify> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getModify(){
      return $this->_get(10003);
    }
    
    /**
     * Set <modify> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setModify(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <max_length> has a value
     *
     * @return boolean
     */
    public function hasMaxLength(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <max_length> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearMaxLength(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <max_length> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMaxLength(){
      return $this->_get(10004);
    }
    
    /**
     * Set <max_length> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setMaxLength(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearSortNo(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(10005);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setSortNo(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearPredefinedValues(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <predefined_values> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getPredefinedValues(){
      return $this->_get(10006);
    }
    
    /**
     * Set <predefined_values> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setPredefinedValues(\dstore\engine\values\booleanValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <read_access_restriction_pattern> has a value
     *
     * @return boolean
     */
    public function hasReadAccessRestrictionPattern(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <read_access_restriction_pattern> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearReadAccessRestrictionPattern(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <read_access_restriction_pattern> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getReadAccessRestrictionPattern(){
      return $this->_get(10007);
    }
    
    /**
     * Set <read_access_restriction_pattern> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setReadAccessRestrictionPattern(\dstore\engine\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <format> has a value
     *
     * @return boolean
     */
    public function hasFormat(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <format> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearFormat(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <format> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFormat(){
      return $this->_get(10008);
    }
    
    /**
     * Set <format> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setFormat(\dstore\engine\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <required> has a value
     *
     * @return boolean
     */
    public function hasRequired(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <required> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearRequired(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <required> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getRequired(){
      return $this->_get(10009);
    }
    
    /**
     * Set <required> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setRequired(\dstore\engine\values\booleanValue $value){
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
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
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
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setBasicFieldType(\dstore\engine\values\stringValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <visible> has a value
     *
     * @return boolean
     */
    public function hasVisible(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <visible> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearVisible(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <visible> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getVisible(){
      return $this->_get(10011);
    }
    
    /**
     * Set <visible> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setVisible(\dstore\engine\values\booleanValue $value){
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
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
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
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setBasicFieldTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <id> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearId(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getId(){
      return $this->_get(10013);
    }
    
    /**
     * Set <id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setId(\dstore\engine\values\integerValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function clearLanguageId(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(10014);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonAccessCharacs_Pu\Response\Row
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(10014, $value);
    }
  }
}
