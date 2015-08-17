<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonProperties_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetPersonProperties_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value_restricted_by_pattern = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $actual_value_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $field_type_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $details_exist = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $characteristic_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $value_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $modify = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_no = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_length = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $required__charac_category = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $predefined_values = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_charac_category_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $read_access_restriction_pattern = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $required = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $actual_value = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $visible = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $last_edited = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $category_description = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $person_type_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonProperties_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_restricted_by_pattern = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "value_restricted_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE actual_value_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "actual_value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_description = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "characteristic_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE details_exist = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "details_exist";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_id = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE modify = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "modify";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_length = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "max_length";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE required__charac_category = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "required__charac_category";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predefined_values = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "predefined_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_charac_category_id = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "person_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE read_access_restriction_pattern = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "read_access_restriction_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 10015
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10015;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE required = 10016
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10016;
      $f->name      = "required";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE actual_value = 10017
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10017;
      $f->name      = "actual_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10018
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10018;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visible = 10019
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10019;
      $f->name      = "visible";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE last_edited = 10020
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10020;
      $f->name      = "last_edited";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE category_description = 10021
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10021;
      $f->name      = "category_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_description = 20001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20001;
      $f->name      = "person_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 20003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20003;
      $f->name      = "person_type_id";
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
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
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
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <value_restricted_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasValueRestrictedByPattern(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <value_restricted_by_pattern> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearValueRestrictedByPattern(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <value_restricted_by_pattern> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValueRestrictedByPattern(){
      return $this->_get(10001);
    }
    
    /**
     * Set <value_restricted_by_pattern> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setValueRestrictedByPattern(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <actual_value_id> has a value
     *
     * @return boolean
     */
    public function hasActualValueId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <actual_value_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearActualValueId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <actual_value_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getActualValueId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <actual_value_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setActualValueId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <characteristic_description> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicDescription(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <characteristic_description> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearCharacteristicDescription(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <characteristic_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicDescription(){
      return $this->_get(10003);
    }
    
    /**
     * Set <characteristic_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setCharacteristicDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <field_type_id> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <field_type_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearFieldTypeId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <field_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFieldTypeId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <field_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setFieldTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <details_exist> has a value
     *
     * @return boolean
     */
    public function hasDetailsExist(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <details_exist> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearDetailsExist(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <details_exist> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDetailsExist(){
      return $this->_get(10005);
    }
    
    /**
     * Set <details_exist> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setDetailsExist(\dstore\engine\values\booleanValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <characteristic_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearCharacteristicId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCharacteristicId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearValueId(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValueId(){
      return $this->_get(10007);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setValueId(\dstore\engine\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <modify> has a value
     *
     * @return boolean
     */
    public function hasModify(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <modify> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearModify(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <modify> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getModify(){
      return $this->_get(10008);
    }
    
    /**
     * Set <modify> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setModify(\dstore\engine\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearSortNo(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(10009);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <max_length> has a value
     *
     * @return boolean
     */
    public function hasMaxLength(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <max_length> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearMaxLength(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <max_length> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMaxLength(){
      return $this->_get(10010);
    }
    
    /**
     * Set <max_length> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setMaxLength(\dstore\engine\values\integerValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <required__charac_category> has a value
     *
     * @return boolean
     */
    public function hasRequired_CharacCategory(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <required__charac_category> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearRequired_CharacCategory(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <required__charac_category> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getRequired_CharacCategory(){
      return $this->_get(10011);
    }
    
    /**
     * Set <required__charac_category> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setRequired_CharacCategory(\dstore\engine\values\booleanValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <predefined_values> has a value
     *
     * @return boolean
     */
    public function hasPredefinedValues(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <predefined_values> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearPredefinedValues(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <predefined_values> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getPredefinedValues(){
      return $this->_get(10012);
    }
    
    /**
     * Set <predefined_values> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setPredefinedValues(\dstore\engine\values\booleanValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <person_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryId(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <person_charac_category_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearPersonCharacCategoryId(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <person_charac_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacCategoryId(){
      return $this->_get(10013);
    }
    
    /**
     * Set <person_charac_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setPersonCharacCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <read_access_restriction_pattern> has a value
     *
     * @return boolean
     */
    public function hasReadAccessRestrictionPattern(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <read_access_restriction_pattern> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearReadAccessRestrictionPattern(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <read_access_restriction_pattern> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getReadAccessRestrictionPattern(){
      return $this->_get(10014);
    }
    
    /**
     * Set <read_access_restriction_pattern> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setReadAccessRestrictionPattern(\dstore\engine\values\stringValue $value){
      return $this->_set(10014, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(10015);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearPersonId(){
      return $this->_clear(10015);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(10015);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(10015, $value);
    }
    
    /**
     * Check if <required> has a value
     *
     * @return boolean
     */
    public function hasRequired(){
      return $this->_has(10016);
    }
    
    /**
     * Clear <required> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearRequired(){
      return $this->_clear(10016);
    }
    
    /**
     * Get <required> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getRequired(){
      return $this->_get(10016);
    }
    
    /**
     * Set <required> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setRequired(\dstore\engine\values\booleanValue $value){
      return $this->_set(10016, $value);
    }
    
    /**
     * Check if <actual_value> has a value
     *
     * @return boolean
     */
    public function hasActualValue(){
      return $this->_has(10017);
    }
    
    /**
     * Clear <actual_value> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearActualValue(){
      return $this->_clear(10017);
    }
    
    /**
     * Get <actual_value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getActualValue(){
      return $this->_get(10017);
    }
    
    /**
     * Set <actual_value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setActualValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10017, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10018);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10018);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(10018);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10018, $value);
    }
    
    /**
     * Check if <visible> has a value
     *
     * @return boolean
     */
    public function hasVisible(){
      return $this->_has(10019);
    }
    
    /**
     * Clear <visible> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearVisible(){
      return $this->_clear(10019);
    }
    
    /**
     * Get <visible> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getVisible(){
      return $this->_get(10019);
    }
    
    /**
     * Set <visible> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setVisible(\dstore\engine\values\booleanValue $value){
      return $this->_set(10019, $value);
    }
    
    /**
     * Check if <last_edited> has a value
     *
     * @return boolean
     */
    public function hasLastEdited(){
      return $this->_has(10020);
    }
    
    /**
     * Clear <last_edited> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearLastEdited(){
      return $this->_clear(10020);
    }
    
    /**
     * Get <last_edited> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getLastEdited(){
      return $this->_get(10020);
    }
    
    /**
     * Set <last_edited> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setLastEdited(\dstore\engine\values\timestampValue $value){
      return $this->_set(10020, $value);
    }
    
    /**
     * Check if <category_description> has a value
     *
     * @return boolean
     */
    public function hasCategoryDescription(){
      return $this->_has(10021);
    }
    
    /**
     * Clear <category_description> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearCategoryDescription(){
      return $this->_clear(10021);
    }
    
    /**
     * Get <category_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCategoryDescription(){
      return $this->_get(10021);
    }
    
    /**
     * Set <category_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setCategoryDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10021, $value);
    }
    
    /**
     * Check if <person_type_description> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeDescription(){
      return $this->_has(20001);
    }
    
    /**
     * Clear <person_type_description> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearPersonTypeDescription(){
      return $this->_clear(20001);
    }
    
    /**
     * Get <person_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPersonTypeDescription(){
      return $this->_get(20001);
    }
    
    /**
     * Set <person_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setPersonTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(20001, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(20003);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function clearPersonTypeId(){
      return $this->_clear(20003);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(20003);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Response\Row
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(20003, $value);
    }
  }
}

