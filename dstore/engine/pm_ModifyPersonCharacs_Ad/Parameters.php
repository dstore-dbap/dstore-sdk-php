<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_ModifyPersonCharacs_Ad.proto
//   Date: 2016-05-19 08:07:55

namespace dstore\engine\pm_ModifyPersonCharacs_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $person_characteristic_id = null;
    
    /**  @var boolean */
    public $person_characteristic_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $characteristic_description = null;
    
    /**  @var boolean */
    public $characteristic_description_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $field_type_id = null;
    
    /**  @var boolean */
    public $field_type_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $sort_no = null;
    
    /**  @var boolean */
    public $sort_no_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $required = null;
    
    /**  @var boolean */
    public $required_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $visible = null;
    
    /**  @var boolean */
    public $visible_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $modify = null;
    
    /**  @var boolean */
    public $modify_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $predefined_values = null;
    
    /**  @var boolean */
    public $predefined_values_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $is_unique = null;
    
    /**  @var boolean */
    public $is_unique_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete_characteristic = null;
    
    /**  @var boolean */
    public $delete_characteristic_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $description_for_admin = null;
    
    /**  @var boolean */
    public $description_for_admin_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_ModifyPersonCharacs_Ad.Parameters');

      // OPTIONAL MESSAGE person_characteristic_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_characteristic_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_description = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "characteristic_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_description_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "characteristic_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL field_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "field_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_no_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "sort_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE required = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "required";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL required_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "required_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visible = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "visible";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL visible_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "visible_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE modify = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "modify";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL modify_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "modify_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predefined_values = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "predefined_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL predefined_values_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "predefined_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_unique = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "is_unique";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL is_unique_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "is_unique_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_characteristic = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "delete_characteristic";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_characteristic_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "delete_characteristic_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description_for_admin = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "description_for_admin";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL description_for_admin_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "description_for_admin_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_characteristic_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearPersonCharacteristicId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonCharacteristicId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setPersonCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearPersonCharacteristicIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacteristicIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setPersonCharacteristicIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <characteristic_description> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicDescription(){
      return $this->_has(2);
    }
    
    /**
     * Clear <characteristic_description> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearCharacteristicDescription(){
      return $this->_clear(2);
    }
    
    /**
     * Get <characteristic_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCharacteristicDescription(){
      return $this->_get(2);
    }
    
    /**
     * Set <characteristic_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setCharacteristicDescription(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <characteristic_description_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicDescriptionNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <characteristic_description_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearCharacteristicDescriptionNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <characteristic_description_null> value
     *
     * @return boolean
     */
    public function getCharacteristicDescriptionNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <characteristic_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setCharacteristicDescriptionNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <field_type_id> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <field_type_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearFieldTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <field_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getFieldTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <field_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setFieldTypeId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <field_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <field_type_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearFieldTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <field_type_id_null> value
     *
     * @return boolean
     */
    public function getFieldTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <field_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setFieldTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearSortNo(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(4);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setSortNo(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <sort_no_null> has a value
     *
     * @return boolean
     */
    public function hasSortNoNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <sort_no_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearSortNoNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <sort_no_null> value
     *
     * @return boolean
     */
    public function getSortNoNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <sort_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setSortNoNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <required> has a value
     *
     * @return boolean
     */
    public function hasRequired(){
      return $this->_has(5);
    }
    
    /**
     * Clear <required> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearRequired(){
      return $this->_clear(5);
    }
    
    /**
     * Get <required> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getRequired(){
      return $this->_get(5);
    }
    
    /**
     * Set <required> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setRequired(\dstore\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <required_null> has a value
     *
     * @return boolean
     */
    public function hasRequiredNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <required_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearRequiredNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <required_null> value
     *
     * @return boolean
     */
    public function getRequiredNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <required_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setRequiredNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <visible> has a value
     *
     * @return boolean
     */
    public function hasVisible(){
      return $this->_has(6);
    }
    
    /**
     * Clear <visible> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearVisible(){
      return $this->_clear(6);
    }
    
    /**
     * Get <visible> value
     *
     * @return \dstore\values\integerValue
     */
    public function getVisible(){
      return $this->_get(6);
    }
    
    /**
     * Set <visible> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setVisible(\dstore\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <visible_null> has a value
     *
     * @return boolean
     */
    public function hasVisibleNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <visible_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearVisibleNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <visible_null> value
     *
     * @return boolean
     */
    public function getVisibleNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <visible_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setVisibleNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <modify> has a value
     *
     * @return boolean
     */
    public function hasModify(){
      return $this->_has(7);
    }
    
    /**
     * Clear <modify> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearModify(){
      return $this->_clear(7);
    }
    
    /**
     * Get <modify> value
     *
     * @return \dstore\values\integerValue
     */
    public function getModify(){
      return $this->_get(7);
    }
    
    /**
     * Set <modify> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setModify(\dstore\values\integerValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <modify_null> has a value
     *
     * @return boolean
     */
    public function hasModifyNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <modify_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearModifyNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <modify_null> value
     *
     * @return boolean
     */
    public function getModifyNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <modify_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setModifyNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <predefined_values> has a value
     *
     * @return boolean
     */
    public function hasPredefinedValues(){
      return $this->_has(8);
    }
    
    /**
     * Clear <predefined_values> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearPredefinedValues(){
      return $this->_clear(8);
    }
    
    /**
     * Get <predefined_values> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getPredefinedValues(){
      return $this->_get(8);
    }
    
    /**
     * Set <predefined_values> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setPredefinedValues(\dstore\values\booleanValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <predefined_values_null> has a value
     *
     * @return boolean
     */
    public function hasPredefinedValuesNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <predefined_values_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearPredefinedValuesNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <predefined_values_null> value
     *
     * @return boolean
     */
    public function getPredefinedValuesNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <predefined_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setPredefinedValuesNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <is_unique> has a value
     *
     * @return boolean
     */
    public function hasIsUnique(){
      return $this->_has(9);
    }
    
    /**
     * Clear <is_unique> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearIsUnique(){
      return $this->_clear(9);
    }
    
    /**
     * Get <is_unique> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getIsUnique(){
      return $this->_get(9);
    }
    
    /**
     * Set <is_unique> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setIsUnique(\dstore\values\booleanValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <is_unique_null> has a value
     *
     * @return boolean
     */
    public function hasIsUniqueNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <is_unique_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearIsUniqueNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <is_unique_null> value
     *
     * @return boolean
     */
    public function getIsUniqueNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <is_unique_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setIsUniqueNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <delete_characteristic> has a value
     *
     * @return boolean
     */
    public function hasDeleteCharacteristic(){
      return $this->_has(10);
    }
    
    /**
     * Clear <delete_characteristic> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearDeleteCharacteristic(){
      return $this->_clear(10);
    }
    
    /**
     * Get <delete_characteristic> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDeleteCharacteristic(){
      return $this->_get(10);
    }
    
    /**
     * Set <delete_characteristic> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setDeleteCharacteristic(\dstore\values\booleanValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <delete_characteristic_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteCharacteristicNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <delete_characteristic_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearDeleteCharacteristicNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <delete_characteristic_null> value
     *
     * @return boolean
     */
    public function getDeleteCharacteristicNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <delete_characteristic_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setDeleteCharacteristicNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <description_for_admin> has a value
     *
     * @return boolean
     */
    public function hasDescriptionForAdmin(){
      return $this->_has(11);
    }
    
    /**
     * Clear <description_for_admin> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearDescriptionForAdmin(){
      return $this->_clear(11);
    }
    
    /**
     * Get <description_for_admin> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDescriptionForAdmin(){
      return $this->_get(11);
    }
    
    /**
     * Set <description_for_admin> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setDescriptionForAdmin(\dstore\values\stringValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <description_for_admin_null> has a value
     *
     * @return boolean
     */
    public function hasDescriptionForAdminNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <description_for_admin_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function clearDescriptionForAdminNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <description_for_admin_null> value
     *
     * @return boolean
     */
    public function getDescriptionForAdminNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <description_for_admin_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonCharacs_Ad\Parameters
     */
    public function setDescriptionForAdminNull( $value){
      return $this->_set(1011, $value);
    }
  }
}

